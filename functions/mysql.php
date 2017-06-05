<?php

class Mysql
{
    private $host;
    private $root;
    private $password;
    private $dataBase;

    function  __construct($host = 'localhost',$root = 'root',$password = 'death9393',$database ='php12')
    {
        $this->host = $host;
        $this->root = $root;
        $this->password = $password;
        $this->dataBase= $database;
    }

    private function connectToDB()
    {
        return mysqli_connect($this->host,$this->root,$this->password,$this->dataBase);
    }

    public function insertIntoDB($sql)
    {
        $resource = $this->connectToDB();
        mysqli_set_charset($resource,"utf-8");
        mysqli_connect($resource,$sql);
    }
    public function getDataFromDB($sql)
    {
        $data =[];
        $resource = $this->connectToDB();
        $result = mysqli_query($resource,$sql);

        while (NULL !== $row = mysqli_fetch_assoc($result))
        {
            $data[] = $row;
        }
        return $data;
    }
}
