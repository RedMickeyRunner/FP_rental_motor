<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Sewa</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center my-5">Tambah Data Sewa</h1>
        <form action="<?php echo base_url('sewa/edit/'.$sewa->id); ?>" method="post">
        <input type="hidden" name="id_sewa" value="<?= $sewa->id ?>">
    <div class="form-group">
        <label for="motor_id">Motor</label>
        <select name="motor_id" id="motor_id" class="form-control">
            <?php foreach ($motor as $m) : ?>
                <option value="<?php echo $m->id; ?>" <?php echo ($m->id == $sewa->id_motor) ? 'selected' : ''; ?>><?php echo $m->nama; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="penyewa_id">Penyewa</label>
        <select name="penyewa_id" id="penyewa_id" class="form-control">
            <?php foreach ($penyewa as $p) : ?>
                <option value="<?php echo $p->id; ?>" <?php echo ($p->id == $sewa->id_penyewa) ? 'selected' : ''; ?>><?php echo $p->nama; ?></option>
            <?php endforeach; ?>
            </select>
            </div>
            <div class="form-group">
            <label for="tgl_sewa">Tanggal Sewa</label>
            <input type="date" class="form-control" id="tgl_sewa" name="tgl_sewa" value="<?php echo $sewa->tanggal_sewa; ?>">
            </div>
            <div class="form-group">
            <label for="tgl_kembali">Tanggal Kembali</label>
            <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" value="<?php echo $sewa->tanggal_kembali; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            
</form>
    </div>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>

</body>
</html>
