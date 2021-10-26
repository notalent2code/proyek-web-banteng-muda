<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>
<section class="welcome-section">
    <div class="container" style="margin: 5rem">
        <div class="row">
            <div class="col">
                <div class="heading-secondary">
                    Bergabung bersama kami dan nikmati pelayanan yang disediakan
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col review-box">
                <div class="heading-tertiary review-content">
                    Simpanan Berjangka
                </div>
                <p style="padding: 0 2.2rem 1rem 2.2rem;">
                    Simpanan yang aman dan menguntungkan bagi anggota. Kami menawarkan jasa simpanan sebesar 10% per tahun.
                </p>
            </div>
            <div class="col review-box">
                <div class="heading-tertiary review-content">
                    Pinjaman
                </div>
                <p style="padding: 0 2.2rem 1rem 2.2rem;">
                    Pinjaman khusus anggota Cooperativ, dengan proses pengajuan online, lalu pilih jumlah dan jangka waktu pinjaman sesuai dengan kebutuhan.
                </p>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection('content'); ?>