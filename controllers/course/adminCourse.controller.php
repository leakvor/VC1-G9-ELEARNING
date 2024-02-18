<?php 
require "models/course.model.php";
$courses=getCourse();
require "views/course/adminCourse.view.php";