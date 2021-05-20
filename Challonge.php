<?php

class Challonge
{
    protected $baseUrl = 'https://api.challonge.com/v1/';
    protected $api_key;
    protected $method;
    protected $args;
    protected $rawData;
    protected $requestData;

    const GET  = 'GET';
    const POST = 'POST';

    public function __construct(string $api_key)
    {
        $this->api_key = $api_key;
    }

    public function request($method, $args)
    {
        $this->method = $method;
        $this->args = $args;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_USERPWD, $this->api_key);

        switch ($method) {
            case self::GET:
                curl_setopt($ch, CURLOPT_URL, $this->baseUrl . $args['url'] . $args['contentType']);
                break;
            case self::POST:
                curl_setopt($ch, CURLOPT_URL, $this->url);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($this->post_data));
                break;
            default:
                throw new \Exception("Error Processing Request", 1);
                break;
        }

        $this->rawData = curl_exec($ch);
        $size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        curl_close($ch);


        $response = substr($this->rawData, $size);
        $this->requestData = json_decode($response, true);
    }

    public function getRawData()
    {
        return $this->rawData;
    }

    public function getData()
    {
        return $this->requestData;
    }


}


?>
