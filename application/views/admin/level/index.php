<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_theme_primary"><i class="icon-file-plus"></i> Tambah </button>
<?php echo br(2); ?>
<?php 
$data=$this->session->flashdata('sukses');
if($data!=""){ ?>
<div class="alert alert-success"><strong>Sukses! </strong> <?=$data;?></div>
<?php } ?>
<?php 
$data2=$this->session->flashdata('error');
if($data2!=""){ ?>
<div class="alert alert-danger"><strong> Error! </strong> <?=$data2;?></div>
<?php } ?>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h5 class="panel-title"><i class="icon-sphere"></i> Level</h5>
  </div>
  <div class="panel-body">
   <table class="table table-bordered datatable-columns">
      <thead>
          <tr>
              <th>Nomor</th>
               <th>Nama</th>
               <th><center>Aksi</center></th> 
                <th class="never"></th>
            
          </tr>
      </thead>
      <tbody>
          <?php $no=0; foreach($all as $row): $no++; ?>
            <tr>
                <td></td>
                <td><?php echo $row->nama_level; ?></td>
                
                <td>
                  <center>
                    <a data-toggle="modal" data-target="#modal_edit<?=$row->id_level;?>" class="btn btn-info btn-xs" data-popup="tooltip" data-original-title="Edit Data" data-placement="top"><i class="icon-pencil5"></i></a>
                    <a href="<?php echo site_url('Level/hapus/'.$row->id_level); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini');" class="btn btn-danger btn-xs tooltips" data-popup="tooltip" data-original-title="Hapus Data" data-placement="top"><i class="icon-x"></i></a>
                  </center>
                </td>
               <td><?php echo $no; ?></td>
                
            </tr>
          <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <div id="modal_theme_primary" class="modal fade">
    <div class="modal-dialog">
      <form action="<?php echo site_url('Level/add'); ?>" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="modal-title"><strong>Tambah Data</strong></h6>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label class='col-md-3'>Nama Level</label>
            <div class='col-md-9'><input type="text" name="nama"  autocomplete="off" required placeholder="Masukkan Nama" class="form-control"  ></div>
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
<?php $no=0; foreach($all as $row): $no++; ?>
<div class="row">
  <div id="modal_edit<?=$row->id_level;?>" class="modal fade">
    <div class="modal-dialog">
      <form action="<?php echo site_url('Level/edit'); ?>" method="post">
          <input type="hidden"  value="<?=$row->id_level;?>" name="id"  >
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="modal-title"><strong>Edit Data</strong></h6>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label class='col-md-3'>Nama</label>
            <div class='col-md-9'><input type="text" autocomplete="off"  value="<?=$row->nama_level;?>" name="nama" placeholder="Masukkan Nama Level" class="form-control" ></div>
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