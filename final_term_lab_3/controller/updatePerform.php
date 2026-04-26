<?php
session_start();

if(isset($_POST['submit'])) {
    // Get form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    
    // Get existing products from session
    $products = $_SESSION['Products'];
    
    // Find and update the product
    foreach($products as $key => $product) {
        if($product['ID'] == $id) {
            $products[$key]['Name'] = $name;
            $products[$key]['Price'] = $price;
            $products[$key]['Quantity'] = $quantity;
            break;
        }
    }
    
    // Save updated products back to session
    $_SESSION['Products'] = $products;
    
    // Redirect back to product list
    header("Location: ../view/viewProduct.php");
} else {
    // If someone tries to access this file directly
    header("Location: ../view/viewProduct.php");
}
?>