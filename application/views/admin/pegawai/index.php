<!-- <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_theme_primary"><i class="icon-user-plus"></i> Tambah </button> -->
<a href="<?php echo site_url('Pegawai/tambah'); ?>" class="btn btn-success btn-sm"><i class="icon-user-plus"></i> Tambah</a>
<?= br(2); ?>
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
        <h5 class="panel-title"><i class="icon-users"></i> Data Pegawai</h5>
    </div>

    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Kelamin</th>
                    <th>Agama</th>
                    <th>Ijazah</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($all as $row): ; ?>
                    <tr>
                        <td><img src="<?php echo base_url().'upload/pegawai/foto/'.$row->foto;?>" width="100" height="auto"></td>
                        <td><?= $row->nama ?></td>
                        <td><?= $row->no_telp ?></td>
                        <td><?= $row->j_kelamin ?></td>
                        <td><?php $agm = $this->db->where('id_agama', $row->id_agama)->get('agama')->row_array(); echo $agm['agama'] ?></td>
                        <td><a href="<?php echo base_url().'upload/pegawai/ijazah/'.$row->ijazah; ?>" >DOWNLOAD</a></td>
                        <td class="text-center">
                            <a href="#" class="btn btn-info btn-xs" data-popup="tooltip" data-original-title="Edit Data" data-placement="top"><i class="icon-pencil5"></i></a>
                            <a href="#" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini');" class="btn btn-danger btn-xs tooltips" data-popup="tooltip" data-original-title="Hapus Data" data-placement="top"><i class="icon-x"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>