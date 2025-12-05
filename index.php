<?php

$uri= parse_url($_SERVER['REQUEST_URI'])['path'];






$routes=[
'/'=>'controllers/home.php',
'/about'=>'controllers/about.php',
'/contact'=>"controllers/contact.php",
'/services'=>'controllers/service.php'



];