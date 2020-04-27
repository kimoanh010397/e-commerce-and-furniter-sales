
<?php
	include('connect.php');
	$sl= "select * from tai_khoan where username='".$_SESSION['username']."'";
	$exec= mysqli_query($connect, $sl);
	$row= mysqli_fetch_array($exec);
?>
<div class="panel panel-primary" style="width: 200px; margin-left: -30px;">

<table class="table">
	<tr>
		<td><p style="padding-left: 2px;color: black;"><span class="glyphicon glyphicon-user"></span><a href="?menu=thanh_vien" style="color: black; font-size: 14px;"><?php echo $row['hoten']; ?></a></p></td>
	</tr>
	<tr>
		<td><p style=" font-size: 14px;color: red;"><a href="?menu=change_password" style="color: gray;text-decoration: underline;">Đổi mật khẩu</a></p></td>
	</tr>
	
	<tr>
		<td><p style="font-size: 14px;"><a href="?menu=logout" style="color: gray;text-decoration: underline;">Đăng xuất</a></p></td>
	</tr>
	
</table>
</div>
