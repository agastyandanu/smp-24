<?php
  $tentang = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM prestasi"));

  if(isset($_POST['save'])){
    mysqli_query($con, "UPDATE prestasi SET isi_prestasi='$_POST[isi]'");
    echo "<META HTTP-EQUIV='Refresh' Content='0; URL=?module=prestasi'>";
  }
?>
<div class="content-wrapper">
<section class="content-header">
      <h1>
       Prestasi
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Prestasi</li>
      </ol>
</section>
<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form method="POST" class="form-horizontal" action="" enctype="multipart/form-data">
                <div class="box-body">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <div class="col-sm-12">
                        <textarea type="text" name="isi" id="editor" class="form-control"><?= $tentang['isi_prestasi'] ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-4">
                        <button type="submit" name="save" class="btn btn-primary btn-flat">Simpan</button>
                      </div>
                    </div>
                  </div>
                </form>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
          </div>
          <!-- /.box -->
     </section>


      </div>
