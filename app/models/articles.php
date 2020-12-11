<?php
namespace MVC\models;
use MVC\core\model;
class articles extends  model{
    public function getallarticles(){
        $data=model::db()->run("select articles.id,articles.article_Title,
        articles.article_shortdec,articles.article_Details,articles.image,
        articles.category_id,articles.user_id,category.name,users.email
         from articles
         inner join  category on articles.category_id=category.id
         inner join users on articles.user_id=users.id
        ")->fetchAll();
       return $data;
    }

    public function getsportsarticle(){
        $data=model::db()->run("select articles.id,articles.article_Title,
        articles.article_shortdec,articles.article_Details,articles.image,
        articles.category_id,articles.user_id,category.name,users.email
         from articles
         inner join  category on articles.category_id=category.id
         inner join users on articles.user_id=users.id
          where articles.category_id=27")->fetchAll();
       return $data;
    }

    public function getsocityarticles(){
        $data=model::db()->run("select articles.id,articles.article_Title,
        articles.article_shortdec,articles.article_Details,articles.image,
        articles.category_id,articles.user_id,category.name,users.email
         from articles
         inner join  category on articles.category_id=category.id
         inner join users on articles.user_id=users.id  where articles.category_id=28
        ")->fetchAll();
       return $data;
    }

    public function getArticlebyid($id){
        // $data=model::db()->run("select * from category where id=?",$id)->fetch();
        // or this code 
        $data=model::db()->row("select * from articles where id=?",$id);
        // var_dump($data);die;
       return $data;
    }
    public function deletearticle($id){
        $data=model::db()->run("delete  from articles where id=?",$id);

        // $datas=model::db()->delete("articles",[$id]);

        return $data;
    }

    public function addArticle($data){
        $data=model::db()->insert("articles",$data);
        return $data;
    }

    public function updatearticle($data,$id){
        $data=model::db()->update("articles",$data,$id);
        return $data;


    }
   
}
