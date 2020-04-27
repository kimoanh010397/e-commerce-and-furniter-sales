<?php
	if(!isset($login)){exit();}
?>
<div class="addproduct">
	<form method="post" action="?menu=exec_them_sp" enctype="multipart/form-data">
		<table>
			<tr>
				<td colspan="4">Thông tin sản phẩm</td>
			</tr>
			<tr>
				<td><label for="name">Tên sản phẩm</label></td>
				<td><label for="cost">Giá</label></td>
				<td><label for="soluong">Số lượng</label></td>
				<td class="right"><label for="ma_nhom">Loại sản phẩm</label></td>

			</tr>
			<tr>
				<td><input type="text" id="name" name="name" required ></td>
				<td><input type="text" id="cost" name="cost" required ></td>
				<td><input type="text" id="soluong" name="soluong" required ></td>
				<td>
					<select name="ma_nhom" id="ma_nhom"  required >
						<option value="phong_ngu">Nội thất phòng ngủ</option>
						<option value="phong_khach">Nội thất phòng khách</option>
						<option value="nha_bep">Nội thất nhà bếp</option>
						<option value="san_vuon">Nội thất sân vườn</option>
						<option value="phong_tam">Nội thất phòng tắm</option>
					</select>
				</td>
			</tr>
		</table>
		<table>
			<tr>
				<td colspan="2">Hình ảnh</td>
			</tr>
			<tr>
				<td class="right">
					<label for="image1">Ảnh 1:</label><br>
					
				</td>
				<td>
					<input type="file" id="image" name="image"  required ><br>
				</td>
			</tr>
		</table>
		<table>
			<tr>
				<td colspan="4"><hr></td>
			</tr>
			<tr>
				<td><label for="noi_bat">Nổi bật</label></td>
				<td>
					<select name="noi_bat" id="noi_bat">
						<option value="có">Có</option>
						<option value="không">Không</option>
					</select>
				</td>
			</tr>
			<tr>
				<td class="right"><input type="submit" name="submit" value="Thêm"></td>	</form>
				<form method="post" action="?menu=exec_them_sp">
				<td><input type="submit" name="cancel" value="Hủy"></td>
			</tr>
		</table>
	</form>
</div>