<div class="panel panel-primary">
    <div class="panel-heading">
        <h5 class="panel-title"><i class="icon-users"></i> <?= $title; ?></h5>
    </div>

    <div class="panel-body">

        <!-- Tab panes -->
        <div class="tab-content">
            <?php
            if ($form == '1') { ?>
                <div id="datadiri">

                    <div class="col-md-12">
                        <h3>1. Data Diri</h3>
                    </div>

                    <?= form_open_multipart('Pegawai/edit_pekerjaan'); ?>
                    <input type="hidden" value="<?= $getrow['id_pegawai']; ?>" name="id">

                    <div class="col-md-6">
                        <div class="form-horizontal">
                            <div class="form-group text-center">
                                <div class="text-center">
                                    <img src="<?= base_url() . 'upload/pegawai/foto/' . $getrow['foto']; ?>" class="img-circle" style="width: 150px; height: auto;">
                                </div>
                                <div class="text-center" style="margin-top: 1em;">
                                    <label id="edit-foto" class="btn btn-default">Ganti Foto
                                        <input type="file" id="upload-edit-foto" class="hidden">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label for="NamaLengkap" class="col-sm-3">Nama Lengkap</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nama" value="<?= $getrow['nama']; ?>" required class="form-control" placeholder="Masukkan Nama Lengkap">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="JenisKelamin" class="col-sm-3">Jenis Kelamin</label>
                                <div class="col-sm-9">
                                    <label class="radio-inline">
                                        <input type="radio" name="j_kelamin" id="Lk" value="Laki-laki" <?php if ($getrow['j_kelamin'] == 'Laki-laki') {
                                                                                                                echo "checked=\"checked\"";
                                                                                                            }; ?>>Laki-laki
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="j_kelamin" id="Pr" value="Perempuan" <?php if ($getrow['j_kelamin'] == 'Perempuan') {
                                                                                                                echo "checked=\"checked\"";
                                                                                                            }; ?>>Perempuan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Hobby" class="col-sm-3">Hobi</label>
                                <div class="col-sm-9">
                                    <input type="text" name="hobi" class="form-control" placeholder="<?= $getrow['hobby']; ?>" readonly>
                                    <!-- <div class="checkbox">
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
                                <input type="text" name="hobi2" class="form-control" id="Hobby" placeholder="Hobi lainnya"> -->
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="TanggalLahir" class="col-sm-3">Tanggal Lahir</label>
                                <div class="col-sm-9">
                                    <input id="Tgl_Lahir" type="date" name="tgl_lahir" value="<?= $getrow['tgl_lahir']; ?>" autocomplete="off" required placeholder="Tanggal Lahir" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Agama" class="col-sm-3">Agama</label>
                                <div class="col-sm-9">
                                    <select data-placeholder="Pilih Agama" class="select-clear" name="agama" required>
                                        <?php
                                            $agm = $this->db->get('agama')->result();
                                            ?>
                                        <option></option>
                                        <?php
                                            foreach ($agm as $ag) :;
                                                echo '<option value="' . $ag->id_agama . '" ' . select($getrow['id_agama'], $ag->id_agama) . '>' . $ag->agama . '</option>';
                                            endforeach;
                                            ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Alamat" class="col-sm-3">Alamat</label>
                                <div class="col-sm-9">
                                    <input type="text" name="alamat" value="<?= $getrow['alamat']; ?>" required class="form-control" id="Alamat" placeholder="Masukkan Alamat">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="NoTelp" class="col-sm-3">Nomor Telepon</label>
                                <div class="col-sm-9">
                                    <input type="text" name="no_telp" value="<?= $getrow['no_telp']; ?>" required class="form-control" id="NoTelp" placeholder="Masukkan Nomor Telepon">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="text-center">
                            <button type="submit" name="btn_datadiri" id="btn_datadiri" class="btn btn-primary">Lanjut</button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>

            <?php
            } elseif ($form == '2') { ?>

                <div id="pekerjaan">
                    <div class="col-md-12">
                        <h3>2. Pekerjaan</h3>
                    </div>
                    
                    <?= form_open_multipart('Pegawai/edit_pendidikan'); ?>
                    <input type="hidden" value="<?= $getrow['id_pegawai']; ?>" name="id">

                    <div class="col-md-6">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label for="Pekerjaan" class="col-sm-3">Pekerjaan</label>
                                <div class="col-sm-9">
                                    <select data-placeholder="Pilih Pekerjaan" class="select-clear" name="pekerjaan" required>
                                        <?php 
                                        $pkrjn = $this->db->get('pekerjaan')->result(); 
                                        ?>
                                        <option></option>
                                        <?php
                                            foreach ($pkrjn as $krj) :;
                                                echo '<option value="' . $krj->id_pekerjaan . '" ' . select($getrow['id_pekerjaan'], $krj->id_pekerjaan) . '>' . $krj->nama_pekerjaan . '</option>';
                                            endforeach;
                                            ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Jabatan" class="col-sm-3">Jabatan</label>
                                <div class="col-sm-9">
                                    <input type="text" name="jabatan" value="<?= $getrow['jabatan']; ?>" required class="form-control" id="Jabatan" placeholder="Masukkan Jabatan">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label for="LamaKerja" class="col-sm-3">Lama Kerja</label>
                                <div class="col-sm-9">
                                    <input type="text" name="lamakerja" value="<?= $getrow['lama_kerja']; ?>" required class="form-control" id="LamaKerja" placeholder="Contoh : 10 tahun">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="text-center">
                            <button type="submit" name="back_btn_datadiri" id="back_btn_datadiri" class="btn btn-default">Kembali</button>
                            <button type="submit" name="btn_pendidikan" id="btn_pendidikan" class="btn btn-primary">Lanjut</button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>

            <?php
            } elseif ($form == '3') { ?>

                <div id="pendidikan">
                    <div class="col-md-12">
                        <h3>3. Pendidikan</h3>
                    </div>

                    <?= form_open_multipart('Pegawai/edit_berkas'); ?>
                    <input type="hidden" value="<?= $getrow['id_pegawai']; ?>" name="id">

                    <div class="col-md-6">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label for="SD" class="col-sm-3">SD</label>
                                <div class="col-sm-9">
                                    <input type="text" name="sd" value="<?= $getrow['sd']; ?>" required class="form-control" id="SD" placeholder="Asal SD">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="StatusSD" class="col-sm-3">Status SD</label>
                                <div class="col-sm-9">
                                    <label class="radio-inline">
                                            <input type="radio" name="st_sd" value="Negeri" <?php if ($getrow['sd_status'] == 'Negeri') {
                                                                                                                    echo "checked=\"checked\"";
                                                                                                                }; ?>>Negeri
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="st_sd" value="Swasta" <?php if ($getrow['sd_status'] == 'Swasta') {
                                                                                                                    echo "checked=\"checked\"";
                                                                                                                }; ?>>Swasta
                                        </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="SMP" class="col-sm-3">SMP</label>
                                <div class="col-sm-9">
                                    <input type="text" name="smp" value="<?= $getrow['smp']; ?>" required class="form-control" id="SMP" placeholder="Asal SMP">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="StatusSMP" class="col-sm-3">Status SMP</label>
                                <div class="col-sm-9">
                                <label class="radio-inline">
                                            <input type="radio" name="st_smp" value="Negeri" <?php if ($getrow['smp_status'] == 'Negeri') {
                                                                                                                    echo "checked=\"checked\"";
                                                                                                                }; ?>>Negeri
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="st_smp" value="Swasta" <?php if ($getrow['smp_status'] == 'Swasta') {
                                                                                                                    echo "checked=\"checked\"";
                                                                                                                }; ?>>Swasta
                                        </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="SMAKA" class="col-sm-3">SMA / SMK / MA</label>
                                <div class="col-sm-9">
                                    <input type="text" name="smaka" class="form-control" id="SMAKA" placeholder="Asal SMA / SMK / MA">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="StatusSMAKA" class="col-sm-3">Status SMA / SMK / MA</label>
                                <div class="col-sm-9">
                                    <label class="radio-inline">
                                        <input type="radio" name="st_smaka" value="Negeri">Negeri
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="st_smaka" value="Swasta">Swasta
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="D3" class="col-sm-3">D3</label>
                                <div class="col-sm-9">
                                    <input type="text" name="d3" class="form-control" id="D3" placeholder="Asal D3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="StatusD3" class="col-sm-3">Status D3</label>
                                <div class="col-sm-9">
                                    <label class="radio-inline">
                                        <input type="radio" name="st_d3" value="Negeri">Negeri
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="st_d3" value="Swasta">Swasta
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label for="S1" class="col-sm-3">S1</label>
                                <div class="col-sm-9">
                                    <input type="text" name="s1" class="form-control" id="S1" placeholder="Asal S1">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="StatusS1" class="col-sm-3">Status S1</label>
                                <div class="col-sm-9">
                                    <label class="radio-inline">
                                        <input type="radio" name="st_s1" value="Negeri">Negeri
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="st_s1" value="Swasta">Swasta
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="S2" class="col-sm-3">S2</label>
                                <div class="col-sm-9">
                                    <input type="text" name="s2" class="form-control" id="S2" placeholder="Asal S2">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="StatusS2" class="col-sm-3">Status S2</label>
                                <div class="col-sm-9">
                                    <label class="radio-inline">
                                        <input type="radio" name="st_s2" value="Negeri">Negeri
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="st_s2" value="Swasta">Swasta
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="S3" class="col-sm-3">S3</label>
                                <div class="col-sm-9">
                                    <input type="text" name="s3" class="form-control" id="S3" placeholder="Asal S3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="StatusS3" class="col-sm-3">Status S3</label>
                                <div class="col-sm-9">
                                    <label class="radio-inline">
                                        <input type="radio" name="st_s3" value="Negeri">Negeri
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="st_s3" value="Swasta">Swasta
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="text-center">
                            <button type="submit" href="#pekerjaan" name="back_btn_pekerjaan" id="back_btn_pekerjaan" class="btn btn-default">Kembali</button>
                            <button type="submit" href="#unggahberkas" name="btn_datadiri" id="btn_unggahberkas" class="btn btn-primary">Lanjut</button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>

            <?php
            } elseif ($form == '4') { ?>

                <div id="unggahberkas">
                    <div class="col-md-12">
                        <h3>4. Unggah Berkas</h3>
                    </div>

                    <?= form_open_multipart('Pegawai/edit_finish'); ?>
                    <input type="hidden" value="<?= $getrow['id_pegawai']; ?>" name="id">

                    <div class="form-group">
                        <label for="Foto">Unggah Ijazah</label>
                        <input type="file" id="UnggahIjazah" name="file_ijazah">
                        <p class="help-block">Ukuran file maks 500kb (pdf).</p>
                        <input type="text" class="form-control" placeholder="<?= 'upload/pegawai/ijazah/' . $getrow['ijazah']; ?>" readonly>
                    </div>
                    <div class="text-center">
                        <button type="submit" href="#pendidikan" name="back_btn_pendidikan" id="back_btn_pendidikan" class="btn btn-default">Kembali</button>
                        <button type="submit" name="btn_selesai" id="btn_selesai" class="btn btn-success">Selesai</button>
                    </div>
                    <?php echo form_close(); ?>
                </div>

            <?php
            } else {
                redirect('pegawai/edit_datadiri');
                } ?>
        </div>

    </div>
</div>