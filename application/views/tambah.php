<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Diagnosa</title>
    <link rel="stylesheet" href="<?= base_url("assets/bs/dist/css/bootstrap.min.css") ?>">
</head>
<body>
    <div class="container mt-5">
        <h2>Tambah Data</h2>
        <?php
        if($this->session->flashdata('msg')){
            echo $this->session->flashdata('msg');
        } ?>
        <div class="row">
        <form action="<?= site_url("diagnosa/tambahAksi") ?>" method="post">
            <div class="col-12">    
                <div class="mb-3">
                    <label for="namaPasien" class="form-label">Nama Pasien</label>
                    <input required type="text" name="nama" placeholder="Masukkan nama pasien..." class="form-control">
                </div>
            </div>
            <div class="col-12">
                <div class="row">  
                <div class="col-6">    
                    <div class="mb-3">
                        <label for="noRm" class="form-label">No. RM</label>
                        <input required type="text" name="no_rm" placeholder="" class="form-control">
                    </div>
                </div>
                <div class="col-6">    
                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input required type="number" name="umur" placeholder="" class="form-control">
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
                        <input required type="radio" id="jk1" name="jenis_kelamin" value="laki-laki" class="form-check-input"> 
                        <label for="jk1" class="form-check-label">Laki - laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input required type="radio" id="jk2" name="jenis_kelamin" value="perempuan" class="form-check-input"> 
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
                        <option selected>Pilih Diagnosa</option>
                        <?php foreach($list_diagnosa as $d){ ?>
                            <option value="<?= $d->id ?>"><?= $d->diagnosa ?></option>
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