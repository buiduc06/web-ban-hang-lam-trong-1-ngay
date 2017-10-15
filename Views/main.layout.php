
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Hà Béo Designer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="public/plugin/bootstrap/css/bootstrap.min.css">
  <script src="public/plugin/jquery/jquery.min.js"></script>
  <script src="public/plugin/bootstrap/js/bootstrap.min.js"></script>
  <link href="public/css/bootstrap.min.css" rel="stylesheet">
  <link href="public/css/bootstrap-theme.min.css" rel="stylesheet">

  <!-- AWESOME ICON FONT -->
  <link href="lib/awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- IMPORT FONT GOOGLE LINK -->
  <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,700,300&amp;subset=vietnamese,latin,latin-ext" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link href="public/css/style.css" rel="stylesheet">
  <!-- SLIDE CSS -->
  <link rel="stylesheet" href="public/lib/slider/default.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="public/lib/slider/nivo-slider.css" type="text/css" media="screen" />
  <!-- Owl Carousel Assets -->
  <link href="public/lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="public/lib/owlcarousel/owl.theme.css" rel="stylesheet">
  <style>
    ul > li{margin-right:25px;font-weight:lighter;cursor:pointer}
li.active{border-bottom:3px solid silver;}

.item-photo{display:flex;justify-content:center;align-items:center;border-right:1px solid #f6f6f6;}
.menu-items{list-style-type:none;font-size:11px;display:inline-flex;margin-bottom:0;margin-top:20px}
.btn-success{width:100%;border-radius:0;}
.section{width:100%;margin-left:-15px;padding:2px;padding-left:15px;padding-right:15px;background:#f8f9f9}
.title-price{margin-top:30px;margin-bottom:0;color:black}
.title-attr{margin-top:0;margin-bottom:0;color:black;}
.btn-minus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-right:0;}
.btn-plus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-left:0;}
div.section > div {width:100%;display:inline-flex;}
div.section > div > input {margin:0;padding-left:5px;font-size:10px;padding-right:5px;max-width:18%;text-align:center;}
.attr,.attr2{cursor:pointer;margin-right:5px;height:20px;font-size:10px;padding:2px;border:1px solid gray;border-radius:2px;}
.attr.active,.attr2.active{ border:1px solid orange;}

@media (max-width: 426px) {
    .container {margin-top:0px !important;}
    .container > .row{padding:0 !important;}
    .container > .row > .col-xs-12.col-sm-5{
        padding-right:0 ;    
    }
    .container > .row > .col-xs-12.col-sm-9 > div > p{
        padding-left:0 !important;
        padding-right:0 !important;
    }
    .container > .row > .col-xs-12.col-sm-9 > div > ul{
        padding-left:10px !important;
        
    }            
    .section{width:104%;}
    .menu-items{padding-left:0;}
}
  </style>
  <style>
  /* Remove the navbar's default margin-bottom and rounded borders */ 
  .navbar {
  	margin-bottom: 0;
  	border-radius: 0;
  }

  /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
  .row.content {height: 450px}

  /* Set gray background color and 100% height */
  .sidenav {
  	padding-top: 20px;
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
  	.row.content {height:auto;} 
  }
  #logo11{
  	width: 80px;height: 60px;
  	position: relative;
  	bottom: 18px;
    margin-left: 130px;
  }
  .tit-boxmain h3{
  	float: left;
  }
  .logo1{
  	width: 265px;
  	height: 65px;
  	background: gray;
  	float: left;
  	margin-left: 20px;
  	margin-top: 20px;

  }
  .logo1 p{
  	float: left;
  	width: 70%;
  	height: 100%;
  	font-size: 30px;
  	color: white;
  	line-height: 60px;
  	text-align: center;
	

  }
   .logo1 img{
   	float: right;
   	width: 25%;height: 80%;
   	margin-top: 3px;
   	margin-right: 12px;
/*   	margin-right: 10px;*/
   }
   #about h3{
    margin-left: 20px;
   }
  #about p{
    margin-left: 60px;
    font-size: 18px;
  }
  #contact ifame{
    width: 800px;
  }
  
    #contact iframe{
    width: 100%;
    height: 500px;
  }
  #menu-is{
    background: #eee;
    width: 100%;
    height: 50px;
    line-height: 44px;
  }
  #menu-is ul li{
  text-decoration: none;
  list-style: none;
  float: left;
  font-size: 14px;

  }

  #menu-is ul li a{
   font-size: 15px;
   color: black;

  }
 
</style>
</head>
<body>

 <div id="menu-is" class="container">
  <ul>
  <ul>
    <li><a href="#"><b>Hệ Thống Cửa hàng</b></a></li>
    <li><a href="#"><b> Trả Góp</b></a></li>
    <li><a href="#"><b> Sửa Chữa</b></a></li>
  </ul>

  </ul>
 </div>


	<!-- menu -->
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="<?php echo getUrl('index') ?>"><img src="public/images/victor-logo-design.png" id="logo11"></a>
			</div>

			<div class="collapse navbar-collapse" id="myNavbar">
    	<!-- <div class="col-sm-1"></div>
    	<div class="col-sm-10">
    	-->      <ul class="nav navbar-nav">
        
    		<li>
          <a href="<?php echo getUrl('index') ?>">Trang Chủ</a></li>
    		<li><a href="<?php echo getUrl('about') ?>">Giới Thiệu</a></li>
    		<li><a href="<?php echo getUrl('category') ?>">Danh Mục</a></li>
    		<li><a href="<?php echo getUrl('contact') ?>">Liên Hệ</a></li>
    	</ul>
    	<ul class="nav navbar-nav navbar-right">
    		<li>
          <?php if (isset($_SESSION['level'])){ ?>
            
          <?php if ($_SESSION['level']=='admin'){ ?>
         <span style="line-height: 50px;"> <a href="<?php echo getUrl('admin')?>" style="color: white;margin-right:  10px;"><span></span> Xin chào <?php echo $_SESSION['name']; ?>    </a><a href="<?php echo getUrl('logout')?>">  logout</a></span></li>
          >
          <?php }elseif ($_SESSION['level']=='member') {
 ?>       <span style="line-height: 50px;"> <a href="<?php echo getUrl('admin/member')?>" style="color: white;margin-right:  10px;"><span></span> Xin chào <?php echo $_SESSION['name']; ?>    </a><a href="<?php echo getUrl('logout')?>">  logout</a></span>

          <?php }else{ ?>
                    <a href="<?php echo getUrl('login') ?>">
          <span class="glyphicon glyphicon-log-in"></span> Login</a>
          <?php } ?></a>
 <?php }else{?>
   <a href="<?php echo getUrl('login') ?>">
          <span class="glyphicon glyphicon-log-in"></span> Login</a>
<?php } ?>
        </li>

    	</ul>
    </div>
    <!-- </div> -->
</div>
</nav>
<!-- het memu -->
<br>

    
    <?php include_once $viewPath; ?>



</br>


<footer class="container-fluid text-center">
	<p>Bài Asignment của sinh viên FPT polytechnic</p>
</footer>

</body>
</html>
