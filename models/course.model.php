<?php 

function getCourse() : array
{
    global $connection;
    $statement = $connection->prepare("SELECT course.course_id, course.img, course.title, users.username,category.cateName FROM course INNER JOIN category ON category.cat_id=course.cate_id inner join users on users.user_id=course.user_id");
    $statement->execute();
    return $statement->fetchAll();
}