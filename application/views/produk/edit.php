<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Barang</title>
</head>
<body>
    <h1>Edit Data Barang</h1>
    <table border="1">
    <form method="post" action="<?php echo base_url('produk/update'); ?>">
    <tr>
        <th><label>Kode Barang</label></th>
        <td><input type="number" name="kodebarang" value="<?php echo $produk['kodebarang']; ?>"></td>
    </tr>
    <tr>
        <th><label>Nama Barang</label></th>
        <td><input type="text" name="namabarang" value="<?php echo $produk['namabarang']; ?>" required></td>
    </tr>
        <th><label>Jumlah</label></th>
        <td><input type="number" name="jumlah" value="<?php echo $produk['jumlah']; ?>" required></td>
    <tr>
        <th><label>Harga</label></th>
        <td><input type="number" name="harga" value="<?php echo $produk['harga']; ?>" required></td>
    </tr>
    <tr>
        <th><input type="submit" value="Update"></th>
        <td><input type="submit" value="Batal"></td>
    </tr>
    </form>
    </table>
</body>
</html>