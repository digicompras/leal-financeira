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



// dados da proposta

$num_proposta = $_POST['num_proposta'];

$telefone = $_POST['telefone'];

$celular = $_POST['celular'];

$valor_total = $_POST['valor_total'];

$dataalteracao = $_POST['dataalteracao'];

$horaalteracao = $_POST['horaalteracao'];

$valor_liquido_cliente = $_POST['valor_liquido_cliente'];

$quant_parc = $_POST['quant_parc'];

$parcela = $_POST['parcela'];

$bco_operacao = $_POST['bco_operacao'];

$bco_quitacao = $_POST['bco_quitacao'];

$banco_pagto = $_POST['banco_pagto'];

$agencia = $_POST['agencia'];

$conta = $_POST['conta'];

$tipo_conta = $_POST['tipo_conta'];

$bco_quitacao = $_POST['bco_quitacao'];

$nome_ref1 = $_POST['nome_ref1'];

$fone_ref1 = $_POST['fone_ref1'];

$grau_relacionamento1 = $_POST['grau_relacionamento1'];

$nome_ref2 = $_POST['nome_ref2'];

$fone_ref2 = $_POST['fone_ref2'];

$grau_relacionamento2  = $_POST['grau_relacionamento2'];

$empresa = $_POST['empresa'];

$porte_empresa = $_POST['porte_empresa'];

$data_admissao = $_POST['data_admissao'];

$meses = $_POST['meses'];

$inicio_atividade = $_POST['inicio_atividade'];

$end_empresa = $_POST['end_empresa'];

$numero_empresa = $_POST['numero_empresa'];

$complemento_empresa = $_POST['complemento_empresa'];

$bairro_empresa = $_POST['bairro_empresa'];

$cep_empresa = $_POST['cep_empresa'];

$cidade_empresa = $_POST['cidade_empresa'];

$estado_empresa = $_POST['estado_empresa'];

$ddd_tel_empresa = $_POST['ddd_tel_empresa'];

$telefone_empresa = $_POST['telefone_empresa'];

$cpt = $_POST['cpt'];

$serie = $_POST['serie'];

$natureza_operacao = $_POST['natureza_operacao'];

$cargo = $_POST['cargo'];

$salario = $_POST['salario'];

$atividade_principal = $_POST['atividade_principal'];

$cnpj = $_POST['cnpj'];

$ddd_tel_contador = $_POST['ddd_tel_contador'];

$tel_contador = $_POST['tel_contador'];

$bem = $_POST['bem'];

$chassi = $_POST['chassi'];

$veiculo = $_POST['veiculo'];
$ano_modelo = $_POST['ano_modelo'];
$modelo = $_POST['modelo'];
$renavam = $_POST['renavam'];
$num_portas = $_POST['num_portas'];
$combustivel = $_POST['combustivel'];
$placa = $_POST['placa'];
$valor_venda = $_POST['valor_venda'];
$valor_entrada = $_POST['valor_entrada'];
$tarifa_cadastro = $_POST['tarifa_cadastro'];
$valor_financiar = $_POST['valor_financiar'];
$codigo_tabela = $_POST['codigo_tabela'];
$mista = $_POST['mista'];
$coeficiente = $_POST['coeficiente'];
$r = $_POST['r'];
$valor_liberado = $_POST['valor_liberado'];
$num_parcelas = $_POST['num_parcelas'];
$valor_parcelas = $_POST['valor_parcelas'];
$trinta = $_POST['trinta'];
$quarenta_cinco = $_POST['quarenta_cinco'];
$pagto_serv_terc = $_POST['pagto_serv_terc'];
$obs = $_POST['obs'];
$obs2 = $_POST['obs2'];

$termo = $_POST['termo'];
$termo_de_responsabilidade = $_POST['termo_de_responsabilidade'];



//dados do operador





$operador_alterou = $_POST['operador_alterou'];

$cel_operador_alterou = $_POST['cel_operador_alterou'];

$email_operador_alterou = $_POST['email_operador_alterou'];



//dados do estabelecimento



$estabelecimento_alterou = $_POST['estabelecimento_alterou'];

$cidade_estabelecimento_alterou = $_POST['cidade_estabelecimento_alterou'];

$tel_estabelecimento_alterou = $_POST['tel_estabelecimento_alterou'];

$email_estabelecimento_alterou = $_POST['email_estabelecimento_alterou'];


$dia_alteracao_status = $_POST['dia_alteracao_status'];
$mes_alteracao_status = $_POST['mes_alteracao_status'];
$ano_alteracao_status = $_POST['ano_alteracao_status'];




$sql = "select * from db";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$comando = "update `$linha[1]`.`propostas` set `telefone` = '$telefone',`celular` = '$celular',`valor_total` = '$valor_total',`dataalteracao` = '$dataalteracao',`horaalteracao` = '$horaalteracao',`valor_liquido_cliente` = '$valor_liquido_cliente',`quant_parc` = '$quant_parc',`parcela` = '$parcela',`bco_operacao` = '$bco_operacao',`banco_pagto` = '$banco_pagto',`agencia` = '$agencia',`conta` = '$conta',`tipo_conta` = '$tipo_conta',`bco_quitacao` = '$bco_quitacao',`nome_ref1` = '$nome_ref1',`fone_ref1` = '$fone_ref1',`grau_relacionamento1` = '$grau_relacionamento1',`nome_ref2` = '$nome_ref2',`fone_ref2` = '$fone_ref2',`grau_relacionamento2` = '$grau_relacionamento2',`empresa` = '$empresa',`porte_empresa` = '$porte_empresa',`data_admissao` = '$data_admissao',`meses` = '$meses',`inicio_atividade` = '$inicio_atividade',`end_empresa` = '$end_empresa'

,`numero_empresa` = '$numero_empresa',`complemento_empresa` = '$complemento_empresa',`bairro_empresa` = '$bairro_empresa',`cep_empresa` = '$cep_empresa',`cidade_empresa` = '$cidade_empresa',`estado_empresa` = '$estado_empresa',`ddd_tel_empresa` = '$ddd_tel_empresa',`telefone_empresa` = '$telefone_empresa',`cpt` = '$cpt',`serie` = '$serie',`natureza_operacao` = '$natureza_operacao',`cargo` = '$cargo',`dataalteracao` = '$dataalteracao',`horaalteracao` = '$horaalteracao',`operador_alterou` = '$operador_alterou',`cel_operador_alterou` = '$cel_operador_alterou'

,`email_operador_alterou` = '$email_operador_alterou',`estabelecimento_alterou` = '$estabelecimento_alterou',`cidade_estabelecimento_alterou` = '$cidade_estabelecimento_alterou',`tel_estabelecimento_alterou` = '$tel_estabelecimento_alterou',`email_estabelecimento_alterou` = '$email_estabelecimento_alterou',`salario` = '$salario',`atividade_principal` = '$atividade_principal',`cnpj` = '$cnpj',`ddd_tel_contador` = '$ddd_tel_contador',`tel_contador` = '$tel_contador',`bem` = '$bem',`chassi` = '$chassi',`veiculo` = '$veiculo',`ano_modelo` = '$ano_modelo',`modelo` = '$modelo',`renavam` = '$renavam',`num_portas` = '$num_portas',`combustivel` = '$combustivel',`placa` = '$placa',`valor_venda` = '$valor_venda',`valor_entrada` = '$valor_entrada',`tarifa_cadastro` = '$tarifa_cadastro',`valor_financiar` = '$valor_financiar',`codigo_tabela` = '$codigo_tabela',`mista` = '$mista',`coeficiente` = '$coeficiente',`r` = '$r',`valor_liberado` = '$valor_liberado',`num_parcelas` = '$num_parcelas',`valor_parcelas` = '$valor_parcelas',`trinta` = '$trinta',`quarenta_cinco` = '$quarenta_cinco',`pagto_serv_terc` = '$pagto_serv_terc',`obs` = '$obs',`obs2` = '$obs2',`termo` = '$termo',`termo_de_responsabilidade` = '$termo_de_responsabilidade' where `propostas`. `num_proposta` = '$num_proposta' limit 1 ";

}



mysql_query($comando,$conexao) or die("Erro ao alterar informações dessa proposta");





$comando = "insert into observacoes_parecer_credito(num_proposta,cpf,data,hora,obs,operador) values('$num_proposta','$cpf','$dataalteracao','$horaalteracao','$obs2','$operador_alterou')";



mysql_query($comando,$conexao);





$comando = "insert into observacoes_de_propostas(num_proposta,cpf,data,hora,obs,operador) values('$num_proposta','$cpf','$dataalteracao','$horaalteracao','$obs','$operador_alterou')";



mysql_query($comando,$conexao);









echo "Dados do cliente alterados no banco de dados com sucesso<br>";

?>



<?

$sql = "SELECT * FROM propostas where num_proposta = '$num_proposta'";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

?>

<?

$num_proposta = $linha[0];

$nome = $linha[4];

$cpf = $linha[7];

$dataalteracao = $linha[42];

$horaalteracao = $linha[43];

$status = $linha[51];

$operador_alterou = $linha[44];

$cel_operador_alterou = $linha[45];

$email_operador_alterou = $linha[46];

$estabelecimento_alterou = $linha[47];

$cidade_estabelecimento_alterou = $linha[48];

$tel_estabelecimento_alterou = $linha[49];

$email_estabelecimento_alterou = $linha[50];

$obs2 = $linha[102];



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

	$mens   =  "Olá! os dados de sua proposta foram atualizados na $nfantasia_empresa!   \n";

	$mens  .=  "Visite-nos $site_empresa \n";

	$mens  .=  "Nome: ".$nome."                                                       \n";

	$mens  .=  "CPF: ".$cpf."                                                    \n";

	$mens  .=  "Nº da Proposta: ".$num_proposta."                                                    \n";

	$mens  .=  "Data da alteração: ".$dataalteracao."                                                    \n";

	$mens  .=  "Hora da alteração: ".$horaalteracao."                                                    \n";

	$mens  .=  "STATUS: ".$status."                                                    \n";

	$mens  .=  "Parecer de Crédito: ".$obs2."                                                    \n\n";

	

	$mens  .=  "Operador que efetuou a alteração: ".$operador_alterou."                                                    \n";

	$mens  .=  "Celular: ".$cel_operador_alterou."                                                    \n";

	$mens  .=  "E-Mail: ".$email_operador_alterou."                                                    \n";

	$mens  .=  "Estabelecimento: ".$estabelecimento_alterou."                                                    \n";

	$mens  .=  "Cidade: ".$cidade_estabelecimento_alterou."                                                    \n";

	$mens  .=  "Telefone: ".$tel_estabelecimento_alterou."                                                    \n";

	$mens  .=  "E-Mail: ".$email_estabelecimento_alterou."                                                    \n";



	

	//DISPARA O EMAIL

	//$envia  =  mail($email_dest, "Proposta atualizada no sistema em ".$dataalteracao, $mens,"From:".$email_dest."\r\nBcc:".$email);

	//$envia  =  mail($email_operador_alterou, "Proposta Nº ".$num_proposta.", ".$operador_alterou."! Confira os dados no sistema!",$mens,"From:".$email_dest);



?>





<body>

<form name="form1" method="post" action="menu.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" name="Submit3" value="Voltar">

</form>

<form name="form1" method="post" action="../principal.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" name="Submit2" value="Voltar ao menu principal">

</form>

</body>

</html>

<?

mysql_close($conexao);

?>

