<?php
include "../inc/Connection.php";
if (isset($_POST['tambah_pasien'])) {
    include "Pasien.php";
    $psn = new Pasien();
    // Mapping data
    $data = [
        "nama_pasien" => $_POST['nama_pasien'],
        "transaksi_idtransaksi" => $_POST['transaksi_idtransaksi'],
    ];
    // Proses Tambah
    $psn->tambah($data);
    header("Location: http://localhost/prjectklmpk1/index.php/pasien");
} else if (isset($_POST['tambah_laboraturium'])) {
    include "Laboraturium.php";
    $lbtrm = new Laboraturium();
    // Mapping data
    $data = [
        "periksa"=>$_POST['periksa'],
        "lokasi"=>$_POST['lokasi'],
        "id_medicalCheckup"=>$_POST['id_medicalCheckup'],
    ];
    // Proses Tambah
    $lbtrm->tambah($data);
    header("Location: http://localhost/prjectklmpk1/index.php/laboraturium");
} else if (isset($_POST['tambah_transaksi'])) {
    include "Transaksi.php";
    $trsk = new Transaksi();
    // Mapping data
    $data = [
        "tanggal"=>$_POST['tanggal'],
        "idlab"=>$_POST['idlab'],-
        "id_medicalcheckup"=>$_POST['id_medicalcheckup'],
        "tindakan_detail"=>$_POST['tindakan_detail'],
        "id_tindakan_detail"=>$_POST['id_tindakan_detail'],
        "idkasir"=>$_POST['idkasir'],
    ];
    // Proses Tambah
    $trsk->tambah($data);
    header("Location: http://localhost/prjectklmpk1/index.php/transaksi");
} else if (isset($_POST['tambah_transaksi_detail'])) {
    include "Transaksi_detail.php";
    $trsk_dtl = new Transaksi_detail();
    // Mapping data
    $data = [
        "id_tindakan"=>$_POST['id_tindakan'],
        "transaksi_id_transaksi"=>$_POST['transaksi_id_transaksi'],
    ];
     // Proses Tambah
    $trsk_dtl->tambah($data);
    header("Location: http://localhost/prjectklmpk1/index.php/transaksi_detail");
}else if (isset($_POST['tambah_tindakan_detail'])) {
    include "Tindakan_detail.php";
    $tndkn_dtl = new Transaksi_detail();
    // Mapping data
    $data = [
        "tindakan"=>$_POST['tindakan'],
        "tarif"=>$_POST['tarif'],
    ];
    // Proses Tambah
    $tndkn_dtl->tambah($data);
    header("Location: http://localhost/prjectklmpk1/index.php/tindakan_detail");
}else if (isset($_POST['tambah_kasir_detail'])) {
    include "Kasir_detail.php";
    $ksr_dtl = new Kasir_detail();
    // Mapping data
    $data = [
        "nama_kasir"=>$_POST['nama_kasir'],
    ];
    // Proses Tambah
    $ksr_dtl->tambah($data);
    header("Location: http://localhost/prjectklmpk1/index.php/kasir_detail");
}