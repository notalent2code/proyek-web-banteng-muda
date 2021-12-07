<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>
<div class="form form-anggota" style="height: 550px;">
    <div class="heading-secondary">
        Tambah Data Pinjaman
    </div>
    <form action="/pinjaman/save" method="post">
        <?php if (session()->get('level') === '2') : ?>
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

        <?php else : ?>
            <input type="text" class="form-control" name="no_pinjaman" id="no_pinjaman" value="" hidden></p>
            <input type="text" class="form-control" name="no_anggota" value="<?= $anggota->no_anggota ?>" hidden></p>
            <div class="text_field">
                <input type="text" class="form-control" name="besar_pinjaman" value=""></p>
                <label for="besar_pinjaman">Besar Pinjaman</label>
            </div>
            <div class="text_field">
                <input type="number" max="24" class="form-control" name="lama_pinjaman" value="" maxlength="2" pattern="^[0-9]$"></p>
                <label for="lama_pinjaman">Lama Pinjaman (Bulan)</label>
            </div>
                <input type="date" hidden class="form-control" name="tanggal_pencairan" value="<?php echo date('Y-m-d'); ?>"></p>
        <?php endif ?>
        <input type="submit" value="Save" class="btn" onclick="generateNoPinjaman()">
    </form>
</div>

</html>
<?= $this->endSection('content'); ?>