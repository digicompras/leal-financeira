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
</style>
</head>

<?
//require("conect/conect.php"); or die("erro na requisição");
require '../../conect/conect.php';
error_reporting(E_ALL);


?>
		  
		  
		  <?
$estab_pertence = $_POST['estab_pertence'];

		  
$sql = "SELECT * FROM cad_empresa where nfantasia = '$estab_pertence'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {

$telefone = $linha[12];
$cidade = $linha[10];
$email = $linha[14];

$cidade_estab_pertence = $linha[10];
$email_estab_pertence = $linha[14];
$tel_estab_pertence = $linha[12];
}
		  

$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$estadocivil = $_POST['estadocivil'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$orgao = $_POST['orgao'];
$emissao = $_POST['emissao'];
$data_nasc = $_POST['data_nasc'];
$pai = $_POST['pai'];
$mae = $_POST['mae'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$obs = $_POST['obs'];
$dataalteracao = $_POST['dataalteracao'];
$horaalteracao = $_POST['horaalteracao'];
$operador_alterou = $_POST['operador_alterou'];
$cel_operador_alterou = $_POST['cel_operador_alterou'];
$email_operador_alterou = $_POST['email_operador_alterou'];
$estabelecimento_alterou = $_POST['estabelecimento_alterou'];
$cidade_estabelecimento_alterou = $_POST['cidade_estabelecimento_alterou'];
$tel_estabelecimento_alterou = $_POST['tel_estabelecimento_alterou'];
$email_estabelecimento_alterou = $_POST['email_estabelecimento_alterou'];
//$usuario = $_POST['usuario'];
//$senha = $_POST['senha'];
$tipo_op = $_POST['tipo_op'];
$funcao = $_POST['funcao'];
$estab_pertence = $_POST['estab_pertence'];

$salario = $_POST['salario'];
$vale_alimentacao = $_POST['vale_alimentacao'];
$gratificacao = $_POST['gratificacao'];
$comissao = $_POST['comissao'];
$emprestimo = $_POST['emprestimo'];
$admissao = $_POST['admissao'];
$demissao = $_POST['demissao'];
	
$ressetar = $_POST['ressetar'];
	
	if($ressetar=="sim"){
		$dataderessetdasenha = date('Y-m-d');
		$mesderessetdasenha = date('m');
		
//$usuario = date('dmY');
$senha = date('dmY');
		if($mesderessetdasenha=="1"){
			$dataultimatrocadesenha = date('Y-')."12".date('-d');
		}
		else{
			$novadata = bcsub($mesderessetdasenha,1);
			
			$dataultimatrocadesenha = date('Y-').$novadata.date('-d');
		}

		
	}
	else{
	
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$dataultimatrocadesenha = $_POST['dataultimatrocadesenha'];
		
	}



$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`admgeral` set `senha` = '$senha',`dataultimatrocadesenha` = '$dataultimatrocadesenha' where `admgeral`. `codigo` = '$codigo' limit 1 ";
}

mysql_query($comando,$conexao) or die("Erro ao alterar informações desse Administrador");


echo "Dados do administrador alterados no banco de dados com sucesso<br>";
?>

<?
$sql = "SELECT * FROM admgeral where codigo = '$codigo'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>
<?
$nome = $linha[1];
$cpf = $linha[4];
$datacadastro = $linha[29];
$horacadastro = $linha[30];
$operador = $linha[21];
$cel_operador = $linha[22];
$email_operador = $linha[23];
$estabelecimento = $linha[24];
$cidade_estabelecimento = $linha[25];
$tel_estabelecimento = $linha[26];
$email_estabelecimento = $linha[27];
$usuario = $linha[40];
$senha = $linha[41];
$estab_pertence = $linha[44];
$cidade_estab_pertence = $linha[45];
$email_estab_pertence = $linha[47];
$tel_estab_pertence = $linha[46];

?>

<? } ?>

<?
$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nfantasia_empresa = $linha[2];
$email_empresa = $linha[14];
$site_empresa = $linha[15];

}
	
	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO
	$email_dest   =   $email_empresa;
	
	//PREPARA O PEDIDO
	$mens   =  "Olá! seus dados foram atualizados na $nfantasia_empresa!   \n";
	$mens  .=  "Seu endereço de administrador é $site_empresa/admgeral \n\n";
	
	$mens  .=  "Nome: ".$nome."                                                       \n";
	$mens  .=  "Ligado ao estabelecimento: ".$estab_pertence."                                                    \n";
	$mens  .=  "Cidade: ".$cidade_estab_pertence."                                                    \n";
	$mens  .=  "Telefone: ".$tel_estab_pertence."                                                    \n";
	$mens  .=  "E_Mail: ".$email_estab_pertence."                                                    \n";	
	$mens  .=  "Data de alteracao do cadastro: ".$datacadastro."                                                    \n";
	$mens  .=  "Hora de alteracao do cadastro: ".$horacadastro."                                                    \n";
	//$mens  .=  "Seu Usuário: ".$usuario."                                                    \n";
	//$mens  .=  "Sua Senha: ".$senha."                                                    \n";

	
	//DISPARA O EMAIL
	$envia  =  mail($email_dest, "Administrador atualizado no sistema em ".$dataalteracao, $mens,"From:".$email_dest."\r\nBcc:".$email);
	

?>


<body>
<form name="form1" method="post" action="menu.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit2" value="Voltar">
</form>
</body>
</html>
<?
mysql_close($conexao);
?>
