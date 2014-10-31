<?php
require_once __DIR__.'/aclass.AUser.php';

class User{
    public $name;
    public $login;
    public $password;

    function __construct($n, $l, $p){
        $this->name=$n;
        $this->login=$l;
        $this->password=$p;
    }

    function showInfo(){
        echo '<br>Name: '.$this->name;
        echo '<br>login: '.$this->login;
        echo '<br>Password: '.$this->password;
    }

}
?>