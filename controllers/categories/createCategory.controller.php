<h1>leak</h1>
<?php
require '../../database/database.php';
require '../../models/category.model.php';
// models/admin.model.php;
// require 'models/category.model.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    var_dump($_POST);
    createCategory($_POST['cateName']);
}

header ('Location: /displayCategory');