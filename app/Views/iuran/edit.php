<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>
<div class="form form-anggota" style="height: 500px;">
    <div class="heading-secondary">
        Edit Data Iuran
    </div>
    <form action="/iuran/update" method="post">
        <div class="text_field">
            <input type="text" class="form-control" name="iuran_pokok" value="<?= $iuran->iuran_pokok; ?>"></p>
            <label for="iuran_pokok">Iuran Pokok</label>
        </div>
        <div class="text_field">
            <input type="text" class="form-control" name="iuran_wajib" value="<?= $iuran->iuran_wajib; ?>"></p>
            <label for="iuran_wajib">Iuran Wajib</label>
        </div>
        <div class="">
            <label for="tanggal_bayar">Tanggal Bayar</label>
            <input type="date" class="form-control" name="tanggal_bayar" value="<?= $iuran->tanggal_bayar; ?>"></p>
        </div>
        <input type="hidden" name="no_iuran" value="<?= $iuran->no_iuran; ?>">
        <input type="hidden" name="no_anggota" value="<?= $iuran->no_anggota; ?>">

        <input type="submit" value="Update" class="btn">
    </form>
</div>
<?= $this->endSection('content'); ?>