<?php

class Pasien
{
    protected $conn;

    public function __construct()
    {
        $this->conn = new Connection();
    }
    public function tampil(): array
    {
        $string = "SELECT * FROM pasien ";
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
            $string = "INSERT INTO pasien (nama_pasien, transaksi_idtransaksi)
            value(:nama_pasien, :transaksi_idtransaksi)";
            $sql = $this->conn->conn->prepare($string);
            $sql->execute($data);
            return true;
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}
