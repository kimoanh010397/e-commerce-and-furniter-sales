<?php 

?>
<div class="header col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="logo col-xs-12 col-sm-12 col-md-4 col-lg-4">
		<img class="header_logo" src="images/logo.png" alt="">
	</div>
	<div class="search col-xs-12 col-sm-12 col-md-4 col-lg-3">
		<form class="searchh" action="?menu=search" action="post">
			<input type="hidden" name="menu" value="search">
			<input class="form-control" type="search" name="search" placeholder="Nhập tên sản phẩm..">
			<button type="submit" class="form-control" name="submit"><span class="fa fa-search"></span></button>
		</form>
	</div>
	<div class="cart col-xs-12 col-sm-4 col-md-2 col-lg-2">
		<a class="btn btn-warning" href="?menu=gio_hang"><span class="fa fa-shopping-cart"></span> (<?php if(isset($_SESSION['giohang'])){
				$cart= count($_SESSION['giohang']);
				echo $cart;
			} 
		else { $cart=0;
			echo $cart;} ?>)</a>
	</div>
	<div class="responsive_log">
		<a href="?menu=dang_nhap" class="dangnhap" >Đăng nhập
		<?php(if(isset($_SESSION['username'])){
		include('chuc_nang/dang_ky_dang_nhap/user_info.php');
	})?>
</a>
		<a href="?menu=dang_ky" class="dangky">Đăng ký</a>	
	</div>	
</div>

