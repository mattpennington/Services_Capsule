<?php
set_include_path(get_include_path() . PATH_SEPARATOR . (dirname(dirname(dirname(dirname(dirname(__FILE__)))))));
require_once 'Services/Capsule.php';
include '../config.php';

$customFields = array();
$customFields['customField'] = array();
//adding/updating custom field
$customFields['customField'][] = array('label'=>'[some custom field name]','text' => 'some text if your custom field is a text field, otherwise use date or boolean as appropriate');
//deleting a custom field
$customFields['customField'][] = array('label'=>'[some custom field name]');


try {
    $capsule = new Services_Capsule($config['appName'], $config['token']);
    $res = $capsule->party->customfields->set($config['partyId'],$customFields);
} catch (Services_Capsule_Exception $e) {
    print_r($e);
    die();
}

var_dump($res); die();