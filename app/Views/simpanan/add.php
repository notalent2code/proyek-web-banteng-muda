<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>
<div class="form form-anggota">
    <div class="heading-secondary">
        Tambah Data Simpanan
    </div>
  <form action="/simpanan/save" method="post">
    <div class="text_field">
        <input type="text" class="form-control" name="no_simpanan" value=""></p>
        <label for="no_simpanan">No Simpanan</label>
    </div>
    <div class="text_field">
        <input type="text" class="form-control" name="no_anggota" value=""></p>
        <label for="no_anggota">No Anggota</label>
    </div>
    <div class="text_field">
        <input type="text" class="form-control" name="besar_simpanan" value=""></p>
        <label for="besar_simpanan">Besar Simpanan</label>
    </div>
    <div class="text_field">
        <input type="text" class="form-control" name="profit" value=""></p>
        <label for="profit">Profit</label>
    </div>
    <div class="text_field">
        <input type="text" class="form-control" name="jangka_waktu" value=""></p>
        <label for="jangka_waktu">Jangka Waktu</label>
    </div>
    <input type="submit" value="Save" class="btn">
  </form>
</div>
</html>
<?= $this->endSection('content'); ?>