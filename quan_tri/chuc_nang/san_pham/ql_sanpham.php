<?php
	if(!isset($login)){exit();}
?>
<table style="width: 800px;">
	<tr>
		<td><label>Tên sản phẩm</label></td>
		<td><label>Giá sản phẩm</label></td>
		<td><label>Hình ảnh</label></td>
		<td><label>Loại sản phẩm</label></td>
		<td width="100px"><label>Chi tiết</label></td>
		<td colspan="2" align="center"><a  style="text-decoration: none; padding: 5px 20px; background-color: #0066CC; color: #fffafa; border-radius: 10px;"  href="?menu=them_sp">Thêm</a></td>
	</tr>
<?php 
	include('../connect.php');
	$sl= "select * from san_pham";
	$exec= mysqli_query($connect, $sl);
	while($row= mysqli_fetch_array($exec)){
?>
	<tr>
		<td><?php echo $row['tensp']; ?></td>
		<td><?php echo number_format($row['giasp'],0,",",".")."đ"; ?></td>
		<td>
			<img src="../images/<?php echo $row['img']; ?>"  width="80px" height="90px" alt="">
		</td>
		<td><?php echo $row['ma_nhom']; ?></td>
		<td><a style="text-decoration: underline; color: gray; "  href="?menu=chi_tiet&masp=<?php echo $row['masp']; ?>">Chi tiết</a></td>
		<td><a  style="text-decoration: underline;  color: gray;"  href="?menu=sua_sp&masp=<?php echo $row['masp']; ?>">Sửa</a></td>
		<td><a  style="text-decoration: underline; color: gray;" onclick="return confirm('Bạn có mún xóa không?');" href="?menu=xoa_sp&masp=<?php echo $row['masp']; ?>">Xóa</a></td>
	</tr>
<?php  } ?>
</table>