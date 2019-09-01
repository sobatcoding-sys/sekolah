<?php
include 'top.php';

if (isset($_POST['simpan'])) {
  
  $nis=$_POST['nis'];
  $nama=$_POST['nama'];
  $tgl=$_POST['tgl'];
  $alamat=$_POST['alamat'];
  $kelas=$_POST['kelas'];
  $umur=$_POST['umur'];
  $jk=$_POST['jk'];

  $s = mysql_query("insert into datasiswa (id, nis, nama, 
    tanggal, alamat, kelas, umur, jenis_kelamin) values 
    ('','$nis','$nama','$tgl','$alamat','$kelas','$umur','$jk')");

  $s .= mysql_query("insert into siswa (nis, nama) 
    values ('$nis','$nama')");

  if ($s) {
        echo "
      <script type='text/javascript'>
      setTimeout(function () { 
        swal({
                title: 'Data berhasil tersimpan.',
                text:  'Nama siswa : $nama',
                type: 'success',
                timer: 3200,
                showConfirmButton: true
            });   
      },10);  
      window.setTimeout(function(){ 
        window.location.replace('input-siswa.php');
      } ,3000); 
      </script>";
  }else{
    echo "gagal";
  }

}

?>
        <div class="row">
          <div class="col-lg-12">
                <div class="card shadow mt-3">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Input Data Siswa</h6>
                </div>
                <div class="card-body">
                  <form class="user" action="" method="POST">
                     <div class="form-group row">
                       <label class="form-group col-sm-2 mb-sm-0 mt-1 ml-2 text-right">NIS</label>
                       <div class="col-sm-2 mb-3 mb-sm-0">
                         <input type="text" class="form-control" name="nis" placeholder="No Induk Siswa" maxlength="6" onkeypress="return hanyaAngka(event)" required oninvalid="this.setCustomValidity('NIS tidak boleh kosong !')" oninput="setCustomValidity('')" title="Nomor Induk Siswa">
                       </div>
                     </div>  
                     <div class="form-group row">
                       <label class="form-group col-sm-2 mb-sm-0 mt-1 ml-2 text-right">Nama</label>
                       <div class="col-sm-4 mb-3 mt-0 mb-sm-0">
                         <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" maxlength="45" required oninvalid="this.setCustomValidity('Nama tidak boleh kosong !')" oninput="setCustomValidity('')" title="Nama Lengkap">
                       </div>
                     </div> 
                     <div class="form-group row">
                       <label class="form-group col-sm-2 mb-sm-0 ml-2 mt-1 text-right">Tanggal Lahir</label>
                       <div class="col-sm-4 mb-0 mt-0 mb-sm-0">
                         <input type="text" class="form-control" id="tanggal" name="tgl" placeholder="Tanggal Lahir" title="Tanggal Lahir">
                       </div>
                     </div>
                     <div class="form-group row">
                       <label class="form-group col-sm-2 mb-sm-0 mt-2 ml-2 text-right">Alamat</label>
                       <div class="col-sm-4 mb-3 mt-0 mb-sm-0">
                         <textarea class="form-control" name="alamat" rows="3" cols="20" placeholder="Alamat Lengkap" required oninvalid="this.setCustomValidity('Alamat tidak boleh kosong !')" oninput="setCustomValidity('')" style="resize: none" title="Alamat"></textarea>
                       </div>
                     </div>
                     <div class=" form-group row">
                       <label class="form-group col-sm-2 mb-sm-0 mt-1 ml-2 text-right">Kelas</label>
                       <div class="col-sm-2 mb-3 mt-0 mb-sm-0">
                         <select class="custom-select custom-select-md" name="kelas" title="Kelas">
                           <option value="0" >- Pilih -</option>
                           <option value="1">1 - Satu</option>
                           <option value="2">2 - Dua</option>
                           <option value="3">3 - Tiga</option>
                           <option value="4">4 - Empat</option>
                           <option value="5">5 - Lima</option>
                           <option value="6">6 - Enam</option>
                         </select>
                       </div>
                     </div>  
                     <div class="form-group row">
                         <label class="form-group col-sm-2 mb-sm-0 mt-1 ml-2 text-right">Umur</label>
                         <div class="col-sm-2 mb-3 mt-0 mb-sm-0">
                           <input type="text" class="form-control" name="umur" placeholder="Umur" maxlength="1" onkeypress="return hanyaAngka(event)" required oninvalid="this.setCustomValidity('Umur tidak boleh kosong !')" oninput="setCustomValidity('')" title="Umur">
                         </div>
                      </div>
                      <div class="form-group row">                       
                          <label class="form-group col-sm-2 mb-sm-0 mt-1 ml-2 text-right">Jenis Kelamin</label>
                          <div class="radio col-sm-2">
                            <input type="radio" name="jk" value="Laki-laki">&nbsp;Laki-laki&nbsp;
                            <input type="radio" name="jk" value="Perempuan">&nbsp;Perempuan
                          </div>
                      </div>
                      
                      <div class="form-group row">
                        <div class="form-group col-md-3 text-right">
                          <button type="submit" class="btn btn-primary btn-md" id="simpan" name="simpan"><i class="fas fa-check fa-md"></i>&nbsp;&nbsp;Simpan</button>
                        </div>
                        <div class="form-group col-md-6">
                          <button type="reset" class="btn btn-danger btn-md" name=""><i class="fas fa-trash fa-md"></i>&nbsp;&nbsp;Reset</button>
                        </div>
                      </div>

                       
                  </form>

                </div>
              </div>
          </div>
        </div>

<?php
include 'bottom.php';
?>
