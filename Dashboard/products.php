<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            border: 1px solid #dddddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body> 
    <div class="container my-5">
    <h2>Products</h2>
    <a class="btn btn-primary" style='background-color: green' href="/Dashboard/addproduct.php" role="button"> Add product</a>
    <br>
    </div>
    
    <?php 
$connection = pg_connect("host=localhost dbname=Dashboard user=postgres password=mamaghada123");
if(!$connection){
    echo "Failed to connect to database.";
    exit;
}

$result = pg_query($connection, "SELECT * FROM Products");
if(!$result){
    echo "Error fetching products: " . pg_last_error($connection);
    exit;
}
?>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price (EGP)</th>
        <th>Sale</th>
        <th>Seller</th>
        <th>Image</th>
        <th>Quantity</th>
        <th>Description</th>
        <th>Date</th>
        <th>Control</th>
    </tr>

    <?php 
    while($row = pg_fetch_assoc($result)){
        // Check if the image data exists
        if(!empty($row['image'])){
            // Retrieve the image data as binary
            $imageData = pg_loread($connection, $row['image']);
            // Convert the binary image data to base64 format
            $imageBase64 = base64_encode($imageData);
            // Embed the image within an <img> tag
            echo "
            <tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['price']} EGP</td>
                <td>{$row['sale']}</td>
                <td>{$row['seller']}</td>
                <td><img src='data:image/jpeg;base64,{$imageBase64}' alt='Image'></td>
                <td>{$row['quantity']}</td>
                <td>{$row['description']}</td>
                <td>{$row['date']}</td>
                <td>
                    <a class='btn btn-primary btn-sm' style='background-color: blue' href='/Dashboard/edit.php?id={$row['id']}'> Edit</a>
                    <a class='btn btn-primary btn-sm' style='background-color: red' href='/Dashboard/delete.php?id={$row['id']}'> Delete</a>
                </td>
            </tr>
            ";
        } else {
            // If no image data is available, display a placeholder
            echo "
            <tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['price']} EGP</td>
                <td>{$row['sale']}</td>
                <td>{$row['seller']}</td>
                <td>No image available</td>
                <td>{$row['quantity']}</td>
                <td>{$row['description']}</td>
                <td>{$row['date']}</td>
                <td>
                    <a class='btn btn-primary btn-sm' style='background-color: blue' href='/Dashboard/edit.php?id={$row['id']}'> Edit</a>
                    <a class='btn btn-primary btn-sm' style='background-color: red' href='/Dashboard/delete.php?id={$row['id']}'> Delete</a>
                </td>
            </tr>
            ";
        }
    }
    ?>
</table>
</body>
</html>
