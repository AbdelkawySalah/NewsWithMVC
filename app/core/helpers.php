<?php
namespace MVC\core;

class helpers{
    public static function redirect($path){
        header("LOCATION: http://news.test/".$path);
    }

  
}