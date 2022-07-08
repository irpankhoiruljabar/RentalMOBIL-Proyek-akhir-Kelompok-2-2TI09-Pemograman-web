<div class="card">
    <div class="card-header">
        <a href="<?= base_url('sewa/tambah') ?>" class="btn btn-primary btn-sm">Tambah <i class="fas fa-plus"></i></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>

                <tr class="text-center">
                    <th>ID</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Akhir</th>
                    <th>Tujuan</th>
                    <th>No Ktp</th>
                    <th>User id</th>
                    <th>Mobil id</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php $no = 1;
      foreach ($sewa as $swa) : ?>
            <tbody>
                <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $swa->tanggal_mulai ?></td>
                    <td><?= $swa->tanggal_akhir ?></td>
                    <td><?= $swa->tujuan ?></td>
                    <td><?= $swa->noktp ?></td>
                    <td><?= $swa->username ?></td>
                    <td><?= $swa->produk ?></td>
                    <td>
                        <button data-toggle="modal" data-target="#edit<?= $swa->id ?>" class="btn btn-warning btn-sm"><i
                                class="fas fa-edit"></i></button>
                        <a href="<?= base_url('sewa/delete/' . $swa->id) ?>" class="btn btn-danger btn-sm"><i
                                class="fas fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
            <?php endforeach
      ?>
        </table>
    </div>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<?php foreach ($sewa as $swa) : ?>
<div class="modal fade" id="edit<?= $swa->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Masukan Jumlah Pembayaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="<?= base_url('sewa/edit/' . $swa->id) ?>" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Tanggal Mulai</label>
                            <input type="date" name="tgl_mulai" class="form-control" placeholder=""
                                value="<?= $swa->tanggal_mulai ?>">
                        </div>
                        <div class=" form-group">
                            <label>Tanggal Akhir</label>
                            <input type="date" name="tgl_akhir" class="form-control" placeholder=""
                                value="<?= $swa->tanggal_akhir ?>">
                        </div>
                        <div class="form-group">
                            <label>Tujuan</label>
                            <input type="text" name="tjn" class="form-control" placeholder=""
                                value="<?= $swa->tujuan ?>">
                        </div>
                        <div class="form-group">
                            <label>No Ktp</label>
                            <input type="text" name="no_ktp" class="form-control" placeholder=""
                                value="<?= $swa->noktp ?>">
                        </div>

                        <div class="form-group">
                            <label>Users</label>
                            <select class="form-control" name="usr_id">
                                <option value="1"><?= $swa->username ?></option>
                                <option value="1">Admin</option>
                                <option value="2">Aminah</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pilih Mobil</label>
                            <select class="form-control" name="mobil_id">
                                <option value="1"><?= $swa->produk ?></option>
                                <option value="1">Rush</option>
                                <option value="2">Xpander</option>
                                <option value="2">Ertiga</option>
                                <option value="1">Mobilio</option>

                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<?php endforeach ?>