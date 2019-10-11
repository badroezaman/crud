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
        <h5 class="panel-title"><i class="icon-sphere"></i> Sub Menu</h5>
    </div>
    <div class="panel-body">
        <table class="table table-bordered datatable-columns">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama Sub Menu</th>
                    <th>Sub Menu Aktif</th>
                    <th class="never"></th>
                    <th>Link</th>
                    <th>Icon</th>
                    <th>Menu</th>
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
                        <td><?php echo $row->nama_submenu; ?></td>
                        <td><?php echo $row->submenu_aktif; ?></td>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row->link; ?></td>
                        <td><?php echo $row->icon; ?></td>
                        <td><?php $men=$this->db->where('id_menu', $row->id_menu)->get('menu')->row_array();
                        echo $men['nama_menu'];?></td>
                 
                        <td>
                <center>
                     <a href="<?php echo site_url('Submenu/edit/'.$row->id_submenu); ?>" class="btn btn-info btn-xs" data-popup="tooltip" data-original-title="Edit Data" data-placement="top"><i class="icon-pencil5"></i></a>
                  <a href="<?php echo site_url('Submenu/hapus/' . $row->id_submenu); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini');" class="btn btn-danger btn-xs tooltips" data-popup="tooltip" data-original-title="Hapus Data" data-placement="top"><i class="icon-x"></i></a>
                </center>
                </td>

                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div id="modal_theme_primary" class="modal fade">
        <div class="modal-dialog">
            <form action="<?php echo site_url('Submenu/add'); ?>" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h6 class="modal-title"><strong>Tambah Data</strong></h6>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class='col-md-3'>Nama Sub Menu</label>
                            <div class='col-md-9'><input type="text" name="nama_submenu"  autocomplete="off" required placeholder="Masukkan Nama" class="form-control"  ></div>
                        </div>
                    </div>
                    <br>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class='col-md-3'>Sub Menu Aktif</label>
                            <div class='col-md-9'><input type="text" name="submenu_aktif"  autocomplete="off" required placeholder="Masukkan Menu Aktif" class="form-control"  ></div>
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
                            <label class='col-md-3'>Menu</label>
                            <div class='col-md-9'>
                                <select data-placeholder="Pilih Menu" name="menu" required class="select-clear">
                                    <?php $men = $this->db->where('submenu', 'Y')->get('menu')->result();
                                    #$this->db->get('menu')->result(); 
                                            ?>
                                    <option></option>
                                    <?php
                                    $no = 0;
                                    foreach ($men as $r): $no++;
                                        echo '<option value="' . $r->id_menu . '">' . $r->nama_menu . '</option>';
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
