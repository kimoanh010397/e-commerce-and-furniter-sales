<div class="product-info">
<?php
	include('connect.php');
	$sl= 'select * from san_pham where san_pham.masp='.$_GET['masp'];
	$exec= mysqli_query($connect, $sl);
	$row= mysqli_fetch_array($exec);
	$sql= "update san_pham set xem_nhieu=xem_nhieu + 1 where masp=".$_GET['masp'];
	$ex= mysqli_query($connect, $sql);
	$tg= $row['rate1']+$row['rate2']+$row['rate3']+$row['rate4']+$row['rate5'];
	if($tg==0){
		$avg=0;
	}else{
	$avg= $row['rate1']/($tg*5)+$row['rate2']/($tg*4)+$row['rate3']/($tg*3)+$row['rate4']/($tg*2)+$row['rate5']/($tg*1);
	}
	$avg=$avg*10;
?>	
<script type="text/javascript">

    $(document).ready(function() {
        document.title = '<?php echo $row['tensp']; ?>';
    });
    

</script>
	<div class="panel panel-default">
      <div class="panel-heading"><span style="font-weight: bold; color: "><?php echo $row['tensp']; ?></span>
<script>
	$(document).ready(function(){
      $(".jRating").jRating();
    });

</script>
</div>
      <div class="panel-body">
	<form>
		<div class="img-sp col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<script>
							function img1(){
								document.getElementById('img').src="images/<?php echo $row['img']; ?>";
							}
							function img2(){
								document.getElementById('img').src="images/<?php echo $row['img1']; ?>";
							}
							function img3(){
								document.getElementById('img').src="images/<?php echo $row['img2']; ?>";
							}
							function img4(){
								document.getElementById('img').src="images/<?php echo $row['img3']; ?>";
							}
							function img5(){
								document.getElementById('img').src="images/<?php echo $row['img4']; ?>";
							}
		</script>
			<img id="img" class="img-thumbnail" src="images/<?php echo $row['img']; ?>" alt="">
			
		</div>
		<div class="info_sp col-xs-12 col-sm-12 col-md-6 col-lg-6">			
			<input type="hidden" name="menu" value="addcart">
			<input type="hidden" name="masp" value="<?php echo $row['masp'] ?>">
			<span style="font-size: 20px; font-weight: bold;"><?php echo $row['tensp']; ?></span>
			<div class="jRating" data-average="<?php echo $avg; ?>" data-id="1"> </div>
				<span style="font-size: 14px; ">(Bảo hành 3 tháng)</span><br>
			<span style="color: #BB4040; font-weight: bold; font-size: 26px;"><?php echo number_format($row['giasp'],0,",",".")."đ"; ?></span></br>
			
			<span style="color: black; font-size: 16px; font-weight: bold; margin-top: 15px;  ">Trạng thái: <?php if($row['soluong']>0){
				echo '<span style="color: blue; font-size: 18px; ">Còn hàng</span>';
				}else{
				echo '<span style="color: red; font-size: 18px; ">Hết hàng</span>';} ?></span><br>
			<span style="margin-top: 10px;" >Số lượng: <input type="text" style="width: 40px;
			height: 30px; border-radius: 10px; border: solid silver 0.1px; padding-left: 10px; " size="4" name="soluong" value="1"></span><br>
			<p class="alert alert-success" style="margin-top: 10px; ">
				<span>Khuyến mãi tặng kèm:</span><br>
				<span><span style="margin-left: 10px;" class="fa fa-check"></span>Ấm chén Bát Tràng trị giá 500.000 đồng</span><br>
				<span><span style="margin-left: 10px;" class="fa fa-check"></span> Khăn trải bàn</span>
			</p>
			<a href="?menu=mua_ngay&masp=<?php echo $row['masp']; ?>&soluong=1" style="padding: 15px; font-size: 15px;" class="btn btn-primary" >Đặt hàng</a>
			<input type="submit" class="btn btn-warning" style="padding: 15px; font-size: 15px" value="Thêm vào giỏ hàng">
		</div>
	</form>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-top: 10px;">
		<ul class="nav nav-pills">
			<li class="active">
				<a data-toggle="pill" href="#thong_tin">Thông tin</a>
			</li>
			<li>
				<a data-toggle="pill" href="#binh_luan">Bình luận</a>
			</li>
			<li>
				<a data-toggle="pill" href="#danh_gia">Đánh giá</a>
			</li>
		</ul>	
		<div class="tab-content">
			<div id="thong_tin" class="tab-pane fade in  active">
				<table class="table">
					<tr>
						<td colspan="2" align="center"><label>Thông tin sản phẩm</label></td>
					</tr>
					<tr>
						<td><label>Màu sắc:</label></td>
						<td><?php echo $row['mau_sac']; ?></td>
					</tr>
					<tr>
						<td><label>Chất liệu:</label></td>
						<td><?php echo $row['chat_lieu']; ?></td>
					</tr>
					<tr>
						<td><label>Bảo hành:</label></td>
						<td><?php echo $row['bao_hanh']; ?></td>
					</tr>
					
				</table>
			</div>
			<div id="binh_luan" class="tab-pane fade in">
				<?php include('chuc_nang/binh_luan/binh_luan.php'); ?>
			</div>
			<div id="danh_gia" class="tab-pane fade in">
				<?php include('chuc_nang/rate/rate_form.php'); ?>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"  style="padding-top: 10px;">
		<table class="table">
			<tr>
				<td class="alert alert-success"><label>Nhận xét</label></td>
			</tr>
		<?php
			if(isset($_GET['page'])){
		$page=$_GET['page'];
		}else{
			$page=1;
		}
		$start=1;
		$page=$page-1;
		$limit= 5;
		$sl= "select * from binh_luan where masp=".$_GET['masp']." limit ".$page.",".$limit;
		$exec= mysqli_query($connect, $sl);
		$total= mysqli_num_rows($exec);
		$total=$total/$limit;
		$total= ceil($total);
		$start= $limit*$page;
		while($row= mysqli_fetch_array($exec)){
		?>
			<tr>
				<td>
					<label><?php echo $row['nickname']; ?>:</label><br>
					<span style="padding-left: 10px;"><?php echo $row['noi_dung']; ?></span>
				</td>
			</tr>
			<?php } ?>
			<tr>
				<td align="center">
					<nav>
			  <ul class="pagination">
					<?php 
						for($i=1; $i<=$total;$i++){
					?>
			    <li><a href="?menu=&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
					</ul>
					</nav>
				</td>
			</tr>
		</table>
	</div>
	</div>
	</div>
</div>