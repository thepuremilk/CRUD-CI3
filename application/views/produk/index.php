<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
</head>
<body>
    <h1>Daftar Produk</h1>
    <table border="1">
        <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($produk as $row)  {?>
            <tr>
                <td><?php echo $row['kodebarang']; ?></td>
                <td><?php echo $row['namabarang']; ?></td>
                <td><?php echo $row['jumlah']; ?></td>
                <td><?php echo $row['harga']; ?></td>
                <td>
                    <a href="<?php echo base_url('produk/edit/' . $row['kodebarang']); ?>">Edit</a>
                    <a href="<?php echo base_url('produk/hapus/' . $row['kodebarang']); ?>">Hapus</a>
                </td>
            </tr>
        <?php  }?>
    </table>
    <a href="<?php echo base_url('produk/tambah'); ?>">Tambah Produk</a>
</body>
</html>