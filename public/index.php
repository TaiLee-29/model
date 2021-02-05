<?php
require_once '../vendor/autoload.php';
$user = new \Hillel\user();
$us = \Hillel\model::find(1);
var_dump($user);

$user->setName('John');
$result = $user->save(1);
var_dump($result);

$result = $user->delete();
var_dump($result);
var_dump(\Hillel\user::find(1));
$user1 = new \Hillel\user();
$user1->setName('John');
$user1->setEmail('some@gmail.com');
$result = $user->save(2);
var_dump($result);







?>