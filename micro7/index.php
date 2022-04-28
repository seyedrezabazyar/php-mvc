<link rel="icon" type="image/x-icon" href="/favicon.png">

<?php
# front controller

use App\Models\User;

include 'bootstrap/init.php';

$user_data = [
    'id' => rand(5, 1000),
    'name' => 'mohammad'
];

$user_model = new User();
$user_model->create($user_data);

// $router = new App\Core\Routing\Router();
// $router->run();
