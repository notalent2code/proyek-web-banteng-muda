<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>

<section class="welcome-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div>
                    <div class="heading-tertiary u-mb-small">
                        <?php if (session()->get('level') === '2') : ?>
                            Selamat datang, Admin ! <br>
                            <div class="heading-primary" align="center">
                                <h1>Database Koperasi Simpan Pinjam Cooperativ</h1>
                            </div>
                        <?php else : ?>
                            Selamat datang, <?= $anggota->nama; ?> !
                        <?php endif; ?>
                    </div>
                    <?php if (session()->get('level') === '2') : ?>
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
                                    <li><a href="/user">Data User</a></li>
                                </div>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="row nav-ul" style="text-align: center;">
                            <div class="col review-box">
                                <div class="heading-tertiary review-content">
                                    <li><a href="/iuran/add_new">Tambah Iuran</a></li>
                                </div>
                            </div>
                            <div class="col review-box">
                                <div class="heading-tertiary review-content">
                                    <li><a href="/pinjaman/add_new">Tambah Pinjaman</a></li>
                                </div>
                            </div>
                            <div class="col review-box">
                                <div class="heading-tertiary review-content">
                                    <li><a href="/simpanan/add_new">Tambah Simpanan</a></li>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
</section>

<?= $this->endSection('content'); ?>