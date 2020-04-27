<script type="text/javascript">

    $(document).ready(function() {
        document.title = 'Giỏ hàng';
    });

</script>
<?php
	if(isset($_SESSION['username'])){
		include('chuc_nang/gio_hang/thanh_vien_form.php');
	}
	else{
?>
<p class="alert alert-warning">Bạn <a href="?menu=dang_nhap">đăng nhập</a> để mua hàng.<br></p>
<?php include('chuc_nang/dang_ky_dang_nhap/dang_nhap.php'); ?>
<p class="alert alert-warning">
 Nếu bạn chưa có tài khoản bạn bấm <a href="?menu=dang_ky">vào đây</a> để tạo tài khoản mới</p>

<?php
	}
?>