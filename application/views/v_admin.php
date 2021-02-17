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
        <h4>Dashboard Admin</h4>
        <table class="table">
          <thead>
            <tr style="text-align: center;">
              <th scope="col">#</th>
              <th scope="col">Nama Pemesan</th>
              <th scope="col">Nomor Handphone</th>
              <th scope="col">Tanggal Pembelian</th>
              <th scope="col">Total</th>
              <th scope="col">Status</th>
              <th scope="col">Bukti</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $i = 1;
            foreach ($pemesan as $perorang):
            ?>
              <tr>
                <td><?=$i;?></td>
                <td><?=$perorang->nama_pemesan;?></td>
                <td><?=$perorang->hp_pemesan;?></td>
                <td><?=$perorang->tgl_pemesanan;?></td>
                <td><?=rupiah($perorang->total_pemesanan);?></td>
                <td>
                  <?php  
                    switch ($perorang->status_pemesanan) {
                      case '0':
                        echo "<h4 class='badge badge-danger tex-wrap'>Belum Konfirmasi</h4>";
                        break;
                      case '1':
                        echo "<h4 class='badge badge-primary tex-wrap'>Sudah Konfirmasi</h4>";
                        break;
                      case '2':
                        echo "<h4 class='badge badge-success tex-wrap'>Terverifikasi</h4>";
                        break;
                    }
                  ?>
                </td>
                <td>
                  <?php  
                    if($perorang->bukti_pemesanan != '-'){
                      $stringUrl = base_url() . 'uploads/' . $perorang->bukti_pemesanan;
                      echo anchor($stringUrl, '<div class="btn btn-sm btn-secondary">Lihat Bukti Transaksi</div>');
                    } else {
                      echo '<div class="btn btn-sm btn-secondary disabled"> ' . 'Lihat Bukti Transaksi' . '</div>';
                    }
                  ?>
                </td>
                <td>
                  <form method="post" action="<?=base_url('c_admin/update_status');?>">
                    <select name="status">
                      <option value="0">Belum Konfirmasi</option>
                      <option value="1">Sudah Konfirmasi</option>
                      <option value="2">Terverifikasi</option>
                    </select>
                    <input type="hidden" name="id_pemesan" value="<?=$perorang->id_pemesan;?>">
                    <button name="submit">Update Status</button>
                  </form>
                </td>
              </tr>
            <?php 
            $i++;
            endforeach; 
            ?>
          </tbody>
        </table>
    </div>
</body>
</html>