<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>
<div class="form form-anggota" style="height: 500px;">
    <div class="heading-secondary">
        Edit Data Pinjaman
    </div>
    <form action="/pinjaman/update" method="post">
    <div class="text_field">
        <input type="text" class="form-control" name="besar_pinjaman" value="<?= $pinjaman->besar_pinjaman; ?>"></p>
        <label for="besar_pinjaman">Besar Pinjaman</label>
    </div>
    <div class="text_field">
        <input type="text" class="form-control" name="lama_pinjaman" value="<?= $pinjaman->lama_pinjaman; ?>"></p>
        <label for="lama_pinjaman">Lama Pinjaman (Bulan)</label>
    </div>
    <div class="">
        <label for="tanggal_pencairan">Tanggal Pencairan</label>
        <input type="date" class="form-control" name="tanggal_pencairan" value="<?= $pinjaman->tanggal_pencairan; ?>"></p>
    </div>
    <input type="hidden" name="no_pinjaman" value="<?= $pinjaman->no_pinjaman; ?>">
    <input type="hidden" name="no_anggota" value="<?= $pinjaman->no_anggota; ?>">
    
    <input type="submit" value="Update" class="btn">
    </form>
    </div>
<?= $this->endSection('content'); ?>