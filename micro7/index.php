<?php
# front controller

// use App\Utilities\Asset;

// use App\Utilities\Url;

// use App\Utilities\Currency;

use App\Utilities\Lang;

include 'bootstrap/init.php';

// echo Asset::css('style.css');
// echo Asset::js('script.js');

// echo Url::current();

// echo Currency::format_price_in_hezar_toman(12000);
// echo Currency::format_price_in_rial(12000);

$text = "این متن در 15 فروردین سال 1401 نوشته شده است";
echo Lang::persian_numbers($text);
// echo $text;
