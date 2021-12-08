<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <?php if (session()->get('level') === '2') : ?>
        <h1 style="padding: 0.5rem;" align="center">DATA IURAN KOPERASI SIMPAN PINJAM COOPERATIV</h1 align="center">
        <div class="row" style="    background: var(--dark-blue);">
            <div class="col">
                <?php
                function rupiah($angka)
                {
                    $angka = (float) $angka;
                    $hasil_rupiah = "Rp " . number_format($angka, 0, '.', '.');
                    echo $hasil_rupiah;
                }
                ?>
                <a href="/iuran/add_new" class="action-btn" style="margin: 2.2rem 0 0 2.2rem; padding: 1.8rem" align="center">
                    <h4>Tambah Data</h4>
                </a>
                <table>
                    <thead>
                        <tr>
                            <th>No Iuran</th>
                            <th>No Anggota</th>
                            <th>Iuran Pokok</th>
                            <th>Iuran Wajib</th>
                            <th>Tanggal Bayar</th>
                            <th>Status Iuran</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($iuran as $row) : ?>
                            <tr>
                                <td data-title="No Iuran"><?= $row['no_iuran']; ?></td>
                                <td data-title="No Anggota"><?= $row['no_anggota']; ?></td>
                                <td data-title="Iuran Pokok"><?= rupiah($row['iuran_pokok']); ?></td>
                                <td data-title="Iuran Wajib"><?= rupiah($row['iuran_wajib']); ?></td>
                                <td data-title="Tanggal Bayar"><?= date('d-m-Y', strtotime($row['tanggal_bayar'])); ?></td>
                                <td data-title="Status Iuran"><?= $row['status_iuran']; ?></td>
                                <td data-title="Action"><a class="action-btn" href="/iuran/edit/<?= $row['no_iuran']; ?>">Edit</a></td>
                                <td data-title="Action"><a class="action-btn" href="/iuran/delete/<?= $row['no_iuran']; ?>" onclick="return confirm('Anda Yakin ?')">Delete</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    <?php else : ?>
        <h1 style="padding: 0.5rem;" align="center">DATA IURAN KOPERASI SIMPAN PINJAM COOPERATIV</h1 align="center">
        <div class="row" style="    background: var(--dark-blue);">
            <div class="col">
                <?php
                function rupiah($angka)
                {
                    $angka = (float) $angka;
                    $hasil_rupiah = "Rp " . number_format($angka, 0, '.', '.');
                    echo $hasil_rupiah;
                }
                ?>
                <table>
                    <thead>
                        <tr>
                            <th>No Iuran</th>
                            <th>No Anggota</th>
                            <th>Iuran Pokok</th>
                            <th>Iuran Wajib</th>
                            <th>Tanggal Bayar</th>
                            <th>Status Iuran</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($iuran as $row) : ?>
                            <tr>
                                <td data-title="No Iuran"><?= $row['no_iuran']; ?></td>
                                <td data-title="No Anggota"><?= $row['no_anggota']; ?></td>
                                <td data-title="Iuran Pokok"><?= rupiah($row['iuran_pokok']); ?></td>
                                <td data-title="Iuran Wajib"><?= rupiah($row['iuran_wajib']); ?></td>
                                <td data-title="Tanggal Bayar"><?= date('d-m-Y', strtotime($row['tanggal_bayar'])); ?></td>
                                <td><?= $row['status_iuran']; ?></td>
                                <td><?php if ($row['status_iuran'] === 'Belum Bayar') : ?>
                                        <form action="/iuran/update" method="post">
                                            <input type="text" name="no_iuran" id="" value="<?= $row['no_iuran'] ?>" hidden>
                                            <input type="text" name="status_iuran" id="" value="Sedang Diverifikasi" hidden>
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