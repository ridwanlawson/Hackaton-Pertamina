    <div id='srow" + idf + "' class='card-body'> <div class='form-row'> <div class='form-group col-md-3'> <label>Nama Barang</label> <select class='form-control' name='barang'> <option>Nama Barang</option> <?php include 'koneksi.php'; $query = mysqli_query($conn, 'SELECT * FROM barang'); while ($data = mysqli_fetch_array($query)) {?> <option value='<?php echo $data['id_brg'] ?>'><?php echo $data['nm_brg'] ?></option> <?php } ?> </select> </div> <div class='form-group col-md-1'> <label>Jumlah</label> <input type='number' name='jumlah' placeholder='Masukkan Jumlah' <?php if (!empty($_GET['j'])) {?>value='<?php echo $_GET['j'];?>'<?php }else{?>value='1000'<?php } ?> class='form-control'> </div> <div class='form-group col-md-2'> <label>Satuan</label> <select class='form-control' name='satuan'> <option>Pilih Satuan</option> <option value='1' selected>Kl</option> <option value='2'>l</option> <option value='3'>Dus</option> </select> </div> <div class='form-group col-md-2'> <label>Kali Pengiriman</label> <input type='number' name='kali' class='form-control' placeholder='Masukkan Angka' value='1'> </div> <div class='form-group col-md-3'> <label>Tempat Serah Terima</label> <select class='form-control' name='tempat'> <option>Pilih Tempat</option> <option selected>Gudang (Pertamina)</option> <option>Gudang Saya (User)</option> </select> </div> <div class='form-group col-md-1'> <a href='#' style=\'margin-bottom:1000px;\' onclick='hapusElemen(\'#srow' + idf + '\'); return false;'>Hapus</a> </div> </div> </div>