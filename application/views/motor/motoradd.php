<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<div class="container mt-5">
<div class="card-body">
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <h2>Tambah Motor</h2>
    <form method="post" action="<?= base_url('motor/add') ?>">
        <div class="form-group">
            <!-- <input type="hidden" name="id" value="<?= $motor->id ?? '' ?>"> -->
            <label for="nama">Nama:</label><br>
            <input type="text" class="form-control" name="nama" id="nama" ><br>
        </div>

        <div class="form-group">
            <label for="tipe">Tipe:</label><br>
            <input type="text" class="form-control" name="tipe" id="tipe"><br>
        </div>

        <div class="form-group">
            <label for="harga_sewa_per_hari">Harga_sewa_per_hari:</label><br>
            <input type="number" class="form-control" name="harga_sewa_per_hari" id="harga_sewa_per_hari"><br>
        </div>

        <div class="form-group">
            <label for="kondisi">Kondisi:</label><br>
            <input type="text" class="form-control" name="kondisi" id="kondisi"><br><br>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
</div>
</div>
