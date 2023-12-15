<?php

try{
    
    $db= new PDO('sqlite:caminhodoseuarquivo/nomedoarquivo.db');
    $usuario = $_POST["nome"];
    $senha = $_POST["senha"];
    
    $db->exec ("INSERT INTO whitelist (username,password) VALUES('$usuario','$senha');");
    if (isset($_POST["acao"])){
        echo "<script>alert('Cadastro realizado com sucesso')</script>";
        }
    

}catch(PDOException $e){
    echo $e->getMessage();
   
}
   
?>