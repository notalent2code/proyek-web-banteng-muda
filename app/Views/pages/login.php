<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>
<div class="form">
  <div class="heading-secondary">
    Log-in to your account
  </div>
  <form action="" method="post">
    <div class="text_field">
      <input type="email" name="email" id="email" value="<?= set_value('email') ?>" required>
      <span></span>
      <label>Email</label>
    </div>
    <div class="text_field">
      <input type="password" name="password" id="password" value="" required>
      <span></span>
      <label>Password</label>
    </div>
    <div class="col-12 col-sm-6">
      <input type="hidden" name="level" id="level" value="1">
    </div>
    <?php if (isset($validation)) : ?>
      <div class="col-12">
        <div class="alert alert-danger" role="alert">
          <?= $validation->listErrors() ?>
        </div>
      </div>
    <?php endif; ?>
    <div class="row" style="margin-bottom: 2rem;">
      <div class="col">
        Remember me ?
        <span>
          <input type="checkbox" name="remember" id="remember" <?php if (isset($_COOKIE["user_login"])) { ?> checked <?php } ?>>
        </span>
      </div>
    </div>
    <!-- <div class="pass">Forgot Password ?</div> -->
    <input type="submit" value="Login" class="btn">
    <div class="signup_link">
      Not a member ? <a href="/signup">Sign-up</a>
    </div>
  </form>
</div>
<?= $this->endSection('content'); ?>