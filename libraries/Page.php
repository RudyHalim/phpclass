<?php
require_once('libraries/Query.php');

class Page {
	private $title;
	private $stylesheets=array();
	private $javascripts=array();
	private $body;
	private $navigation;
	
	function Page($current)
	{
		$this->addCSS('css/main.css');
		$this->setNavigation($current);
	}
	
	function setTitle($title)
	{
		$this->title = $title;
	}
	
	function addCSS($path)
	{
		$this->stylesheets[] = $path;
	}
	
	function addJavascript($path)
	{
		$this->javascripts[] = $path;
	}
	
	function startBody()
	{
		ob_start();
	}
	
	function endBody()
	{
		$this->body = ob_get_clean();
	}
	
	function render($path)
	{
		ob_start();
		include($path);
		return ob_get_clean();
	}

	function setNavigation($current)
	{
		$arr_prenav = array(
							'/' => 'Home'
				);
		$arr_pascanav = array(
							'#log-in-popup' => 'Login'
				);

		$return = '';
		$return .= $this->addNavigationIn($current['menu'], $arr_prenav, true);
		$return .= $this->getListCategoryNav($current['cat']);
		$return .= $this->addNavigationIn($current['menu'], $arr_pascanav);

		$this->navigation = $return;
	}

	function addNavigationIn($currentCategory, $array, $default_selected = false)
	{
		$return = $active = '';
		foreach ($array as $link => $label) {
			// logic for active nav
			$active = !empty($currentCategory) && str_replace("/", "", $link) == $currentCategory ? "active" : ($default_selected && empty($currentCategory) && $active != "active"  ? "active" : "");

			// add class for login pop up
			$loginPopupClass = $link == "#log-in-popup" ? "login-popup" : "";

			// combine it all
			$return .= '<li class="menu-item menu-item-type-post_type menu-item-object-page '.$loginPopupClass.' '.$active.'"><a title="'.$label.'" href="'.$link.'">'.$label.'</a></li>';
		}
		return $return;
	}

	function getListCategoryNav($currentCategory)
	{
		$query = new Query;
		$menus = $query->getListCategories();

		$return = $active = '';
		foreach ($menus as $key => $menu) {
			$link_nav = '/artis/'.$menu['category_slug'].'';
			$active = !empty($currentCategory) && $menu['category_slug'] == $currentCategory ? "active" : "";			
			$return .= '<li class="menu-item menu-item-type-post_type menu-item-object-page '.$active.'"><a title="'.$menu['category_name'].'" href="'.$link_nav.'">'.$menu['category_name'].'</a></li>';
		}

		return $return;
	}

	function getListGames($currentCategory="")
	{
		$query = new Query;
		$games = $query->getListGames($currentCategory);


		if(sizeof($games) > 0) {
			
			$return = '
				<div class="block-content wpb_column vc_column_container vc_col-sm-8">
					<div class="vc_column-inner vc_custom_1453817740452">
						<div class="wpb_wrapper">
							<div class="vc_row wpb_row vc_inner vc_row-fluid category-posts-head">
							    <div class="container">
							        <div class="row">
			';
			foreach ($games as $key => $game) {
				$link_game = '/artis/'.$game['category_slug'].'/'.$game['game_slug'].'';
				$return .= '
					<div class="wpb_column vc_column_container vc_col-sm-6 paddingb30">
					    <div class="vc_column-inner ">
					        <div class="wpb_wrapper">
					            <div class="news-post image-post default-size">
					                <div class="thumb-wrap"> <img src="/images/'.$game['thumbnail'].'" alt="'.$game['title'].'"></div>
					                <div class="hover-box">
					                    <div class="inner-hover">
					                        <h2><a href="'.$link_game.'">'.$game['title'].'</a></h2>
					                        <ul class="post-tags">
					                            <li><i class="fa fa-thumb-tack "></i>'.$game['category_name'].'</li>
					                        </ul>
					                        <p>'.$game['short_desc'].'</p>
					                        <p style="text-align: center;"><button onclick="window.location.href=\''.$link_game.'\'">PLAY</button></p>
					                    </div>
					                </div>
					            </div>
					        </div>
					    </div>
					</div>
				';
			}
			$return .= '
							        </div>
							    </div>
							</div>
						</div>
					</div>
				</div>
			';
		} else {
			$return = '<div class="block-content wpb_column vc_column_container vc_col-sm-8"><h3>No content found yet</h3></div>';
		}

		return $return;
	}

	function getGameDetails($currentCategory, $currentGame)
	{
		$query = new Query;
		$detail = $query->getGameDetails($currentCategory, $currentGame);

		if(sizeof($detail) > 0) {

			$return = '
				<div class="col-sm-8">
				  	<div class="block-content">
						<div class="single-post-box">
						    <div class="title-post">
						        <h1>'.$detail[0]['title'].'</h1>
						    </div>
						    <div class="post-gallery">
						        <div class="bx-wrapper" style="max-width: 100%;">

						            <iframe src="'.$detail[0]['game_url'].'" width="100%"> </iframe>

						        </div>
						        <span class="image-caption">'.$detail[0]['short_desc'].'</span>
						    </div>
						    <div class="the-content">
						        <div class="vc_row wpb_row vc_row-fluid">
						            <div class="container">
						                <div class="row">
						                    <div class="wpb_column vc_column_container vc_col-sm-12">
						                        <div class="vc_column-inner ">
						                            <div class="wpb_wrapper">
						                                <div class="wpb_text_column wpb_content_element  post-content">
						                                    <div class="wpb_wrapper">
						                                        '.$detail[0]['long_desc'].'
						                                    </div>
						                                </div>
						                            </div>
						                        </div>
						                    </div>
						                </div>
						            </div>
						        </div>
						    </div>
						</div>
					</div>
				</div>
			';

		}

		return $return;
	}
}