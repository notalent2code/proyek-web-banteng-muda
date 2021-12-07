<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>
<div class="form form-anggota">
    <div class="heading-secondary">
        Tambah Data Simpanan
    </div>
  <form action="/simpanan/save" method="post">
    <?php if(session()->get('level') === '2') : ?>
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
            <label for="jangka_waktu">Jangka Waktu (Bulan)</label>
        </div>

    <?php else : ?>
        <input type="text" class="form-control" name="no_simpanan" id="no_simpanan" value="" hidden></p>
            <!-- <label for="no_simpanan">No Simpanan</label> -->
        <input type="text" class="form-control" name="no_anggota" value="<?= $anggota->no_anggota ?>" hidden></p>
        <div class="text_field">
            <input type="number" class="form-control" name="besar_simpanan" id="besar_simpanan" value="" on></p>
            <label for="besar_simpanan">Besar Simpanan</label>
        </div>
        <!-- <div class="text_field"> -->
            <input type="text" class="form-control" name="profit" id="profit" value="" hidden></p>
            <input type="date" class="form-control" name="tanggal_setor" id="tanggal_setor" value="<?php echo date('Y-m-d'); ?>" hidden></p>
            <!-- <label for="profit">Profit</label> -->
        <!-- </div> -->
        <div class="text_field">
            <input type="number" max="12" class="form-control" name="jangka_waktu" value="" maxlength="2" pattern="^[0-9]$"></p>
            <label for="jangka_waktu">Jangka Waktu (Bulan)</label>
        </div>
    <?php endif ?>
    <input type="submit" value="Save" class="btn" onclick="generateNoSimpanan(); hitungProfit()">
  </form>
</div>
</html>
<?= $this->endSection('content'); ?>