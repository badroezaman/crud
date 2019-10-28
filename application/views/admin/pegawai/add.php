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
        <h5 class="panel-title"><i class="icon-users"></i> Form Tambah Pegawai <?php echo $form; ?></h5>
    </div>


    <div class="panel-body">
        <!-- Tab panes -->
        <div class="tab-content">
            <?php
            //$url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'];
            //$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
            if ($form == '1') { ?>
                <!--content datadiri-->
                <div id="datadiri">
                    <div class="col-md-12">
                        <h3>1. Data Diri </h3>
                    </div>

                    <?php echo form_open_multipart('Pegawai/add_pekerjaan'); ?>
                    <div class="col-md-6">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label for="NamaLengkap" class="col-sm-3">Nama Lengkap</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nama" required class="form-control" id="NamaLengkap" placeholder="Masukkan Nama Lengkap">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="JenisKelamin" class="col-sm-3">Jenis Kelamin</label>
                                <div class="col-sm-9">
                                    <label class="radio-inline">
                                        <input type="radio" name="j_kelamin" id="Lk" value="Laki-laki" required>Laki-laki
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="j_kelamin" id="Pr" value="Perempuan" required>Perempuan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Hobby" class="col-sm-3">Hobi</label>
                                <div class="col-sm-9">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="hobi[]" value="jalan-jalan"> Jalan-jalan
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="hobi[]" value="nonton"> Nonton
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="hobi[]" value="memancing"> Memancing
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="hobi[]" value="olahraga"> Olahraga
                                        </label>
                                    </div>
                                    <input type="text" name="hobis" class="form-control" id="Hobby" placeholder="Hobi lainnya">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-md-6">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label for="TanggalLahir" class="col-sm-3">Tanggal Lahir</label>
                                <div class="col-sm-9">
                                    <input id="Tgl_Lahir" type="date" name="tgl_lahir" autocomplete="off" required placeholder="Tanggal Lahir" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Agama" class="col-sm-3">Agama</label>
                                <div class="col-sm-9">
                                    <select data-placeholder="Pilih Agama" class="select-clear" name="agama" required>
                                        <?php $agm = $this->db->get('agama')->result(); ?>
                                        <option></option>
                                        <?php
                                            foreach ($agm as $ag) :;
                                                echo '<option value="' . $ag->id_agama . '">' . $ag->agama . '</option>';
                                            endforeach;
                                            ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Alamat" class="col-sm-3">Alamat</label>
                                <div class="col-sm-9">
                                    <input type="text" name="alamat" required class="form-control" id="Alamat" placeholder="Masukkan Alamat">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="NoTelp" class="col-sm-3">Nomor Telepon</label>
                                <div class="col-sm-9">
                                    <input type="text" name="no_telp" required class="form-control" id="NoTelp" placeholder="Masukkan Nomor Telepon">
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="col-md-12">
                        <div class="text-center">
                            <button type="submit" name="btn_datadiri" id="btn_datadiri" class="btn btn-primary">Lanjut</button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
                <!--end datadiri-->
            <?php
            } elseif ($form == '2') { ?>
                <!--Conten Pekerjaan-->
                <div id="pekerjaan">
                    <div class="col-md-12">
                        <h3>2. Pekerjaan
                            <?= $nama2; ?><?= $jk2; ?>
                            <?= print_r($hobi2); ?>
                        </h3>
                    </div>
                    <?php echo form_open_multipart('Pegawai/add_pendidikan'); ?>
                    <input type="hidden" name="nama2" value="<?= $nama2; ?>">
                    <input type="hidden" name="jk2" value="<?= $jk2; ?>">
                    <input type="hidden" name="hobi2" value="<?= print_r($hobi2); ?>">

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Pekerjaan</label>
                        <div class="col-sm-10">

                            <select data-placeholder="Pilih Pekerjaan" class="select-clear" name="pekerjaan" required>
                                <?php $pkrjn = $this->db->get('pekerjaan')->result(); ?>
                                <option></option>
                                <?php
                                    foreach ($pkrjn as $krj) :;
                                        echo '<option value="' . $krj->id_pekerjaan . '">' . $krj->nama_pekerjaan . '</option>';
                                    endforeach;
                                    ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-10">
                            <input type="text" name="jabatan" class="form-control" id="inputPassword3" placeholder="Jabatan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Lama Kerja</label>
                        <div class="col-sm-10">
                            <input type="text" name="lkerja" class="form-control" id="inputPassword3" placeholder="Lama Kerja">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="text-center">
                            <button type="submit" name="btn_pendidikan" id="btn_pendidikan" class="btn btn-primary">Lanjut</button>
                            <?php echo form_close(); ?>

                            <?php echo form_open('Pegawai/add_datadiri'); ?>
                            <input type="hidden" name="nama_1" value="$nama1">
                            <button type="submit" name="back_btn_datadiri" id="back_btn_datadiri" class="btn btn-default">Kembali</button>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
                <!--End Pekerjaan-->
            <?php
            } elseif ($form == '3') { ?>
                <!--Content Pendidikan-->
                <div id="pendidikan">
                    <div class="col-md-12">
                        <h3>3. Pendidikan
                            <?= $nama3; ?><?= $jk3; ?>
                            <?= print_r($hobi3); ?>
                            <?= $pekerjaan3; ?>
                        </h3>
                    </div>
                    <?php echo form_open_multipart('Pegawai/add_berkas'); ?>
                    <input type="hidden" name="nama3" value="<?= $nama3; ?>">
                    <input type="hidden" name="jk3" value="<?= $jk3; ?>">
                    <input type="hidden" name="hobi3" value="<?= print_r($hobi3); ?>">
                    <input type="hidden" name="pekerjaan3" value="<?= $pekerjaan3; ?>">

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Nama Sekolah</label>
                            <input type="text" name="sd" class="form-control" placeholder="SD" required>
                        </div>
                        <!-- <div class="form-group col-md-4">
                            <label for="inputState">Status</label>
                            <select id="inputState" name="sd_status" class="form-control">
                                <option selected>Pilih</option>
                                <option value="Negeri">Negeri</option>
                                <option value="Swasta">Swasta</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="smp" class="form-control" id="inputCity" placeholder="SMP / Sederajat">
                        </div>
                        <div class="form-group col-md-4">
                            <select id="inputState" name="smp_status" class="form-control">
                                <option selected>Pilih</option>
                                <option value="Negeri">Negeri</option>
                                <option value="Swasta">Swasta</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="sma" class="form-control" id="inputCity" placeholder="SMA / Sederajat">
                        </div>
                        <div class="form-group col-md-4">
                            <select id="inputState" name="sma_status" class="form-control">
                                <option selected>Pilih</option>
                                <option value="Negeri">Negeri</option>
                                <option value="Swasta">Swasta</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="s1" class="form-control" id="inputCity" placeholder="S1">
                        </div>
                        <div class="form-group col-md-4">
                            <select id="inputState" name="s1_status" class="form-control">
                                <option selected>Pilih</option>
                                <option value="Negeri">Negeri</option>
                                <option value="Swasta">Swasta</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="s2" class="form-control" id="inputCity" placeholder="S2">
                        </div>
                        <div class="form-group col-md-4">
                            <select id="inputState" name="s2_status" class="form-control">
                                <option selected>Pilih</option>
                                <option value="Negeri">Negeri</option>
                                <option value="Swasta">Swasta</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="s3" class="form-control" id="inputCity" placeholder="S3">
                        </div>
                        <div class="form-group col-md-4">
                            <select id="inputState" name="s3_status" class="form-control">
                                <option selected>Pilih</option>
                                <option value="Negeri">Negeri</option>
                                <option value="Swasta">Swasta</option>
                            </select>
                        </div> -->
                        <div class="col-md-12">
                            <div class="text-center">
                                <button type="submit" name="back_btn_pekerjaan" id="back_btn_pekerjaan" class="btn btn-default">Kembali</button>
                                <button type="submit" name="btn_datadiri" id="btn_unggahberkas" class="btn btn-primary">Lanjut</button>
                            </div>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
                <!--end Pendidikan-->
            <?php
            } elseif ($form == '4') { ?>
                <!--Content Berkas-->
                <div id="berkas">
                    <div class="col-md-12">
                        <h3>4. Berkas
                            <?= $nama4; ?><?= $jk4; ?>
                            <?= print_r($hobi4); ?>
                            <?= $pekerjaan4; ?><?= $sd4; ?>
                        </h3>
                    </div>
                    <?php echo form_open_multipart('Pegawai/add_finish'); ?>
                    <input type="hidden" name="nama4" value="<?= $nama4; ?>">
                    <input type="hidden" name="jk4" value="<?= $jk4; ?>">
                    <input type="hidden" name="hobi4" value="<?= print_r($hobi4); ?>">
                    <input type="hidden" name="pekerjaan4" value="<?= $pekerjaan4; ?>">
                    <input type="hidden" name="sd4" value="<?= $sd4; ?>">

                    <div class="form-group">
                        <label for="Foto">Unggah Foto</label>
                        <input type="file" name="file_foto" id="UnggahFoto" required>
                        <p class="help-block">Ukuran foto maks 300kb (jpg/jpeg/png).</p>
                    </div>
                    <div class="form-group">
                        <label for="Foto">Unggah Ijazah</label>
                        <input type="file" name="file_ijazah" id="UnggahIjazah" required>
                        <p class="help-block">Ukuran file maks 500kb (pdf).</p>
                    </div>
                    <div class="text-center">
                        <button type="submit" href="#pendidikan" name="back_btn_pendidikan" id="back_btn_pendidikan" class="btn btn-default" aria-controls="pendidikan" role="tab" data-toggle="tab">Kembali</button>
                        <button type="submit" name="btn_selesai" id="btn_selesai" class="btn btn-success">Selesai</button>
                    </div>
                    <?php echo form_close(); ?>
                </div>
                <!--End Berkas-->
            <?php
            } else {
                redirect('pegawai/tambah/datadiri');
            }
            ?>
        </div>

    </div>
</div>