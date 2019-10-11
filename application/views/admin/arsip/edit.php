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
        <h5 class="panel-title"><i class="icon-pencil7"></i> Edit Data Arsip </h5>
    </div>
<?php echo form_open_multipart('Arsip/update'); ?>
    <input type="hidden" value="<?php echo $getrow['id_arsip']; ?>" name="id">

    <div class="panel-body">
        <div class="form-group">
            <label class='col-md-3'>Nomor</label>
            <div class='col-md-9'><input type="text"  name="nomor" value="<?php echo $getrow['nomor_arsip']; ?>" autocomplete="off" required placeholder="Masukkan Nomor" class="form-control" ></div>
        </div>
        <br>
        <br>
        <div class="form-group">
            <label class='col-md-3'>Keterangan</label>
            <div class='col-md-9'><input type="text" name="keterangan" value="<?php echo $getrow['keterangan']; ?>" autocomplete="off" required placeholder="Masukkan Keterangan" class="form-control" ></div>
        </div>
        <br>
        <br>
        <div class="form-group">
            <label class='col-md-3'>Divisi</label>
            <div class='col-md-9'>
                <select data-placeholder="Pilih Divisi" name="box" required class="select-clear">
                    <?php $box = $this->db->get('box')->result(); ?>
                    <option></option>
                    <?php
                    $no = 0;
                    foreach ($box as $r): $no++;
                        echo '<option value="' . $r->id_box . '" ' . select($getrow['id_box'], $r->id_box) . '>' . $r->kode_box . '-' . $r->nama_box . '</option>';
                    endforeach;
                    ?>
                </select>
            </div>
        </div>
        <br>
        <br>
        <div class="form-group">
            <label class='col-md-3'>Ruang</label>
            <div class='col-md-9'>
                <select data-placeholder="Pilih Ruang" name="ruang" required class="select-clear">
                    <?php $ruang = $this->db->get('ruang')->result(); ?>
                    <option></option>
                    <?php
                    $no = 0;
                    foreach ($ruang as $r): $no++;
                        echo '<option value="' . $r->id_ruang . '" ' . select($getrow['id_ruang'], $r->id_ruang) . '>' . $r->kode_ruang . '-' . $r->nama_ruang . '</option>';
                    endforeach;
                    ?>
                </select>
            </div>
        </div>
        <br>
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