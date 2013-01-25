<?php
set_include_path(get_include_path() . PATH_SEPARATOR . (dirname(dirname(dirname(dirname(dirname(__FILE__)))))));
require_once 'Services/Capsule.php';
include '../config.php';

$org = new stdClass();

$org->name = 'New Test Organisation3';
$org->about = 'Something about this organisation...';

//add an address
$org->contacts->address->street = 'A Street Somewhere';
$org->contacts->address->zip = 'AB1 1AB';
$org->contacts->address->type = 'Office';

$org->contacts->email->emailAddress='test@newtestorganisation.com';
$org->contacts->email->type='Work';     

$phone = array();
$phone1 = new stdClass();
$phone1->phoneNumber = '01234 567 890';
$phone1->type = 'Work';
$phone[]=$phone1;
$phone2 = new stdClass();
$phone2->phoneNumber = '01234 987 654';
$phone2->type = 'Fax';
$phone[]=$phone2;
$org->contacts->phone=$phone;

$web = array();
$web1 = new stdClass();
$web1->webAddress = 'newtestorganisation.com';
$web1->webService = 'URL';
$web1->type = 'Work';
$web[]=$web1;
$web2 = new stdClass();
$web2->webAddress = 'BBCBreaking';
$web2->webService = 'TWITTER';
$web2->type = 'Work';
$web[]=$web2;
$org->contacts->website=$web;

try {
    $capsule = new Services_Capsule($config['appName'], $config['token'], 'XML');
    $res = $capsule->organisation->add($org);
} catch (Services_Capsule_Exception $e) {
    print_r($e);
    die();
}

var_dump($res); die();
