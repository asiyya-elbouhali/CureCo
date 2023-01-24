
<?php require APPROOT . '/views/inc/header.php'; ?>


<div id="formAdd">
    <div id="show_alert"></div>
<form class="addProductform"  action="<?php echo URLROOT; ?>/products/add" method="post" enctype="multipart/form-data" id="insert_form">
    <div id="show_item">
    <h2>Medicine Information:</h2>

    <div class="row">
     <div class="form-row">
    <div class="form-group col-md-6">
      <label for="imputForNom">Nom</label>
      <input type="text" name="nom[]" class="form-control"  value="<?php echo $data['nom']; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputProduct">Company</label>
      <input type="text" name="company[]" class="form-control" value="<?= $data["company"] ?>" >
    </div>
    </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputPrice">Price</label>
    <input type="number" name="price[]" class="form-control" value="<?= $data["price"] ?>">
  </div>
  <div class="form-group col-md-6">
    <label for="inputStock">Stock</label>
    <input type="number" name="quantity[]" class="form-control" value="<?= $data["quantity"] ?>">
  </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCategory">Category</label>
      <select id="id_category" name="category[]" class="form-control" >
        <option selected >Choose...</option>
        <?php foreach ($data['categories'] as $category): ?>
        <option class="text-dark" value="<?= $category->id; ?>" > <?= $category->nom; ?></option>
        <?php endforeach ; ?>
      </select>
    </div>  
    <div class="form-group col-md-6">
      <label for="inputImage">Image</label>
      <input type="file" name="image[]" class="form-control imageProduct" value="<?= $data["image"] ?>">
    </div>
  </div>
  <div class="form-group ">
      <label for="inputDescription">Description</label>
      <input type="text" name="description[]" class="form-control" id="inputCity" value="<?= $data["description"] ?>">
    </div>
    </div>
    </div>
    <button type="button" id="btnAdd" class="btn btn-warning addItemBtn">Add</button>
    <button type="button"  class="btn btn-danger removeItemBtn" >Remove</button>

   <!-- <button type="button"  class="btn float-left add_item_btn" >
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"  class="bi bi-plus" viewBox="0 0 16 16"><path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
    </svg></button> -->
    <br>    <br>
    <!-- <input type="submit" class="btn btn-primary " value="submit"> -->
    <input type="submit" class="btn addProductBtn submitBtn" id="insert_btn" value="submit">
  </form>
</div>




























<script>
const add = document.getElementById('show_item');
document.getElementById('btnAdd').addEventListener('click', ()=>
{
add.innerHTML += `
<h2>Medicine</h2>

<div class="row">
     <div class="form-row">
    <div class="form-group col-md-6">
      <label for="imputForNom">Nom</label>
      <input type="text" name="nom[]" class="form-control"  value="<?php echo $data['nom']; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputProduct">Company</label>
      <input type="text" name="company[]" class="form-control" value="<?= $data["company"] ?>" >
    </div>
    </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputPrice">Price</label>
    <input type="number" name="price[]" class="form-control" value="<?= $data["price"] ?>">
  </div>
  <div class="form-group col-md-6">
    <label for="inputStock">Stock</label>
    <input type="number" name="quantity[]" class="form-control" value="<?= $data["quantity"] ?>">
  </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCategory">Category</label>
      <select id="id_category" name="category[]" class="form-control" >
        <option selected >Choose...</option>
        <?php foreach ($data['categories'] as $category): ?>
        <option class="text-dark" value="<?= $category->id; ?>" > <?= $category->nom; ?></option>
        <?php endforeach ; ?>
      </select>
    </div>  
    <div class="form-group col-md-6">
      <label for="inputImage">Image</label>
      <input type="file" name="image[]" class="form-control imageProduct" value="<?= $data["image"] ?>">
    </div>
  </div>
  <div class="form-group ">
      <label for="inputDescription">Description</label>
      <input type="text" name="description[]" class="form-control" id="inputCity" value="<?= $data["description"] ?>">
    </div>
    </div>
`})


</script>

<?php require APPROOT . '/views/inc/footer.php'; ?>
