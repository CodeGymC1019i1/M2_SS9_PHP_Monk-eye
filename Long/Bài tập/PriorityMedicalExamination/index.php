<?php
include_once "Queue.php";

$queue = new QueuePatient();
$queue->enQueuePatient("Smith",5);
$queue->enQueuePatient("Jones",4);
$queue->enQueuePatient("Hai",3);
var_dump($queue->toString());
var_dump($queue->sizeOfQueue());
