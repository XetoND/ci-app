<div class="container">
    <div class="mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Siswa
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            <div id="emailHelp" class="form-text text-danger"><?= form_error('nama');?></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nis</label>
                            <input type="text" class="form-control" id="nis" name="nis">
                            <div id="emailHelp" class="form-text text-danger"><?= form_error('nis');?></div>
                        </div>
                        <div class="mb-3">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
                                <?php foreach( $jurusan as $j ): ?>
                                    <?php if( $j == $siswa['jurusan']): ?>
                                        <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                    <?php else: ?>
                                        <option value="<?= $j; ?>"><?= $j; ?></option>
                                    <?php endif ?>
                                <?php endforeach; ?>
                            </select>
                            <div id="emailHelp" class="form-text text-danger"><?= form_error('jurusan');?></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                            <div id="emailHelp" class="form-text text-danger"><?= form_error('alamat');?></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                            <div id="emailHelp" class="form-text text-danger"><?= form_error('tgl_lahir');?></div>
                        </div>
                        <button class="btn w-100 btn-lg btn-primary" type="submit" name="tambah">Tambah Data</button>
                        <hr class="my-4">
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
      