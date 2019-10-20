<div class="panel panel-primary">
    <div class="panel-heading">
        <h5 class="panel-title"><i class="icon-users"></i> Form Tambah Pegawai</h5>
    </div>
    <!-- <?= form_open_multipart('Pegawai/tambah'); ?> -->
    <!-- <input type="hidden" value="<?= $getrow['id_admin']; ?>" name="id"> -->

    <div class="panel-body">
        <form>

            <!-- Nav tabs -->
            <!-- <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#datadiri" aria-controls="home" role="tab" data-toggle="tab">Data Diri</a></li>
                <li role="presentation"><a href="#pekerjaan" aria-controls="pekerjaan" role="tab" data-toggle="tab">Pekerjaan</a></li>
                <li role="presentation"><a href="#pendidikan" aria-controls="pendidikan" role="tab" data-toggle="tab">Pendidikan</a></li>
                <li role="presentation"><a href="#unggahberkas" aria-controls="unggahberkas" role="tab" data-toggle="tab">Unggah Berkas</a></li>
            </ul> -->

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="datadiri">
                    <div class="col-md-12">
                        <h3>1. Data Diri</h3>
                    </div>
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
                                        <input type="checkbox" name="hobi" value="jalan-jalan"> Jalan-jalan
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="hobi" value="nonton"> Nonton
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="hobi" value="memancing"> Memancing
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="hobi" value="olahraga"> Olahraga
                                    </label>
                                </div>
                                <input type="text" name="hobi2" class="form-control" id="Hobby" placeholder="Hobi lainnya">
                            </div>
                        </div>
                    </div>
                    </div>
                    
                    <div class="col-md-6">
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
                                <select class="form-control" name="agama" required>
                                    <option>Pilih Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Budha">Budha</option>
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
                    </div>
                    
                    <div class="col-md-12">
                        <div class="text-center">
                            <!-- <a href="#pekerjaan" class="btn btn-primary" aria-controls="pekerjaan" role="tab" data-toggle="tab">Lanjut</a> -->
                            <button type="submit" href="#pekerjaan" name="btn_datadiri" id="btn_datadiri" class="btn btn-primary" aria-controls="datadiri" role="tab" data-toggle="tab">Lanjut</button>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="pekerjaan">
                    <div class="col-md-12">
                        <h3>2. Pekerjaan</h3>
                    </div>
                    <div class="col-md-6">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label for="Pekerjaan" class="col-sm-3">Pekerjaan</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="pekerjaan" required>
                                        <option>Pilih Pekerjaan</option>
                                        <option value="id_pekerjaan">Pegawai Negeri</option>
                                        <option value="id_pekerjaan">Wiraswasta</option>
                                        <option value="id_pekerjaan">Polisi/TNI</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Jabatan" class="col-sm-3">Jabatan</label>
                                <div class="col-sm-9">
                                    <input type="text" name="jabatan" required class="form-control" id="Jabatan" placeholder="Pilih Jabatan">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label for="LamaKerja" class="col-sm-3">Lama Kerja</label>
                                <div class="col-sm-9">
                                    <input type="text" name="lamakerja" required class="form-control" id="LamaKerja" placeholder="Contoh : 10 tahun">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="text-center">
                            <!-- <a href="#datadiri" class="btn btn-default" aria-controls="pekerjaan" role="tab" data-toggle="tab">Kembali</a> -->
                            <!-- <a href="#pendidikan" class="btn btn-primary" aria-controls="pekerjaan" role="tab" data-toggle="tab">Lanjut</a> -->
                            <button type="submit" href="#datadiri" name="back_btn_datadiri" id="back_btn_datadiri" class="btn btn-default" aria-controls="datadiri" role="tab" data-toggle="tab">Kembali</button>
                            <button type="submit" href="#pendidikan" name="btn_pendidikan" id="btn_pendidikan" class="btn btn-primary" aria-controls="pendidikan" role="tab" data-toggle="tab">Lanjut</button>
                            <!-- <button type="button" name="btn_pekerjaan_kembali" id="btn_pekerjaan_kembali" class="btn btn-default">Kembali</button>
                            <button type="button" name="btn_pekerjaan" id="btn_pekerjaan" class="btn btn-primary">Lanjut</button> -->
                        </div>
                    </div>

                </div>
                <div role="tabpanel" class="tab-pane" id="pendidikan">
                    <div class="col-md-12">
                        <h3>3. Pendidikan</h3>
                    </div>

                    <div class="col-md-6">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label for="SD" class="col-sm-3">SD</label>
                                <div class="col-sm-9">
                                    <input type="text" name="sd" required class="form-control" id="SD" placeholder="Asal SD">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="StatusSD" class="col-sm-3">Status SD</label>
                                <div class="col-sm-9">
                                    <label class="radio-inline">
                                        <input type="radio" name="st_sd" value="Negeri" required>Negeri
                                    </label>
                                    <label class="radio-inline">
                                    <input type="radio" name="st_sd" value="Swasta" required>Swasta
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="SMP" class="col-sm-3">SMP</label>
                                <div class="col-sm-9">
                                    <input type="text" name="smp" required class="form-control" id="SMP" placeholder="Asal SMP">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="StatusSMP" class="col-sm-3">Status SMP</label>
                                <div class="col-sm-9">
                                    <label class="radio-inline">
                                        <input type="radio" name="st_smp" value="Negeri" required>Negeri
                                    </label>
                                    <label class="radio-inline">
                                    <input type="radio" name="st_smp" value="Swasta" required>Swasta
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="SMAKA" class="col-sm-3">SMA / SMK / MA</label>
                                <div class="col-sm-9">
                                    <input type="text" name="smaka" required class="form-control" id="SMAKA" placeholder="Asal SMA / SMK / MA">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="StatusSMAKA" class="col-sm-3">Status SMA / SMK / MA</label>
                                <div class="col-sm-9">
                                    <label class="radio-inline">
                                        <input type="radio" name="st_smaka" value="Negeri" required>Negeri
                                    </label>
                                    <label class="radio-inline">
                                    <input type="radio" name="st_smaka" value="Swasta" required>Swasta
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="D3" class="col-sm-3">D3</label>
                                <div class="col-sm-9">
                                    <input type="text" name="d3" required class="form-control" id="D3" placeholder="Asal D3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="StatusD3" class="col-sm-3">Status D3</label>
                                <div class="col-sm-9">
                                    <label class="radio-inline">
                                        <input type="radio" name="st_d3" value="Negeri" required>Negeri
                                    </label>
                                    <label class="radio-inline">
                                    <input type="radio" name="st_d3" value="Swasta" required>Swasta
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
                                    <input type="text" name="s1" required class="form-control" id="S1" placeholder="Asal S1">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="StatusS1" class="col-sm-3">Status S1</label>
                                <div class="col-sm-9">
                                    <label class="radio-inline">
                                        <input type="radio" name="st_s1" value="Negeri" required>Negeri
                                    </label>
                                    <label class="radio-inline">
                                    <input type="radio" name="st_s1" value="Swasta" required>Swasta
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="S2" class="col-sm-3">S2</label>
                                <div class="col-sm-9">
                                    <input type="text" name="s2" required class="form-control" id="S2" placeholder="Asal S2">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="StatusS2" class="col-sm-3">Status S2</label>
                                <div class="col-sm-9">
                                    <label class="radio-inline">
                                        <input type="radio" name="st_s2" value="Negeri" required>Negeri
                                    </label>
                                    <label class="radio-inline">
                                    <input type="radio" name="st_s2" value="Swasta" required>Swasta
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="S3" class="col-sm-3">S3</label>
                                <div class="col-sm-9">
                                    <input type="text" name="s3" required class="form-control" id="S3" placeholder="Asal S3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="StatusS3" class="col-sm-3">Status S3</label>
                                <div class="col-sm-9">
                                    <label class="radio-inline">
                                        <input type="radio" name="st_s3" value="Negeri" required>Negeri
                                    </label>
                                    <label class="radio-inline">
                                    <input type="radio" name="st_s3" value="Swasta" required>Swasta
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="text-center">
                            <!-- <a href="#pekerjaan" class="btn btn-default" aria-controls="pekerjaan" role="tab" data-toggle="tab">Kembali</a> -->
                            <!-- <a href="#unggahberkas" class="btn btn-primary" aria-controls="pekerjaan" role="tab" data-toggle="tab">Lanjut</a> -->
                            <button type="submit" href="#pekerjaan" name="back_btn_pekerjaan" id="back_btn_pekerjaan" class="btn btn-default" aria-controls="pekerjaan" role="tab" data-toggle="tab">Kembali</button>
                            <button type="submit" href="#unggahberkas" name="btn_datadiri" id="btn_unggahberkas" class="btn btn-primary" aria-controls="unggahberkas" role="tab" data-toggle="tab">Lanjut</button>
                            <!-- <button type="button" name="btn_pendidikan_kembali" id="btn_pendidikan_kembali" class="btn btn-default">Kembali</button>
                            <button type="button" name="btn_pendidikan" id="btn_pendidikan" class="btn btn-primary">Lanjut</button> -->
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="unggahberkas">
                    <div class="col-md-12">
                        <h3>4. Unggah Berkas</h3>
                    </div>
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
                        <!-- <a href="#pendidikan" class="btn btn-default" aria-controls="pekerjaan" role="tab" data-toggle="tab">Kembali</a> -->
                        <!-- <button type="button" name="btn_selesai_kembali" id="btn_selesai_kembali" class="btn btn-default">Kembali</button> -->
                        <button type="submit" href="#pendidikan" name="back_btn_pendidikan" id="back_btn_pendidikan" class="btn btn-default" aria-controls="pendidikan" role="tab" data-toggle="tab">Kembali</button>
                        <button type="submit" name="btn_selesai" id="btn_selesai" class="btn btn-success">Selesai</button>
                    </div>
                </div>
            </div>

            <!-- <button type="submit" class="btn btn-default">Submit</button> -->
        </form>
    </div>
</div>