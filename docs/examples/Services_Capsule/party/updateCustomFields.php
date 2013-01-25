<?php
set_include_path(get_include_path() . PATH_SEPARATOR . (dirname(dirname(dirname(dirname(dirname(__FILE__)))))));
require_once 'Services/Capsule.php';
include '../config.php';

$customFields = array();
$customFields['customField'] = array();
$customFields['customField'][] = array('label'=>'company_role_type','text' => 1);
//$customFields['customField'][] = array('label'=>'subcountry','text' => 1);
/*$customFields['subcountry'] = 1;
$customFields['opt_out_tel'] = 1;
$customFields['opt_out_fax'] = 1;
$customFields['opt_out_email'] = 1;
$customFields['pc_id'] = 123465;*/

try {
    $capsule = new Services_Capsule($config['appName'], $config['token']);
    $res = $capsule->party->customfields->set('35510433',$customFields);
} catch (Services_Capsule_Exception $e) {
    print_r($e);
    die();
}

var_dump($res); die();