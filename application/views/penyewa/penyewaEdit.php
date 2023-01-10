<form method="post" action="<?= base_url('penyewa/edit') ?>">
    <input type="hidden" name="id" value="<?= $penyewa->id ?>">
    <label for="nama">Nama:</label><br>
    <input type="text" name="nama" id="nama" value="<?= $penyewa->nama ?>"><br>
    <label for="alamat">Alamat:</label><br>
    <input type="text" name="alamat" id="alamat" value="<?= $penyewa->alamat ?>"><br>
    <label for="no_telp">No. Telp:</label><br>
    <input type="text" name="no_telp" id="no_telp" value="<?= $penyewa->no_telepon ?>"><br><br>
    <input type="submit" value="Simpan">
</form>
