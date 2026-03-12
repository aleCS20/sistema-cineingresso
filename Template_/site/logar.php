<?php
 include "conexao.php";
?>

<?php 
    $IdCliente = $_POST['IdCliente'];
	//$entrar = $_POST['entrar'];
    $SenhaCliente = $_POST['SenhaCliente'];
    
     /*if (isset($entrar)){
     $verifica = mysql_query("SELECT * FROM cliente WHERE IdCliente = '$IdCliente' AND SenhaCliente = '$SenhaCliente'") or die("erro ao selecionar");
       if (mysql_num_rows($verifica)==0){
        echo"<script language='javascript' type='text/javascript'>alert('Id e/ou Senha Incorretos');window.location.href='login_.php';</script>";
        die();
       }else{
         setcookie("IdCliente",$IdCliente);
         header("Location:contact5.php");
		 echo "<script language='javascript'>alert('Você será redirecionado à página de compra de ingressos')</script>";
        }
        }*/
		
		
 	$sql = mysql_query("SELECT C.IdCliente, C.SenhaCliente FROM cliente C WHERE C.IdCliente = '$IdCliente' AND C.SenhaCliente = '$SenhaCliente'") or die ("Erro de Conexão do MySql");

    $row = mysql_num_rows($sql);

    if($row==0)	{
	 echo"<script language='javascript' type='text/javascript'>alert('Id e/ou Senha Incorretos');window.location.href='login_.php';</script>";
	}
	else{
	 echo"<script language='javascript' type='text/javascript'>alert('Você será direcionado à página de Compra de Ingressos');window.location.href='contact5.php';</script>";
	 //Header("Location:href=contact5.php");
	}
?>