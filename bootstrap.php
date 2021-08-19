<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//just a file to hold all things together. Includes and the likes

include 'vendor/autoload.php';

 
// Include router class
include('inc/RouteBase.php');


require_once('inc/Database.php');
require_once 'inc/db_connect.php';


include('web_routes.php');


//save the current url to query string

 





