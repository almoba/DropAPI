<?php

session_start();

require __DIR__ . '../../dropbox-sdk/Dropbox/autoload.php';

$key='rmrjaa7vqddjvv7';
$secret='rm8xiimd6320ldw';
$appName='AdminCtin/1.0';

$appInfo=new Dropbox\AppInfo($key,$secret);

//Store CSRF token
$token=new Dropbox\ArrayEntryStore($_SESSION,'dropbox-auth-csrf-token');

//Define auth details
$webAuth=new Dropbox\WebAuth($appInfo,$appName,'http://localhost/pruebadrop/dropbox_finish.php',$token);




 ?>
