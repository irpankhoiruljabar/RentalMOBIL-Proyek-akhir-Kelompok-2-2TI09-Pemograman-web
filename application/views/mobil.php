<div class="card">
    <div class="card-header">
        <a href="<?= base_url('mobil/tambah') ?>" class="btn btn-primary btn-sm">Tambah <i class="fas fa-plus"></i></a>
    </div>

    <div class="card-body">
        <table class="table table-bordered">
            <thead>

                <tr class="text-center">
                    <th>#</th>
                    <th>Nama</th>
                    <th>No Polisi</th>
                    <th>Warna</th>
                    <th>Cc</th>
                    <th>Tahun</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                    <th>Biaya Sewa</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php $no = 1;
            foreach ($mobil as $mbl) : ?>
            <tbody>
                <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $mbl->produk ?></td>
                    <td><?= $mbl->nopol ?></td>
                    <td><?= $mbl->warna ?></td>
                    <td><?= $mbl->cc ?></td>
                    <td><?= $mbl->tahun ?></td>
                    <td><?= $mbl->deskripsi ?></td>
                    <td><img src="<?= base_url(); ?>asset/foto/<?= $mbl->foto ?>" width="90" height="100"></td>
                    <td><?= $mbl->biaya_sewa ?></td>
                    <td>
                        <button data-toggle="modal" data-target="#edit<?= $mbl->id ?>" class="btn btn-warning btn-sm"><i
                                class="fas fa-edit"></i></button>
                        <a href="<?= base_url('mobil/delete/' . $mbl->id) ?>" class="btn btn-danger btn-sm"><i
                                class="fas fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
            <?php endforeach
            ?>
        </table>
    </div>

    <?php foreach ($mobil as $mbl) : ?>
    <div class="modal fade" id="edit<?= $mbl->id ?>" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Mobil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('mobil/edit/' . $mbl->id); ?>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Pilih Mobil</label>
                            <select class="form-control" name="mbl">
                                <option value="1"><?= $mbl->produk ?></option>
                                <option value="1">Rush</option>
                                <option value="2">Xpander</option>
                                <option value="3">Ertiga</option>
                                <option value="4">Mobilio</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label>No Polisi</label>
                            <input type="text" name="nop" class="form-control" placeholder=""
                                value="<?= $mbl->nopol ?>">
                        </div>
                        <div class="form-group">
                            <label>Warna</label>
                            <input type="text" name="warna" class="form-control" placeholder=""
                                value="<?= $mbl->warna ?>">
                        </div>
                        <div class="form-group">
                            <label>CC</label>
                            <input type="text" name="cc" class="form-control" placeholder="" value="<?= $mbl->cc ?>">
                        </div>
                        <div class="form-group">
                            <label>Tahun</label>
                            <input type="text" name="thn" class="form-control" placeholder=""
                                value="<?= $mbl->tahun ?>">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" name="des" class="form-control" placeholder=""
                                value="<?= $mbl->deskripsi ?>">
                        </div>
                        <div class="form-group">
                            <label>Biaya</label>
                            <input type="text" name="bya" class="form-control" placeholder=""
                                value="<?= $mbl->biaya_sewa ?>">
                        </div>
                        <div class="form-group">
                            <label>Upload Foto</label>
                            <input type="file" name="foto" class="form-control" placeholder="" value="">
                            <img src="<?= base_url() . 'asset/foto/' . $mbl->foto ?>" width="90" height="100">
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    <?php echo form_close(); ?>
                </div>

            </div>
        </div>
    </div>
    <?php endforeach ?>
</div>

</div>

</div>

<!-- Button trigger modal -->