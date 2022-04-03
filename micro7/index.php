<?php
# front controller
include 'bootstrap/init.php';

echo random_element([1, 2, 3, 4, 5, 6, 7, 8, 9]);

echo "<hr>";

echo site_url('panel/users');

?>

<link rel="stylesheet" href="<?= asset_url('css/style.css'); ?>">