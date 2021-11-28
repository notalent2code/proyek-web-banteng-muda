<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>
<div class="form form-anggota" style="height: 500px;">
    <div class="heading-secondary">
        Edit Data Simpanan
    </div>
    <form action="/simpanan/update" method="post">
    <div class="text_field">
        <input type="text" class="form-control" name="besar_simpanan" value="<?= $simpanan->besar_simpanan; ?>"></p>
        <label for="besar_simpanan">Besar Simpanan</label>
    </div>
    <div class="text_field">
        <input type="text" class="form-control" name="profit" value="<?= $simpanan->profit; ?>"></p>
        <label for="profit">Profit</label>
    </div>
    <div class="text_field">
        <input type="text" class="form-control" name="jangka_waktu" value="<?= $simpanan->jangka_waktu; ?>"></p>
        <label for="jangka_waktu">Jangka Waktu (Bulan)</label>
    </div>
    <input type="hidden" name="no_simpanan" value="<?= $simpanan->no_simpanan; ?>">
    <input type="hidden" name="no_anggota" value="<?= $simpanan->no_anggota; ?>">
    
    <input type="submit" value="Update" class="btn">
    </form>
    </div>
<?= $this->endSection('content'); ?>