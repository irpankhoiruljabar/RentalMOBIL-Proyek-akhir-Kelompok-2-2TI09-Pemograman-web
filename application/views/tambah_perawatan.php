<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Data Perawatan</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="<?= base_url('perawatan/tambah_aksi') ?>" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label>Pilih Mobil</label>
                <select class="form-control" name="mbl_id">
                    <option value="1">Rush</option>
                    <option value="2">Xpander</option>
                    <option value="1">Ertiga</option>
                    <option value="2">Mobilio</option>

                </select>
            </div>
            <div class="form-group">
                <label>KM. Mobil</label>
                <input type="text" name="km_mobil" class="form-control">
            </div>
            <div class="form-group">
                <label>Tanggal Perawatan</label>
                <input type="date" name="tgl_pr" class="form-control">
            </div>
            <div class="form-group">
                <label>Jenis Perawatan</label>
                <select class="form-control" name="j_id">
                    <option value="1">Ganti Oli</option>
                    <option value="2">Service Rutin</option>
                    <option value="3">Turun Mesin</option>
                    <option value="4">Ganti Spartpart</option>

                </select>
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <input type="text" name="des" class="form-control">
            </div>


        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>