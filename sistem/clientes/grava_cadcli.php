<?php

session_start(); //inicia sessão...

if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...

echo ""; //se for emite mensagem positiva.

else //se não for...

header("Location: alerta.php");

ini_set('default_charset','UTF8_general_mysql500_ci');

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
	background-repeat: no-repeat;
	background-attachment: fixed;

}
.style1 {
	color: #0000FF;
	font-weight: bold;
}

-->
</style>
</head>



<?



require '../../conect/conect.php';


$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$nome_op = $linha[1];
$sexo = $linha[2];
$estadocivil = $linha[3];
$cpf = $linha[4];
$rg = $linha[5];
$orgao = $linha[6];
$emissao = $linha[7];
$pai = $linha[9];
$mae = $linha[10];
$endereco = $linha[11];
$numero = $linha[12];
$bairro = $linha[13];
$complemento = $linha[14];
$cidade = $linha[15];
$estado = $linha[16];
$cep = $linha[17];
$telefone = $linha[18];
$celular = $linha[19];
$email = $linha[20];
$operador = $linha[21];
$cel_operador = $linha[22];
$email_operador = $linha[23];
$estabelecimento = $linha[24];
$cidade_estabelecimento = $linha[25];
$tel_estabelecimento = $linha[26];
$email_estabelecimento = $linha[27];
$obs = $linha[28];
$datacadastro = $linha[29];
$horacadastro = $linha[30];
$dataalteracao = $linha[31];
$horaalteracao = $linha[32];
$operador_alterou = $linha[33];
$cel_operador_alterou = $linha[34];
$email_operador_alterou = $linha[35];
$estabelecimento_alterou = $linha[36];
$cidade_estabelecimento_alterou = $linha[37];
$tel_estabelecimento_alterou = $linha[38];
$email_estabelecimento_alterou = $linha[39];
$usuario_op = $linha[40];
$senha_op = $linha[41];
$tipo_op = $linha[42];
$funcao = $linha[43];
$estab_pertence = $linha[44];
$cidade_estab_pertence = $linha[45];
$tel_estab_pertence = $linha[46];
$email_estab_pertence = $linha[47];
$salario = $linha[48];
$vale_alimentacao = $linha[49];
$gratificacao = $linha[50];
$comissao = $linha[51];
$emprestimo = $linha[52];
$admissao = $linha[53];
$demissao = $linha[54];
$meta = $linha[55];
$status = $linha[56];
$bloqueio_parcial = $linha[57];
$tempo_almoco = $linha[58];
$bloqueio_compra = $linha[59];

}


$date = date('Y-m-d');


$dia = date('d');
$mes = date('m');
$ano = date('Y');


?>

<?

// dados do cliente



$nome = $_POST['nome'];

$resposta = $_POST['resposta'];

$sexo = $_POST['sexo'];

$estadocivil = $_POST['estadocivil'];

$cpf = $_POST['cpf'];

$status_cliente = $_POST['status_cliente'];

$rg = $_POST['rg'];

$orgao = $_POST['orgao'];

$emissao = $_POST['emissao'];

$data_nasc = $_POST['data_nasc'];





//calculando a idade

  // Declara a data! :P
    $data = $data_nasc;
   
    // Separa em dia, mês e ano
    list($dia, $mes, $ano) = explode('/', $data);
   
    // Descobre que dia é hoje e retorna a unix timestamp
    $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
    // Descobre a unix timestamp da data de nascimento do fulano
    $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
   
    // Depois apenas fazemos o cálculo já citado :)
    $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
    //print $idade;
	
$dia_niver = $dia;
$mes_niver = $mes;
$ano_niver = $ano;
//fim do calculo de idade




$naturalidade = $_POST['naturalidade'];

$pai = $_POST['pai'];

$mae = $_POST['mae'];

$endereco = $_POST['endereco'];

$numero  = $_POST['numero'];

$bairro = $_POST['bairro'];

$complemento = $_POST['complemento'];

$cidade = $_POST['cidade'];

$estado = $_POST['estado'];

$cep = $_POST['cep'];

$telefone = $_POST['telefone'];

$celular = $_POST['celular'];
$celular2 = $_POST['celular2'];

$email = $_POST['email'];

$datacadastro = $_POST['datacadastro'];

$horacadastro = $_POST['horacadastro'];

$tipo = $_POST['tipo'];

$banco = $_POST['banco'];

$agencia = $_POST['agencia'];

$conta = $_POST['conta'];
$tipo_conta = $_POST['tipo_conta'];

$num_beneficio = $_POST['num_beneficio'];

$num_beneficio2 = $_POST['num_beneficio2'];

$num_beneficio3 = $_POST['num_beneficio3'];

$num_beneficio4 = $_POST['num_beneficio4'];

$pagto_beneficio = $_POST['pagto_beneficio'];




$parc1 = $_POST['parc1'];

$banco1 = $_POST['banco1'];

$vencto1 = $_POST['vencto1'];

$compra1 = $_POST['compra1'];



$parc2 = $_POST['parc2'];

$banco2 = $_POST['banco2'];

$vencto2 = $_POST['vencto2'];

$compra2 = $_POST['compra2'];



$parc3 = $_POST['parc3'];

$banco3 = $_POST['banco3'];

$vencto3 = $_POST['vencto3'];

$compra3 = $_POST['compra3'];



$parc4 = $_POST['parc4'];

$banco4 = $_POST['banco4'];

$vencto4 = $_POST['vencto4'];

$compra4 = $_POST['compra4'];



$parc5 = $_POST['parc5'];

$banco5 = $_POST['banco5'];

$vencto5 = $_POST['vencto5'];

$compra5 = $_POST['compra5'];



$parc6 = $_POST['parc6'];

$banco6 = $_POST['banco6'];

$vencto6 = $_POST['vencto6'];

$compra6 = $_POST['compra6'];



$parc7 = $_POST['parc7'];

$banco7 = $_POST['banco7'];

$vencto7 = $_POST['vencto7'];

$compra7 = $_POST['compra7'];


$tem_margem = $_POST['tem_margem'];

$saldo1 = $_POST['saldo1'];

$saldo2 = $_POST['saldo2'];

$saldo3 = $_POST['saldo3'];

$saldo4 = $_POST['saldo4'];

$saldo5 = $_POST['saldo5'];

$saldo6 = $_POST['saldo6'];

$saldo7 = $_POST['saldo7'];

$dataprev = $_POST['dataprev'];

$telemarketing = "Liberado";
	
$conjuge = $_POST['conjuge'];
$cpfconjuge = $_POST['cpfconjuge'];

//dados do operador



$operador = $_POST['operador'];

$funcao_operador = $_POST['funcao_operador'];

$cel_operador = $_POST['cel_operador'];

$email_operador = $_POST['email_operador'];



//dados do estabelecimento



$estabelecimento = $_POST['estabelecimento'];

$cidade_estabelecimento = $_POST['cidade_estabelecimento'];

$tel_estabelecimento = $_POST['tel_estabelecimento'];

$email_estabelecimento = $_POST['email_estabelecimento'];





// Observações



$obs = $_POST['obs'];


$secretaria = $_POST['secretaria'];
$senha_servidor = $_POST['senha_servidor'];
$categoria = $_POST['categoria'];


$valor_parcela = $_POST['valor_parcela'];
$saldo_devedor = $_POST['saldo_devedor'];
$parcelas_em_aberto = $_POST['parcelas_em_aberto'];
$prazo_contrato = $_POST['prazo_contrato'];
$valorrenda = $_POST['valorrenda'];
$valorrenda2 = $_POST['valorrenda2'];
$valorrenda3 = $_POST['valorrenda3'];
	
	$codigo_inss1 = $_POST['codigo_inss1'];
	$codigo_inss2 = $_POST['codigo_inss2'];
	$codigo_inss3 = $_POST['codigo_inss3'];
	
	
	$sql = "SELECT * FROM tabela_beneficios where codigo_inss = '$codigo_inss1' and status = 'ativo' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$especiedebeneficio1 = $linha[2];
}
	
	$sql = "SELECT * FROM tabela_beneficios where codigo_inss = '$codigo_inss2' and status = 'ativo' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$especiedebeneficio2 = $linha[2];
}
	
	$sql = "SELECT * FROM tabela_beneficios where codigo_inss = '$codigo_inss3' and status = 'ativo' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$especiedebeneficio3 = $linha[2];
}
	
?>



<?
//---------------------VALIDACAO DOS CAMPOS--------------------------------------------------


if((empty($nome)) or (empty($cpf)) or (empty($celular)) or (empty($num_beneficio)) or (empty($secretaria)) or (empty($categoria)) or (empty($rg)) or (empty($mae)) or (empty($valorrenda)) or (empty($senha_servidor)) or (empty($idade)) ){ ?>

<script>

alert("ATENÇÃO!!!...\n                  <? echo "$operador"; ?> \n\nCAMPOS COM (*) SÃO OBRIGATORIOS! VERIFIQUE QUAL DOS CAMPOS OBRIGATORIOS ESTA SEM PREENCHER, VOCÊ DEVE PREENCHER TODOS PARA PROSSEGUIR COM O CADASTRO!. \n\n Nome* --->> <? echo "$nome"; ?> \n CPF* --->> <? echo "$cpf"; ?> \n RG* --->> <? echo "$rg"; ?> \n Dia Nasc* --->> <? echo "$dia_niver"; ?>Mês Nasc* --->> <? echo "$mes_niver"; ?>Ano Nasc* --->> <? echo "$ano_niver"; ?> \n Telefone* --->> <? echo "$telefone"; ?> \n Celular* --->> <? echo "$celular"; ?> \n Nº Beneficio 1* --->> <? echo "$num_beneficio"; ?> \n Secretaria* --->> <? echo "$secretaria"; ?> \n Categoria* --->> <? echo "$categoria"; ?> \n Mãe* --->> <? echo "$mae"; ?> \n Valor Renda* --->> <? echo "$valorrenda"; ?>\n Senha Servidor* --->> <? echo "$senha_servidor"; ?>\n Idade* --->> <? echo "$idade"; ?>");

window.location = "cadcli_insert.php?nome=<? echo "$nome"; ?>&cpf=<? echo "$cpf"; ?>&telefone=<? echo "$telefone"; ?>&celular=<? echo "$celular"; ?>&num_beneficio=<? echo "$num_beneficio"; ?>&secretaria=<? echo "$secretaria"; ?>&categoria=<? echo "$categoria"; ?>&rg=<? echo "$rg"; ?>&mae=<? echo "$mae"; ?>&valorrenda=<? echo "$valorrenda"; ?>&senha_servidor=<? echo "$senha_servidor"; ?>&idade=<? echo "$idade"; ?>";

</script>

<?

}
else{

//-------------------FIM DA VALIDACAO DOS CAMPOS--------------------------------


$sql = "SELECT * FROM clientes where cpf = '$cpf' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros_cli = mysql_num_rows($res);


}


if($registros_cli>=1){

echo "ATENÇÃO!!!... O CPF $cpf já se encontra cadastrado no sistema, IMPOSSÍVEL cadastrá-lo novamente!<br><br>";

}
else{


$comando = "insert into clientes(nome,sexo,estadocivil,cpf,rg,orgao,emissao,data_nasc,pai,mae,endereco,numero,bairro,complemento,cidade,estado,cep,telefone,celular,celular2,email,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,obs,datacadastro,horacadastro,tipo,banco,agencia,conta,tipo_conta,num_beneficio,parc1,banco1,vencto1,compra1,parc2,banco2,vencto2,compra2,parc3,banco3,vencto3,compra3,parc4,banco4,vencto4,compra4,parc5,banco5,vencto5,compra5,parc6,banco6,vencto6,compra6,parc7,banco7,vencto7,compra7,num_beneficio2,num_beneficio3,num_beneficio4,dataprev,status_cliente,tem_margem,saldo1,saldo2,saldo3,saldo4,saldo5,saldo6,saldo7,naturalidade,pagto_beneficio,resposta,date,secretaria,senha_servidor,valor_parcela,saldo_devedor,parcelas_em_aberto,prazo_contrato,categoria,funcao_operador,valorrenda,idade,dia_niver,mes_niver,ano_niver,telemarketing,conjuge,cpfconjuge,valorrenda2,valorrenda3,codigo_inss1,codigo_inss2,codigo_inss3,especiebeneficio1,especiebeneficio2,especiebeneficio3)

values('$nome','$sexo','$estadocivil','$cpf','$rg','$orgao','$emissao','$data_nasc','$pai','$mae','$endereco','$numero','$bairro','$complemento','$cidade','$estado','$cep','$telefone','$celular','$celular2','$email','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$obs','$datacadastro','$horacadastro','$tipo','$banco','$agencia',

'$conta','$tipo_conta','$num_beneficio','$parc1','$banco1','$vencto1','$compra1','$parc2','$banco2','$vencto2','$compra2','$parc3','$banco3','$vencto3','$compra3','$parc4','$banco4','$vencto4','$compra4','$parc5','$banco5','$vencto5','$compra5','$parc6','$banco6','$vencto6','$compra6','$parc7','$banco7','$vencto7','$compra7','$num_beneficio2','$num_beneficio3','$num_beneficio4','$dataprev','$status_cliente','$tem_margem','$saldo1','$saldo2','$saldo3','$saldo4','$saldo5','$saldo6','$saldo7','$naturalidade','$pagto_beneficio','$resposta','$date','$secretaria','$senha_servidor','$valor_parcela','$saldo_devedor','$parcelas_em_aberto','$prazo_contrato','$categoria','$funcao_operador','$valorrenda','$idade','$dia_niver','$mes_niver','$ano_niver','$telemarketing','$conjuge','$cpfconjuge','$valorrenda2','$valorrenda3','$codigo_inss1','$codigo_inss2','$codigo_inss3','$especiebeneficio1','$especiebeneficio2','$especiebeneficio3')";


mysql_query($comando,$conexao) or die("Erro ao gravar cliente!");

echo "Cliente cadastrado com sucesso!<br><br>";
}



}
?>




<?
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$background = $linha[1];

}
?>

<body background="../../background/<? echo "$background"; ?>">







<?

//$criar_pasta = $_POST['criar_pasta'];



//if($criar_pasta=="Sim") { 





//mkdir("../../$cpf");

//chmod ("../../$cpf",0755);



//}

?>







<?

$sql = "SELECT * FROM clientes order by codigo desc limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

?>

<?

printf("O Nº da matrícula do cliente é: $linha[0]");

$cod_cli = $linha[0];

$nome = $linha[1];

$cpf = $linha[4];

$rg = $linha[5];

$data_nasc = $linha[8];

$mae = $linha[10];

$datacadastro = $linha[29];

$horacadastro = $linha[30];

$operador = $linha[21];

$cel_operador = $linha[22];

$email_operador = $linha[23];

$estabelecimento = $linha[24];

$cidade_estabelecimento = $linha[25];

$tel_estabelecimento = $linha[26];

$email_estabelecimento = $linha[27];

$tipo = $linha[40];
$perfil = $linha[40];

$secretaria = $linha[124];

$senha_servidor = $linha[125];

$fazer_portabilidade = $linha[126];

$categoria = $linha[134];

$dia_niver = $linha[138];
$mes_niver = $linha[88];
$ano_niver = $linha[139];



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

	$mens   =  "Olá! você foi cadastrado na Allcred Financeira!   \n";

	$mens  .=  "Visite-nos www.allcredfinanceira.com.br \n";

	$mens  .=  "Nome: ".$nome."                                                       \n";

	$mens  .=  "CPF: ".$cpf."                                                    \n";

	$mens  .=  "Especificação: ".$tipo."                                                    \n";

	$mens  .=  "Data do cadastro: ".$datacadastro."                                                    \n";

	$mens  .=  "Hora do cadastro: ".$horacadastro."                                                    \n";

	$mens  .=  "Operador que efetuou o cadastro: ".$operador."                                                    \n";

	$mens  .=  "Celular: ".$cel_operador."                                                    \n";

	$mens  .=  "E-Mail: ".$email_operador."                                                    \n";

	$mens  .=  "Estabelecimento: ".$estabelecimento."                                                    \n";

	$mens  .=  "Cidade: ".$cidade_estabelecimento."                                                    \n";

	$mens  .=  "Telefone: ".$tel_estabelecimento."                                                    \n";

	$mens  .=  "E-Mail: ".$email_estabelecimento."                                                    \n";



	

	//DISPARA O EMAIL

	//$envia  =  mail($email_dest, "Cliente cadastrado no sistema em ".$datacadastro, $mens,"From:".$email_dest."\r\nBcc:".$email);

	



?>









<p>&nbsp;</p>

<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="12%"><form name="form1" method="post" action="menu.php">
      <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?><? 
	  if((empty($nome)) or (empty($cpf)) or (empty($celular)) or (empty($num_beneficio)) or (empty($secretaria)) or (empty($categoria)) or (empty($rg)) or (empty($mae))){ 
	  }
	  else{

	 echo "<input class='class01' type='submit' name='Submit2' value='Voltar'>";
	 
	  }
	  ?>
    </form></td>
    <td width="21%"><form name="form1" method="post" action="cadcli_insert.php">
      <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
<?
	  if((empty($nome)) or (empty($cpf)) or (empty($celular)) or (empty($num_beneficio)) or (empty($secretaria)) or (empty($categoria)) or (empty($rg)) or (empty($mae))){ 
	  }
	  else{

      echo "<input class='class01' type='submit' name='Submit' value='Cadastrar outro Cliente'>";
	  
	  }
	  
	  ?>
    </form></td>
    <td width="28%"><form name="form1" method="post" action="../propostas/informacoes_antecedem_efetuar_proposta.php">
      <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
      <input type="hidden" name="codigolancamento" id="codigolancamento">
      <input type="hidden" name="solicitacao" id="solicitacao">
      <input name="estabelecimento_proposta" type="hidden" id="estabelecimento_proposta" value="<? echo $estab_pertence; ?>">
      <input name="valorrenda" type="hidden" id="valorrenda" value="<? echo $valorrenda; ?>" />
      <input name="bloqueio_compra" type="hidden" id="bloqueio_compra" value="<? echo $bloqueio_compra; ?>" />
<?

	  

      echo "<input class='class01' type='submit' name='Submit3' value='Preencher Proposta desse cliente'>
      <input name='cpf' type='hidden' id='cpf' value='$cpf'>
      <input name='tipo' type='hidden' id='tipo' value='$tipo'>";
	  
	  
	  
	  ?>
    </form></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>

<p>&nbsp;</p>

</body>

</html>

<?

mysql_close($conexao);

?>