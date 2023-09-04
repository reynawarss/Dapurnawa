
	<br><br><br>
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 text-center">
					<div class="inner-column">

					<?php 
					$sql_k = "SELECT `judul`,`isi` FROM `konten` WHERE 
					`id_konten`='6'";
					$query_k = mysqli_query($koneksi,$sql_k);
					while($data_k = mysqli_fetch_row($query_k)){
						$judul_konten = $data_k[0];
						$isi_konten = $data_k[1];
					}
					?>

						<h1>Welcome To <span>Dapoer Nawa</span></h1>
						<!-- <h4><?php echo $judul_konten;?></h4>
						<p><?php echo $isi_konten;?></p> -->
						<h4>Little Story</h4>
						<p>Dapoer nawa didirikan pada tahun 2019 dengan menyajikan hidangan yang dikenal masyarakat. Dimulai dengan transisi pandemi COVID-19, telah memberikan dampak yang signifikan terhadap aktivitas di luar rumah. Oleh karena itu, pemilik Dapoer Nawa berinisiatif untuk memulai bisnis yang berfokus pada masakan lokal dan Cina dengan berbagai saus.</p>
						<p> Kami menerima pesanan untuk acara besar seperti perayaan ulang tahun. Selain itu, kami telah bekerja sama dengan dapur Bu Utik. Tentu saja, Dapoer Nawa berkomitmen untuk meningkatkan mutu pelayanan yang berkualitas.  Serta tidak menggunakan zat kimia sebagai pengawet makanan.</p>
						<!-- <p> Kami menerima pesanan untuk acara besar seperti perayaan ulang tahun. Selain itu, kami telah bekerja sama dengan dapur Bu Utik. Tentu saja, Dapoer Nawa berkomitmen untuk meningkatkan mutu pelayanan yang berkualitas.  Serta tidak menggunakan zat kimia sebagai pengawet makanan.</p> -->
					</div>
				</div>
				
				<div class="col-lg-6 col-md-6">
					<img src="images/tempat.jpg" alt="" class="img-fluid">
				</div>
				<div class="about-section-box">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 text center">
								<div class="inner-column">
									<h1>Our Achievement</h1>
								</div>							
							</div>
							<iframe src="https://www.youtube.com/embed/XvUQ-aafuUc"width="1250" height="500"style="border:0;"></iframe>
						</div>			
					</div>
				</div>`
			</div>
		</div>
	</div>

