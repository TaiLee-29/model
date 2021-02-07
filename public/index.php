<?php
require_once '../vendor/autoload.php';
$user = new \Hillel\user();
$us = \Hillel\model::find(1);

$user->setId(1);
$user->setName('John1');
$user->setEmail('some1@gmail.com');

$user->save(1);
var_dump($user);
$user->update();
$result2 = $user->delete();
var_dump($result2);
var_dump(\Hillel\user::find(1));
$user1 = new \Hillel\user();
$user1->setId(2);
$user1->setName('John2');
$user1->setEmail('some2@gmail.com');
$result3 = $user->save(2);
var_dump($result3);







?>