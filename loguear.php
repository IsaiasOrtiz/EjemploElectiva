<?php
require 'conexion.php';


  
  session_start();
  $usuario=$_POST['usuario'];
  $clave=$_POST['clave'];

  $Conexion = new ConexionBD;
  $conn = $Conexion->greet();

 $query=$conn->prepare("select * from usuarios where usuario=? and clave=?");

  $query->execute([$usuario,$clave]);

  $row=$query->fetch(PDO::FETCH_NUM);

  if($row==true){
    
  $_SESSION['username'] = $usuario;
  
   // header('Location: ../pages/index.php?status=success'); 
  
  //Validar el rol
  $_SESSION['username'] = $usuario;
  

  
  }
  else{


    
    echo "DATOS INCORRECTOS...";
  }




/* -------------------------
require '../conexion/connection.php';
session_start();
$usuario=$_SESSION['username'];
if(isset($_GET['cerrar_session'])){
   
   session_unset();
   session_destroy

}

  

  if(isset($_SESSION['tipousuario'])){
    switch($_SESSION['tipousuario']){
      case 'director':
       
    header("location:login.php");
      
      break;
      
      case "jj":
      header('Location: ../pages/login.html');
      
      
      break;
      */



?>