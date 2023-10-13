<?php
include "inc/Connection.php";
include "app/Transaksi.php";
$trsk = new Transaksi();
$data = $trsk->tampil();
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>TRANSAKSI</h4>
            <a href="/prjectklmpk1/index.php/transaksi/add" class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>NO</td>
                    <td>TANGGAL</td>
                    <td>IDLAB</td>
                    <td>ID MEDICALCHECKUP</td>
                    <td>TINDAKAN DETAIL ID TINDAKAN DETAIL</td>
                    <td>IDKASIR</td>
                </tr>
                <?php foreach ($data as $key => $item) : ?>
                    <tr>
                        <td><?= $key + 1; ?></td>
                        <td><?= $item['tanggal']; ?></td>
                        <td><?= $item['idlab']; ?></td>
                        <td><?= $item['id_medicalcheckup']; ?></td>
                        <td><?= $item['tindakan_detail_id_tindakan_detail']; ?></td>
                        <td><?= $item['idkasir']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>