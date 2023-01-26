<?php
  class Pages extends Controller{
  protected $productModel;
    public function __construct(){
      $this->productModel = $this->model('Product');

     
    }

    // Load Homepage
    public function index(){
      // If logged in, redirect to posts
      if(isset($_SESSION['user_id'])){
        redirect('products');
      }

      //Set Data
      $data = [
        'title' => 'Welcome To SharePosts',
        'description' => 'Simple social network built on the TraversyMVC PHP framework'
      ];

      // Load homepage/index view
      $this->view('users/login', $data);
    }
   
    public function home(){

     $homeProducts = $this->productModel->getProducts();

    $data = [
      'homeProducts' => $homeProducts,
    ];

      // Load homepage/index view
      $this->view('pages/home', $data);
    }


    public function about(){
      //Set Data
      $data = [
        'version' => '1.0.0'
      ];

      // Load about view
      $this->view('pages/about', $data);
    }
  }