

<?php

session_start(); //inicia sess�o...

if ($_SESSION["usuario"] == true) //verifica se a vari�vel "usuario" � verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["senha"] == true) //verifica se a vari�vel "senha" � verdadeira...

echo ""; //se for emite mensagem positiva.

else //se n�o for...

header("Location: alerta.php");

ini_set('default_charset','UTF8_general_mysql500_ci');

require '../../conect/conect.php';

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

-->
</style>
</head>



<?

//require("conexao.php"); or die("erro na requisi��o");




$resposta1 = $_POST['resposta1'];
$resposta2 = $_POST['resposta2'];
$resposta3 = $_POST['resposta3'];


$nome_ref1 = $_POST['nome_ref1'];
$fone_ref1 = $_POST['fone_ref1'];
$grau_relacionamento1 = $_POST['grau_relacionamento1'];
$nome_ref2 = $_POST['nome_ref2'];
$fone_ref2 = $_POST['fone_ref2'];
$grau_relacionamento2 = $_POST['grau_relacionamento2'];


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

//Declara��o de uma vari�vel com uma data
$dia = date('d');
$mes = date('m');
$ano = date('Y');

$data_limite_envio_proposta_fisica = "$dia-$mes-$ano";



echo "Data da efetiva��o da proposta " . $data_limite_envio_proposta_fisica . "<br />";

 
//Separa��o dos valores (dia, m�s e ano)
$arr = explode("-", $data_limite_envio_proposta_fisica);
 
$dialimite = $arr[0];
$meslimite = $arr[1];
$anolimite = $arr[2];


 
//Per�odo (Qtd. de dias para somar ou subtrair)
$sql = "SELECT * FROM prazo_entrega_fisico limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$periodo = $linha[1];

}
 
//Somar Data
$data_inc = date('d-m-Y', mktime(0, 0, 0, $meslimite, $dialimite + $periodo, $anolimite));



echo "Data limite para entrega do f�sico na matriz: " . $data_inc . "<br />";

$data_inc_inversa = date('Y-m-d', mktime(0, 0, 0, $meslimite, $dialimite + $periodo, $anolimite));


$prazo_final = $data_inc_inversa;




 
//Subtrair Data
//$data_dec = date('d-m-Y', mktime(0, 0, 0, $mes, $dia - $periodo, $ano));
//echo "Data decrementada: " . $data_dec . "<br />";
 
//Somar Ano
//$ano_inc = date('d-m-Y', mktime(0, 0, 0, $mes, $dia, $ano + $periodo));
//echo "Ano incrementado: " . $ano_inc . "<br />";
 
//Subtrair M�s
//$mes_dec = date('d-m-Y', mktime(0, 0, 0, $mes - $periodo, $dia, $ano));
//echo "M�s decrementado: " . $mes_dec;


echo "<script>



alert('ATEN��O!!!... VOC� TEM AT� $data_inc PARA ENVIAR O CONTRATO FISICO PARA MATRIZ!');

</script>";


?>


<?

// dados da proposta

$status = $_POST['status'];

$status_pagto_cliente = $_POST['status_pagto_cliente'];

$nome_operador = $_POST['nome_operador'];

$tipo_proposta = $_POST['tipo_proposta'];

$tipo_contrato = $_POST['tipo_contrato'];

$tabela = $_POST['tabela'];

$tipo = $_POST['tipo'];

$dataproposta = $_POST['dataproposta'];

$horaproposta = $_POST['horaproposta'];

$estabelecimento_proposta = $_POST['estabelecimento_proposta'];

$nome = $_POST['nome'];

$resposta = $_POST['resposta'];

$cpf = $_POST['cpf'];

$num_beneficio = $_POST['num_beneficio'];

$num_beneficio2 = $_POST['num_beneficio2'];

$num_beneficio3 = $_POST['num_beneficio3'];

$num_beneficio4 = $_POST['num_beneficio4'];

$dia_niver = $_POST['dia_niver'];

$mes_niver = $_POST['mes_niver'];

$ano_niver = $_POST['ano_niver'];

$rg = $_POST['rg'];

$orgao = $_POST['orgao'];

$emissao = $_POST['emissao'];

$pai = $_POST['pai'];

$mae = $_POST['mae'];

$endereco = $_POST['endereco'];

$numero  = $_POST['numero'];

$bairro = $_POST['bairro'];

$complemento = $_POST['complemento'];

$cidade = $_POST['cidade'];

$estado = $_POST['estado'];

$cep = $_POST['cep'];

$sexo = $_POST['sexo'];

$estadocivil = $_POST['estadocivil'];

$telefone = $_POST['telefone'];

$celular = $_POST['celular'];

$email = $_POST['email'];

$valor_credito = $_POST['valor_credito'];

$valor_total = $_POST['valor_total'];

$valor_liquido_cliente = $_POST['valor_liquido_cliente'];

$valor_liberado = $_POST['valor_liberado'];

$quant_parc = $_POST['quant_parc'];

$parcela = $_POST['parcela'];

$banco_pagto = $_POST['banco_pagto'];

$bco_operacao = $_POST['bco_operacao'];

$num_banco = $_POST['num_banco'];

$agencia = $_POST['agencia'];

$conta = $_POST['conta'];

$parc1 = $_POST['parc1'];

$banco1 = $_POST['banco1'];

$vencto1 = $_POST['vencto1'];

$compra1 = $_POST['compra1'];

$bco_quitacao = $_POST['bco_quitacao'];



$obs = $_POST['obs'];

$recebido = $_POST['recebido'];

$termo_de_responsabilidade = $_POST['termo_de_responsabilidade'];

$termo = $_POST['termo'];

$data_proposta = $_POST['data_proposta'];

$tipo_conta = $_POST['tipo_conta'];

$pagto_beneficio = $_POST['pagto_beneficio'];

$valorrenda = $_POST['valorrenda'];

$secretaria = $_POST['secretaria'];

$categoria = $_POST['categoria'];

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

//dados do operador



$operador = $_POST['operador'];

$cel_operador = $_POST['cel_operador'];

$email_operador = $_POST['email_operador'];



$operador_alterou = $_POST['operador_alterou'];

$cel_operador_alterou = $_POST['cel_operador_alterou'];

$email_operador_alterou = $_POST['email_operador_alterou'];



//dados do estabelecimento



$estabelecimento = $_POST['estabelecimento'];

$cidade_estabelecimento = $_POST['cidade_estabelecimento'];

$tel_estabelecimento = $_POST['tel_estabelecimento'];

$email_estabelecimento = $_POST['email_estabelecimento'];

$estabelecimento_alterou = $_POST['estabelecimento_alterou'];

$cidade_estabelecimento_alterou = $_POST['cidade_estabelecimento_alterou'];

$tel_estabelecimento_alterou = $_POST['tel_estabelecimento_alterou'];

$email_estabelecimento_alterou = $_POST['email_estabelecimento_alterou'];



$status = $_POST['status'];

$mes_ano = $_POST['mes_ano'];



$dia = $_POST['dia'];

$mes = $_POST['mes'];

$ano = $_POST['ano'];



$status_fisico = $_POST['status_fisico'];

$digitacao = "A Digitar";







$sql = "SELECT * FROM clientes where cpf = '$cpf'";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$cod_cli = $linha[0];

$telefone_cli = $linha[18];

$celular_cli = $linha[19];



}



//Aqui come�a a verifica��o do telefone do cliente



if($telefone<>$telefone_cli){

$sql = "SELECT * FROM telefones_de_clientes where cod_cli = '$cod_cli' and telefone = '$telefone'";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$lista_telefone = $linha[2];



}

if($lista_telefone==""){

$comando = "insert into telefones_de_clientes(cod_cli,telefone) values('$cod_cli','$telefone')";

mysql_query($comando,$conexao);





}



// Aqui come�a a verifica��o do celular do cliente

}





if($celular<>$celular_cli){

$sql = "SELECT * FROM telefones_de_clientes where cod_cli = '$cod_cli' and telefone = '$celular'";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$lista_telefone = $linha[2];



}

if($lista_telefone==""){

$comando = "insert into telefones_de_clientes(cod_cli,telefone) values('$cod_cli','$celular')";

mysql_query($comando,$conexao);





}





}












$comando = "insert into propostas(status,nome_operador,tipo,tipo_proposta,dataproposta,horaproposta,estabelecimento_proposta,nome,cpf,num_beneficio,rg,orgao,emissao,pai,mae,endereco,numero,bairro,complemento,cidade,estado,cep,sexo,estadocivil,telefone,celular,email,valor_credito,quant_parc,parcela,banco_pagto,bco_operacao,num_banco,agencia,conta,parc1,banco1,vencto1,compra1,obs,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_beneficio2,num_beneficio3,num_beneficio4,mes_ano,recebido,status_pagto_cliente,dia,mes,ano,tabela,valor_total,valor_liquido_cliente,status_fisico,num_bordero,tipo_contrato,termo_de_responsabilidade,termo,data_proposta,prazo_final,digitacao,tipo_conta,resposta,bco_quitacao,nome_ref1,fone_ref1,grau_relacionamento1,nome_ref2,fone_ref2,grau_relacionamento2,resposta1,resposta2,resposta3,pagto_beneficio,valorrenda,dia_niver,mes_niver,ano_niver,secretaria,categoria,empresa,porte_empresa,data_admissao,meses,inicio_atividade,end_empresa,numero_empresa,complemento_empresa,bairro_empresa,cep_empresa,cidade_empresa,estado_empresa,ddd_tel_empresa,telefone_empresa,cpt,serie,natureza_operacao,cargo,salario,atividade_principal,cnpj,ddd_tel_contador,tel_contador,bem,chassi,veiculo,ano_modelo,modelo,renavam,num_portas,combustivel,placa,valor_venda,valor_entrada,tarifa_cadastro,valor_financiar,codigo_tabela,mista,coeficiente,r,valor_liberado,num_parcelas,valor_parcelas,trinta,quarenta_cinco,pagto_serv_terc) values('$status','$nome_operador','$tipo','$tipo_proposta','$dataproposta','$horaproposta','$estabelecimento_proposta','$nome','$cpf','$num_beneficio','$rg','$orgao','$emissao','$pai','$mae','$endereco','$numero','$bairro','$complemento','$cidade','$estado','$cep','$sexo','$estadocivil','$telefone','$celular','$email','$valor_credito','$quant_parc','$parcela','$banco_pagto','$bco_operacao','$num_banco','$agencia','$conta','$parc1','$banco1','$vencto1','$compra1','$obs','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','$num_beneficio2','$num_beneficio3','$num_beneficio4','$mes_ano','$recebido','$status_pagto_cliente','$dia','$mes','$ano','$tabela','$valor_total','$valor_liquido_cliente','$status_fisico','','$tipo_contrato','$termo_de_responsabilidade','$termo','$data_proposta','$prazo_final','$digitacao','$tipo_conta','$resposta','$bco_quitacao','$nome_ref1','$fone_ref1','$grau_relacionamento1','$nome_ref2','$fone_ref2','$grau_relacionamento2','$resposta1','$resposta2','$resposta3','$pagto_beneficio','$valorrenda','$dia_niver','$mes_niver','$ano_niver','$secretaria','$categoria','$empresa','$porte_empresa','$data_admissao','$meses','$inicio_atividade','$end_empresa','$numero_empresa','$complemento_empresa','$bairro_empresa','$cep_empresa','$cidade_empresa','$estado_empresa','$ddd_tel_empresa','$telefone_empresa','$cpt','$serie','$natureza_operacao','$cargo','$salario','$atividade_principal','$cnpj','$ddd_tel_contador','$tel_contador','$bem','$chassi','$veiculo','$ano_modelo','$modelo','$renavam','$num_portas','$combustivel','$placa','$valor_venda','$valor_entrada','$tarifa_cadastro','$valor_financiar','$codigo_tabela','$mista','$coeficiente','$r','$valor_liberado','$num_parcelas','$valor_parcelas','$trinta','$quarenta_cinco','$pagto_serv_terc')";





mysql_query($comando,$conexao);





echo "Proposta efetuada com sucesso!<br><br>";


?>





<?

$sql = "SELECT * FROM propostas order by num_proposta desc limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

?>

<?

$num_proposta = $linha[0];

$nome = $linha[4];

$cpf = $linha[7];

$tipo_proposta = $linha[83];

$tipo = $linha[2];

$dataproposta = $linha[40];

$horaproposta = $linha[41];

$status = $linha[51];

$operador = $linha[32];

$cel_operador = $linha[33];

$email_operador = $linha[34];

$estabelecimento = $linha[35];

$cidade_estabelecimento = $linha[36];

$tel_estabelecimento = $linha[37];

$email_estabelecimento = $linha[38];

$bco_operacao = $linha[86];

$valor_total = $linha[113];

$tipo_contrato = $linha[136];

$resposta = $linha[160];


}
?>






<?


printf("O n�mero da proposta �: $num_proposta");


?>

<?

$sql = "SELECT * FROM cad_empresa limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {




$nfantasia = $linha[2];
$email_empresa = $linha[14];
$site = $linha[15];


}

	

	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO
	
$sql = "SELECT * FROM tipo_contrato where tipo_contrato = '$tipo_contrato' limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {


//$tipocontrato = $linha[1];
$email_mesa = $linha[2];

}
	
$email_dest = $email_mesa;


	// FIM DO SCRIPT DO EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO


	

	//PREPARA O PEDIDO

	$mens   =  "Ol�! Sua proposta foi efetiva com sucesso na $nfantasia!   \n";

	$mens  .=  "Visite-nos $site \n";

	$mens  .=  "Nome: ".$nome."                                                       \n";
	
	$mens  .=  "Como Conheceu a Empresa: ".$resposta."                                                       \n";

	$mens  .=  "CPF: ".$cpf."                                                    \n";

	$mens  .=  "Perfil do cliente: ".$tipo."                                                    \n";

	$mens  .=  "Tipo de Proposta: ".$tipo_proposta."                                                    \n";
	
	$mens  .=  "Tipo de Contrato: ".$tipo_contrato."                                                    \n";
	
	$mens  .=  "Banco de Opera��o: ".$bco_operacao."                                                    \n";
	
	$mens  .=  "Valor Bruto da opera��o: ".$valor_total."                                                    \n";
	
	$mens  .=  "Valor L�quido da opera��o: ".$valor_liquido_cliente."                                                    \n";
	
	$mens  .=  "Prazo: ".$quant_parc."                                                    \n";
	
	$mens  .=  "Parcela: ".$parcela."                                                    \n";
	
	$mens  .=  "Tabela da Opera��o: ".$tabela."                                                    \n";

	$mens  .=  "Data da proposta: ".$dataproposta."                                                    \n";

	$mens  .=  "Hora da proposta: ".$horaproposta."                                                    \n";

	$mens  .=  "N�mero da Proposta: ".$num_proposta."                                                    \n";

	$mens  .=  "Status: ".$status."                                                    \n";

	$mens  .=  "Operador que efetuou o cadastro: ".$operador."                                                    \n";

	$mens  .=  "Celular: ".$cel_operador."                                                    \n";

	$mens  .=  "E-Mail: ".$email_operador."                                                    \n";

	$mens  .=  "Estabelecimento: ".$estabelecimento."                                                    \n";

	$mens  .=  "Cidade: ".$cidade_estabelecimento."                                                    \n";

	$mens  .=  "Telefone: ".$tel_estabelecimento."                                                    \n";

	$mens  .=  "E-Mail: ".$email_estabelecimento."                                                    \n";



	

	//DISPARA O EMAIL

	//$envia  =  mail($email_dest, "Proposta N� ".$num_proposta." efetuada no sistema em ".$dataproposta, $mens,"From:".$email_dest."\r\nBcc:".$email);

	//$envia  =  mail($email_operador, "Proposta N� ".$num_proposta.", ".$operador."! Efetue ativa��o no sistema",$mens,"From:".$email_dest);



?>









<p>&nbsp;</p>

<form action="imprimir_proposta.php" method="post" name="form1" target="_blank">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
<?

  echo "<input class='class01' type='submit' name='Submit3' value='Imprimir Proposta'>";
  ?>

  <input name="num_proposta" type="hidden" id="num_proposta" value="<? echo $num_proposta; ?>">

</form>

<form name="form1" method="post" action="../index.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input class='class01' type="submit" name="Submit2" value="Voltar ao menu principal">

</form>

<p>&nbsp;</p>

</body>

</html>

<?

mysql_close($conexao);

?>