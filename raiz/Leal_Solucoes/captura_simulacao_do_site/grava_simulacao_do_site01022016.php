<?php

//session_start(); //inicia sess�o...

//if ($_SESSION["usuario"] == true) //verifica se a vari�vel "usuario" � verdadeira...

//echo ""; //se for emite mensagem positiva.

//if ($_SESSION["senha"] == true) //verifica se a vari�vel "senha" � verdadeira...

//echo ""; //se for emite mensagem positiva.

//else //se n�o for...

//header("Location: alerta.php");



?>

<html>

<head>

<title>Untitled Document</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

-->

</style></head>



<?


require '../../conect/conect.php';


?>





<body>



<?

$status = "AGUARDANDO ATIVACAO"; 
$proposal_page = $_POST['proposal_page']; //URL de onde o formul�rio foi enviado
$proposal_product = $_POST['proposal_product']; //Produto de interesse do usu�rio
$proposal_value = $_POST['proposal_value']; //Valor desejado
$proposal_name = $_POST['proposal_name']; //Nome
$proposal_cpf = $_POST['proposal_cpf']; //cpf
$proposal_phone = $_POST['proposal_phone']; //Telefone
$proposal_email = $_POST['proposal_email']; //Email de contato
$proposal_convenio = $_POST['proposal_convenio']; //Conv�nio
$proposal_option = $_POST['proposal_option']; //(1 ou 0 - Sim/N�o) Receber email

if($proposal_option == "1"){
	
$receberemail = "Sim";

}
else{
	
$receberemail = "Nao";
	
}

$digitacao = "A Digitar";

$comando = "insert into propostas(status,url,tipo_contrato,tipo_proposta,valor_total,nome,cpf,telefone,email,tipo,receberemail,obs) values('$status','$proposal_page','SITE','SITE','$proposal_value','$proposal_name','$proposal_cpf','$proposal_phone','$proposal_email','$proposal_convenio','$receberemail','$proposal_product')";



mysql_query($comando,$conexao);



?>






















<p>&nbsp;</p>
<p>&nbsp;</p>

</body>

</html>

<?

mysql_close($conexao);

?>