<?php
	if(!isset($login)){exit();}
?>
<?php
	include('../connect.php');
	$masp=$_GET['masp'];
	$sl= 'select * from san_pham where san_pham.masp='.$masp;
	$exec= mysqli_query($connect,$sl);
	$row= mysqli_fetch_array($exec);
?>
<div class="addproduct">
	<form method="post" action="?menu=exec_sua_sp" enctype="multipart/form-data">
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
				<td><input type="text" id="name" name="name"  value="<?php echo $row['tensp']; ?>" ></td>
				<td><input type="text" id="cost" name="cost"  value="<?php echo $row['giasp']; ?>" ></td>
				<td><input type="text" id="soluong" name="soluong"  value="<?php echo $row['soluong']; ?>" ></td>
				<td>
					<select name="ma_nhom" id="ma_nhom"   >
						<option value="phong_ngu" <?php if($row['ma_nhom']=="phong_ngu"){echo "selected";} 
						else{echo "";}
						  ?> >Nội thất phòng ngủ</option>
						<option value="phong_khach" <?php if($row['ma_nhom']=="phong_khach"){echo "selected"; }
						else{echo "";}
						 ?> >Nội thất phòng khách</option>
						<option value="nha_bep" <?php if($row['ma_nhom']=="nha_bep"){echo "selected"; }
						else{echo "";}  ?> >Nội thất nhà bếp</option>
						<option value="san_vuon" <?php if($row['ma_nhom']=="san_vuon"){echo "selected"; }
						else{echo "";} ?> >Nội thất sân vườn</option>
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
					<input type="hidden" name="masp" value="<?php echo $row['masp']; ?>">
					<input type="hidden" name="img" value="<?php echo $row['img']; ?>">
					
					<img src="../images/<?php echo $row['img']; ?>" alt="" name="img" width="60px" height="80px" ><input type="file" id="image" name="image"   ><br>
					
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
						<option value="có" <?php if($row['noi_bat']=="có"){echo "selected";}else{ echo "";} ?> > Có</option>
						<option value="không" <?php if($row['noi_bat']=="không"){echo "selected";}else{ echo "";} ?> >Không</option>
					</select>
				</td>
			</tr>
			<tr>
				<td class="right"><input type="submit" name="submit" value="Sửa"></td>	</form>
				<form method="post" action="?menu=exec_sua_sp">
				<td><input type="submit" name="cancel" value="Hủy"></td>
			</tr>
		</table>
	</form>
</div>