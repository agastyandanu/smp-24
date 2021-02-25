<div class="col-lg-4">
    <div class="sidebar" data-aos="fade-left">
        <!-- <h3 class="sidebar-title" style="border-radius: 4px;">
            <div style="padding:10px;">
                Search
            </div>
        </h3>
        <div class="sidebar-item search-form">
            <form action="">
                <input type="text">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div> -->
        <!-- <hr> -->
        <!-- End sidebar search formn-->
        <!-- End sidebar categories-->
        <h3 class="sidebar-title" style="border-radius: 4px;">
            <div style="padding: 10px;">
                Pengumuman
            </div>
        </h3>
        <?php $sql = mysqli_query($con, "SELECT * FROM pengumuman ORDER BY id_pengumuman DESC LIMIT 3");
        while ($data = mysqli_fetch_assoc($sql)) { ?>
            <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                    <div class="row">
                        <div class="col-lg-4 col-sm-4 col-4 mb-2">
                            <img class="img-fluid" src="img/pengumuman/<?php echo $data['foto_pengumuman'] ?>" alt="No Image" style="width: 100%; height: 60px; border-radius:5px" />
                        </div>
                        <div class="col-lg-8 col-sm-8 col-8 mb-2">
                            <h4><a href="detail-pengumuman-<?php echo $data['id_pengumuman'] ?>.html"><?= substr($data['judul_pengumuman'], 0, 40); ?>...</a></h4>
                        </div>
                    </div><!-- End sidebar recent posts-->
                </div>
            </div><!-- End sidebar -->
        <?php } ?>
        <hr>

        <h3 class="sidebar-title" style="border-radius: 4px;">
            <div style="padding: 10px;">
                Berita Terbaru
            </div>
        </h3>
        <?php $sql = mysqli_query($con, "SELECT * FROM osim ORDER BY osim_id DESC LIMIT 3");
        while ($data = mysqli_fetch_assoc($sql)) { ?>
            <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                    <div class="row">
                        <div class="col-lg-4  col-sm-4 col-4 mb-2">
                            <img class="img-fluid" src="img/osim/<?= $data['osim_gambar'] ?>" alt="No Image" style="width: 100%; height: 60px; border-radius:5px" />
                        </div>
                        <div class="col-lg-8  col-sm-8 col-8 mb-2">
                            <h4><a href="berita-osim-<?php echo $data['osim_id'] ?>.html"><?= substr($data['osim_judul'], 0, 40); ?>...</a></h4>
                        </div>
                    </div><!-- End sidebar recent posts-->

                </div>
            </div><!-- End sidebar -->
        <?php } ?>
        <hr>


        <h3 class="sidebar-title" style="border-radius: 4px;">
            <div style="padding: 10px;">
                Agenda Terbaru
            </div>
        </h3>
        <?php $sql = mysqli_query($con, "SELECT * FROM agenda ORDER BY id_agenda DESC LIMIT 3");
        while ($data = mysqli_fetch_assoc($sql)) { ?>
            <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                    <div class="row">
                        <div class="col-lg-4 col-sm-4 col-4 mb-2">
                            <img class="img-fluid" src="img/agenda sekolah/<?= $data['gambar'] ?>" alt="No Image" style="width: 100%; height: 60px; border-radius: 5px;" />
                        </div>
                        <div class="col-lg-8 col-sm-8 col-8 mb-2">
                            <h4><a href="detail-agenda-<?php echo $data['id_agenda'] ?>.html"><?= substr($data['judul_agenda'], 0, 40); ?>...</a></h4>
                        </div>
                    </div><!-- End sidebar recent posts-->

                </div>
            </div><!-- End sidebar -->
        <?php } ?>

    </div>
</div>