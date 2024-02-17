<?php
session_start();
require('../../database/database.php');
require('../../models/students.model.php');

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_BCRYPT);
    
    $user = accountExist($email);
    var_dump($user);
    
    if (count($user) == 0){
        $createAcc = createAcc($firstName, $lastName, $email, $password);
        header("Location: /signins");
        $_SESSION['success'] = "Create account succesfuly";
    }else{
        echo "Account not exist!";
    }
}