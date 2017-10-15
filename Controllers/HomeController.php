<?php 

/**
*
* 
*/
require_once 'Models/Category.php';
require_once 'Models/Product.php';
require_once 'Models/User.php';
require_once 'BaseController.php';
class HomeController extends BaseController
{
	function Index(){
		// config index o day
		$spmoi=Product::where(['ShowMain','1']);
		$spxemnhieu=Product::where(['ShowMain','2']);
		$spbanchay=Product::where(['ShowMain','3']);
		$sphot=Product::where(['ShowMain','4']);
		$allpro=Product::all();
		$allCate=Category::all();
		$allinfo=['allCate' => $allCate,
					'allpro' => $spmoi,
					'spbanchay' => $spbanchay,
					'spxemnhieu' => $spxemnhieu,
					'sphot' => $sphot,


	];

		return $this->render("views/homepage.php", $allinfo, 'views/main.layout.php');
	}
	function About(){

		return $this->render("views/about.php", [''], 'views/main.layout.php');
	}
	function Contact(){
		return $this->render("views/contact.php", [''], 'views/main.layout.php');
	}
	function category(){
		$allCate=Category::all();
		return $this->render("views/category.php", ['allCate' => $allCate], 'views/main.layout.php');
	}
	function showcategory(){
		$id=$_GET['id'];
		$allCate=Category::findOne($id);
		$allproduct=Product::where(['idDanhMuc',$id]);
		return $this->render("views/show_category.php", ['allCate' => $allCate ,'allproduct' => $allproduct], 'views/main.layout.php');
	}
	function showProduct(){
		$id=$_GET['id'];
		$allproduct=Product::findOne($id);
		$showcate=Category::findOne($allproduct->idDanhMuc);
		return $this->render("views/chitietsp.php", ['allproduct' => $allproduct ,'showcate' => $showcate], 'views/main.layout.php');
	}

	function Login(){
		return $this->render("views/login.php", [''], 'views/main.layout.php');
	}
	function LoginSubmit(){
		if (isset($_POST['email'])) {
			$email=addslashes($_POST['email']);
			$password=sha1($_POST['password']);

			$checkmail=User::where(['email',$email]);
			foreach ($checkmail as $checkmail ) {
			}
			if (!empty($checkmail)) {
				if ($password=$checkmail->password && $email=$checkmail->email) {
					if ($checkmail->level==1) {
						$_SESSION['name']=$checkmail->Ten;		
						$_SESSION['id']=$checkmail->id;		
						$_SESSION['email']=$checkmail->email;		
						$_SESSION['level']="admin";		
						return $this->redirect('admin/admin');
					}else{
						$_SESSION['name']=$checkmail->Ten;		
						$_SESSION['id']=$checkmail->id;	
						$_SESSION['email']=$checkmail->email;		
						$_SESSION['level']='member';		
						return $this->redirect('admin/member');
					}
				}else{
					return $this->redirect('login?error=mailfail');
				}
			}else{
				return $this->redirect('login?error=mailfail');
			}
			
		}else{
			return $this->redirect('login?error=loginfail');
		}

	}
	

	// function 

	function logout(){
		session_destroy();
	}
}




?>