<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Data User</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="<?= base_url('user/tambah_aksi') ?>" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="nama" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" name="pass" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="sts">
                    <option value="1">Aktif</option>
                    <option value="2">Non Aktif</option>

                </select>
            </div>
            <div class="form-group">
                <label>Role</label>
                <select class="form-control" name="role">
                    <option value="admin">Admin</option>
                    <option value="public">Public</option>

                </select>
            </div>


        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>