	<div class="container" id="content-desktop">

		<div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 size-w-0 m-tb-6 flex-wr-s-c">
				<!-- <span class="text-uppercase cl2 p-r-8">
					VISI :
				</span>

				<span class="dis-inline-block cl6 slide100-txt pos-relative size-w-0" data-in="fadeInDown" data-out="fadeOutDown">

					<span class="dis-inline-block slide100-txt-item animated visible-false text-dark clone fadeInDown visible-true ab-t-l fadeOutDown">
						"Cerdas, Berakhlak Mulia, Berdaya Guna, Dan Peduli Lingkungan"
					</span><span class="dis-inline-block slide100-txt-item animated visible-false text-dark clone fadeInDown visible-true">
						"Cerdas, Berakhlak Mulia, Berdaya Guna, Dan Peduli Lingkungan"
					</span></span> -->
			</div>
			<form action="#" method="POST">
				<div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-2">
					<input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="cari" placeholder="Pencarian">
					<button type="submit" class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
						<i class="zmdi zmdi-search"></i>
					</button>
				</div>
			</form>
		</div>

	</div>

	<div class="container" id="content-mobile">
		<br>
	</div>

	<!-- sliders -->
	<section class="bg0">
		<div class="container">
			<div id="owl-demo" class="owl-carousel owl-theme p-b-20 owl-loaded owl-drag">
				<div class="owl-stage-outer">
					<div class="owl-stage" style="transform: translate3d(-4200px, 0px, 0px); transition: all 0s ease 0s; width: 15750px;">
						<?php
						$ambil = mysqli_query($con, "SELECT * FROM slide");
						while ($r = mysqli_fetch_assoc($ambil)) {
						?>
							<div class="owl-item cloned">
								<div class="item">
									<div class="owl-img bg-img1 size-a-3 how1 pos-relative" style="background-image: url(img/slide/<?= $r['slide_foto'] ?>)">
										<a class="dis-block how1-child1 trans-03" href=""></a>
										<div class="flex-col-e-s s-full p-rl-25 p-tb-24">
											<!-- <a href="" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
												Pendidikan </a> -->
											<!--<h3 class="how1-child2 m-t-14">
												<a href="" class="how-txt1 size-a-7 f1-l-2 cl0 hov-cl10 trans-03" style="background-color: white; border-radius: 5px;">
													<?php echo $r['slide_judul'] ?>
												</a>
											</h3>-->
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="owl-nav disabled">
					<button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span>
					</button>
					<button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span>
					</button>
				</div>
			</div>
		</div>
	</section>

	<!-- Post -->
	<section class="bg0 p-t-70">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-lg-9 col-sm-8">
					<div class="p-b-20">
						<div class="tab01 p-b-20">
							<div class="tab01-head how2 how2-cl4 bocl12 flex-s-c m-r-10 m-r-0-sr991" style="background-color: #43D58C">
								<a href="osim.html">
									<h3 class="f1-m-2 cl4 tab01-title">
										Berita
									</h3>
								</a>
							</div>

							<div class="tab-content p-t-35">
								<div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
									<div class="row">
										<div class="col-sm-12 col-lg-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->
											<div class="m-b-30">
												<div class="p-t-20">
													<div class="text-center">
														<iframe width="100%" height="300" src="https://www.youtube.com/embed/gUXMO6sCUT0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

														<div class="testi_text text-center" style="background-color: #43D58C">
															<p>
																<h4>Profil SMP Negeri 24 Padang</h4>
															</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-12 col-lg-6 p-r-25 p-r-15-sr991">
											<div class="row">
												<?php
												$sql = mysqli_query($con, "SELECT * FROM osim ORDER BY osim_id DESC LIMIT 4");
												$no = 0;
												while ($data = mysqli_fetch_assoc($sql)) {
													$isi = substr($data['osim_isi'], 0, 100);
													$judulberita = substr($data['osim_judul'], 0, 16) . "...";
												?>
													<div class="col-md-12">
														<div class="flex-wr-sb-s m-b-30">
															<a href="berita-osim-<?php echo $data['osim_id'] ?>.html" class="size-w-1 wrap-pic-w hov1 trans-03">
																<img height="60px" src="img/osim/<?= $data['osim_gambar'] ?>" alt="IMG">
															</a>
															<div class="size-w-2">
																<h5 class="p-b-5">
																	<a href="berita-osim-<?php echo $data['osim_id'] ?>.html" style="font-size: 17px;" class="f1-s-5 cl3 hov-cl10 trans-03">
																		<?= $data['osim_judul'] ?></a></a>
																</h5>
																<span class="cl8">
																	<a class="f1-s-6 cl8 hov-cl10 trans-03">
																		<?= tgl_indo($data['osim_tgl']) ?></a>
																</span>
															</div>
														</div>
													</div>
												<?php }
												$no++;
												?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="col-md-3 col-lg-3 col-8 col-sm-4 col-12">
					<div class="p-b-55">
						<div class="how2 how2-cl4 flex-s-c m-b-35" style="background-color: #43D58C">
							<h3 class="f1-m-2 cl4 tab01-title ">
								Kepala Sekolah
							</h3>
						</div>
						<div>
							<div class="wrap-pic-w pos-relative">
								<img src="./img/kepala-sekolah.jpg" class="img-fluid" alt="IMG">
							</div>
							<div class="p-tb-16 p-rl-25 bg3" style="background-color: #43D58C">
								<span class="cl15">
									<span href="" class="f1-s-4 cl8  testi_text text-center">
										<div class="testi_text text-center">
											<h3>Hj. Dwifa Kesuma, S.Pd</h3>
										</div>
										<div class="testi_text text-center">
											<h3>NIP : 196212121984122003</h3>
										</div>
									</span>
								</span>
							</div>
						</div>
					</div>
				</div>


			</div>
		</div>
	</section>


	<section class="bg0 p-t-0 p-b-35">
		<div class="container">
			<div class="row justify-content-center">

				<div class="col-md-10 col-lg-12 p-b-20">

					<div class="tab01 p-b-20">
						<div class="tab01-head how2 how2-cl4 bocl12 flex-s-c m-r-10 m-r-0-sr991" style="background-color: #43D58C">
							<a href="pengumuman.html">
								<h3 class="f1-m-2 cl4 tab01-title">
									Pengumuman
								</h3>
							</a>
						</div>


						<div class="tab-content p-t-35">

							<div class="flex-wr-sb-s m-b-30" id="tab2-1" role="tabpanel">
								<div class="row">
									<?php
									$sql = mysqli_query($con, "SELECT * FROM pengumuman ORDER BY id_pengumuman DESC LIMIT 4");
									while ($data = mysqli_fetch_assoc($sql)) {
									?>
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<div class="flex-wr-sb-s m-b-30">
												<a href="detail-pengumuman-<?php echo $data['id_pengumuman'] ?>.html" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img height="60px" src="img/pengumuman/<?php echo $data['foto_pengumuman'] ?>" alt="IMG">
												</a>
												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="detail-pengumuman-<?php echo $data['id_pengumuman'] ?>.html" style="font-size: 17px;" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?= $data['judul_pengumuman'] ?></a></a>
													</h5>
													<span class="cl8">
														<a class="f1-s-6 cl8 hov-cl10 trans-03">
															<?= tgl_indo($data['tgl_post']) ?></a>
													</span>

												</div>
											</div>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-10 col-lg-12 p-b-20">

					<div class="tab01 p-b-20">
						<div class="tab01-head how2 how2-cl4 bocl12 flex-s-c m-r-10 m-r-0-sr991" style="background-color: #43D58C">
							<a href="agenda.html">
								<h3 class="f1-m-2 cl4 tab01-title">
									Agenda
								</h3>
							</a>
						</div>


						<div class="tab-content p-t-35">

							<div class="flex-wr-sb-s m-b-30" id="tab2-1" role="tabpanel">
								<div class="row">
									<?php
									$sql = mysqli_query($con, "SELECT * FROM agenda ORDER BY id_agenda DESC LIMIT 6");
									while ($data = mysqli_fetch_assoc($sql)) {
										$isi = substr($data['isi_agenda'], 0, 100);
										// var_dump($data);
									?>
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<div class="flex-wr-sb-s m-b-30">
												<a href="detail-agenda-<?php echo $data['id_agenda'] ?>.html" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img height="60px" src="img/agenda sekolah/<?= $data['gambar'] ?>" alt="IMG">
												</a>
												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="detail-agenda-<?php echo $data['id_agenda'] ?>.html" style="font-size: 17px;" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?= $data['judul_agenda'] ?></a></a>
													</h5>
													<span class="cl8">
														<a class="f1-s-6 cl8 hov-cl10 trans-03" style="font-size: 15px;">
															<?= $isi ?>.... </a>
													</span>
												</div>
											</div>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-10 col-lg-12 p-b-20">
					<div class="tab01 p-b-20">
						<div class="tab01-head how2 how2-cl4 bocl12 flex-s-c m-r-10 m-r-0-sr991" style="background-color: #43D58C">
							<a href="#">
								<h3 class="f1-m-2 cl4 tab01-title" style="font-size: 16px; font-family: sans-serif;">
									Video
								</h3>
							</a>

						</div>
						<div class="tab-content p-t-35">
							<div class="tab-pane fade show active" id="tab3-1" role="tabpanel">
								<div class="row mx-auto">
									<?php $sql = mysqli_query($con, "SELECT * FROM video ORDER BY id_video DESC LIMIT 3");
									while ($data = mysqli_fetch_assoc($sql)) { ?>
										<div class="col-md-4">
											<div class="text-center">
												<iframe width="100%" height="300" src="<?= $data['link_v'] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
												<div class="testi_text text-center">
													<p>
														<h4><?= $data['ket'] ?></h4>
													</p>
												</div>
											</div>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>