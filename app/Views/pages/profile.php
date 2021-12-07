<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>

<section class="welcome-section">
    <div class="container">
        <div class="row">
            <div class="col" align="center">
                <div class="" align="center" style="width:200px; height:200px">
                    <!-- <img src="/img/img-person2.jfif" alt="" class="u-mb-small" > -->
                    <?php if($user->foto_profil === '') : ?>   
                        <img src="/img/no-foto.png" alt="" class="foto_profil">                
                    <?php else : ?>
                        <img src="/foto_profil/<?= $user->email ?>/<?= $user->foto_profil ?>" alt="" class="foto_profil">                                        
                    <?php endif ?>
                </div>
                <?php if (session()->get('error')) : ?>
                    <script>alert("<?= session()->get('error') ?>")</script>
                <?php endif; ?>
                <form action="/Dashboard/fotoProfil" method="post" enctype="multipart/form-data">
                    <input type="file" name="foto_profil" style="margin: 2rem"> <br>
                    <input type="submit" value="Upload Foto Profil" style="margin: 2rem; width: 30%">
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a class="action-btn" style="padding: 2rem; margin: 2rem" href="/anggota/edit/<?= $anggota->no_anggota ?>"><h3>Edit Profil</h3></a>
                <table>
                    <thead>
                        <tr>
                            <td>No Anggota</td>
                            <td><?= $anggota->no_anggota; ?></td>
                        </tr>
                        <tr>
                        <td>Nama Lengkap</td>
                            <td><?= $anggota->nama; ?></td>
                        </tr>
                        <tr>
                        <td>No KTP</td>
                            <td><?= $anggota->no_ktp; ?></td>
                        </tr>
                        <tr>
                        <td>Jenis Kelamin</td>
                            <td><?= $anggota->jenis_kelamin; ?></td>
                        </tr>
                        <tr>
                        <td>Tanggal Lahir</td>
                            <td><?= $anggota->tanggal_lahir; ?></td>
                        </tr>
                        <tr>
                        <td>Alamat</td>
                            <td><?= $anggota->alamat; ?></td>
                        </tr>
                        <tr>
                        <td>No HP</td>
                            <td><?= $anggota->no_hp; ?></td>

                        </tr>
                        <tr>
                        <td>Email</td>
                            <td><?= $anggota->email; ?></td>
                        </tr>                        
                    </thead>
                </table>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection('content'); ?>