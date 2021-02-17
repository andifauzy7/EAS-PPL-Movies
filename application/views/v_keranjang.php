<?php  

function rupiah($angka){
    $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
    return $hasil_rupiah;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <div class="container">
    <h4>Keranjang Anda</h4>
    <?php echo anchor('c_keranjang/hapus_keranjang/', '<div class="btn btn-sm btn-primary">Hapus Isi</div>') ?>
    <?php echo anchor('c_pesanan/', '<div class="btn btn-sm btn-success">Checkout</div>') ?>
    <div class="row">
      <?php foreach ($this->cart->contents() as $item): ?>
        <div class="col-md-4 col-sm-6 col-6 py-2">
            <div class="card h-100 border-primary">
                <div class="card-body">
                    <h4 class="card-title" style="text-align: center;"><?=$item["name"]?></h4>
                    <h4 class="card-title" style="text-align: center;"><?=rupiah($item["price"]);?></h4>
                    <div style="text-align: center;">
                      <h4 class="badge badge-secondary tex-wrap"><?="Kursi " . $item["id"];?></h4>
                    </div>
                </div>
            </div>
        </div>
      <?php endforeach; ?>
    </div>
</div>
</body>
</html>