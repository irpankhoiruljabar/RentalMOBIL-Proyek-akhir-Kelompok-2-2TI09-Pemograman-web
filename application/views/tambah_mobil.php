<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Data Mobil</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <?php echo form_open_multipart('mobil/tambah_aksi'); ?>
    <div class="card-body">
        <div class="form-group">
            <label>Pilih Mobil</label>
            <select class="form-control" name="mbl">
                <option value="1">Rush</option>
                <option value="2">Xpander</option>
                <option value="3">Ertiga</option>
                <option value="4">Mobilio</option>

            </select>
        </div>
        <div class="form-group">
            <label>No Polisi</label>
            <input type="text" name="nop" class="form-control" placeholder="">
        </div>
        <div class="form-group">
            <label>Warna</label>
            <input type="text" name="warna" class="form-control" placeholder="">
        </div>
        <div class="form-group">
            <label>CC</label>
            <input type="text" name="cc" class="form-control" placeholder="">
        </div>
        <div class="form-group">
            <label>Tahun</label>
            <input type="text" name="thn" class="form-control" placeholder="">
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <input type="text" name="des" class="form-control" placeholder="">
        </div>
        <div class="form-group">
            <label>Biaya</label>
            <input type="text" name="bya" class="form-control" placeholder="">
        </div>
        <div class="form-group">
            <label>Upload Foto</label>
            <input type="file" name="foto" class="form-control" placeholder="">
        </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
    <?php echo form_close(); ?>
</div>