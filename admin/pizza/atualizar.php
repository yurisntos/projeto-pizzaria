<?php
    include "../../scripts/helpers/importa.php";

    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $valor = $_POST["valor"];
    $descricao = $_POST["descricao"];


    $sql = "UPDATE produtos SET nome = :nome, valor = :valor, descricao = :descricao WHERE idprodutos = :id";
    
    $resultado = $pdo->prepare($sql); 
    
    $resultado->execute([
        ":id" => $id,
        ":nome" => $nome,
        ":valor" => $valor,
        ":descricao" => $descricao
        
        
    ]);
    
    
    
        header("Location: mostra.php?id=$id");
    exit; 