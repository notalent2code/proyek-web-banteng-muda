<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>
<div class="form form-anggota" style="height: 550px;">
    <div class="heading-secondary">
        Tambah Data Iuran
    </div>
    <form action="/iuran/save" method="post">
        <div class="text_field">
            <input type="text" class="form-control" name="no_iuran" value=""></p>
            <label for="no_iuran">No Iuran</label>
        </div>
        <div class="text_field">
            <input type="text" class="form-control" name="no_anggota" value=""></p>
            <label for="no_anggota">No Anggota</label>
        </div>
        <div class="text_field">
            <input type="text" class="form-control" name="iuran_pokok" value=""></p>
            <label for="iuran_pokok">Iuran Pokok</label>
        </div>
        <div class="text_field">
            <input type="text" class="form-control" name="iuran_wajib" value=""></p>
            <label for="iuran_wajib">Iuran Wajib</label>
        </div>
        <div class="">
            <label for="tanggal_bayar">Tanggal Bayar</label>
            <input type="date" class="form-control" name="tanggal_bayar" value=""></p>
        </div>
        <input type="submit" value="Save" class="btn">
    </form>
</div>

</html>
<?= $this->endSection('content'); ?>