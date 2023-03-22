<?php

require_once('../vendor/autoload.php');

use CowSay\Cow;

$myCow = new Cow('Hello, Farm!');
$myCow->setTongue();
$myCow->setPoop('@@@@@@@@');

echo $myCow;