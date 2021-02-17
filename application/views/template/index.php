<!DOCTYPE html>
<html lang="en">
<head>
  <title>ANDIMOVIES - Best Film</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>

  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0;">
  <h1>ANDI<b>MOVIES</b></h1>
  <p>Dapatkan pengalaman menonton film, murah dan menarik!</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">ANDI<b>MOVIES</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url();?>">Kursi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Kontak</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('c_keranjang');?>">Lihat Keranjang</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <?php 
            $keranjang = 'Keranjang Belanja : ' . $this->cart->total_items(). ' Tiket'
          ?>
          <?=$keranjang;?>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('c_input');?>">Konfirmasi Transaksi</a>
      </li>
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px; min-height: 500px;">
  <div class="row">
  	<div class="col-sm-10">
      <?php 
          echo $contentnya; 
      ?>
    </div>
    <div class="col-sm-2">
      <h3>Keterangan</h3>
      <p>Kategori Kursi.</p>
      <ul class="nav nav-pills flex-column">
        <h4 class="badge badge-primary tex-wrap">Ekonomi</h4>
        <h4 class="badge badge-warning tex-wrap">Reguler</h4>
        <h4 class="badge badge-success tex-wrap">VIP</h4>
        <h4 class="badge badge-secondary tex-wrap">Booked</h4>
      </ul>
      <hr class="d-sm-none">
    </div>
  </div>
</div>

<div class="jumbotron text-center" id="contact" style="margin-bottom:0">
  <div class="container">
    <div class="row">
      <div class="col">
        <p class="text-left" style="font-size: 36px; margin: 0;">ANDI<b>MOVIES</b></p>
        <p class="text-left" style="margin: 0;">Email : andi.fauzy.tif18@polban.ac.id</p>
        <p class="text-left">Handphone : +6285322677320</p>
      </div>
  </div>
</div>

</body>
</html>