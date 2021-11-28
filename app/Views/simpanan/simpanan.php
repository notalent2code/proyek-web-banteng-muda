<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
        <h1 style="padding: 0.5rem;" align="center">DATA SIMPANAN KOPERASI SIMPAN PINJAM COOPERATIV</h1 align="center">
    <div class="row" style="    background: var(--dark-blue);">
        <div class="col">
        <a href="/simpanan/add_new" class="action-btn" style="margin: 2.2rem 0 0 2.2rem; padding: 1.8rem" align="center"><h4>Tambah Data</h4></a>
            <table>
                <thead>
                    <tr>
                        <th>No Simpanan</th>
                        <th>No Anggota</th>
                        <th>Besar Simpanan</th>
                        <th>Profit</th>
                        <th>Jangka Waktu (Bulan)</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($simpanan as $row) : ?>
                        <tr>
                            <td data-title="No Simpanan"><?= $row['no_simpanan']; ?></td>
                            <td data-title="No Anggota"><?= $row['no_anggota']; ?></td>
                            <td data-title="Besar Simpanan"><?= $row['besar_simpanan']; ?></td>
                            <td data-title="Profit"><?= $row['profit']; ?></td>
                            <td data-title="Jangka Waktu (Bulan)"><?= $row['jangka_waktu']; ?></td>
                            <td data-title="Action"><a class="action-btn" href="/simpanan/edit/<?= $row['no_simpanan']; ?>">Edit</a></td>
                            <td data-title="Action"><a class="action-btn" href="/simpanan/delete/<?= $row['no_simpanan']; ?>" onclick="return confirm('Anda Yakin ?')">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<?= $this->endSection('content'); ?>