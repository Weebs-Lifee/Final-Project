<?php
  $error = null;

  
  if (isset($_POST['submit'])) {
    $data_barang = [
      $_POST['invoice'],
      $_POST['nama'],
      $_POST['barang_1'],
      $_POST['barang_2'] != '' ? $_POST['barang_2'] : null,
      $_POST['barang_3'] != '' ? $_POST['barang_3'] : null,
      $_POST['status'],
      $_POST['tanggal'],
      $_POST['kuantiti_1'],
      $_POST['kuantiti_2'] != '' ? $_POST['kuantiti_2'] : null,
      $_POST['kuantiti_3'] != '' ? $_POST['kuantiti_3'] : null,
      $_POST['harga_1'],
      $_POST['harga_2'] != '' ? $_POST['harga_2'] : null,
      $_POST['harga_3'] != '' ? $_POST['harga_3'] : null

    ];
    $data = $gudang->create('invoice', $data_barang);
    if ($data) {
      echo '<script>alert("Data berhasil ditambah");window.location="'.$global->get_url() . '?page=barang'.'"</script>';
    } else {
      $error = 'Update data gagal! Mohon periksa kembali inputan anda';
    }
      $global->get_url() . '?page=barang';
      
  }

?>

<div class="row mt-5 mb-5">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-6">
            <h3>Tambah Barang</h3>
          </div>
          <div class="col-6 text-end align-middle">
            <a href="<?php echo $global->get_url() . '?page=barang'; ?>" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Kembali</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <?php if (!is_null($error)) : ?>
          <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <form action="" method="post" class="needs-validation" novalidate>
          <input type="text" name="status" value="Baru" hidden>
          <input type="text" name="invoice" value="<?= $global->generateRandomString(5)?>" hidden>
          <div class="row">
            <div class="mb-3 col-6">
              <label for="namaFormControlInput" class="form-label"><strong>Ditujukan<sup class="text-danger">*</sup></strong></label>
              <input type="text" class="form-control text-capitalize" id="namaFormControlInput" placeholder="Nama yang dituju" autocomplete="off" title="Nama orang" name="nama" required>
              <div class="invalid-feedback">
                Please choose a username.
              </div>
            </div>

            <div class="mb-3 col-6">
              <label for="tanggalFormControlInput1" class="form-label"><strong>Tanggal Pesan<sup class="text-danger">*</sup></strong></label>
              <input type="date" class="form-control" id="tanggalFormControlInput1" title="tanggal barang. bukan tanggal lahir :V" name="tanggal" required>
            </div>

            <h3>Item #1</h3>
            <hr>
            <div class="mb-3 col-4">
              <label for="namaFormControlInput1" class="form-label"><strong>Nama<sup class="text-danger">*</sup></strong></label>
              <input type="text" class="form-control text-capitalize" id="namaFormControlInput1" placeholder="Nama barang" title="Nama Barang" autocomplete="off" name="barang_1" required>
            </div>

            <div class="mb-3 col-4">
              <label for="namaFormControlKuantiti1" class="form-label"><strong>Kuantiti<sup class="text-danger">*</sup></strong></label>
              <input type="number" class="form-control" id="namaFormControlKuantiti1" placeholder="Jumlah kuantiti" name="kuantiti_1" title="jumlah kuantiti" required >
            </div>

            <div class="mb-3 col-4">
              <label for="namaFormControlHarga1" class="form-label"><strong>Harga</strong></label>
              <div class="input-group">
                <span class="input-group-text">Rp.</span>
                <input type="number" class="form-control" id="namaFormControlHarga1" placeholder="Harga" name="harga_1" title="jangan mahal-mahal" required >
              </div>
            </div>

            
            <h3>Item #2</h3>
            <hr>
            <div class="mb-3 col-4">
              <label for="namaFormControlInput2" class="form-label"><strong>Nama</strong></label>
              <input type="text" class="form-control text-capitalize" id="namaFormControlInput2" placeholder="Nama barang" title="Nama Barang" autocomplete="off" name="barang_2">
            </div>

            <div class="mb-3 col-4">
              <label for="namaFormControlKuantiti2" class="form-label"><strong>Kuantiti</strong></label>
              <input type="number" class="form-control" id="namaFormControlKuantiti2" placeholder="Jumlah kuantiti" name="kuantiti_2" title="jumlah kuantiti" >
            </div>

            <div class="mb-3 col-4">
              <label for="namaFormControlHarga2" class="form-label"><strong>Harga</strong></label>
              <div class="input-group">
                <span class="input-group-text">Rp.</span>
                <input type="number" class="form-control" id="namaFormControlHarga2" placeholder="Harga" name="harga_2" title="jangan mahal-mahal" >
              </div>
            </div>

            <h3>Item #3</h3>
            <hr>
            <div class="mb-3 col-4">
              <label for="namaFormControlInput3" class="form-label"><strong>Nama</strong></label>
              <input type="text" class="form-control text-capitalize" autocomplete="off" id="namaFormControlInput3" placeholder="Nama barang" title="Nama Barang" name="barang_3">
            </div>

            <div class="mb-3 col-4">
              <label for="namaFormControlKuantiti3" class="form-label"><strong>Kuantiti</strong></label>
              <input type="number" class="form-control" id="namaFormControlKuantiti3" placeholder="Jumlah kuantiti" name="kuantiti_3" title="jumlah kuantiti" >
            </div>

            <div class="mb-3 col-4">
              <label for="namaFormControlHarga3" class="form-label"><strong>Harga</strong></label>
              <div class="input-group">
                <span class="input-group-text">Rp.</span>
                <input type="number" class="form-control" id="namaFormControlHarga3" placeholder="Harga" name="harga_3" title="jangan mahal-mahal" >
              </div>
            </div>

            
            <div class="d-grid gap-2 d-md-block">
              <button class="btn btn-primary" type="submit" name="submit"><i class="fa fa-paper-plane"></i> Submit</button>
              <button class="btn btn-secondary" type="reset"><i class="fas fa-redo-alt"></i></i> Reset</button>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</div>