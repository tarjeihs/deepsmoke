<?php

require 'AbstractDataHandler.php';

class UserData extends AbstractDataHandler {

    private $accountData = array();

    private $uuid = 0;
    private $steamId = 0;
    private $communityVisibilityState = 0;
    private $profileState = 0;
    private $personaName = 0;
    private $lastLogOff = 0;
    private $profileUrl = null;
    private $avatar = null;
    private $avatarMedium = null;
    private $avatarFull = null;
    private $personaState = 0;
    private $primaryClanID = 0;
    private $timecreated = 0;
    private $realName = 0;
    private $permissions = 0;
    private $joinDate = null;

    public function getUUID() {
        return $this->uuid;
    }

    public function setUUID($value) {
        $this->uuid = $value;
    }

    public function getSteamID() {
        return $this->steamId;
    }

    public function setSteamID($value) {
        $this->steamId = $value;
    }

    public function getCommunityVisibilityState() {
        return $this->communityVisibilityState;
    }

    public function setCommunityVisibilityState($value) {
        $this->communityVisibilityState = $value;
    }

    public function getProfileState() {
        return $this->profileState;
    }

    public function setProfileState($value) {
        $this->profileState = $value;
    }

    public function getPersonaName() {
        return $this->personaName;
    }

    public function setPersonaName($value) {
        $this->personaName = $value;
    }

    public function getLastLogOff() {
        return $this->lastLogOff;
    }

    public function setLastLogOff($value) {
        $this->lastLogOff = $value;
    }

    public function getProfileUrl() {
        return $this->profileUrl;
    }

    public function setProfileUrl($value) {
        $this->profileUrl = $value;
    }

    public function getAvatar() {
        return $this->avatar;
    }

    public function setAvatar($value) {
        $this->avatar = $value;
    }

    public function getAvatarMedium() {
        return $this->avatarMedium;
    }

    public function setAvatarMedium($value) {
        $this->avatarMedium = $value;
    }

    public function getAvatarFull() {
        return $this->avatarFull;
    }

    public function setAvatarFull($value) {
        $this->avatarFull = $value;
    }

    public function getPersonaState() {
        return $this->personaState;
    }

    public function setPersonaState($value) {
        $this->personaState = $value;
    }

    public function getPrimaryClanID() {
        return $this->primaryClanID;
    }

    public function setPrimaryClanID($value){
        $this->primaryClanID = $value;
    }

    public function getTimeCreated() {
        return $this->timecreated;
    }

    public function setTimeCreated($value) {
        $this->timecreated = $value;
    }

    public function getRealName() {
        return $this->timecreated;
    }

    public function setRealName($value) {
        $this->realName = $value;
    }

    public function getPermissions() {
        return $this->permission;
    }

    public function setPermissions($value) {
        $this->permissions = $value;
    }

    public function getJoinDate() {
        return $this->joinDate;
    }

    public function setJoinDate($value) {
        $this->joinDate = $value;
    }

    protected function serializable($value = TRUE) {
        if ($value) return true;
    }
}
