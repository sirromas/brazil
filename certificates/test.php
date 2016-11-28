<?php

set_time_limit(0);
error_reporting('all');

require_once $_SERVER['DOCUMENT_ROOT'] . '/custom/certificates/classes/Certificate.php';

$cert = new Certificate();
$userid = 50;
$courseid = 4;

$cert->create_user_certificate($userid, $courseid);
echo "It is me ...";