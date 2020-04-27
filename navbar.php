<nav class="menu navbar-default" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">TRANG CHỦ</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<?php 
				include('connect.php');
				$sl="select * from nhom_noi_that";
				$exec= mysqli_query($connect, $sl);
				while($row=mysqli_fetch_array($exec)){
				?>
				<li><a href="?menu=<?php echo $row['ma_nhom']; ?>"><?php 
				echo $row['ten_nhom']; ?></a></li>
				<?php } ?>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>