<?php
session_start();
require __DIR__ . '/../model/news.php';

if (!empty($_POST))
{
    $data=[];

    if (empty($_POST['title']) || empty($_POST['text']) || empty($_POST['author']))
    {
        $_SESSION['error'] = 'Одно из полей не заполенено';
        header('Location: /view/add.php');
    }

    if (!empty($_POST['title']))
    {
        $data['title'] = $_POST['title'] ;
    }
    if (!empty($_POST['text']))
    {
        $data['text'] = $_POST['text'];
    }
    if (!empty($_POST['author']))
    {
        $data['author']  = $_POST['author'];
    }

    if (isset($data['title']) && isset($data['text']) && isset($data['author']))
    {
        $resource = new News();
        $resource->addNewsToDB($data);
        header('Location: /');
    }
}