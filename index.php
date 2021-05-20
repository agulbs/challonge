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
// $arr = array('tid'=> '9826277', 'params' => array('description'=>"firstputrq boy") );
// $tournament = $c->updateTournament($arr);
// echo $tournament->getDescription();

// delete a tournament
// $tournament = $c->destroyTournament("k2powvuj");
// echo $tournament->getDescription();

// process chekins
// $arr = array('tid'=>'9828735', 'params'=>array('include_participants'=>1,'include_matches'=>1));
// $tournament = $c->processCheckins($arr);
// print_r($tournament);

// abort checkins
// $arr = array('tid'=>'9828735', 'params'=>array('include_participants'=>1,'include_matches'=>1));
// $tournament = $c->abortCheckins($arr);

// start tournament
// $arr = array('tid'=>'9826277', 'params'=>array('include_participants'=>1,'include_matches'=>1));
// $tournament = $c->abortCheckins($arr);

// get all participants
// $participant = $c->getAllParticipants(array('tid'=>'9826277'));
// print_r($participant);

// get single participant
// $participant = $c->getParticpant(array('tid'=>'9826277', 'pid'=>'146941759'));
// print_r($participant);

// create participant
// $arr = array('tid'=> '9828735', 'params' => array('name'=>"eeeeee", 'challonge_username'=>"moneeeeketychollanegeeee") );
// $participant = $c->createParticipant($arr);
// echo $participant->getName();

// bulk create participant
// $arr = array(
//     'tid'=>'9828735',
//     'params'=> array(
//         'participants' => array(
//             array('name'=>"fjakslfjasklfjrrwfeewraskldd;fjlskfk"),
//             array('name'=>"oneman"),
//             array('name'=>"twoamn"),
//             array('name'=>"threeman"),
//             array('name'=>"four"),
//             array('name'=>"iamhere"),
//             array('name'=>"forthedoor")
//         )
//     )
// );
// $participant = $c->createBulkParticipant($arr);
// print_r($participant);

// update particpant data
// $arr = array('tid'=>'9826277', 'pid'=>'146941759', 'params'=>array('name'=>'fuckboy'));
// $participant = $c->createParticipant($arr);
// print_r($participant);

// checkin participant
// $arr = array('tid'=>'9828735', 'pid'=>'146946593');
// $participant = $c->checkinParticpant($arr);
// print_r($participant);

// undo checkin participant
// $arr = array('tid'=>'9828122', 'pid'=>'146945570');
// $participant = $c->undoCheckinParticpant($arr);
// print_r($participant);

// delete participant
// $arr = array('tid'=>'9828735', 'pid'=>'146945570');
// $participant = $c->destroyParticpant($arr);
// print_r($participant);

// clear all participants
// $arr = array('tid'=>'9828735');
// $message = $c->clearParticpants($arr);
// echo "$message\n";

// randomize tournimant participant
// $arr = array('tid'=>'9828735');
// $c->randomizeParticipants($arr);


?>
