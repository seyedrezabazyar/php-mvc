<link rel="icon" type="image/x-icon" href="/favicon.png">

<?php
# front controller

use App\Models\User;

include 'bootstrap/init.php';

$user_data = [
    'name' => 'Ali',
    'email' => 'ali@gmail.com',
    'password' => '123456'
];

$user_model = new User();
$result = $user_model->create($user_data);
// $user = $user_model->getAll();
// var_dump($result);

for ($i = 1; $i <= 20; $i++) {
    $user_model->create([
        'name' => "User-$i",
        'email' => "user-$i@gmail.com",
        'password' => "Pass-$i"
    ]);
}

// $productModel = new Product();
// for ($i = 1; $i <= 20; $i++) {
//     $productModel->create([
//         'id' => $i,
//         'title' => "Product-$i"
//     ]);
// }
// var_dump($productModel->getAll());

// $router = new App\Core\Routing\Router();
// $router->run();
