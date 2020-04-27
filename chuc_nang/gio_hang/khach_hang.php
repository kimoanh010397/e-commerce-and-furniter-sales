<?php
	include('connect.php');
	if(isset($_POST['submit'])){
	$tenkh= $_POST['tenkh'];
	$cmnd= $_POST['cmnd'];
	$email= $_POST['email'];
	$sdt= $_POST['sdt'];
	$diachi= $_POST['diachi'];
if(isset($_SESSION['username'])){
	$sp_mua=$_POST['sp_mua'];
	$list_id= $_POST['list_id'];
}
else{
	$xaphuong = $_POST['xaphuong'];
	$sqll= "select ward.type as wardtype, ward.name as wardname , district.type as districttype, district.name districtname, province.type  as provincetype, province.name as provincename from province join district on province.provinceid=district.provinceid join ward on ward.districtid=district.districtid where ward.wardid='".$xaphuong."'";
	$exc= mysqli_query($connect,$sqll);
	$row1= mysqli_fetch_array($exc); 
	$diachi= $diachi.", ".$row1['wardtype']." ".$row1['wardname'].", ".$row1['districttype']." ".$row1['districtname'].", ".$row1['provincetype']." ".$row1['provincename'];
	foreach($_SESSION['giohang'] as $masp=> $sp){
		$id_array[]= $masp;
		}
	$list_id= implode(',',$id_array);
	$sl= 'select * from san_pham where masp in ('.$list_id.')';
	$exec= mysqli_query($connect, $sl);
	$sp_mua="";
	while($row= mysqli_fetch_array($exec)){
		$soluong= $_SESSION['giohang'][$row['masp']];
		$gia_sp=$row['giasp'];
		$sp_mua= $sp_mua.$row['masp'].",".$soluong.",".$gia_sp."|";	
		
	}
}
	$sql1="insert into khach_hang(tenkh,cmnd,email,sdt,dia_chi) values('".$tenkh."','".$cmnd."','".$email."','".$sdt."','".$diachi."')";
	$exec1= mysqli_query($connect,$sql1);
?>