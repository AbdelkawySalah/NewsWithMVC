<?php
namespace MVC\controllers;
use MVC\core\controller;
use MVC\core\session;
use MVC\models\category;
use MVC\core\helpers;
class admincategorycontroller extends controller{
   public $user_data;
    public function __construct(){
        Session::start();
        $this->user_data=Session::Get('user');
        if(empty($this->user_data)){
            echo 'no acessq';
            die;
        }
        
    }
   public function index(){
     $category=new category();
     $data=$category->getallcategory();
// var_dump($data);die;
   
       $this->view('adminback\category',['title'=>'admin','data'=>$data]);
    //    $this->view('home\index',['title'=>$titile,'h1'=>$h1]);

   }

   public function delete($id){
    //    print_r($id);die;
       $category=new category();
       $date=$category->deletecategry($id);
    //    if($data==1){
           helpers::redirect('admincategory/index');
    //    }
   }

  public function add(){
       $this->view('adminback\addcategory',['title'=>'admin']);
  }

  public function postadd(){

      $img=$_FILES['img'];
    //   var_dump($img);die;
    move_uploaded_file($img['tmp_name'],'images/'.$img['name']);
    //  print_r($_POST);die;
    $category=new category();
    $data=['name'=>$_POST['categoryname'],'icon'=>$_POST['icon'],'linkname'=>$_POST['linkname'],'user_id'=>$this->user_data->id,'img'=>$img['name']];
    $date=$category->addcategory($data);
    if($data){
        helpers::redirect('admincategory/index');

    }


  }

   public function update($id){
    //    print_r ($id);die;
    $category=new category();
    $data=$category->getcategorybyid($id);
    // print_r($data);die;
    $this->view('adminback/‏updatecategory',['data'=>$data]);
   }

   public function postupdate($data){

    
    // $img=$_FILES['img'];
    //   var_dump($img);die;
    // move_uploaded_file($img['tmp_name'],'images/'.$img['name']);
    //  print_r($_POST);die;
    if(!empty($_FILES['img']['name'])){
        $img=$_FILES['img'];
        move_uploaded_file($img['tmp_name'],'images/'.$img['name']);
        $data=['name'=>$_POST['categoryname'],'icon'=>$_POST['icon'],'linkname'=>$_POST['linkname'],'user_id'=>$this->user_data->id,'img'=>$img['name']];
    }else{
        $data=['name'=>$_POST['categoryname'],'icon'=>$_POST['icon'],'linkname'=>$_POST['linkname'],'user_id'=>$this->user_data->id];
      }
    $id=['id'=>$_POST[id]];
    $category=new category();
    $date=$category->updatecategory($data,$id);
    if($data){
        helpers::redirect('admincategory/index');

    }

   }

}