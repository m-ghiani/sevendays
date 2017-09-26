<?php 
	/*
	
	$db_host = "mysql.netsons.com";
	$db_user = "fgfnbuuk_admin";
	$db_password = "ssmmrmr@01";
	$db_name = "fgfnbuuk_sd"; 
	$footerText = "<div class=\"hidden-xs\">&copy; 2013 SEVEN DAYS GENOVA di Tiziana Bonfante tel 010-3076897</div><div class=\"visible-xs\">&copy; 2013 SEVEN DAYS GENOVA tel 010-3076897</div>";
	$db_host = "localhost";
	$db_user = "root";
	$db_password = "ssmmrmr";
	$db_name = "SevenDb"; 
	
	$menuArray= array(
		array ("/","Home"),
		array ("news.php","News"),
		array ("events.php","Eventi"),
		array ("gallery.php","Galleria"),
//		array ("menu.php","Men&ugrave;"),
		array ("contacts.php","Contatti")
	);

	$pageIcons = array(
		array("images/favicon-t.png","shortcut icon", ""), 
		array("images/apple-touch-icon-57.png","apple-touch-icon",""),
		array("images/apple-touch-icon-72.png","apple-touch-icon","72x72"),
		array("images/apple-touch-icon-114.png","apple-touch-icon", "114x114")
	);
	
	$styles = array('css/magic-bootstrap.min.css', 'css/site.css');
	*/


	function curPageURL() {
		$pageURL = 'http';
		if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
		$pageURL .= "://";
		if ($_SERVER["SERVER_PORT"] != "80") {
			$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		} else {
			$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		}
		return $pageURL;
	}

	
?>