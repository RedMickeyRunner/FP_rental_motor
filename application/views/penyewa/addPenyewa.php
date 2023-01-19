<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<div class="container mt-5">
<div class="card-body">
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <h2>Tambah Penyewa</h2>
    <form method="post" action="<?= base_url('penyewa/add') ?>">
        <div class="form-group">
            <!-- <input type="hidden" name="id" value="<?= $penyewa->id ?? '' ?>"> -->
            <label for="nama">Nama:</label><br>
            <input type="text" class="form-control" name="nama" id="nama" ><br>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label><br>
            <input type="text" class="form-control" name="alamat" id="alamat"><br>
        </div>

        <div class="form-group">
            <label for="no_telp">No. Telp:</label><br>
            <input type="text" class="form-control" name="no_telp" id="no_telp"><br><br>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
</div>
</div>
