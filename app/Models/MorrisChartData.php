<?php

namespace App\Models;

use App\Http\Core\ChartInterface;
use App\Http\Core\Controller;

class MorrisChartData implements ChartInterface
{
	public $connect;

	public function __construct()
	{
		$this->connect = new Controller;
		$this->connect = $this->connect->databaseConnection;
	}

	public function lineChart()
	{
	}

	public function barChart()
	{
	}

	public function areaChart()
	{
	}

	public function init()
	{
	}
}
