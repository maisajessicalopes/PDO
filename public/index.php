<?php

$dsn        = 'mysql';
$host       = 'localhost';
$database   = 'curso_php_pdo';
$user       = 'root';
$password    = '';
$port       = 3306;

try{
    $pdo = new PDO("{$dsn}:host={$host};port={$port};dbname={$database}", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //tto de erros

/*     $name = 'Geladeira';
    $desc = '430 litros';
    
    $sql = 'INSERT INTO products (name, description) VALUES ( :name, :desc)';
    $query = $pdo->prepare($sql);
    $query->bindValue(':name', $name);
    $query->bindValue(':desc', $desc);
    $query->execute();

    echo $pdo->lastInsertId(); */ // retorna o último id inserido


    //total registros
    $sql = 'SELECT * FROM products';
    $query = $pdo->prepare($sql);
    $query->execute();

    $qtd = $query->rowCount();  //contar o total de registro
    if ($qtd > 0)  {
        $products = $query->fetchAll();
        foreach ($products as $product) {
            echo "{$product['name']} - {$product['description']} <br>";
        }
    }  else {
        echo 'Nenhum resultado...';
    }
//quais drives tenho disponiveis 
   /*  var_dump(PDO::getAvailableDrivers()); */

} catch (Throwable | PDOException $e) { //tto de erros
    echo $e->getCode().'<br>';
    echo $e->getMessage();
}

?>