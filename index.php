<?php
include 'Challonge.php';
// include 'Tournament.php'

$c = new Challonge("agulbs:z7zoLhwd3jxcEeDT2yiNpH6oI5Akksq5UX1XFODr");

// creat a tournament
// $tournament = $c->createTournament(array('name' => "tt man"));
// echo $tournament->getName();

// get all tournaments
// $tournaments = $c->getAllTournaments();
// print_r($tournaments);

// get tournaments with params
// $tournaments = $c->getTournaments(array('created_before'=>'2021-05-20'));
// print_r($tournaments);

// get single tournament by id or url
// $tournament = $c->getTournament("k2powvuj");
// echo $tournament->getName();

// update fields of tournament
$arr = array('id' => '9826277', 'params' => array('description'=>"firstputrq boy") );
$tournament = $c->updateTournament($arr);
echo $tournament->getDescription();

// delete a tournament
// $tournament = $c->destroyTournament("k2powvuj");
// echo $tournament->getDescription();

// process chekins
// $arr = array('id'=>'9826277', 'params'=>array('include_participants'=>1,'include_matches'=>1));
// $tournament = $c->processCheckins($arr);
// print_r($tournament);

// abort checkins
// $arr = array('id'=>'9826277', 'params'=>array('include_participants'=>1,'include_matches'=>1));
// $tournament = $c->abortCheckins($arr);


// start tournament
// $arr = array('id'=>'9826277', 'params'=>array('include_participants'=>1,'include_matches'=>1));
// $tournament = $c->abortCheckins($arr);

?>
