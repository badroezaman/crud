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
        <h5 class="panel-title"><i class="icon-pencil7"></i> Edit Pengguna Sistem </h5>
    </div>
<?php echo form_open_multipart('Menu/update'); ?>
    <input type="hidden" value="<?php echo $getrow['id_menu']; ?>" name="id">

    <div class="panel-body">
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
        <div class="form-group">
            <label class='col-md-3'>Level</label>
            <div class='col-md-9'>
                <select data-placeholder="Pilih Level" name="level" required class="select-clear">
                    <?php $lev = $this->db->get('level')->result(); ?>
                    <option></option>
                    <?php
                    $no = 0;
                    foreach ($lev as $r): $no++;
                        echo '<option value="' . $r->id_level . '" ' . select($getrow['id_level'], $r->id_level) . '>' . $r->nama_level . '</option>';
                    endforeach;
                    ?>
                </select>
            </div>
        </div>
        <br>
    </div>
    <div class="panel-footer">
        <br>
        <div class="row">
            <center><button type="submit" class="btn btn-warning"><i class="icon-pencil5"></i> Edit</button></center>
        </div>
        <br>
    </div>
<?php echo form_close(); ?>
</div>