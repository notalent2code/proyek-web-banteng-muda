<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>
<div class="form form-anggota" style="height: 500px;">
    <div class="heading-secondary">
        Edit Data User
    </div>
    <form action="/user/update" method="post">
        <div class="text_field">
            <input type="password" class="form-control" name="password" value="<?= $user->password; ?>"></p>
            <label for="password">Password</label>
        </div>
        <div class="text_field">
            <input type="text" class="form-control" name="level" value="<?= $user->level; ?>"></p>
            <label for="level">Level</label>
        </div>
        <input type="hidden" name="email" value="<?= $user->email; ?>">

        <input type="submit" value="Update" class="btn">
    </form>
</div>
<?= $this->endSection('content'); ?>