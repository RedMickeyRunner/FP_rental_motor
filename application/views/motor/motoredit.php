<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<div class="container mt-5">
    <h2>Edit Motor</h2>
    <form method="post" action="<?php echo site_url('motor/edit') ?>">
        <div class="form-group">
            <input type="hidden" name="id" value="<?= $motors->id ?>">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" name="nama" id="nama" value="<?= $motors->nama ?>">
        </div>
        <div class="form-group">
            <label for="tipe">Tipe:</label>
            <input type="text" class="form-control" name="tipe" id="tipe" value="<?= $motors->tipe ?>">
        </div>
        <div class="form-group">
            <label for="harga_sewa_per_hari">Harga Sewa Per Hari:</label>
            <input type="number" class="form-control" name="harga_sewa_per_hari" id="harga_sewa_per_hari" value="<?= $motors->harga_sewa_per_hari ?>">
        </div>
        <div class="form-group">
            <label for="kondisi">Kondisi:</label>
            <input type="text" class="form-control" name="kondisi" id="kondisi" value="<?= $motors->kondisi ?>">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
