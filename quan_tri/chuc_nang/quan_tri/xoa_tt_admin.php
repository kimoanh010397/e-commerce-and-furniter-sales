<?php
	if(!isset($login)){exit();}
?>
<?php 
	include('../connect.php');
	$ID= $_GET['ID'];
	$sl= "delete from quan_tri where ID=".$ID;
	$exec= mysqli_query($connect, $sl);
	if($exec){
		echo "<script> alert('Xóa thông tin thành công'); location.href='?menu=quan_ly_admin'; </script>";
	}
	else{
		echo "<script> alert('Xóa thông tin không thành công'); location.href='?menu=quan_ly_admin'; </script>";
	}
?>