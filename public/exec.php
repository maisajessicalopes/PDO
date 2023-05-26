<?php

    // exec insert
    $sql = "INSERT INTO products (name, description) VALUES ('TV', '50 polegadas')";
    $insert = $pdo->exec($sql);
    var_dump($insert);

?>