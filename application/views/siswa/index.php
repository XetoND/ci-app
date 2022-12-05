<div class="container-fluid">
    <?php if($this->session->flashdata('flash') ): ?>
        <div class="mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Siswa <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            </div>
        </div>
    
        <?php endif; ?>
        <div class="row-mt-3">
            <div class="col-md-6">
                <ul class="list-group">
                    <h3>Data Siswa</h3>
                    <?php foreach ($siswa as $s): ?>
                    <li class="list-group-item">
                        <?= $s['nama'] ?>
                        <a href="<?= base_url(); ?>siswa/hapus/<?= $s['id'] ?>" class="badge text-bg-danger float-start" style="text-decoration: none;" onclick="return confirm('Yakin Ingin Menghapus Data ?')">Hapus</a>
                        <a href="<?= base_url(); ?>siswa/detail/<?= $s['id'] ?>" class="badge text-bg-primary float-start" style="text-decoration: none;">Detail</a>
                        <a href="<?= base_url(); ?>siswa/update/<?= $s['id'] ?>" class="badge text-bg-success float-start" style="text-decoration: none;">Update</a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

    <div class="mt-3">
            <a href="<?php base_url()?>siswa/tambah" class="btn btn-primary">Tambah Data Siswa</a>
    </div>
</div>