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
        <h5 class="panel-title"><i class="icon-sphere"></i> Menu</h5>
    </div>
    <div class="panel-body">
        <table class="table table-bordered datatable-columns">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama Menu</th>
                    <th>Menu Aktif</th>
                    <th class="never"></th>
                    <th>Link</th>
                    <th>Icon</th>
                    <th>Level</th>
                    <th><center>Aksi</center></th> 

            </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                foreach ($all as $row): $no++;
                    ?>
                    <tr>
                        <td></td>
                        <td><?php echo $row->nama_menu; ?></td>
                        <td><?php echo $row->menu_aktif; ?></td>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row->link; ?></td>
                        <td><?php echo $row->icon; ?></td>
                         <td><?php $lev = $this->db->where('id_level', $row->id_level)->get('level')->row_array();
                        echo $lev['nama_level'];
                        ?></td>
                        <td>
                <center>
                    <a href="<?php echo site_url('Menu/edit/' . $row->id_menu); ?>" class="btn btn-info btn-xs" data-popup="tooltip" data-original-title="Edit Data" data-placement="top"><i class="icon-pencil5"></i></a>
                    <a href="<?php echo site_url('Menu/hapus/' . $row->id_menu); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini');" class="btn btn-danger btn-xs tooltips" data-popup="tooltip" data-original-title="Hapus Data" data-placement="top"><i class="icon-x"></i></a>
                </center>
                </td>

                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div id="modal_theme_primary" class="modal fade">
        <div class="modal-dialog">
            <form action="<?php echo site_url('Menu/add'); ?>" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h6 class="modal-title"><strong>Tambah Data</strong></h6>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class='col-md-3'>Nama Menu</label>
                            <div class='col-md-9'><input type="text" name="nama_menu"  autocomplete="off" required placeholder="Masukkan Nama" class="form-control"  ></div>
                        </div>
                    </div>
                    <br>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class='col-md-3'>Menu Aktif</label>
                            <div class='col-md-9'><input type="text" name="menu_aktif"  autocomplete="off" required placeholder="Masukkan Menu Aktif" class="form-control"  ></div>
                        </div>
                    </div>
                    <br>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class='col-md-3'>Link</label>
                            <div class='col-md-9'><input type="text" name="link"  autocomplete="off" required placeholder="Masukkan Link" class="form-control"  ></div>
                        </div>
                    </div>
                    <br>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class='col-md-3'>Icon</label>
                            <div class='col-md-9'><input type="text" name="icon"  autocomplete="off" required placeholder="Masukkan Icon" class="form-control"  ></div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class='col-md-3'>Sub Menu</label>
                        <div class='col-md-2'>
                            <input type="radio" required value="Y" name="submenu"> Ya
                        </div>
                        <div class='col-md-3'>
                            <input type="radio" required value="N" name="submenu"> Tidak
                        </div>
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
                    </div>
            </form>
        </div>
    </div>
</div>
<?php
$no = 0;
foreach ($all as $row): $no++;
    ?>
    <div class="row">
        <div id="modal_edit<?= $row->id_menu; ?>" class="modal fade">
            <div class="modal-dialog">
                <form action="<?php echo site_url('Menu/edit'); ?>" method="post">
                    <input type="hidden"  value="<?= $row->id_menu; ?>" name="id"  >
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h6 class="modal-title"><strong>Edit Data</strong></h6>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class='col-md-3'>Nama Menu</label>
                                <div class='col-md-9'><input type="text" autocomplete="off"  value="<?= $row->nama_menu; ?>" name="nama_menu" placeholder="Masukkan Nama Menu" class="form-control" ></div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class='col-md-3'>Menu Aktif</label>
                                <div class='col-md-9'><input type="text" autocomplete="off"  value="<?= $row->menu_aktif; ?>" name="menu_aktif" placeholder="Masukkan Menu Aktif" class="form-control" ></div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class='col-md-3'>Link</label>
                                <div class='col-md-9'><input type="text" autocomplete="off"  value="<?= $row->link; ?>" name="link" placeholder="Masukkan Link" class="form-control" ></div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class='col-md-3'>Icon</label>
                                <div class='col-md-9'><input type="text" autocomplete="off"  value="<?= $row->icon; ?>" name="icon" placeholder="Masukkan Icon" class="form-control" ></div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class='col-md-3'>Jenis Kelamin</label>
                                <div class='col-md-2'>
                                    <input type="radio" required value="Y" <?php
                                    if ($row->submenu == 'Y') {
                                        echo "checked";
                                    }
                                    ?> name="submenu"> Ya
                                </div>
                                <div class='col-md-3'>
                                    <input type="radio" required value="N" <?php
                                    if ($row->submenu == 'N') {
                                        echo "checked";
                                    }
                                    ?> name="submenu"> Tidak
                                </div>
                            </div>
                            <br>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-warning"><i class="icon-pencil5"></i> Edit</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>