<?php

class Transaksi
{
    protected $conn;

    public function __construct()
    {
        $this->conn = new Connection();
    }
    public function tampil(): array
    {
        $string = "SELECT * FROM transaksi";
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
            $string = "INSERT INTO transaksi (tanggal, idlab, id_medicalCheckup, tindakan_detail_id_tindakan_detail, idkasir)
            value(:tanggal, :idlab, :id_medicalCheckup, :tindakan_detail_id_tindakan_detail, :idkasir)";
            $sql = $this->conn->conn->prepare($string);
            $sql->execute($data);
            return true;
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}