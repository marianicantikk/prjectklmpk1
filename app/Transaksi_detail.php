<?php

Class Transaksi_detail
{
    protected $conn;

    public function __construct()
    {
        $this->conn = new Connection();
    }
    public function tampil(): array
    {
        $string = "SELECT * FROM transaksi_detail";
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
            $string = "INSERT INTO transaksi_detail (id_tindakan, transaksi_id_transaksi)
            value(:id_tindakan, :transaksi_id_transaksi)";
            $sql = $this->conn->conn->prepare($string);
            $sql->execute($data);
            return true;
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}