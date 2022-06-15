<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnosa Pasien</title>
    <link rel="stylesheet" href="<?= base_url("assets/bs/dist/css/bootstrap.min.css") ?>">
</head>
<body>
    <div class="container mt-5">
        <h2>Diagnosa Pasien</h2>
        <?php
        if($this->session->flashdata('msg')){
            echo $this->session->flashdata('msg');
        } ?>
        <a class="btn btn-primary mb-3" href="<?= site_url("diagnosa/tambah") ?>">Tambah Data</a>
    <table class="table table-stripped table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>No.RM</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Diagnosa</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if(count($list_pasien) == 0){ ?>
                
            <tr>
                <td colspan="7">Pasien Kosong</td>
            </tr>
                <?php } else {
            foreach($list_pasien as $p){ ?>
            <tr>
                <td><?= $p->id ?></td>
                <td><?= $p->no_rm ?></td>
                <td><?= $p->nama ?></td>
                <td><?= $p->umur ?></td>
                <td><?= $p->jenis_kelamin ?></td>
                <td><?= $p->diagnosa ?></td>
                <td><a class="btn btn-success" href="<?= site_url('diagnosa/ubah/'.$p->id) ?>">edit</a> || <a class="btn btn-danger" href="<?= site_url('diagnosa/hapus/'.$p->id) ?>">hapus</a></td>
            </tr>
        <?php } } ?>
        </tbody>
    </table>
    </div>
</body>
</html>