<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>
<section class="welcome-section">
    <div class="container welcome u-pd-small">
        <div class="welcome-text">
            <h1 class="u-mb-small u-pd-small">
                Sekilas tentang Cooperativ
            </h1>
            <p class="u-mb-small u-pd-small" style="padding: 0 0 2.2rem 2.7rem">
                Cooperativ merupakan website Koperasi Simpan Pinjam yang menawarkan pelayanan berupa simpanan dan pinjaman dengan <br> berbagai kelebihan untuk seseorang yang telah terdaftar secara resmi menjadi anggota koperasi.
            </p>
        </div>
        <div class="welcome-image">
            <img src="/img/img-about1.svg" alt="">
        </div>
    </div>
</section>
<section class="about-section" id="about-section">
    <div class="container about u-pd-small">
        <div class="about-text" style="width: 100%;">
            <h2 class="heading-secondary" style="margin-bottom: -2.5rem" align="center">
                Tujuan
            </h2>
            <div class="row" style="margin: 2rem; padding: 2rem;">
                <div class="col">
                    <p>
                        Meningkatkan pendapatan sekaligus kesejahteraan anggota melalui penyaluran dana kredit
                    </p>
                </div>
                <div class="col">
                    <p>
                        Meningkatkan stimulus agar timbul keinginan untuk menabung atau meminjam di koperasi
                    </p>
                </div>
                <div class="col">
                    <p>
                        Menyediakan lingkungan yang suportif untuk anggotanya
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="review-section u-pd-small" align="center">
    <div class="container u-pd-small">
        <div class="about-text" style="width: 100%">
            <h2 class="heading-secondary" style="margin-bottom: -2.5rem" align="center">
                Meet our Team
            </h2>
        </div>

        <div class="review u-pd-small">
            <div class="review-box img-author">
                <img src="/img/img-rihlan.png" alt="" class="u-mb-small">
                <div class="review-content">
                    <p class="review-author u-mb-small">
                        Rihlan Lumenda Suherman
                    </p>
                    <h4 class="review-heading u-mb-small">
                        140810200013
                    </h4>
                </div>
            </div>

            <div class="review-box img-author">
                <img src="/img/img-raihan.jpg" alt="" class="u-mb-small">
                <div class="review-content">
                    <p class="review-author u-mb-small">
                        Raihan Fadhlal Aziz
                    </p>
                    <h4 class="review-heading u-mb-small">
                        140810200025
                    </h4>
                </div>
            </div>

            <div class="review-box img-author">
                <img src="/img/img-rifqy.jpg" alt="" class="u-mb-small">
                <div class="review-content">
                    <p class="review-author u-mb-small">
                        Rifqy Kurnia Sudarman
                    </p>
                    <h4 class="review-heading u-mb-small">
                        140810200039
                    </h4>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection('content'); ?>