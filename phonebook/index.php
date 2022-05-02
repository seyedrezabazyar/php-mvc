<link rel="icon" type="image/x-icon" href="/favicon.png">

<?php
# front controller

use App\Models\Product;
use App\Models\User;

include 'bootstrap/init.php';

// $user_model = new User();

// $user = $user_model->find(17);
// var_dump($user);

// $result = $user_model->getAll();
// var_dump($result);

// $result = $user_model->get(['id', 'name', 'email'], ['email[~]' => 'ali']);
// var_dump($result);

// $result = $user_model->update(['name' => 'ali'], ['id[<=]' => 10]);
// var_dump($result);

// $result = $user_model->delete(['id[>]' => 10]);
// var_dump($result);

// $result = $user_model->count(['id[>]' => 8]);
// var_dump($result);

// $result = $user_model->sum('id', ['id[>]' => 8]);
// var_dump($result);


// $product_model = new Product();

// for ($i = 1; $i <= 20; $i++) {
//     $product_model->create([
//         'title' => "Product-$i",
//         'price' => rand(1, 100) * 1000
//     ]);
// }

// var_dump($product_model->getAll());

$router = new App\Core\Routing\Router();
$router->run();
