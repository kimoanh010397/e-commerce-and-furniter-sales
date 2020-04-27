<?php
	if(!isset($login)){exit();}
?>
<?php
	if(isset($_POST['submit'])){
	include('../connect.php');
	$ten_nhom= $_POST['ten_nhom'];
	$ma_nhom= $_POST['ma_nhom'];
	$sl= "update nhom_noi_that set ten_nhom= '".$ten_nhom."' where ma_nhom=".$ma_nhom;
	$exec= mysqli_query($connect,$sl);
	if($exec){
		echo "<script> alert('Sửa menu thành công'); location.href='?menu=ql_menu_ngang';  </script>";
	}
	else{
		echo "<script> alert('Sửa menu không thành công'); location.href='?menu=ql_menu_ngang';  </script>";
	}
}
	if(isset($_POST['cancel'])){
		header('location:?menu=ql_menu_ngang');
	}
?>