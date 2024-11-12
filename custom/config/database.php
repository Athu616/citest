<?php
class Database {
    private $host = 'localhost';
    private $dbname = 'my_project';
    private $username = 'root';
    private $password = '';
    private $conn;

    public function connect() {
        $this->conn = null;

        try {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
        } catch (mysqli_sql_exception $e) {
            die("Connection failed: " . $e->getMessage());
        }

        return $this->conn;
    }
}
