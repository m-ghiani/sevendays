<?php
include "libs/facebook.class.php";
include "libs/settings.php";
$fb = facebookHelpers::fb_init(curPageURL());
$events = facebookHelpers::getEventsData("359570377391632", $fb);
$images = facebookHelpers::getAlbumPhotosEx($fb, "397389466943056");
$magicNumbers=facebookHelpers::getMagicNumbers("359570377391632");

?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Site made with Mobirise Website Builder v2.6.1, http://mobirise.com -->
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="generator" content="Mobirise v2.6.1, mobirise.com">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:url"                content="http://www.sevendaysgenova.it" />
		<meta property="og:type"               content="website" />
		<meta property="og:title"              content="Seven Days Genova" />
		<meta property="og:description"        content="Seven Days Genova - Più di una pizzeria: karaoke, giochi, pub, discoteca ed eventi live" />
		<meta property="og:image"              content="http://sevendaysgenova.it/assets/images/logo-fb.png" />
		<meta property="og:image:width"        content="1200" />
		<meta property="og:image:height"       content="630" />
		<meta property="og:locale"             content="it_IT" />
		<meta property="og:locale:alternate"   content="en_US" />
		<meta property="og:locale:alternate"   content="fr_FR" />
		<meta property="og:locale:alternate"   content="de_DE" />
		<meta property="og:locale:alternate"   content="es_ES" />
		<meta property="og:locale:alternate"   content="ru_RU" />
		<meta property="fb:app_id"             content="364549003588352" />
		<link rel="shortcut icon" href="assets/images/favicon-t-32x32-5.png" type="image/x-icon">
		<meta name="description" content="Seven Days Genova - Più di una pizzeria: karaoke, giochi, pub, discoteca ed eventi live">
		<meta name="google" content="notranslate">
		<title>Seven Days Genova</title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/animate.css/animate.min.css">
		<link rel="stylesheet" href="assets/socicon/css/socicon.min.css">
		<link rel="stylesheet" href="assets/mobirise/css/style.css">
		<link rel="stylesheet" href="assets/mobirise-gallery/style.css">
		<link rel="stylesheet" href="assets/mobirise-slider/style.css">
		<link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
		<style type="text/css">
			.goog-te-banner-frame, .goog-te-menu-frame, .goog-te-gadget {
				visibility: hidden !important;
				display: none !important;
			}

			.translation-link {
				margin: 0;
				padding: 7px 0;
			}

			.translation-link img {
				height: 20px;
				width: 30px;
			}

			#quandoo-frame .
			.navbar-default {
				background-color: #f00 !important
			}

			.crop {
				width: 310px;
				height: 29px;
				overflow: hidden;
			}

			.crop img {
				width: 312px;
				height: 30px;
				margin: 0 -1px 0 -1px;
			}
			body.modal-open {
				overflow: inherit;
				padding-right: inherit !important;
			}
		</style>
		<script type="application/ld+json">
			{
		  	"@context": "http://schema.org",
		  	"@type": "Restaurant",
		  	"email":"mailto:info@sevendaysgenova.it",
		  	"logo": "http://sevendaysgenova.it/assets/images/logo-fb.png",
		     "url": "http://sevendaysgenova.it",
		  	"address": {
			    "@type": "PostalAddress",
			    "addressLocality": "Genova",
			    "addressRegion": "GE",
			    "postalCode":"16148",
			    "streetAddress": "via Simone Schiaffino 32"
		  	},
		  	"description": "This is your business description.",
		  	"name": "Seven Days Genova",
		  	"telephone": "010-3076897",
		  	"openingHours": "Mo,Tu,We,Th,Fr,Sa 19:30-03:00",
		  	"hasMap": "https://www.google.it/maps/place/Seven+Days/@44.3949398,8.9964222,17z/data=!4m12!1m6!3m5!1s0x12d3433b06ed73cd:0x59e669e44b8dc199!2sSeven+Days!8m2!3d44.394936!4d8.9986109!3m4!1s0x12d3433b06ed73cd:0x59e669e44b8dc199!8m2!3d44.394936!4d8.9986109?hl=it",
		  	"geo": {
			    "@type": "GeoCoordinates",
			    "latitude": "44.3949486",
			    "longitude": "8.998519"
		 		}, 			
		  	"sameAs" : [ "http://www.facebook.com/seven.days.genova",
		    "http://sevendaysgenova.it"]
			}
		</script>
	</head>
	<body>

		<!-- Google Analytics -->
		<script type="text/javscript">		
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-6246117-4', 'sevendaysgenova.it');
			ga('send', 'pageview');
		</script>
		<!-- /Google Analytics -->

		<div id="fb-root"></div>
		<script>
			( function(d, s, id) {
					var js,
					    fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id))
						return;
					js = d.createElement(s);
					js.id = id;
					js.src = "//connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v2.5&appId=364549003588352";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
		</script>

		<!--<section class="engine">
		<a rel="nofollow" href="http://mobirise.com">Mobirise free website maker</a>
		</section>-->
		<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse" id="ext_menu-0">
			<div class="mbr-navbar__section mbr-section">
				<div class="mbr-section__container container">
					<div class="mbr-navbar__container">
						<div class="mbr-navbar__column--s mbr-navbar__brand">
							<span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline"> <span class="mbr-brand__logo"> <a class="notranslate" href="#top"><img class="mbr-navbar__brand-img mbr-brand__img" src="assets/images/logo-header200x200-180.png" title="SEVEN DAYS"></a> </span> <!--<span class="mbr-brand__name">
								<a class="mbr-brand__name text-white" href="#top">SEVEN DAYS</a>
								</span>--> </span>
						</div>
						<div class="mbr-navbar__hamburger mbr-hamburger text-white">
							<span class="mbr-hamburger__line"></span>
						</div>
						<div class="mbr-navbar__column mbr-navbar__menu">
							<nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
								<div class="mbr-navbar__column">
									<ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active mbr-buttons--only-links">
										<li class="mbr-navbar__item">
											<a class="mbr-buttons__link btn text-white notranslate" href="#about">ABOUT</a>
										</li>
										<li class="mbr-navbar__item">
											<a class="mbr-buttons__link btn text-white notranslate" href="#info">INFO</a>
										</li>
										<?php
										if (count($events) > 0) {
											echo "									<li class=\"mbr-navbar__item\"><a class=\"mbr-buttons__link btn text-white\" href=\"#events\">EVENTI</a></li>\n";
										}
										if (count($images) > 0) {
											echo "									<li class=\"mbr-navbar__item\"><a class=\"mbr-buttons__link btn text-white\" href=\"#gallery\">GALLERIA</a></li>\n";
										}
										?>
										<li class="mbr-navbar__item">
											<a class="mbr-buttons__link btn text-white" href="#contacts">CONTATTI</a>
										</li>
										<li class="mbr-navbar__item">
											<a type="button" class="btn btn-danger" data-toggle="modal" data-target="#reservationModal">PRENOTA</a>
										</li>

										<li class="mbr-navbar__item">
											<a class="mbr-buttons__link btn text-white translation-link italian" data-lang="Italiano" href="javascript:void(0);"><img src="assets/images/flags/it.png" alt="IT" class="hidden-md" /><span class="hidden-xs hidden-sm hidden-lg hidden-xl">IT</span></a>
										</li>
										<li class="mbr-navbar__item">
											<a class="mbr-buttons__link btn text-white translation-link english" data-lang="Inglese" href="javascript:void(0);"><img src="assets/images/flags/en.png" alt="EN" class="hidden-md" /><span class="hidden-xs hidden-sm hidden-lg hidden-xl">EN</span></a>
										</li>
										<li class="mbr-navbar__item">
											<a class="mbr-buttons__link btn text-white translation-link spanish" data-lang="Spagnolo" href="javascript:void(0);"><img src="assets/images/flags/es.png" alt="ES" class="hidden-md" /><span class="hidden-xs hidden-sm hidden-lg hidden-xl">ES</span></a>
										</li>
										<li class="mbr-navbar__item">
											<a class="mbr-buttons__link btn text-white translation-link french" data-lang="Francese" href="javascript:void(0);"><img src="assets/images/flags/fr.png" alt="FR" class="hidden-md" /><span class="hidden-xs hidden-sm hidden-lg hidden-xl">FR</span></a>
										</li>
										<li class="mbr-navbar__item">
											<a class="mbr-buttons__link btn text-white translation-link german" data-lang="Tedesco" href="javascript:void(0);"><img src="assets/images/flags/de.png" alt="DE" class="hidden-md" /><span class="hidden-xs hidden-sm hidden-lg hidden-xl">DE</span></a>
										</li>
										<li class="mbr-navbar__item">
											<a class="mbr-buttons__link btn text-white translation-link russian" data-lang="Russo" href="javascript:void(0);"><img src="assets/images/flags/ru.png" alt="RU" class="hidden-md" /><span class="hidden-xs hidden-sm hidden-lg hidden-xl">RU</span></a>
										</li>
									</ul>
								</div>

							</nav>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Code provided by Google -->
		<div id="google_translate_element"></div>
		<script type="text/javascript">
			
			function googleTranslateElementInit() {
				new google.translate.TranslateElement({
					pageLanguage : 'it',
					layout : google.translate.TranslateElement.InlineLayout.SIMPLE,
					autoDisplay : false
				}, 'google_translate_element');
			}
		</script>
		<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>

		<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted" id="header1-2" style="background-image: url(assets/images/seven-header.gif);">
			<div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-left mbr-after-navbar">
				<div class="row" style="background-color: rgba(0,0,0,.4);">
					<div class="mbr-box mbr-box--stretched">
						<div class="mbr-box__magnet mbr-box__magnet--center-left">
							<div class="row">
								<div class="col-md-6 col-md-offset-3">
									<div class="mbr-hero animated fadeInUp">
										
										<h1 class="mbr-hero__text notranslate"  style="margin-top: 80px!important;">
											<img src="assets/images/logo-header200x200-180.png" class="img img-responsive hidden-xs hidden-sm" style="display: inline-block;" alt="Logo Seven"/>
											SEVEN DAYS
										</h1>
										<p class="mbr-hero__subtext" style="margin-bottom: 80px!important;">
											Se volete divertirvi e siete a Genova, difficilmente troverete un posto migliore del Seven Days di via Simone Schiaffino: questo locale è pizzeria, discoteca, karaoke, e ristorante in cui potrete organizzare feste di compleanno, addii al celibato-nubilato, serate a base di tango o musica dal vivo. Qualunque sia il motivo della vostra visita, il Seven Days di genova vi intratterrà con un’atmosfera colorata, conquistandovi con i suoi piatti semplici ma saporiti. Prenotate e vi divertirete!
											<!--Pizzeria, discoteca, karaoke, si organizzano feste di compleanno, addii al celibato-nubilato, serate tango, balli latini ed eventi live.-->
										</p>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="mbr-arrow mbr-arrow--floating text-center">
					<div class="mbr-section__container container">
						<a class="mbr-arrow__link" href="#about"><i class="glyphicon glyphicon-menu-down"></i></a>
					</div>
				</div>
			</div>
		</section>

		<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="about" style="background-color: rgb(50, 50, 50);">

			<div class="mbr-section__container container mbr-section__container--first">
				<div class="mbr-header mbr-header--wysiwyg row">
					<div class="col-sm-8 col-sm-offset-2">
						<h3 class="mbr-header__text" style="color: rgb(255,255,255)">DICONO DI NOI</h3>

					</div>
				</div>
			</div>
			<div class="mbr-section__container container mbr-section__container--isolated">
				<div class="row">
					<div class="mbr-article mbr-article--wysiwyg col-sm-8 col-sm-offset-2" style="color: rgb(200,200,200);">
						<p>
							http://www.zenatonight.it/
						</p>
						<p>
							"Il 7 Days è un locale singolare nel panorama delle notti genovesi. Nasce come pizzeria ed ha una programmazione sempre diversa per soddisfare il pubblico più esigente."
						</p>
						<p>
							<br>
						</p>
						<p>
							http://www.iristorante.it/
						</p>
						<p>
							"La pizza veramente buona, locale molto accogliente e pulito. Si può cantare, bere e giocare a calcetto e ping pong solo facendo la prima consumazione. Un locale con i giochi gratis a Genova non esiste... siete unici !!!!!"
						</p>
						<p>
							<br/>
						</p>
						<p>
							http://www.iristorante.it/
						</p>
						<p>
							"Avevo già mangiato la pizza da questo locale perché ci sono stata con la mia comitiva, quella sera però non abbiamo avuto voglia di uscire e visto che hanno il servizio da asporto è stato perfetto, serata tranquilla tra amici con della buonissima pizza...."
						</p>
					</div>
				</div>
			</div>

		</section>
		<section class="mbr-section" id="prenotazioni">
			<div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<h2 class="modal-title" id="reservationModalLabel">PRENOTA DA NOI</h2>
						</div>
						<div class="modal-body" style="background-color: rgb(247,247,247);">
							<div class="row">
								<div class="col-sm-8 col-sm-offset-2 text-center" style="padding-left: 40px;">
									<div style="width:312px;display:block;padding:0;margin:0;position:relative;">
										<iframe src="https://widget.quandoo.it/widget/reservation/merchant/hDtIF?aid=2&countryId=ITA" width="312" height="372" seamless="seamless" scrolling="no" frameborder="0"></iframe>
										<a href="http://www.quandoo.it/seven-days-24681" target="_blank" style="width:312px;display:block;padding:0;margin:0;position:relative;">
										<div class="crop">
											<img src="https://admin.quandoo.de/awidget/poweredby.png" style="border:none;position:relative;" alt="Quandoo" title="Quandoo">
										</div> </a>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Chiudi
							</button>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="content-2 simple col-3" id="info" style="background-color: rgb(255, 255, 255);">
			<div class="container">
				<div class="row column text-center">
					<h2>INFO</h2>
				</div>
				<div class="row">
					<div>
						<div class="thumbnail">
							<div class="caption">
								<div>
									<h2>KARAOKE</h2>
									<p>
										Ogni sera potrete divertirvi in compagnia dei nostri maestri con il karaoke. Dalle 21:30 alle 3:00 venite a cantare con noi
									</p>
								</div>
							</div>
						</div>
					</div>
					<div>
						<div class="thumbnail">
							<div class="caption">
								<div>
									<h2>DISCO</h2>
									<p>
										Ogni sabato troverete serate con artisti dal vivo o dj set. Hip-hop, disco e molto altro&nbsp;
									</p>
								</div>
							</div>
						</div>
					</div>
					<div>
						<div class="thumbnail">
							<div class="caption">
								<div>
									<h2>PIZZERIA</h2>
									<p>
										Passate una serata in compagnia di parenti o amici gustando le nostre pizze o i nostri piatti
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row column text-center hidden-xs">
					<h2>I NUMERI DI FACEBOOK</h2>
				</div>				
				<div class="row hidden-xs">
					<div class="col-md-4">
						<div class="hidden-sm">
							<div class="jumbotron text-center" style="background-color: #7ac673; color: #fff;padding: 0!important;margin:0!important;">
								<h2 style="font-size: 6em;padding: 10px 0;"><?echo $magicNumbers->checkins;?></h2>
							</div>
							<p class="text-uppercase" style="text-align: center;font-size: 20px;">
								persone diverse registrate
							</p>
						</div>
						<div class="hidden-md hidden-lg">
							<div class="jumbotron text-center" style="background-color: #7ac673; color: #fff;padding: 0!important;margin:0!important;">
								<h2 style="font-size: 4em;padding: 10px 0;"><?echo $magicNumbers->checkins;?></h2>
							</div>
							<p class="text-uppercase" style="text-align: center;font-size: 14px;">
								persone diverse registrate
							</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="hidden-sm">
							<div class="jumbotron text-center" style="background-color: #7ac673; color: #fff;padding: 0!important;margin:0!important;">
								<h2 style="font-size: 6em;padding: 10px 0;"><?echo $magicNumbers->likes;?></h2>
							</div>
							<p class="text-uppercase" style="text-align: center;font-size: 20px;">
								mi piace per il Seven
							</p>
						</div>
						<div class="hidden-md hidden-lg">
							<div class="jumbotron text-center" style="background-color: #7ac673; color: #fff;padding: 0!important;margin:0!important;">
								<h2 style="font-size: 4em;padding: 10px 0;"><?echo $magicNumbers->likes;?></h2>
							</div>
							<p class="text-uppercase" style="text-align: center;font-size: 14px;">
								mi piace per il Sevene
							</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="hidden-sm">
							<div class="jumbotron text-center" style="background-color: #7ac673; color: #fff;padding: 0!important;margin:0!important;">
								<h2 style="font-size: 6em;padding: 10px 0;"><?echo $magicNumbers->talking_about_count;?></h2>
							</div>
							<p class="text-uppercase" style="text-align: center;font-size: 20px;">
								stanno parlando del Seven
							</p>
						</div>
						<div class="hidden-md hidden-lg">
							<div class="jumbotron text-center" style="background-color: #7ac673; color: #fff;padding: 0!important;margin:0!important;">
								<h2 style="font-size: 4em;padding: 10px 0;"><?echo $magicNumbers->talking_about_count;?></h2>
							</div>
							<p class="text-uppercase" style="text-align: center;font-size: 14px;">
								stanno parlando del Seven
							</p>
						</div>
					</div>

				</div>
			</div>
		</section>
		<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="social-buttons1-10" style="background-color: rgb(255, 255, 255);">
			<div class="mbr-section__container container">
				<div class="mbr-header mbr-header--inline row">
					<div class="col-sm-4">
						<h3 class="mbr-header__text">CONDIVIDI LA PAGINA</h3>
					</div>
					<div class="mbr-social-icons col-sm-8">
						<div class="mbr-social-likes social-likes_style-1" data-counters="true">
							<div class="mbr-social-icons__icon social-likes__icon facebook socicon-bg-facebook" title="Condividi il link su Facebook">
								<i class="socicon socicon-facebook"></i>

							</div>
							<div class="mbr-social-icons__icon social-likes__icon twitter socicon-bg-twitter" title="Condividi il link su Twitter">
								<i class="socicon socicon-twitter"></i>

							</div>
							<div class="mbr-social-icons__icon social-likes__icon plusone socicon-bg-google" title="Condividi il link su Google+">
								<i class="socicon socicon-google"></i>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Eventi  -->
		<?php
		if (count($events) > 0) {
			echo "<section class=\"mbr-section mbr-section--relative mbr-section--fixed-size\" id=\"events\" style=\"background-color: rgb(50,50,50); color: rgb(255,255,255); padding:30px 0\">\n";
			echo "    <div class=\"mbr-section__container container\">\n";
			echo "        <div class=\"row\">\n";
			echo "            <div class=\"col-sm-12 text-center\">\n";
			echo "                <h2 class=\"mbr-header__text\">S E V E N ' S&nbsp;&nbsp;&nbsp;E V E N T S</h2>\n";
			echo "            </div>\n";
			echo "        </div>\n";
			echo "    </div>\n";
			echo "</section>\n";
			foreach ($events as $key => $value) {
				$start_time = new DateTime($value['start_time']);
				$start_time -> setTimezone(new DateTimeZone('Europe/Rome'));
				$end_time = new DateTime($value['end_time']);
				$end_time -> setTimezone(new DateTimeZone('Europe/Rome'));
				$updated_time = new DateTime($value['update_time']);
				$updated_time -> setTimezone(new DateTimeZone('Europe/Rome'));
				$title = $value['name'];
				$body = ($value['description']);
				$caratteri = array("è", "à", "ù", "ì", "ò", "è", "À", "Ù", "Ì", "Ò");
				$convertiti = array("&egrave;", "&agrave;", "&ugrave;", "&igrave;", "&ograve;", "&egrave;", "&Agrave;", "&Ugrave;", "&Igrave;", "&Ograve;");
				$body = str_replace($caratteri, $convertiti, $body);
				$id = $value['id'];
				$link = "https://www.facebook.com/events/{$id}/";
				echo "<section class=\"mbr-section mbr-section--relative\" id=\"event-{$id}\" style=\"background-color: rgb(34, 34, 34);\">\n";
				echo "    \n";
				echo "    <div class=\"mbr-section__container mbr-section__container--isolated container\">\n";
				echo "        <div class=\"row\">\n";
				echo "            <div class=\"mbr-box mbr-box--fixed mbr-box--adapted\">\n";
				echo "                <div class=\"mbr-box__magnet mbr-box__magnet--top-right mbr-section__left col-sm-6\">\n";
				echo "                    <figure class=\"mbr-figure mbr-figure--adapted mbr-figure--caption-inside-bottom mbr-figure--full-width\">\n";
				echo "						<a href=\"https://www.facebook.com/events/{$id}/\">\n";
				echo "						<!-- IMMAGINE -->\n";
				echo "						<img class=\"mbr-figure__img\" src=\"{$value['cover']['source']}\" alt=\"{$title}\" title=\"{$title}\">\n";
				echo "						</a>\n";
				echo "					</figure>\n";
				echo "                </div>\n";
				echo "                <div class=\"mbr-box__magnet mbr-class-mbr-box__magnet--center-left col-sm-6 mbr-section__right\">\n";
				echo "                    <div class=\"mbr-section__container mbr-section__container--middle\">\n";
				echo "                        <div class=\"mbr-header mbr-header--auto-align mbr-header--wysiwyg\">\n";
				echo "							<!-- TITOLO -->\n";
				echo "                            <h3 class=\"mbr-header__text\">" . strtoupper($title) . "</h3>\n";
				echo "							<!-- DATA E ORA -->\n";
				echo "                            <p class=\"mbr-header__subtext\">{$start_time->format('d/m/Y')} ORE {$start_time->format('H:i')}</p>\n";
				echo "                        </div>\n";
				echo "                    </div>\n";
				echo "                    <div class=\"mbr-section__container mbr-section__container--middle\">\n";
				echo "						<!-- DESCRIZIONE -->\n";
				echo "                        <div class=\"mbr-article mbr-article--auto-align mbr-article--wysiwyg\">{$body}\n";
				echo "							<br/>\n";
				echo "							<br/>\n";
				echo "							<div class=\"fb-share-button\" data-href=\"https://www.facebook.com/events/{$id}\" data-layout=\"button\"></div>\n";
				echo "							<div class=\"fb-send\" data-href=\"https://www.facebook.com/events/1157312817615468/\"></div>\n";
				echo "						</div></div>\n";
				echo "                    </div>\n";
				echo "                    \n";
				echo "                </div>\n";
				echo "                \n";
				echo "            </div>\n";
				echo "        </div>\n";
				echo "    </div>\n";
				echo "</section>\n";
			}
		}
		?>
		<!-- FINE EVENTI -->
		<!-- GALLERY -->
		<?php
		if (count($images) > 0) {
			echo "<section class=\"mbr-section mbr-section--relative mbr-section--fixed-size\" id=\"gallery\" style=\"background-color: rgb(50,50,50); color: rgb(255,255,255); padding:30px 0\">\n";
			echo "    <div class=\"mbr-section__container container\">\n";
			echo "        <div class=\"row\">\n";
			echo "            <div class=\"col-sm-12 text-center\">\n";
			echo "                <h2 class=\"mbr-header__text\">S E V E N ' S&nbsp;&nbsp;&nbsp;W A L L</h2>\n";
			echo "            </div>\n";
			echo "        </div>\n";
			echo "    </div>\n";
			echo "</section>\n";
			echo "\n";
			echo "<section class=\"mbr-gallery mbr-section mbr-section--no-padding\" id=\"gallery-container\" style=\"background-color: rgb(50, 50, 50);\">\n";
			echo "    <div class=\" mbr-gallery-layout-default\">\n";
			echo "        <div>\n";
			echo "            <div class=\"row mbr-gallery-row no-gutter\">\n";
			$i = count($images) - 1;
			foreach (array_reverse($images) as $key => $image) {
				$thumbnail = $image -> images[0] -> source;
				echo "photo: " . $thumbnail;
				echo "                <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12 mbr-gallery-item\">\n";
				echo "                    <a href=\"#lb-gallery\" data-slide-to=\"{$i}\" data-toggle=\"modal\">\n";
				echo "                        <img alt=\"\" src=\"{$thumbnail}\">\n";
				echo "                        <span class=\"icon glyphicon glyphicon-zoom-in\"></span>\n";
				echo "                    </a>\n";
				echo "                </div>\n";
				$i--;
			}
			echo "            </div>\n";
			echo "        </div>\n";
			echo "        <div class=\"clearfix\"></div>\n";
			echo "    </div>\n";
			echo "\n";
			echo "    <!-- Lightbox -->\n";
			echo "    <div data-app-prevent-settings=\"\" class=\"mbr-slider modal fade carousel slide\" tabindex=\"-1\" data-keyboard=\"true\" data-interval=\"false\" id=\"lb-gallery\">\n";
			echo "        <div class=\"modal-dialog\">\n";
			echo "            <div class=\"modal-content\">\n";
			echo "                <div class=\"modal-body\">\n";
			echo "                    <ol class=\"carousel-indicators\">\n";
			echo "                    </ol>\n";
			echo "                    <div class=\"carousel-inner\">\n";
			$i = count($images) - 1;
			foreach ($images as $key => $image) {
				$source = $image -> source;
				$class = "";
				if ($i == 0)
					$class = " active";
				echo "                        <div class=\"item{$class}\">\n";
				echo "                            <img alt=\"\" src=\"{$source}\"/>\n";
				echo "                        </div>\n";
				$i--;
			}
			echo "                    </div>\n";
			echo "                    <a class=\"left carousel-control\" role=\"button\" data-slide=\"prev\" href=\"#lb-gallery\">\n";
			echo "                        <span class=\"glyphicon glyphicon-menu-left\" aria-hidden=\"true\"></span>\n";
			echo "                        <span class=\"sr-only\">Previous</span>\n";
			echo "                    </a>\n";
			echo "                    <a class=\"right carousel-control\" role=\"button\" data-slide=\"next\" href=\"#lb-gallery\">\n";
			echo "                        <span class=\"glyphicon glyphicon-menu-right\" aria-hidden=\"true\"></span>\n";
			echo "                        <span class=\"sr-only\">Next</span>\n";
			echo "                    </a>\n";
			echo "                    <a class=\"close\" href=\"#\" role=\"button\" data-dismiss=\"modal\">\n";
			echo "                        <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>\n";
			echo "                        <span class=\"sr-only\">Close</span>\n";
			echo "                    </a>\n";
			echo "                </div>\n";
			echo "            </div>\n";
			echo "        </div>\n";
			echo "    </div>\n";
			echo "</section>\n";
		}
		?>

		<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="social-buttons2-7" style="background-color: rgb(240, 240, 240);">

		<div class="mbr-section__container container">
		<div class="mbr-header mbr-header--inline row">
		<div class="col-sm-4">
		<h3 class="mbr-header__text">SEGUICI</h3>
		</div>
		<div class="mbr-social-icons mbr-social-icons--style-1 col-sm-8">
		<a class="mbr-social-icons__icon socicon-bg-twitter" title="Twitter" target="_blank" href="https://twitter.com/sevendaysgenova"><i class="socicon socicon-twitter"></i></a>
		<a class="mbr-social-icons__icon socicon-bg-facebook" title="Facebook" target="_blank" href="https://www.facebook.com/Seven.Days.Genova">
		<i class="socicon socicon-facebook"></i>
		</a>
		</div>
		</div>
		</div>
		</section>

		<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="contacts" style="background-color: rgb(60, 60, 60);">

		<div class="mbr-section__container container">
		<div class="mbr-contacts mbr-contacts--wysiwyg row">
		<div class="col-sm-6">
		<figure class="mbr-figure mbr-figure--wysiwyg mbr-figure--full-width mbr-figure--no-bg">
		<div class="mbr-figure__map mbr-figure__map--short mbr-google-map">
		<p class="mbr-google-map__marker" data-coordinates="44.3948889,8.998610999999983"></p>
		</div>
		</figure>
		</div>
		<div class="col-sm-6">
		<div class="row">
		<div class="col-sm-5 col-sm-offset-1">
		<p class="mbr-contacts__text"></p><p><strong>INDIRIZZO</strong><br><span class="notranslate">via Schiaffino 32</span><br>
		<span class="notranslate">16148 Genova (GE)</span><br><br>
		<strong>CONTATTI</strong><br>
		Email: <a href="mailto://info@sevendaysgenova.it" class="text-warning"><span class="notranslate">info@seven</span></a><br>Telefono: 010-3076897<br><br></p><p></p>
		</div>
		<div class="col-sm-6"><p class="mbr-contacts__text">
		<strong>LINKS</strong></p>
		<ul class="mbr-contacts__list">
		<li><a href="http://www.sevendaysgenova.it">Web</a></li>
		<li><a href="https://www.facebook.com/Seven.Days.Genova/">Facebook</a></li>
		<li><a href="https://twitter.com/sevendaysgenova">Twitter</a></li>
		<li><a href="https://www.quandoo.it/place/seven-days-24681">Quandoo</a></li>
		</ul>
		</div>
		</div>
		</div>
		</div>
		</div>
		</section>
		<footer class="mbr-section mbr-section--relative mbr-section--fixed-size" id="footer1-8" style="background-color: rgb(60, 60, 60);">
		<div class="mbr-section__container container">
		<div class="mbr-footer mbr-footer--wysiwyg row">
		<div class="col-sm-12">
		<p class="mbr-footer__copyright">© 2013 SEVEN DAYS GENOVA di Tiziana Bonfante tel 010-3076897</p>
		</div>
		</div>
		</div>
		</footer>

		<script src="assets/jquery/jquery.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js"></script>
		<script src="assets/smooth-scroll/SmoothScroll.js"></script>
		<script src="assets/social-likes/social-likes.js"></script>
		<script src="assets/masonry/masonry.pkgd.min.js"></script>
		<script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
		<script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
		<script src="assets/mobirise/js/script.js"></script>
		<script src="assets/mobirise-gallery/script.js"></script>
		<!--Start Cookie Script--> <script type="text/javascript" charset="UTF-8" src="http://chs03.cookie-script.com/s/a52b50064f75dfa9221e251b1af40166.js"></script> <!--End Cookie Script-->
		<script type="text/javascript">
			$('.translation-link').click(function() {
				var lang = $(this).data('lang');
				var $frame = $('.goog-te-menu-frame:first');
				if (!$frame.size()) {
					return false;
				}
				$frame.contents().find('.goog-te-menu2-item span.text:contains(' + lang + ')').get(0).click();
				return false;
			});
		</script>
		<script type="text/javascript">
			////*[@id="languageForm"]/nav #languageForm > nav
			$(function() {
				$("#languageForm > nav").css("background-color", "red");
			});

		</script>
	</body>
</html>