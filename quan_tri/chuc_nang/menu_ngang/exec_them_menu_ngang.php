<?php
	if(!isset($login)){exit();}
?>
<?php
if(isset($_POST['submit'])){
	include('../connect.php');
	$ten_nhom= $_POST['ten_nhom'];
	$ten_nhom= mb_strtoupper($ten_nhom);
	$ma_nhom= $_POST['ma_nhom'];
	$sl= "insert into nhom_noi_that(ten_nhom,ma_nhom) values('".$ten_nhom."','".$ma_nhom."')";
	$exec= mysqli_query($connect,$sl);
	if($exec){
		echo "<script> alert('Thêm nhóm thành công'); location.href='?menu=ql_menu_ngang'; </script>";
	}
	else{
		echo "<script> alert('Thêm nhóm không thành công'); location.href='?menu=menu_ngang'; </script>";
	}
}
if(isset($_POST['cancel'])){
	header('location:?menu=menu_ngang');
}
?>