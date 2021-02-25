	<script type="text/javascript" async="" src="./assets/init.js.download"></script>
	<footer>
		<div class="bg2 p-t-40 p-b-25" style="background-color: #43D58C">
			<div class="container">
				<div class="row mb-4">
					<div class="col-lg-6 p-b-20">
						<div>
							<p class="cl11 text-white" style="font-size:20px">
								<b>SMP NEGERI 24 PADANG</b>
							</p>
							<br>
							<p class=" cl11">
								Alamat: Jl. By Pass Lubuk Begalung, Padang, Sumatera Barat
							</p>
							<p class=" cl11">
								Telepon: 0751-72245
							</p>
							<p class=" cl11">
								Email: smpn24.pdg@gmail.com
							</p>
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 mt-4 mt-md-0 p-b-20">
						<p class="cl11 text-white" style="font-size:20px">
							<b>MAPS</b>
						</p>
						<ul class="mt-4">
							<li class="flex-wr-sb-s p-b-20">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.2591902185027!2d100.40085431409955!3d-0.9592296356257959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4ba2cd220b3df%3A0x2cf43a3d3912b76a!2sSMP%20Negeri%2024%20Padang!5e0!3m2!1sid!2sid!4v1608614982894!5m2!1sid!2sid" width="600" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="bg11">
			<div class="container size-h-5 flex-c-c p-tb-15">
				<div class="copyright">
					&copy; 2020 Designed <strong><a href="https://www.instagram.com/mediatamaweb/">CV Mediatama Web </a></strong><strong><a href="https://www.instagram.com/syahroel_712/" target="_blank"></a></strong>
				</div>
			</div>
		</div>
	</footer>


	<script src="./assets/jquery-3.4.1.min.js.download" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="./assets/popper.js.download"></script>
	<script src="./assets/bootstrap.min.js.download" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
	<script src="./assets/main.js.download"></script>
	<script src="./assets/owl.carousel.min.js.download"></script>
	<script src="./assets/lightbox.js.download"></script>
	<!-- <script type="text/javascript" src="admin-man/assets/js/datatables.min.js"></script> -->
	<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>



	<script type="text/javascript">
		$(document).ready(function() {

			$("#owl-demo").owlCarousel({
				items: 1,
				loop: true,
				singleItem: true,
				slideSpeed: 300,
				paginationSpeed: 400,
				autoplay: true,
				autoplay: true,
				autoplayTimeout: 5000,
				autoplayHoverPause: true,
				animateOut: 'fadeOut'

			});

		});



		lightbox.option({
			'resizeDuration': 200,
			'wrapAround': true
		})

		$('#example2').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": true,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"bInfo": false,
		});
		$('#example3').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": true,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"bInfo": false,
			"columnDefs": [{
				"width": "40%",
				"targets": 1
			}, {
				"width": "40%",
				"targets": 2
			}, {
				"width": "20%",
				"targets": 3
			}]
		});
	</script>

	<!-- WhatsHelp.io widget -->
	<!-- <script type="text/javascript">
		(function() {
			var options = {
				whatsapp: '',
				//whatsapp: "+6281363020310", // WhatsApp number
				email: "smkn2_padang@yahoo.co.id", // Email
				call_to_action: "Hubungi Kami", // Call to action
				button_color: "#E74339", // Color of button
				position: "left", // Position may be 'right' or 'left'
				order: "whatsapp,email", // Order of buttons
			};
			var proto = document.location.protocol,
				host = "getbutton.io",
				url = proto + "//static." + host;
			var s = document.createElement('script');
			s.type = 'text/javascript';
			s.async = true;
			s.src = url + '/widget-send-button/js/init.js';
			s.onload = function() {
				WhWidgetSendButton.init(host, proto, options);
			};
			var x = document.getElementsByTagName('script')[0];
			x.parentNode.insertBefore(s, x);
		})();
	</script> -->
	<!-- /WhatsHelp.io widget -->