<?php
require __DIR__ . '/../functions/mysql.php';
require __DIR__ . '/abstrnews.php';

class News extends Article
{
     function getAllNews(){
        $resource = new Mysql();
        $sql = "SELECT * FROM news";
        return $resource->getDataFromDB($sql);
    }
//
//    public  function addNewsToDB()
//    {
//
//    }
//
//    public function getOneNews()
//    {
//
//    }
//
//    public function updateNews()
//    {
//
//    }

}