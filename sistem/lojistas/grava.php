<?php

session_start(); //inicia sessão...

if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...

echo ""; //se for emite mensagem positiva.

else //se não for...

header("Location: alerta.php");



?>

<html>

<head>

<title>GRAVA&Ccedil;&Atilde;O DE FORNECEDOR</title>

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

//require("conexao.php"); or die("erro na requisição");

require '../../conect/conect.php';







//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 

$sql = "SELECT * FROM fundo_navegacao";

//EXECUTA O COMANDO ACIMA

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {

$reg++;

?>





<body bgcolor="#<? printf("$linha[1]"); ?>">

  <?

if($reg==1){

echo "</tr><tr>";

$reg=0;

}

?>

  

<? } ?>

<?

// dados do estabelecimento

$razaosocial = $_POST['razaosocial'];

$nfantasia = $_POST['nfantasia'];

$cnpj = $_POST['cnpj'];

$inscr_est = $_POST['inscr_est'];

$endereco = $_POST['endereco'];

$numero = $_POST['numero'];

$bairro = $_POST['bairro'];

$complemento = $_POST['complemento'];

$cep = $_POST['cep'];

$cidade = $_POST['cidade'];

$estado = $_POST['estado'];

$telefone  = $_POST['telefone'];

$fax = $_POST['fax'];

$email = $_POST['email'];

$site = $_POST['site'];

$rg = $_POST['rg'];

$obs = $_POST['obs'];

$datacadastro = $_POST['datacadastro'];

$horacadastro = $_POST['horacadastro'];

$dataalteracao = $_POST['dataalteracao'];

$horaalteracao = $_POST['horaalteracao'];

$operador = $_POST['operador'];

$cel_operador = $_POST['cel_operador'];

$email_operador = $_POST['email_operador'];

$estabelecimento = $_POST['estabelecimento'];

$cidade_estabelecimento = $_POST['cidade_estabelecimento'];

$tel_estabelecimento = $_POST['tel_estabelecimento'];

$email_estabelecimento = $_POST['email_estabelecimento'];

$operador_alterou = $_POST['operador_alterou'];

$cel_operador_alterou = $_POST['cel_operador_alterou'];

$email_operador_alterou = $_POST['email_operador_alterou'];

$estabelecimento_alterou = $_POST['estabelecimento_alterou'];

$cidade_estabelecimento_alterou = $_POST['cidade_estabelecimento_alterou'];

$tel_estabelecimento_alterou = $_POST['tel_estabelecimento_alterou'];

$email_estabelecimento_alterou = $_POST['email_estabelecimento_alterou'];

$motivo_exclusao = $_POST['motivo_exclusao'];

$operador_atendente = $_POST['operador_atendente'];
	
	
$proprietario = $_POST['proprietario'];
	$cpf = $_POST['cpf'];

$email_representante = $_POST['email_representante'];
	
$celular = $_POST['celular'];
	
$data_nasc = $_POST['data_nasc'];

$data_nasc1 = explode("-", $data_nasc);

$dia1 = $data_nasc1[0];

$mes1 = $data_nasc1[1];

$ano1 = $data_nasc1[2];

$data_nasc1_grava = "$ano1-$mes1-$dia1";
	
	$proprietario2 = $_POST['proprietario2'];
	$cpf2 = $_POST['cpf2'];

$email_representante2 = $_POST['email_representante2'];

$celular2 = $_POST['celular2'];
	
$data_nasc2 = $_POST['data_nasc2'];

$data_nasc2_2 = explode("-", $data_nasc2);

$dia2 = $data_nasc2_2[0];

$mes2 = $data_nasc2_2[1];

$ano2 = $data_nasc2_2[2];

$data_nasc2_grava = "$ano2-$mes2-$dia2";
	
	$proprietario3 = $_POST['proprietario3'];
	$cpf3 = $_POST['cpf3'];

$email_representante3 = $_POST['email_representante3'];
	
$celular3 = $_POST['celular3'];
	
$data_nasc3 = $_POST['data_nasc3'];

$data_nasc3 = explode("-", $data_nasc3);

$dia3 = $data_nasc3[0];

$mes3 = $data_nasc3[1];

$ano3 = $data_nasc3[2];

$data_nasc3_grava = "$ano3-$mes3-$dia3";
	
	$proprietario4 = $_POST['proprietario4'];
	$cpf4 = $_POST['cpf4'];

$email_representante4 = $_POST['email_representante4'];
	
$celular4 = $_POST['celular4'];
	
$data_nasc4 = $_POST['data_nasc4'];

$data_nasc4 = explode("-", $data_nasc4);

$dia4 = $data_nasc4[0];

$mes4 = $data_nasc4[1];

$ano4 = $data_nasc4[2];

$data_nasc4_grava = "$ano4-$mes4-$dia4";
	
	
$banco = $_POST['banco'];
$codagencia = $_POST['codagencia'];
$digitoagencia = $_POST['digitoagencia'];
$conta = $_POST['conta'];
$digitoconta = $_POST['digitoconta'];
$tipoconta = $_POST['tipoconta'];
$titularconta = $_POST['titularconta'];
$nomeagencia = $_POST['nomeagencia'];
$chavepix = $_POST['chavepix'];
$tipochavepix = $_POST['tipochavepix'];



$comando = "insert into lojistas(razaosocial,nfantasia,cnpj,inscr_est,endereco,numero,bairro,complemento,cep,cidade,estado,telefone,fax,email,site,obs,datacadastro,horacadastro,dataalteracao,horaalteracao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,motivo_exclusao,operador_atendente,proprietario,celular,email_representante,data_nasc,proprietario2,celular2,email_representante2,data_nasc2,proprietario3,celular3,email_representante3,data_nasc3,proprietario4,celular4,email_representante4,data_nasc4,banco,codagencia,digitoagencia,conta,digitoconta,tipoconta,titularconta,nomeagencia,chavepix,tipochavepix,dia,mes,ano,dia2,mes2,ano2,dia3,mes3,ano3,dia4,mes4,ano4,cpf,cpf2,cpf3,cpf4) values('$razaosocial','$nfantasia','$cnpj','$inscr_est','$endereco','$numero','$bairro','$complemento','$cep','$cidade','$estado','$telefone','$fax','$email','$site','$obs','$datacadastro','$horacadastro','$dataalteracao','$horaalteracao','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','$motivo_exclusao','$operador_atendente','$proprietario','$celular','$email_representante','$data_nasc1_grava','$proprietario2','$celular2','$email_representante2','$data_nasc2_grava','$proprietario3','$celular3','$email_representante3','$data_nasc3','$proprietario4','$celular4','$email_representante4','$data_nasc4','$banco','$codagencia','$digitoagencia','$conta','$digitoconta','$tipoconta','$titularconta','$nomeagencia','$chavepix','$tipochavepix','$dia1','$mes1','$ano1','$dia2','$mes2','$ano2','$dia3','$mes3','$ano3','$dia4','$mes4','$ano4','$cpf','$cpf2','$cpf3','$cpf4')";


mysql_query($comando,$conexao) or die("Erro ao gravar estabelecimento!");


echo "Lojista cadastrado com sucesso!<br>";



?>





<?

$sql = "SELECT * FROM estabelecimentos order by codigo desc limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

?>

<?

printf("Código do estabelecimento é: $linha[0]");

$razaosocial = $linha[1];

$nfantasia = $linha[2];

$cnpj = $linha[3];

$telefone = $linha[12];

$email = $linha[14];

$datacadastro = $linha[20];

$horacadastro = $linha[21];

$operador_atendente = $linha[41];

$operador = $linha[24];

$cel_operador = $linha[25];

$email_operador = $linha[26];

$estabelecimento = $linha[27];

$cidade_estabelecimento = $linha[28];

$tel_estabelecimento = $linha[29];

$email_estabelecimento = $linha[30];



?>



<? } ?>



<?

$sql = "SELECT * FROM allcred limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$email_allcred = $linha[14];



}

	

	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO

	$email_dest   =   $email_allcred;

	

	//PREPARA O PEDIDO

	$mens   =  "Olá! Agora você é parceiro da Allcred Financeira!   \n";

	$mens  .=  "Visite-nos www.allcredfinanceira.com.br \n";

	$mens  .=  "Razão Social: ".$razaosocial."                                                       \n";

	$mens  .=  "Nome Fantasia: ".$nfantasia."                                                    \n";

	$mens  .=  "CNPJ: ".$cnpj."                                                    \n";

	$mens  .=  "Telefone: ".$telefone."                                                    \n";

	$mens  .=  "E-Mail: ".$email."                                                    \n";

	$mens  .=  "Data do cadastro: ".$datacadastro."                                                    \n";

	$mens  .=  "Hora do cadastro: ".$horacadastro."                                                    \n";

	$mens  .=  "Operador que atende: ".$operador_atendente."                                                    \n";

	$mens  .=  "Operador que cadastrou: ".$operador."                                                    \n";

	$mens  .=  "Celular do operador: ".$cel_operador."                                                    \n";

	$mens  .=  "E-Mail do operador: ".$email_operador."                                                    \n";

	$mens  .=  "Pestence ao estabelecimento: ".$estabelecimento."                                                    \n";

	$mens  .=  "Cidade: ".$cidade_estabelecimento."                                                    \n";

	$mens  .=  "Telefone: ".$tel_estabelecimento."                                                    \n";

	$mens  .=  "E-Mail: ".$email_estabelecimento."                                                    \n";



	

	//DISPARA O EMAIL

	//$envia  =  mail($email_dest, "Estabelecimento cadastrado no sistema em ".$datacadastro, $mens,"From:".$email_dest."\r\nBcc:".$email);

	



?>









<p>&nbsp;</p>

<p>&nbsp;</p>

<form name="form1" method="post" action="inserir.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" class='class01' name="Submit" value="Cadastrar outro Lojista">

</form>

<form name="form1" method="post" action="menu.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" class='class01' name="Submit2" value="Voltar">

</form>

<p>&nbsp;</p>

</body>

</html>

<?

mysql_close($conexao);

?>