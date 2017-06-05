<?php

require __DIR__ . '/model/news.php';

$news = new News();
$result = $news->getAllNews();

include __DIR__ . '/view/index.php';