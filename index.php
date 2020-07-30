<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'conexion.php';
        $sql = "select * from usuario";
        $sentencia = $pdo->prepare($sql);
        $sentencia->execute();
        $listar = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        print_r($listar);
        ?>
    </body>
</html>
