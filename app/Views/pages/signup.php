<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>
<div class="form" id="form-signup">
    <div class="heading-secondary">
        Sign-up new account
    </div>
    <form action="" method="post">
        <div class="text_field">
            <input type="email" name="email" id="email" required value="<?= set_value('email') ?>">
            <label>Email</label>
        </div>
        <div class="text_field">
            <input type="password" name="password" id="password" required>
            <span></span>
            <label>Password</label>
        </div>
        <div class="text_field">
            <input type="password" name="password_confirm" id="password_confirm" required>
            <span></span>
            <label>Confirm Password</label>
        </div>
        <div class="col-12 col-sm-6">
            <input type="hidden" name="level" id="level" value="1">
        </div>
        <?php if(isset($validation)) : ?>
                <div class="col-12">
                  <div class="alert alert-danger" role="alert">
                    <?= $validation->listErrors() ?>
                  </div>
                </div>
        <?php endif; ?>
        <!-- <input type="submit" value=""> -->
        <!-- <button type="submit" class="btn"></button> -->
        <input type="submit" value="Create Account" class="btn">
        <div class="login_link">
            Already a member ? <a href="/login">Log-in</a>
        </div>
    </form>
</div>

<?= $this->endSection('content'); ?>