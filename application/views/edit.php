<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Diagnosa</title>
    <link rel="stylesheet" href="<?= base_url("assets/bs/dist/css/bootstrap.min.css") ?>">
</head>
<body>
    <?php $pasien = $pasien[0]; ?>
    <div class="container mt-5">
        <h2>Edit Data</h2>
        <?php
        if($this->session->flashdata('msg')){
            echo $this->session->flashdata('msg');
        } ?>
        <div class="row">
        <form action="<?= site_url("diagnosa/ubahAksi") ?>" method="post">
            <div class="col-12">    
                <div class="mb-3">
                    <label for="namaPasien" class="form-label">Nama Pasien</label>
                    <input  required type="text" name="nama" value="<?= $pasien->nama ?>" placeholder="Masukkan nama pasien..." class="form-control">
                    <input type="hidden" name="id" value="<?= $pasien->id ?>">
                </div>
            </div>
            <div class="col-12">
                <div class="row">  
                <div class="col-6">    
                    <div class="mb-3">
                        <label for="noRm" class="form-label">No. RM</label>
                        <input  required type="text" placeholder="" class="form-control" name="no_rm" value="<?= $pasien->no_rm ?>">
                    </div>
                </div>
                <div class="col-6">    
                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input required type="number" placeholder="" class="form-control" name="umur" value="<?= $pasien->umur ?>">
                    </div>
                </div>
                </div>
            </div>
            <div class="col-12">
                <label for="jk" class="form-label">Jenis Kelamin</label>
            </div>
            <div class="col-12">    
                <div class="mb-3">
                    <div class="form-check form-check-inline">
                        <input required type="radio" id="jk1" name="jk" value="laki-laki" class="form-check-input" <?= ($pasien->jenis_kelamin == 'laki-laki' ? 'checked' : '') ?>> 
                        <label for="jk1" class="form-check-label">Laki - laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input required type="radio" id="jk2" name="jk" value="perempuan" class="form-check-input" <?= ($pasien->jenis_kelamin == 'perempuan' ? 'checked' : '') ?>> 
                        <label for="jk2" class="form-check-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <label for="jk" class="form-label">Diagnosa</label>
            </div>
            <div class="col-12">    
                <div class="mb-3">
                    <select required name="id_diagnosa" class="form-select mb-3" id="">
                        <option>Pilih Diagnosa</option>
                        <?php foreach($list_diagnosa as $d){ ?>
                            <option <?= ($pasien->id_diagnosa == $d->id ? 'selected' : '') ?> value="<?= $d->id ?>"><?= $d->diagnosa ?></option>
                        <?php } ?>
                    </select>
            </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Simpan">
        </form>
        </div>
    </div>
</body>
</html>