<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <?php
    function rupiah($angka)
    {
        $angka = (float) $angka;
        $hasil_rupiah = "Rp " . number_format($angka, 0, '.', '.');
        echo $hasil_rupiah;
    }
    ?>
    <?php if (session()->get('level') === '2') : ?>
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
                            <th>Status Angsuran</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($angsuran as $row) : ?>
                            <tr>
                                <td data-title="No Angsuran"><?= $row['no_angsuran']; ?></td>
                                <td data-title="No Pinjaman"><?= $row['no_pinjaman']; ?></td>
                                <td data-title="Cicilan"><?= rupiah($row['cicilan']); ?></td>
                                <td data-title="Angsuran Ke-"><?= $row['angsuran_ke']; ?></td>
                                <td data-title="Tanggal Bayar"><?= date('d-m-Y', strtotime($row['tanggal_bayar'])); ?></td>
                                <td data-title="Status Angsuran"><?= $row['status_angsuran'] ?></td>
                                <td data-title="Action"><a class="action-btn" href="/angsuran/edit/<?= $row['no_angsuran']; ?>">Edit</a></td>
                                <td data-title="Action"><a class="action-btn" href="/angsuran/delete/<?= $row['no_angsuran']; ?>" onclick="return confirm('Anda Yakin ?')">Delete</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else : ?>

                <h1 style="padding: 0.5rem;" align="center">DATA ANGSURAN</h1>
                <div class="row" style="    background: var(--dark-blue);">
                    <div class="col">

                        <table>
                            <thead>
                                <tr>
                                    <th>No Angsuran</th>
                                    <th>No Pinjaman</th>
                                    <th>Cicilan</th>
                                    <th>Angsuran Ke-</th>
                                    <th>Tanggal Bayar</th>
                                    <th>Status Angsuran</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($angsuran as $row) : ?>
                                    <tr>
                                        <td data-title="No Angsuran"><?= $row['no_angsuran']; ?></td>
                                        <td data-title="No Pinjaman"><?= $row['no_pinjaman']; ?></td>
                                        <td data-title="Cicilan"><?= rupiah($row['cicilan']); ?></td>
                                        <td data-title="Angsuran Ke-"><?= $row['angsuran_ke']; ?></td>
                                        <td data-title="Tanggal Bayar"><?= date('d-m-Y', strtotime($row['tanggal_bayar'])); ?></td>
                                        <td data-title="Status Angsuran"><?= $row['status_angsuran'] ?></td>
                                        <td><?php if ($row['status_angsuran'] === 'Belum Bayar') : ?>
                                                <form action="/angsuran/update" method="post">
                                                    <input type="text" name="no_angsuran" id="" value="<?= $row['no_angsuran'] ?>" hidden>
                                                    <input type="text" name="status_angsuran" id="" value="Sedang Diverifikasi" hidden>
                                                    <button type="submit" class="btn action-btn" style="margin: 0 0 0 3rem">Bayar</button>
                                                </form>
                                            <?php endif ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php endif ?>
            </div>



            <?= $this->endSection('content'); ?>