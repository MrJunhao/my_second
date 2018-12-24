<?php
require_once __DIR__ . '/vendor/autoload.php';
use Workerman\Worker;

$http = new Worker('http://0.0.0.0:9501');

$http->count=4;
$http->onMessage = function($c,$data){
	$c->send('Hello World');
};
Worker::runAll();
