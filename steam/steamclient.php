<?php

require_once ( dirname(__FILE__) . DIRECTORY_SEPARATOR . '/lightopenid.php');

defined('STEAM_APIKEY') or define('STEAM_APIKEY', 'A3BBCB851B9986BDC17122DD5D8D5CB7');
defined('STEAM_DOMAIN') or define('STEAM_DOMAIN', '88.84.181.120/');
defined('STEAM_CALLBACK_LOGIN') or define('STEAM_CALLBACK_LOGIN', 'index.php');
defined('STEAM_CALLBACL_LOGOUT') or define('STEAM_CALLBACK_LOGOUT', 'index.php');

#
# Defines which are not to be used by regular
#

defined('STEAM_ISTEAMUSER_URI') or define('STEAM_ISTEAMUSER_URI', "https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=");
defined('STEAM_OPENID_URI') or define('STEAM_OPENID_URI', 'https://steamcommunity.com/openid');

class SteamClient {

    # In constructor we need to define STEAM session
    # as an array, otherwise we get an illegal string
    # offset within the multidimensional session array.
    # Calling functions authOpenID() and destroy() as
    # these dont operate unless GET is activated

	public function __construct() {
		$this->authOpenID();	# These are predefined and
		$this->update();		# will only be charged when
		$this->destroy();		# the client makes an corresponding action
	}

	  # Stores all Steam Client data as Session variables,
    # will later be added as batch to the database.
    # Applies to function update(), will only be executed
    # each 12hrs the user is within our server

	private function clientValidation() {
		if (isset($_SESSION['STEAMCLIENT'])) {
			if (empty($_SESSION['STEAM']['LASTUPDATE']) or empty($_SESSION['STEAM']['PERSONANAME'])) {

				        $url = file_get_contents(STEAM_ISTEAMUSER_URI . STEAM_APIKEY . '&steamids=' . $_SESSION['STEAMCLIENT']);
                $content = json_decode($url, true);

                $_SESSION['STEAM']['STEAMID'] = $content['response']['players'][0]['steamid'];
                $_SESSION['STEAM']['COMMUNITYVISIBILITYSTATE'] = $content['response']['players'][0]['communityvisibilitystate'];
                $_SESSION['STEAM']['PROFILESTATE'] = $content['response']['players'][0]['profilestate'];
                $_SESSION['STEAM']['PERSONANAME'] = $content['response']['players'][0]['personaname'];
                $_SESSION['STEAM']['LASTLOGOFF'] = $content['response']['players'][0]['lastlogoff'];
                $_SESSION['STEAM']['PROFILEURL'] = $content['response']['players'][0]['profileurl'];
                $_SESSION['STEAM']['AVATAR'] = $content['response']['players'][0]['avatar'];
                $_SESSION['STEAM']['AVATARMEDIUM'] = $content['response']['players'][0]['avatarmedium'];
                $_SESSION['STEAM']['AVATARFULL'] = $content['response']['players'][0]['avatarfull'];
                $_SESSION['STEAM']['PERSONASTATE'] = $content['response']['players'][0]['personastate'];
                $_SESSION['STEAM']['PRIMARYCLANID'] = $content['response']['players'][0]['primaryclanid'];
                $_SESSION['STEAM']['TIMECREATED'] = $content['response']['players'][0]['timecreated'];

                if (isset($content['response']['players'][0]['realname'])) {
                    $_SESSION['STEAM']['REALNAME'] = $content['response']['players'][0]['realname'];
                } else {
                    $_SESSION['STEAM']['REALNAME'] = 'Undefined';
                }

                $_SESSION['STEAM']['LASTUPDATE'] = time();
			}
		}
	}

	# Requested by each access through the webpage,
    # will be executed at the beginning of each
    # document. Function will be called if client
    # enters the prefered GET parameter
	private function authOpenID() {
		if (isset($_GET['steam_callback_login'])) {
			try {
				$openid = new LightOpenID(STEAM_DOMAIN);

				if ($openid->mode) {
					if ($openid->validate()) {
						$id = $openid->identity;

						$pointer = "/^https?:\/\/steamcommunity\.com\/openid\/id\/(7[0-9]{15,25}+)$/";

						preg_match($pointer, $id, $matches);

						$_SESSION['STEAMCLIENT'] = $matches[1];

						// Has to be called at first instantiation, otherwise the LASTUPDATE session will
                        // never be initialized and therefore never update
						if ($_SESSION['STEAM']['STEAMID'] == NULL) $this->clientValidation();

						if (!headers_sent()) {
							header('Location: ' . STEAM_CALLBACK_LOGIN);
							exit;
						}
					}
				} else {
					$openid->identity = STEAM_OPENID_URI;

					header('Location: ' . $openid->authUrl());
				}
			} catch (ErrorException $ex) {
				die('Failed to authenticate Steam data, please refresh and contact an administrator');
			}
		}
	}

	private function update() {
		if (isset($_SESSION['STEAMCLIENT'])) {
			if (!empty($_SESSION['STEAM']['LASTUPDATE']) &&
				$_SESSION['STEAM']['LASTUPDATE'] + (12*60*60) < time()) {

				unset($_SESSION['STEAM']['LASTUPDATE']);

				$this->clientValidation();

				header('Location: ' . STEAM_CALLBACK_LOGIN);
				exit;
			}
		}
	}

	private function destroy() {
		if (isset($_GET['steam_callback_logout'])) {
			if (isset($_SESSION['STEAMCLIENT'])) {
				session_unset();
				session_destroy();

				header('Location: ' . STEAM_CALLBACK_LOGOUT);
				exit;
			}
		}
	}
}
