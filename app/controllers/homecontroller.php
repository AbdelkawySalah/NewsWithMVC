<?php
namespace MVC\controllers;
use MVC\core\controller;
use MVC\models\category;
use MVC\models\articles;
class homecontroller extends controller{
   public $category;
//    public $articles;
   public $data;
    public function __construct()
    {
            $this->category=new category();
   }
        public function index(){
       $titile='HomePage';
       $h1="hello";
    //    $category=new category();
          // for show navbar
       $data=$this->category->getallcategory();
    //    $this->articles=new articles();
    $articles=new articles();
    $alldata=$articles->getallarticles();
       $this->view('home\index',['title'=>$titile,'h1'=>$h1,'data'=>$data,'alldata'=>$alldata]);
   }

   public function details($id){
      // for show navbar
      $data=$this->category->getallcategory();

         $articles=new articles();
         $datadet=$articles->getArticlebyid($id);
         // print_r($datadet);die;
         // $data->article_Title;
         $this->view('home\details',['title'=>$datadet->article_Title,'data'=>$data,'datadet'=>$datadet]);
   }
   public function sports(){
    $articles=new articles();
    $data1=$articles->getsportsarticle();
    $data=$this->category->getallcategory();
    $this->view('home\sports',['title'=>'sports','dataspor'=>$data1,'data'=>$data]);
}
public function Socitey(){
   $articles=new articles();
   $data1=$articles->getsocityarticles();
   $data=$this->category->getallcategory();
   $this->view('home\Socitey',['title'=>'Socitey','datasocity'=>$data1,'data'=>$data]);
}

}