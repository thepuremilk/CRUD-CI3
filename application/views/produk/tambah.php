<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Tambah Produk</h1>
    <form method="post" action="<?php echo base_url('produk/simpan'); ?>">

        <label>Kode Barang</label>
        <input type="number" name="kodebarang" required><br>
        

        <label>Nama Barang</label>
        <input type="text" name="namabarang" required><br>

        <label>Jumlah</label>
        <input type="number" name="jumlah" required><br>

        <label>Harga</label>
        <input type="number" name="harga" required><br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>