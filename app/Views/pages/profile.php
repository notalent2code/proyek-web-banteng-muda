<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>

<section class="welcome-section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="foto_profil" id="foto_profil">
                    <?php if(is_null($user->foto_profil)) : ?>
                    <?php else :
                        $photoName = $user->foto_profil;    
                    ?>
                    <script>
                        document.getElementById('foto_profil').style.backgroundImage = "url('../foto_profil/<?= session()->get('email') ?> / <?= $photoName;  ?>')";
                    </script>
                    <?php endif ?>
                </div>

            </div>
        </div>
    </div>
</section>

<?= $this->endSection('content'); ?>