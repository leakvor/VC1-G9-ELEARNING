<?php
// require('database/database.php');
require('models/trainer.model.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        createTrainer($_POST['username'], $_POST['email'], $_POST['password']);
    }
}
$teachers = getTeacher();
require('views/trainers/adminTrainer.view.php');
// header('location: /adminTrainer')
