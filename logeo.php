<?php
 include "conexion.php";
 session_start();
 $usuario=$_POST['oficial_num_placa'];
 $clave=$_POST['oficial_password'];
 $q = "SELECT COUNT(*) as contar FROM oficial where oficial_num_placa='$usuario' and oficial_password='$clave'";
 $consulta=mysqli_query($conn,$q);
 $row=mysqli_fetch_assoc($consulta);
 if($row['contar']>0){
     $_SESSION['oficial_num_placa']=$usuario;
     header("location: oficiales.php");
 }else{
    echo "<script>alert('Verifique bien sus datos.'); window.location = 'index.html'</script>";
}
?>