<div class="container">

<?php if (!empty($allproduct)) {
 ?>
	<div class="boxmain">
				<div class="tit-boxmain">
					<h3><span>DANH MỤC <?= $allCate->Ten?></span></h3>
				</div>
				<div class="ct-boxmain row m0">
				
<?php foreach ($allproduct as $allproduct ) {
 ?>
					<div class="col-xs-6 col-sm-4 col-md-3 p5">
						<div class="boxsp">
							<div class="imgsp">
								<a href='<?php echo getUrl("chitietsp?id=$allproduct->id") ?>'><img class="imgproduct" style="width: 270px;height: 300px;" src="public/images/<?= $allproduct->Hinh?>"></a>
								<div class="img-label">
									<img src="public/images/hot.png">
								</div>
							</div>
							<div class="namesp">
								<a href=""><?= $allproduct->Ten?></a>
							</div>
							<div class="pricesp"><?= $allproduct->gia?>  Đ</div>
							<div class="button-hd">
								<a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
								<a href=""><i class="fa fa-eye" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>

<?php } ?>

				</div>
			</div>
		
		<?php }else{
			echo "<br><br><br><br><br><br><h2> Xin Lỗi Danh Mục Này Chưa Có Sản Phẩm Xin Vui Lòng Liên Hệ Với Quản Trị Viên Để Cập Nhật Thêm </h2 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
		} ?>
</div>