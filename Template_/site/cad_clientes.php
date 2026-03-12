<?php
 include "conexao.php";
?>

<?php
 /*@$IdCliente = $_GET['IdCliente'];
 
 $sql = mysql_query("SELECT IdCliente FROM cliente");
   
  while ($id_cliente = mysql_fetch_array($sql))
  {
	$IdCliente = $Id_cliente["IdCliente"];
  }
	*/
 $NomeCliente = $_POST['NomeCliente'];
 $EnderecoCompleto = $_POST['EnderecoCompleto'];
 $TelefoneCliente = $_POST['TelefoneCliente'];
 $SexoCliente = $_POST['SexoCliente'];
 $SenhaCliente = $_POST['SenhaCliente'];
 
 $sql = mysql_query("INSERT INTO cliente(NomeCliente, EnderecoCompleto, TelefoneCliente, SexoCliente, SenhaCliente) VALUES('$NomeCliente', '$EnderecoCompleto', '$TelefoneCliente', '$SexoCliente', '$SenhaCliente')");
 
 $id = mysql_insert_id();
 print "<script language='javascript'> alert('Cliente Cadastrado anote seu login: $id')</script>";
 
 echo "<script language='javascript'> location.href='index.html'</script>";
?>