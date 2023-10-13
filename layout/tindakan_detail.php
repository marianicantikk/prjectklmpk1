<?php
include "inc/Connection.php";
include "app/Tindakan_detail.php";
$tndkn_dtl = new Tindakan_detail();
$data = $tndkn_dtl->tampil();
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>Tindakan Detail</h4>
            <a href="/prjectklmpk1/index.php/tindakan_detail/add" 
            class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>NO</td>
                    <td>TINDAKAN</td>
                    <td>TARIF</td>
                </tr>
                <?php foreach ($data as $key => $item) : ?>
                    <tr>
                        <td><?= $key + 1; ?></td>
                        <td><?= $item['tindakan']; ?></td>
                        <td><?= $item['tarif']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>