<?php
include 'Challonge.php';

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
$json = json_decode(file_get_contents('php://input'), true);

$c = new Challonge("agulbs:z7zoLhwd3jxcEeDT2yiNpH6oI5Akksq5UX1XFODr");

switch ($json['proc']) {
    case 'getAllTournaments':
        $tournaments = $c->getAllTournaments();
        echo json_encode($tournaments);
        break;
    case 'createTournament':
        $tournament = $c->createTournament($json['data']);
        echo json_encode($tournament);
        break;
    case 'updateTournament':
        $tournament = $c->updateTournament($json['data']);
        echo json_encode($tournament);
        break;
    case 'deleteTournament':
        $tournament = $c->destroyTournament($json['data']);
        echo json_encode($tournament);
        break;
    case 'processCheckins':
        $tournament = $c->processCheckins($json['data']);
        echo json_encode($tournament);
        break;
    case 'abortCheckins':
        $tournament = $c->abortCheckins($json['data']);
        echo json_encode($tournament);
        break;
    case 'startTournament':
        $tournament = $c->startTournament($json['data']);
        echo json_encode($tournament);
        break;
    case 'finalizeTournament':
        $tournament = $c->finalizeTournament($json['data']);
        echo json_encode($tournament);
        break;
    case 'resetTournament':
        $tournament = $c->resetTournament($json['data']);
        echo json_encode($tournament);
        break;
    case 'openForPredictions':
        $tournament = $c->openForPredictions($json['data']);
        echo json_encode($tournament);
        break;
    default:
        echo json_encode(array("ERR"=>"Method does not exist."));
        break;
}


?>
