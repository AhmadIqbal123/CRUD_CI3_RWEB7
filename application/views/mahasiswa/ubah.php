<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Ubah Data
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" name="nim" class="form-control" id="nim" value="<?= $mahasiswa['nim']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $mahasiswa['nama']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="angkatan">Angkatan</label>
                            <input type="text" name="angkatan" class="form-control" id="angkatan" value="<?= $mahasiswa['angkatan']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $mahasiswa['alamat']; ?>">
                        </div>
                        <button type="submit" name="ubah data" class="btn btn-primary " style="margin: 20px; float:right;">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>