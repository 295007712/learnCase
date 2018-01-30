<?php
/**
 * User: czz
 * DateTime: 2018/1/30 11:12
 * Description:
 * Tips:
 */

include_once __DIR__ . "/autoload.php";

$myClass = new \MyNamespace\MyClass();
$myClass->doSomething();

$member = new \MyNamespace\Member\Member();
$member->getMemberList();

$mailler = new \MyNamespace\Email\Mailler();
$mailler->sendMail();