<?php  $data_detail = $gudang->detail('invoice', $_GET['id']) ;?>
<?php if ($data_detail != null) { ?>

<div class="row mt-5 mb-5">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-6">
            <h3>Detail Barang</h3>
          </div>
          <div class="col-6 text-end align-middle">
            <a href="<?php echo $global->get_url() . '?page=barang'; ?>" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Kembali</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        
        <?php 
          $total_1 = $data_detail['harga_1'] * $data_detail['kuantiti_1'];
          $total_2 = $data_detail['harga_2'] * $data_detail['kuantiti_2'];
          $total_3 = $data_detail['harga_3'] * $data_detail['kuantiti_3'];

          $subtotal = $total_1 + $total_2 + $total_3;
        ?>
        <div class="row pt-3 pb-3">
          <div class="col-6">
            <div class="row mb-3">
              <div class="col-4">
                <strong>Kode</strong>
              </div>
              <div class="col-8">
                INV#<strong><?= $data_detail['invoice']; ?></strong>
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-4">
                <strong>Ditujukan</strong>
              </div>
              <div class="col-8">
                <?= $data_detail['nama']; ?>
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-4">
                <strong>Status</strong>
              </div>
              <div class="col-8">
                <?php 
                  if ($data_detail['status'] === 'Baru') {
                    echo '<span class="badge bg-primary">'.$data_detail['status'].'</span>';
                  } elseif ($data_detail['status'] === 'Lunas') {
                    echo '<span class="badge bg-success">'.$data_detail['status'].'</span>';
                  } else {
                    echo '<span class="badge bg-danger">'.$data_detail['status'].'</span>';
                  }
                ?>
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-4">
                <strong>Tanggal Pesan</strong>
              </div>
              <div class="col-8">
                <?= date_format(date_create($data_detail['tanggal']), 'd-m-Y'); ?>
              </div>
            </div>

          </div>
          <h3 >List Item</h3>
          <hr class="mt-2">
          <div class="table-responsive mt-2">
            <table class="table">
              <div class="row">
                <thead>
                  <tr>
                    <th class="col-3">Nama</th>
                    <th class="col-3 text-center">Kuantitas</th>
                    <th class="col-3 text-end">Harga (satuan)</th>
                    <th class="col-3 text-end">Subtotal</th>
                  </tr>
                  <tr>
                    <td class="col-3"><?= $data_detail['barang_1']; ?></td>
                    <td class="col-3 text-center"><?= $data_detail['kuantiti_1']; ?></td>
                    <td class="col-3 text-end">Rp. <?= number_format($data_detail['harga_1']); ?></td>
                    <td class="col-3 text-end">Rp. <?= number_format($total_1); ?> </td>
                  </tr>
                  <?php if ($data_detail['barang_2'] == null) {
                      $display_2 = 'd-none';
                  } ?>

                  <?php if ($data_detail['barang_3'] == null) {
                      $display_3 = 'd-none';
                  } ?>

                  <tr class="<?= $display_2 ;?>">
                    <td class="col-3"><?= $data_detail['barang_2']; ?></td>
                    <td class="col-3 text-center"><?= $data_detail['kuantiti_2']; ?></td>
                    <td class="col-3 text-end">Rp. <?= number_format($data_detail['harga_2']); ?></td>
                    <td class="col-3 text-end">Rp. <?= number_format($total_2); ?> </td>
                  </tr>

                  <tr class="<?= $display_3 ;?>">
                    <td class="col-3"><?= $data_detail['barang_3']; ?></td>
                    <td class="col-3 text-center"><?= $data_detail['kuantiti_3']; ?></td>
                    <td class="col-3 text-end">Rp. <?= number_format($data_detail['harga_3']); ?></td>
                    <td class="col-3 text-end">Rp. <?= number_format($total_3); ?> </td>
                  </tr>
                  <tr>
                    <td class="col-3"></td>
                    <td class="col-3"></td>
                    <td class="col-3 text-end fw-bold">Total</td>
                    <td class="col-3 text-end fw-bold">Rp. <?= number_format($subtotal); ?> </td>
                  </tr>
                </thead>
              </div>
            </table>
          </div>
          <div class="row mb-3">
            <div class="col-12">
              <a href="<?php echo $global->get_url() . '?page=barang-edit&id=' . $data_detail['id']; ?>" class="btn btn-success"><i class="fa fa-pencil"></i> Edit</a>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
<?php }else { ?>
  
  <div class="mt-5 mb-5">
    <center> 
      <span class="angka">4</span>
      <img class="gambar" src="https://i.pinimg.com/originals/2d/e9/c6/2de9c607a36a95573d7a9a862a42ab27.png" alt="XD">
      <span class="angka">4</span>
      <h2 class="text-capitalize mb-4 fw-bold">Oops! Halaman tidak ditemukan</h2>
      <a href="<?= $global->get_url() . '?page=barang'; ?>" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Kembali</a>
    </center>
  </div>

<?php } ?>