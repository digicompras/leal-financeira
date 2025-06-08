<?php
session_start(); //inicia sessão...
if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
else //se não for...
header("Location: alerta.php");

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

ini_set('default_charset','UTF8_general_mysql500_ci');

?>
<html>
<head>
<title>LEAL FINANCEIRA</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style3 {
	font-size: 14;
	font-weight: bold;
}
.style4 {font-size: 14}
.style6 {font-size: 12}
-->
</style>
</head>

<?
//require("conexao.php"); or die("erro na requisição");
require '../../conect/conect.php';
?>

<?

$dia = date('d');
$mes = date('m');
$ano = date('Y');
$date = date('Y-m-d');

?>


<body bgcolor="#ffffff">
  <span class="style4">

<?

	  $num_proposta = $_POST['num_proposta'];
	  
	  $sql = "SELECT * FROM propostas where num_proposta = '$num_proposta'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

	$dataproposta = $linha[40];
	$diaproposta = $linha[106];
	$mesproposta = $linha[107];
	$anoproposta = $linha[108];
	
}
	  
$cpf = $_POST['cpf'];


$sql = "SELECT * FROM clientes where cpf = '$cpf'";
$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {

$codigo_cli = $linha[0];
$nome_cli = $linha[1];
$sexo_cli = $linha[2];
$estadocivil_cli = $linha[3];
$cpf_cli = $linha[4];
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

$celular2_cli = $linha[140];
$conjuge = $linha[143];
$cpfconjuge = $linha[144];

}
?>



<?

$sql = "SELECT * FROM procuracao limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$termo = $linha[1];
$a1 = $linha[2];
$a2 = $linha[3];
$b = $linha[4];
}


?>
<?
$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$razaosocial = $linha[1];
$nfantasia = $linha[2];
$cnpj = $linha[3];
$inscr_est = $linha[4];
$endereco = $linha[5];
$numero = $linha[6];
$bairro = $linha[7];
$complemento = $linha[8];
$cep = $linha[9];
$cidade = $linha[10];
$estado = $linha[11];
$email_empresa = $linha[14];
$site_empresa = $linha[15];

}
?>
<?
$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$nome_op = $linha[1];
$celular_op = $linha[19];
$email_op = $linha[20];
$estabelecimento_op = $linha[24];
$cidade_estabelecimento_op = $linha[25];
$tel_estabelecimento_op = $linha[26];
$email_estabelecimento_op = $linha[27];
$estab_pertence_op = $linha[44];
$cidade_estab_pertence_op = $linha[45];
$tel_estab_pertence_op = $linha[46];
$email_estab_pertence_op = $linha[47];

}
?>
  </span>
<table width="100%"  border="0">
  <tr>
    <td width="42%" rowspan="2" valign="top" class="style4"><div align="center"></div>
    <div align="center"></div></td>
      <td width="19%" align="center" class="style4"><img src="../../logo/logotipo.jpg" alt="Leal Financeira" width="141" height="61" /></td>
      <td width="39%" class="style4">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" class="style4"><strong>PROCURA&Ccedil;&Atilde;O</strong></td>
    <td class="style4">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center" class="style3"><? echo "Referente a proposta Nº $num_proposta"; ?></div></td>
  </tr>
  <tr>
    <td><span class="style6"><strong>OUTORGANTE</strong></span></td>
    <td><span class="style6"></span></td>
    <td><span class="style6"></span></td>
  </tr>
  <tr>
    <td colspan="3"><span class="style6">O(a) outorgante <strong><strong><? echo $nome_cli; ?></strong></strong>,  CPF <strong> <? echo $cpf_cli; ?></strong>e RG.<strong> <? echo $rg_cli; ?></strong>, situado(a) &agrave; rua/av<strong> <strong><? echo $endereco_cli; ?></strong></strong>,<br>
n&uacute;mero <strong><strong><strong><strong><? echo $numero_cli; ?></strong></strong></strong></strong>, complemento <strong><? echo $complemento_cli; ?></strong>bairro<strong><strong><? echo $bairro_cli; ?></strong></strong> CEP <strong><? echo $cep_cli; ?></strong>, na cidade <strong><? echo $cidade_cli; ?> </strong>estado de <strong><? echo $estado_cli; ?></strong>, celular <strong><? echo $celular_cli; ?></strong>, email <strong><? echo $email_cli; ?></strong> devidamente identificado pelo seu nome de contratante. </span></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><strong>OUTORGADO</strong></td>
  </tr>
  <tr>
    <td colspan="3"><p class="style6">    A outorgada <? echo $razaosocial; ?>, CNPJ <? echo $cnpj; ?>, Inscr. Est. : <? echo $inscr_est; ?><br> localizada no endere&ccedil;o <? echo $endereco; ?>  n&ordm; <? echo $numero; ?>, bairro <? echo $bairro; ?>, em <? echo $cidade; ?> estado <br>de <? echo $estado; ?>, doravante chamada pelo nome fantasia <? echo $nfantasia; ?>.</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="center"></div></td>
    <td><span class="style6"></span></td>
  </tr>
  <tr>
    <td colspan="3" align="center"><strong><? echo $termo; ?></strong></td>
  </tr>
  
  
  <tr>
    <td colspan="3"><div align="center" class="style6"></div></td>
  </tr>
  <tr>
    <td colspan="3" class="style6"><strong><? echo $a1; ?></strong></td>
  </tr>
  <?

$objeto = $_POST['objeto'];

$sql = "SELECT * FROM contratos_clausulas_movimentacao where num_contrato = '$num_contrato' order by num_clausula asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$codigoclausula = $linha[0];
$num_contrato = $linha[1];
$cod_contrato = $linha[2];
$objeto = $linha[3];
$num_clausula = $linha[4];
$descricao_clausula = $linha[5];

}


?>
  
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><strong><? echo $a2; ?></strong></td>
  </tr>
  <tr>
    <td colspan="3" align="center"><span class="style6"><strong><? //echo $b; ?></strong></span></td>
  </tr>
  <tr>
    <td colspan="3"><p class="style6">As partes elegem o F&oacute;rum de Franca para dirimirem qualquer d&uacute;vida a respeito da presente procura&ccedil;&atilde;o, dispensando qualquer outro por mais privilegiado que seja. </p>    </td>
  </tr>
  <tr>
    <td><span class="style6"></span></td>
    <td><span class="style6"></span></td>
    <td><span class="style6"></span></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center" class="style6">
      <p align="center">Franca – SP, <? echo $dataproposta; ?></p>
    </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"><strong>OUTORGANTE</strong></div></td>
    <td>&nbsp;</td>
    <td><div align="center"><strong>OUTORGADO</strong></div></td>
  </tr>
  <tr>
    <td><div align="center">
      <div align="center">_________________________________________<br>
           <? echo "$nome_cli"; ?><br><? echo $cpf_cli; ?><br>           
           Assinatura
      
      
      </div> 
      </td>
    <td><div align="center">
      <div align="center">
        
<br>
      <div align="center"></div>
    </div>      <div align="center">
      <div align="center">
        <div align="center"></div>
      </div></td>
    <td><div align="center"><img src="assinatura.jpg" alt="" width="305" height="33"><br>
        <? echo $razaosocial; ?><br> (<? echo $nfantasia; ?>)<br> <? echo $cnpj; ?>
    </div></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
<table width="50%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <th scope="col"><table width="45%" border="0" align="center" cellpadding="0" cellspacing="0" background="../../logo/logotipo_promissoria-.jpg">
        <tbody>
          <tr>
            <th width="10%" bgcolor="#B3B3B3" scope="col">N&ordm; <span class="style3"><? echo " $num_proposta"; ?></span></th>
            <th colspan="3" scope="col">Vencimento____de_________________de_______</th>
            <th width="18%" scope="col">R$</th>
            <th width="21%" bgcolor="#B3B3B3" scope="col">&nbsp;</th>
          </tr>
          <tr>
            <th height="28" colspan="7" align="left" scope="col">Ao(s)__________________________________________________________________________________</th>
          </tr>
          <tr>
            <th height="25" colspan="7" align="left" scope="col">____________________________________pagar___________por esta &uacute;nica via de NOTA PROMISS&Oacute;RIA</th>
          </tr>
          <tr>
            <th height="19" colspan="4" align="left" scope="col">a <span class="style6"><? echo $razaosocial; ?></span></th>
            <th height="19" align="right" scope="col"><span class="style6">CPF/CNPJ:</span></th>
            <th height="19" align="center" scope="col"><span class="style6"><? echo " $cnpj"; ?></span></th>
            <th height="19" align="left" scope="col">&nbsp;</th>
          </tr>
          <tr>
            <th colspan="7" align="left" bgcolor="#B3B3B3" scope="col">Ou a sua ordem, a quantia de _______________________________________________________________________</th>
          </tr>
          <tr>
            <th height="19" colspan="7" align="left" bgcolor="#B3B3B3" scope="col">________________________________________________________________________________________________</th>
          </tr>
          <tr>
            <th colspan="7" align="left" scope="col">em moeda corrente dese pa&iacute;s, pagavel em _______________________________________</th>
          </tr>
          <tr>
            <th height="21" align="left" scope="col">Emitente</th>
            <th colspan="2" align="left" scope="col"><? echo "$nome_cli"; ?></th>
            <th colspan="2" align="right" scope="col">DATA DA EMISS&Atilde;O</th>
            <th colspan="2" align="center" scope="col"><? echo "$diaproposta"; ?>-<? echo "$mesproposta"; ?>-<? echo "$anoproposta"; ?></th>
          </tr>
          <tr>
            <th align="left" scope="col">CPF/CNPJ</th>
            <th colspan="2" align="left" scope="col"><? echo $cpf_cli; ?></th>
            <th colspan="4" align="left" scope="col">&nbsp;</th>
            </tr>
          <tr>
            <th height="19" colspan="7" align="left" scope="col"><strong><strong>Endere&ccedil;o: <? echo $endereco_cli; ?>, <strong><strong><strong><? echo $numero_cli; ?> - <? echo $complemento_cli; ?></strong></strong></strong></strong></strong><strong><strong><? echo $bairro_cli; ?></strong></strong> - <strong><? echo $cidade_cli; ?></strong>-<strong><? echo $estado_cli; ?></strong></th>
            </tr>
          <tr>
            <th scope="col">&nbsp;</th>
            <th width="9%" scope="col">&nbsp;</th>
            <th width="29%" scope="col">ASS. DO EMITENTE:</th>
            <th colspan="4" align="left" scope="col">____________________________________</th>
          </tr>
        </tbody>
      </table></th>
    </tr>
  </tbody>
</table>
</body>
</html>
<?
mysql_close($conexao);
?>