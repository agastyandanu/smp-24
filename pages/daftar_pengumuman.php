<section id="blog" class="blog">
    <div class="container">
        <div class="card-header">PENGUMUMAN</div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-8">

                    <?php
                    $perpage = 10;
                    $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                    $start = ($page > 1) ?  ($page * $perpage) - $perpage : 0;

                    $article = "SELECT * FROM pengumuman ORDER BY id_pengumuman DESC LIMIT $start, $perpage";
                    $result1 = mysqli_query($con, $article);

                    $sql = mysqli_query($con, "SELECT * FROM pengumuman");
                    $total = mysqli_num_rows($sql);

                    $pages = ceil($total / $perpage);
                    while ($data = mysqli_fetch_assoc($result1)) {
                    ?>
                        <article class="entry" data-aos="fade-up">
                            <div class="row">
                                <div class="col-lg4 col-sm-4 col-4">
                                    <div class="entry-img">
                                        <img style="height: 500;" width="600" class="img-fluid" src="img/pengumuman/<?php echo $data['foto_pengumuman'] ?>" alt="No Image" />
                                    </div>
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8">
                                    <h4 class="entry-title">
                                        <?= $data['judul_pengumuman'] ?>
                                    </h4>
                                    <div class="entry-content">
                                        <p>
                                            <?= substr($data['isi_pengumuman'], 0, 100); ?><a href="detail-pengumuman-<?php echo $data['id_pengumuman'] ?>.html"> Selengkapnya...</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </article><!-- End blog entry -->
                    <?php } ?>


                    <div class="blog-pagination">
                        <ul class="justify-content-center">
                            <li class="disabled"><i class="icofont-rounded-left"></i></li>
                            <?php
                            $halaman_sekarang = 1;
                            if (!empty($_GET['halaman'])) {
                                $halaman_sekarang = $_GET['halaman'];
                            }
                            for ($i = 1; $i <= $pages; $i++) { ?>
                                <li class="<?= ($halaman_sekarang == $i) ? 'active' : '';  ?>"><a href="pengumuman-halaman-<?= $i ?>.html"><?= $i ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>

                <?php include "components/sidebar.php"; ?>
            </div>
        </div>
    </div>
</section>