<div class="content-wrapper">


<?php
  if (isset($_GET['aksi'])){
    $aksi = $_GET['aksi'];

  switch ($aksi){
    case "tambahalbum" :

    if(isset($_POST['save'])){
		
      $save = mysqli_query($con, "INSERT INTO album (album_nama) VALUE ('$_POST[nama]')");

             if($save) {
                  echo "<script>
                      alert('Tambah Data Berhasil');
                      window.location='?module=album';
                      </script>";
              }else{
                echo "<script>alert('Gagal');
                    </script>";
              }
    
    }
?>
<section class="content-header">
      <h1>
        Album
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Album</li>
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
          						<label for="nama" class="col-sm-2 control-label">Nama Album</label>
          					  <div class="col-sm-4">
          						<input type="text" name="nama" id="nama" class="form-control">
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
    case "hapusalbum" :

    if(isset($_GET['id'])){
      $del = mysqli_query($con, "DELETE FROM album where album_id ='$_GET[id]'");

      if($del){
    	  echo "<script>
                 alert('Data Berhasil Dihapus');
    					   window.location='index.php?module=album';
    				  </script>";
      }else{
        echo "<script>
                alert('Data Gagal Dihapus');
                window.location='index.php?module=album';
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
       Album
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Album</li>
      </ol>
</section>
<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <a href="?module=album&aksi=tambahalbum" class="btn btn-flat btn-primary">Tambah Album</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table table-responsive">
              <table  class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Album</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $no = 0;
                    $sql = mysqli_query($con, "SELECT * FROM album");
                    while($r = mysqli_fetch_assoc($sql)){
                      $no++;
                  ?>
                  <tr>
                    <td><?= $no ?></td>
                    <td><?= $r['album_nama'] ?></td>
                    <td>
                      <a href="?module=album&aksi=hapusalbum&id=<?= $r['album_id'];?>" class="btn btn-danger btn-flat" onclick="return confirm('Yakin Akan Menghapus Data Ini?')">Hapus</a>
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
