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
        <h1 style="padding: 0.5rem;" align="center">DATA SIMPANAN KOPERASI SIMPAN PINJAM COOPERATIV</h1 align="center">
        <div class="row" style="    background: var(--dark-blue);">
            <div class="col">
                <a href="/simpanan/add_new" class="action-btn" style="margin: 2.2rem 0 0 2.2rem; padding: 1.8rem" align="center">
                    <h4>Tambah Data</h4>
                </a>
                <table>
                    <thead>
                        <tr>
                            <th>No Simpanan</th>
                            <th>No Anggota</th>
                            <th>Besar Simpanan</th>
                            <th>Profit</th>
                            <th>Jangka Waktu (Bulan)</th>
                            <th>Status Simpanan</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($simpanan as $row) : ?>
                            <tr>
                                <td data-title="No Simpanan"><?= $row['no_simpanan']; ?></td>
                                <td data-title="No Anggota"><?= $row['no_anggota']; ?></td>
                                <td data-title="Besar Simpanan"><?= rupiah($row['besar_simpanan']); ?></td>
                                <td data-title="Profit"><?= rupiah($row['profit']); ?></td>
                                <td data-title="Jangka Waktu (Bulan)"><?= $row['jangka_waktu']; ?></td>
                                <td data-title="Status Simpanan"><?= ($row['status_simpanan']); ?></td>
                                <td data-title="Action"><a class="action-btn" href="/simpanan/edit/<?= $row['no_simpanan']; ?>">Edit</a></td>
                                <td data-title="Action"><a class="action-btn" href="/simpanan/delete/<?= $row['no_simpanan']; ?>" onclick="return confirm('Anda Yakin ?')">Delete</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php else : ?>

        <h1 style="padding: 0.5rem;" align="center">DATA SIMPANAN</h1>
        <div class="row" style="    background: var(--dark-blue);">
            <div class="col">
                <?php if ($simpanan->status_simpanan === 'Sudah Ditarik') : ?>
                    <a href="/simpanan/add_new" class="action-btn" style="margin: 2.2rem 0 0 2.2rem; padding: 1.8rem" align="center">
                        <h4>Tambah Simpanan</h4>
                    </a>
                <?php else : ?>
                    <form action="/simpanan/update" method="post">
                        <div class="text-field">
                            <input type="text" name="no_simpanan" id="" value="<?= $simpanan->no_simpanan ?>" hidden>
                        </div>
                        <input type="text" name="status_simpanan" id="" value='Sedang Diverifikasi' hidden>
                        <button type="submit" class="btn action-btn" style="margin: 2rem 0 0 2rem">Tarik Simpanan</button>
                    </form>
                <?php endif ?>
                <table>
                    <thead>
                        <tr>
                            <td>No Simpanan</td>
                            <td><?= $simpanan->no_simpanan; ?></td>
                        </tr>
                        <tr>
                            <td>Besar Simpanan</td>
                            <td><?= rupiah($simpanan->besar_simpanan); ?></td>
                        </tr>
                        <tr>
                            <td>Profit</td>
                            <td><?= rupiah($simpanan->profit); ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Setor</td>
                            <td><?= $simpanan->tanggal_setor; ?></td>
                        </tr>
                        <tr>
                            <td>Jangka Waktu (Bulan)</td>
                            <td><?= $simpanan->jangka_waktu; ?></td>
                        </tr>
                        <tr>
                            <td>Status Simpanan</td>
                            <td><?= $simpanan->status_simpanan; ?></td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

    <?php endif ?>
</div>

<?= $this->endSection('content'); ?>