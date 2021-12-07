<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>
<div class="form form-anggota" style="height: 550px;">
    <div class="heading-secondary">
        Tambah Data Pinjaman
    </div>
    <form action="/pinjaman/save" method="post">
        <div class="text_field">
            <input type="text" class="form-control" name="no_pinjaman" value=""></p>
            <label for="no_pinjaman">No Pinjaman</label>
        </div>
        <div class="text_field">
            <input type="text" class="form-control" name="no_anggota" value=""></p>
            <label for="no_anggota">No Anggota</label>
        </div>
        <div class="text_field">
            <input type="text" class="form-control" name="besar_pinjaman" value=""></p>
            <label for="besar_pinjaman">Besar Pinjaman</label>
        </div>
        <div class="text_field">
            <input type="text" class="form-control" name="lama_pinjaman" value=""></p>
            <label for="lama_pinjaman">Lama Pinjaman (Bulan)</label>
        </div>
        <div class="">
            <label for="tanggal_pencairan">Tanggal Pencairan</label>
            <input type="date" class="form-control" name="tanggal_pencairan" value=""></p>
        </div>
        <input type="submit" value="Save" class="btn">
    </form>
</div>

</html>
<?= $this->endSection('content'); ?>