<link rel="icon" type="image/x-icon" href="/favicon.png">

<?php
# front controller

use App\Models\Product;
use App\Models\User;

include 'bootstrap/init.php';

// $user_data = [
//     'id' => rand(5, 1000),
//     'name' => 'mohammad'
// ];

// $user_model = new User();
// $user_model->create($user_data);
// $user = $user_model->find(2);
// $user = $user_model->getAll();
// var_dump($user);

$productModel = new Product();

// for ($i = 1; $i <= 20; $i++) {
//     $productModel->create([
//         'id' => $i,
//         'title' => "Product-$i"
//     ]);
// }
var_dump($productModel->getAll());

// $router = new App\Core\Routing\Router();
// $router->run();
