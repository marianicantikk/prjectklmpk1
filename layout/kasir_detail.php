<?php
include "inc/Connection.php";
include "app/Kasir_detail.php";
$ksr_dtl = new Kasir_detail();
$data = $ksr_dtl->tampil();
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>KASIR DETAIL</h4>
            <a href="/prjectklmpk1/index.php/kasir_detail/add" class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>NO</td>
                    <td>NAMA</td>
                </tr>
                <?php foreach ($data as $key => $item) : ?>
                    <tr>
                        <td><?= $key + 1; ?></td>
                        <td><?= $item['nama_kasir']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>