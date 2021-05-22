<?php

include 'Tournament.php';
include 'Participant.php';

class Challonge
{
    /* API Instance Variables */
    protected $baseUrl = 'https://api.challonge.com/v1/';
    protected $api_key;
    protected $method;
    protected $args;
    protected $rawData;
    protected $headers;
    protected $responseData;
    protected $responseCode;

    /* HTTP Request Types */
    const HTTP_GET     = 'GET';
    const HTTP_POST    = 'POST';
    const HTTP_PUT     = 'PUT';
    const HTTP_DELETE  = 'DELETE';

    /* HTTP Error Codes */
    const HTTP_CODE_500 = 500;
    const HTTP_CODE_422 = 422;
    const HTTP_CODE_406 = 406;
    const HTTP_CODE_404 = 404;
    const HTTP_CODE_401 = 401;
    const HTTP_CODE_400 = 400;

    public function __construct(string $api_key)
    {
        $this->api_key = $api_key;
    }

    public function request(string $method, string $url, array $data = null)
    {
        $this->method = $method;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_USERPWD, $this->api_key);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_URL, $url);

        switch ($method) {
            case self::HTTP_GET:
                break;
            case self::HTTP_POST:
                curl_setopt($ch, CURLOPT_POST, true);
                if(!is_null($data))
                {
                    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data) );
                }
                break;
            case self::HTTP_PUT:
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, self::HTTP_PUT);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data) );
                break;
            case self::HTTP_DELETE:
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, self::HTTP_DELETE);
                break;
            default:
                throw new \Exception("Error Processing Request", 1);
                break;
        }

        $raw = curl_exec($ch);
        $size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $headers = $this->parseHeaders(substr($raw, 0, $size));
        $responseData = substr($raw, $size);
        $responseCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);


        $curl_errno = curl_errno($ch);

        if ($curl_errno  !== 0)
		{
			$curl_error = curl_error($ch);
			throw new Exception('cURL error ocurred: ' . $curl_error, $curl_errno);
		}

        curl_close($ch);

        $this->rawData = $raw;
        $this->responseData = json_decode($responseData, true);
        $this->responseCode = $responseCode;
        $this->headers = $headers;

        switch ($this->responseCode) {
            case self::HTTP_CODE_500:
                throw new Exception("Internal Server Err.");
                break;
            case self::HTTP_CODE_422:
                throw new Exception("Validation Err." . implode(', ', $this->responseData['errors']));
                break;
            case self::HTTP_CODE_406:
                throw new Exception("Unsupported Format.");
                break;
            case self::HTTP_CODE_404:
                throw new Exception("Resource Not Found.");
                break;
            case self::HTTP_CODE_401:
                throw new Exception("Unauthorized.");
                break;
            case self::HTTP_CODE_400:
                throw new Exception("Bad Request.");
                break;
        }

    }

    public function parseHeaders($headers)
	{
		$headersArr = array();
		foreach (explode(PHP_EOL, $headers) as $header)
		{
			if (strpos($header, ':'))
			{
				$h = explode(": ", $header);
				$headersArr[$h[0]] = @$h[1];
			}
			elseif (strlen($header))
            {
                $headersArr[] = $header;
            }
		}

		return $headersArr;
	}

    public function getRawData()
    {
        return $this->rawData;
    }

    public function getResponseData()
    {
        return $this->responseData;
    }

    /* Tournament API Calls */

    public function getAllTournaments()
    {
        $method = self::HTTP_GET;
        $url    = $this->baseUrl . "tournaments.json";

        $tournaments = array();
        $this->request($method, $url);
        foreach ($this->responseData as $t => $value) {
            array_push($tournaments, new Tournament($value['tournament']));
        }

        return $tournaments;
    }

    public function getTournaments($data)
    {
        $method = self::HTTP_GET;
        $url    = $this->baseUrl . "tournaments.json?";

        foreach ($data as $key => $value) {
            $url .= $key.'='.$value.'&';
        }

        $url = substr($url, 0,strlen($url)-1);
        $this->request($method, $url);

        $tournaments = array();
        foreach ($this->responseData as $t => $value) {
            array_push($tournaments, new Tournament($value['tournament']));
        }

        return $tournaments;
    }

    public function getTournament($data)
    {
        $method = self::HTTP_GET;
        $url    = $this->baseUrl . "tournaments/$data.json";
        $this->request($method, $url);
        return new Tournament($this->responseData['tournament']);
    }

    public function createTournament($data)
    {
        $method = self::HTTP_POST;
        $url    = $this->baseUrl . "tournaments.json";

        $this->request($method, $url, $data);
        return new Tournament($this->responseData['tournament']);
    }

    public function updateTournament($data)
    {
        $method = self::HTTP_PUT;
        $url    = $this->baseUrl . "tournaments/{$data['tid']}.json";
        $this->request($method, $url, $data['params']);
        return new Tournament($this->responseData['tournament']);
    }

    public function destroyTournament($data)
    {
        $method = self::HTTP_DELETE;
        $url    = $this->baseUrl . "tournaments/$data.json";
        $this->request($method, $url);
        return 1;
    }

    public function processCheckins($data)
    {
        $method = self::HTTP_POST;
        $url    = $this->baseUrl . "tournaments/{$data['tid']}/process_check_ins.json";
        $this->request($method, $url, $data['params']);
        return new Tournament($this->responseData['tournament']);
    }

    public function abortCheckins($data)
    {
        $method = self::HTTP_POST;
        $url    = $this->baseUrl . "tournaments/{$data['tid']}/abort_check_in.json";
        $this->request($method, $url, $data['params']);
        return new Tournament($this->responseData['tournament']);
    }

    public function startTournament($data)
    {
        $method = self::HTTP_POST;
        $url    = $this->baseUrl . "tournaments/{$data['tid']}/start.json";
        $this->request($method, $url, $data['params']);
        return new Tournament($this->responseData['tournament']);
    }

    public function finalizeTournament($data)
    {
        $method = self::HTTP_POST;
        $url    = $this->baseUrl . "tournaments/{$data['tid']}/finalize.json";
        $this->request($method, $url, $data['params']);
        return new Tournament($this->responseData['tournament']);
    }

    public function resetTournament($data)
    {
        $method = self::HTTP_POST;
        $url    = $this->baseUrl . "tournaments/{$data['tid']}/reset.json";
        $this->request($method, $url, $data['params']);
        return new Tournament($this->responseData['tournament']);
    }

    public function openForPredictions($data)
    {
        $method = self::HTTP_POST;
        $url    = $this->baseUrl . "tournaments/{$data['tid']}/open_for_predictions.json";
        $this->request($method, $url, $data['params']);
        return new Tournament($this->responseData['tournament']);
    }

    /* Participant API Calls */
    public function getAllParticipants($data)
    {
        $method = self::HTTP_GET;
        $url = $this->baseUrl . "tournaments/{$data['tid']}/participants.json";
        $this->request($method, $url);

        $participants = array();
        foreach ($this->responseData as $t => $value) {
            array_push($participants, new Participant($value['participant']));
        }
        return $participants;
    }

    public function getParticpant($data)
    {
        $method = self::HTTP_GET;
        $url = $this->baseUrl . "tournaments/{$data['tid']}/participants/{$data['pid']}.json";
        $this->request($method, $url);
        return new Participant($this->responseData['participant']);
    }

    public function createParticipant($data)
    {
        $method = self::HTTP_POST;
        $url = $this->baseUrl . "tournaments/{$data['tid']}/participants.json";
        $this->request($method, $url, $data['params']);
        return new Participant($this->responseData['participant']);
    }

    public function createBulkParticipant($data)
    {
        $method = self::HTTP_POST;
        $url = $this->baseUrl . "tournaments/{$data['tid']}/participants/bulk_add.json";
        $this->request($method, $url, $data['params']);

        $participants = array();
        foreach ($this->responseData as $t => $value) {
            array_push($participants, new Participant($value['participant']));
        }
        return $participants;
    }

    public function updateParticpant($data)
    {
        $method = self::HTTP_PUT;
        $url = $this->baseUrl . "tournaments/{$data['tid']}/participants/{$data['pid']}.json";
        $this->request($method, $url, $data['params']);
        return new Participant($this->responseData['particpant']);
    }

    public function checkinParticpant($data)
    {
        $method = self::HTTP_POST;
        $url = $this->baseUrl . "tournaments/{$data['tid']}/participants/{$data['pid']}/check_in.json";
        $this->request($method, $url);
        return new Participant($this->responseData['particpant']);
    }

    public function undoCheckinParticpant($data)
    {
        $method = self::HTTP_POST;
        $url = $this->baseUrl . "tournaments/{$data['tid']}/participants/{$data['pid']}/undo_check_in.json";
        $this->request($method, $url);
        return new Participant($this->responseData['particpant']);
    }

    public function destroyParticpant($data)
    {
        $method = self::HTTP_DELETE;
        $url = $this->baseUrl . "tournaments/{$data['tid']}/participants/{$data['pid']}.json";
        $this->request($method, $url);
        return new Participant($this->responseData['particpant']);
    }

    public function clearParticpants($data)
    {
        $method = self::HTTP_DELETE;
        $url = $this->baseUrl . "tournaments/{$data['tid']}/participants/clear.json";
        $this->request($method, $url);
        return $this->responseData['message'];
    }

    public function randomizeParticipants($data)
    {
        $method = self::HTTP_POST;
        $url = $this->baseUrl . "tournaments/{$data['tid']}/participants/randomize.json";
        $this->request($method, $url);
    }

}


?>
