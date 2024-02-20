<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$page = "";
$routes = [
    '/admin-dasboad' => 'controllers/admin/admin.controller.php',
    '/admin' => 'controllers/admin/signin.admin.controller.php',
    // '/trainer-review' => 'controllers/reviews/review.controller.php',
    // '/trainer-classroom' => 'controllers/classroom/classroom.controller.php',
];

if (array_key_exists($uri, $routes)) {
    $page = $routes[$uri];
} else {
   http_response_code(404);
   $page = 'views/errors/404.php';
}

// if ($uri == '/admin'){
//     require $page = 'controllers/admin/signin.admin.controller.php';
// }else{
require "layouts/admin/header.php";
require "layouts/admin/navbar.php";
require $page;
require "layouts/admin/footer.php";
// }
