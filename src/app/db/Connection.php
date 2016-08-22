<?php

namespace DB\DBConnection;

include_once 'Database.php';

use DB\Database as Database;

class DBConnection extends Database {

	private $CONN_DRIVER;
	private $ERRMODE;

	private $conn;

	public function __construct() {
		$this->CONN_DRIVER = 'mysql:host=' . parent::getServername() . '.;dbname=' . $this->$dbname;
		$ERRMODE = false;
	}

	/**
	 * Runs the SQL statement passed by parameter.
	 *
	 * @param string $sql SQL statement to execute
	 *
	 * @throws PDOException If the statement throws an error
	 */
	public function runSQL(string $sql) {
		$conn->exec($sql);
	}

	public function open() {
	    $conn = new PDO($this->CONN_DRIVER, parent::getUsername(), parent::getPassword());
	    if ($ERRMODE) {
	    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    }
	    if (!$conn) {
			echo "Connection failed: " . mysqli_connect_error();
		}
	}
	
	public function close() {
		$conn = null;
	}

}
