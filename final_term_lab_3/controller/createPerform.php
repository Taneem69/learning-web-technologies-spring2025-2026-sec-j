<?php
    session_start();

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];

        $newProduct = [
            'ID' => $id,
            'Name' => $name,
            'Price' => $price,
            'Quantity' => $quantity

            
        ];

        $_SESSION['Products'][] = $newProduct;

        header('location: ../view/viewProduct.php');
    }
?>