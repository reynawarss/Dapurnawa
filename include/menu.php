<head>
<link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<!-- Start slides -->
<div id="slides" class="cover-slides">
	<ul class="slides-container">
		<img src="images/2_3.jpg" alt="">
		<img src="images/2.jpg" alt="">
	</ul>
</div>
<!-- End slides -->

<!-- Favourite Menu Section -->
<div class="menu-box">
	<div class="row">
		<div class="col-lg-12">
			<div class="heading-title text-center">
				<h2>Menu Populer</h2>
			</div>
		</div>
	</div>
<section class="popular" id="popular">
<h1 class="heading">Menu <span>Populer</span></h1>
<div class="box-container">
	<div class="box">
		<span class="price">Rp.12000 </span>
		<img src="images/nasibulgogi.jpg" >
		<h3>Nasi Goreng Bulgogi</h3>
		<div class="stars">
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="far fa-star"></i>
		</div>
		
	</div>
	<div class="box">
		<span class="price">Rp.22000 </span>
		<img src="images/capcaykamarbola.jpg" >
		<h3>Capcay Kamar Bola</h3>
		<div class="stars">
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="far fa-star"></i>
		</div>
	</div>
	<div class="box">
		<span class="price">Rp.20000 </span>
		<img src="images/ayamgorengsaosnawa.jpg" >
		<h3>Ayam Soas Dapoer Nawa</h3>
		<div class="stars">
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
		</div>

	</div>
	<div class="box">
		<span class="price">Rp.14000</span>
		<img src="images/migorengmalay.jpg" >
		<h3>Nasi Goreng Malay</h3>
		<div class="stars">
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="far fa-star"></i>
		</div>
	</div>
	<div class="box">
		<span class="price">Rp.17000 </span>
		<img src="images/udangsaossingapur.jpg" >
		<h3>Udang Saos Singpore</h3>
		<div class="stars">
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="far fa-star"></i>
		</div>
	</div>
	<div class="box">
		<span class="price">Rp.20000 </span>
		<img src="images/ayamgorengsaosdapurnawa.jpg" >
		<h3>Ayam Koloke</h3>
		<div class="stars">
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
		</div>
	</div>
</div>
</section>
					>
<!-- END FAVOURITE MENU -->

<!-- Start Food -->
<section class="speciality" id="speciality">
<div class="box-container">
<div class="menu-box">
	<div class="row">
		<div class="col-lg-12">
			<div class="heading-title text-center">
				<h2>Makanan</h2>
			</div>
		</div>
	</div>
<!-- End food -->
<div class="row">
	<div class="tab-content" id="v-pills-tabContent">
		<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
			<div class="row">
				<?php 
					$sql_b = "SELECT `b`.`id_menu`, `b`.`nama_menu`, `b`.`cover`, 
					`b`.`harga_menu` FROM `menu` `b` ORDER BY `b`.`id_menu` ASC limit 6";
					$query_b = mysqli_query($koneksi, $sql_b);
					while($data_b = mysqli_fetch_row($query_b)){
					$id_menu = $data_b[0];
					$nama_menu = $data_b[1];
					$cover = $data_b[2];
					$harga_menu = $data_b[3];
				?> 
					<div class="col-lg-4 col-md-6 special-grid drinks">
						<div class="gallery-single fix">
							<img src="admin/cover/<?php echo $cover;?>" class="img-fluid" alt="Image">
							<div class="why-text">
								<h4><?php echo $nama_menu;?></h4>
								<h5>Rp. <?php echo $harga_menu;?></h5>
							</div>
						</div>
					</div>
			<?php }?>
	</div>
</div>
		
</section>	
<!-- Start Drink -->
<section class="speciality" id="speciality">
<div class="box-container">
<div class="menu-box">
	<div class="row">
		<div class="col-lg-12">
			<div class="heading-title text-center">
				<h2>Minuman</h2>
			</div>
		</div>
	</div>
	

	<div class="row">
		<div class="tab-content" id="v-pills-tabContent">
			<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

			<div class="row">
				<?php 
					$sql_b = "SELECT `b`.`id_menu`, `b`.`nama_menu`, `b`.`cover`, 
					`b`.`harga_menu` FROM `menu` `b` ORDER BY `b`.`id_menu` DESC limit 6";
					$query_b = mysqli_query($koneksi, $sql_b);
					while($data_b = mysqli_fetch_row($query_b)){
					$id_menu = $data_b[0];
					$nama_menu = $data_b[1];
					$cover = $data_b[2];
					$harga_menu = $data_b[3];
				?> 
					<div class="col-lg-4 col-md-6 special-grid drinks">
						<div class="gallery-single fix">
							<img src="admin/cover/<?php echo $cover;?>" class="img-fluid" alt="Image">
							<div class="why-text">
								<h4><?php echo $nama_menu;?></h4>
								<p></p>
								<h5>Rp. <?php echo $harga_menu;?></h5>
							</div>
						</div>
					
					<!-- <div class="col-lg-4 col-md-6 special-grid drinks">
						<div class="gallery-single fix">
							<img src="images/drink-2.jpg" class="img-fluid" alt="Image">
							<div class="why-text">
								<h4>Kopi Hitam</h4>
								<p></p>
								<h5> Rp 4.000</h5>
							</div>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-6 special-grid drinks">
						<div class="gallery-single fix">
							<img src="images/drinnk-3.jpg" class="img-fluid" alt="Image">
							<div class="why-text">
								<h4>Teh Hangat</h4>
								<p></p>
								<h5> Rp 3.000</h5>
							</div>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-6 special-grid lunch">
						<div class="gallery-single fix">
							<img src="images/drink-4.jpg" class="img-fluid" alt="Image">
							<div class="why-text">
								<h4>Luwak White Coffee</h4>
								<p></p>
								<h5> Rp 5.000</h5>
							</div>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-6 special-grid lunch">
						<div class="gallery-single fix">
							<img src="images/drink-5.jpg" class="img-fluid" alt="Image">
							<div class="why-text">
								<h4>Kopi Susu</h4>
								<p></p>
								<h5> Rp 5.000</h5>
							</div>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-6 special-grid lunch">
						<div class="gallery-single fix">
							<img src="images/drink-6.jpg" class="img-fluid" alt="Image">
							<div class="why-text">
								<h4>ES Jeruk</h4>
								<p></p>
								<h5>Rp.4000</h5>
							</div>
						</div>
					</div>										 -->
						</div>
		<?php }?>

		</div>
	</div>
</section>
<!-- End drink -->
</div>