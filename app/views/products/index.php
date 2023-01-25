
<?php require APPROOT . '/views/inc/header.php'; ?>




<body id="reportsPage" class="bg02">
    <div class="" id="home">
        <div class="container">
     

            <!-- row -->
            <div class="row tm-content-row tm-mt-big">
            <div class="container statisticsContainer">
                <div class="row">
                <div class="col-md-3">
                <div class="card-counter primary PriceAverage">
                    <i class="fa fa-medium"></i>
                    <span class="count-numbers"><?php printf("%.2f",$data['averagePrice'][0]->AveragePrice);?></span>
                    <span class="count-name">Price Average</span>
                </div>
                </div>

                <div class="col-md-3">
                <div class="card-counter danger MaxPrice">
                    <i class="fa fa-thermometer-full"></i>
                    <span class="count-numbers"><?php printf("%.2f",$data['maxPrice'][0]->MaxPrice);?></span>
                    <span class="count-name">Max Price</span>
                </div>
                </div>

                <div class="col-md-3">
                <div class="card-counter success TotalProducts">
                    <i class="fa fa-calculator"></i>
                    <span class="count-numbers"><?= $data['totalPrice'][0]->TotalPrice;?></span>
                    <span class="count-name">Products</span>
                </div>
                </div>

                <div class="col-md-3">
                <div class="card-counter info MinPrice">
                    <i class="fa fa-search-minus"></i>
                    <span class="count-numbers"><?php printf("%.2f",$data['minPrice'][0]->MinPrice);?></span>
                    <span class="count-name">Min Price</span>
                </div>
                </div>
            </div>
            </div>
                <div class="col-xl-8 col-lg-12 tm-md-12 tm-sm-12 tm-col">
                    <div class="bg-white tm-block h-100">
                        <div class="row">
                            
                            <div class="col-md-8 col-sm-12">
                                <h2 class="tm-block-title d-inline-block">Products</h2>
                                

                            </div>
                           
                                    
                            <form action="<?php echo URLROOT; ?>/products/index" method="post" class="searchFrom">
                            <div class="input-group rounded searchProduct">
                            <input name="search" list="search" type="search" class="form-control rounded" placeholder="Search" aria-label="Search" />
                            <datalist id="search" style="width: 100%;">
                            <?php foreach($data['allProducts'] as $product) :?>
                                <option value="<?= $product->nom;  ?>">
                                <?php  endforeach;?>
                            </datalist>
                            <span class="input-group-text border-0" id="search-addon">
                            <i class="fas fa-search"></i>
                            </span>
                            </div>
                            </form> 

                            <form action="<?php echo URLROOT; ?>/products/index" method="post" class="d-flex flex-col gap-2 justify-content-end">
                                <button  type="submit" class="btn btn-info priceSort" name="price" ><i class='fa-solid fa-arrow-down-short-wide'></i>  Price</button>
                                <button  type="submit" class="btn btn-info nameSort" name="name"> <i class='fa-solid fa-arrow-down-short-wide'></i> Name
</button>
                                </form>  
                            
                                          
                            <div class="col-md-4 col-sm-12  ">
                                
                                <a href="<?= URLROOT?>/products/add" class="btn btn-small addProductBtn " >Add New Product</a>
                                
                            </div>
                           

                        </div>
                        <div class="table-responsive table1 ">
                            <table class="table table-hover table-striped tm-table-striped-even mt-3 ">
                                <thead class="table2">
                                    <tr >
                                        <th scope="col">&nbsp;</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col" class="text-center">image</th>
                                        <th scope="col" class="text-center">Price</th>
                                        <th scope="col" class="text-center">Quantity</th>
                                        <th scope="col" class="text-center">Company</th>
                                        <th scope="col" class="text-center">Category</th>
                                        <th scope="col" class="text-center">Description</th>
                                        
                                        
                                        <th scope="col">&nbsp;</th>
                                        <th scope="col">&nbsp;</th>

                                    </tr>
                                </thead>
                                <tbody >
                                    <?php foreach($data['products'] as $product) :?>
                                    <tr class="table1">
                                        <th scope="row">
                                            <!-- <input type="checkbox" aria-label="Checkbox"> -->
                                        </th>
                                        <td class="text-center"><?= $product->nom;  ?></td>
                                        <td class="text-center"><img src="../<?php echo $product->image; ?>" width="80px"></td>
                                        <td class="text-center"><?= $product->price;  ?>,00$</td>
                                        <td class="text-center"><?= $product->quantity;  ?></td>
                                        <td class="text-center"><?= $product->company;  ?></td>
                                        
                                        <td class="text-center"><?= $product->nameCategory;  ?></td>
                                        <td class="text-center"><?= $product->description;  ?></td>

                                        
                                        
                                        <td>
                                            <a href="<?= URLROOT; ?>/products/delete/<?= $product->id; ?>"><i class="fas fa-trash-alt tm-trash-icon" id="deleteCategory"></i></a>
                                           
                                </td>
                                        <td>    <a href="<?php echo URLROOT; ?>/products/edit/<?php echo $product->id;?>"><i class="fas fa-edit editProduct"></i></a></td>
                                    </tr>
                                    <?php  endforeach;?>
                       
                                </tbody>
                            </table>
                        </div>

                        <div class="tm-table-mt tm-table-actions-row">
                            <!-- <div class="tm-table-actions-col-left">
                                <button class="btn btn-danger">Delete Selected Items</button>
                            </div> -->
                            <div class="tm-table-actions-col-right d-flex justify-content-center paginationProducts">
                                <!-- <span class="tm-pagination-label">Page</span> -->
                                <nav aria-label="Page navigation" class="d-inline-block">
                                <ul class="pagination">
                    <li class="page-item">
                    <?php for($i = 1 ; $i <= 2 ; $i++): ?>

                      <a class="page-link" href="<?= URLROOT?>/products/index?page=<?=$i-1;?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                      </a>
                    </li>
                    <?php for($i = 1 ; $i <= 7 ; $i++): ?>
                    <li class="page-item"><a class="page-link" href="<?= URLROOT?>/products/index?page=<?=$i;?>"><?= $i;?></a></li>
                    <?php endfor ;?>
                  

                    <li class="page-item">
                      <a class="page-link" href="<?= URLROOT?>/products/index?page=<?=$i+1;?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                      </a>
                    </li>
                    <?php endfor ;?>
                  </ul>
                                </nav>
                            </div>
                        </div>
                     
                    </div>
                </div>

                <div class="col-xl-4 col-lg-12 tm-md-12 tm-sm-12 tm-col">
                    <div class="bg-white tm-block h-100">
                        <h2 class="tm-block-title d-inline-block">Product Categories</h2>
                        <table class="table table-hover table-striped mt-3 table1">
                            <tbody>
                                <?php foreach ($data['categories'] as $category): ?>
                                <tr>
                                    <td><?= $category->nom; ?></td> 
                                    <td class="tm-trash-icon-cell">
                                        <form class="pull-right" action="<?= URLROOT; ?>/categories/delete/<?= $category->id; ?>" method="post">
                                        <i class="fas fa-trash-alt tm-trash-icon" id="deleteCategory"></i>
                                        <input type="submit"
                                    class="btn" id="delete" value="" > 
                                    </form></td>
                                </tr>
                                <?php endforeach ; ?>
                            </tbody>
                        </table>
                                <a href="<?= URLROOT?>/categories/add" class="btn btn-small btn-primary" >Add New Category</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    <?php require APPROOT . '/views/inc/footer.php'; ?>