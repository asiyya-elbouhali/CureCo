<?php
  class Category {
    private $db;
    
    public function __construct(){
      $this->db = new Database;
    }

    // Get All Products
    public function getCategories(){
      $this->db->query("SELECT * 
                        FROM categories");

      $results = $this->db->resultset();

      return $results;
    }

    // Get Post By ID
    public function getCategoryById($id){
      $this->db->query("SELECT * FROM categories WHERE id = :id");

      $this->db->bind(':id', $id);
      
      $row = $this->db->single();

      return $row;
    }

    // Add Post
    public function addCategory($data){
      // Prepare Query
      // foreach ($data['nom'] as $key => $value){

      $this->db->query('INSERT INTO categories (nom) 
      VALUES (:nom)');

      // Bind Values
      $this->db->bind(':nom', $data['nom']);
      // $this->db->bind(':user_id', $data['user_id']);
      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    // Update Post
    public function updateCategory($data){
      // Prepare Query
      $this->db->query('UPDATE categories SET nom = :nom WHERE id = :id');

      // Bind Values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':nom', $data['nom']);
      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    // Delete Post
    public function deleteCategory($id){
      // Prepare Query
      $this->db->query('DELETE FROM categories WHERE id = :id');

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