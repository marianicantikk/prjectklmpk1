<?php
include "inc/Connection.php";
include "app/Pasien.php";
$psn = new Pasien();
$data = $psn->tampil();
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>PASIEN</h4>
            <a href="/prjectklmpk1/index.php/pasien/add" class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>NO</td>
                    <td>NAMA PASIEN</td>
                    <td>TRANSAKSI ID TRANSAKSI</td>
                </tr>
                <?php foreach ($data as $key => $item) : ?>
                    <tr>
                        <td><?= $key + 1; ?></td>
                        <td><?= $item['nama_pasien']; ?></td>
                        <td><?= $item['transaksi_idtransaksi']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>