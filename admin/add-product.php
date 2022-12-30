<?php include('includes/header.php');?>



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Product</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="code.php" enctype='multipart/form-data'>
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <label>Select Category</label>
                                <select class="form-select" >
                                    <option selected>Select Category</option>
                                        <?php 
                                          $categories =getAll("categories");
                                          if(mysqli_num_rows($categories) > 0){
                                            foreach($categories as $name){
                                              ?>
                                                 <option value="<?= $name['id']; ?>"><?= $name['id']; ?></option>   
                                              <?php    
                                          }
                                      }
                                         else
                                         {
                                            echo "No category available";
                                         }
                                         
                                        ?>
                                 </select>
                            </div>

                            <div class="col-md-12 mb-4">
                                <label>Product Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Category Name">
                            </div>
                            <div class="col-md-12 mb-4">
                                <label>Product Description</label>
                                <input type="text" name="description" class="form-control" placeholder="Enter Product Description ">
                            </div>
                            <div class="col-md-12 mb-4 ">
                                <label> Upload Image</label>
                                <input type="file" name="image" class="form-control" placeholder="Enter Product image">
                            </div>
                            <div class="col-md-12 mb-4 ">
                                <label>Product Price </label>
                                <input type="file" name="price" class="form-control" placeholder="Enter Product Price">
                            </div>
                            <div class="col-md-12 mb-4 ">
                                <label>Product Quantity</label>
                                <input type="file" name="qty" class="form-control" placeholder="Enter Product Quantity">
                            </div>
                            <div class="col-md-12 mb-4 ">
                                <button type="submit" class="btn btn-primary" name="add-product-btn"> Save</button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</div>
<?php include('includes/footer.php');?>