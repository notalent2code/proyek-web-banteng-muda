<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
        <h1 style="padding: 0.5rem;" align="center">DATA USER KOPERASI SIMPAN PINJAM COOPERATIV</h1 align="center">
    <div class="row" style="    background: var(--dark-blue);">
        <div class="col">
        <a href="/user/add_new" class="action-btn" style="margin: 2.2rem 0 0 2.2rem; padding: 1.8rem" align="center"><h4>Tambah Data</h4></a>
            <table>
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Level</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($user as $row) : ?>
                        <tr>
                            <td data-title="Email"><?= $row['email']; ?></td>
                            <td data-title="Password"><?= $row['password']; ?></td>
                            <td data-title="Level"><?= $row['level']; ?></td>
                            <td data-title="Action"><a class="action-btn" href="/user/edit/<?= $row['email']; ?>">Edit</a></td>
                            <td data-title="Action"><a class="action-btn" href="/user/delete/<?= $row['email']; ?>" onclick="return confirm('Anda Yakin ?')">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<?= $this->endSection('content'); ?>