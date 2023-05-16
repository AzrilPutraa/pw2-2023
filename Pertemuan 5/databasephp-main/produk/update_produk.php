<?php 
    // include database connection
    require_once '../dbkoneksi.php';
?>

<?php 
    // select all data from table "vendor"
    $sql = "SELECT * FROM produk";
    // execute the query
    $rs = $dbh->query($sql);
?>

<a class="btn btn-success" href="form_produk.php" role="button">Create Produk</a>

<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Harga Jual</th>
            <th>Stok</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            // initialize counter
            $id = 1;
            // loop through the result set
            foreach($rs as $row) {
        ?>
        <tr>
            <td><?=$id?></td>
            <td><?=$row['nomor']?></td>
            <td><?=$row['kode']?></td>
            <td><?=$row['nama']?></td>
            <td><?=$row['harga_jual']?></td>
            <td><?=$row['stok']?></td>
            <td><?=$row['min_stok']?></td>
            <td><?=$row['jenis_produk']?></td>
            <td>
                <!-- buttons to view, edit, and delete a product -->
                <a class="btn btn-primary" href="view_produk.php?id=<?=$row['id']?>">View</a>
                <a class="btn btn-primary" href="form_produk.php?idedit=<?=$row['id']?>">Edit</a>
                <a class="btn btn-primary" href="delete_produk.php?iddel=<?=$row['id']?>"onclick="if(!confirm('Anda Yakin Hapus Data produk <?=$row['nama']?>?')) {return false}" >Delete</a>
            </td>
        </tr>
        <?php

            // increment counter
            $id++;   
            }
            
        ?>
    </tbody>
</table>