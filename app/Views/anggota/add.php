<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>
  <?php if(session()->get('level') === '2') : ?>
    <div class="form form-anggota">
    <div class="heading-secondary">
      Tambah Data Anggota
    </div>

  <form action="/anggota/save" method="post">
      <div class="text_field">
        <input type="text" class="form-control" name="no_anggota" value=""></p>
        <label for="no_anggota">No Anggota</label>
    </div>
    <div class="text_field">
        <input type="text" class="form-control" name="nama" value=""></p>
        <label for="nama">Nama</label>
    </div>
    <div class="text_field">
        <input type="text" class="form-control" name="no_ktp" value=""></p>
        <label for="no_ktp">No KTP</label>
    </div>
    <div class="">
      <label for="jenis_kelamin">Jenis Kelamin</label>
      <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">Jenis Kelamin
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>
    <div class="">
      <label for="tanggal_lahir">Tanggal Lahir</label>
      <input type="date" class="form-control" name="tanggal_lahir" value="">
    </div>
    <div class="text_field">
        <textarea name="alamat" class="form-control" cols="15" rows="10"></textarea>
        <label for="alamat">Alamat</label>
    </div>
    <div class="text_field">
        <input type="text" class="form-control" name="no_hp" value="">
        <label for="no_hp">No HP</label>
    </div>
    <div class="text_field">
        <input type="text" class="form-control" name="email" value="">
        <label for="email">Email</label>
    </div>
    <input type="submit"  value="Save" class="btn"">
  </form>

  <?php else : ?>   
  <div class="form form-anggota"  >
    <div class="heading-secondary">
      Lengkapi Data Anggota
    </div>
      <div class="row">
        <div class="col">
          <form action="/anggota/save" name="form2" class="forms" method="post" >
            <input type="text" class="form-control" name="no_anggota" id="no_anggota" value="" hidden></p>
            <div class="text_field">
                <input type="text" class="form-control" name="nama" value="" required></p>
                <label for="nama">Nama</label>
            </div>
            <div class="text_field">
                <input type="text" class="form-control" name="no_ktp" value="" required></p>
                <label for="no_ktp">No KTP</label>
            </div>
            <div class="">
              <label for="jenis_kelamin">Jenis Kelamin</label>
              <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>Jenis Kelamin
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
            <div class="">
              <label for="tanggal_lahir">Tanggal Lahir</label>
              <input type="date" class="form-control" name="tanggal_lahir" value="" required>
            </div>
            <div class="text_field">
                <textarea name="alamat" class="form-control" cols="15" rows="10" required></textarea>
                <label for="alamat">Alamat</label>
            </div>
            <div class="text_field">
                <input type="text" class="form-control" name="no_hp" value="" required>
                <label for="no_hp">No HP</label>
            </div>
              <input type="text" class="form-control" name="email" value="<?php echo session()->get('email') ?>" hidden>
              <input type="submit" value="Save" id="save" class="btn" onclick="generateNoAnggota()">
            </form>
        </div>
      </div>
    </div>
  </div>

 
  <?php endif ?>

  <script>

  </script>
</div>
<?= $this->endSection('content'); ?>