<?php
session_start();
$ID = $_GET["id"];

$products = $_SESSION["Products"];

$product = [];


foreach($products as $pro) {
    if($pro["ID"] == $ID) {
        $product = $pro;
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
</head>
<body>
    <a href="../view/viewProduct.php">GO BACK</a><br>
    <form>
        ID: <input type="text" name="id" value="<?php echo isset($product['ID']) ? $product['ID'] : ''; ?>" readonly><br>
        Name: <input type="text" name="name" value="<?php echo isset($product['Name']) ? $product['Name'] : ''; ?>" readonly><br>
        Price: <input type="text" name="price" value="<?php echo isset($product['Price']) ? $product['Price'] : ''; ?>" readonly><br>
        Quantity: <input type="text" name="quantity" value="<?php echo isset($product['Quantity']) ? $product['Quantity'] : ''; ?>" readonly><br>
    </form>
</body>
</html>