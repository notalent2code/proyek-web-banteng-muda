<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>
<div class="form form-anggota" style="height: 550px;">
    <div class="heading-secondary">
        Tambah Data User
    </div>
    <form action="/user/save" method="post">
        <div class="text_field">
            <input type="text" class="form-control" name="email" value=""></p>
            <label for="email">Email</label>
        </div>
        <div class="text_field">
            <input type="password" class="form-control" name="password" value=""></p>
            <label for="password">Password</label>
        </div>
        <div class="text_field">
            <input type="text" class="form-control" name="level" value=""></p>
            <label for="level">Level</label>
        </div>
        <input type="submit" value="Save" class="btn">
    </form>
</div>

</html>
<?= $this->endSection('content'); ?>