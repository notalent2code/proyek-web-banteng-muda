<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>
<div class="form form-anggota" style="height: 500px;">
    <div class="heading-secondary">
        Edit Data User
    </div>
    <form action="/user/update" method="post">
        <select name="level" id="">
            <option value="1">Level 1 (User)</option>
            <option value="2">Level 2 (Admin)</option>
        </select>
  
        <input type="hidden" name="email" value="<?= $user->email; ?>">

        <input type="submit" value="Update" class="btn">
    </form>
</div>
<?= $this->endSection('content'); ?>