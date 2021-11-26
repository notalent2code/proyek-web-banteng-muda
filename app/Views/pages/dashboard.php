<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>

<section class="welcome-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h2>INI DASHBOARD</h2>
                <a href="/logout"><h1>Logout</h1></a>
        </div>
    </div>
</section>

<?= $this->endSection('content'); ?>