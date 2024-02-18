<?php
require 'database/database.php';
require 'models/admin.model.php';
$categorys=getCategorys();
require "views/categories/displayCategory.view.php";