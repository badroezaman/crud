<div class="panel panel-primary">
    <div class="panel-heading">
        <h5 class="panel-title"><i class="icon-users"></i> Form Tambah Pegawai <?php echo $form;?></h5>
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
                        
                        <?php echo form_open_multipart('Pegawai/tambah2'); ?>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                                </div>
                            </div>
                            <!-- <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tgl-lahir" class="form-control" placeholder="Alamat">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="agama" required>
                                        <option>Pilih Agama</option>
                                        <?php $men = $this->db->get('agama')->result();
                                            ?>
                                        <?php
                                            $no = 0;
                                            foreach ($men as $r) : $no++;
                                                echo '<option value="' . $r->id_agama . '">' . $r->agama . '</option>';
                                            endforeach;
                                            ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">No.Telp</label>
                                <div class="col-sm-10">
                                    <input type="text" name="no_telp" class="form-control" placeholder="Nomor Telephone">
                                </div>
                            </div>
                            <fieldset class="form-group">
                                <div class="row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" name="j_kelamin" type="radio" name="gridRadios" id="gridRadios1" value="Laki-laki">
                                            <label class="form-check-label" for="gridRadios1">
                                                Laki - Laki
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="j_kelamin" type="radio" name="gridRadios" id="gridRadios2" value="Perempuan">
                                            <label class="form-check-label" for="gridRadios2">
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group row">
                                <div class="col-sm-2">Hobi</div>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" name="hobi[]" value="Membaca" type="checkbox" id="gridCheck1">
                                        <label class="form-check-label" for="gridCheck1">
                                            Membaca
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="hobi[]" value="Olah Raga" type="checkbox" id="gridCheck1">
                                        <label class="form-check-label" for="gridCheck1">
                                            Olah Raga
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="hobi[]" value="Musik" type="checkbox" id="gridCheck1">
                                        <label class="form-check-label" for="gridCheck1">
                                            Musik
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="hobi[]" value="Lain - Lain" type="checkbox" id="gridCheck1">
                                        <label class="form-check-label" for="gridCheck1">
                                            Lain - Lain
                                        </label>
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
                } elseif ($form=='2') { ?>
                    <!--Conten Pekerjaan-->
                    <div id="pekerjaan">
                        <div class="col-md-12">
                            <h3>2. pekerjaan <?=$nama2; ?></h3>
                        </div>
                        <?php echo form_open_multipart('Pegawai/tambah3'); ?>
                        <input type="hidden" name="nama2" value="<?= $nama2; ?>">

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10">
                                    
                                    <select data-placeholder="Pilih Pekerjaan" class="select-clear" name="pekerjaan" required>
                                        <?php $pkrjn = $this->db->get('pekerjaan')->result(); ?>
                                        <option></option>
                                        <?php
                                            foreach ($pkrjn as $krj): ;
                                                echo '<option value="' . $krj->id_pekerjaan .'">' . $krj->nama_pekerjaan . '</option>';
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

                                    <?php echo form_open('Pegawai/tambah'); ?>
                                    <input type="hidden" name="nama_1" value="$nama1">
                                    <button type="submit"  name="back_btn_datadiri" id="back_btn_datadiri" class="btn btn-default">Kembali</button>
                                    <?php echo form_close(); ?>       
                                </div>
                            </div>
                    </div>
                    <!--End Pekerjaan-->
                <?php
                } elseif ($form=='3') { ?>
                    <!--Content Pendidikan-->
                    <div id="pendidikan">
                        <div class="col-md-12">
                            <h3>3. Pendidikan <?= $nama3; ?><?= $pekerjaan3; ?></h3>
                        </div>
                        <?php echo form_open_multipart('Pegawai/tambah4'); ?>
                        <input type="hidden" name="nama3" value="<?= $nama3; ?>">
                        <input type="hidden" name="pekerjaan3" value="<?= $pekerjaan3; ?>">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">Nama Sekolah</label>
                                    <input type="text" name="sd" class="form-control" placeholder="SD" required>
                                </div>
                                <div class="form-group col-md-4">
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
                                </div>
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button type="submit" name="back_btn_pekerjaan" id="back_btn_pekerjaan" class="btn btn-default" >Kembali</button>
                                        <button type="submit" name="btn_datadiri" id="btn_unggahberkas" class="btn btn-primary" >Lanjut</button>
                                    </div>
                                </div>
                            </div>
                        <?php echo form_close(); ?>
                    </div>
                    <!--end Pendidikan-->
                <?php
                } elseif ($form=='4') { ?>
                    <!--Content Berkas-->
                    <div role="tabpanel" class="tab-pane active" id="pekerjaan">
                        <div class="col-md-12">
                            <h3>4. Berkas <?= $nama4; ?><?= $pekerjaan4; ?><?= $sd4; ?></h3>
                        </div>
                        <?php echo form_open_multipart('Pegawai/tambah5'); ?>
                            <div class="form-group">
                                <label for="Foto">Unggah Foto</label>
                                <input type="file" id="UnggahFoto" required>
                                <p class="help-block">Ukuran foto maks 300kb (jpg/jpeg/png).</p>
                            </div>
                            <div class="form-group">
                                <label for="Foto">Unggah Ijazah</label>
                                <input type="file" id="UnggahIjazah" required>
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