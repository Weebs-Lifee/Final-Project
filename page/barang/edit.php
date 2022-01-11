<?php 
  $error = null;
  $data_detail = $gudang->detail('invoice', $_GET['id']);
  
  if (isset($_POST['submit'])) {
    $data_barang = [
      $_POST['nama'],
      $_POST['tanggal'],
      $_POST['status'],
      $_POST['barang_1'],
      $_POST['barang_2'],
      $_POST['barang_3'],
      $_POST['kuantiti_1'],
      $_POST['kuantiti_2'],
      $_POST['kuantiti_3'],
      $_POST['harga_1'],
      $_POST['harga_2'],
      $_POST['harga_3'],
      $_GET['id']
    ];
    $data = $gudang->update('invoice', $data_barang);
    if ($data) {
        echo '<script>alert("Data berhasil diperbarui");window.location="'.$global->get_url() . '?page=barang'.'"</script>';
    } else {
        $error = 'Update data gagal! Mohon periksa kembali inputan anda';
    }
  }
?>

<?php if($data_detail != null) { ?>
  <div class="row mt-5 mb-5">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-6">
              <h3>Perbarui Data</h3>
            </div>
            <div class="col-6 text-end align-middle">
              <a href="<?php echo $global->get_url() . '?page=barang'; ?>" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>
          </div>
        </div>
        <?php if ($data_detail['status'] != 'Lunas' && $data_detail['status'] != 'Batal') : ?>
        <div class="card-body">
          <?php if (!is_null($error)) : ?>
          <div class="alert alert-danger"><?php echo $error; ?></div>
          <?php endif; ?>
          <form action="" method="post">
            <div class="row">
              <div class="mb-3 col-4">

                <label for="namaFormControlInput1" class="form-label"><strong>Nama<sup class="text-danger">*</sup></strong></label>
                <input type="text" class="form-control" id="namaFormControlInput1" placeholder="masukkan nama barang" name="nama" value="<?php echo $data_detail['nama']; ?>" required>
              </div>
              <div class="mb-3 col-4">
                <label for="tanggalFormControlInput1" class="form-label"><strong>Tanggal Pesan<sup class="text-danger">*</sup></strong></label>
                <input type="date" class="form-control" id="tanggalFormControlInput1" title="tanggal barang. bukan tanggal lahir :V" name="tanggal" value="<?php echo $data_detail['tanggal']; ?>" required>
              </div>

              <div class="mb-3 col-4">
                <label for="hargajualFormControlInput1" class="form-label"><strong>Status<sup class="text-danger">*</sup></strong></label>
                <select name="status" id="" class="form-control">
                    <option value="Baru" selected>Baru</option>
                    <option value="Lunas">Lunas</option>
                    <option value="Batal">Batal</option>
                </select>
              </div>

              <h3>Item #1</h3>
              <hr>
              <div class="mb-3 col-4">
                <label for="namaFormControlInput1" class="form-label"><strong>Nama<sup class="text-danger">*</sup></strong></label>
                <input type="text" class="form-control" id="namaFormControlInput1" placeholder="Nama barang" title="Nama Barang" name="barang_1" required value="<?= $data_detail['barang_1']; ?>"> 
              </div>

              <div class="mb-3 col-4">
                <label for="namaFormControlInput1" class="form-label"><strong>Kuantiti<sup class="text-danger">*</sup></strong></label>
                <input type="number" class="form-control" id="namaFormControlInput1" placeholder="Jumlah kuantiti" name="kuantiti_1" title="jumlah kuantiti" required value="<?= $data_detail['kuantiti_1']; ?>" >
              </div>

              <div class="mb-3 col-4">
                <label for="namaFormControlInput1" class="form-label"><strong>Harga</strong></label>
                <div class="input-group">
                  <span class="input-group-text">Rp.</span>
                  <input type="number" class="form-control" id="namaFormControlInput1" placeholder="Harga" name="harga_1" title="jangan mahal-mahal" required value="<?= $data_detail['harga_1']; ?>" >
                </div>
              </div>
            </div>

              <!-- Pengecekan data ke 2 dan 3 apabila kosong, tidak akan ditampilkan -->

              <?php if ($data_detail['barang_2'] == null ) {
                  $display_2 = 'd-none';
              } ?>
            

              <?php if ($data_detail['barang_3'] == null ) {
                  $display_3 = 'd-none';
              } ?>


              
              <div class="<?= $display_2; ?> row">
                <h3>Item #2</h3>
                <hr>
                <div class="mb-3 col-4">
                  <label for="namaFormControlInput1" class="form-label"><strong>Nama</strong></label>
                  <input type="text" class="form-control" id="namaFormControlInput1" placeholder="Nama barang" title="Nama Barang" name="barang_2" value="<?= $data_detail['barang_2']; ?>">
                </div>
                
                <div class="mb-3 col-4">
                  <label for="namaFormControlInput1" class="form-label"><strong>Kuantiti</strong></label>
                  <input type="number" class="form-control" id="namaFormControlInput1" placeholder="Jumlah kuantiti" name="kuantiti_2" title="jumlah kuantiti" value="<?= $data_detail['kuantiti_2']; ?>" >
                </div>

                <div class="mb-3 col-4">
                  <label for="namaFormControlInput1" class="form-label"><strong>Harga</strong></label>
                  <div class="input-group">
                    <span class="input-group-text">Rp.</span>
                    <input type="number" class="form-control" id="namaFormControlInput1" placeholder="Harga" name="harga_2" title="jangan mahal-mahal" value="<?= $data_detail['harga_2']; ?>" >
                  </div>
                </div>
              </div>


              <div class="<?= $display_3; ?> row">
                <h3>Item #3</h3>
                <hr>
                <div class="mb-3 col-4">
                  <label for="namaFormControlInput1" class="form-label"><strong>Nama</strong></label>
                  <input type="text" class="form-control" id="namaFormControlInput1" placeholder="Nama barang" title="Nama Barang" name="barang_3" value="<?= $data_detail['barang_3']; ?>">
                </div>
                
                <div class="mb-3 col-4">
                  <label for="namaFormControlInput1" class="form-label"><strong>Kuantiti</strong></label>
                  <input type="number" class="form-control" id="namaFormControlInput1" placeholder="Jumlah kuantiti" name="kuantiti_3" title="jumlah kuantiti" value="<?= $data_detail['kuantiti_3']; ?>" >
                </div>

                <div class="mb-3 col-4">
                  <label for="namaFormControlInput1" class="form-label"><strong>Harga</strong></label>
                  <div class="input-group">
                    <span class="input-group-text">Rp.</span>
                    <input type="number" class="form-control" id="namaFormControlInput1" placeholder="Harga" name="harga_3" title="jangan mahal-mahal" value="<?= $data_detail['harga_3']; ?>" >
                  </div>
                </div>
              </div> <div></div>
              
              <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="submit" name="submit"><i class="fa fa-paper-plane"></i> Update</button>
                <button class="btn btn-secondary" type="reset"><i class="fas fa-redo-alt"></i></i> Reset</button>
              </div>
            </div>
          </form>
        </div>
        <?php else : ?>
        <div class="card-body">
            <div class="alert alert-info">Data sudah tidak bisa diperbarui!</div>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php }else {  ?>
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


