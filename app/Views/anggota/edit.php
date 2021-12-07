<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>
<div class="form form-anggota">
    <div class="heading-secondary">
        Edit Data Anggota
    </div>
    <form action="/anggota/update" method="post">
        <div class="text_field">
            <input type="text" class="form-control" name="nama" value="<?= $anggota->nama; ?>"></p>
            <label for="nama">Nama</label>
        </div>
        <div class="text_field">
            <input type="text" class="form-control" name="no_ktp" value="<?= $anggota->no_ktp; ?>"></p>
            <label for="no_ktp">No KTP</label>
        </div>
        <div class="">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">Jenis Kelamin
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal_lahir" value="<?= $anggota->tanggal_lahir; ?>">
        </div>
        <div class="text_field">
            <textarea name="alamat" class="form-control" cols="15" rows="10"><?= $anggota->alamat; ?></textarea>
            <label for="alamat">Alamat</label>
        </div>
        <div class="text_field">
            <input type="text" class="form-control" name="no_hp" value="<?= $anggota->no_hp; ?>">
            <label for="no_hp">No HP</label>
        </div>
        <div class="text_field">
            <input type="text" class="form-control" name="email" value="<?= $anggota->email; ?>">
            <label for="email">Email</label>
        </div>
        <input type="hidden" name="no_anggota" value="<?= $anggota->no_anggota; ?>">
        <input type="submit" value="Update" class="btn">
    </form>
</div>
<?= $this->endSection('content'); ?>