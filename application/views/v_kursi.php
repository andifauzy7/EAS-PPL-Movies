<?php  

function rupiah($angka){
  $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
  return $hasil_rupiah;
}

$i = 0;
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-12 py-1">
          <div class="card h-100 border-primary">
            <div class="card-body">
              <div style="text-align: center;">
                <h4 class="badge badge-info tex-wrap">Layar</h4>
              </div>
            </div>
          </div>
      </div>
      <?php foreach ($kursi as $item): ?>
        <div class="col-md-3 col-sm-6 col-6 py-2">
            <div class="card h-100 border-primary">
                <div class="card-body">
                    <div style="text-align: center;">
                      <?php
                      if($item->status_kursi==TRUE){
                        echo '<div class="btn btn-sm btn-secondary disabled"> ' . $item->id_kursi . '</div>';
                      }  
                      else if($item->id_kategori == 1 && $item->status_kursi==FALSE){
                        echo anchor('c_keranjang/tambah_keranjang/'.$item->id_kursi, '<div class="btn btn-sm btn-primary"> ' . $item->id_kursi . '</div>');
                      } else if($item->id_kategori==2 && $item->status_kursi==FALSE){
                        echo anchor('c_keranjang/tambah_keranjang/'.$item->id_kursi, '<div class="btn btn-sm btn-warning"> ' . $item->id_kursi . '</div>');
                      } else if($item->id_kategori==3 && $item->status_kursi==FALSE){
                        echo anchor('c_keranjang/tambah_keranjang/'.$item->id_kursi, '<div class="btn btn-sm btn-success"> ' . $item->id_kursi . '</div>');
                      }
                      ?>
                      <h4 class="badge badge-info tex-wrap"><?=$item->nama_kategori;?></h4>
                    </div>
                </div>
            </div>
        </div>
        <?php 
          $i++;
          endforeach; 
        ?>
    </div>
</div>
</body>
</html>