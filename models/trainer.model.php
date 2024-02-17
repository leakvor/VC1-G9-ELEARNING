<?php

function getTeacher() : array
{
    global $connection;
    $statement = $connection->prepare("select * from users where role='teacher'");
    $statement->execute();
    return $statement->fetchAll();
}

function createTrainer(string $username, string $email, string $password) : bool
{
    global $connection;
    $statement = $connection->prepare("insert into users (username,email,password,role) values (:username, :email,:password,:role)");
    $statement->execute([
        ':username'=>$username,
        ':email'=>$email,
        ':password'=>$password,
        ':role'=>"teacher",

    ]);

    return $statement->rowCount() > 0;
}