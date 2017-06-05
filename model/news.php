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

    public  function addNewsToDB($data)
    {
        $sql ="INSERT INTO news(title,text,author) VALUES ('".$data['title']."','".$data['text']."','".$data['author']."')";
        $resource = new Mysql();
        $resource->insertIntoDB($sql);
    }
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