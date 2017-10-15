<?php 

/**
*
* 
*/
// class admin
require_once 'Models/Category.php';
require_once 'Models/Product.php';
require_once 'Models/User.php';
require_once 'BaseController.php';
class AdminController extends BaseController
{
	function Index(){
		if (isset($_GET['insert'])=='success') {
			$msg='Thêm Sản Phẩm Thành Công';
		}elseif (isset($_GET['delete'])=='success') {
			$msg='Xóa Sản Phẩm Thành Công';
		}
		elseif (isset($_GET['update'])=='success') {
			$msg='Update Sản Phẩm Thành Công';
		}
		elseif (isset($_GET['deletefail'])=='faile') {
			$msg='error ! xóa sản phẩm ko thành công vui lòng kiểm tra lại liên kết giữa các bảng hoặc thử lại sau';
		}

		else{
			$msg=null;
		}
		$product=Product::all();
		return $this->render("views/admin/index.php", ['product' => $product ,'msg' =>$msg], 'views/admin/admin.layout.php');
	}
	

	function ShowOder(){

		return $this->render("views/admin/show_oder.php", [], 'views/admin/admin.layout.php');
	}

	function ShowMember(){
		$users=User::all();
		return $this->render("views/admin/show_member.php", ['users' => $users], 'views/admin/admin.layout.php');
	}









// ----category--------------------------------
// 

	function UpdateCategory(){
		$id = isset($_GET['id']) ? $id=$_GET['id'] : null ;
		if (isset($_GET['danhmuc'])=='datontai') {
			$msg='Danh Mục Đã Tồn Tại Trên Hệ Thống Vui Lòng Lựa Chọn Tên Khác';
		} else {
			$msg=null;
		}
		
		$ShowCategory=Category::findOne($id);
		return $this->render("views/admin/category_update.php", ['msg' => $msg , 'ShowCategory' => $ShowCategory], 'views/admin/admin.layout.php');
	}

	function Category(){
		$category=Category::all();
		return $this->render("views/admin/admin_category.php", ['category' => $category], 'views/admin/admin.layout.php');
	}

	function CreateCategory(){
		if (isset($_GET['danhmuc'])=='tontai') {
			$msg='Tên danh Mục Đã Tồn Tại Trên Hệ Thống Xin mời Chọn Tên Danh Mục Khác';
		}
		else if (isset($_GET['uploadimage'])=='error') {
			$msg='Định Dạng File ảnh bị lỗi vui lòng chọn lại';
		} 
		
		else{
			$msg=null;
		}
		$ShowCategory=Category::all();
		return $this->render("views/admin/create_category.php", ['msg' => $msg , 'ShowCategory' => $ShowCategory], 'views/admin/admin.layout.php');
	}

	function CreateProduct(){
		if (isset($_GET['uploadimage'])) {
			$msg='Định Dạng ảnh sai xin mới chọn lại';
		}else{
			$msg=null;
		}
		$ShowUser=User::all();
		$ShowCategory=Category::all();
		return $this->render("views/admin/create_product_form.php", ['ShowUser' => $ShowUser , 'ShowCategory' => $ShowCategory ,'msg' => $msg], 'views/admin/admin.layout.php');
	}
	function CreateCategorySubmit(){

		$DanhMuc = isset($_POST['DanhMuc'])==true ? $_POST['DanhMuc'] : null;//gán post danh muc cho danh mục
		$id = isset($_POST['id'])==true ? $_POST['id'] : null;
		$checkdanhmuc=Category::where(['Ten',"$DanhMuc"]); //truyền $danhmuc vào nếu tồn tại và tồn tại biến $i(ko phải là upate) thì nhảy sang trường hợp 1 trở về và thông báo lỗi
		foreach ($checkdanhmuc as $checkdanhmuc1) {// vòng lặp láy ra giá trị
		}
		$checktru=Category::where(['Ten',"$DanhMuc"]);// vòng check dành cho update nếu tồn tại thì nhảy vào vòng lặp 
		foreach ($checktru as $checktru1 ) {
		}

		if (isset($id)!=true && !empty($checkdanhmuc1)) {
			return $this->redirect('admin/category_create?danhmuc=tontai');
			die;
		}else if (!empty($checktru1) && isset($id)) {
			return $this->redirect("admin/update_category?danhmuc=datontai&id=$id");
			die;
		}

		else{


			$created_by =$_SESSION['id'];
			if ($id != null) {
			// phần dành cho update
				$model=Category::findOne($id);
				$upLoadHA=new BaseModel();
				$upLoadHA->filename='hinhanh';
				$upLoadHA->UploadAnh1();
				$HAA=$upLoadHA->imgupload;
		// neu nguoi dung khong chon anh thi mac dinh se lay anh co san trong db
				if (!empty($upLoadHA->error)) {
					return $this->redirect("admin/update_category?uploadimage=error&id=$id");
					die;
				}else{
					$HA = (!empty($HAA)) ? $HAA : $model->Hinh ;
				}
			}else{
				$model = new Category();

// phần validate dành cho insert
				$upLoadHA=new BaseModel();
				$upLoadHA->filename='hinhanh';
				$upLoadHA->UploadAnh();
				if (!empty($upLoadHA->error)) {
					return $this->redirect('admin/category_create?uploadimage=error');
					die;
				}else{
					$HA=$upLoadHA->imgupload;

				}


			}


			$model->Ten = $DanhMuc;
			$model->created_by = $created_by;
			$model->Hinh = $HA;

			if(isset($model->id)){
				$model->update();

				return $this->redirect("admin/category?update=success");

			}else{
				$model->insert();
				return $this->redirect("admin/category?insert=success");

			}
		}


	}



// --------------------------end category------------------------
// 
// 
// 


	function UpdateFormProduct(){
		if (isset($_GET['uploadimage'])) {
			$msg='Định Dạng ảnh sai xin mới chọn lại';
		}else{
			$msg=null;
		}
		$id=$_GET['id'];
		$ShowUser=User::all();
		$ShowProduct=Product::where(['id',"$id"]);
		return $this->render("views/admin/update_Product_form.php", ['ShowUser' => $ShowUser , 'ShowProduct' => $ShowProduct , 'msg' => $msg], 'views/admin/admin.layout.php');
	}



	function CreateProductSubmit(){

		$id = isset($_POST['id'])==true ? $_POST['id'] : null;
		$Ten = isset($_POST['Ten'])==true ? $_POST['Ten'] : null;
		$NoiDung = isset($_POST['MoTa'])==true ? $_POST['MoTa'] : null;
		$gia = isset($_POST['gia'])==true ? $_POST['gia'] : null;
		$ShowMain = isset($_POST['ShowMain'])==true ? $_POST['ShowMain'] : null;
		$DanhMuc = isset($_POST['DanhMuc'])==true ? $_POST['DanhMuc'] : null;
		$created_by = isset($_POST['created_by'])==true ? $_POST['created_by'] : null;
		if ($id != null) {
			// phần dành cho update
			$model=Product::findOne($id);
			$upLoadHA=new BaseModel();
			$upLoadHA->filename='hinhanh';
			$upLoadHA->UploadAnh1();
			$HAA=$upLoadHA->imgupload;
		// neu nguoi dung khong chon anh thi mac dinh se lay anh co san trong db
			if (!empty($upLoadHA->error)) {
				return $this->redirect("admin/update_Product_form?uploadimage=error&id=$id");
				die;
			}else{
				$HA = (!empty($HAA)) ? $HAA : $model->Hinh ;
			}
		}else{
			$model = new Product();

// phần validate dành cho insert
			$upLoadHA=new BaseModel();
			$upLoadHA->filename='hinhanh';
			$upLoadHA->UploadAnh();
			if (!empty($upLoadHA->error)) {
				return $this->redirect('admin/create_product?uploadimage=error');
				die;
			}else{
				$HA=$upLoadHA->imgupload;

			}


		}


		$model->Ten = $Ten;
		$model->NoiDung = $NoiDung;
		$model->gia = $gia;
		$model->ShowMain = $ShowMain;
		$model->created_by = $created_by;
		$model->idDanhMuc = $DanhMuc;
		$model->Hinh = $HA;

		if(isset($model->id)){
			$model->update();

			return $this->redirect("admin/index?update=success");

		}else{
			$model->insert();
			return $this->redirect("admin/index?insert=success");

		}




	}


}
