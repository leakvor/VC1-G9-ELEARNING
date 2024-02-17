<?php
require('database/database.php');
require('models/trainer.model.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    var_dump($_POST);
    if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        createTrainer($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['password']);
    }
}


$teachers = getTeacher();
require('views/trainers/adminTrainer.view.php');
