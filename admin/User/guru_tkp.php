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
			move_uploaded_file($lokberkas, "../../img/guru/$nmfoto");
		}

	$save=mysqli_query($con, "INSERT INTO tenaga_kp (nama_guru, foto, jk_g, jabatan_g, alamat_g) VALUES ('$_POST[nama_guru]', '$nmfoto','$_POST[jk_g]', '$_POST[jabatan_g]', '$_POST[alamat_g]' )");

	 if($save) {
        echo "<script>
            alert('Tambah Data Berhasil');
            window.location='?module=guru_tkp';
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
       Guru Dan Karyawan Sekolah
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Karyawan</li>
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
						<label for="kdp" class="col-sm-2 control-label">Nama</label>
					  <div class="col-sm-8">
						<input type="text" name="nama_guru" id="kdp" class="form-control">
					  </div>
					</div>

					<div class="form-group">
						<label for="des" class="col-sm-2 control-label">Jenis Kelamin</label>
					  <div class="col-sm-8">
						<input type="text" name="jk_g" class="form-control" >

					  </div>
					</div>
					
					<div class="form-group">
						<label for="des" class="col-sm-2 control-label">Jabatan</label>
					  <div class="col-sm-8">
						<input type="text" name="jabatan_g"  class="form-control" >

					  </div>
					</div>
					
					<div class="form-group">
						<label for="des" class="col-sm-2 control-label">Alamat Guru</label>
					  <div class="col-sm-8">
						<input type="text" name="alamat_g"  class="form-control" >

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
      $sql = mysqli_query($con, "SELECT * FROM tenaga_kp where id_tkp='$_GET[id]'");
      $data=mysqli_fetch_assoc($sql);
    }
    if(isset($_POST['save'])){
    $judulseo = seo_title($_POST['judul']);
		$nmberkas  = $_FILES['foto']["name"];
		$lokberkas = $_FILES["foto"]["tmp_name"];
		$nmfoto= date("YmdHis").$nmberkas;

    if(empty($lokberkas)){

       $save=mysqli_query($con, "UPDATE tenaga_kp set nama_guru='$_POST[nama_guru]', jk_g='$_POST[jk_g]', jabatan_g='$_POST[jabatan_g]', alamat_g='$_POST[alamat_g]' where id_tkp='$_GET[id]'");

        if($save) {
          echo "<script>
            alert('Edit Data Berhasil');
            window.location='?module=berita';
              </script>";
        }else{
          echo "<script>alert('Gagal');
              </script>";
       }

    }elseif(!empty($lokberkas)){
            list($txt, $ext) = explode(".",$nmfoto);
      
      if(in_array($ext,$valid)){

			move_uploaded_file($lokberkas, "../../img/guru/$nmfoto");
      $lihat = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM tenaga_kp where id_tkp='$_GET[id]'"));

      unlink("../../img/guru/".$lihat['foto']);

      $save=mysqli_query($con, "UPDATE tenaga_kp set nama_guru='$_POST[nama_guru]', jk_g='$_POST[jk_g]', foto='$nmfoto', jabatan_g='$_POST[jabatan_g]', alamat_g='$_POST[alamat_g]' where id_tkp='$_GET[id]'");
      if($save) {
        echo "<script>
            alert('Edit Data Berhasil');
            window.location='?module=guru_tkp';
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
        Guru Dan Karyawan Sekolah
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Karyawan</li>
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
                <div class="form-group">
						<label for="kdp" class="col-sm-2 control-label">Nama</label>
					  <div class="col-sm-8">
						<input type="text" name="nama_guru" id="kdp" class="form-control" value="<?= $data['nama_guru']; ?>">
					  </div>
					</div>

					<div class="form-group">
						<label for="des" class="col-sm-2 control-label">Jenis Kelamin</label>
					  <div class="col-sm-8">
						<input type="text" name="jk_g"  class="form-control" value="<?= $data['jk_g']; ?>">

					  </div>
					</div>
					
					<div class="form-group">
						<label for="des" class="col-sm-2 control-label">Jabatan</label>
					  <div class="col-sm-8">
						<input type="text" name="jabatan_g"  class="form-control" value="<?= $data['jabatan_g']; ?>">

					  </div>
					</div>
					
					<div class="form-group">
						<label for="des" class="col-sm-2 control-label">Alamat Guru</label>
					  <div class="col-sm-8">
						<input type="text" name="alamat_g"  class="form-control" value="<?= $data['alamat_g']; ?>">

					  </div>
					</div>
					
					

                <div class="form-group" >
                  <label for="gam" class="col-sm-2 control-label">Gambar</label>
                  <div class="col-sm-4">
                    <input type="file" name="foto" id="gam" class="form-control">
					          <input type="hidden" name="gambarlama" id="jdl" class="form-control"  value="<?= $data['foto']; ?>">
                  </div>
                </div>

				       <div class="form-group" >
                  <label for="gam" class="col-sm-2 control-label">&nbsp;</label>
				          <div class="col-sm-4">
                    <img src="../../img/guru/<?= $data['foto']; ?>" style="width:250px;">
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
      $lihat = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM tenaga_kp where id_tkp='$_GET[id]'"));

      unlink("../../img/guru/".$lihat['foto']);
      $del = mysqli_query($con, "DELETE FROM tenaga_kp where id_tkp='$_GET[id]'");
      if($del){
    	  echo "<script>
                 alert('Data Berhasil Dihapus');
    					   window.location='index.php?module=guru_tkp';
    				  </script>";
      }else{
        echo "<script>
                alert('Data Gagal Dihapus');
                window.location='index.php?module=guru_tkp';
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
         Guru Dan Karyawan Sekolah
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Guru Dan Karyawan Sekolah</li>
      </ol>
</section>
<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <a href="?module=guru_tkp&aksi=tambahberita" class="btn btn-flat btn-primary">Tambah Karyawan </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table table-responsive">
              <table  class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
					<th>Jabatan</th>
					<th>Alamat</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $be = mysqli_query($con, "SELECT * FROM tenaga_kp ORDER BY id_tkp DESC");
                  $no=1;
                  while($r=mysqli_fetch_assoc($be)){
                    ?>

                    <tr>
                      <td><?= $no; ?></td>
                      <td><img src="../../img/guru/<?= $r["foto"];?>" style="width:100px;"></td>
                      <td><?= $r["nama_guru"];?></td>
                      <td><?= $r["jk_g"];?></td>
					  <td><?= $r["jabatan_g"];?></td>
					  <td><?= $r["alamat_g"];?></td>
                      <td><a href="?module=guru_tkp&aksi=editberita&id=<?= $r['id_tkp'];?>" class="btn btn-success btn-flat">Edit</a>
                        <a href="?module=guru_tkp&aksi=hapusberita&id=<?= $r['id_tkp'];?>" class="btn btn-danger btn-flat" onclick="return confirm('Yakin Akan Menghapus Data Ini ... ?')">Hapus</a>
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
