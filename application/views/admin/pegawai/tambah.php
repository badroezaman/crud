<div class="panel panel-primary">
    <div class="panel-heading">
        <h5 class="panel-title"><i class="icon-users"></i> Form Tambah Pegawai</h5>
    </div>
    <!-- <?= form_open_multipart('Pegawai/tambah'); ?> -->
    <!-- <input type="hidden" value="<?= $getrow['id_admin']; ?>" name="id"> -->

    <div class="panel-body">
        <form>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#datadiri" aria-controls="home" role="tab" data-toggle="tab">Data Diri</a></li>
                <li role="presentation"><a href="#pekerjaan" aria-controls="pekerjaan" role="tab" data-toggle="tab">Pekerjaan</a></li>
                <li role="presentation"><a href="#pendidikan" aria-controls="pendidikan" role="tab" data-toggle="tab">Pendidikan</a></li>
                <li role="presentation"><a href="#unggahberkas" aria-controls="unggahberkas" role="tab" data-toggle="tab">Unggah Berkas</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="datadiri">
                    <div class="form-group">
                        <label for="NamaLengkap">Nama Lengkap</label>
                        <input type="text" name="nama" required class="form-control" id="NamaLengkap" placeholder="Masukkan Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label for="JenisKelamin">Jenis Kelamin</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="j_kelamin" id="Lk" value="Laki-laki" required>Laki-laki
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="j_kelamin" id="Pr" value="Perempuan" required>Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="TanggalLahir">Tanggal Lahir</label>
                        <!-- <input type="text" name="tgl_lahir" class="form-control" id="TanggalLahir" placeholder="Pilih Tanggal Lahir"> -->
                        <input id="Tgl_Lahir" type="date" name="tgl_lahir" autocomplete="off" required placeholder="Tanggal Lahir" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Hobby">Hobi</label>
                        <input type="text" name="hobi" required class="form-control" id="Hobby" placeholder="Tuliskan Hobi">
                    </div>
                    <div class="form-group">
                        <label for="Agama">Agama</label>
                        <select class="form-control" name="agama" required>
                            <option>Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Budha">Budha</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Alamat">Alamat</label>
                        <input type="text" name="alamat" required class="form-control" id="Alamat" placeholder="Masukkan Alamat">
                    </div>
                    <div class="form-group">
                        <label for="NoTelp">Nomor Telepon</label>
                        <input type="text" name="no_telp" required class="form-control" id="NoTelp" placeholder="Masukkan Nomor Telepon">
                    </div>
                    <div style="text-align: center">
                        <button type="button" name="btn_datadiri" id="btn_datadiri" class="btn btn-primary">Lanjut</button>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="pekerjaan">
                    <div class="form-group">
                        <label for="Pekerjaan">Pekerjaan</label>
                        <input type="text" name="pekerjaan" required class="form-control" id="Pekerjaan" placeholder="Pilih Pekerjaan">
                    </div>
                    <div class="form-group">
                        <label for="Jabatan">Jabatan</label>
                        <input type="text" name="jabatan" required class="form-control" id="Jabatan" placeholder="Pilih Jabatan">
                    </div>
                    <div class="form-group">
                        <label for="LamaKerja">Lama Kerja</label>
                        <input type="text" name="lamakerja" required class="form-control" id="LamaKerja" placeholder="Contoh : 10 tahun">
                    </div>
                    <div style="text-align: center">
                        <button type="button" name="btn_pekerjaan_kembali" id="btn_pekerjaan_kembali" class="btn btn-default">Kembali</button>
                        <button type="button" name="btn_pekerjaan" id="btn_pekerjaan" class="btn btn-primary">Lanjut</button>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="pendidikan">
                    <div class="form-group">
                        <label for="Pendidikan">Pendidikan</label>
                        <input type="text" name="pendidikan" required class="form-control" id="Pendidikan" placeholder="Pilih Pendidikan Terakhir">
                    </div>
                    <div class="form-group">
                        <label for="StatusPendidikan">Status Pendidikan</label>
                        <input type="text" name="statuspendidikan" required class="form-control" id="StatusPendidikan" placeholder="Pilih Status Pendidikan">
                    </div>
                    <div style="text-align: center">
                        <button type="button" name="btn_pendidikan_kembali" id="btn_pendidikan_kembali" class="btn btn-default">Kembali</button>
                        <button type="button" name="btn_pendidikan" id="btn_pendidikan" class="btn btn-primary">Lanjut</button>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="unggahberkas">
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
                    <div style="text-align: center">
                        <button type="button" name="btn_selesai_kembali" id="btn_selesai_kembali" class="btn btn-default">Kembali</button>
                        <button type="button" name="btn_selesai" id="btn_selesai" class="btn btn-success">Selesai</button>
                    </div>
                </div>
            </div>

            <!-- <button type="submit" class="btn btn-default">Submit</button> -->
        </form>
    </div>
</div>