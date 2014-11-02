<?php
namespace Core;
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/ISuperUser.php';
class SuperUser extends User implements ISuperUser{
    public $role;

    function __construct($n, $l, $p, $r){
        parent::__construct($n, $l, $p);
        $this->role=$r;
        }

    function showInfo(){
            parent::showInfo();
            echo '<br>role: '.$this->role;
    }
    function getInfo(){
            $arr = array();
            foreach($this as $k=>$v)
                $arr[$k]=$v;
            return $arr;
    }
}
?>