<?php
	if(!isset($login)){exit();}
?>
<?php 
	include('../connect.php');
	$sl='update hoa_don set xu_ly="Đã duyệt" where id='.$_GET['id'];
	$exec= mysqli_query($connect,$sl);
	if($exec){
		echo "<script> alert('Đã duyệt hóa đơn'); location.href='?menu=hoa_don'; </script>";
	}else{
		echo "<script> alert('Hóa đơn chưa được duyệt'); location.href='?menu=hoa_don'; </script>";
	}
?>