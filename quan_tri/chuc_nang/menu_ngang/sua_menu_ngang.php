<?php
	if(!isset($login)){exit();}
?>
<?php 
	include('../connect.php');
	$ma_nhom= $_GET['ma_nhom'];
	$ten_nhom= $_GET['ten_nhom'];
	$sl='select * from nhom_noi_that where ten_nhom='.$ten_nhom;
	$exec= mysqli_query($connect,$sl);
	$row= mysqli_fetch_array($exec);	
?>
<div class="sua_menu">
<form action="?menu=exec_sua_menu_ngang" method="post">
	<table>
		
		<tr>
			<td class="right"><label for="ma_nhom">Mã nhóm: </label></td>
			<td><input type="text" id="ma_nhom" name="ma_nhom" value="<?php echo $row['ma_nhom']; ?>"></td>
		</tr>
		<tr>
			<td class="right"><label for="ten_nhom">Tên nhóm: </label></td>
			<td><input type="text" id="ten_nhom" name="ten_nhom" value="<?php echo $row['ten_nhom']; ?>"></td>

		</tr>
		<tr>
			<td class="right"><input type="submit" name="submit" value="Sửa"></td>
			<td><input type="submit" name="cancel" value="Hủy"></td>
		</tr>
	</table>
</form>
</div>