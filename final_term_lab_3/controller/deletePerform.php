<?php
    session_start();

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $products = $_SESSION['Products'];

        foreach($products as $key => $product){
            if($product['ID'] == $id){
                unset($products[$key]);
                break;
            }
        }

        $_SESSION['Products'] = array_values($products);

        header('location: ../view/viewProduct.php');
    }
?>