<div class="card">
    <div class="card-header">
        <a href="<?= base_url('perawatan/tambah') ?>" class="btn btn-primary btn-sm">Tambah <i
                class="fas fa-plus"></i></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>

                <tr class="text-center">
                    <th style="width: 10px">#</th>
                    <th>Merk</th>
                    <th>Km . Mobil</th>
                    <th>Jenis Perawatan</th>
                    <th>Deskripsi</th>
                    <th>Biaya</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php  $no = 1;
            foreach ($perawatan as $per) : ?>
            <tbody>
                <tr class="text-center">
                    <td><?= $no++?></td>
                    <td><?= $per->nama_merk	?></td>
                    <td><?= $per->km_mobil ?></td>
                    <td><?= $per->nama_jenis ?></td>
                    <td><?= $per->deskripsi ?></td>
                    <td><?= $per->	biaya ?> | <button data-toggle="modal" data-target="#byr<?= $per->id ?>"
                            class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></button></td>
                    <td>

                        <button data-toggle="modal" data-target="#edit<?= $per->id ?>" class="btn btn-warning btn-sm"><i
                                class="fas fa-edit"></i></button>
                        <a href="<?= base_url('perawatan/delete/' .$per->id) ?>" class="btn btn-danger btn-sm"><i
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
<?php foreach ($perawatan as $per) : ?>
<div class=" modal fade" id="edit<?= $per->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Perawatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card card-primary">

                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Ubah Data Perawatan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?= base_url('perawatan/edit/' .$per->id) ?>" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Pilih Mobil</label>
                                    <select class="form-control" name="mbl_id">
                                        <option value="1"> <?= $per->nama_merk ?></option>
                                        <option value="1">Rush</option>
                                        <option value="2">Xpander</option>
                                        <option value="1">Ertiga</option>
                                        <option value="2">Mobilio</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>KM. Mobil</label>
                                    <input type="text" name="km_mobil" class="form-control"
                                        value="<?= $per->km_mobil ?>">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Perawatan</label>
                                    <input type="date" name="tgl_pr" class="form-control" value="<?= $per->tanggal ?>">
                                </div>
                                <div class="form-group">
                                    <label>Jenis Perawatan</label>
                                    <select class="form-control" name="j_id">
                                        <option value="1"><?= $per->nama_jenis ?></option>
                                        <option value="1">Ganti Oli</option>
                                        <option value="2">Service Rutin</option>
                                        <option value="3">Turun Mesin</option>
                                        <option value="4">Ganti Spartpart</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <input type="text" name="des" class="form-control" value="<?= $per->deskripsi ?>">
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
    </div>
</div>
<?php endforeach 
 ?>

<?php foreach ($perawatan as $per) : ?>
<!-- Modal -->
<div class="modal fade" id="byr<?= $per->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
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
                <form action="<?= base_url('perawatan/masukan_bayar/' .$per->id) ?>" method="POST">
                    <div class="card-body">
                        <div class="form-group">

                            <div class="form-group">
                                <label>Jumlah Biaya</label>
                                <input type="text" name="bayar" class="form-control" value="<?= $per->biaya ?>">
                            </div>


                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<?php endforeach 
 ?>