<?php
//url
define("URLDEFAULT", "/MNM");

// Process URL from browser
ob_start();
require_once "./mvc/core/App.php";

// How controllers call Views & Models
require_once "./mvc/core/Controller.php";

// Connect Database
require_once "./mvc/core/DB.php";
?>