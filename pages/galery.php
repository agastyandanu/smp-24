<?php
$perpage = 10;
$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
$start = ($page > 1) ?  ($page * $perpage) - $perpage : 0;

$id = $_GET['id'];
$article = "SELECT * FROM galeri  WHERE album_id = '$id' LIMIT $start, $perpage";
$result1 = mysqli_query($con, $article);

$sql = mysqli_query($con, "SELECT * FROM galeri WHERE album_id = '$id' ");
$total = mysqli_num_rows($sql);
?>

<section id="blog" class="blog">
    <div class="container">
        <div class="card-header">GALERI</div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-8">

                    <article class="entry" data-aos="fade-up">
                        <div class="row">
                            <?php
                            // $id = $_GET['iddetail'];
                            $pages = ceil($total / $perpage);
                            while ($data = mysqli_fetch_assoc($result1)) {
                            ?>
                                <div class="col-lg-6 col-sm-6 col-12 mb-5">
                                    <div class="images">
                                        <img style="height: 250px; width: 100%;" class="img-fluid" src="img/galery/<?= $data['foto'] ?>" alt="No Image" />
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </article><!-- End blog entry -->

                    <div class="blog-pagination">
                        <ul class="justify-content-center">
                            <li class="disabled"><i class="icofont-rounded-left"></i></li>
                            <?php
                            $halaman_sekarang = 1;
                            if (!empty($_GET['halaman'])) {
                                $halaman_sekarang = $_GET['halaman'];
                            }
                            for ($i = 1; $i < $pages; $i++) { ?>
                                <li class="<?= ($halaman_sekarang == $i) ? 'active' : '';  ?>"><a href="galery-halaman-<?= $i ?>.html"><?= $i ?></a></li>
                            <?php } ?>
                            <!-- <li><a href="#"><i class="fas fa-arrow-right"></i></a></li> -->
                        </ul>
                    </div>
                </div>

                <?php include "components/sidebar.php"; ?>
            </div>
        </div>
    </div>
</section>