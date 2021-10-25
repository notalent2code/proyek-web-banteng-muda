<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>
<div class="form" id="form-signup">
    <div class="heading-secondary">
        Sign-up new account
    </div>
    <form method="post">
        <div class="text_field">
            <input type="text" name="nama" id="nama" required>
            <span></span>
            <label>Nama Lengkap</label>
        </div>
        <div class="text_field">
            <input type="email" name="email" id="email" required>
            <span></span>
            <label>Email</label>
        </div>
        <div class="text_field">
            <input type="text" name="nohp" id="nohp" required>
            <span></span>
            <label>Nomor HP</label>
        </div>
        <input type="submit" value="CREATE ACCOUNT" class="btn">
        <div class="login_link">
        Already a member ? <a href="/login">Log-in</a>
        </div>
    </form>
</div>

<?= $this->endSection('content'); ?>