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
        <h1 style="padding: 0.5rem;" align="center">DATA PINJAMAN KOPERASI SIMPAN PINJAM COOPERATIV</h1 align="center">
        <div class="row" style="    background: var(--dark-blue);">
            <div class="col">

                <a href="/pinjaman/add_new" class="action-btn" style="margin: 2.2rem 0 0 2.2rem; padding: 1.8rem" align="center">
                    <h4>Tambah Data</h4>
                </a>
                <table>
                    <thead>
                        <tr>
                            <th>No Pinjaman</th>
                            <th>No Anggota</th>
                            <th>Besar Pinjaman</th>
                            <th>Lama Pinjaman (Bulan)</th>
                            <th>Tanggal Pencairan</th>
                            <th>Status Pinjaman</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pinjaman as $row) : ?>
                            <tr>
                                <td data-title="No Pinjaman"><?= $row['no_pinjaman']; ?></td>
                                <td data-title="No Anggota"><?= $row['no_anggota']; ?></td>
                                <td data-title="Besar Pinjaman"><?= rupiah($row['besar_pinjaman']); ?></td>
                                <td data-title="Lama Pinjaman (Bulan)"><?= $row['lama_pinjaman']; ?></td>
                                <td data-title="Tanggal Pencairan"><?= date('d-m-Y', strtotime($row['tanggal_pencairan'])); ?></td>
                                <td data-title="Status Pinjaman"><?= $row['status_pinjaman']; ?></td>
                                <td data-title="Action"><a class="action-btn" href="/pinjaman/edit/<?= $row['no_pinjaman']; ?>">Edit</a></td>
                                <td data-title="Action"><a class="action-btn" href="/pinjaman/delete/<?= $row['no_pinjaman']; ?>" onclick="return confirm('Anda Yakin ?')">Delete</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else : ?>

                <h1 style="padding: 0.5rem;" align="center">DATA PINJAMAN</h1>
                <div class="row" style="    background: var(--dark-blue);">
                    <div class="col">
                        <?php if ($pinjaman->status_pinjaman === 'Lunas') : ?>
                            <a href="/pinjaman/add_new" class="action-btn" style="margin: 2.2rem 0 0 2.2rem; padding: 1.8rem" align="center">
                                <h4>Tambah Pinjaman</h4>
                            </a>
                        <?php elseif($pinjaman->status_pinjaman === 'Sedang Diverifikasi') : ?>
                            <div class="heading-tertiary" style="color: white;">
                                Mohon tunggu informasi selanjutnya, Pengajuan pinjaman sedang diverifikasi
                            </div>
                        <?php elseif($pinjaman->status_pinjaman === 'Diterima') : ?>
                                <a href="/angsuran" class="btn action-btn" style="margin: 2rem">Lihat Angsuran</a>
                        <?php endif ?>
                        <table>
                            <thead>
                                <tr>
                                    <td>No Pinjaman</td>
                                    <td><?= $pinjaman->no_pinjaman; ?></td>
                                </tr>
                                <tr>
                                    <td>Besar Pinjaman</td>
                                    <td><?= rupiah($pinjaman->besar_pinjaman); ?></td>
                                </tr>
                                <tr>
                                    <td>Lama Pinjaman (Bulan) </td>
                                    <td><?= $pinjaman->lama_pinjaman ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Pencairan</td>
                                    <td><?= date('d-m-Y', strtotime($pinjaman->tanggal_pencairan)); ?></td>
                                </tr>
                                <tr>
                                    <td>Status Pinjaman</td>
                                    <td><?= $pinjaman->status_pinjaman; ?></td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            <?php endif ?>
            </div>
        </div>

</div>

<?= $this->endSection('content'); ?>