<?php
class Database {
    private $host = "localhost";
    private $password = "";
    private $db_name = "db_sekolah";
    private $user = "root";
    private $charset = "utf8mb4";
    private $conn;

    public function getConn() {
        $this->conn = null;
        $dsn = "mysql:host=$this->host;dbname=$this->db_name;charset=$this->charset;";
        try{
            $this->conn = new PDO($dsn, $this->user, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "eror: " . $e->getMessage();
        }
        return $this->conn;
    }
        
}
        