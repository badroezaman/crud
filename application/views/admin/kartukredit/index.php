<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_theme_primary"><i class="icon-file-plus"></i> Tambah </button>
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
        <h5 class="panel-title"><i class="icon-sphere"></i> Pemohon Kartu Kredit</h5>
    </div>
    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nomor KTP</th>
                    <th>Nama</th>
                    <th>Jenis Kartu</th>
                    <th>Info</th>
                    <th>
                        <center>Aksi</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($all as $row) : ?>
                    <tr>
                        <td><?php echo $row->no_ktp; ?></td>
                        <td><?php echo $row->nama; ?></td>
                        <td><?php echo $row->jns_kartu; ?></td>
                        <td><?php echo $row->info; ?></td>
                        <td>
                            <center>
                                <a data-toggle="modal" data-target="#modal_edit<?= $row->id_pemohon; ?>" class="btn btn-info btn-xs" data-popup="tooltip" data-original-title="Edit Data" data-placement="top"><i class="icon-pencil5"></i></a>
                                <a href="<?php echo site_url('Kartukredit/delete/' . $row->id_pemohon); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini');" class="btn btn-danger btn-xs tooltips" data-popup="tooltip" data-original-title="Hapus Data" data-placement="top"><i class="icon-x"></i></a>
                            </center>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div id="modal_theme_primary" class="modal fade">
        <div class="modal-dialog">
            <form action="<?php echo site_url('Kartukredit/add'); ?>" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h6 class="modal-title"><strong>Tambah Data</strong></h6>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class='col-md-3'>Nomor KTP</label>
                            <div class='col-md-9'><input type="text" name="no_ktp" autocomplete="off" required placeholder="Masukkan Nomor KTP" class="form-control"></div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class='col-md-3'>Nama</label>
                            <div class='col-md-9'><input type="text" name="nama" autocomplete="off" required placeholder="Masukkan Nama" class="form-control"></div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class='col-md-3'>Tempat Lahir</label>
                            <div class='col-md-9'><input type="text" name="tmpt_lahir" autocomplete="off" required placeholder="Tempat Lahir" class="form-control"></div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class='col-md-3'>Tanggal Lahir</label>
                            <div class='col-md-9'><input type="date" name="tgl_lahir" autocomplete="off" required placeholder="Tanggal Lahir" class="form-control datepicker"></div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class='col-md-3'>Agama</label>
                            <div class='col-md-9'>
                                <select class="form-control" name="agama" required>
                                    <option>Pilih Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Budha">Budha</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class='col-md-3'>Alamat</label>
                            <div class='col-md-9'><input type="text" name="alamat" autocomplete="off" required placeholder="Masukkan Alamat" class="form-control"></div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class='col-md-3'>Kota</label>
                            <div class='col-md-9'><input type="text" name="kota" autocomplete="off" required placeholder="Masukkan Kota" class="form-control"></div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class='col-md-3'>Jenis Kartu</label>
                            <div class='col-md-9'>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jns_kartu" id="VisaPlatinum" value="Visa Platinum"> Visa Platinum
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jns_kartu" id="VisaGold" value="Visa Gold"> Visa Gold
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jns_kartu" id="VisaSilver" value="Visa Silver"> Visa Silver
                                    </label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class='col-md-3'>Info</label>
                            <div class='col-md-9'>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="info[]" id="Brosur" value="Brosur"> Brosur
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="info[]" id="SocialMedia" value="Social Media"> Social Media
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="info[]" id="Telemarketing" value="Telemarketing"> Telemarketing
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="info[]" id="CustomerService" value="Customer Service"> Customer Service
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
                    </div>
            </form>
        </div>
    </div>
</div>