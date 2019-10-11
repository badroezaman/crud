<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_tambah"><i class="icon-user-plus"></i> Tambah </button>
<?php echo br(2); ?>
<?php
$data = $this->session->flashdata('sukses');
if ($data != "") { ?>
    <div class="alert alert-success"><strong>Sukses! </strong> <?= $data; ?></div>
<?php } ?>
<?php
$data2 = $this->session->flashdata('error');
if ($data2 != "") { ?>
    <div class="alert alert-danger"><strong> Error! </strong> <?= $data2; ?></div>
<?php } ?>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h5 class="panel-title"><i class="icon-users"></i> Nasabah</h5>
    </div>
    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nomor KTP</td>
                    <td>Nama Lengkap</td>
                    <td>Tempat Lahir</td>
                    <td>Tanggal Lahir</td>
                    <td>Jenis Kelamin</td>
                    <td>Status</td>
                    <td>Info</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($all as $row) : ?>
                    <tr>
                        <td><?php echo $row->id_nasabah; ?></td>
                        <td><?php echo $row->no_ktp; ?></td>
                        <td><?php echo $row->nama; ?></td>
                        <td><?php echo $row->tmpt_lahir; ?></td>
                        <td><?php echo $row->tgl_lahir; ?></td>
                        <td><?php echo $row->j_kelamin; ?></td>
                        <td><?php echo $row->status; ?></td>
                        <td><?php echo $row->info; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div id="modal_tambah" class="modal fade">
        <div class="modal-dialog">
            <form action="<?php echo site_url('Nasabah/add'); ?>" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h6 class="modal-title"><strong>Tambah Nasabah</strong></h6>
                    </div>
                    <div class="modal-body">

                        <!-- <div class="form-group">
                            <label class='col-md-3'>ID Nasabah</label>
                            <div class='col-md-9'>
                                <input type="text" name="id_nasabah"  autocomplete="off" required placeholder="Masukkan ID" class="form-control"  >
                            </div>
                        </div>
                        <br> -->
                        <div class="form-group">
                            <label class='col-md-3'>Nomor KTP</label>
                            <div class='col-md-9'>
                                <input type="text" name="no_ktp" autocomplete="off" required placeholder="3312341234561234" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class='col-md-3'>Nama Lengkap</label>
                            <div class='col-md-9'>
                                <input type="text" name="nama" autocomplete="off" required placeholder="Masukkan Nama Lengkap" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class='col-md-3'>Tempat Lahir</label>
                            <div class='col-md-9'>
                                <input type="text" name="tmpt_lahir" autocomplete="off" required placeholder="Kota Tempat Lahir" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class='col-md-3'>Tanggal Lahir</label>
                            <div class='col-md-9'>
                                <div class="input-group">
                                    <input type="date" name="tgl_lahir" class="form-control datepicker">
                                    <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- <div class="form-group">
                            <label class='col-md-3'>Jenis Kelamin</label>
                            <div class='col-md-9'>
                                <label class="radio-inline">
                                    <input type="radio" name="j_kelamin" id="laki-laki" value="laki-laki"> Laki-laki
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="j_kelamin" id="perempuan" value="perempuan"> Perempuan
                                </label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class='col-md-3'>Status</label>
                            <div class='col-md-9'>
                                <select class="form-control" name="status">
                                    <option>Pilih</option>
                                    <option value="Pelajar">Pelajar</option>
                                    <option value="Belum Kawin">Belum Kawin</option>
                                    <option value="Kawin">Kawin</option>
                                    <option value="Duda">Duda</option>
                                    <option value="Janda">Janda</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class='col-md-3'>Info</label>
                            <div class='col-md-9'>
                                <div class="checkbox" name="info">
                                    <label><input type="checkbox" id="socmed" value="Social Media"> Social Media</label>
                                </div>
                                <div class="checkbox" name="info">
                                    <label><input type="checkbox" id="brosur" value="Brosur"> Brosur</label>
                                </div>
                                <div class="checkbox" name="info">
                                    <label><input type="checkbox" id="keluarga" value="Keluarga"> Keluarga</label>
                                </div>
                                <div class="checkbox" name="info">
                                    <label><input type="checkbox" id="teman" value="Teman"> Teman</label>
                                </div>
                                <div class="checkbox" name="info">
                                    <label><input type="checkbox" id="telemarketing" value="Telemarketing"> Telemarketing</label>
                                </div>
                            </div>
                        </div>
                        <br> -->
                        <!-- <div class="form-group">
                            <label class='col-md-3'>Foto</label>
                            <div class='col-md-9'>
                                <input type="file" id="foto_profil" name="foto">
                                <p class="help-block">Ukuran foto 300x300 pixel maksimal 500kb</p>
                            </div>
                        </div> -->

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cross"></i>Batal</button>
                        <button type="submit" class="btn btn-success"><i class="icon-user-check"></i> Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>