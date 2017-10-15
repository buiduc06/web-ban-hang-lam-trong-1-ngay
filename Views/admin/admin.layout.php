<?php 
if (isset($_SESSION['level'])) {
  if ($_SESSION['level']=='admin' && $_SESSION['email']=='admin@xinhgai.com') {
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hà Béo Designer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo getUrl('public/plugin/bootstrap/css/bootstrap.min.css') ?>">
  <script src="<?php echo getUrl('public/plugin/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo getUrl('public/plugin/bootstrap/js/bootstrap.min.js') ?>"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
    <script type="text/javascript">
  //doan script yeu cau xac minh khi delete - ducdeveloper
    function confirm_delete() {
    if (confirm("bạn có chắc chắn muốn xóa?")) {
        return true;
    } else {
        return false;
    }
}
  </script>
  <script>
    function showCustomer(str) {
      var xhttp;    
      if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
      }
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "public/AJAX/ajaxthem.php?q="+str, true);
      xhttp.send();
    }
  </script>

</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <a href="<?php echo getUrl('index') ?>" ><img src="<?php echo getUrl('public/images/apple.png')?>" width="100px" height="100px;" style="margin-left: 50px;"></a>
      <h4 style="text-align: center;margin-bottom: 30px;margin-top: 20px;color: red;"><?php echo $_SESSION['name']; ?></h4>
      <ul class="nav nav-pills nav-stacked">
        <li><a href="<?php echo getUrl('admin/index')?>">Sản Phẩm</a></li>
        <li><a href="<?php echo getUrl('admin/category')?>">Danh Mục</a></li>
        <li><a href="<?php echo getUrl('admin/show-member')?>">Thành Viên</a></li>
        <li><a href="<?php echo getUrl('admin/show-oder')?>">Đơn Đặt Hàng</a></li>
        <li><a href="<?php echo getUrl('logout')?>">Logout</a></li>
      </ul><br>
      
    </div>

    <div class="col-sm-9">
      
      
      <div class="container">
    
    <?php include_once $viewPath; ?>
  </div>
<?php if (isset($msg)!=null) {
 ?>
  <script>
$(document).ready(function(){
        $("#myModal").modal();
});
</script>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
           <h4 class="modal-title" style="color: red;font-weight: bold;">Thông Báo</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        </div>
        <div class="modal-body">
          <p><?php echo $msg; ?>.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <?php }else{} ?>



  
      
    </div>
  </div>
</div>

<footer class="container-fluid">
  <p>Bài Asignment của sinh viên FPT polytechnic</p>
</footer>

</body>
</html>
<!-- phần xuất ra thông báo -->
<?php 

  }else{
     echo "chào thành viên . rất tiếc bạn ko có quyền truy cập trang này :)";
  }
}else
{
  echo "bạn ko có quyền truy cập trang này :)";
}

 ?>