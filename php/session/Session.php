<?php

class Session {
    public function __construct() {
        if (!session_id()) {
            session_start();
        }
    }

    public function set($key, $value) {
        if (session_id()) {
            $_SESSION[$key] = $value;
        }
    }

    public function get($key) {
        if (session_id()) {
            return $_SESSION[$key];
        }
    }
}