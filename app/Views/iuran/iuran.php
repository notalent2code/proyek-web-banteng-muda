<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
        <h1 style="padding: 0.5rem;" align="center">DATA IURAN KOPERASI SIMPAN PINJAM COOPERATIV</h1 align="center">
    <div class="row" style="    background: var(--dark-blue);">
        <div class="col">
        <a href="/iuran/add_new" class="action-btn" style="margin: 2.2rem 0 0 2.2rem; padding: 1.8rem" align="center"><h4>Tambah Data</h4></a>
            <table>
                <thead>
                    <tr>
                        <th>No Iuran</th>
                        <th>No Anggota</th>
                        <th>Iuran Pokok</th>
                        <th>Iuran Wajib</th>
                        <th>Tanggal Bayar</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($iuran as $row) : ?>
                        <tr>
                            <td data-title="No Iuran"><?= $row['no_iuran']; ?></td>
                            <td data-title="No Anggota"><?= $row['no_anggota']; ?></td>
                            <td data-title="Iuran Pokok"><?= $row['iuran_pokok']; ?></td>
                            <td data-title="Iuran Wajib"><?= $row['iuran_wajib']; ?></td>
                            <td data-title="Tanggal Bayar"><?= date('d-m-Y', strtotime($row['tanggal_bayar'])); ?></td>
                            <td data-title="Action"><a class="action-btn" href="/iuran/edit/<?= $row['no_iuran']; ?>">Edit</a></td>
                            <td data-title="Action"><a class="action-btn" href="/iuran/delete/<?= $row['no_iuran']; ?>" onclick="return confirm('Anda Yakin ?')">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<?= $this->endSection('content'); ?>