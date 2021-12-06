<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
        <h1 style="padding: 0.5rem;" align="center">DATA ANGGOTA KOPERASI SIMPAN PINJAM</h1 align="center">
    <div class="row" style="    background: var(--dark-blue);">
        <div class="col">
        <a href="/anggota/add_new" class="action-btn" style="margin: 2.2rem 0 0 2.2rem; padding: 1.8rem" align="center"><h4>Tambah Data</h4></a>
            <table>
                <thead>
                    <tr>
                        <th>No Anggota</th>
                        <th>Nama</th>
                        <th>No KTP</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>Email</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($anggota as $row) : ?>
                        <tr>
                            <td data-title="No Anggota"><?= $row['no_anggota']; ?></td>
                            <td data-title="Nama"><?= $row['nama']; ?></td>
                            <td data-title="No KTP"><?= $row['no_ktp']; ?></td>
                            <td data-title="Jenis Kelamin"><?= $row['jenis_kelamin']; ?></td>
                            <td data-title="Tanggal Lahir"><?= date('d-m-Y', strtotime($row['tanggal_lahir'])); ?></td>
                            <td data-title="Alamat"><?= $row['alamat']; ?></td>
                            <td data-title="No HP"><?= $row['no_hp']; ?></td>
                            <td data-title="Email"><?= $row['email']; ?></td>
                            <td data-title="Action"><a class="action-btn" href="/anggota/edit/<?= $row['no_anggota']; ?>">Edit</a></td>
                            <td data-title="Action"><a class="action-btn" href="/anggota/delete/<?= $row['no_anggota']; ?>" onclick="return confirm('Anda Yakin ? Semua Data Terkait Anggota Ini Akan Terhapus')">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<?= $this->endSection('content'); ?>