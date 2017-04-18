<?php
require_once('libraries/Page.php');

$current['menu'] 	= isset($_GET['menu']) && !empty($_GET['menu']) ? $_GET['menu'] : "";
$current['cat'] 	= isset($_GET['cat']) && !empty($_GET['cat']) ? $_GET['cat'] : "";
$current['game'] 	= isset($_GET['game']) && !empty($_GET['game']) ? $_GET['game'] : "";

$page = new Page($current);
$page->setTitle('Home');
$page->startBody();

if(!empty($current['cat']) && !empty($current['game'])) {
	echo $page->getGameDetails($current['cat'], $current['game']);
} else if(!empty($current['cat']) || empty($current['menu']) ){
	echo $page->getListGames($current['cat']);
} else {
	echo $current['menu'] ;
}

$page->endBody();
echo $page->render('templates/template.php');