<?php /* 
http://demo.qkthemes.net/hotgame/
http://demo.qkthemes.net/hotgame/videos/
*/ ?>

<!DOCTYPE html>
<!--[if IE 7]><html
class="ie ie7" lang="en-US"> <![endif]-->
<!--[if IE 8]><html
class="ie ie8" lang="en-US"> <![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GameArtis.com &#8211; <?php echo $this->title; ?></title>
	<script>
		/* You can add more configuration options to webfontloader by previously defining the WebFontConfig with your options */
		if (typeof WebFontConfig === "undefined") {
			WebFontConfig = new Object();
		}
		WebFontConfig['google'] = {
			families: ['Lato:400']
		};

		(function() {
			var wf = document.createElement('script');
			wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.3/webfont.js';
			wf.type = 'text/javascript';
			wf.async = 'true';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(wf, s);
		})();
	</script>
	<meta name='robots' content='noindex,follow' />
	<link rel="alternate" type="application/rss+xml" title="Hotmagazine Game Version &raquo; Feed" href="http://demo.qkthemes.net/hotgame/feed/" />
	<link rel="alternate" type="application/rss+xml" title="Hotmagazine Game Version &raquo; Comments Feed" href="http://demo.qkthemes.net/hotgame/comments/feed/" />
	<script type="text/javascript">
		window._wpemojiSettings = {
			"baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/72x72\/",
			"ext": ".png",
			"source": {
				"concatemoji": "http:\/\/demo.qkthemes.net\/hotgame\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.4.3"
			}
		};
		! function(a, b, c) {
			function d(a) {
				var c, d, e, f = b.createElement("canvas"),
					g = f.getContext && f.getContext("2d"),
					h = String.fromCharCode;
				return g && g.fillText ? (g.textBaseline = "top", g.font = "600 32px Arial", "flag" === a ? (g.fillText(h(55356, 56806, 55356, 56826), 0, 0), f.toDataURL().length > 3e3) : "diversity" === a ? (g.fillText(h(55356, 57221), 0, 0), c = g.getImageData(16, 16, 1, 1).data, g.fillText(h(55356, 57221, 55356, 57343), 0, 0), c = g.getImageData(16, 16, 1, 1).data, e = c[0] + "," + c[1] + "," + c[2] + "," + c[3], d !== e) : ("simple" === a ? g.fillText(h(55357, 56835), 0, 0) : g.fillText(h(55356, 57135), 0, 0), 0 !== g.getImageData(16, 16, 1, 1).data[0])) : !1
			}

			function e(a) {
				var c = b.createElement("script");
				c.src = a, c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
			}
			var f, g;
			c.supports = {
				simple: d("simple"),
				flag: d("flag"),
				unicode8: d("unicode8"),
				diversity: d("diversity")
			}, c.DOMReady = !1, c.readyCallback = function() {
				c.DOMReady = !0
			}, c.supports.simple && c.supports.flag && c.supports.unicode8 && c.supports.diversity || (g = function() {
				c.readyCallback()
			}, b.addEventListener ? (b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)) : (a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function() {
				"complete" === b.readyState && c.readyCallback()
			})), f = c.source || {}, f.concatemoji ? e(f.concatemoji) : f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))
		}(window, document, window._wpemojiSettings);
	</script>
	<link rel='stylesheet' id='bbp-default-css' href='http://demo.qkthemes.net/hotgame/wp-content/plugins/bbpress/templates/default/css/bbpress.css?ver=2.5.8-5815' type='text/css' media='screen' />
	<link rel='stylesheet' id='contact-form-7-css' href='http://demo.qkthemes.net/hotgame/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=4.3.1' type='text/css' media='all' />
	<link rel='stylesheet' id='rw-site-rating-css' href='http://demo.qkthemes.net/hotgame/wp-content/plugins/rating-widget/resources/css/site-rating.css?ver=2.7.8.4' type='text/css' media='all' />
	<link rel='stylesheet' id='hotmagazine-font-awesome-css' href='/css/font-awesome.css?ver=4.4.3' type='text/css' media='all' />
	<link rel='stylesheet' id='hotmagazine-bootstrap-css' href='http://demo.qkthemes.net/hotgame/wp-content/themes/hotmagazine/css/bootstrap.min.css?ver=4.4.3' type='text/css' media='all' />
	<link rel='stylesheet' id='hotmagazine-bxslider-css' href='http://demo.qkthemes.net/hotgame/wp-content/themes/hotmagazine/css/jquery.bxslider.css?ver=4.4.3' type='text/css' media='all' />
	<link rel='stylesheet' id='hotmagazine-popup-css' href='http://demo.qkthemes.net/hotgame/wp-content/themes/hotmagazine/css/magnific-popup.css?ver=4.4.3' type='text/css' media='all' />
	<link rel='stylesheet' id='hotmagazine-carousel-css' href='http://demo.qkthemes.net/hotgame/wp-content/themes/hotmagazine/css/owl.carousel.css?ver=4.4.3' type='text/css' media='all' />
	<link rel='stylesheet' id='hotmagazine-carousel-theme-css' href='http://demo.qkthemes.net/hotgame/wp-content/themes/hotmagazine/css/owl.theme.css?ver=4.4.3' type='text/css' media='all' />
	<link rel='stylesheet' id='hotmagazine-hotmagazine-css' href='/css/style-game.css?ver=4.4.3' type='text/css' media='all' />
	<link rel='stylesheet' id='hotmagazine-style-css' href='/css/style.css?ver=2015-11-26' type='text/css' media='all' />
	<link rel='stylesheet' id='hotmagazine-fonts-css' href='//fonts.googleapis.com/css?family=Lato%3A400%2C700%2C300%26subset%3Dlatin%2Clatin-ext&#038;ver=1.0.0' type='text/css' media='all' />
	<link rel='stylesheet' id='rw_toprated-css' href='http://css.rating-widget.com/wordpress/toprated.css?ck=Y2016M05D29&#038;ver=2.7.8.4' type='text/css' media='all' />
	<link rel='stylesheet' id='rw_recommendations-css' href='http://css.rating-widget.com/widget/recommendations.css?ck=Y2016M05D29&#038;ver=2.7.8.4' type='text/css' media='all' />
	<link rel='stylesheet' id='js_composer_front-css' href='/css/js_composer.min.css?ver=4.9' type='text/css' media='all' />
	<script type="text/javascript" src="http://demo.qkthemes.net/hotgame/wp-content/cache/minify/000000/y8gvSU_MTdUvL9DNzEvOKU1JLdbPAqLC0tSiSiilk0GEIt3czPSixJJUvdzMPAA.js"></script>
	<link rel='https://api.w.org/' href='http://demo.qkthemes.net/hotgame/wp-json/' />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://demo.qkthemes.net/hotgame/xmlrpc.php?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://demo.qkthemes.net/hotgame/wp-includes/wlwmanifest.xml" />
	<meta name="generator" content="WordPress 4.4.3" />
	<link rel="canonical" href="http://demo.qkthemes.net/hotgame/" />
	<link rel='shortlink' href='http://demo.qkthemes.net/hotgame/' />
	<link rel='stylesheet' id='js_composer_front-css' href='/css/isentric.css?ver=1.0' type='text/css' media='all' />
	<script type="text/javascript">
		var ajaxurl = 'http://demo.qkthemes.net/hotgame/wp-admin/admin-ajax.php';
	</script>


	<meta name="generator" content="" />
	<!--[if lte IE 9]><link
rel="stylesheet" type="text/css" href="http://demo.qkthemes.net/hotgame/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]-->
	<!--[if IE  8]><link
rel="stylesheet" type="text/css" href="http://demo.qkthemes.net/hotgame/wp-content/plugins/js_composer/assets/css/vc-ie8.min.css" media="screen"><![endif]-->
	
	<noscript>
		<style type="text/css">
			.wpb_animate_when_almost_visible {
				opacity: 1;
			}
		</style>
	</noscript>
</head>

<body class="home page page-id-30 page-template page-template-template-home page-template-template-home-php wpb-js-composer js-comp-ver-4.9 vc_responsive">
	<div id="container">
		<header class="clearfix ">
			<nav class="navbar navbar-default navbar-static-top">

				<div class="logo-advertisement">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
							<a class="navbar-brand" href="/" title="Game Artis"> <img src="/images/gameartislogo.png" alt="Game Artis"> </a>
						</div>
						<div class="advertisement">
							<div class="desktop-advert"> <img src="http://demo.qkthemes.net/hotgame/wp-content/uploads/2016/01/468x60.jpg" alt="adv"></div>
							<div class="tablet-advert"> <img src="http://demo.qkthemes.net/hotgame/wp-content/uploads/2016/01/468x60.jpg" alt="adv"></div>
						</div>
					</div>
				</div>
				<div class="nav-list-container">
					<div class="container">
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul data-breakpoint="800" id="menu-main-menu" class="nav navbar-nav navbar-left">

								<?php echo $this->navigation; ?>

							</ul>
							<form method="get" class="navbar-form navbar-right" action="/">
								<input type="text" name="s" placeholder="Search here" />
								<button type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</div>
				</div>
			</nav>
		</header>
		<div class="vc_row wpb_row vc_row-fluid ticker-news">
			<div class="container">
				<div class="row">
					<div class="wpb_column vc_column_container vc_col-sm-12">
						<div class="vc_column-inner ">
							<div class="wpb_wrapper">
								<div class="ticker-news-box"> <span class="breaking-news">breaking news</span>
									<ul id="js-news">
										<li class="news-item"><span class="time-news">7:55 am</span> <a href="#">Baru: Kategori Artis Aliando telah ditambahkan. Lihat selengkapnya.</a></li>
										<li class="news-item"><span class="time-news">12:38 pm</span> <a href="#">Yang Terbaru: Game Aliando Sky Hover mainkan sekarang juga!</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="vc_row wpb_row vc_row-fluid block-wrapper">
			<div class="container">
				<div class="row">

						
		            <?php echo $this->body; ?>
							

					<div class="wpb_column vc_column_container vc_col-sm-4">
					    <div class="vc_column-inner ">
					        <div class="wpb_wrapper">
					            <div class="sidebar theiaStickySidebar wpb_widgetised_column wpb_content_element">
					                <div class="wpb_wrapper">
					                    <aside id="text-1" class="widget widget_text">
					                        <div class="title-section">
					                            <h2><span>Stay Connected</span></h2></div>
					                        <div class="textwidget">
					                            <div class="social-widget">
					                                <ul class="social-share">
					                                    <li> <a href="#" class="rss"><i class="fa fa-rss"></i></a> <span class="number">9,455</span> <span>Subscribers</span></li>
					                                    <li> <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> <span class="number">56,743</span> <span>Fans</span></li>
					                                    <li> <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> <span class="number">43,501</span> <span>Followers</span></li>
					                                    <li> <a href="#" class="google"><i class="fa fa-google-plus"></i></a> <span class="number">35,003</span> <span>Followers</span></li>
					                                </ul>
					                            </div>
					                        </div>
					                    </aside>
					                    <aside id="text-2" class="widget widget_text">
					                        <div class="title-section">
					                            <h2><span>Featured Games</span></h2></div>
					                        <div class="textwidget">
					                            <div class="post-widget">
					                                <div class="news-post video-post"> <img src="http://demo.qkthemes.net/hotmagazine/wp-content/uploads/2015/12/video-sidebar.jpg"> <a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>
					                                    <div class="hover-box">
					                                        <h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. </a></h2>
					                                        <ul class="post-tags">
					                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
					                                        </ul>
					                                    </div>
					                                </div>
					                                <p>Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis.</p>
					                            </div>
					                        </div>
					                    </aside>
					                </div>
					            </div>
					        </div>
					    </div>
					</div>
				</div>

			</div>
		</div>


		<footer>
			<div class="container">
				<div class="footer-last-line">
					<div class="row">
						<div class="col-md-6">
							<p>© Copyright 2017 GameArtis.com All rights reserved.</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<div id="log-in-popup" class="mfp-hide white-popup">
		<form class="login-form" method="post" name="loginform" action="/ajax.php">
			<div class="title-section">
				<h1><span>Login</span></h1></div>
			<p>Welcome! Login in to your account</p>
			<label for="hp">No HP<span>*</span></label>
			<input type="text" name="hp" id="hp" />
			<label for="passwd">Password<span>*</span></label>
			<input name="passwd" id="passwd" type="password" />
			<button type="submit" id="submit-login"> <i class="fa fa-arrow-circle-right"></i> Login </button>
			<!-- <input name="rememberme" type="checkbox" id="rememberme" value="forever"> <span>Remember me</span><a class="lost-password" href="#">Lost your password?</a> -->
			<p class="register-line">Belum punya akun? Ikuti petunjuk <a href="#"> disini</a>.</p>
		</form>
		<form class="lost-password-form" name="lostpasswordform" id="lostpasswordform" action="http://demo.qkthemes.net/hotgame//wp-login.php?action=lostpassword" method="post">
			<div class="title-section">
				<h1><span>Lost Password</span></h1></div>
			<label for="username">Type your email address<span>*</span></label>
			<input type="text" name="user_login" id="username" class="input">
			<button type="submit"> <i class="fa fa-arrow-circle-right"></i> Submit </button>
			<p class="login-line">Back to <a href="#">Login</a></p>
		</form>
		<form class="register-form" name="registerform" id="registerform" action="http://demo.qkthemes.net/hotgame//wp-login.php?action=register" method="post">
			<div class="title-section">
				<h1><span>Register</span></h1></div>
			<label for="usernamer">Your Username<span>*</span></label>
			<input name="user_login" id="usernamer" type="text" placeholder="Username">
			<label for="email-address">Your Email Adress<span>*</span></label>
			<input name="user_email" id="email-address" type="text" placeholder="Emain address">
			<label for="password">Your Password<span>*</span></label>
			<input id="password" class="input" type="password" value="" name="password" />
			<label for="repeat_password">Confirm Password<span>*</span></label>
			<input id="repeat_password" class="input" type="password" value="" name="repeat_password" />
			<button type="submit" id="submit-register"> <i class="fa fa-arrow-circle-right"></i> Register </button>
			<p class="login-line">Back to <a href="#">Login</a></p>
		</form>
	</div>

	<link rel='stylesheet' id='hotmagazine-ticker-css' href='http://demo.qkthemes.net/hotgame/wp-content/themes/hotmagazine/css/ticker-style.css?ver=4.4.3' type='text/css' media='all' />
	<script type="text/javascript" src="http://demo.qkthemes.net/hotgame/wp-content/cache/minify/000000/Fco5DsAgDATADwVWVHkPh5FAXLFNkd-H1DMOISwmESj11bySIFH2uymqgFLRyZdDnEN9VJMnd3OjjNh2Ovec-mzi1_5iexkf.js"></script>
	<script type='text/javascript'>
		/* <![CDATA[ */
		var _wpcf7 = {
			"loaderUrl": "http:\/\/demo.qkthemes.net\/hotgame\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif",
			"recaptchaEmpty": "Please verify that you are not a robot.",
			"sending": "Sending ...",
			"cached": "1"
		};
		/* ]]> */
	</script>
	<script type="text/javascript" src="http://demo.qkthemes.net/hotgame/wp-content/cache/minify/000000/fY9BDoMwDAQ_1CRw6ntMYqipidPYUYHXl55BXGdGK20fomSDaG6UurhnoBy5JdQwa9BYqZg-uvASW2CCnTL-xSBiahWKXyif9fxpWDc_rMqUsN5GB8o0UnRFSrvfo4OhskDCdB-qmBS8buTLPkKVpsjXReE2UVZ33Bfms69olMH1vvfd9QLMsJ6pGsX39gM.js"></script>
	<script type="text/javascript" src="http://demo.qkthemes.net/hotgame/wp-content/cache/minify/000000/M9DPyC_JTUxPrMrMS9XPKtYvyUjNTNQtLslMzq7ULc5MSU1KLAIA.js"></script>
	<script type="text/javascript" src="http://demo.qkthemes.net/hotgame/wp-content/cache/minify/000000/XY1RDoMwDEMvxAg7EepaD8KWtkuCEDs9HV8Tn37Plgeai0uYwpczaDGyqFy9a3QKAtrqjXN8rwn2sy1CHki9cO7ujYyxSC0GpWAGP0uJzf_V-NSS_ZwM17vls0L33jm-oAc.js"></script>
	<script type='text/javascript'>
		/* <![CDATA[ */
		var mc4wp_forms_config = [];
		/* ]]> */
	</script>
	<script type="text/javascript" src="http://demo.qkthemes.net/hotgame/wp-content/cache/minify/000000/M9TPTczMSc7IzC3QTcsv0i0v0E8sLk4tKdbPKtYHCuQW6yYWZOrlZuYBAA.js"></script>
	<script type="text/javascript">
		(function() {
			function addEventListener(element, event, handler) {
				if (element.addEventListener) {
					element.addEventListener(event, handler, false);
				} else if (element.attachEvent) {
					element.attachEvent('on' + event, handler);
				}
			}
		})();
	</script>
</body>

</html>