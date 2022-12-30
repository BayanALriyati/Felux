    <?php include('includes/header.php');
    require('../config.php');
    ?>

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Categories</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // $category = getAll("categories");
                                // if (count_($category) > 0) {
                                //     foreach ($category as $item) {
                                // ?>
                                        <tr>
                                            <td><?= $item['id']; ?></td>
                                            <td><?= $item['name']; ?></td>
                                            <td>
                                                <img src="../uploads/<?= $item['image']; ?>" alt="<?= $item['name']; ?>">
                                            </td>
                                            <td><?= $item['id']; ?></td>
                                            <td>
                                                <a href="#" class="btn btn-primary">Edit</a>
                                            </td>
                                        </tr>
                                <?php

                                //     }
                                // } else {
                                //     echo "No records found";
                                // }
                                // $sql = $con->prepare("SELECT * FROM categories");
                                // $sql->execute();
                                // $result = $sql->fetchAll();

                                // foreach ($result as $row) {
                                //     $id = $row['category_id'];
                                //     $namee = $row["category_name"];
                                //     $Imagee = $row["category_img"];
                                //     echo "<tr>";
                                //     echo "<td>" . $row['category_id'] . "</td>";
                                //     echo "<td>" . $row["category_name"] . "</td>";
                                //     echo "<td>" . $row["category_img"] . "</td>";
                                //     echo "<td>"."<img src='../assets/img/$row[category_img]' class='rounded-circle' alt='$row[category_name]'/></td>";
                                //     // "<img src='images/".$row['image']."'>"
                                //     echo "<td><a href='#' class='btn btn-primary'>Edit</a></td>";
                                //     echo "</tr>";
                                // }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("includes/footer.php");
