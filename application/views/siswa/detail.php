<div class="container">
    <div class="mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data Siswa
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $siswa['nama']; ?></h5>
                    <p class="card-text">Nis : <?= $siswa['nis']; ?></p>
                    <p class="card-text">Jurusan : <?= $siswa['jurusan']; ?></p>
                    <p class="card-text">Alamat : <?= $siswa['alamat']; ?></p>
                    <p class="card-text">Tanggal Lahir : <?= $siswa['tgl_lahir']; ?></p>
                    <a href="<?= base_url();?>Siswa" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>