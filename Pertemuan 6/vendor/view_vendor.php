<?php 
require_once '../dbkoneksi.php';
?>

<?php
    // Mendapatkan nilai id dari parameter GET
    $_id = $_GET['id'];

    // Membuat query SQL untuk mengambil data vendor dengan id tertentu
    $sql = "SELECT * FROM vendor WHERE id=?";
    $st = $dbh->prepare($sql);

    // Menjalankan query dengan parameter id yang telah didapatkan sebelumnya
    $st->execute([$_id]);

    // Mengambil hasil query dan menyimpannya ke dalam variabel $row
    $row = $st->fetch();
?>

<!-- Menampilkan data vendor dalam bentuk tabel -->
<table class="table table-striped">
    <tbody>
        <tr>
            <td>ID</td>
            <td><?=$row['id']?></td>
        </tr>
        <tr>
            <td>Nomor</td>
            <td><?=$row['nomor']?></td>
        </tr>
        <tr>
            <td>Nama vendor</td>
            <td><?=$row['nama']?></td>
        </tr>
        <tr>
            <td>Kota</td>
            <td><?=$row['harga_jual']?></td>
        </tr>
        <tr>
            <td>Kontak</td>
            <td><?=$row['harga_beli']?></td>
        </tr>
        
            <td>Jenis vendor</td>
            <td><?=$row['jenis_vendor_id']?></td>
        </tr>
    </tbody>
</table>
