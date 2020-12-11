<?php
namespace MVC\controllers;
use MVC\core\controller;
use MVC\core\session;
use MVC\models\articles;
use MVC\core\helpers;
class adminpostcontroller extends controller{
    public $articles;
    public $user_data;

    public function __construct(){
        Session::start();
        $this->user_data=Session::Get('user');
        if(empty($this->user_data)){
            echo 'no acessq';
            die;
        }
        $this->articles=new articles();
    }
   public function index(){
       $data=$this->articles->getallarticles();
       $this->view('adminback\articles',['title'=>'admin','data'=>$data]);
    //    $this->view('home\index',['title'=>$titile,'h1'=>$h1]);

   }

   public function delete($id){
    //    print_r($id);die;
    //    $articl2=new articles();
       $dataee=$this->articles->deletearticle($id);
    //    var_dump($dataee);die;
        helpers::redirect('adminpost\index');
   }

   public function add(){
    $this->view('adminback\addarticles',['title'=>'addarticles']);
   }


   public function postdata(){
    $img=$_FILES['image'];
    //   var_dump($img);die;
    move_uploaded_file($img['tmp_name'],'images/'.$img['name']);
    //  print_r($_POST);die;
    $data=['article_Title'=>$_POST['article_Title'],'article_shortdec'=>$_POST['article_shortdec'],'article_Details'=>$_POST['article_Details'],'category_id'=>$_POST['category_id'],'user_id'=>$this->user_data->id,'image'=>$img['name']];
    $date=$this->articles->addArticle($data);
    if($data){
        helpers::redirect('adminpost/index');
   }

}


public function update($id){
    $data=$this->articles->getArticlebyid($id);
    // print_r($data);die;
    // $this->view("adminback\updatearticle");
    $this->view('adminback\updatearticle',['title'=>'update article','data'=>$data]);
}


public function postupdate(){

    if(!empty($_FILES['image']['name'])){
        $img=$_FILES['image'];
        move_uploaded_file($img['tmp_name'],'images/'.$img['name']);
        $data=['article_Title'=>$_POST['article_Title'],'article_shortdec'=>$_POST['article_shortdec'],'article_Details'=>$_POST['article_Details'],'category_id'=>$_POST['category_id'],'user_id'=>$this->user_data->id,'image'=>$img['name']];
    }else{
        $data=['article_Title'=>$_POST['article_Title'],'article_shortdec'=>$_POST['article_shortdec'],'article_Details'=>$_POST['article_Details'],'category_id'=>$_POST['category_id'],'user_id'=>$this->user_data->id];
      }
    $id=['id'=>$_POST[id]];
    // $category=new category();
    $date=$this->articles->updatearticle($data,$id);
    if($data){
        helpers::redirect('adminpost/index');

    }

}




}