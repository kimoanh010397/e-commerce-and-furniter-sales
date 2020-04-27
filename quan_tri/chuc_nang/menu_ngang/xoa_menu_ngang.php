<?php
	if(!isset($login)){exit();}
?>
<?php
	include('../connect.php');
	$ma_nhom= $_GET['ma_nhom'];
	$sl="delete from nhom_noi_that where ma_nhom=".$ma_nhom;
	$exec= mysqli_query($connect, $sl);
	if($exec){
		echo "<script> alert('Xóa thành công'); location.href='?menu=ql_menu_ngang'; </script>";
	}
?>