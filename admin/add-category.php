<?php include('includes/header.php');?>



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add category</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="code.php" enctype='multipart/form-data'>
                        <div class="row">
                            <!-- <div class="col-md-12 mb-4">
                                <label>Category ID </label>
                                <input type="text" name="id" class="form-control" placeholder="Enter Category Name">
                            </div> -->
                            <div class="col-md-12 mb-4">
                                <label>Category Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Category Name">
                            </div>
                            <div class="col-md-12 mb-4 ">
                                <label> Upload Image</label>
                                <input type="file" name="image" class="form-control" placeholder="Enter Category Name">
                            </div>
                            <div class="col-md-12 mb-4 ">
                                <button type="submit" class="btn btn-primary" name="add-category-btn"> Save</button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</div>
<?php include('includes/footer.php');?>