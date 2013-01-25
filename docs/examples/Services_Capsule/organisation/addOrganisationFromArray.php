<?php
set_include_path(get_include_path() . PATH_SEPARATOR . (dirname(dirname(dirname(dirname(dirname(__FILE__)))))));
require_once 'Services/Capsule.php';
include '../config.php';

$organisation = array();
$organisation['name'] = 'New Test Organisation2';
$organisation['about'] = 'Something about this organisation...';
$organisation['contacts'] = array();

//write a script to detect the type of element we are trying to add
$organisation['contacts']['address'] = array('street'=>'A Street Somewhere','zip'=>'AB1 1AB','type'=>'Office');
$organisation['contacts']['email'] = array('emailAddress'=>'test@newtestorganisation.com','type'=>'Work');

$organisation['contacts']['phone'] = array();
$organisation['contacts']['phone'][] = array('phoneNumber'=>'01234 567 890','type'=>'Work');
$organisation['contacts']['phone'][] = array('phoneNumber'=>'01234 987 654','type'=>'Fax');

$organisation['contacts']['website'] = array();
$organisation['contacts']['website'][] = array('webService'=>'URL','webAddress'=>'newtestorganisation.com','type'=>'Work');
$organisation['contacts']['website'][] = array('webService'=>'TWITTER','webAddress'=>'BBCBreaking','type'=>'Work');

try {
    $capsule = new Services_Capsule($config['appName'], $config['token'], 'XML');
    $res = $capsule->organisation->add($organisation);
} catch (Services_Capsule_Exception $e) {
    print_r($e);
    die();
}

var_dump($res); die();
