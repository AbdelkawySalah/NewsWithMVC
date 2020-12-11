<?php
namespace MVC\models;
use MVC\core\model;
class user extends  model{
    public function GETALLDATA(){
        $data=model::db()->run("select * from users")->fetchAll();
       return $data;
    }

    public function GETUSER($email,$password){
        $data=model::db()->row("select * from users where email=? && password=? ",[$email,$password]);
        return $data;
    }
}
