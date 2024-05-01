<?php
$name = "";
$price = "";
$sale = "";
$seller = "";
$image = "";
$quantity = "";
$description = ""; 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST["name"];
    $price = $_POST["price"];
    $sale = $_POST["sale"];
    $seller = $_POST["seller"];
    $quantity = $_POST["quantity"];
    $description = $_POST["description"];

    // Handle file upload for image
    if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image = pg_escape_bytea(file_get_contents($_FILES['image']['tmp_name']));
    } 
    
    $connection = pg_connect("host=localhost dbname=Dashboard user=postgres password=mamaghada123");
    
    if(!$connection){
        echo "Failed to connect to database.";
        exit;
    }

    // Prepare the SQL query
    $sql = "INSERT INTO products(name, price, sale, seller, image, quantity, description) 
            VALUES ('$name', '$price', '$sale', '$seller', '$image', '$quantity', '$description')";

    // Execute the SQL query
    $result = pg_query($connection, $sql);

    // Check if the query was executed successfully
    if($result) {
        echo "Product added successfully.";
    } else {
        echo "Error adding product: " . pg_last_error($connection);
    }

    header("location: /Dashboard/products.php");//takes the user to the products page after adding a new one
    pg_close($connection);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
      <h2>Add a new product</h2>
      <form method="post">
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
        <button type="submit" class="btn btn-primary btn-sm">Add</button>
        <button type="button" class="btn btn-secondary btn-sm">Cancel</button>
        </div>
       </div>
      </form>
    </div>    
</body>
</html>