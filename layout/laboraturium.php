<?php
include "inc/Connection.php";
include "app/Laboraturium.php";
$lbtrm = new Laboraturium();
$data = $lbtrm->tampil();
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>LABORATURIUM</h4>
            <a href="/prjectklmpk1/index.php/laboraturium/add" class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>NO</td>
                    <td>PERIKSA</td>
                    <td>LOKASI</td>
                    <td>ID MEDICALCHECKUP</td>
                </tr>
                <?php foreach ($data as $key => $item) : ?>
                    <tr>
                        <td><?= $key + 1; ?></td>
                        <td><?= $item['periksa']; ?></td>
                        <td><?= $item['lokasi']; ?></td>
                        <td><?= $item['idmedical_chekup']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>