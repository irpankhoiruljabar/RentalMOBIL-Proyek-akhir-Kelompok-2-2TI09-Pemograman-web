<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Data Merk</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="<?= base_url('sewa/tambah_aksi') ?>" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label>Tanggal Mulai</label>
                <input type="date" name="tgl_mulai" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>Tanggal Akhir</label>
                <input type="date" name="tgl_akhir" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>Tujuan</label>
                <input type="text" name="tjn" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>No Ktp</label>
                <input type="text" name="no_ktp" class="form-control" placeholder="">
            </div>

            <div class="form-group">
                <label>Users</label>
                <select class="form-control" name="usr_id">
                    <option value="1">Admin</option>
                    <option value="2">Aminah</option>
                </select>
            </div>
            <div class="form-group">
                <label>Pilih Mobil</label>
                <select class="form-control" name="mobil_id">
                    <option value="1">Rush</option>
                    <option value="2">Xpander</option>
                    <option value="1">Ertiga</option>
                    <option value="2">Mobilio</option>

                </select>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>