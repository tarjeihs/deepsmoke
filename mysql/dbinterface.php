<?php

class DBInterface {

	private $dbms = NULL;

	public function __construct() {
		$this->dbms = DBMS::getInstance();
	}

	public function insertSteamData() {
		$insert =
			'INSERT INTO account (
			steamid,
			communityvisibilitystate,
			profilestate,
			personaname,
			lastlogoff,
			profileurl,
			avatar,
			avatarmedium,
			avatarfull,
			personastate,
			primaryclanid,
			timecreated,
			realname)

			VALUES

			(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';

		if ($prepStmt = $this->dbms->getConnection()->prepare($insert)) {
			$prepStmt->bind_param(
				'siisissssisis',
				$_SESSION['STEAM']['STEAMID'],
				$_SESSION['STEAM']['COMMUNITYVISIBILITYSTATE'],
				$_SESSION['STEAM']['PROFILESTATE'],
				$_SESSION['STEAM']['PERSONANAME'],
				$_SESSION['STEAM']['LASTLOGOFF'],
				$_SESSION['STEAM']['PROFILEURL'],
				$_SESSION['STEAM']['AVATAR'],
				$_SESSION['STEAM']['AVATARMEDIUM'],
				$_SESSION['STEAM']['AVATARFULL'],
				$_SESSION['STEAM']['PERSONASTATE'],
				$_SESSION['STEAM']['PRIMARYCLANID'],
				$_SESSION['STEAM']['TIMECREATED'],
				$_SESSION['STEAM']['REALNAME']
			);

			# If values are correct and healthy, insert into table
			# Should close after execute has been called

			$prepStmt->execute();
			$prepStmt->close();
		}
	}

	public function updateSteamData() {

	}

	public function deleteSteamData() {

	}

	# Check if user exists within our database
	# Search for specified user with given steamid
	# from current session

	private function userExists() {
		$steamid = $this->fetchDataRow('steamid', 'steamid', $_SESSION['STEAM']['STEAMID']);
		return $steamid != NULL ? TRUE : FALSE;
	}

	public function insertIfNotExists() {
		if (isset($_SESSION['STEAMCLIENT'])) {
			if (!$this->userExists()) $this->insertSteamData();			
		}
	}

	public function getUserRank() {
		$rank = $this->fetchDataRow('rank', 'steamid', $_SESSION['STEAM']['STEAMID']);
		return $rank > 0 ? $rank : 1;
	}

	# Fetches data from database by specified
	# returning type, target and value
	# Function returns a single value and should
	# not be used for multiresults
	private function fetchDataRow($type, $target, $value) {
		$sql = 'SELECT ' . $type . ' FROM account WHERE ' . $target . '=' . $value;
		$data = NULL;

		if ($result = $this->dbms->getConnection()->query($sql)) {
			while ($row = $result->fetch_row()) {
				$data = $row[0];
			}
			$result->close();
		}

		return $data;
	}

	public function fetchDatabasePopulationRecent() {
		$sql = 'SELECT id, steamid, realname, profileurl, rank
			FROM account IS NOT NULL ORDER BY id DESC LIMIT 15';

		$data[][] = NULL;
		$counter = 0;

		if ($result = $this->dbms->getConnection()->query($sql)) {
			while($row = $result->fetch_row()) {
				$data[$counter][0] = $row[0];
				$data[$counter][1] = $row[1];
				$data[$counter][2] = $row[2];
				$data[$counter][3] = $row[3];
				$data[$counter][4] = $row[4];

				$counter++;

			}

			$result->close();
			return $data;
		}
	}
}
