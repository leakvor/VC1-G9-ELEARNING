<?php

function createAcc(string $firstName, string $lastName, string $email, string $password) : bool
{
    global $connection;
    $statement = $connection->prepare("insert into users(firstName, lastName, email, password, role) values(:firstName, :lastName, :email, :password, :role)");
    $statement->execute([
        ':firstName' => $firstName,
        ':lastName' => $lastName,
        ':email' => $email,
        ':password' => $password,
        ':role' => 'user',
    ]);

    return $statement->rowCount() > 0;
}

function accountExist(string $email): array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM users WHERE email = :email");
    $statement->execute([
        ':email' => $email,
    ]);
    if ($statement->rowCount() > 0){
        return $results = $statement->fetch(PDO::FETCH_ASSOC);
    }else{
        return [];
    }
}

// function getPost(int $id) : array
// {
//     global $connection;
//     $statement = $connection->prepare("select * from posts where id = :id");
//     $statement->execute([':id' => $id]);
//     return $statement->fetch();
// }

// function getPosts() : array
// {
//     global $connection;
//     $statement = $connection->prepare("select * from posts");
//     $statement->execute();
//     return $statement->fetchAll();
// }

// function updatePost(string $title, string $description, int $id) : bool
// {
//     global $connection;
//     $statement = $connection->prepare("update posts set title = :title, description = :description where id = :id");
//     $statement->execute([
//         ':title' => $title,
//         ':description' => $description,
//         ':id' => $id

//     ]);

//     return $statement->rowCount() > 0;
// }

// function deletePost(int $id) : bool
// {
//     global $connection;
//     $statement = $connection->prepare("delete from posts where id = :id");
//     $statement->execute([':id' => $id]);
//     return $statement->rowCount() > 0;
// }