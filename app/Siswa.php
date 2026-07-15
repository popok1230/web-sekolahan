<?php
class Siswa {
    public $db;
    private $namaTable = "siswa";

    public function __construct($db){
        $this->db = $db;
    }

    public function readAll(){
        $query = "SELECT * FROM $this->namaTable";
        $statement = $this->db->prepare($query);
        $statement->execute();
        return $statement;
    }
}