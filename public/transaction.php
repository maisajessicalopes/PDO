<?php

    //transaction, para caso não faça o insert, fazer rollBack
    $pdo->beginTransaction();

    $name = 'Geladeira';
    $desc = '430 litros';

    
    $sql = 'INSERT INTO products (name, description) VALUES ( :name, :desc)';
    $query = $pdo->prepare($sql);
    $query->bindValue(':name', $name);
    $query->bindValue(':desc', $desc);
    $insert = $query->execute();
    $insert2 = $query->execute();

    if($insert && $insert2){
        $pdo->commit();
        echo 'Sucesso!';
    }else {
        $pdo->rollBack();
        echo 'Falha!';
    }    


?>