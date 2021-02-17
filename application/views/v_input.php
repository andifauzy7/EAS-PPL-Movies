

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <div class="container">
        <h4>Halaman Cari Transaksi</h4>
        <form method="post" enctype="multipart/form-data" action="<?=base_url('c_input/add_files');?>">
          <div class="form-group">
            <label for="kode">Kode Transaksi</label>
            <input type="text" class="form-control" id="kode" name="kode" placeholder="Ex : 15" required autocomplete="off">
          </div>
          <div class="form-group">
            <label for="bukti">Bukti Transaksi</label>
            <input type="file" class="form-control-file" id="bukti" name="bukti" required>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>