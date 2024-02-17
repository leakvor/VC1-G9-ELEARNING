<?php
function getTeacher() : array
{
    global $connection;
    $statement = $connection->prepare("select * from users where role=2");
    $statement->execute();
    return $statement->fetchAll();
}

function createTrainer(string $firstName, string $lastName, string $email, string $password) : bool
{
    global $connection;
    $statement = $connection->prepare("insert into users (firstName, lastName,email,password,role) values (:firstName, :lastName, :email,:password,:role)");
    $statement->execute([
        ':firstName'=>$firstName,
        ':lastName'=>$lastName,
        ':email'=>$email,
        ':password'=>$password,
        ':role'=>2,

    ]);

    return $statement->rowCount() > 0;
}