	
	<!-- Start blog details -->
	<div class="blog-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2></h2>						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-8 col-lg-8 col-12">
				
					<div class="blog-inner-details-page">
						
						<div class="blog-inner-box">
							
							<div class="inner-blog-detail details-page">
							<?php 
$id_info = $_GET['data'];

$sql_d = "SELECT `b`.`cover`,`b`.`judul_info`,`b`.`konten_info`,`b`.`id_tag_info` FROM `info` `b`  WHERE `b`.`id_info`=" . $id_info;
$query_d = mysqli_query($koneksi,$sql_d);
while($data_d = mysqli_fetch_row($query_d)){
  $cover = $data_d[0];
  $judul_info = $data_d[2];
  $konten_info = $data_d[3];
?>
							<img src="admin/cover/<?php echo $cover;?>" class="img-fluid" alt="Image">
								<h3><?php echo $judul_info;?></h3>
								<br><br><br>
								<p> <?php echo $konten_info;?>
</p>
								
							</div>
						</div>											
					</div>
				</div>
			
				<!-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 col-12 blog-sidebar">
					<div class="right-side-blog">
						<h3>Tags</h3>
						<div class="blog-tag-box">
							<ul class="list-inline tag-list">
								<li class="list-inline-item"><a href="#">Food</a></li>
								<li class="list-inline-item"><a href="#">Drink</a></li>
								<li class="list-inline-item"><a href="#">Nature</a></li>
								<li class="list-inline-item"><a href="#">Italian</a></li>
								<li class="list-inline-item"><a href="#">Modern</a></li>
								<li class="list-inline-item"><a href="#">Fashion</a></li>
							</ul>
						</div>
					</div>
				</div> -->
			
			</div>
		</div>
	</div>
	
	<!-- End details -->
	<?php }?>
</body>
</html>