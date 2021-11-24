<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>
<div class="form" id="form-signup">
    <div class="heading-secondary">
        Sign-up new account
    </div>
    <form action="signup" method="post">
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
                <input type="password" name="password" id="password" required>
                <span></span>
                <label>Password</label>
            </div>
        <div class="text_field">
            <input type="text" name="no_hp" id="no_hp" required>
            <span></span>
            <label>Nomor HP</label>
        </div>
        <input type="submit" value="Create Account" class="btn">
        <div class="login_link">
        Already a member ? <a href="pages/login">Log-in</a>
        </div>
    </form>
</div>

<?= $this->endSection('content'); ?>