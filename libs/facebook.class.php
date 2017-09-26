<?php
include "fb-sdk/facebook.php";

class facebookHelpers {

	public static function fb_init($currURL) {
		//	    $fbconfig['appid']     = "180482145397922";
		//	    $fbconfig['secret']     = "87131678980de1ba62565b05447ac71f";
		$fbconfig['appid'] = "364549003588352";
		$fbconfig['secret'] = "02bd4def898430d26ff68dcb1c12e6c0";
		$fbconfig['baseurl'] = $currURL;
		// "http://thinkdiff.net/demo/newfbconnect1/php/sdk3/index.php";
		$facebook = new Facebook( array('appId' => $fbconfig['appid'], 'secret' => $fbconfig['secret'], 'cookie' => true, // enable optional cookie support
		'oauth' => true, ));
		$_SESSION['fb'] = $facebook;
		$_SESSION['fb-user'] = $facebook -> getUser();
		$_SESSION['AT'] = $facebook -> getAccessToken();
		$_SESSION['LoginUrl'] = $facebook -> getLoginUrl(array('scope' => 'user_photos, user_notes, user_work_history, publish_actions, user_birthday, user_hometown, user_location, photo_upload, status_update, share_item, create_note, offline_access, publish_stream, read_stream, video_upload', 'redirect_uri' => $currURL, 'display' => 'popup'));
		$_SESSION['LogoutUrl'] = $facebook -> getLogoutUrl(array('next' => 'http://sevendaysgenova.it/logout.php'));

		return $facebook;
	}

	public static function getAccessToken($facebook, $code, $my_url) {
		return '2b0536902001d34c211aa4506270a5fc';
		//return 'AAACkJcYqLKIBADvYMrvnBXU67EpxKMrsZBc6aCGIYLedWQkTKJ1fFUrjy1PefzcA7pTstYbzbdNVoXFLLAm22b4rF9ZCQZD';
	}

	public static function getAccessTokenEx() {
		$app_id = "180482145397922";
		$my_url = "http://sevendaysgenova.it/Beta/index.php";

		// known valid access token stored in a database
		$access_token = "AAACkJcYqLKIBADvYMrvnBXU67EpxKMrsZBc6aCGIYLedWQkTKJ1fFUrjy1PefzcA7pTstYbzbdNVoXFLLAm22b4rF9ZCQZD";

		$code = $_REQUEST["code"];

		// If we get a code, it means that we have re-authed the user
		//and can get a valid access_token.
		if (isset($code)) {
			$token_url = "https://graph.facebook.com/oauth/access_token?client_id=" . $app_id . "&redirect_uri=" . urlencode($my_url) . "&client_secret=" . $app_secret . "&code=" . $code . "&display=popup";
			$response = file_get_contents($token_url);
			$params = null;
			parse_str($response, $params);
			$access_token = $params['access_token'];
			if ($access_token != '')
				return $access_token;
		}
		// Attempt to query the graph:
		$graph_url = "https://graph.facebook.com/me?" . "access_token=" . $access_token;
		$response = curl_get_file_contents($graph_url);
		$decoded_response = json_decode($response);

		//Check for errors
		if ($decoded_response -> error) {
			// check to see if this is an oAuth error:
			if ($decoded_response -> error -> type == "OAuthException") {
				// Retrieving a valid access token.
				$dialog_url = "https://www.facebook.com/dialog/oauth?" . "client_id=" . $app_id . "&redirect_uri=" . urlencode($my_url);
				echo("<script> top.location.href='" . $dialog_url . "'</script>");
			} else {
				return "other error has happened";
			}
		} else {
			// success
			return ($access_token);
		}
	}

	private static function curl_get_file_contents($URL) {
		$c = curl_init();
		curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($c, CURLOPT_URL, $URL);
		$contents = curl_exec($c);
		$err = curl_getinfo($c, CURLINFO_HTTP_CODE);
		curl_close($c);
		if ($contents)
			return $contents;
		else
			return FALSE;
	}

	public static function IsUserPageAdmin($fb, $pageId, $user, $applicationAT) {
		$retVal = false;
		$at = '';

		$command = "https://graph.facebook.com/{$user}/accounts?access_token=" . $applicationAT;

		//echo "<p>".$command."</p>";
		$admins = json_decode(file_get_contents($command), TRUE);
		//echo $command;
		foreach ($admins['data'] as $key => $value) {
			if ($value['id'] == $pageId) {
				$at = $value['access_token'];
				break;
			}

		}

		if ($at != '') {
			$command = "https://graph.facebook.com/{$pageId}/admins?access_token=" . $at;

			//echo "<p>".$command."</p>";
			$admins = json_decode(file_get_contents($command), TRUE);
			foreach ($admins['data'] as $key => $value) {
				if ($value['id'] == $user) {
					$retVal = true;
					break;
				}

			}

		}

		//echo "Id: ".$userId;
		//echo "Amministratore: ".$retVal;
		return $retVal;
	}

	public static function getNewsLink($nwesId) {
		return "https://www.facebook.com/note.php?note_id=" . $nwesId;
	}

	public static function getEventLink($eventId) {
		return "https://www.facebook.com/events/{$eventId}/";
	}

	public static function getPageLink() {
		return "https://www.facebook.com/Seven.Days.Genova";
	}

	public static function getEventsData($eid, $facebook) {
		$AccessToken = $_SESSION['AT'];
		$graphUrl = 'https://graph.facebook.com/v2.2/' . $eid . '/events?fields=id,name,description,start_time,end_time,updated_time,cover,location&access_token=' . $AccessToken;
		$events = json_decode(file_get_contents($graphUrl), TRUE);
		return $events['data'];
	}

	public static function getAlbumPhotos($aid) {
		$AccessToken = $_SESSION['AT'];
		$url = "https://graph.facebook.com/" . $aid . "?fields=photos.fields(source,picture),count&access_token=" . $AccessToken;
		$album = json_decode(file_get_contents($url, TRUE));
		return $album -> photos -> data;
	}

	public static function getMagicNumbers($pid) {
		$AccessToken = $_SESSION['AT'];
		$url = "https://graph.facebook.com/v2.2/seven.days.genova?fields=checkins,likes,new_like_count,talking_about_count&access_token=" . $AccessToken;
		$magicNumbers = json_decode(file_get_contents($url, TRUE));
		//self::console_log('magic numbers',$magicNumbers);
		return $magicNumbers;
	}

	public static function getAlbumPhotosEx($fb, $aid) {
		//397389466943056/Photos?limit=200&fields=source,picture

		$AccessToken = $_SESSION['AT'];
		//$url = "https://graph.facebook.com/".$aid."/Photos?limit=2000&fields=source,picture&access_token=".$AccessToken;
		$url = "https://graph.facebook.com/v2.2/" . $aid . "/photos?fields=source,picture,images&limit=2000&access_token=" . $AccessToken;
		$album = json_decode(file_get_contents($url, TRUE));
		return $album -> data;
	}

	public static function getPageDescription($uid) {
		$AccessToken = $_SESSION['AT'];
		$url = "https://graph.facebook.com/";
		$url .= $uid . "?fields=description,about&access_token=" . $AccessToken;
		$notes = json_decode(file_get_contents($url, TRUE));
		return $notes -> about;
	}

	public static function getNewsData($uid) {
		$AccessToken = $_SESSION['AT'];
		$url = "https://graph.facebook.com/" . $uid . "?fields=notes.fields(id,message,subject,updated_time)&access_token=" . $AccessToken;
		$notes = json_decode(file_get_contents($url, TRUE));
		return $notes -> notes -> data;
	}

	public static function console_log($desc,$data) {
		echo '<script>';
		echo 'console.log(\'' . $desc . ': ' . json_encode($data) . '\')';
		echo '</script>';
	}

}
?>