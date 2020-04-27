<?php
	if(!isset($login)){exit();}
?>
<div class="ql_menu_ngang">
	<table>
		<tr>
			<td>Tên nhóm</td>
			<td>Mã nhóm</td>
			<td colspan="2" align="center"><a href="?menu=them_menu_ngang">Thêm</a></td>
		</tr>
<?php 
	include('../connect.php');
	$sl="select * from nhom_noi_that";
	$exec= mysqli_query($connect,$sl);
	while($row= mysqli_fetch_array($exec)){
?>
		<tr>
			<td><?php echo $row['ten_nhom']; ?></td>
			<td><?php echo $row['ma_nhom']; ?></td>
			<td><a onclick="return confirm('Bạn có mún xóa menu này không?');" href="?menu=xoa_menu_ngang&ma_nhom=<?php echo $row['ma_nhom']; ?>">Xóa</a></td>
		</tr>
<?php } ?>
	</table>
</div>