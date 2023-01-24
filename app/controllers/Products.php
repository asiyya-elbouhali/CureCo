<?php
  class Products extends Controller{
  protected $productModel;
  protected $categoryModel;

  protected $userModel;
    public function __construct(){
      if(!isset($_SESSION['user_id'])){
        redirect('products');
      }
      // Load Models
      $this->productModel = $this->model('Product');
      $this->categoryModel = $this->model('Category');

      $this->userModel = $this->model('User');
    }

    // Load All products
    public function index(){

      $products = $this->productModel->getProducts();
      $categories = $this->categoryModel->getCategories();
      $maxPrice = $this->productModel->getMaxPrice();
      $minPrice = $this->productModel->getMinPrice();
      $totalPrice = $this->productModel->getTotalPrice();
      $averagePrice = $this->productModel->getAveragePrice();
      $allProducts = $this->productModel->getProducts();


      if (!empty($_POST['search'])) {
        $search = $_POST['search'];
        $products = $this->productModel->getProductsSearched($search);
        $maxPrice = $this->productModel->getMaxPrice();
        $minPrice = $this->productModel->getMinPrice();
        $totalPrice = $this->productModel->getTotalPrice();
        $averagePrice = $this->productModel->getAveragePrice();
        $allProducts = $this->productModel->getProducts();

  
  
        $data = [
          'maxPrice' => $maxPrice,
          'minPrice' => $minPrice,
          'averagePrice' => $averagePrice,
          'totalPrice' => $totalPrice,
          'products' => $products,
          'categories' => $categories,
          'allProducts' => $allProducts
        ];
  
      }
    if (isset($_POST['price'])) {
      $products = $this->productModel->getProductsByPrice();
      $maxPrice = $this->productModel->getMaxPrice();
      $minPrice = $this->productModel->getMinPrice();
      $totalPrice = $this->productModel->getTotalPrice();
      $averagePrice = $this->productModel->getAveragePrice();
      $allProducts = $this->productModel->getProducts();



      $data = [
        'maxPrice' => $maxPrice,
        'minPrice' => $minPrice,
        'averagePrice' => $averagePrice,
        'totalPrice' => $totalPrice,
        'allProducts' => $allProducts,
        'products' => $products,
        'categories' => $categories
      ];

    }
    if(isset($_POST['name'])){
      $products = $this->productModel->getProductsByName();
      $maxPrice = $this->productModel->getMaxPrice();
      $minPrice = $this->productModel->getMinPrice();
      $totalPrice = $this->productModel->getTotalPrice();
      $averagePrice = $this->productModel->getAveragePrice();
      $allProducts = $this->productModel->getProducts();


      $data = [
        'maxPrice' => $maxPrice,
        'minPrice' => $minPrice,
        'averagePrice' => $averagePrice,
        'totalPrice' => $totalPrice,
        'products' => $products,
        'categories' => $categories,
        'allProducts' => $allProducts

      ];
    }


      $data = [
        'maxPrice' => $maxPrice,
        'minPrice' => $minPrice,
        'averagePrice' => $averagePrice,
        'totalPrice' => $totalPrice,
        'products' => $products,
        'categories' => $categories,
        'allProducts' => $allProducts

      ];
      
      $this->view('products/index', $data);
    }

    // Show Single Post
    public function show($id){
      $post = $this->productModel->getPostById($id);
      $user = $this->userModel->getUserById($post->user_id);

      $data = [
        'post' => $post, 
        'user' => $user
      ];

      $this->view('products/show', $data);
    }

    // Add Post
    public function add(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST
        $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      //   echo'<pre>';
      // var_dump($_POST);
      //   echo'</pre>';
      // die();


        for($i=0; $i<count($_POST['nom']); $i++) {
        // traitement de l'image
        $target_dir = "./uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"][$i]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            echo "<a href='cruises'>return to cruises</a>";
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"][$i], $target_file)) {
                $image = "uploads/" . $_FILES["image"]["name"][$i];
}
}
        $data = [
          'nom' => trim($_POST['nom'][$i]),
          'company' => trim($_POST['company'][$i]),
          'price' => trim($_POST['price'][$i]),
          'category' => trim($_POST['category'][$i]),
          'description' => trim($_POST['description'][$i]),
          'image' =>  trim($image[$i]),
          'quantity' => trim($_POST['quantity'][$i]),
          
          // 'user_id' => $_SESSION['user_id'][$i],   
        ];
      
        $ProductAdd = $this->productModel->addProduct($data);
      }

          //Execute
          if($ProductAdd){
            // Redirect to login
            flash('post_added', 'Post Added');
            redirect('users');
          } else {
            die('Something went wrong');
          } 

       
      } else {
        $categories = $this->categoryModel->getCategories();

        $data = [
          'nom' => '',
          'company' => '',
          'price' => '',
          'category' => '',
          'description' => '',
          'image' => '',
          'quantity' => '',
          'categories' => $categories         

        ];

        $this->view('products/add', $data);
      }
    }

    // Edit Post
    public function edit($id){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // Sanitize POST
        $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


        if (!empty($_FILES["image"]["name"])) {
          $target_dir = "./uploads/";
          $target_file = $target_dir . basename($_FILES["image"]["name"]);
          $uploadOk = 1;
          $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  
  
          if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
          ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
          }
  
          if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // echo "<a href='cruises'>return to cruises</a>";
          } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
              $image = "uploads/" . $_FILES["image"]["name"];
            }
          }
          $data = [
            'id' => $id,
            'nom' => trim($_POST['nom']),
            'company' => trim($_POST['company']),
            'price' => trim($_POST['price']),
            'category' => trim($_POST['category']),
            'description' => trim($_POST['description']),
            'quantity' => trim($_POST['quantity']),
            'image' => trim($image),
            // 'user_id' => $_SESSION['user_id'],   
          ];
        }
        else{
          $data = [
            'id' => $id,
            'nom' => trim($_POST['nom']),
            'company' => trim($_POST['company']),
            'price' => trim($_POST['price']),
            'category' => trim($_POST['category']),
            'description' => trim($_POST['description']),
            'quantity' => trim($_POST['quantity']),
            // 'user_id' => $_SESSION['user_id'],   
          ];
        }
          //Execute
          if($this->productModel->updateProduct($data)){
          // Redirect to login
          flash('product_message', 'Product Updated');
          redirect('products/index');
          } else {
            die('Something went wrong');
          }
        }
       

       else {
        // Get post from model
        $product = $this->productModel->getProductById($id);
        $categories = $this->categoryModel->getCategories();


      
        $data = [
          'id' => $product->id,
          'nom' =>$product->nom,
          'company' => $product->company,
          'price' => $product->price,
          'description' => $product->description,
          'category' => $product->category,
          'quantity' => $product->quantity,
          'image' => $product->image, 
          'categories' => $categories,         
        ];

        $this->view('products/edit', $data);
      }
    }

    // Delete Post
    public function delete($id){
        //Execute
        if($this->productModel->deleteProduct($id)){
          // Redirect to login
          flash('post_message', 'Post Removed');
          redirect('products/index');
          } else {
            die('Something went wrong');
          }
      
    }
  }