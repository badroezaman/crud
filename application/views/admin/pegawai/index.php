<!-- <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_theme_primary"><i class="icon-user-plus"></i> Tambah </button> -->
<a href="<?php echo site_url('Pegawai/tambah'); ?>" class="btn btn-success btn-sm"><i class="icon-user-plus"></i> Tambah</a>
<?php echo br(2); ?>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h5 class="panel-title"><i class="icon-users"></i> Data Pegawai</h5>
    </div>

    <div class="panel-body">
        <table class="table table-bordered datatable-columns">
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
                <?php foreach ($all as $row) : ?>
                    <tr>
                        <td><?= $row->foto ?></td>
                        <td><?= $row->nama ?></td>
                        <td><?= $row->no_telp ?></td>
                        <td><?= $row->j_kelamin ?></td>
                        <td><?= $row->agama ?></td>
                        <td><?= $row->ijazah ?></td>
                        <td class="text-center">
                            <a href="<?php echo site_url('Pegawai/edit/' . $row->id_admin); ?>" class="btn btn-info btn-xs" data-popup="tooltip" data-original-title="Edit Data" data-placement="top"><i class="icon-pencil5"></i></a>
                            <a href="<?php echo site_url('Pegawai/hapus/' . $row->id_admin); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini');" class="btn btn-danger btn-xs tooltips" data-popup="tooltip" data-original-title="Hapus Data" data-placement="top"><i class="icon-x"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>