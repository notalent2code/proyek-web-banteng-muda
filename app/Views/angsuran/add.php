<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>
<div class="form form-anggota" style="height: 550px;">
    <div class="heading-secondary">
        Tambah Data Angsuran
    </div>
    <form action="/angsuran/save" method="post">
        <div class="text_field">
            <input type="text" class="form-control" name="no_angsuran" value=""></p>
            <label for="no_angsuran">No Angsuran</label>
        </div>
        <div class="text_field">
            <input type="text" class="form-control" name="no_pinjaman" value=""></p>
            <label for="no_pinjaman">No Pinjaman</label>
        </div>
        <div class="text_field">
            <input type="text" class="form-control" name="cicilan" value=""></p>
            <label for="cicilan">Cicilan</label>
        </div>
        <div class="text_field">
            <input type="text" class="form-control" name="angsuran_ke" value=""></p>
            <label for="angsuran_ke">Angsuran Ke-</label>
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