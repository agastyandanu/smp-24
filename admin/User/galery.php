<div class="content-wrapper">
<?php
  if (isset($_GET['aksi'])){
    $aksi = $_GET['aksi'];

  switch ($aksi){
    case "tambahpartner" :

    if(isset($_POST['save'])){
		$nmberkas  = $_FILES["foto"]["name"];
		$lokberkas = $_FILES["foto"]["tmp_name"];
		$nmfoto= $nmberkas;

     $valid    = array('jpg','png','gif','jpeg');
    list($txt, $ext) = explode(".",$nmfoto);
    if(in_array($ext,$valid)){

		if(!empty($lokberkas)){
			move_uploaded_file($lokberkas, "../../img/galery/$nmfoto");
		}

		$save=mysqli_query($con, "INSERT INTO galeri (nama_galeri, album_id, foto) VALUE ('$_POST[nama]', '$_POST[album]', '$nmfoto')");

	 if($save) {
        echo "<script>
            alert('Tambah Data Berhasil');
            window.location='?module=galery';
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
?>
<section class="content-header">
      <h1>
        Gallery
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Foto</li>
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
            <label for="" class="col-sm-2 control-label">Album</label>
            <div class="col-sm-4">
              <select class="form-control" name="album" id="">
              <option value="">-- Pilih Album --</option>
              <?php 
                $qr = $con->query("SELECT * FROM album");
                while ($album = $qr->fetch_assoc()) {              
              ?>
                <option value="<?php echo $album['album_id'] ?>"><?php echo $album['album_nama'] ?></option>
              <?php } ?>
            </select>
            </div>
          </div>

					<div class="form-group">
						<label for="nama" class="col-sm-2 control-label">Keterangan</label>
					  <div class="col-sm-4">
						<input type="text" name="nama" id="nama" class="form-control">
					  </div>
					</div>

					<div class="form-group">
						<label for="foto" class="col-sm-2 control-label">Foto</label>
					  <div class="col-sm-4">
						<input type="file" name="foto" id="foto" class="form-control">*Max 2 MB<br>*Foto Landscape
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
    case "hapuspartner" :

    if(isset($_GET['id'])){
      $lihat = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM galeri where id_galeri='$_GET[id]'"));

      unlink("../../img/galery/".$lihat['foto']);
      $del = mysqli_query($con, "DELETE FROM galeri where id_galeri='$_GET[id]'");
      if($del){
    	  echo "<script>
                 alert('Data Berhasil Dihapus');
    					   window.location='index.php?module=galery';
    				  </script>";
      }else{
        echo "<script>
                alert('Data Gagal Dihapus');
                window.location='index.php?module=galery';
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
       Gallery
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Gallery</li>
      </ol>
</section>
<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <a href="?module=galery&aksi=tambahpartner" class="btn btn-flat btn-primary">Tambah Foto</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table table-responsive">
              <table  class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Album</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $no = 0;
                    $sql = mysqli_query($con, "SELECT * FROM galeri a LEFT JOIN album b ON a.album_id = b.album_id ORDER BY id_galeri DESC ");
                    while($r = mysqli_fetch_assoc($sql)){
                      $no++;
                  ?>
                  <tr>
                    <td><?= $no ?></td>
                    <td><?= $r['album_nama'] ?></td>
                    <td><img src="../../img/galery/<?= $r['foto'] ?>" width=100 height=100></td>
                    <td>
                      <a href="?module=galery&aksi=hapuspartner&id=<?= $r['id_galeri'];?>" class="btn btn-danger btn-flat" onclick="return confirm('Yakin Akan Menghapus Data Ini ... ?')">Hapus</a>
                    </td>
                  <?php } ?>
                  </tr>
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
