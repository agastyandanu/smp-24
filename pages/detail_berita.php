<section id="blog" class="blog">
    <div class="container">
        <div class="card-body">
            <div class="row">
                <?php
                $id = $_GET['iddetail'];
                $sql = mysqli_query($con, "SELECT * FROM berita WHERE id_berita='$id'");
                $data = mysqli_fetch_assoc($sql);
                ?>
                <div class="col-lg-8 col-sm-8">
                    <article class="entry" data-aos="fade-up">
                        <div class="entry-img">
                            <img style="height: 600;" width="700" class="img-fluid" src="img/berita/<?= $data['gambar'] ?>" alt="No Image" />
                        </div>

                        <h2 class="entry-title">
                            <?= $data['judul_berita'] ?>
                        </h2>
                        <div class="entry-meta">
                            <ul>
                                <div class="meta">
                                    <h5><span class="author">Posted in : <a href="#"><?= tgl_indo($data['tgl_post']) ?></a></span></h5>
                                </div>
                            </ul>
                        </div>
                        <br>
                        <div class="entry-content">
                            <p>
                                <?= $data['isi_berita'] ?>
                            </p>
                        </div>
                    </article><!-- End blog entry -->

                </div>


                <div class="col-lg-4">
                    <div class="sidebar" data-aos="fade-left">
                        <h3 class="sidebar-title">Search</h3>
                        <div class="sidebar-item search-form">
                            <form action="">
                                <input type="text">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div><!-- End sidebar search formn-->

                        <!-- End sidebar categories-->

                        <h3 class="sidebar-title">Pengumuman</h3>
                        <?php $sql = mysqli_query($con, "SELECT * FROM pengumuman ORDER BY id_pengumuman DESC LIMIT 1");
                        while ($data = mysqli_fetch_assoc($sql)) { ?>
                            <div class="sidebar-item recent-posts">
                                <div class="post-item clearfix">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-4 col-4 mb-2">
                                            <img class="img-fluid" src="assets/pengumuman.jpg" alt="No Image" style="width: 100%; height: 60px;" />
                                        </div>
                                        <div class="col-lg-8 col-sm-8 col-8 mb-2">
                                            <h4><a href="?page=pages/detail_pengumuman&idpengumuman=<?php echo $data['id_pengumuman'] ?>"><?= substr($data['judul_pengumuman'], 0, 40); ?>...</a></h4>
                                        </div>
                                    </div><!-- End sidebar recent posts-->

                                </div>
                            </div><!-- End sidebar -->
                        <?php } ?>

                        <h3 class="sidebar-title">Recent Berita</h3>
                        <?php $sql = mysqli_query($con, "SELECT * FROM berita ORDER BY id_berita DESC LIMIT 2");
                        while ($data = mysqli_fetch_assoc($sql)) { ?>
                            <div class="sidebar-item recent-posts">
                                <div class="post-item clearfix">
                                    <div class="row">
                                        <div class="col-lg-4  col-sm-4 col-4 mb-2">
                                            <img class="img-fluid" src="img/berita/<?= $data['gambar'] ?>" alt="No Image" style="width: 100%; height: 60px;" />
                                        </div>
                                        <div class="col-lg-8  col-sm-8 col-8 mb-2">
                                            <h4><a href="?page=pages/detail_berita&iddetail=<?php echo $data['id_berita'] ?>"><?= substr($data['judul_berita'], 0, 40); ?>...</a></h4>
                                        </div>
                                    </div><!-- End sidebar recent posts-->

                                </div>
                            </div><!-- End sidebar -->
                        <?php } ?>
                        <br>
                        <h3 class="sidebar-title">Recent Agenda</h3>
                        <?php $sql = mysqli_query($con, "SELECT * FROM agenda ORDER BY id_agenda DESC LIMIT 2");
                        while ($data = mysqli_fetch_assoc($sql)) { ?>
                            <div class="sidebar-item recent-posts">
                                <div class="post-item clearfix">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-4 col-4 mb-2">
                                            <img class="img-fluid" src="img/agenda sekolah/<?= $data['gambar'] ?>" alt="No Image" style="width: 100%; height: 60px;" />
                                        </div>
                                        <div class="col-lg-8 col-sm-8 col-8 mb-2">
                                            <h4><a href="?page=pages/detail_agenda&idagenda=<?php echo $data['id_agenda'] ?>"><?= substr($data['judul_agenda'], 0, 40); ?>...</a></h4>
                                        </div>
                                    </div><!-- End sidebar recent posts-->

                                </div>
                            </div><!-- End sidebar -->
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>