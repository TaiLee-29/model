<?php
require_once '../vendor/autoload.php';
$user = new \Hillel\user();
$us = \Hillel\model::find(1);
var_dump($user);

$user->setName('John');
$result1 = $user->save(1);
var_dump($result1);

$result2 = $user->delete();
var_dump($result2);
var_dump(\Hillel\user::find(1));
$user1 = new \Hillel\user();
$user1->setName('John');
$user1->setEmail('some@gmail.com');
$result3 = $user->save(2);
var_dump($result3);







?>