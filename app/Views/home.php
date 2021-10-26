<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>
    <section class="welcome-section">
        <div class="container-fluid welcome u-pd-small">
            <div class="welcome-text">
                <h1 class="u-mb-small u-pd-small">
                    Koperasi Simpan Pinjam <br> Berbasis Online bagi Milenial
                </h1>
                <p class="u-mb-small u-pd-small"  style="padding: 0 0 2.2rem 2.7rem">
                    Tingkatkan kesejahteraan, bergabunglah bersama kami. <br>
                    Cooperativ menyediakan layanan yang unggul dan mudah diakses, kapanpun dan dimanapun.
                </p>
                <a href="/signup" class="btn" style="margin-left: 2.2rem">Daftar</a>
            </div>
            <div class="welcome-image">
                <img src="/img/img-mockups.svg" alt="">
            </div>
        </div>
    </section>

    <section class="about-section">
        <div class="container-fluid about u-pd-small">
            <div class="about-text">
                <h1 class="u-mb-small u-pd-small" style="margin-bottom: -2.5rem">
                    Mengapa Cooperativ ?
                </h1>
                <p class="u-pd-small">
                Kami menyediakan berbagai layanan yang memberikan keuntungan bagi anggota koperasi
                dengan menjunjung tinggi asas kekeluargaan. Kontrol finansialmu dengan menyimpan uang
                atau pinjam uang untuk modal usaha.
                </p>
            </div>

            <div class="row about-item u-pd-small">
                <div class="col about-item-box">
                    <img src="/img/icon-online.svg" alt="" class="u-mb-small">
                    <h3 class="heading-tertiary u-mb-small" style="padding: 0;">
                        Simpanan yang Menguntungkan
                    </h3>
                    <p>Kami menawarkan jasa simpanan 10% per tahun, yang dibayarkan setiap bulan.</p>
                </div>

                <div class="col about-item-box">
                    <img src="/img/icon-budgeting.svg" alt="" class="u-mb-small">
                    <h3 class="heading-tertiary u-mb-small" style="padding: 0;">
                        Pinjaman untuk Anggota
                    </h3>
                    <p>Pinjaman yang mudah dan terpercaya hanya untuk anggota koperasi.</p>
                </div>

                <div class="col about-item-box">
                    <img src="/img/icon-onboarding.svg" alt="" class="u-mb-small">
                    <h3 class="heading-tertiary u-mb-small" style="padding: 0;">
                        Komunitas & Manfaat Ekstra
                    </h3>
                    <p>Lingungan yang suportif untuk mengembangkan bisnis anda.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="review-section u-pd-small">
        <div class="container-fluid u-pd-small">
            <div class="about-text">
                <h1 class="u-mb-small u-pd-small" style="margin-bottom: -2.5rem">
                Tunggu apa lagi ?
                </h1>
                <p class="u-pd-small">
                    Bergabung bersama kami dan bersiaplah untuk berkembang <br> bersama komunitas yang suportif.
                    
                </p>
            </div>

            <div class="review u-pd-small">
                <div class="review-box">
                    <img src="/img/img-person1.jfif" alt="" class="u-mb-small">
                    <div class="review-content">
                        <p class="review-author u-mb-small">
                        Anto
                        </p>
                        <h4 class="review-heading u-mb-small">
                            Alur pinjaman mudah
                        </h4>
                        <p class="review-excerpt">
                            "Sangat mudah untuk mengajukan pinjaman dan tidak banyak syarat yang bertele-tele"
                        </p>
                    </div>
                </div>

                <div class="review-box">
                    <img src="/img/img-person2.jfif" alt="" class="u-mb-small">
                    <div class="review-content">
                        <p class="review-author u-mb-small">
                        Budi
                        </p>
                        <h4 class="review-heading u-mb-small">
                            Profit simpanan menjanjikan
                        </h4>
                        <p class="review-excerpt">
                            "Uang yang saya simpan di Cooperativ menghasilkan profit yang cukup banyak bagi saya"
                        </p>
                    </div>
                </div>

                <div class="review-box">
                    <img src="/img/img-person3.jfif" alt="" class="u-mb-small">
                    <div class="review-content">
                        <p class="review-author u-mb-small">
                        Tono
                        </p>
                        <h4 class="review-heading u-mb-small">
                            Komunitas yang suportif
                        </h4>
                        <p class="review-excerpt">
                            "Saya yang seorang pemula di bidang bisnis kuliner selalu diarahkan oleh teman-teman yang sudah berpengalaman"
                        </p>
                    </div>
                </div>

                <div class="review-box">
                    <img src="/img/img-person4.jfif" alt="" class="u-mb-small">
                    <div class="review-content">
                        <p class="review-author u-mb-small">
                        Wawan
                        </p>
                        <h4 class="review-heading u-mb-small">
                            Kemudahan mendaftar
                        </h4>
                        <p class="review-excerpt">
                            "Cukup dengan device dan internet, dapat langsung menikmati layanan yang disediakan oleh Cooperativ"
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection('content'); ?>