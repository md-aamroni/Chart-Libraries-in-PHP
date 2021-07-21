<?php

// Variable Dumper
function dd($var, $type = null)
{
	if (!is_null($type) && $type === 'json') {
		echo json_encode($var, JSON_PRETTY_PRINT);
	} elseif (!is_null($type) && $type === 'dump') {
		if (is_array($var)) {
			echo '<pre>';
			var_dump($var);
			echo '</pre>';
		} else {
			echo $var . ' (type of "' . gettype($var) . '" ' . strlen($var) . ')';
		}
	} else {
		if (is_array($var)) {
			echo '<pre>';
			print_r($var);
			echo '</pre>';
		} else {
			echo $var . ' (type of "' . gettype($var) . '" ' . strlen($var) . ')';
		}
	}
}


// File Path Parser
function asset($fileName, $version = false)
{
	if (file_exists("./../public/" . $fileName)) {
		$getPath = "./../public/" . $fileName;
	} else {
		$getPath = "public/" . $fileName;
	}

	if (is_bool($version) && $version === true) {
		$filePath = $getPath . '?' . rand(0, 9) . '.' . rand(0, 9);
	} else {
		$filePath = $getPath;
	}

	return $filePath;
}
