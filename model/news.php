<?php
require __DIR__ . '/../functions/mysql.php';

class News extends AbstractNews
{
    function getAllNews()
    {
        $resource = new Mysql();
        $sql = "SELECT * FROM news";
        return $resource->getDataFromDB($sql);
    }

    function addNewsToDB()
    {
        // TODO: Implement addNewsToDB() method.
    }

    function getOneNews()
    {
        // TODO: Implement getOneNews() method.
    }

    function updateNews()
    {
        // TODO: Implement updateNews() method.
    }

}