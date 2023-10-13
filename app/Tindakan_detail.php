<?php

class Tindakan_detail
{
    protected $conn;

    public function __construct()
    {
        $this->conn = new Connection();
    }
    public function tampil(): array
    {
        $string = "SELECT * FROM tindakan_detail";
        $sql = $this->conn->conn->prepare($string);
        $sql->execute();
        $data = [];
        while ($row = $sql->fetch()) {
            $data[] = $row;
        }
        return $data;
    }
     function tambah($data)
    {
        try {
            $string = "INSERT INTO tindakan_detail (tindakan, tarif)
            value(:tindakan, :tarif)";
            $sql = $this->conn->conn->prepare($string);
            $sql->execute($data);
            return true;
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}