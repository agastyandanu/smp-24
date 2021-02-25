<header>
	<div class="container-menu-desktop">
		<div class="topbar" style="background-color: #43D58C;">
			<div class="content-topbar container h-100">
				<div class="left-topbar ">
					<span class="left-topbar-item flex-wr-s-c" style="font-size: 17px;">
						<span>
							<i class="fa fa-envelope text-light" aria-hidden="true"></i> <a class="text-light">smpn24.pdg@gmail.com</a>
						</span>
					</span>
					<span class="left-topbar-item flex-wr-s-c" style="font-size: 17px;">
						<span>
							<i class="fa fa-phone text-light" aria-hidden="true"></i> <a class="text-light">0751-72245</a>
						</span>
					</span>
				</div>
			</div>
		</div>
		<div class="wrap-header-mobile">
			<div class="logo-mobile">
				<a href="index.php"><img src="img/head1.png" alt="IMG-LOGO"></a>
			</div>
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>
		<!-- menu mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li class="left-topbar">
					<span class="left-topbar-item flex-wr-s-c">
						<span>
							<i class="fa fa-envelope" aria-hidden="true"></i>smpn24.pdg@gmail.com
						</span>
					</span>
					<span class="left-topbar-item flex-wr-s-c">
						<span>
							<i class="fa fa-phone" aria-hidden="true"></i> 0751-72245
						</span>
					</span>
				</li>
				<li class="left-topbar">
					<!-- <a href="" class="left-topbar-item">
						About
					</a> -->
				</li>
			</ul>
			<ul class="main-menu-m" style="background-color: #43D58C">
				<li style="background-color: #43D58C">
					<a href="home.html">Home</a>
				</li>
				<li style="background-color: #43D58C">
					<a href="">Profil</a>
					<ul class="sub-menu-m">
						<?php
						$ambil = mysqli_query($con, "SELECT * FROM profil");
						$no = 1;
						while ($pecah = mysqli_fetch_assoc($ambil)) {
						?>
							<li><a href="profil-sekolah-<?= $pecah['profil_id'] ?>-<?= $pecah['profil_menu_seo'] ?>.html"><?php echo $pecah['profil_menu'] ?></a></li>
						<?php } ?>
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>
				<!-- <li style="background-color: #43D58C">
					<a href="">PPID</a>
					<ul class="sub-menu-m">
						<?php
						$ambil = mysqli_query($con, "SELECT * FROM ppid");
						$no = 1;
						while ($pecah = mysqli_fetch_assoc($ambil)) {
						?>
							<li><a href="ppid-<?= $pecah['ppid_id'] ?>-<?= $pecah['ppid_menu_seo'] ?>.html"><?php echo $pecah['ppid_menu'] ?></a></li>
						<?php } ?>
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li> -->
				<li style="background-color: #43D58C">
					<a href="pengumuman.html">Pengumuman</a>
				</li>

				<li style="background-color: #43D58C">
					<a href="agenda.html">Agenda</a>
				</li>
				<li style="background-color: #43D58C">
					<a href="osim.html">Berita</a>
				</li>
				<li style="background-color: #43D58C">
					<a href="guru.html">Guru</a>
					<ul class="sub-menu-m">
						<li><a href="guru.html">Direktori Guru</a></li>
						<li><a href="kalender.html">Kalendar Akademik</a></li>
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>
				<li style="background-color: #43D58C">
					<a href="galery-album.html">Galeri</a>
				</li>
				<li style="background-color: #43D58C">
					<a href="download.html">Download</a>
				</li>
<!-- 				<li style="background-color: #43D58C">
					<a href="http://www.ppdb.mankopar.sch.id" target="_blank">PPDB</a>
				</li> -->
			</ul>
		</div>
		<div class="wrap-logo no-banner container">
			<div class="logo">
				<a href="index.php"><img src="img/head1.png" style="width:450px;height: 106px" alt="LOGO"></a>
			</div>
		</div>
		<!-- menu website -->
		<div class="wrap-main-nav">
			<div class="main-nav show-main-nav">
				<nav class="menu-desktop">
					<a class="logo-stick" href="index.php">
						<img src="img/logo.png" alt="LOGO">
					</a>
					<ul class="main-menu justify-content-center">
						<li class="main-menu">
							<a href="home.html" style="font-size: 17px;">Home</a>
						</li>
						<li class="main-menu">
							<a href="" style="font-size: 17px;">Profil</a>
							<ul class="sub-menu">
								<?php
								$ambil = mysqli_query($con, "SELECT * FROM profil");
								$no = 1;
								while ($pecah = mysqli_fetch_assoc($ambil)) {
								?>
									<li><a href="profil-sekolah-<?= $pecah['profil_id'] ?>-<?= $pecah['profil_menu_seo'] ?>.html" style="font-size: 17px;"><?php echo $pecah['profil_menu'] ?></a></li>
								<?php } ?>
							</ul>
						</li>
			
						
						<li class="mega-menu-item">
							<a href="pengumuman.html" style="font-size: 17px;">Pengumuman</a>
							<div class="sub-mega-menu">
								<div class="nav flex-column nav-pills" role="tablist">
									<a class="nav-link active" data-toggle="pill" href="" role="tab" style="background-color: #43D58C; font-size: 17px;">Pengumuman Terbaru</a>
								</div>
								<div class="tab-content">
									<div class="tab-pane show active" id="business-1" role="tabpanel">
										<div class="row">
											<!-- Item post -->
											<?php $sql = mysqli_query($con, "SELECT * FROM pengumuman ORDER BY id_pengumuman DESC LIMIT 4");
											while ($data = mysqli_fetch_assoc($sql)) { ?>
												<div class="col-3">
													<div>
														<a href="detail-pengumuman-<?php echo $data['id_pengumuman'] ?>.html" class="wrap-pic-w hov1 trans-03">
															<img src="img/pengumuman/<?php echo $data['foto_pengumuman'] ?>" alt="IMG" height="80px">
														</a>
														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="detail-pengumuman-<?php echo $data['id_pengumuman'] ?>.html" style="font-size: 17px;" class="f1-s-5 cl3 hov-cl10 trans-03">
																	<?= $data['judul_pengumuman'] ?></a>
															</h5>
														</div>
													</div>
												</div>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</li>

						<li class="mega-menu-item">
							<a href="agenda.html" style="font-size: 17px;">Agenda</a>
							<div class="sub-mega-menu">
								<div class="nav flex-column nav-pills" role="tablist">
									<a class="nav-link active" style="background-color: #43D58C;" data-toggle="pill" href="" role="tab" style="font-size: 17px;">Agenda Terbaru</a>
								</div>
								<div class="tab-content">
									<div class="tab-pane show active" id="business-1" role="tabpanel">
										<div class="row">

											<?php $sql = mysqli_query($con, "SELECT * FROM agenda ORDER BY id_agenda DESC LIMIT 4");
											while ($data = mysqli_fetch_assoc($sql)) { ?>
												<div class="col-3">

													<div>
														<a href="detail-agenda-<?php echo $data['id_agenda'] ?>.html" class="wrap-pic-w hov1 trans-03">
															<img height="80px" class="f1-s-5 cl3 hov-cl10 trans-03" src="img/agenda sekolah/<?= $data['gambar'] ?>" alt="No Image" />
														</a>
														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="detail-agenda-<?php echo $data['id_agenda'] ?>.html" style="font-size: 17px;" class="f1-s-5 cl3 hov-cl10 trans-03">
																	<?= $data['judul_agenda'] ?> </a>
															</h5>
														</div>
													</div>
												</div>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</li>

						<li class="mega-menu-item">
							<a href="osim.html" style="font-size: 17px;">Berita</a>
							<div class="sub-mega-menu">
								<div class="nav flex-column nav-pills" role="tablist">
									<a class="nav-link active" data-toggle="pill" href="" role="tab" style="background-color: #43D58C; font-size: 17px;">Berita Terbaru</a>
								</div>
								<div class="tab-content">
									<div class="tab-pane show active" id="business-1" role="tabpanel">
										<div class="row">
											<!-- Item post -->
											<?php $sql = mysqli_query($con, "SELECT * FROM osim ORDER BY osim_id DESC LIMIT 4");
											while ($data = mysqli_fetch_assoc($sql)) { ?>
												<div class="col-3">
													<div>
														<a href="berita-osim-<?php echo $data['osim_id'] ?>.html" class="wrap-pic-w hov1 trans-03">
															<img src="img/osim/<?= $data['osim_gambar'] ?>" alt="IMG" height="80px">
														</a>
														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="berita-osim-<?php echo $data['osim_id'] ?>.html" style="font-size: 17px;" class="f1-s-5 cl3 hov-cl10 trans-03">
																	<?= $data['osim_judul'] ?></a>
															</h5>
														</div>
													</div>
												</div>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</li>

						<li class="main-menu">
							<a href="guru.html" style="font-size: 17px;">Guru</a>
							<ul class="sub-menu">
								<li><a href="guru.html" style="font-size: 17px;">Direktori Guru</a></li>
								<!--<li><a href="kalender.html">Kalendar Akademik</a>
								</li>-->
							</ul>
						</li>

						<li class="main-menu">
							<a href="galery-album.html" style="font-size: 17px;">Galeri</a>
						</li>
						<li class="main-menu">
							<a href="download.html" style="font-size: 17px;">Download</a>
						</li>
						<!-- <li class="main-menu">
							<a href="http://www.ppdb.mankopar.sch.id" target="_blank">PPDB</a>
						</li> -->
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>