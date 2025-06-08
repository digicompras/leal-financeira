<?php
session_start(); //inicia sessão...
if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
else //se não for...
header("Location: alerta.php");

ini_set('default_charset','UTF8_general_mysql500_ci');

require '../../conect/conect.php';

?>



<html>
<head>
<title>FORMULARIO DE PROPOSTAS</title>
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
.style2 {font-size: 10px}
.style3 {
	color: #008000;
	font-weight: bold;
}

-->
</style>
</head>
<?


$date = date('Y-m-d');


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
$sql = "SELECT * FROM hora_certa limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {


$acao = $linha[5];
$hora_ajuste = $linha[2];

}

$horacerta = date('H')+$hora_ajuste;
if($horacerta<=9){
$hora_atual = "0".$horacerta.date(':i:s');
}
else{
$hora_atual = $horacerta.date(':i:s');
}
?>



<form name="form1" method="post" action="menu.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input class='class01' type="submit" name="Submit3" value="Voltar">
</form>
<?
$tipo = $_POST['tipo'];
$tipo_proposta = $_POST['tipo_proposta'];
$tipo_contrato = $_POST['tipo_contrato'];
$cpf = $_POST['cpf'];
$estabelecimento_proposta = $_POST['estabelecimento_proposta'];
$valor_liberado = $_POST['valor_liberado'];
$bco_operacao = $_POST['bco_operacao'];
$tabela = $_POST['tabela'];
$termo_de_responsabilidade = $_POST['termo_de_responsabilidade'];
$bloqueio_compra = $_POST['bloqueio_compra'];
$valorrenda = $_POST['valorrenda'];

$bem = $_POST['bem'];
$categoria_veiculo = $_POST['categoria_veiculo'];
$valor_venda = $_POST['valor_venda'];
$valor_entrada = $_POST['valor_entrada'];
$tac = $_POST['tac'];

$num_parcelas = $_POST['num_parcelas'];
$coeficiente = $_POST['coeficiente'];
$codigo_tabela = $_POST['codigo_tabela'];
$mista = $_POST['mista'];

$r_2 = $_POST['r'];

$r_calcula = $_POST['r']*1.2;

$r = $r_calcula/100;

$diferenca = bcsub($valor_venda,$valor_entrada,2);



?>


<?

if((empty($termo_de_responsabilidade))){

echo "<script>

alert('ATENÇÃO!!!... VOCÊ DEVE ASSINAR DIGITALMENTE O TERMO DE RESPONSABILIDADE CLICANDO SOBRE O CAMPO  --> Estou ciente e de Acordo!.');
window.location = 'informacoes_antecedem_efetuar_proposta.php?tipo=$tipo&estabelecimento_proposta=$estabelecimento_proposta&cpf=$cpf&tipo_proposta=$tipo_proposta&tipo_contrato=$tipo_contrato&tabela=$tabela&bloqueio_compra=$bloqueio_compra&valorrenda=$valorrenda';

</script>";


	}

if(empty($tipo_contrato)){

echo "<script>

alert('ATENÇÃO!!!... VOCÊ DEVE SELECIONAR UM TIPO DE CONTRATO!.');
window.location = 'informacoes_antecedem_efetuar_proposta.php?tipo=$tipo&estabelecimento_proposta=$estabelecimento_proposta&cpf=$cpf&tipo_proposta=$tipo_proposta&tipo_contrato=$tipo_contrato&tabela=$tabela&bloqueio_compra=$bloqueio_compra';

</script>";


	}









$sql = "SELECT * FROM clientes where cpf = '$cpf'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$codigo_cli = $linha[0];
$nome_cli = $linha[1];
$sexo_cli = $linha[2];
$estadocivil_cli = $linha[3];
//$cpf_cli = $linha[4];
$rg_cli = $linha[5];
$orgao_cli = $linha[6];
$emissao_cli = $linha[7];

$dia_niver = $linha[138];
$mes_niver = $linha[88];
$ano_niver = $linha[139];

$pai_cli = $linha[9];
$mae_cli = $linha[10];
$endereco_cli = $linha[11];
$numero_cli = $linha[12];
$bairro_cli = $linha[13];
$complemento_cli = $linha[14];
$cidade_cli = $linha[15];
$estado_cli = $linha[16];
$cep_cli = $linha[17];
$telefone_cli = $linha[18];
$celular_cli = $linha[19];
$email_cli = $linha[20];
$operador_cli = $linha[21];
$cel_operador_cli = $linha[22];
$email_operador_cli = $linha[23];
$estabelecimento_cli = $linha[24];
$cidade_estabelecimento_cli = $linha[25];
$tel_estabelecimento_cli = $linha[26];
$email_estabelecimento_cli = $linha[27];
$obs_cli = $linha[28];
$datacadastro_cli = $linha[29];
$horacadastro_cli = $linha[30];
$dataalteracao_cli = $linha[31];
$horaalteracao_cli = $linha[32];
$operador_alterou_cli = $linha[33];
$cel_operador_alterou_cli = $linha[34];
$email_operador_alterou_cli = $linha[35];
$estabelecimento_alterou_cli = $linha[36];
$cidade_estabelecimento_alterou_cli = $linha[37];
$tel_estabelecimento_alterou_cli = $linha[38];
$email_estabelecimento_alterou_cli = $linha[39];
$banco = $linha[41];
$agencia = $linha[42];
$conta = $linha[43];
$num_beneficio = $linha[44];
$num_beneficio2 = $linha[73];
$num_beneficio3 = $linha[74];
$num_beneficio4 = $linha[75];

$pagto_beneficio = $linha[116];


$resposta = $linha[119];
$secretaria = $linha[124];
$categoria = $linha[134];


$valorrenda = $linha[136];


}
?>
<?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$nome_op = $linha[1];
$cpf_op = $linha[4];
$celular = $linha[19];
$email = $linha[20];
$estabelecimento = $linha[44];
$cidade_estabelecimento = $linha[45];
$tel_estabelecimento = $linha[46];
$email_estabelecimento = $linha[47];

}
?>

<?
//---------------------VALIDACAO DOS CAMPOS--------------------------------------------------


if((empty($valorrenda)) or (empty($celular_cli)) or (empty($cpf))){ ?>

<script>

alert("ATENÇÃO!!!...\n                  <? echo "$nome_op"; ?> \n\nVALOR DA RENDA DO CLIENTE NAO INFORMADO!. ATUALIZE O CADASTRO DO CLIENTE PRIMEIRO!. \n\n CPF* --->> <? echo "$cpf"; ?> \n Valor Renda* --->> <? echo "$valorrenda"; ?> \n Telefone* --->> <? echo "$telefone_cli"; ?>\n Celular* --->> <? echo "$celular_cli"; ?>");

window.location = "../clientes/editar_cliente.php?nome=<? echo "$nome_cli"; ?>&cpf=<? echo "$cpf"; ?>&telefone=<? echo "$telefone_cli"; ?>&celular=<? echo "$celular_cli"; ?>&num_beneficio=<? echo "$num_beneficio"; ?>&secretaria=<? echo "$secretaria"; ?>&categoria=<? echo "$categoria"; ?>&rg=<? echo "$rg_cli"; ?>&mae=<? echo "$mae_cli"; ?>&valorrenda=<? echo "$valorrenda"; ?>";

</script>

<?

}

//-------------------FIM DA VALIDACAO DOS CAMPOS--------------------------------
?>


<? 

$sql = "SELECT * FROM termo_de_responsabilidade limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$termo = $linha[1];

}


 ?>
<form name="form1" method="post" action="grava_proposta.php">

<table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="4" background="../../imagens/fundocelulas2.png"><div align="center"><strong><font color="#0000FF" size="4">FORMUL&Aacute;RIO DE PROPOSTA </font></strong></div></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><strong>Perfil do cliente</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Tipo da proposta </strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Tabela</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Data da Proposta </strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><strong><font color="#0000FF"><? echo $tipo; ?>
            <input name="tipo" type="hidden" id="tipo" value="<? echo $tipo; ?>">
      </font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong><font color="#0000FF"><? echo $tipo_proposta; ?>
            <input name="tipo_proposta" type="hidden" id="tipo_proposta" value="<? echo $tipo_proposta; ?>">
      </font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong><font color="#0000FF"><? echo $tabela; ?>
            <input name="tabela" type="hidden" id="tabela" value="<? echo $tabela; ?>">
      </font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong><font color="#0000FF"><? echo date('d-m-Y'); ?></font></strong>
        <input name="dataproposta" type="hidden" id="dataproposta3" value="<? echo date('d-m-Y'); ?>">
        <input name="data_proposta" type="hidden" id="dataproposta4" value="<? echo $date; ?>">
        <input name="horaproposta" type="hidden" id="horaproposta3" value="<? echo $hora_atual; ?>">
        <input name="mes_ano" type="hidden" id="mes_ano" value="<? echo date('m-Y'); ?>">
        <input name="dia" type="hidden" id="dataproposta" value="<? echo date('d'); ?>">
        <input name="mes" type="hidden" id="dataproposta2" value="<? echo date('m'); ?>">
        <input name="ano" type="hidden" id="ano" value="<? echo date('Y'); ?>">
        <strong><font color="#0000FF"></font></strong></td>
    </tr>
    <tr> 
      <td background="../../imagens/fundocelulas1.png"><strong>Operador</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Agencia</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Status</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Tipo de Contrato</strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><strong><font color="#0000FF"><? echo $nome_op; ?>
            <input name="nome_operador" type="hidden" id="nome_operador" value="<? echo $nome_op; ?>">
      </font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong><font color="#0000FF"><? echo $estabelecimento_proposta; ?>
            <input name="estabelecimento_proposta" type="hidden" id="estabelecimento_proposta" value="<? echo $estabelecimento_proposta; ?>">
      </font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong><font color="#0000FF"><? echo "EM ANDAMENTO"; ?>
            <input name="status" type="hidden" id="status4" value="<? echo "EM ANDAMENTO"; ?>">
            <input name="status_pagto_cliente" type="hidden" id="status_pagto_cliente" value="<?  echo "Aguardando_Pagto"; ?>">
            <input name="status_fisico" type="hidden" id="status_fisico" value="<? echo "Recebido"; ?>">
      </font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong><font color="#0000FF"><? echo $tipo_contrato; ?>
            <input name="tipo_contrato" type="hidden" id="tipo_contrato" value="<? echo $tipo_contrato; ?>">
      </font></strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><strong>Cliente</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>CPF</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>RG/&Oacute;rg&atilde;o</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Emiss&atilde;o</strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><input name="nome" type="hidden" id="nome" value="<? echo $nome_cli; ?>">
      <strong><font color="#0000FF"><? echo $nome_cli; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="cpf" type="hidden" id="cpf2" value="<? echo $cpf; ?>">
        <strong><font color="#0000FF"><? echo $cpf; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="rg" type="hidden" id="rg" value="<? echo $rg_cli; ?>">
        <strong><font color="#0000FF"><? echo $rg_cli; ?>
        </font>/
        <input name="orgao" type="hidden" id="orgao" value="<? echo $orgao_cli; ?>">
      <strong><? echo $orgao_cli; ?></strong></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="emissao" type="hidden" id="emissao" value="<? echo $emissao_cli; ?>">
        <strong><font color="#0000FF"><? echo $emissao_cli; ?></font></strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><strong>Secretaria</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Categoria</strong></td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><input name="secretaria" type="hidden" id="secretaria" value="<? echo $secretaria; ?>">
        <strong><font color="#0000FF"><? echo $secretaria; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="categoria" type="hidden" id="categoria" value="<? echo $categoria; ?>">
        <strong><font color="#0000FF"><? echo $categoria; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><strong>Orienta&ccedil;&atilde;o Sexual</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Data Nasc</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Pai</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>M&atilde;e</strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><input name="sexo" type="hidden" id="sexo" value="<? echo $sexo_cli; ?>">
        <strong><font color="#0000FF"><? echo $sexo_cli; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="dia_niver" type="hidden" id="dia_niver" value="<? echo $dia_niver; ?>">
        <input name="mes_niver" type="hidden" id="mes_niver" value="<? echo $mes_niver; ?>">
        <input name="ano_niver" type="hidden" id="ano_niver" value="<? echo $ano_niver; ?>">
      <strong><font color="#0000FF"><? echo "$dia_niver/$mes_niver/$ano_niver"; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="pai" type="hidden" id="pai2" value="<? echo $pai_cli; ?>">
        <strong><font color="#0000FF"><? echo $pai_cli; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="mae" type="hidden" id="mae" value="<? echo $mae_cli; ?>">
        <strong><font color="#0000FF"><? echo $mae_cli; ?></font></strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><strong>Estado Civil</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Como Conheceu a Empresa</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Valor Renda</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>E-Mail</strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><input name="estadocivil" type="hidden" id="estadocivil" value="<? echo $estadocivil_cli; ?>">
        <strong><font color="#0000FF"><? echo $estadocivil_cli; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="resposta" type="hidden" id="resposta" value="<? echo $resposta; ?>">
        <strong><font color="#0000FF"><? echo $resposta; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="valorrenda" type="hidden" id="email3" value="<? echo $valorrenda; ?>">
        <strong><font color="#0000FF"><? echo $valorrenda; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="email" type="hidden" id="email2" value="<? echo $email_cli; ?>">
        <strong><font color="#0000FF"><? echo $email_cli; ?></font></strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><strong>N&ordm; Benef&iacute;cio 1</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>N&ordm; Benef&iacute;cio2</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>N&ordm; Benef&iacute;cio 3 </strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>N&ordm; Benef&iacute;cio 4 </strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><input name="num_beneficio" type="hidden" id="num_beneficio" value="<? echo $num_beneficio; ?>">
        <strong><font color="#0000FF"><? echo $num_beneficio; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="num_beneficio2" type="hidden" id="num_beneficio22" value="<? echo $num_beneficio2; ?>">
        <strong><font color="#0000FF"><? echo $num_beneficio2; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="num_beneficio3" type="hidden" id="num_beneficio32" value="<? echo $num_beneficio3; ?>">
        <strong><font color="#0000FF"><? echo $num_beneficio3; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="num_beneficio4" type="hidden" id="num_beneficio42" value="<? echo $num_beneficio4; ?>">
        <strong><font color="#0000FF"><? echo $num_beneficio4; ?></font></strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><strong>Endere&ccedil;o</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>N&uacute;mero</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Complemento</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Bairro</strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><input name="endereco" type="hidden" id="endereco2" value="<? echo $endereco_cli; ?>">
        <strong><font color="#0000FF"><? echo $endereco_cli; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="numero" type="hidden" id="numero" value="<? echo $numero_cli; ?>">
        <strong><font color="#0000FF"><? echo $numero_cli; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="complemento" type="hidden" id="complemento" value="<? echo $complemento_cli; ?>">
        <strong><font color="#0000FF"><? echo $complemento_cli; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="bairro" type="hidden" id="bairro2" value="<? echo $bairro_cli; ?>">
        <strong><font color="#0000FF"><? echo $bairro_cli; ?></font></strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><strong>Cep</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Cidade</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Estado</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Tipo de pagto do Benef&iacute;cio</strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><input name="cep" type="hidden" id="cep2" value="<? echo $cep_cli; ?>">
        <strong><font color="#0000FF"><? echo $cep_cli; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="cidade" type="hidden" id="cidade2" value="<? echo $cidade_cli; ?>">
        <strong><font color="#0000FF"><? echo $cidade_cli; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong><font color="#0000FF">
        <input name="estado" type="hidden" id="estado" value="<? echo $estado_cli; ?>">
        <? echo $estado_cli; ?></font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><input name="pagto_beneficio" type="hidden" id="email" value="<? echo $pagto_beneficio; ?>">
        <strong><font color="#0000FF"><? echo $pagto_beneficio; ?></font></strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png"><strong>Telefone</strong></td>
      <td background="../../imagens/fundocelulas2.png"><strong>Celular</strong></td>
      <td background="../../imagens/fundocelulas2.png"><strong>Valor bruto de opera&ccedil;&atilde;o R$</strong></td>
      <td background="../../imagens/fundocelulas2.png"><strong>Valor liq cliente R$ </strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="telefone" type="text" id="telefone3" value="<? echo $telefone; ?>" size="15" maxlength="14"></td>
      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="celular" type="text" id="celular" value="<? echo $celular; ?>" size="15" maxlength="14"></td>
      <td background="../../imagens/fundocelulas2.png"><font color="#0000FF">
        <input class='class02' name="valor_total" type="text" id="valor_total" size="15">
      </font></td>
      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="valor_liquido_cliente" type="text" id="valor_liquido_cliente" size="15">
        <font color="#0000FF">
        <input name="valor_credito" type="hidden" id="valor_credito" value="">
        <? //echo $valor_liberado; ?>
        </font></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png"><strong>Quant de parcelas </strong></td>
      <td background="../../imagens/fundocelulas2.png"><strong>Valor parcela</strong></td>
      <td background="../../imagens/fundocelulas2.png"><strong>Banco de Opera&ccedil;&atilde;o </strong></td>
      <td background="../../imagens/fundocelulas2.png"><strong>Banco do cliente</strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png"><font color="#0000FF">
        <input class='class02' name="quant_parc" type="text" id="quant_parc" size="15">
      </font></td>
      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="parcela" type="text" id="parcela2" size="15"></td>
      <td background="../../imagens/fundocelulas2.png"><strong><font color="#0000FF">
        <select class='class02' name="bco_operacao" id="select3">
          <option selected>Selecione o banco</option>
          <?


    $sql = "select * from bco_operacao order by banco asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['banco']."</option>";
    }
?>
        </select>
      </font></strong></td>
      <td background="../../imagens/fundocelulas2.png"><strong><font color="#0000FF">
        <select class='class02' name="banco_pagto" id="select5">
          <option selected><? echo $banco_pagto; ?></option>
          <?


    $sql = "select * from bancos order by banco asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['banco']."</option>";
    }
?>
        </select>
      </font></strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png"><strong>Ag&ecirc;ncia</strong></td>
      <td background="../../imagens/fundocelulas2.png"><strong>N&ordm; Conta</strong></td>
      <td background="../../imagens/fundocelulas2.png"><strong>Tipo Conta</strong></td>
      <td background="../../imagens/fundocelulas2.png"><strong>Banco a ser Portado</strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png"><strong><font color="#0000FF">
        <input class='class02' name="agencia" type="text" id="agencia" value="<? echo $agencia; ?>" size="15">
      </font></strong></td>
      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="conta" type="text" id="conta2" value="<? echo $conta; ?>" size="15"></td>
      <td background="../../imagens/fundocelulas2.png"><strong><font color="#0000FF">
        <select class='class02' name="tipo_conta" id="bco_operacao">
          <?


    $sql = "select * from tipos_contas order by tipo_conta asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['tipo_conta']."</option>";
    }
?>
        </select>
      </font></strong></td>
      <td background="../../imagens/fundocelulas2.png"><strong><font color="#0000FF">
        <select class='class02' name="bco_quitacao" id="banco_pagto">
          <option selected><? echo $banco_pagto; ?></option>
          <?


    $sql = "select * from bancos order by banco asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['banco']."</option>";
    }
?>
        </select>
      </font></strong></td>
    </tr>
    <tr> 
      <td colspan="4" background="../../imagens/fundocelulas1.png"><div align="center"><strong>Refer&ecirc;ncias</strong></div></td>
    </tr>
    <tr> 
      <td width="17%" background="../../imagens/fundocelulas1.png"><strong>Nome</strong></td>
      <td width="34%" background="../../imagens/fundocelulas1.png"><strong>Telefone</strong></td>
      <td width="15%" background="../../imagens/fundocelulas1.png"><strong>Grau de relacionamento</strong></td>
      <td width="34%" background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    
    <tr>
      <td background="../../imagens/fundocelulas1.png"><input class='class02' name="nome_ref1" type="text" id="nome_ref1" size="50"></td>
      <td background="../../imagens/fundocelulas1.png"><input class='class02' type="text" name="fone_ref1" id="fone_ref1"></td>
      <td background="../../imagens/fundocelulas1.png"><strong><font color="#0000FF">
        <select class='class02' name="grau_relacionamento1" id="grau_relacionamento1">
          <option selected>Selecione o relacionamento</option>
          <?


    $sql = "select * from grau_relacionamento order by relacionamento asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['relacionamento']."</option>";
    }
?>
        </select>
      </font></strong></td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr> 
      <td background="../../imagens/fundocelulas1.png"><strong>Nome</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Telefone</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Grau de relacionamento</strong></td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><input class='class02' name="nome_ref2" type="text" id="nome_ref2" size="50"></td>
      <td background="../../imagens/fundocelulas1.png"><input class='class02' type="text" name="fone_ref2" id="fone_ref2"></td>
      <td background="../../imagens/fundocelulas1.png"><strong><font color="#0000FF">
        <select class='class02' name="grau_relacionamento2" id="grau_relacionamento2">
          <option selected>Selecione o relacionamento</option>
          <?


    $sql = "select * from grau_relacionamento order by relacionamento asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['relacionamento']."</option>";
    }
?>
        </select>
      </font></strong></td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4" background="../../imagens/fundocelulas2.png"><div align="center"><strong>Dados profissionais</strong></div></td>
    </tr>
    <tr>
      <td colspan="4" background="../../imagens/fundocelulas2.png"><div align="center">
        <TABLE class=corpo border=0 cellSpacing=0 cellPadding=2 width="100%" 
x:str>
          <COLGROUP>
          <COL style="WIDTH: 53pt" class=xl42 width=71>
          <COL style="WIDTH: 48pt" class=xl42 span=2 width=64>
          <COL style="WIDTH: 64pt" class=xl42 width=85>
          <COL style="WIDTH: 80pt" class=xl42 width=106>
          <COL style="WIDTH: 53pt" class=xl42 width=71>
          <COL style="WIDTH: 48pt" class=xl42 span=3 width=64>
          <COL style="WIDTH: 52pt" class=xl42 width=69>
          <TBODY>
            <TR height=17>
              <TD width=82 height=28 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Empresa:</FONT></B></TD>
              <TD width=154 background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                <input class="class02" name="empresa" type="text" id="empresa">
              </font></TD>
              <TD width=170 height=28 background="../../imagens/fundocelulas1.png"><div align="left"><B><FONT color=#008000 size=1 
            face=Verdana>Porte:</FONT></B></div></TD>
              <TD width=157 background="../../imagens/fundocelulas1.png"><font size="2">
                <select class="class02" name="porte_empresa" id="porte_empresa">
                  <option selected><? echo $porte_empresa; ?></option>
                  <?





    $sql = "select * from porte_empresas order by porte_empresa asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option value=" .$x['porte_empresa']. ">".$x['porte_empresa']."</option>";

    }

?>
                </select>
              </font></TD>
              <TD width=150 background="../../imagens/fundocelulas1.png" class=pocospazio><div align="left"><B><FONT color=#008000 size=1 
            face=Verdana>Tempo de servi&ccedil;o:</FONT></B></div></TD>
              <TD width="309" height=28 background="../../imagens/fundocelulas1.png"><DIV align=left class="style2"><b><font color="#008000" face="Verdana">anos</font></b>
                      <input class="class02" name="data_admissao" type="text" id="data_admissao" size="10" maxlength="10">
                      <b><font color="#008000" face="Verdana">meses</font></b>
                      <input class="class02" name="meses" type="text" id="meses" size="10" maxlength="10">
              </DIV></TD>
            </TR>
            <TR height=17>
              <TD height=28 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>In&iacute;cio atividade:</FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                <input class="class02" name="inicio_atividade" type="text" id="inicio_atividade">
              </font></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png"><div align="left"><B><FONT color=#008000 size=1 
            face=Verdana>Endere&ccedil;o:</FONT></B></div></TD>
              <TD height="28" colspan="3" background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="end_empresa" type="text" id="end_empresa" size="50" maxlength="50">
                </font><span class="style2"><B><FONT color=#008000 
            face=Verdana>N &ordm;:</FONT></B></span> <font size="2">
                <input class="class02" name="numero_empresa" type="text" id="numero_empresa" size="10" maxlength="10">
              </font></TD>
            </TR>
            <TR height=17>
              <TD height=28 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Complemento:</FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                <input class="class02" name="complemento_empresa" type="text" id="complemento_empresa">
              </font></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Bairro:</FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="bairro_empresa" type="text" id="bairro_empresa">
              </font></TD>
              <TD background="../../imagens/fundocelulas1.png" class=pocospazio><B><FONT color=#008000 size=1 face=Verdana>CEP: </FONT></B></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="cep_empresa" type="text" id="cep_empresa">
              </font></TD>
            </TR>
            <TR height=17>
              <TD height=28 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Cidade:</FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                <input class="class02" name="cidade_empresa" type="text" id="cidade_empresa">
              </font></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 face=Verdana>UF: </FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png"><font size="2">
                <select class="class02" name="estado_empresa" id="estado_empresa">
                  <option selected><? echo $estado_cli; ?></option>
                  <?





    $sql = "select * from estados_do_brasil order by estado asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option value=" .$x['estado']. ">".$x['estado']."</option>";

    }

?>
                </select>
              </font></TD>
              <TD background="../../imagens/fundocelulas1.png" class=pocospazio><B><FONT color=#008000 size=1 face=Verdana>Telefone: </FONT></B></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="ddd_tel_empresa" type="text" id="ddd_tel_empresa" size="4" maxlength="2">
                -
                <input class="class02" name="telefone_empresa" type="text" id="telefone_empresa" size="10" maxlength="9">
              </font></TD>
            </TR>
            <TR height=17>
              <TD height=28 background="../../imagens/fundocelulas1.png" class=corpo style2 style3><B><FONT color=#008000 size=1 face=Verdana>CPT:</FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png" class=corpo><input type="text" name="cpt" id="cpt"></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png"><span class="corpo style2 style3">Serie:</span></TD>
              <TD background="../../imagens/fundocelulas1.png"><input type="text" name="serie" id="serie"></TD>
              <TD background="../../imagens/fundocelulas1.png"><b><font color=#008000 size=1 face=Verdana>Natureza opera&ccedil;&atilde;o:</font></b></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png"><font size="2">
                <select class="class02" name="natureza_operacao" id="natureza_operacao">
                  <option>Funcion&aacute;rio P&uacute;blico</option>
                  <option>Aut&ocirc;nomo</option>
                  <option>Profissional Liberal</option>
                  <option selected>Empresa Privada - CLT</option>
                  <option>Empresa P&uacute;blica</option>
                  <option>Propriet&aacute;rio-S&oacute;cio-Rendas</option>
                  <option>Aposentado-Pensionista</option>
                  <option>Do lar-Estudante</option>
                </select>
              </font></TD>
            </TR>
            <TR height=17>
              <TD height=28 background="../../imagens/fundocelulas1.png" class=corpo><b><font color=#008000 size=1 
            face=Verdana>Cargo:</font></b></TD>
              <TD background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                <input class="class02" name="cargo" type="text" id="cargo">
              </font></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png"><b><font color=#008000 size=1 
            face=Verdana>Sal&aacute;rio:</font></b></TD>
              <TD background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="salario" type="text" id="salario">
              </font></TD>
              <TD background="../../imagens/fundocelulas1.png" class=pocospazio><b><font color=#008000 size=1 face=Verdana>Atividade principal: </font></b></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="atividade_principal" type="text" id="atividade_principal">
              </font></TD>
            </TR>
            <TR height=17>
              <TD height=28 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>CNPJ:</FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                <input class="class02" name="cnpj" type="text" id="cnpj">
              </font></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 face=Verdana>Telefone contador: </FONT></B></TD>
              <TD colspan="2" background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="ddd_tel_contador" type="text" id="ddd_tel_contador" size="4" maxlength="2">
                -
                <input class="class02" name="tel_contador" type="text" id="tel_contador" size="10" maxlength="9">
              </font></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png">&nbsp;</TD>
            </TR>
          </TBODY>
        </TABLE>
      </div></td>
    </tr>
    <tr>
      <td colspan="4" background="../../imagens/fundocelulas2.png"><div align="center"><STRONG><FONT 
      face="Verdana, Arial, Helvetica, sans-serif">Dados da opera&ccedil;&atilde;o (Ve&iacute;culo)</FONT></STRONG></div></td>
    </tr>
    <tr>
      <td colspan="4" background="../../imagens/fundocelulas2.png"><div align="center">
        <TABLE class=corpo border=0 cellSpacing=0 cellPadding=2 width=100% x:str>
          <COLGROUP>
          <COL style="WIDTH: 53pt" class=xl42 width=71>
          <COL style="WIDTH: 48pt" class=xl42 span=2 width=64>
          <COL style="WIDTH: 64pt" class=xl42 width=85>
          <COL style="WIDTH: 80pt" class=xl42 width=106>
          <COL style="WIDTH: 53pt" class=xl42 width=71>
          <COL style="WIDTH: 48pt" class=xl42 span=3 width=64>
          <COL style="WIDTH: 52pt" class=xl42 width=69>
          <TBODY>
            <TR height=17>
              <TD width=132 height=19 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Tipo de </FONT><FONT color=#008000 size=1 
            face=Verdana> Ve&iacute;culo:</FONT></B></TD>
              <TD width=132 height=19 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Chassi:</FONT></B></TD>
              <TD width=145 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Marca e ve&iacute;culo:</FONT></B></TD>
              <TD width=145 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Ano/modelo:</FONT></B></TD>
            </TR>
            <TR height=17>
              <TD width=132 height=26 background="../../imagens/fundocelulas1.png" class=corpo><font size="2"><strong><font color="#0000FF"><? echo $bem; ?></font><font size="2"><strong><font color="#0000FF">
                <input name="bem" type="hidden" id="bem" value="<? echo $bem; ?>">
              </font></strong></font></strong></font></TD>
              <TD width=132 height=26 background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="chassi" type="text" id="chassi">
              </font></TD>
              <TD width=145 background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="veiculo" type="text" id="veiculo" value="Digitar igual no CRV">
              </font></TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff background="../../imagens/fundocelulas1.png"><P><font size="2">
                  <input class="class02" name="ano_modelo" type="text" id="ano_modelo" size="6" maxlength="4">
                -
                <input class="class02" name="modelo" type="text" id="modelo" size="6" maxlength="4">
              </font></P></TD>
            </TR>
            <TR height=17>
              <TD height=26 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Renavam:</FONT></B></TD>
              <TD height=26 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>N&ordm; de portas:</FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Combust&iacute;vel:</FONT></B></TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Placas:</FONT></B></TD>
            </TR>
            <TR height=17>
              <TD height=26 background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                <input class="class02" name="renavam" type="text" id="renavam">
              </font></TD>
              <TD height=26 background="../../imagens/fundocelulas1.png"><font size="2">
                <select class="class02" name="num_portas" id="num_portas">
                  <option>2</option>
                  <option>4</option>
                </select>
              </font></TD>
              <TD background="../../imagens/fundocelulas1.png"><font size="2">
                <select class="class02" name="combustivel" id="combustivel">
                  <option>Alcool</option>
                  <option>Bi-Combustivel</option>
                  <option>Biodiesel</option>
                  <option>Diesel</option>
                  <option>Flex</option>
                  <option>G&aacute;s Natural</option>
                  <option>Gasolina</option>
                  <option>Querosene</option>
                </select>
              </font></TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="placa" type="text" id="placa">
              </font></TD>
            </TR>
            <TR height=17>
              <TD height=26 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Valor venda:</FONT></B></TD>
              <TD height=26 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Valor de entrada:</FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Tarifa de cadastro:</FONT></B></TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Valor a financiar:</FONT></B></TD>
            </TR>
            <TR height=17>
              <TD height=26 background="../../imagens/fundocelulas1.png" class=corpo><font size="2"><strong><font color="#0000FF"><strong><font color="#0000FF"><? echo $valor_venda; ?></font></strong>
                        <input name="valor_venda" type="hidden" id="valor_venda" value="<? echo $valor_venda; ?>">
              </font></strong></font></TD>
              <TD height=26 background="../../imagens/fundocelulas1.png"><font size="2"><font color="#0000FF"><strong><font color="#0000FF"><? echo $valor_entrada; ?></font>
                        <input name="valor_entrada" type="hidden" id="valor_entrada" value="<? echo $valor_entrada; ?>">
              </strong></font></font></TD>
              <TD background="../../imagens/fundocelulas1.png"><font size="2"><strong><font color="#0000FF"><? echo $tac; ?></font></strong>
                    <input name="tarifa_cadastro" type="hidden" id="tarifa_cadastro2" value="<? echo $tac; ?>">
              </font></TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff background="../../imagens/fundocelulas1.png"><font size="2"><font color="#0000FF"><strong><font color="#0000FF">
                <? $financiar = bcadd($diferenca,$tac,2);

	  echo $financiar;

	   ?>
                </font>
                        <input name="valor_financiar" type="hidden" id="valor_financiar" value="<? $financiar = bcadd($diferenca,$tac,2);

	  echo $financiar;

	   ?>">
              </strong></font></font></TD>
            </TR>
            <TR height=17>
              <TD height=26 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Codigo da tabela:</FONT></B></TD>
              <TD height=26 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Coeficiente:</FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Servi&ccedil;os de terceiros:</FONT></B></TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Valor liberado:</FONT></B></TD>
            </TR>
            <TR height=17>
              <TD height=26 background="../../imagens/fundocelulas1.png" class=corpo><font size="2"><strong><font color="#0000FF"><? echo $codigo_tabela; ?></font></strong>
                    <input name="codigo_tabela" type="hidden" id="codigo_tabela2" value="<? echo $codigo_tabela; ?>">
                    <b><font color="#008000" size="1" face="Verdana">Mista</font></b> <strong><font color="#0000FF"><? echo $mista; ?></font></strong>
                    <input name="mista" type="hidden" id="codigo_tabela6" value="<? echo $mista; ?>">
              </font></TD>
              <TD height=26 background="../../imagens/fundocelulas1.png"><font size="2"><font color="#0000FF"><strong><font color="#0000FF"><? echo $coeficiente; ?></font>
                        <input name="coeficiente" type="hidden" id="coeficiente" value="<? echo $coeficiente; ?>">
              </strong></font></font></TD>
              <TD background="../../imagens/fundocelulas1.png"><font size="2"><strong><font color="#0000FF"><? echo $r_2; ?> </font></strong>
                    <input name="r" type="hidden" id="r" value="<? echo $r_2; ?>">
              </font></TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff background="../../imagens/fundocelulas1.png"><font size="2"><font color="#0000FF"><strong>
                <input name="valor_liberado" type="text" id="valor_liberado" value="<? echo "0.00"; ?>">
              </strong></font></font></TD>
            </TR>
            <TR height=17>
              <TD height=26 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>N&ordm; de parcelas:</FONT></B></TD>
              <TD height=26 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Valor das parcelas:</FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Car&ecirc;ncia:</FONT></B></TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Pagto de servi&ccedil;os de terceiros:</FONT></B></TD>
            </TR>
            <TR height=17>
              <TD height=26 background="../../imagens/fundocelulas1.png" class=corpo><font size="2"><strong><font color="#0000FF"><? echo $num_parcelas; ?></font></strong>
                    <input name="num_parcelas" type="hidden" id="num_parcelas" value="<? echo $num_parcelas; ?>">
              </font></TD>
              <TD height=26 background="../../imagens/fundocelulas1.png"><font size="2"><font color="#0000FF"><strong><font color="#0000FF">
                <? $prestacao = bcmul($financiar,$coeficiente,2);

	  echo $prestacao;

	   ?>
                </font></strong></font></font> <font size="2">
                <input name="valor_parcelas" type="hidden" id="valor_parcelas" value="<? $prestacao = bcmul($financiar,$coeficiente,2);

	   echo $prestacao; ?>">
              </font></TD>
              <TD background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="trinta" type="checkbox" id="trinta" value="30 DD">
                <B><FONT color=#008000 size=1 
            face=Verdana>30 DD</FONT></B>
                <input class="class02" name="quarenta_cinco" type="checkbox" id="quarenta_cinco" value="45 DD">
                <B><FONT color=#008000 size=1 
            face=Verdana>45 DD</FONT></B></font></TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff background="../../imagens/fundocelulas1.png"><font size="2"><strong><font color="#0000FF">
                <? $serv_terceiros = $diferenca*$r;
				$servicosdeterceiros = bcadd($serv_terceiros,0,2);
				echo "R$ $servicosdeterceiros";
				 ?>
                <input name="pagto_serv_terc" type="hidden" id="pagto_serv_terc" value="<? echo $servicosdeterceiros; ?>">
              </font></strong></font></TD>
            </TR>
          </TBODY>
        </TABLE>
      </div></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><div align="center"></div></td>
      <td background="../../imagens/fundocelulas1.png"><p align="center">&nbsp;</p></td>
      <td background="../../imagens/fundocelulas1.png"><div align="center"></div></td>
      <td background="../../imagens/fundocelulas1.png"><div align="center"></div></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
      <td colspan="2" background="../../imagens/fundocelulas1.png"><div align="center"><strong>Observa&ccedil;&otilde;es</strong></div></td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
      <td colspan="2" background="../../imagens/fundocelulas1.png"><div align="center">
        <textarea class='class02' name="obs" cols="50" rows="7" id="obs"><? echo $obs_cli; ?></textarea>
      </div></td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4" background="../../imagens/fundocelulas2.png"><div align="center"><strong>Termo de Responsabilidade</strong></div></td>
    </tr>
    <tr>
      <td colspan="4" background="../../imagens/fundocelulas2.png"><DIV>
        <div align="center">
  <?

echo $termo;
?>
  <input name="termo" type="hidden" id="termo" value="<? echo $termo;  ?>">
          </div>
      </DIV></td>
    </tr>
    <tr>
      <td colspan="4" background="../../imagens/fundocelulas2.png"><div align="center"><strong><? echo "Eu, $nome CPF $cpf_op $termo_de_responsabilidade";  ?>
          <input name="termo_de_responsabilidade" type="hidden" id="termo_de_responsabilidade" value="<? echo $termo_de_responsabilidade;  ?>">
      </strong></div></td>
    </tr>
    <tr>
      <td colspan="4" background="../../imagens/fundocelulas2.png"><div align="center"><strong><font color="#0000FF">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input name="operador" type="hidden" id="operador3" value="<? echo $nome_op; ?>">
        <input name="cel_operador" type="hidden" id="cel_operador" value="<? echo $celular; ?>">
        <input name="email_operador" type="hidden" id="email_operador" value="<? echo $email; ?>">
        <input name="estabelecimento" type="hidden" id="estabelecimento" value="<? echo $estabelecimento; ?>">
        <input name="cidade_estabelecimento" type="hidden" id="cidade_estabelecimento" value="<? echo $cidade_estabelecimento; ?>">
        <input name="tel_estabelecimento" type="hidden" id="tel_estabelecimento" value="<? echo $tel_estabelecimento; ?>">
        <input name="email_estabelecimento" type="hidden" id="email_estabelecimento" value="<? echo $email_estabelecimento; ?>">
        <input name="operador_alterou" type="hidden" id="operador_alterou">
        <input name="cel_operador_alterou" type="hidden" id="cel_operador_alterou">
        <input name="email_operador_alterou" type="hidden" id="email_operador_alterou">
        <input name="estabelecimento_alterou" type="hidden" id="estabelecimento_alterou">
        <input name="cidade_estabelecimento_alterou" type="hidden" id="cidade_estabelecimento_alterou">
        <input name="tel_estabelecimento_alterou" type="hidden" id="tel_estabelecimento_alterou">
        <input name="email_estabelecimento_alterou" type="hidden" id="email_estabelecimento_alterou">
        <input name="recebido" type="hidden" id="recebido" value="<? echo Não; ?>">
        <input name="resposta1" type="hidden" id="resposta1" value="N&atilde;o">
        <input name="resposta2" type="hidden" id="resposta2" value="N&atilde;o">
        <input name="resposta3" type="hidden" id="resposta3" value="N&atilde;o">
      </font></strong>
          <input name="parc1" type="hidden" class='class02' id="parc1" value="">
          <input name="banco1" type="hidden" class='class02' id="banco1" value="">
          <input name="vencto1" type="hidden" class='class02' id="vencto1" value="">
          <input name="compra1" type="hidden" class='class02' id="compra1" value="">
          <input class='class01' type="submit" name="Submit" value="Salvar">
      </div></td>
    </tr>
  </table>
</form>
<form name="form1" method="post" action="">
  <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="2" background="../../imagens/fundocelulas1.png"><strong>Ol&aacute;! Seja bem vindo<br>
      </strong><strong><font color="#0000FF"><? echo $nome_op; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="35%" background="../../imagens/fundocelulas1.png"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>
              <? echo $email; ?> </font><font color="#0000FF"> </font></strong></td>
      <td width="20%" background="../../imagens/fundocelulas1.png"><strong>Celular:<font color="#0000FF"><br>
              <? echo $celular; ?> </font><font color="#0000FF"> </font></strong></td>
    </tr>
    <tr>
      <td width="18%" background="../../imagens/fundocelulas1.png"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>
          <strong><font color="#0000FF"><? echo $estabelecimento; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="26%" background="../../imagens/fundocelulas1.png"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>
              <? echo $tel_estabelecimento; ?> </font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>
              <? echo $email_estabelecimento; ?> </font><font color="#0000FF"> </font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Cidade: <br>
            <font color="#0000FF"><? echo $cidade_estabelecimento; ?> </font></strong></td>
    </tr>
  </table>
</form>
</body>
</html>
