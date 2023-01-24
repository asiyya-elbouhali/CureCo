<?php require APPROOT . '/views/inc/header.php'; ?>

<div id="formAdd">
    <div id="show_alert"></div>
<form  action="<?php echo URLROOT; ?>/products/edit/<?php echo $data['id'];?>" method="post" enctype="multipart/form-data" id="insert_form">
    <div id="show_item">
    <div class="row">
     <div class="form-row">
    <div class="form-group col-md-6">
      <label for="imputForNom">Nom</label>
      <input type="text" name="nom" class="form-control"  value="<?php echo $data['nom']; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputProduct">Company</label>
      <input type="text" name="company" class="form-control" value="<?= $data["company"] ?>" >
    </div>
    </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputPrice">Price</label>
    <input type="number" name="price" class="form-control" value="<?= $data["price"] ?>">
  </div>
  <div class="form-group col-md-6">
    <label for="inputStock">Stock</label>
    <input type="number" name="quantity" class="form-control" value="<?= $data["quantity"] ?>">
  </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCategory">Category</label>
      <select id="id_category" name="category" class="form-control" >
        <option selected >Choose...</option>
        <?php foreach ($data['categories'] as $category): ?>
        <option class="text-dark" value="<?= $category->id; ?>" <?php if($data["category"] == $category->nom){ echo("SELECTED") ;}?> > <?= $category->nom; ?></option>
        <?php endforeach ; ?>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputImage">Image</label>
      <input type="file" name="image" class="form-control imageProduct">
      <div>
                 <img src="<?= URLROOT.'/'.$data['image']?>" width="200px">
            </div> 
    </div>
  </div>
  <div class="form-group ">
      <label for="inputDescription">Description</label>
      <input type="text" name="description" class="form-control" id="inputCity" value="<?= $data["description"] ?>">
    </div>
    </div>
    </div>

    <br>    <br>
    <button type="submit" class="btn btn-primary submitBtn" id="insert_btn">Submit</button>
  </form>
</div>
 
        <?php require APPROOT . '/views/inc/footer.php'; ?>