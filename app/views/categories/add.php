
<?php require APPROOT . '/views/inc/header.php'; ?>


<div id="formAdd">
<form action="<?php echo URLROOT; ?>/categories/add" method="post" enctype="multipart/form-data" >
    <div id="show_item">
    <div class="row">
     <div class="form-row">
    <div class="form-group col-md-6">
      <label for="imputForNom">Category Name:</label>
      <input type="text" name="nom" class="form-control"  value="<?php echo $data['nom']; ?>">
    </div>
        </div>
    </div>
    <br>    <br>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
