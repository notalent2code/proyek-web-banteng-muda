<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
        <h1 style="padding: 0.5rem;" align="center">DATA PINJAMAN KOPERASI SIMPAN PINJAM COOPERATIV</h1 align="center">
    <div class="row" style="    background: var(--dark-blue);">
        <div class="col">
        <a href="/pinjaman/add_new" class="action-btn" style="margin: 2.2rem 0 0 2.2rem; padding: 1.8rem" align="center"><h4>Tambah Data</h4></a>
            <table>
                <thead>
                    <tr>
                        <th>No Pinjaman</th>
                        <th>No Anggota</th>
                        <th>Besar Pinjaman</th>
                        <th>Lama Pinjaman (Bulan)</th>
                        <th>Tanggal Pencairan</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pinjaman as $row) : ?>
                        <tr>
                            <td data-title="No Pinjaman"><?= $row['no_pinjaman']; ?></td>
                            <td data-title="No Anggota"><?= $row['no_anggota']; ?></td>
                            <td data-title="Besar Pinjaman"><?= $row['besar_pinjaman']; ?></td>
                            <td data-title="Lama Pinjaman (Bulan)"><?= $row['lama_pinjaman']; ?></td>
                            <td data-title="Tanggal Pencairan"><?= date('d-m-Y', strtotime($row['tanggal_pencairan'])); ?></td>
                            <td data-title="Action"><a class="action-btn" href="/pinjaman/edit/<?= $row['no_pinjaman']; ?>">Edit</a></td>
                            <td data-title="Action"><a class="action-btn" href="/pinjaman/delete/<?= $row['no_pinjaman']; ?>" onclick="return confirm('Anda Yakin ?')">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<?= $this->endSection('content'); ?>