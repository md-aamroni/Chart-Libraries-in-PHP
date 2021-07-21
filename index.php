<?php

require_once './config/bootstrap.php';

use App\Http\Controllers\ChartController;

use App\Models\MorrisChartData;

$morris = new MorrisChartData();
$app = new ChartController($morris);

// if ($ctrl->connect) {
// 	echo 'true';
// } else {
// 	echo 'false';
// }

echo '<pre>';
print_r($app->get());
echo '</pre>';
// echo '<pre>';
// print_r($_SERVER);
// print_r($_ENV);
// echo '</pre>';
