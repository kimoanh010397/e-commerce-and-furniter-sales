<?php
	if(!isset($login)){exit();}
?>
<table>
<?php 
	include('../connect.php');
	$sl= 'select * from san_pham where san_pham.masp='.$_GET['masp'];
	$exec= mysqli_query($connect, $sl);
	$row= mysqli_fetch_array($exec);
?>
<tr>
	<td>
		<label>Tên sản phẩm: </label><br>
		<label>Giá sản phẩm: </label><br>
		<label>Số lượng sản phẩm: </label><br>
		<label>Nhóm nội thất: </label><br>
		<label>Màu sắc: </label><br>
		<label>Chất liệu: </label><br>
		<label>Bảo hành: </label>
	</td>
		<td>
			<?php echo $row['tensp']; ?><br>
			<?php echo number_format($row['giasp'],0,",",".")."đ"; ?><br>
			<?php echo $row['soluong']; ?><br>
			<?php echo $row['ma_nhom']; ?><br>
			<?php echo $row['mau_sac']; ?><br>
			<?php echo $row['chat_lieu']; ?><br>
			<?php echo $row['bao_hanh']; ?><br>
		</td>
</tr>
</table>
