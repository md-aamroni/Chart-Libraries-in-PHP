<?php

namespace App\Http\Core;

use App\Http\Core\Database;
use Exception;

class Controller extends Database
{
	public $databaseConnection;

	public function __construct()
	{
		$this->databaseConnection = $this->connection();

		try {
			if ($this->databaseConnection) {
				return $this->databaseConnection;
			} else {
				throw new Exception('Oops! ' . DB['database'] . ' is not exist');
			}
		} catch (Exception $e) {
			echo $e->getMessage();
			exit();
		}
	}
}
