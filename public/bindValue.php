<?php

//segurança conta sql injection
    $sql = 'INSERT INTO products (name, description) VALUES ( :name, :desc)';
    $query = $pdo->prepare($sql);
    $query->bindValue(':name', $name);
    $query->bindValue(':desc', $desc);
    $insert = $query->execute();
    var_dump($insert);

?>    