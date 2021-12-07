<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <h1 style="padding: 0.5rem;" align="center">DATA ANGSURAN KOPERASI SIMPAN PINJAM COOPERATIV</h1 align="center">
    <div class="row" style="    background: var(--dark-blue);">
        <div class="col">
            <a href="/angsuran/add_new" class="action-btn" style="margin: 2.2rem 0 0 2.2rem; padding: 1.8rem" align="center">
                <h4>Tambah Data</h4>
            </a>
            <table>
                <thead>
                    <tr>
                        <th>No Angsuran</th>
                        <th>No Pinjaman</th>
                        <th>Cicilan</th>
                        <th>Angsuran Ke-</th>
                        <th>Tanggal Bayar</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($angsuran as $row) : ?>
                        <tr>
                            <td data-title="No Angsuran"><?= $row['no_angsuran']; ?></td>
                            <td data-title="No Pinjaman"><?= $row['no_pinjaman']; ?></td>
                            <td data-title="Cicilan"><?= $row['cicilan']; ?></td>
                            <td data-title="Angsuran Ke-"><?= $row['angsuran_ke']; ?></td>
                            <td data-title="Tanggal Bayar"><?= date('d-m-Y', strtotime($row['tanggal_bayar'])); ?></td>
                            <td data-title="Action"><a class="action-btn" href="/angsuran/edit/<?= $row['no_angsuran']; ?>">Edit</a></td>
                            <td data-title="Action"><a class="action-btn" href="/angsuran/delete/<?= $row['no_angsuran']; ?>" onclick="return confirm('Anda Yakin ?')">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<?= $this->endSection('content'); ?>