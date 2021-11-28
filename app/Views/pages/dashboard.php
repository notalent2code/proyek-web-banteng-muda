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
                            <div class="heading-tertiary" align="center">
                                Database Koperasi Simpan Pinjam Cooperativ
                            </div>
                        <?php else : ?>
                            <?= session()->get('email'); echo " !"; ?>
                        <?php endif; ?>
                    </h1>
                        
                    <?php if(session()->get('level') === '2') : ?>
                        <div class="row nav-ul" style="text-align: center;">
                            <div class="col review-box ">
                                <div class="heading-tertiary review-content">
                                    <li><a href="/anggota">Data Anggota</a></li>
                                </div>
                            </div>
                            <div class="col review-box">
                                <div class="heading-tertiary review-content">
                                    <li><a href="/angsuran">Data Angsuran</a></li>
                                </div>
                            </div>
                            <div class="col review-box">
                                <div class="heading-tertiary review-content">
                                <li><a href="/iuran">Data Iuran</a></li>
                                </div>
                            </div>
                        </div>
                        <div class="row nav-ul" style="text-align: center;">
                            <div class="col review-box">
                                <div class="heading-tertiary review-content">
                                    <li><a href="/simpanan">Data Simpanan</a></li>
                                </div>
                            </div>
                            <div class="col review-box">
                                <div class="heading-tertiary review-content">
                                    <li><a href="/pinjaman">Data Pinjaman</a></li>
                                </div>
                            </div>
                            <div class="col review-box">
                                <div class="heading-tertiary review-content">
                                    <li><a href="/users">Data User</a></li>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
        </div>        
    </div>
</section>

<?= $this->endSection('content'); ?>