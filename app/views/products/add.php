<?php require APPROOT . '/views/inc/header.php'; ?>


<div id="formAdd">
  <div id="show_alert"></div>
  <form class="addProductform" action="<?php echo URLROOT; ?>/products/add" method="post" enctype="multipart/form-data" id="insert_form">
    <div id="show_item">
      <h2>Medicine Information:</h2>

      <div class="row">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="imputForNom">Nom</label>
            <input type="text" name="nom[]" class="form-control productName" id="productNameID" value="<?php echo $data['nom']; ?>">
          <span class="productName_err"></span>
          </div>
          <div class="form-group col-md-6">
            <label for="inputProduct">Company</label>
            <input type="text" name="company[]" class="form-control productCompany" id="productCompany" value="<?= $data["company"] ?>">
            <span class="productCompany_err"></span>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputPrice">Price</label>
            <input type="number" name="price[]" class="form-control productPrice" id="productPrice" value="<?= $data["price"] ?>">
            <span class="productPrice_err"></span>
          </div>
          <div class="form-group col-md-6">
            <label for="inputStock">Stock</label>
            <input type="number" name="quantity[]" class="form-control productQuantity" id="productQuantity" value="<?= $data["quantity"] ?>">
            <span class="productQuantity_err"></span>

          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCategory">Category</label>
            <select id="id_category" name="category[]" class="form-control productCategory">
              <option selected></option>
              <?php foreach ($data['categories'] as $category) : ?>
                <option class="text-dark" value="<?= $category->id; ?>"> <?= $category->nom; ?></option>
              <?php endforeach; ?>
            </select>
            <span class="productCategory_err"></span>

          </div>
          <div class="form-group col-md-6">
            <label for="inputImage">Image</label>
            <input type="file" name="image[]" id="productImage" class="form-control imageProduct productImage" value="<?= $data["image"] ?>" >
            <span class="productImage_err"></span>

          </div>
        </div>
        <div class="form-group ">
          <label for="inputDescription">Description</label>
          <input type="text" name="description[]" id="productDescription" class="form-control productDescription" id="inputCity" value="<?= $data["description"] ?>">
          <span class="productDescription_err"></span>

        </div>
      </div>
    </div>
    <button type="button" id="btnAdd" class="btn btn-warning addItemBtn">Add</button>
    <button type="button" class="btn btn-danger removeItemBtn">Remove</button>
    <br> <br>
    <input type="submit" class="btn addProductBtn submitBtn" id="insert_btn" value="submit">
  </form>
</div>




























<script>
  const add = document.getElementById('show_item');
  document.getElementById('btnAdd').addEventListener('click', () => {
    add.innerHTML += `
<h2>Medicine</h2>

<div class="row">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="imputForNom">Nom</label>
            <input type="text" name="nom[]" class="form-control productName" id="productNameID" value="<?php echo $data['nom']; ?>">
          <span class="productName_err"></span>
          </div>
          <div class="form-group col-md-6">
            <label for="inputProduct">Company</label>
            <input type="text" name="company[]" class="form-control productCompany" id="productCompany" value="<?= $data["company"] ?>">
            <span class="productCompany_err"></span>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputPrice">Price</label>
            <input type="number" name="price[]" class="form-control productPrice" id="productPrice" value="<?= $data["price"] ?>">
            <span class="productPrice_err"></span>
          </div>
          <div class="form-group col-md-6">
            <label for="inputStock">Stock</label>
            <input type="number" name="quantity[]" class="form-control productQuantity" id="productQuantity" value="<?= $data["quantity"] ?>">
            <span class="productQuantity_err"></span>

          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCategory">Category</label>
            <select id="id_category" name="category[]" class="form-control productCategory">
              <option selected></option>
              <?php foreach ($data['categories'] as $category) : ?>
                <option class="text-dark" value="<?= $category->id; ?>"> <?= $category->nom; ?></option>
              <?php endforeach; ?>
            </select>
            <span class="productCategory_err"></span>

          </div>
          <div class="form-group col-md-6">
            <label for="inputImage">Image</label>
            <input type="file" name="image[]" id="productImage" class="form-control imageProduct productImage" value="<?= $data["image"] ?>" >
            <span class="productImage_err"></span>

          </div>
        </div>
        <div class="form-group ">
          <label for="inputDescription">Description</label>
          <input type="text" name="description[]" id="productDescription" class="form-control productDescription" id="inputCity" value="<?= $data["description"] ?>">
          <span class="productDescription_err"></span>

        </div>
      </div>
`
  })
</script>

<?php require APPROOT . '/views/inc/footer.php'; ?>