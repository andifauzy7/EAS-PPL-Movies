<?php  

function rupiah($angka){
    $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
    return $hasil_rupiah;
}

$total=0;
$size=0;
foreach ($this->cart->contents() as $item){
    $total += $item["price"];
    $size += $item["size"];
}

$size = $size / 1000;

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <div class="container">
        <h4>Halaman Checkout</h4>
        <h5>Kode Transaksi : <?=$kodeTr; ?></h5>
        <h5>Total : <?=rupiah($total);?></h5>
        <form method="post" enctype="multipart/form-data" action="<?=base_url('c_pesanan/add_transaksi');?>">
          <div class="form-group">
            <label for="nama">Nama Pemesan</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Ex : Andi Fauzy" required autocomplete="off">
          </div>
          <div class="form-group">
            <label for="nomor">Nomor Handphone</label>
            <input type="text" class="form-control" id="nomor" name="nomor" placeholder="Ex : 085322677320" required autocomplete="off">
          </div>
          <input type="hidden" id="total" name="total" value="<?=$total;?>">
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div class="row">
          <?php foreach ($this->cart->contents() as $item): ?>
            <div class="col-sm-4 py-2">
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