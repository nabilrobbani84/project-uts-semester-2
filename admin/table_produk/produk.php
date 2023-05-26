<?php
require_once 'dbkoneksi.php';
?>
<?php
$sql = "SELECT * FROM produk";
$rs = $dbh->query($sql);
?>

<h1 class="mt-4 text-primary">Tables Produk</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active">Tables</li>
</ol>
<div class="card mb-4">
    <div class="card-body">
        DataTables is a third party plugin that is used to generate the demo table below. For more
        information about DataTables, please visit the
        <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
        .
    </div>
</div>
<div class="card mb-4">
    <div class="card-header">
        <!-- <i class="fas fa-table me-1"></i> -->
        <a class="btn btn-success" href="index.php?hal=table_produk/form_produk">Create Produk</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Harga Jual</th>
                    <th>Harga Beli</th>
                    <th>Stok</th>
                    <th>Min Stok</th>
                    <th>deskripsi</th>
                    <th>Kategori Produk id</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
        <?php
        $nomor  = 1;
        foreach ($rs as $row) {
        ?>
            <tr>
                <td><?= $nomor ?></td>
                <td><?= $row['kode'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['harga_jual'] ?></td>
                <td><?= $row['harga_beli'] ?></td>
                <td><?= $row['stok'] ?></td>
                <td><?= $row['min_stok'] ?></td>
                <td><?= $row['deskripsi'] ?></td>
                <td><?= $row['kategori_produk_id'] ?></td>
                <td>
                    <a class="btn btn-primary mb-3" href="index.php?hal=table_produk/view_produk&id=<?= $row['id'] ?>">View</a>
                    <a class="btn btn-primary mb-3" href="index.php?hal=table_produk/form_produk&idedit=<?= $row['id'] ?>">Edit</a>
                    <a class="btn btn-primary mb-3" href="table_produk/delete_produk.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['nama'] ?>?')) {return false}">Delete</a>
                </td>
            </tr>
        <?php
            $nomor++;
        }
        ?>
    </tbody>
        </table>
    </div>
</div>