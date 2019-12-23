<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
//require 'admin/connect.php';
require 'includes/config/config.php';
require 'includes/template/header.php';

// $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
// if($actual_link == $config['url_app'].'login.php') {
//   require 'template/navbar_fixed.php';
// }else{
  require 'includes/template/navbar.php';
// }
