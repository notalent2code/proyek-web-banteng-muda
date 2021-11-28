<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>

<section class="welcome-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div>
                    <h1 class="u-mb-small">
                        Selamat datang, 
                        <?php if(session()->get('level') === '2') : ?>
                            Admin ! <br>

                        <?php else : ?>
                            <?= session()->get('email'); echo " !"; ?>
                        <?php endif; ?>
                    </h1>
                        
                    <?php if(session()->get('level') === '2') : ?>
                        <hr>
                        <ul class="nav-ul u-pd-small">
                            <li><a href="/anggota">Data Anggota</a></li>
                            <li><a href="/angsuran">Data Angsuran</a></li>
                            <li><a href="/iuran">Data Iuran</a></li>
                            <li><a href="/simpanan">Data Simpanan</a></li>
                            <li><a href="/pinjaman">Data Pinjaman</a></li>
                            <li><a href="/users">Data User</a></li>
                        </ul>
                        <?php endif; ?>
                </div>

        </div>
    </div>
</section>

<?= $this->endSection('content'); ?>