<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Data Mahasiswa<strong> berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h1>Daftar Mahasiswa</h1>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="tableJurnal">
                    <thead>
                        <tr class="table-success">
                            <th>Nama</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mahasiswa as $mhs) : ?>
                            <tr>
                                <td> <?= $mhs['nama']; ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="btn btn-warning btn-sm float-right" onclick="return confirm('Apakah anda yakin untuk menghapus ?');"><i class="bi bi-trash "></i> </a>
                                    <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id']; ?>" class="btn btn-succes btn-sm"><i class="bi bi-pencil"></i> </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>