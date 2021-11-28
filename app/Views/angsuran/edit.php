<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>
<div class="form form-anggota" style="height: 500px;">
    <div class="heading-secondary">
        Edit Data Angsuran
    </div>
    <form action="/angsuran/update" method="post">
    <div class="text_field">
        <input type="text" class="form-control" name="cicilan" value="<?= $angsuran->cicilan; ?>"></p>
        <label for="cicilan">Cicilan</label>
    </div>
    <div class="text_field">
        <input type="text" class="form-control" name="angsuran_ke" value="<?= $angsuran->angsuran_ke; ?>"></p>
        <label for="angsuran_ke">Angsuran Ke-</label>
    </div>
    <div class="">
        <label for="tanggal_bayar">Tanggal Bayar</label>
        <input type="date" class="form-control" name="tanggal_bayar" value="<?= $angsuran->tanggal_bayar; ?>"></p>
    </div>
    <input type="hidden" name="no_angsuran" value="<?= $angsuran->no_angsuran; ?>">
    <input type="hidden" name="no_pinjaman" value="<?= $angsuran->no_pinjaman; ?>">
    
    <input type="submit" value="Update" class="btn">
    </form>
    </div>
<?= $this->endSection('content'); ?>