<?php
	if(!isset($login)){exit();}
?>
<div class="them_menu">
<form action="?menu=exec_them_menu_ngang" method="post">
	<table>
		
		<tr>
			<td class="right"><label for="ma_nhom">Mã nhóm: </label></td>
			<td><input type="text" id="ma_nhom" name="ma_nhom"></td>
		</tr>
		<tr>
			<td class="right"><label for="ten_nhom">Tên nhóm: </label></td>
			<td><input type="text" id="ten_nhom" name="ten_nhom"></td>
		</tr>
		<tr>
			<td class="right"><input type="submit" name="submit" value="Thêm"></td>
			<td><input type="submit" name="cancel" value="Hủy"></td>
		</tr>
	</table>
</form>
</div>