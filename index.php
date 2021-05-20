<?php
include 'Challonge.php';


$c = new Challonge("agulbs:z7zoLhwd3jxcEeDT2yiNpH6oI5Akksq5UX1XFODr");
$args = array(
    "url"=>"tournaments",
    "contentType"=>".json"
);

$c->request("GET", $args);
$data = $c->getData();
print_r($data);

?>
