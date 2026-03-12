<?php
 header('Content-Type: text/html; charset=utf-8');
 $host = "localhost";
 $user = "root";
 $pass = "";
 $banco = "cineingresso";
 $conexao = mysql_connect($host, $user, $pass) or die (mysql_error());
 mysql_select_db($banco) or die (mysql_error());
 mysql_query("SET NAMES 'utf-8'");
 mysql_query('SET character_set_connection=utf-8');
 mysql_query('SET character_set_client=utf-8');
 mysql_query('SET character_set_results=utf-8');
?>