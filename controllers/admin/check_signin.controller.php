<?php
require('../../database/database.php');
require('../../models/students.model.php');


if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $adminAcc = accountExist($email);

    if (count($adminAcc) != 0){
        if ($password == "%senrin"){
            header('Location: /admin-acc');
            header('Location: /admin');
        }else{
            header('Location: /admin');
        }
    }
}