<?php
require_once __DIR__.'/class.User.php';
require_once __DIR__.'/class.SuperUser.php';

$user1 = new User('Vasya','Vasya','666999');
$user1->showInfo();

$admin = new SuperUser('admin','root','root','admin');
$admin->showInfo();
print_r($admin->getInfo());
?>