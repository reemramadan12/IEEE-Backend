<?php
$connection = pg_connect("host=localhost dbname=Dashboard user=postgres password=mamaghada123");

$id = $_GET['id']; // Get the product ID from the query string

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = $_POST["name"];
    $price = $_POST["price"];
    $sale = $_POST["sale"];
    $seller = $_POST["seller"];
    //$image = $_POST["name"];
    $quantity = $_POST["quantity"];
    $description = $_POST["description"]; 

    // Update the product in the database
    $sql = "UPDATE products SET name='$name', price='$price', sale='$sale', seller='$seller', quantity='$quantity', description='$description' WHERE id=$id";
    $result = pg_query($connection, $sql);
    if (!$result) {
        echo "Error updating product: " . pg_last_error($connection);
        exit;
    }
    // Redirect to the products page after successful update
    header("Location: /Dashboard/products.php");
    exit;
}

// Fetch product details from the database
$sql = "SELECT * FROM products WHERE id=$id";
$result = pg_query($connection, $sql);
if (!$result) {
    echo "Error fetching product details: " . pg_last_error($connection);
    exit;
}
$row = pg_fetch_assoc($result);
// Store product details in variables
$name = $row['name'];
$price = $row['price'];
$sale = $row['sale'];
$seller = $row['seller'];
$image = $row['image'];
$quantity = $row['quantity'];
$description = $row['description']; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
      <h2>Edit product</h2>
      <form method="post">
        <!--a hidden input that'll store the id of the product-->
        <input type="hidden" name="id" value="<?php echo $id;?>">
       <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Name</label>
        <div class="col-sm-6"> 
            <input type="text" class="form-control" name="name" value="<?php echo $name;?>">
        </div>
       </div>
       <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Price</label>
        <div class="col-sm-6"> 
            <input type="text" class="form-control" name="price" value="<?php echo $price;?>">
        </div>
       </div>
       <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Sale</label>
        <div class="col-sm-6"> 
            <input type="text" class="form-control" name="sale" value="<?php echo $sale;?>">
        </div>
       </div>
       <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Seller</label>
        <div class="col-sm-6"> 
            <input type="text" class="form-control" name="seller" value="<?php echo $seller;?>">
        </div>
       </div>
       <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Image</label>
        <div class="col-sm-6"> 
            <input type="file" class="form-control" name="image">
       </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Quantity</label>
        <div class="col-sm-6"> 
            <input type="text" class="form-control" name="quantity" value="<?php echo $quantity;?>">
        </div>
       </div>
       <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Description</label>
        <div class="col-sm-6"> 
            <input type="text" class="form-control" name="description" value="<?php echo $description;?>">
        </div>
       </div>
       <div class="row mb-3">
       <div class="col-sm-6">
        <button type="submit" class="btn btn-primary btn-sm">Update</button>
        <a href="/Dashboard/products.php" class="btn btn-secondary btn-sm">Cancel</a>
        </div>
       </div>
      </form>
    </div>    
</body>
</html>
