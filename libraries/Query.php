<?php
require_once('libraries/Database.php');

class Query extends Database
{

	function __construct()
	{
		parent::__construct();
	}

	function getListCategories()
	{
		return Database::query("SELECT * FROM categories WHERE is_active = 'Y' ORDER BY ordering");
	}

	function getListGames($currentCategory="")
	{
		$catFilter = '';
		if(!empty($currentCategory)) {
			$catFilter = " AND b.category_slug = '".$currentCategory."' ";
		}

		return Database::query("SELECT a.*, b.* 
									FROM games a
									LEFT JOIN categories b ON a.category_id = b.id AND b.is_active = 'Y'
									WHERE a.is_active = 'Y' 
									".$catFilter." 
									ORDER BY a.ordering ");
	}

	function getGameDetails($currentCategory, $currentGame)
	{
		return Database::query("SELECT a.*, b.* 
									FROM games a
									LEFT JOIN categories b ON a.category_id = b.id AND b.is_active = 'Y'
									WHERE a.is_active = 'Y' 
									AND b.category_slug = '".$currentCategory."'
									AND a.game_slug = '".$currentGame."'
									ORDER BY a.ordering ");

	}

	function getGameLainnya($currentCategory, $currentGame)
	{
		return Database::query("SELECT a.*, b.* 
									FROM games a
									LEFT JOIN categories b ON a.category_id = b.id AND b.is_active = 'Y'
									WHERE a.is_active = 'Y' 
									AND b.category_slug = '".$currentCategory."'
									AND a.game_slug != '".$currentGame."'
									ORDER BY a.ordering ");

	}

}