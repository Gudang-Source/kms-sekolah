<?php
class Database{
    private $_host = "localhost";
    private $_username = "root";
    private $_password = "";
    private $_db = "db_kms";
    protected $conn;

    public function __construct()
    {
        if (!isset($this->conn)) {
            $this->conn = new mysqli($this->_host, $this->_username, $this->_password, $this->_db);
            if (!$this->conn) {
                echo "Tidak bisa terhubung ke database";
                exit;
            }
            return $this->conn;
        }
    }
}


?>