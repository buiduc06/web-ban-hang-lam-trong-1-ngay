 <div class="container">
<h2>DANH SÁCH DANH MỤC</h2>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Tên Danh Mục</th>
         <th>Logo</th>
         <th>Số Sản Phẩm</th>
<!--         <th>list_price</th> -->
        <th>Người Tạo</th>
        <th><a href="<?php echo getUrl('admin/category_create') ?>">Thêm Danh Mục </a></th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($category as $category1 ) { ?>
      <tr>
        <td><?= $category1->id ?></td>
        <td><a href="chitietbaiviet.php?id=<?=$category1->id ?>" ><?= $category1->Ten ?></a></td>
        <td><a href="chitietbaiviet.php?id=<?=$category1->id ?>" ><img src="<?php echo getUrl("public/images/$category1->Hinh") ?>" class="img-thumbnail" alt="Cinque Terre" width="104" height="36"></a></td>
<!--         <td><?= $product1->list_price ?></td> -->
        <td><?php echo "comming soon"; ?></td>
        <td><?= $category1->LayTacGia11()->Ten?></td>
        <td><a href='<?php echo getUrl("admin/category_edit?id=$category1->id"); ?>'>sửa</a>
        	<a href='<?php echo getUrl("admin/category_delete?id=$category1->id"); ?>' onclick="return confirm_delete()">Xóa</a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>



	</div>