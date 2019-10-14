<div class="panel panel-primary">
    <div class="panel-heading">
        <h5 class="panel-title"><i class="icon-users"></i> Form Tambah Pegawai</h5>
    </div>
    <!-- <?= form_open_multipart('Pegawai/tambah'); ?> -->
    <!-- <input type="hidden" value="<?= $getrow['id_admin']; ?>" name="id"> -->

    <div class="panel-body">
        <form>
            <div class="form-group">
                <label for="NamaLengkap">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" id="NamaLengkap" placeholder="Masukkan Nama Lengkap">
            </div>
            <div class="form-group">
                <label for="JenisKelamin">Jenis Kelamin</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="j_kelamin" id="Lk" value="Laki-laki">Laki-laki
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="j_kelamin" id="Pr" value="Perempuan">Perempuan
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="TanggalLahir">Tanggal Lahir</label>
                <input type="text" name="tgl_lahir" class="form-control" id="TanggalLahir" placeholder="Pilih Tanggal Lahir">
            </div>
            <div class="form-group">
                <label for="Hobby">Hobi</label>
                <input type="text" name="hobi" class="form-control" id="Hobby" placeholder="Tuliskan Hobi">
            </div>
            <div class="form-group">
                <label for="Agama">Agama</label>
                <input type="text" name="agama" class="form-control" id="Agama" placeholder="Pilih Agama">
            </div>
            <div class="form-group">
                <label for="Alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="Alamat" placeholder="Masukkan Alamat">
            </div>
            <div class="form-group">
                <label for="NoTelp">Nomor Telepon</label>
                <input type="text" name="no_telp" class="form-control" id="NoTelp" placeholder="Masukkan Nomor Telepon">
            </div>
            <div class="form-group">
                <label for="Pekerjaan">Pekerjaan</label>
                <input type="text" name="pekerjaan" class="form-control" id="Pekerjaan" placeholder="Pilih Pekerjaan">
            </div>
            <div class="form-group">
                <label for="Jabatan">Jabatan</label>
                <input type="text" name="jabatan" class="form-control" id="Jabatan" placeholder="Pilih Jabatan">
            </div>
            <div class="form-group">
                <label for="LamaKerja">Lama Kerja</label>
                <input type="text" name="lamakerja" class="form-control" id="LamaKerja" placeholder="Contoh : 10 tahun">
            </div>
            <div class="form-group">
                <label for="Pendidikan">Pendidikan</label>
                <input type="text" name="pendidikan" class="form-control" id="Pendidikan" placeholder="Pilih Pendidikan Terakhir">
            </div>
            <div class="form-group">
                <label for="StatusPendidikan">Status Pendidikan</label>
                <input type="text" name="statuspendidikan" class="form-control" id="StatusPendidikan" placeholder="Pilih Status Pendidikan">
            </div>
            <div class="form-group">
                <label for="Foto">Unggah Foto</label>
                <input type="file" id="UnggahFoto">
                <p class="help-block">Ukuran foto maks 300kb (jpg/jpeg/png).</p>
            </div>
            <div class="form-group">
                <label for="Foto">Unggah Ijazah</label>
                <input type="file" id="UnggahFoto">
                <p class="help-block">Ukuran file maks 500kb (pdf).</p>
            </div>


            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>