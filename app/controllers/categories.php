<?php
  class Categories extends Controller{
  protected $categoryModel;
  protected $productModel;

  protected $userModel;
    public function __construct(){
      if(!isset($_SESSION['user_id'])){
        redirect('users');
      }
      // Load Models
      $this->categoryModel = $this->model('Category');
      $this->productModel = $this->model('Product');
      $this->userModel = $this->model('User');
    }

    // Load All products
    public function index(){
      $categories = $this->categoryModel->getCategories();

      $data = [
        'categories' => $categories
      ];
      $this->view('products/index', $data);
    }

    // Show Single Post
    public function show($id){
      $post = $this->categoryModel->getPostById($id);
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

    

        $data = [
          'nom' => trim($_POST['nom']),
          'user_id' => $_SESSION['user_id'],   
        ];
      
          //Execute
          if($this->categoryModel->addCategory($data)){
            // Redirect to login
            flash('category_added', 'Category Added');
            redirect('users');
          } else {
            die('Something went wrong');
          } 

       
      } else {
        $data = [
          'nom' => '',
        ];

        $this->view('categories/add', $data);
      }
    }

 

    // Delete Post
    public function delete($id){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //Execute
        if($this->categoryModel->deleteCategory($id)){
          // Redirect to login
          flash('category_message', 'Category Removed');
          redirect('products/index');
          } else {
            die('Something went wrong');
          }
      } else {
        redirect('products/index');
      }
    }
  }