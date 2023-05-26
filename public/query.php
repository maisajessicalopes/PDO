<?php

    //query select
   /*  $query = $pdo->query("SELECT * FROM products");
    $products = $query->fetchAll();
    foreach ($products as $product){
        echo $product['name'].'<br>';
    } */
    //query insert
    $sql = "INSERT INTO products (name, description) VALUES ('Celular', '7 polegadas')";
    $insert = $pdo->query($sql);
    var_dump($insert);

?>