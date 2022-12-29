<form method="post" action="<?php echo site_url('motor/add') ?>">
    <label for="nama">Nama:</label><br>
    <input type="text" name="nama" id="nama"><br>
    <label for="tipe">Tipe:</label><br>
    <input type="text" name="tipe" id="tipe"><br>
    <label for="harga_sewa_per_hari">Harga Sewa Per Hari:</label><br>
    <input type="number" name="harga_sewa_per_hari" id="harga_sewa_per_hari"><br>
    <label for="kondisi">Kondisi:</label><br>
    <input type="text" name="kondisi" id="kondisi"><br><br>
    <input type="submit" value="Simpan">
</form>
