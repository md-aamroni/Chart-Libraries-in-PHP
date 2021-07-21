<?php

require_once './config/bootstrap.php';

use App\Http\Controllers\ChartController;

use App\Models\MorrisChartData;

$morris = new MorrisChartData();
$app = new ChartController($morris);
?>
