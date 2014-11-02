<?php
<<<<<<< HEAD
require_once __DIR__.'/class.User.php';
require_once __DIR__.'/class.SuperUser.php';
=======
require_once __DIR__.'/Autoloader.php';

use Core\SuperUser;
use Core\User;

$user1 = new User('Vasya','Vasya','666999');
$user1->showInfo();

$admin = new SuperUser('admin','root','root','admin');
$admin->showInfo();
>>>>>>> dev
?>