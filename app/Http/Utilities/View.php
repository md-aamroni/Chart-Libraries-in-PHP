<?php

// Session Handling
session_start();


// Required Files Included
if (file_exists('./../config/bootstrap.php')) {
	include './../config/bootstrap.php';
} else {
	include './config/bootstrap.php';
}


// View Files
class View
{
	public static function loadContent($page)
	{
		if (strpos($page, '/')) {
			$dir = explode('/', $page);
			if (file_exists('./../resource/view/content/' . $dir[0] . '/' . $dir[1] . '.php')) {
				$filePath = './../resource/view/content/' . $dir[0] . '/' . $dir[1] . '.php';
			} else {
				$filePath = 'resource/view/content/' . $dir[0] . '/' . $dir[1] . '.php';
			}
		} elseif (strpos($page, '.')) {
			$dir = explode('.', $page);
			if (file_exists('./../resource/view/content/' . $dir[0] . '/' . $dir[1] . '.php')) {
				$filePath = './../resource/view/content/' . $dir[0] . '/' . $dir[1] . '.php';
			} else {
				$filePath = 'resource/view/content/' . $dir[0] . '/' . $dir[1] . '.php';
			}
		} else {
			$dir = '';
			if (file_exists('./../resource/view/content/' . $page . '.php')) {
				$filePath = './../resource/view/content/' . $page . '.php';
			} else {
				$filePath = 'resource/view/content/' . $page . '.php';
			}
		}

		if (file_exists($filePath)) {
			require_once $filePath;
		}
	}

	public static function loadLayouts($page)
	{
		if (strpos($page, '/')) {
			$dir = explode('/', $page);
			if (file_exists('./../resource/view/layout/' . $dir[0] . '/' . $dir[1] . '.php')) {
				$filePath = './../resource/view/layout/' . $dir[0] . '/' . $dir[1] . '.php';
			} else {
				$filePath = 'resource/view/layout/' . $dir[0] . '/' . $dir[1] . '.php';
			}
		} elseif (strpos($page, '.')) {
			$dir = explode('.', $page);
			if (file_exists('./../resource/view/layout/' . $dir[0] . '/' . $dir[1] . '.php')) {
				$filePath = './../resource/view/layout/' . $dir[0] . '/' . $dir[1] . '.php';
			} else {
				$filePath = 'resource/view/layout/' . $dir[0] . '/' . $dir[1] . '.php';
			}
		} else {
			$dir = '';
			if (file_exists('./../resource/view/layout/' . $page . '.php')) {
				$filePath = './../resource/view/layout/' . $page . '.php';
			} else {
				$filePath = 'resource/view/layout/' . $page . '.php';
			}
		}

		if (file_exists($filePath)) {
			require_once $filePath;
		}
	}
}
