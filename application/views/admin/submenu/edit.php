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
        <h5 class="panel-title"><i class="icon-pencil7"></i> Edit Sub Menu </h5>
    </div>
<?php echo form_open_multipart('Submenu/update'); ?>
    <input type="hidden" value="<?php echo $getrow['id_submenu']; ?>" name="id">

    <div class="panel-body">
        <div class="form-group">
            <label class='col-md-3'>Nama Sub Menu</label>
            <div class='col-md-9'><input type="text"  name="nama_submenu" value="<?php echo $getrow['nama_submenu']; ?>" autocomplete="off" required placeholder="Masukkan Sub Menu" class="form-control" ></div>
        </div>
        <br>
        <br>
        <div class="form-group">
            <label class='col-md-3'>Sub Menu Aktif</label>
            <div class='col-md-9'><input type="text" name="submenu_aktif" value="<?php echo $getrow['submenu_aktif']; ?>" autocomplete="off" required placeholder="Masukkan Sub Menu Aktif" class="form-control" ></div>
        </div>
        <br>
       
        <div class="form-group">
            <label class='col-md-3'>Link</label>
            <div class='col-md-9'><input type="text"  name="link" value="<?php echo $getrow['link']; ?>" autocomplete="off" required placeholder="Masukkan Link" class="form-control" ></div>
        </div>
        <br>
        <div class="form-group">
            <label class='col-md-3'>Icon</label>
            <div class='col-md-9'><input type="text"  name="icon" value="<?php echo $getrow['icon']; ?>" autocomplete="off" required placeholder="Masukkan Icon" class="form-control" ></div>
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
                        echo '<option value="' . $r->id_menu . '" ' . select($getrow['id_menu'], $r->id_menu) . '>' . $r->nama_menu . '</option>';
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