<?php
  class Product {
    private $db;
    
    public function __construct(){
      $this->db = new Database;
    }

    // Get All Products
    public function getProducts(){
      $Limit = 6;
      $page_number = isset($_GET['page']) ? (int)$_GET['page']: 1;
      $page_number = $page_number < 1 ? 1 : $page_number;
      $offset = ($page_number - 1) * $Limit;
      $this->db->query("SELECT p.*,c.nom as nameCategory  FROM products p,categories c WHERE p.id_category=c.id ORDER BY p.price ASC,p.nom  LIMIT $Limit OFFSET $offset");

      $results = $this->db->resultset();

      return $results;
    }

    public function getProductsByName(){
      $Limit = 6;
      $page_number = isset($_GET['page']) ? (int)$_GET['page']: 1;
      $page_number = $page_number < 1 ? 1 : $page_number;
      $offset = ($page_number - 1) * $Limit;
      $this->db->query("SELECT p.*,c.nom as nameCategory  FROM products p,categories c WHERE p.id_category=c.id ORDER BY p.nom ASC  LIMIT $Limit OFFSET $offset");

      $results = $this->db->resultset();

      return $results;
    }
    public function getProductsByPrice(){
      $Limit = 6;
      $page_number = isset($_GET['page']) ? (int)$_GET['page']: 1;
      $page_number = $page_number < 1 ? 1 : $page_number;
      $offset = ($page_number - 1) * $Limit;
      $this->db->query("SELECT p.*,c.nom as nameCategory  FROM products p,categories c WHERE p.id_category=c.id ORDER BY p.price ASC  LIMIT $Limit OFFSET $offset");

      $results = $this->db->resultset();

      return $results;
    }

    public function getMaxPrice(){
    
      $this->db->query("SELECT MAX(price) AS MaxPrice FROM products");

      $results = $this->db->resultset();

      return $results;
    }
    public function getMinPrice(){
    
      $this->db->query("SELECT MIN(price) AS MinPrice FROM products");

      $results = $this->db->resultset();

      return $results;
    }
    public function getTotalPrice(){
    
      $this->db->query("SELECT COUNT(nom) AS TotalPrice FROM products");

      $results = $this->db->resultset();

      return $results;
    }

    public function getAveragePrice(){
    
      $this->db->query("SELECT AVG(price) AS AveragePrice FROM products");

      $results = $this->db->resultset();

      return $results;
    }
    public function getProductsSearched($search){
      $this->db->query("SELECT products.*,
                  categories.nom AS nameCategory
                  FROM  products  INNER JOIN categories  ON products.id_category = categories.id WHERE products.nom LIKE '%$search%' OR categories.nom LIKE '%$search%';");
      $results = $this->db->resultset();

      return $results;

    }


    // Get Post By ID
    public function getProductById($id){
      $this->db->query("SELECT products.*,
      categories.nom AS category
       FROM products
             INNER JOIN categories
             ON products.id_category = categories.id
             WHERE products.id = :id");

      $this->db->bind(':id', $id);
      
      $row = $this->db->single();

      return $row;
    }

    public function checkProductExistance($product){

    $this->db->query("SELECT * FROM products WHERE nom = '$product '");
    $row = $this->db->single();
    if($row==false){
      return false;
    }
  
    else{
      return true;
    } 
    

    }





    // Add Post
    public function addProduct($data){
      // Prepare Query
      // foreach ($data['nom'] as $key => $value){

      $this->db->query('INSERT INTO products (nom, company, price, description, image, quantity,id_category) 
      VALUES (:nom, :company, :price,:description, :image,:quantity,:category)');

      // Bind Values
      $this->db->bind(':nom', $data['nom']);
      $this->db->bind(':company', $data['company']);
      $this->db->bind(':price', $data['price']);
      $this->db->bind(':category', $data['category']);
      $this->db->bind(':description', $data['description']);
      $this->db->bind(':image', $data['image']);
      $this->db->bind(':quantity', $data['quantity']);
      // $this->db->bind(':user_id', $data['user_id']);
      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    // Update Post
    public function updateProduct($data){
      // Prepare Query
      if(!empty($data['image'])){
      $this->db->query('UPDATE products SET nom = :nom, company = :company, price = :price, quantity = :quantity, id_category = :category, image = :image, description = :description WHERE id = :id');
    } else {
      $this->db->query('UPDATE products SET nom = :nom, company = :company, price = :price, quantity = :quantity, id_category = :category, description = :description WHERE id = :id');

    }
      // Bind Values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':nom', $data['nom']);
      $this->db->bind(':company', $data['company']);
      $this->db->bind(':price', $data['price']);
      $this->db->bind(':quantity', $data['quantity']);
    if (!empty($data['image'])) {
      $this->db->bind(':image', $data['image']);
    }
      $this->db->bind(':category', $data['category']);
      $this->db->bind(':description', $data['description']);

      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    // Delete Post
    public function deleteProduct($id){
      // Prepare Query
      $this->db->query('DELETE FROM products WHERE id = :id');

      // Bind Values
      $this->db->bind(':id', $id);
      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
  }