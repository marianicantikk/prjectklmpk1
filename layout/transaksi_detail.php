<?php
include "app/Transaksi_detail.php";
$trnsk_dtl = new Transaksi_detail();
$data = $trnsk_dtl->tampil();
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>TRANSAKSI DETAIL</h4>
            <a href="/prjectklmpk1/index.php/transaksi_detail/add" 
            class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>NO</td>
                    <td>ID_TINDAKAN</td>
                    <td>TRANSAKSI_ID_TRANSAKSI</td>
                </tr>
                <?php foreach ($data as $key => $item) : ?>
                    <tr>
                        <td><?= $key + 1; ?></td>
                        <td><?= $item['id_tindakan']; ?></td>
                        <td><?= $item['transaksi_id_transaksi']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>