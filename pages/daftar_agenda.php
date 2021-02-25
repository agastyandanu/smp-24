<section id="blog" class="blog">
    <div class="container">
        <div class="card-header">AGENDA</div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-8">
                    <?php
                    // $id = $_GET['iddetail'];
                    $perpage = 10;
                    $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                    $start = ($page > 1) ?  ($page * $perpage) - $perpage : 0;

                    $article = "SELECT * FROM agenda ORDER BY id_agenda LIMIT $start, $perpage";
                    $result1 = mysqli_query($con, $article);

                    $sql = mysqli_query($con, "SELECT * FROM agenda");
                    $total = mysqli_num_rows($sql);

                    $pages = ceil($total / $perpage);
                    while ($data = mysqli_fetch_assoc($result1)) {
                    ?>
                        <article class="entry" data-aos="fade-up">
                            <div class="row">
                                <div class="col-lg4 col-sm-4 col-4">
                                    <div class="entry-img">
                                        <img style="height: 300;" width="100%" class="img-fluid" src="img/agenda sekolah/<?= $data['gambar'] ?>" alt="No Image" />
                                    </div>
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8">
                                    <h2 class="entry-title">
                                        <?= $data['judul_agenda'] ?>
                                    </h2>
                                    <div class="entry-content">
                                        <p>
                                            <?= substr($data['isi_agenda'], 0, 100); ?><a href="detail-agenda-<?php echo $data['id_agenda'] ?>.html"> Selengkapnya...</a>
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
                                <li class="<?= ($halaman_sekarang == $i) ? 'active' : '';  ?>"><a href="agenda-halaman-<?= $i ?>.html"><?= $i ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>

                <?php include "components/sidebar.php"; ?>
            </div>
        </div>
    </div>
</section>