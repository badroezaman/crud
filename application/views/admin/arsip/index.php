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
        <h5 class="panel-title"><i class="icon-sphere"></i> Arsip</h5>
    </div>
    <div class="panel-body">
        <table class="table table-bordered datatable-columns">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nomor Surat</th>
                    <th>Keterangan</th>
                    <th class="never"></th>
                    <th>Divisi</th>
                    <th>Ruang</th>
                    
                    <th><center>Aksi</center></th>
            </tr>
            </thead>
            <tbody>
<?php $no = 0;
foreach ($all as $row): $no++; ?>
                    <tr>
                        <td></td>
                        <td><?php echo $row->nomor_arsip; ?></td>
                        <td><?php echo $row->keterangan; ?></td>
                        <td><?php echo $no; ?></td>
                        <td><?php $box=$this->db->where('id_box', $row->id_box)->get('box')->row_array();
                        echo $box['kode_box'].' - '.$box['nama_box'];?></td>
                        
                        <td><?php $ruang=$this->db->where('id_ruang', $row->id_ruang)->get('ruang')->row_array();
                        echo $ruang['kode_ruang'].' - '.$ruang['nama_ruang'];?></td>
                        
                        <td>
                <center>
                    <!--a data-toggle="modal" data-target="#modal_edit<?#= $row->id_arsip; ?>" class="btn btn-info btn-xs" data-popup="tooltip" data-original-title="Edit Data" data-placement="top"><i class="icon-pencil5"></i></a-->
                    <a href="<?php echo site_url('Arsip/edit/' . $row->id_arsip); ?>"  class="btn btn-info btn-xs" data-popup="tooltip" data-original-title="Edit Data" data-placement="top"><i class="icon-pencil5"></i></a>
                <a href="<?php echo site_url('Arsip/hapus/' . $row->id_arsip); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini');" class="btn btn-danger btn-xs tooltips" data-popup="tooltip" data-original-title="Hapus Data" data-placement="top"><i class="icon-x"></i></a>
                </center>
                </td>

                </tr>
<?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div id="modal_theme_primary" class="modal fade">
        <div class="modal-dialog">
            <form action="<?php echo site_url('Arsip/add'); ?>" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h6 class="modal-title"><strong>Tambah Data</strong></h6>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class='col-md-3'>Nomor</label>
                            <div class='col-md-9'><input type="text" name="nomor"  autocomplete="off" required placeholder="Masukkan Nomor Surat" class="form-control"  ></div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class='col-md-3'>Keterangan</label>
                            <div class='col-md-9'><input type="text" name="keterangan" autocomplete="off" required placeholder="Masukkan Keterangan" class="form-control" ></div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class='col-md-3'>Divisi</label>
                            <div class='col-md-9'>
                                <select data-placeholder="Pilih Box" name="box" required class="select-clear">
                                    <?php $box = $this->db->get('box')->result(); ?>
                                    <option></option>
                                    <?php
                                    $no = 0;
                                    foreach ($box as $r): $no++;
                                        echo '<option value="' . $r->id_box . '">' . $r->kode_box . ' - ' . $r->nama_box . '</option>';
                                    endforeach;
                                    ?>
                                </select>
                            </div>
                        </div>

                        <br>
                        <div class="form-group">
                            <label class='col-md-3'>Ruangan</label>
                            <div class='col-md-9'>
                                <select data-placeholder="Pilih Ruang" name="ruang" required class="select-clear">
                                    <?php $ruang = $this->db->get('ruang')->result(); ?>
                                    <option></option>
                                    <?php
                                    $no = 0;
                                    foreach ($ruang as $r): $no++;
                                        echo '<option value="' . $r->id_ruang . '">' . $r->kode_ruang . ' - ' . $r->nama_ruang . '</option>';
                                    endforeach;
                                    ?>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
                    </div>
            </form>
        </div>
    </div>
</div>
<?php $no = 0;
foreach ($all as $row): $no++; ?>
    <div class="row">
        <div id="modal_edit<?= $row->id_arsip; ?>" class="modal fade">
            <div class="modal-dialog">
                <form action="<?php echo site_url('Arsip/edit'); ?>" method="post">
                    <input type="hidden"  value="<?= $row->id_arsip; ?>" name="id"  >
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h6 class="modal-title"><strong>Edit Data</strong></h6>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class='col-md-3'>Nomor</label>
                                <div class='col-md-9'><input type="text" autocomplete="off" readonly value="<?= $row->nomor; ?>" name="nomor" placeholder="Masukkan Nomor Surat Anda" class="form-control" ></div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class='col-md-3'>Keterangan</label>
                                <div class='col-md-9'><input type="text" name="keterangan" autocomplete="off" value="<?= $row->keterangan; ?>" required placeholder="Masukkan Keterangan" class="form-control" ></div>
                            </div>
                            <br>
                            <div class="form-group">
                            <label class='col-md-3'>Divisi</label>
    <div class='col-md-9'>
      <select data-placeholder="Pilih Divisi" name="box" required class="select-clear">
        <?php $box=$this->db->get('box')->result(); ?>
        <option></option>
        <?php 
           $no=0; foreach($box as $r): $no++;
           echo '<option value="'.$r->id_box.'" '.select($getrow['id_box'],$r->id_box).'>'.$r->nama_box.'</option>';
           endforeach;
        ?>
      </select>
    </div>    
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <!--button type="submit" class="btn btn-warning"><i class="icon-pencil5"></i> Edit</button-->
                        </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>