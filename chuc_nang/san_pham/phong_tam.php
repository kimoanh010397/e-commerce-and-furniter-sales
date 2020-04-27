<script type="text/javascript">

    $(document).ready(function() {
        document.title = 'phong_khach';
    });

</script>
<div class="panel panel-primary">
      <div class="panel-heading">Nội Thất Phòng tắm</div>
      <div class="panel-body">
<div class="product">
<?php
	include('connect.php');
	if(isset($_GET['page'])){
		$page=$_GET['page'];
	}else{
		$page=1;
	}
	$start=1;
	$page=$page-1;
	$limit= 12;
	$sql="select * from san_pham where ma_nhom like 'phong_tam'";
	$ex= mysqli_query($connect, $sql);
	$total= mysqli_num_rows($ex);
	$total=$total/$limit;
	$total= ceil($total);
	$start= $limit*$page;
	?>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="product">
		<?php
	$sl= "select * from san_pham where ma_nhom like 'phong_tam' limit ".$start.",".$limit;
	$exec= mysqli_query($connect, $sl);
	while($row= mysqli_fetch_array($exec)){
?>
	<div class="sp img-thumbnail col-xs-12 col-sm-6 col-md-6 col-lg-3">
		<div class="img img-thumbnail col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<a href="?menu=product_info&masp=<?php echo $row['masp']; ?>"><img src="images/<?php echo $row['img']; ?>" alt=""></a>
		</div>
		<div class="title">
			<a href="?menu=product_info&masp=<?php echo $row['masp']; ?>"><?php echo $row['tensp']; ?></a>
		</div>
		<div class="cost">
			<span><?php echo number_format($row['giasp'],0,",",".")."đ"; ?></span>
		</div>
		<div class="buy">
			<a class="btn btn-primary" href="?menu=product_info&masp=<?php echo $row['masp']; ?>">Chi tiết</a>
			<a class="btn btn-warning" href="?menu=addcart&masp=<?php echo $row['masp']; ?>&soluong=1"><b class="fa fa-cart-plus"></b></a>
		</div>
	</div>
<?php }
?>
	</div>

</div>
</div>
</div>