<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>
<section class="welcome-section">
<div class="container-fluid">
    <div class="row" style="margin: 2rem; padding: 2rem;">
        <div class="col-md-4" id="about">
            <div class="heading-secondary" style="color: white">
                Hubungi kami
            </div>
            <p style="padding-left: 2.5rem; color: white">
                Kami selalu terbuka terhadap semua pertanyaan anda
            </p>
            <div class="row">
                <div class="col">
                    <div class="heading-tertiary" style="color: white">
                        <img src="/img/icon-address.svg" alt="" style="padding: 1rem;">
                        <span class="p" style="position: relative; top: -1.5rem; padding: 2rem">
                            Alamat <span> : </span>
                            Jl. Raya Bandung - Sumedang KM. 21
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="heading-tertiary" style="color: white">
                        <img src="/img/icon-phone.svg" alt="" style="padding: 1rem;">
                        <span class="p" style="position: relative; top: -1.5rem; padding: 2rem">
                            Telepon <span> : </span>
                            150227
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="heading-tertiary" style="color: white">
                        <img src="/img/icon-email.svg" alt="" style="padding: 1rem;">
                        <span class="p" style="position: relative; top: -1.5rem; padding: 2rem">
                            Email <span> : </span>
                            cs@cooperative.id
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <form method="post">
                <div class="row" style="margin: 1rem; padding: 1rem">
                    <div class="col">
                        <div class="text_field">
                            <input type="text" name="nama" id="nama" required>
                            <label>Nama Lengkap</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text_field">
                            <input type="email" name="email" id="email" required>
                            <label>Email</label>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin: 1rem; margin-top: -5rem; padding: 1rem">
                    <div class="col">
                        <div class="text_field">
                            <input type="text" name="subject" id="subject" required>
                            <label>Subject</label>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin: 1rem; margin-top: -5rem; padding: 1rem">
                    <div class="col">
                        <div class="text_field">
                            <textarea name="message" id="message" cols="30" rows="10"></textarea>
                            <label>Message</label>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Send Message" class="btn" style="margin-left: 2.2rem; padding: 1rem; width: 30%">
            </form>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection('content'); ?>