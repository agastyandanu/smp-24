<div class="content-wrapper">

<?php
  if (isset($_GET['aksi'])){
    $aksi = $_GET['aksi'];

  switch ($aksi){
    case "tambahberita" :

    if(isset($_POST['save'])){
    $tglskrg = date('Y-m-d');
    $judulseo = seo_title($_POST['judul']);
		$nmberkas  = $_FILES["gambar"]["name"];
		$lokberkas = $_FILES["gambar"]["tmp_name"];
		$nmfoto= date("YmdHis").$nmberkas;

        $valid    = array('jpg','png','gif','jpeg');
    list($txt, $ext) = explode(".",$nmfoto);
    if(in_array($ext,$valid)){

		if(!empty($lokberkas)){
			move_uploaded_file($lokberkas, "../../img/alumni/$nmfoto");
		}

	$save=mysqli_query($con, "INSERT INTO alumni (ket_alumni, gambar_al) VALUE ('$_POST[ket_alumni]', '$nmfoto')");

	 if($save) {
        echo "<script>
            alert('Tambah Data Berhasil');
            window.location='?module=alumni';
            </script>";
            exit;
      }else{
        echo "<script>alert('Gagal');
            </script>";
      }

    }else{
       echo "<script>
              alert('Format Foto Tidak Mendukung, Upload Foto Dengan Format png/jpg/gif/jpeg');
            </script>";
    }
    }
?>
<section class="content-header">
      <h1>
        Alumni Sekolah
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Alumni</li>
      </ol>
</section>
<!-- Content Header (Page header) -->
  <section class="content">
  <div class="row">
      <div class="col-xs-12">
       <div class="box box-info">
         <div class="box-header with-border">

         </div>
            <!-- form start -->
            <form method="POST" class="form-horizontal" action="" enctype="multipart/form-data">
              <div class="box-body">
			    <div class="col-sm-12">
					<div class="form-group">
						<label for="kdp" class="col-sm-2 control-label">Keterangan</label>
					  <div class="col-sm-8">
						<input type="text" name="ket_alumni" id="kdp" class="form-control">
					  </div>
					</div>

					

					<div class="form-group">
						<label for="gam" class="col-sm-2 control-label">Gambar</label>
					  <div class="col-sm-4">
						<input type="file" name="gambar" id="gam" class="form-control">
					  </div>
					</div>

				    <div class="form-group">
					  <div class="col-sm-4 col-md-offset-2">
						<button type="submit" name="save" class="btn btn-primary btn-flat">Simpan</button>
					  </div>
					</div>
			    </div>
          </form>
        </div>
      </div>
    </div>
</section>
<?php
    break;
    case "editberita":
    if(isset($_GET['id'])){
      $sql = mysqli_query($con, "SELECT * FROM alumni where id_alumni='$_GET[id]'");
      $data=mysqli_fetch_assoc($sql);
    }
    if(isset($_POST['save'])){
    $judulseo = seo_title($_POST['judul']);
		$nmberkas  = $_FILES['foto']["name"];
		$lokberkas = $_FILES["foto"]["tmp_name"];
		$nmfoto= date("YmdHis").$nmberkas;

    if(empty($lokberkas)){

      $save=mysqli_query($con, "UPDATE alumni set ket_alumni='$_POST[ket_alumni]' where id_alumni='$_GET[id]'");

        if($save) {
          echo "<script>
            alert('Edit Data Berhasil');
            window.location='?module=berita';
              </script>";
        }else{
          echo "<script>alert('Gagal');
              </script>";
       }

		}else if(!empty($lokberkas)){
      list($txt, $ext) = explode(".",$nmfoto);
      
      if(in_array($ext,$valid)){

			move_uploaded_file($lokberkas, "../../img/alumni/$nmfoto");
      $lihat = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM alumni where id_alumni='$_GET[id]'"));

      unlink("../../img/alumni/".$lihat['gambar_al']);

      $save=mysqli_query($con, "UPDATE alumni set ket_alumni='$_POST[ket_alumni]', gambar_al='$nmfoto' where id_alumni='$_GET[id]'");
      if($save) {
        echo "<script>
            alert('Edit Data Berhasil');
            window.location='?module=alumni';
              </script>";
        }else{
          echo "<script>alert('Gagal');
              </script>";
       }
             }else{
       echo "<script>
               alert('Format Foto Tidak Mendukung, Upload Foto Dengan Format png/jpg/gif/jpeg');
               </script>";
     }
   }
    }
?>
<section class="content-header">
      <h1>
        Alumni Sekolah
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Alumni</li>
      </ol>
</section>

<section class="content">
  <div class="row">
      <div class="col-xs-12">
       <div class="box box-info">
         <div class="box-header with-border">

         </div>

            <!-- form start -->
            <form action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
              <div class="box-body ">
                <div class="form-group" >
                  <label for="jdl" class="col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-10">
                    <input type="text" name="ket_alumni" id="jdl" class="form-control"  value="<?= $data['ket_alumni']; ?>">
                  </div>
                </div>


                <div class="form-group" >
                  <label for="gam" class="col-sm-2 control-label">Gambar</label>
                  <div class="col-sm-4">
                    <input type="file" name="foto" id="gam" class="form-control">
					          <input type="hidden" name="gambarlama" id="jdl" class="form-control"  value="<?= $data['gambar_al']; ?>">
                  </div>
                </div>

				       <div class="form-group" >
                  <label for="gam" class="col-sm-2 control-label">&nbsp;</label>
				          <div class="col-sm-4">
                    <img src="../../img/alumni/<?= $data['gambar_al']; ?>" style="width:250px;">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-4 col-md-offset-2">
                    <button type="submit" name="save" class="btn btn-primary btn-flat">Simpan</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
    </div>
</section>
<?php
    break;
    case "hapusberita" :

    if(isset($_GET['id'])){
      $lihat = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM alumni where id_alumni='$_GET[id]'"));

      unlink("../../img/alumni/".$lihat['gambar_al']);
      $del = mysqli_query($con, "DELETE FROM alumni where id_alumni='$_GET[id]'");
      if($del){
    	  echo "<script>
                 alert('Data Berhasil Dihapus');
    					   window.location='index.php?module=alumni';
    				  </script>";
      }else{
        echo "<script>
                alert('Data Gagal Dihapus');
                window.location='index.php?module=alumni';
              </script>";
      }
    }
?>
<?php
break;
}
}else{
?>

<section class="content-header">
      <h1>
        Alumni Sekolah
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Alumni Sekolah</li>
      </ol>
</section>
<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <a href="?module=alumni&aksi=tambahberita" class="btn btn-flat btn-primary">Tambah Alumni </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table table-responsive">
              <table  class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $be = mysqli_query($con, "SELECT * FROM alumni ORDER BY id_alumni DESC");
                  $no=1;
                  while($r=mysqli_fetch_assoc($be)){
                    ?>

                    <tr>
                      <td><?= $no; ?></td>
                      <td><img src="../../img/alumni/<?= $r["gambar_al"];?>" style="width:100px;"></td>
                      <td><?= $r["ket_alumni"];?></td>
                      <td><a href="?module=alumni&aksi=editberita&id=<?= $r['id_alumni'];?>" class="btn btn-success btn-flat">Edit</a>
                        <a href="?module=alumni&aksi=hapusberita&id=<?= $r['id_alumni'];?>" class="btn btn-danger btn-flat" onclick="return confirm('Yakin Akan Menghapus Data Ini ... ?')">Hapus</a>
                      </td>
                    </tr>
                    <?php $no++; } ?>
                  </tbody>
              </table>
            </div>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
          </div>
          <!-- /.box -->
     </section>
<?php } ?>

      </div>
