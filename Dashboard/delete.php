<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];

    $connection = pg_connect("host=localhost dbname=Dashboard user=postgres password=mamaghada123");
    $sql = "DELETE FROM products WHERE id=$id";
    $result = pg_query($connection, $sql);//execute the sql query   
}
header("Location: /Dashboard/products.php");
    exit;
?>