<?php
 include "conexao.php";
?>

<?php
 
 $IdCliente = $_POST['IdCliente'];
 $TitFilme = $_POST['TitFilme'];
 $DataSessao = $_POST['DataSessao'];
 $HorarioSessao = $_POST['HorarioSessao'];
 $ValorMeia = $_POST['ValorMeia'];
 $Quantidade1 = $_POST['Quantidade1'];
 $ValorInteira = $_POST['ValorInteira'];
 $Quantidade2 = $_POST['Quantidade2'];
 
 $TotalMeia=($ValorMeia*$Quantidade1);
 $TotalInteira=($ValorInteira*$Quantidade2);
 
 $ValorTotal=($TotalMeia+$TotalInteira);
 
 $sql = mysql_query("INSERT INTO assiste(IdCliente, TitFilme, DataSessao, HorarioSessao, ValorMeia, ValorInteira, ValorTotal) VALUES ('$IdCliente','$TitFilme','$DataSessao','$HorarioSessao','$ValorMeia','$ValorInteira','$ValorTotal')");
 
 $Total=$ValorTotal;
 
 print "<script language='javascript'> alert('Compra Realizada com Sucesso! Total da Compra: $Total')</script>";
 echo "<script language='javascript'> location.href='index.html'</script>";
 
 
?>