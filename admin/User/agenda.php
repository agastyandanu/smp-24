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
    			move_uploaded_file($lokberkas, "../../img/agenda sekolah/$nmfoto");
    		}

    	$save=mysqli_query($con, "INSERT INTO agenda (judul_agenda, tgl_postagen, isi_agenda, gambar) VALUE ('$_POST[judul]','$tglskrg', '$_POST[deskripsi]' , '$nmfoto')");

    	 if($save) {
            echo "<script>
                alert('Tambah Data Berhasil');
                window.location='?module=agenda';
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
        Agenda Sekolah
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Agenda</li>
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
						<label for="kdp" class="col-sm-2 control-label">Judul</label>
					  <div class="col-sm-8">
						<input type="text" name="judul" id="kdp" class="form-control">
					  </div>
					</div>

					<div class="form-group">
						<label for="des" class="col-sm-2 control-label">Deskripsi</label>
					  <div class="col-sm-8">
						<textarea type="text" name="deskripsi" id="editor" class="form-control" rows="15" cols="80"></textarea>

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
      $sql = mysqli_query($con, "SELECT * FROM agenda where id_agenda='$_GET[id]'");
      $data=mysqli_fetch_assoc($sql);
    }
    if(isset($_POST['save'])){
    $judulseo = seo_title($_POST['judul']);
		$nmberkas  = $_FILES['foto']["name"];
		$lokberkas = $_FILES["foto"]["tmp_name"];
		$nmfoto= date("YmdHis").$nmberkas;
    $valid    = array('jpg','png','gif','jpeg');

    if(empty($lokberkas)){
         $save=mysqli_query($con, "UPDATE agenda set judul_agenda='$_POST[judul]', isi_agenda='$_POST[deskripsi]' where id_agenda='$_GET[id]'");

       if($save) {
        echo "<script>
            alert('Edit Data Berhasil');
            window.location='?module=agenda';
              </script>";
        }else{
          echo "<script>alert('Gagal');
              </script>";
       }

		}else if(!empty($lokberkas)){
      list($txt, $ext) = explode(".",$nmfoto);
      
      if(in_array($ext,$valid)){
			move_uploaded_file($lokberkas, "../../img/agenda sekolah/$nmfoto");
      $lihat = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM agenda where id_agenda='$_GET[id]'"));

      unlink("../../img/agenda sekolah/".$lihat['gambar']);
		
      $save=mysqli_query($con, "UPDATE agenda set judul_agenda='$_POST[judul]', isi_agenda='$_POST[deskripsi]', gambar='$nmfoto' where id_agenda='$_GET[id]'");
      if($save) {
        echo "<script>
            alert('Edit Data Berhasil');
            window.location='?module=agenda';
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
        Agenda Sekolah
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Agenda</li>
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
                  <label for="jdl" class="col-sm-2 control-label">Judul</label>
                  <div class="col-sm-10">
                    <input type="text" name="judul" id="jdl" class="form-control"  value="<?= $data['judul_agenda']; ?>">
                  </div>
                </div>

				        <div class="form-group" >
                  <label for="des" class="col-sm-2 control-label">Deskripsi</label>
                  <div class="col-sm-10">
                    <textarea type="text" name="deskripsi" id="editor" class="form-control" rows="15" cols="80"><?= $data['isi_agenda']; ?></textarea>
                  </div>
                </div>

                <div class="form-group" >
                  <label for="gam" class="col-sm-2 control-label">Gambar</label>
                  <div class="col-sm-4">
                    <input type="file" name="foto" id="gam" class="form-control">
					          <input type="hidden" name="gambarlama" id="jdl" class="form-control"  value="<?= $data['gambar']; ?>">
                  </div>
                </div>

				       <div class="form-group" >
                  <label for="gam" class="col-sm-2 control-label">&nbsp;</label>
				          <div class="col-sm-4">
                    <img src="../../img/agenda sekolah/<?= $data['gambar']; ?>" style="width:250px;">
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
      $lihat = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM agenda where id_agenda='$_GET[id]'"));

      unlink("../../img/agenda sekolah/".$lihat['gambar']);
      $del = mysqli_query($con, "DELETE FROM agenda where id_agenda='$_GET[id]'");
      if($del){
    	  echo "<script>
                 alert('Data Berhasil Dihapus');
    					   window.location='index.php?module=agenda';
    				  </script>";
      }else{
        echo "<script>
                alert('Data Gagal Dihapus');
                window.location='index.php?module=agenda';
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
        Agenda Sekolah
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Agenda Sekolah</li>
      </ol>
</section>
<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <a href="?module=agenda&aksi=tambahberita" class="btn btn-flat btn-primary">Tambah Agenda </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table table-responsive">
              <table  class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $be = mysqli_query($con, "SELECT * FROM agenda ORDER BY tgl_postagen DESC");
                  $no=1;
                  while($r=mysqli_fetch_assoc($be)){
                    $des = substr($r['isi_agenda'],0,50)."...";
                    ?>

                    <tr>
                      <td><?= $no; ?></td>
                      <td><img src="../../img/agenda sekolah/<?= $r["gambar"];?>" style="width:100px;"></td>
                      <td><?= $r["judul_agenda"];?></td>
                      <td><?= $des;?></td>
                      <td><a href="?module=agenda&aksi=editberita&id=<?= $r['id_agenda'];?>" class="btn btn-success btn-flat">Edit</a>
                        <a href="?module=agenda&aksi=hapusberita&id=<?= $r['id_agenda'];?>" class="btn btn-danger btn-flat" onclick="return confirm('Yakin Akan Menghapus Data Ini ... ?')">Hapus</a>
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
