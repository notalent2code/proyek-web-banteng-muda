<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>
    <div class="form">
        <div class="heading-secondary">
            Log-in to your account
        </div>
        <form method="post">
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
            <div class="pass">Forgot Password ?</div>
            <input type="submit" value="Login" class="btn">
            <div class="signup_link">
            Not a member ? <a href="/signup">Sign-up</a>
            </div>
        </form>
    </div>
<?= $this->endSection('content'); ?>