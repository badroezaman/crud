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
<?php echo form_open_multipart('Pengguna/update'); ?>
    <input type="hidden" value="<?php echo $getrow['id_admin']; ?>" name="id">

    <div class="panel-body">
        <div class="form-group">
            <label class='col-md-3'>Username</label>
            <div class='col-md-9'><input type="text"  name="username" value="<?php echo $getrow['username']; ?>" autocomplete="off" required placeholder="Masukkan Nomor" class="form-control" ></div>
        </div>
        <br>
        <br>
        <div class="form-group">
            <label class='col-md-3'>Password</label>
            <div class='col-md-9'><input type="password" name="password" value="<?php echo $getrow['password']; ?>" autocomplete="off" required placeholder="Masukkan Keterangan" class="form-control" ></div>
        </div>
        <br>
        <br>
        <div class="form-group">
            <label class='col-md-3'>Nama Lengkap</label>
            <div class='col-md-9'><input type="text"  name="nama_lengkap" value="<?php echo $getrow['nama_lengkap']; ?>" autocomplete="off" required placeholder="Masukkan Nomor" class="form-control" ></div>
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