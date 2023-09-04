<head>
<link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body>	
	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-left">
				<img src="images/slide-01.jpg" width="1250" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Selamat Datang di <br>Rumah Makan Dapur Nawa	 </strong></h1>							
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="images/slide-02.jpg" alt="">
				<div class="container">
					<div class="row"> 
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Selamat Datang di <br>Rumah Makan Dapur Nawa</strong></h1>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="images/slide-03.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Selamat Datang di <br> Rumah Makan Dapur Nawa</strong></h1>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">							
			<div class="col-lg-12 col-md-3 col-sm-12 text-center">
				<div class="inner-column">
					<div class="parent">
						<h1>Selamat Datang di <span>Dapur Nawa</span></h1>
						<div class="child">
							<p>Rumah makan kami menyajikan hidangan dengan cita rasa lokal dan saus yang khas.</p>
							<p>Grab It Now at Go Food</p>
						</div>
					</div>
				</div>
			</div>

			</div>
		</div>
	</div>


	<!-- Start Gallery -->
	<?php 
	$sql_k = "SELECT `judul`,`isi` FROM `konten` WHERE 
	`id_konten`='3'";
	$query_k = mysqli_query($koneksi,$sql_k);
	while($data_k = mysqli_fetch_row($query_k)){
		$judul_konten = $data_k[0];
		$isi = $data_k[1];
	}
	?>
	<div class="gallery-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Menu Kami</h2>
						<p><?php echo $isi?></p>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="index.php?include=menu">
							<img class="img-fluid" src="images/ayamgorengsaosnawa.jpg" >
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="index.php?include=menu">
							<img class="img-fluid" src="images/ayamsaosinggris.jpg" >
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="index.php?include=menu">
							<img class="img-fluid" src="images/capcaykamarbola.jpg" >
						</a>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="index.php?include=menu">
							<img class="img-fluid" src="images/udangsaosinggris.jpg" >
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="index.php?include=menu">
							<img class="img-fluid" src="images/udangsaossingapur.jpg" >
						</a>
					</div> 
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="index.php?include=menu">
							<img class="img-fluid" src="images/ayamsaosmentega.jpg" >
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->

	<!-- Start Customer Review -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Customer Reviews</h2>
						<p>Kata mereka ....</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">

							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/review-1.jpg" alt="">
								</div>
								<p class="m-0 pt-3">Rumah makan Dapoer Nawa memang dri dlu TOP BANGET, pelayanannya ramah dan menu makanannya enak-enak.
								Ayam saos dan cah sayurnya fresh banget, recomended deh pokoknya guys</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/review-4.jpg" alt="">
								</div>
								<p class="m-0 pt-3">Enak-enak semua, tapi saya paling suka sama fuyunghainya </p>
							</div>
							
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/review-6.jpg" alt="">
								</div>
								<p class="m-0 pt-3">Untuk Makanannya Enak poll asli, harga standart rasa bintang 5🙌</p>
							</div>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Review -->



