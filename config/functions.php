<?php

// Array Merge
function arrayTotal($array, $index)
{
	if (!empty($array) && is_array($array)) {
		$total = [];
		foreach ($array as $each) {
			array_push($total, $each[$index]);
		}
		return array_sum($total);
	}
}


// Total Sum
function totalSum($array, $index, $arg1, $val1, $arg2 = false, $val2 = false)
{
	if (!empty($array) && is_array($array)) {
		$total = [];
		foreach ($array as $each) {
			if (!empty($arg2) && !empty($val2)) {
				if ($each[$arg1] === $val1 && $each[$arg2] === $val2) {
					array_push($total, $each[$index]);
				} else {
					if ($each[$arg1] === $val1) {
						array_push($total, $each[$index]);
					}
				}
			}
		}

		if (!empty($total) && is_array($total)) {
			return array_sum($total);
		}
	}
}


// Average Total
function totalAverage($array, $index, $arg1, $val1, $arg2 = false, $val2 = false)
{
	if (!empty($array) && is_array($array)) {
		$total = [];
		foreach ($array as $each) {
			if (!empty($arg2) && !empty($val2)) {
				if ($each[$arg1] === $val1 && $each[$arg2] === $val2) {
					array_push($total, $each[$index]);
				}
			} elseif (empty($arg2) && empty($val2)) {
				if ($each[$arg1] === $val1) {
					array_push($total, $each[$index]);
				}
			}
		}

		if (!empty($total) && is_array($total)) {
			return sprintf('%.2f', array_sum($total) / count($total));
		} elseif (!empty($total) && !is_array($total)) {
			return sprintf('%.2f', $total);
		}
	}
}


// Array Unique
function arrayUnique($array, $arg1, $arg2 = false, $isExploded = false)
{
	$data = $unique = [];
	if (!empty($array) && is_array($array)) {
		foreach ($array as $arr) {
			if (!empty($arg2)) {
				array_push($data, $arr[$arg1] . ' ' . $arr[$arg2]);
			} else {
				array_push($data, $arr[$arg1]);
			}
		}

		if (!empty($data) && is_array($data)) {
			$data = implode(',', $data);
			$data = array_unique(explode(',', $data));
			foreach ($data as $each) {
				array_push($unique, $each);
			}
		}

		if (is_bool($isExploded) && $isExploded === true) {
			foreach ($unique as $u) {
				$result[] =  explode(' ', $u);
			}
			return $result;
		} else {
			return $unique;
		}
	}
}


function mergeAndUnique($array)
{
	$unique = [];
	if (!empty($array) && is_array($array)) {
		$arrays = array_merge_recursive($array);
		foreach ($arrays as $each) {
			foreach ($each as $arr) {
				array_push($unique, $arr);
			}
		}
		asort($unique);
		return $unique;
	}
}


// Array Merge
function arrayTotalOnMonths($array, $index, $mon)
{
	if (!empty($array) && is_array($array)) {
		$total = [];
		foreach ($array as $each) {
			if ($mon == $each['months']) {
				array_push($total, $each[$index]);
			}
		}
		return array_sum($total);
	}
}

function arrayTotalOnDays($array, $index, $day, $status)
{
	if (!empty($array) && is_array($array)) {
		$total = [];
		foreach ($array as $each) {
			if ($day === $each['days'] && $each['status'] === $status && $each['months'] === date('M') && $each['years'] === date('Y')) {
				array_push($total, $each[$index]);
			}
		}
		return array_sum($total);
	}
}

function arrayTotalOnYears($array, $index, $year)
{
	if (!empty($array) && is_array($array)) {
		$total = [];
		foreach ($array as $each) {
			if ($year == $each['years']) {
				array_push($total, $each[$index]);
			}
		}
		return array_sum($total);
	}
}


// Total Stock Calculation
function totalStock($array, $index)
{
	if (!empty($array) && is_array($array)) {
		$total = [];
		foreach ($array as $each) {
			array_push($total, $each[$index]);
		}
		return $total;
	}
}
