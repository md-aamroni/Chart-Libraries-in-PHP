<?php

namespace App\Http\Controllers;

class ChartController
{
	public $chartLib;

	public function __construct(...$chartLibraries)
	{
		$this->chartLib = $chartLibraries;
	}

	public function get()
	{
		foreach ($this->chartLib as $chart) {
			if ($chart instanceof \App\Models\MorrisChartData) {
				return $chart->init();
			}
		}
	}
}
