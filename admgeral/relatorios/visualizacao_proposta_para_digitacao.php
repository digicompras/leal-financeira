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
<title>TELA DE IMPRESS&Atilde;O DE PROPOSTAS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
body,td,th {
	font-size: 10px;
}
</style>
</head>
</head>
<?

require '../../conect/conect.php';

?>

<?

$digitacao = $_POST['digitacao'];
$num_proposta = $_POST['num_proposta'];


$dia = date('d');
$mes = date('m');
$ano = date('Y');

$datadigitacao = "$dia-$mes-$ano";
$horadigitacao = date('H:i:s');


if(empty($digitacao)){
}
else{
$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`propostas` set `digitacao` = '$digitacao',`datadigitacao` = '$datadigitacao',`horadigitacao` = '$horadigitacao' where `propostas`. `num_proposta` = '$num_proposta' limit 1 ";
}

mysql_query($comando,$conexao);

}

?>


<?
$sql = "SELECT * FROM fundo_navegacao";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg++;
?>


<body bgcolor="#<? printf("$linha[1]"); ?>" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <?
if($reg==1){
echo "</tr><tr>";
$reg=0;
}
?>
  
<? } ?>

<?

$sql = "SELECT * FROM logo";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

//printf("<a href='index.php' target='_top'><img src='../../imagens/$linha[1]' border='0'  width='$linha[2]' height='$linha[3]'></a>"); ?>


          <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>

          <? } ?>



<form name="form1" method="post" action="propostas_a_digitar.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit3" value="FILA DE ESPERA DE PROPOSTAS A DIGITAR">
</form>
<?
$num_proposta = $_POST['num_proposta'];

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM propostas where num_proposta = '$num_proposta'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {

$num_proposta = $linha[0];

$nome_operador = $linha[1];

$tipo = $linha[2];

$estabelecimento_proposta = $linha[3];

$nome = $linha[4];

$sexo = $linha[5];

$estadocivil = $linha[6];

$cpf = $linha[7];

$rg = $linha[8];

$orgao = $linha[9];

$emissao = $linha[10];

$data_nasc = $linha[11];

$pai = $linha[12];

$mae = $linha[13];

$endereco = $linha[14];

$numero = $linha[15];

$bairro = $linha[16];

$complemento = $linha[17];

$cidade = $linha[18];

$estado = $linha[19];

$cep = $linha[20];

$telefone = $linha[21];

$celular = $linha[22];

$email = $linha[23];

$num_beneficio = $linha[24];

$num_beneficio2 = $linha[80];

$num_beneficio3 = $linha[81];

$num_beneficio4 = $linha[82];

$valor_credito = $linha[25];

$quant_parc = $linha[26];

$parcela = $linha[27];

$banco_pagto = $linha[28];

$num_banco = $linha[29];

$agencia = $linha[30];

$conta = $linha[31];

$operador = $linha[32];

$cel_operador = $linha[33];

$email_operador = $linha[34];

$estabelecimento = $linha[35];

$cidade_estabelecimento = $linha[36];

$tel_estabelecimento = $linha[37];

$email_estabelecimento = $linha[38];

$obs = $linha[39];

$dataproposta = $linha[40];

$horaproposta = $linha[41];

$dataalteracao = $linha[42];

$horaalteracao = $linha[43];

$operador_alterou = $linha[44];

$cel_operador_alterou = $linha[45];

$email_operador_alterou = $linha[46];

$estabelecimento_alterou = $linha[47];

$cidade_estabelecimento_alterou = $linha[48];

$tel_estabelecimento_alterou = $linha[49];

$email_estabelecimento_alterou = $linha[50];

$status = $linha[51];



$parc = $linha[52];

$banco = $linha[53];

$vencto = $linha[54];

$compra = $linha[55];



$parc = $linha[52];

$banco = $linha[53];

$vencto = $linha[54];

$compra = $linha[55];



$parc1 = $linha[52];

$banco1 = $linha[53];

$vencto1 = $linha[54];

$compra1 = $linha[55];



$parc2 = $linha[56];

$banco2 = $linha[57];

$vencto2 = $linha[58];

$compra2 = $linha[59];



$parc3 = $linha[60];

$banco3 = $linha[61];

$vencto3 = $linha[62];

$compra3 = $linha[63];



$parc4 = $linha[64];

$banco4 = $linha[65];

$vencto4 = $linha[66];

$compra4 = $linha[67];



$parc5 = $linha[68];

$banco5 = $linha[69];

$vencto5 = $linha[70];

$compra5 = $linha[71];



$parc6 = $linha[72];

$banco6 = $linha[73];

$vencto6 = $linha[74];

$compra6 = $linha[75];



$parc7 = $linha[76];

$banco7 = $linha[77];

$vencto7 = $linha[78];

$compra7 = $linha[79];

$tipo_proposta = $linha[83];

$bco_operacao = $linha[86];

$valor_liberado = $linha[97];

$obs2 = $linha[102];

$tabela = $linha[109];

$valor_total = $linha[113];

$valor_liquido_cliente = $linha[115];

$status_fisico = $linha[120];

$num_bordero = $linha[121];

$termo_de_responsabilidade = $linha[149];

$termo = $linha[150];

$data_proposta = $linha[152];

$prazo_final = $linha[153];

$tipo_conta = $linha[159];

$resposta = $linha[160];

$bco_quitacao = $linha[161];
$nome_ref1 = $linha[162];
$fone_ref1 = $linha[163];
$grau_relacionamento1 = $linha[164];
$nome_ref2 = $linha[165];
$fone_ref2 = $linha[166];
$grau_relacionamento2 = $linha[167];
$resposta1 = $linha[168];
$resposta2 = $linha[169];
$resposta3 = $linha[170];

$pagto_beneficio = $linha[176];

}

?>


<?

$sql = "SELECT * FROM clientes where cpf = '$cpf' limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$matricula = $linha[0];
$naturalidade = $linha[115];


}


?>



<?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$operador_alterou = $linha[1];
$cel_operador_alterou = $linha[19];
$email_operador_alterou = $linha[20];
$estabelecimento_alterou = $linha[24];
$cidade_estabelecimento_alterou = $linha[25];
$tel_estabelecimento_alterou = $linha[26];
$email_estabelecimento_alterou = $linha[27];

?>
<? } ?>
<form name="form1" method="post" action="">
  <table width="100%" border="1">
    <tr>
      <td colspan="2"><div align="center"><strong><font color="#000000" size="2"> IMPRESS&Atilde;O DE PROPOSTA N&ordm; <? echo $num_proposta; ?></font></strong></div>
        <div align="right"></div></td>
      <td><div align="center"><strong>BORDER&Ocirc;</strong></div></td>
      <td><div align="left"><strong><font color="#0000FF"><? echo $num_bordero; ?></font></strong></div></td>
      <td><div align="center"><strong><font size="5"><font color="#000000" size="2">MATRICULA </font><font color="#0000FF"><? echo $matricula; ?></font></font></strong></div></td>
    </tr>
    <tr>
      <td><strong>Status da proposta</strong></td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $status; ?></font></strong></td>
      <td><strong>Status do fisico</strong></td>
      <td><strong><font color="#0000FF"><? echo $status_fisico; ?></font></strong></td>
    </tr>
    <tr>
      <td><strong>Tipo da proposta</strong></td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $tipo_proposta; ?></font></strong></td>
      <td><strong>Data Limite para entrega do f&iacute;sico</strong></td>
      <td><strong><font color="#0000FF"><? echo $prazo_final_formatado; ?></font></strong></td>
    </tr>
    <tr>
      <td><strong>Tabela</strong></td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $tabela; ?> </font></strong></td>
      <td><strong>Data da Proposta </strong></td>
      <td><strong><font color="#0000FF"><? echo $dataproposta; ?></font></strong></td>
    </tr>
    <tr>
      <td><strong>Operador</strong></td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $nome_operador; ?> </font></strong></td>
      <td><strong>Hora proposta</strong></td>
      <td><strong><font color="#0000FF"><? echo $horaproposta; ?></font></strong></td>
    </tr>
    <tr>
      <td><strong>Estabelecimento</strong></td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $estabelecimento_proposta; ?></font></strong></td>
      <td><strong>Perfil do cliente </strong></td>
      <td><strong><font color="#0000FF"><? echo $tipo; ?></font></strong></td>
    </tr>
    <tr>
      <td><strong>Nome</strong></td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $nome; ?></font></strong></td>
      <td><strong>CPF</strong></td>
      <td><strong><font color="#0000FF"><? echo $cpf; ?></font></strong></td>
    </tr>
    <tr>
      <td><strong>N&ordm; Benef&iacute;cio </strong></td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $num_beneficio; ?></font></strong></td>
      <td><strong>N&ordm; Benef&iacute;cio 2 </strong></td>
      <td><strong><font color="#0000FF"><? echo $num_beneficio2; ?></font></strong></td>
    </tr>
    <tr>
      <td><strong>N&ordm; Benef&iacute;cio 3 </strong></td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $num_beneficio3; ?></font></strong></td>
      <td><strong>N&ordm; Benef&iacute;cio 4 </strong></td>
      <td><strong><font color="#0000FF"><? echo $num_beneficio4; ?></font></strong></td>
    </tr>
    <tr>
      <td><strong>Data Nasc</strong></td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $data_nasc; ?></font></strong></td>
      <td><strong>RG</strong></td>
      <td><strong><font color="#0000FF"><? echo $rg; ?></font></strong></td>
    </tr>
    <tr>
      <td width="14%"><strong>&Oacute;rg&atilde;o</strong></td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $orgao; ?></font></strong></td>
      <td width="18%"><strong>Emiss&atilde;o</strong></td>
      <td width="33%"><strong></font><font color="#0000FF"><? echo $emissao; ?></font></strong></td>
    </tr>
    <tr>
      <td><strong>Pai</strong></td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $pai; ?></font></strong></td>
      <td><strong>M&atilde;e</strong></td>
      <td><strong><font color="#0000FF"><? echo $mae; ?></font></strong></td>
    </tr>
    <tr>
      <td><strong>Endere&ccedil;o</strong></td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $endereco; ?></font></strong></td>
      <td><strong>N&uacute;mero</strong></td>
      <td><strong><font color="#0000FF"><? echo $numero; ?></font></strong></td>
    </tr>
    <tr>
      <td><strong>Bairro</strong></td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $bairro; ?></font></strong></td>
      <td><strong>Complemento</strong></td>
      <td><strong><font color="#0000FF"><? echo $complemento; ?></font></strong></td>
    </tr>
    <tr>
      <td><strong>Cidade</strong></td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $cidade; ?></font></strong></td>
      <td><strong>Estado</strong></td>
      <td><strong><font color="#0000FF"><? echo $estado; ?></font></strong></td>
    </tr>
    <tr>
      <td><strong>Cep</strong></td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $cep; ?></font></strong></td>
      <td><strong>Sexo</strong></td>
      <td><strong><font color="#0000FF"><? echo $sexo; ?></font></strong></td>
    </tr>
    <tr>
      <td><strong>Estado Civil </strong></td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $estadocivil; ?></font></strong></td>
      <td><strong>Telefone</strong></td>
      <td><strong><font color="#0000FF"><? echo $telefone; ?></font></strong></td>
    </tr>
    <tr>
      <td><strong>Como Conheceu a Empresa</strong></td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $resposta; ?></font></strong></td>
      <td><strong>Naturalidade</strong></td>
      <td><strong><font color="#0000FF"><? echo $naturalidade; ?></font></strong></td>
    </tr>
    <tr>
      <td><strong>Celular</strong></td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $celular; ?></font></strong></td>
      <td><strong>E-Mail</strong></td>
      <td><strong><font color="#0000FF"><? echo $email; ?></font></strong></td>
    </tr>
    <tr>
      <td><strong>Valor bruto da opera&ccedil;&atilde;o </strong></td>
      <td colspan="2"><strong><font color="#0000FF"><font color="#0000FF"><? echo "R$ ".$valor_total; ?></font></font></strong></td>
      <td><strong>Valor Lid cliente </strong></td>
      <td><strong><font color="#0000FF"><? echo "R$ ". $valor_liquido_cliente; ?></font></strong></td>
    </tr>
    <tr>
      <td><strong>Banco Opera&ccedil;&atilde;o </strong></td>
      <td colspan="2"><strong><font color="#000000"><? echo $bco_operacao; ?></font></strong></td>
      <td><strong>Banco a ser Portado</strong></td>
      <td><strong><font color="#000000"><? echo $bco_quitacao; ?></font></strong></td>
    </tr>
    <tr>
      <td><strong>Quant de parcelas </strong></td>
      <td colspan="2"><strong><font color="#0000FF"><font color="#0000FF"><? echo $quant_parc; ?></font></font></strong></td>
      <td><strong>Valor parcela </strong></td>
      <td><strong><font color="#0000FF"><? echo $parcela; ?></font></strong></td>
    </tr>
    <tr>
      <td><strong>Banco Pgto </strong></td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $banco_pagto; ?></font></strong></td>
      <td><strong>N&ordm; Banco </strong></td>
      <td><strong><font color="#0000FF"><? echo $num_banco; ?></font></strong></td>
    </tr>
    <tr>
      <td><strong>Ag&ecirc;ncia</strong></td>
      <td width="23%"><strong><font color="#0000FF"><? echo $agencia; ?></font></strong></td>
      <td width="12%"><div align="left"><strong>N&ordm; Conta <font color="#0000FF"><? echo $conta; ?><? echo " - $tipo_conta"; ?></font></strong></div></td>
      <td><strong>Tipo de pagto do Benef&iacute;cio</strong></td>
      <td><strong><font color="#0000FF"><? echo $pagto_beneficio; ?></font></strong></td>
    </tr>
    <tr>
      <td colspan="3"><strong>Refer&ecirc;ncias</strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Nome</strong></td>
      <td colspan="4"><strong><font color="#000000"><? echo $nome_ref1; ?> Telefone <? echo $fone_ref1; ?> Grau de relacionamento <? echo $grau_relacionamento1; ?></font></strong></td>
    </tr>
    <tr>
      <td><strong>Nome</strong></td>
      <td colspan="4"><strong><font color="#000000"><? echo $nome_ref2; ?> Telefone <? echo $fone_ref2; ?> Grau de relacionamento <? echo $grau_relacionamento2; ?></font></strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><strong>
        <? 

$sql = "SELECT * FROM perguntas_de_proposta where num_pergunta = '1' and status_pergunta = 'Ativa' limit 1";
$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {


$pergunta1 = $linha[2];

}


 ?>
        <? echo $pergunta1; ?></strong></td>
      <td><strong><? echo $resposta1; ?></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><strong>
        <? 

$sql = "SELECT * FROM perguntas_de_proposta where num_pergunta = '2' and status_pergunta = 'Ativa' limit 1";
$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {


$pergunta2 = $linha[2];

}


 ?>
        <? echo $pergunta2; ?></strong></td>
      <td><strong><? echo $resposta2; ?></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><strong>
        <? 

$sql = "SELECT * FROM perguntas_de_proposta where num_pergunta = '3' and status_pergunta = 'Ativa' limit 1";
$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {


$pergunta3 = $linha[2];

}


 ?>
        <? echo $pergunta3; ?></strong></td>
      <td><strong><? echo $resposta3; ?></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"><strong>Valor Parcela </strong></div></td>
      <td colspan="2"><div align="center"><strong>Banco</strong></div></td>
      <td><div align="center"><strong>Vencimento do contrato </strong></div></td>
      <td><div align="center"><strong>Previs&atilde;o de compra em </strong></div></td>
    </tr>
    <tr>
      <td><div align="center"> <strong><font color="#0000FF"><? echo $parc1; ?></font></strong></div></td>
      <td colspan="2"><div align="center"><strong><font color="#0000FF"><? echo $banco1; ?></font></strong></div></td>
      <td><div align="center"> <strong><font color="#0000FF"><? echo $vencto1; ?></font></strong></div></td>
      <td><div align="center"><strong><font color="#0000FF"><? echo $compra1; ?></font></strong></div></td>
    </tr>
    <tr>
      <td><strong>Obs</strong></td>
      <td colspan="3"><strong><font color="#0000FF"><? echo $obs; ?></font></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Parecer de Cr&eacute;dito</strong></td>
      <td colspan="3"><strong><font color="#0000FF"><? echo $obs2; ?></font></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Parecer Fisico</strong></td>
      <td colspan="4"><strong>
        <?  
$sql = "SELECT * FROM historico_fisico where num_proposta = '$num_proposta' order by codigo desc limit 1";
$res = mysql_query($sql);
$reg = 0;
//echo "<tr>";
while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];
$num_proposta = $linha[1];
$obs_fisico = $linha[2];
$data = $linha[3];
$hora = $linha[7];
$operador_informante = $linha[8];
$estabelecimento = $linha[9];


echo "$data - "." $hora - "." $obs_fisico ";


if($reg==1){
//echo "</tr>";
$reg=0;
}


}
	  
?>
      </strong></td>
    </tr>
    <tr>
      <td colspan="5"><strong>Termo de Responsabilidade</strong></td>
    </tr>
    <tr>
      <td colspan="5"><strong><font color="#0000FF"><? echo $termo; ?></font></strong></td>
    </tr>
    <tr>
      <td colspan="5"><strong><? echo "Eu, $nome_operador CPF $cpf_op $termo_de_responsabilidade";  ?></strong></td>
    </tr>
  </table>
</form>
</body>
</html>
strong> </div></td>

    </tr>

    <tr>

      <td><div align="center">

        <strong><font color="#0000FF"><? echo $parc6; ?></font></strong> </div></td>

      <td colspan="2"><div align="center">

        <strong><font color="#0000FF"><? echo $banco6; ?></font></strong> </div></td>

      <td><div align="center">

        <strong><font color="#0000FF"><? echo $vencto6; ?></font></strong> </div></td>

      <td><div align="center">

        <strong><font color="#0000FF"><? echo $compra6; ?></font></strong> </div></td>

    </tr>

    <tr>

      <td><div align="center">

        <strong><font color="#0000FF"><? echo $parc7; ?></font></strong> </div></td>

      <td colspan="2"><div align="center">

        <strong><font color="#0000FF"><? echo $banco7; ?></font></strong> </div></td>

      <td><div align="center">

        <strong><font color="#0000FF"><? echo $vencto7; ?></font></strong> </div></td>

      <td><div align="center">

        <strong><font color="#0000FF"><? echo $compra7; ?></font></strong> </div></td>

    </tr>

    <tr>

      <td>Obs</td>

      <td colspan="3"><strong><font color="#0000FF"><? echo $obs; ?></font></strong></td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td>Parecer de Cr&eacute;dito</td>

      <td colspan="3"><strong><font color="#0000FF"><? echo $obs2; ?></font></strong></td>

      <td>&nbsp;</td>

    </tr>

  </table>

</form>

</body>

</html>

