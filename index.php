<?php
require 'utils/url.php';
require 'database/database.php';
if (urlIs("/admin")|| urlIs("/adminTrainer")|| urlIs("/addTrainer")) { 
    require "admin_router.php";
} else if (urlIs('/signin') || urlIs('/signup')) {
    require "authentication_router.php";
}else{
    require 'router.php';
}


