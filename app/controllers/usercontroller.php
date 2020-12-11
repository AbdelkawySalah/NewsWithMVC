<?php
namespace MVC\controllers;
use MVC\core\controller;
use MVC\core\session;
use MVC\models\user;
use MVC\core\helpers;
use GUMP;

class usercontroller extends controller{
    
    public function __construct(){
        
        Session::start();
        // $user_data=Session::Get('user');
        // if(empty($user_data)){
        //     echo 'no acess';
        //     die;
        // }
    }
    public function index(){
        $title='homeindexy';
        $this->view("user/index",['title'=>$title,'h1'=>'abdelkawy4']);

    }

    public function login(){
         $this->view("home/login",['title'=>'login']);
    }

    public function postlogin(){

        $v=GUMP::is_valid($_POST,[
           'email'=>'required'
        ]);

        if($v==1){
            $user=new user();
            $data=$user->GetUser($_POST['email'],$_POST['password']);
            Session::Set('user',$data);
            helpers::redirect('adminpost/index');
        }
    }


}
