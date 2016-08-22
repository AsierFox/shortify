<?php

namespace DB;

abstract class Database {

    protected $dbname = "shortify";

    private $servername = "localhost";
    private $username = "root";
    private $password = "root";

    protected function getServername() : string {
        return $this->servername;
    }

    protected function getUsername() : string {
        return $this->username;
    }

    protected function getPassword() : string {
        return $this->password;
    }

}
