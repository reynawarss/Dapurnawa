
	<br><br><br>
	<div class="menu-box">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Info</h2>
				</div>
			</div>
		</div>
	<section class="popular" id="popular">
		<div class="box-container">
		<?php 
					$sql_b = "SELECT `b`.`id_info`, `b`.`judul_info`, `b`.`cover` 
					FROM `info` `b` ORDER BY `b`.`id_info` ASC";
					$query_b = mysqli_query($koneksi, $sql_b);
					while($data_b = mysqli_fetch_row($query_b)){
					$id_info = $data_b[0];
					$judul_info = $data_b[1];
					$cover = $data_b[2];
				?> 
			<div class="box">
				<a href="index.php?include=terbaruinfo&data=<?php echo $id_info;?>"><img src="admin/cover/<?php echo $cover;?>" class="img-fluid" alt="Image">
				<h3><?php echo $judul_info;?></h3>
				
			</div>
			<?php }?>
			<!-- <div class="box">
				<a href="index.php?include=terbarumenggoreng"><img src="images/menggoreng.png" alt=""></a>
				<h3>TIPS MENGGORENG MAKANAN AGAR TIDAK TERLALU  BERBAHAYA BAGI KESEHATAN</h3>				
			</div>
			<div class="box">
				<a href="index.php?include=terbarujamu"><img src="images/jamu1.png" alt=""></a>
				<h3>JAMU TRADISIONAL INDONESIA JADI PINTU GERBANG WELLNESS TOURISM LOKAL</h3>
				
			</div>
			<div class="box">
				<a href="index.php?include=terbarumakanan"><img src="images/nusantara.png" alt=""></a>
				<h3>7 MAKANAN KHAS NUSANTARA YANG DIIKUTI NAMA DAERAH ASALNYA</h3>
				
			</div>
			<div class="box">
				<a href="index.php?include=terbarucapcay"><img src="images/capcay2.png" alt=""></a>
				<h3>SEJARAH CAPCAY</h3>
				
			</div>
			<div class="box">
				<a href="index.php?include=terbaruinovasi"><img src="images/inovasinasgor2.png" alt=""></a>
				<h3>INOVASI NASI GORENG YANG BISA KAMU COBA JADI BISNIS RUMAHAN</h3>
				
			</div> -->
		</div>
	</section>
</div>
		
		