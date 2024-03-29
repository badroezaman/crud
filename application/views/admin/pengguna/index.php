<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_theme_primary"><i class="icon-file-plus"></i> Tambah </button>
<?php echo br(2); ?>
<?php
$data = $this->session->flashdata('sukses');
if ($data != "") {
    ?>
    <div class="alert alert-success"><strong>Sukses! </strong> <?= $data; ?></div>
<?php } ?>
<?php
$data2 = $this->session->flashdata('error');
if ($data2 != "") {
    ?>
    <div class="alert alert-danger"><strong> Error! </strong> <?= $data2; ?></div>
<?php } ?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h5 class="panel-title"><i class="icon-sphere"></i> Pengguna Sistem</h5>
    </div>
    <div class="panel-body">
        <table class="table table-bordered datatable-columns">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Username</th>
                    <th>Nama Lengkap</th>
                    <th class="never"></th>
                    <th>Level</th>

                    <th><center>Aksi</center></th> 

            </tr>
            </thead>
            <tbody>
<?php $no = 0;
foreach ($all as $row): $no++; ?>
                    <tr>
                        <td></td>
                        <td><?php echo $row->username; ?></td>
                        <td><?php echo $row->nama_lengkap; ?></td>
                        <td><?php echo $no; ?></td>
                        <td><?php $lev = $this->db->where('id_level', $row->id_level)->get('level')->row_array();
                        echo $lev['nama_level'];
                        ?></td>

                        <td>
                <center>
                    <a href="<?php echo site_url('Pengguna/edit/' . $row->id_admin); ?>" class="btn btn-info btn-xs" data-popup="tooltip" data-original-title="Edit Data" data-placement="top"><i class="icon-pencil5"></i></a>
                    <a href="<?php echo site_url('Pengguna/hapus/' . $row->id_admin); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini');" class="btn btn-danger btn-xs tooltips" data-popup="tooltip" data-original-title="Hapus Data" data-placement="top"><i class="icon-x"></i></a>
                </center>
                </td>


                </tr>
<?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div id="modal_theme_primary" class="modal fade">
        <div class="modal-dialog">
            <form action="<?php echo site_url('Pengguna/add'); ?>" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h6 class="modal-title"><strong>Tambah Data</strong></h6>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class='col-md-3'>Username</label>
                            <div class='col-md-9'><input type="text" name="username"  autocomplete="off" required placeholder="Masukkan Nama" class="form-control"  ></div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class='col-md-3'>Password</label>
                            <div class='col-md-9'><input type="password" name="password"  autocomplete="off" required placeholder="Masukkan Nama" class="form-control"  ></div>
                        </div>
                        <br>

                        <div class="form-group">
                            <label class='col-md-3'>Nama Lengkap</label>
                            <div class='col-md-9'><input type="text" name="nama_lengkap"  autocomplete="off" required placeholder="Masukkan Nama" class="form-control"  ></div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class='col-md-3'>Level</label>
                            <div class='col-md-9'>
                                <select data-placeholder="Pilih Level" name="level" required class="select-clear">
                                    <?php $lev = $this->db->get('level')->result(); ?>
                                    <option></option>
                                    <?php
                                    $no = 0;
                                    foreach ($lev as $r): $no++;
                                        echo '<option value="' . $r->id_level . '">' . $r->nama_level . '</option>';
                                    endforeach;
                                    ?>
                                </select>
                            </div>
                        </div>

                        <br>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
                    </div>
            </form>
        </div>
    </div>
</div>
