<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Data Merk</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="<?= base_url('merk/tambah_aksi') ?>" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>Produk</label>
                <input type="text" name="prdk" class="form-control" placeholder="">
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>