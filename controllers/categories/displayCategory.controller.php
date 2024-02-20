<?php
require 'database/database.php';
require 'models/category.model.php';
$categorys=getCategorys();
require "views/categories/displayCategory.view.php";