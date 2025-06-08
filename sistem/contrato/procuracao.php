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
  <span class="style4"><?

	  $num_proposta = $_POST['num_proposta'];
	  
	  $sql = "SELECT * FROM propostas where num_proposta = '$num_proposta'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

	$dataproposta = $linha[40];
	$tipo_proposta = $linha[83];
	$diaproposta = $linha[106];
	$mesproposta = $linha[107];
	$anoproposta = $linha[108];
	$valor_total = $linha[113];
	$valor_credito = $linha[25];
	$cpf = $linha[7];
	
}
	  



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
      <td width="19%" align="center" class="style4"><form action="contrato.php" method="post" name="form1" target="_blank" id="form1">
        <input name="num_proposta" type="hidden" id="num_proposta" value="<? echo "$num_proposta"; ?>">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input name="imageField" type="image" id="imageField" src="../../logo/logotipo.jpg" width="141" height="61">
      </form></td>
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
    <td height="135" valign="baseline"><div align="center">
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

<?

if(($tipo_proposta=="PORTABILIDADE") or ($tipo_proposta=="REFIN CONSIGNADO") or ($tipo_proposta=="REFIN_PORTABILIDADE") or ($tipo_proposta=="INTENCAO_PORTABILIDADE") or ($tipo_proposta=="REFIN/COMPRA") or ($tipo_proposta=="REFIN VEICULOS")){

?>
<?
	//Declara&ccedil;&atilde;o de uma vari&aacute;vel com uma data
$dia = date('d');
$mes = date('m');
$ano = date('Y');

$data_limite_envio_proposta_fisica = "$dia-$mes-$ano";



//echo "Data da efetiva&ccedil;&atilde;o da proposta " . $data_limite_envio_proposta_fisica . "<br />";

 
//Separa&ccedil;&atilde;o dos valores (dia, m&ecirc;s e ano)
$arr = explode("-", $data_limite_envio_proposta_fisica);
 
$dialimite = $arr[0];
$meslimite = $arr[1];
$anolimite = $arr[2];


 
//Per&iacute;odo (Qtd. de dias para somar ou subtrair)
$sql = "SELECT * FROM prazo_entrega_fisico limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$periodo = $linha[1];

}
 
//Somar Data
$data_inc = date('d-m-Y', mktime(0, 0, 0, $meslimite, $dialimite + $periodo, $anolimite));



//echo "Data limite para entrega do f&iacute;sico na matriz: " . $data_inc . "<br />";

$data_inc_inversa = date('Y-m-d', mktime(0, 0, 0, $meslimite, $dialimite + $periodo, $anolimite));


$prazo_final = $data_inc_inversa;
	
	$prazo_final2 = explode("-", $data_inc);
 
$diavencto_extenso = $prazo_final2[0];
$mesvencto_extenso = $prazo_final2[1];
$anovencto = $prazo_final2[2];
	
	
	if($diavencto_extenso=="01"){ $diadovencimento = "primeiro";}
	if($diavencto_extenso=="02"){ $diadovencimento = "segundo";}
	if($diavencto_extenso=="03"){ $diadovencimento = "terceiro";}
	if($diavencto_extenso=="04"){ $diadovencimento = "quarto";}
	if($diavencto_extenso=="05"){ $diadovencimento = "quinto";}
	if($diavencto_extenso=="06"){ $diadovencimento = "sexto";}
	if($diavencto_extenso=="07"){ $diadovencimento = "setimo";}
	if($diavencto_extenso=="08"){ $diadovencimento = "oitavo";}
	if($diavencto_extenso=="09"){ $diadovencimento = "nono";}
	if($diavencto_extenso=="10"){ $diadovencimento = "decimo";}
	if($diavencto_extenso=="11"){ $diadovencimento = "decimo primeiro";}
	if($diavencto_extenso=="12"){ $diadovencimento = "decimo segundo";}
	if($diavencto_extenso=="13"){ $diadovencimento = "decimo terceiro";}
	if($diavencto_extenso=="14"){ $diadovencimento = "decimo quarto";}
	if($diavencto_extenso=="15"){ $diadovencimento = "decimo quinto";}
	if($diavencto_extenso=="16"){ $diadovencimento = "decimo sexto";}
	if($diavencto_extenso=="17"){ $diadovencimento = "decimo setimo";}
	if($diavencto_extenso=="18"){ $diadovencimento = "decimo oitavo";}
	if($diavencto_extenso=="19"){ $diadovencimento = "decimo nono";}
	if($diavencto_extenso=="20"){ $diadovencimento = "vigezimo";}
	if($diavencto_extenso=="21"){ $diadovencimento = "vigezimo primeiro";}
	if($diavencto_extenso=="22"){ $diadovencimento = "vigezimo segundo";}
	if($diavencto_extenso=="23"){ $diadovencimento = "vigezimo terceiro";}
	if($diavencto_extenso=="24"){ $diadovencimento = "vigezimo quarto";}
	if($diavencto_extenso=="25"){ $diadovencimento = "vigezimo quinto";}
	if($diavencto_extenso=="26"){ $diadovencimento = "vigezimo sexto";}
	if($diavencto_extenso=="27"){ $diadovencimento = "vigezimo setimo";}
	if($diavencto_extenso=="28"){ $diadovencimento = "vigezimo oitavo";}
	if($diavencto_extenso=="29"){ $diadovencimento = "vigezimo nono";}
	if($diavencto_extenso=="30"){ $diadovencimento = "trigezimo";}
	if($diavencto_extenso=="31"){ $diadovencimento = "trigezimo primeiro";}
	
	if($mesvencto_extenso=="01"){ $mesdovencimento = "janeiro";}
	if($mesvencto_extenso=="02"){ $mesdovencimento = "fevereiro";}
	if($mesvencto_extenso=="03"){ $mesdovencimento = "marco";}
	if($mesvencto_extenso=="04"){ $mesdovencimento = "abril";}
	if($mesvencto_extenso=="05"){ $mesdovencimento = "maio";}
	if($mesvencto_extenso=="06"){ $mesdovencimento = "junho";}
	if($mesvencto_extenso=="07"){ $mesdovencimento = "julho";}
	if($mesvencto_extenso=="08"){ $mesdovencimento = "agosto";}
	if($mesvencto_extenso=="09"){ $mesdovencimento = "setembro";}
	if($mesvencto_extenso=="10"){ $mesdovencimento = "outubro";}
	if($mesvencto_extenso=="11"){ $mesdovencimento = "novembro";}
	if($mesvencto_extenso=="12"){ $mesdovencimento = "dezembro";}
	

	?>
	
<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <th height="211" scope="col"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" background="../../logo/logotipo_promissoria-.jpg">
        <tbody>
          <tr>
            <th width="9%" bgcolor="#B3B3B3" scope="col">N&ordm; <span class="style3"><? echo " $num_proposta"; ?></span></th>
            <th colspan="3" scope="col">Vencimento <? echo " $diavencto_extenso "; ?> de  <? echo " $mesvencto_extenso "; ?> de <? echo " $anovencto "; ?></th>
            <th width="16%" scope="col">R$</th>
            <th width="19%" bgcolor="#B3B3B3" scope="col"><span class="style4"><? echo "$valor_total"; ?></span></th>
          </tr>
          <tr>
            <th height="28" colspan="7" align="left" scope="col">Ao(s)<? echo " $diadovencimento dia(s) do mes de $mesdovencimento de $anovencto "; ?>pagarei por esta &uacute;nica via de NOTA PROMISS&Oacute;RIA,</th>
          </tr>
          <tr>
            <th height="19" colspan="4" align="left" scope="col">a <span class="style6"><? echo "$razaosocial ($nfantasia) "; ?></span></th>
            <th height="19" align="right" scope="col"><span class="style6">CPF/CNPJ:</span></th>
            <th height="19" align="center" scope="col"><span class="style6"><? echo " $cnpj"; ?></span></th>
            <th width="17%" height="19" align="left" scope="col">&nbsp;</th>
          </tr>
          <tr>
            <th colspan="7" align="left" bgcolor="#B3B3B3" scope="col">Ou a sua ordem, a quantia de <strong>
              <? 
//inicio valor por extenso pespontador

if($valor_total<>""){

function extenso($valor_total = 0, $maiusculas = false) {

$singular = array("centavo", "real", "mil", "milh&atilde;o", "bilh&atilde;o", "trilh&atilde;o", "quatrilh&atilde;o");
$plural = array("centavos", "reais", "mil", "milh&otilde;es", "bilh&otilde;es", "trilh&otilde;es",
"quatrilh&otilde;es");

$c = array("", "cem", "duzentos", "trezentos", "quatrocentos",
"quinhentos", "seiscentos", "setecentos", "oitocentos", "novecentos");
$d = array("", "dez", "vinte", "trinta", "quarenta", "cinquenta",
"sessenta", "setenta", "oitenta", "noventa");
$d10 = array("dez", "onze", "doze", "treze", "quatorze", "quinze",
"dezesseis", "dezesete", "dezoito", "dezenove");
$u = array("", "um", "dois", "tr&ecirc;s", "quatro", "cinco", "seis",
"sete", "oito", "nove");

$z = 0;
$rt = "";

$valor_total = number_format($valor_total, 2, ".", ".");
$inteiro = explode(".", $valor_total);
for($i=0;$i<count($inteiro);$i++)
for($ii=strlen($inteiro[$i]);$ii<3;$ii++)
$inteiro[$i] = "0".$inteiro[$i];

$fim = count($inteiro) - ($inteiro[count($inteiro)-1] > 0 ? 1 : 2);
for ($i=0;$i<count($inteiro);$i++) {
$valor_total = $inteiro[$i];
$rc = (($valor_total > 100) && ($valor_total < 200)) ? "cento" : $c[$valor_total[0]];
$rd = ($valor_total[1] < 2) ? "" : $d[$valor_total[1]];
$ru = ($valor_total > 0) ? (($valor_total[1] == 1) ? $d10[$valor_total[2]] : $u[$valor_total[2]]) : "";

$r = $rc.(($rc && ($rd || $ru)) ? " e " : "").$rd.(($rd &&
$ru) ? " e " : "").$ru;
$t = count($inteiro)-1-$i;
$r .= $r ? " ".($valor_total > 1 ? $plural[$t] : $singular[$t]) : "";
if ($valor_total == "000")$z++; elseif ($z > 0) $z--;
if (($t==1) && ($z>0) && ($inteiro[0] > 0)) $r .= (($z>1) ? " de " : "").$plural[$t];
if ($r) $rt = $rt . ((($i > 0) && ($i <= $fim) &&
($inteiro[0] > 0) && ($z < 1)) ? ( ($i < $fim) ? ", " : " e ") : " ") . $r;
}

if(!$maiusculas){
return($rt ? $rt : "zero");
} else {

if ($rt) $rt=ereg_replace(" E "," e ",ucwords($rt));
return (($rt) ? ($rt) : "Zero");
}

}

$valor_total = $valor_total;
$dim = extenso($valor_total);
$dim = ereg_replace(" E "," e ",ucwords($dim));

$valor_total = number_format($valor_total, 2, ",", ".");

echo "$dim";

}
//fim valor por extenso
				
 ?>
				

              </strong></th>
          </tr>
          <tr>
            <th colspan="7" align="left" scope="col">em moeda corrente dese pa&iacute;s, pagavel em Franca-SP</th>
          </tr>
          <tr>
            <th height="28" align="left" scope="col">Emitente</th>
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
            <th height="31" scope="col">&nbsp;</th>
            <th width="5%" scope="col">&nbsp;</th>
            <th width="33%" valign="bottom" scope="col">ASS. DO EMITENTE:</th>
            <th colspan="4" align="left" valign="bottom" scope="col">____________________________________</th>
          </tr>
        </tbody>
      </table></th>
    </tr>
  </tbody>
</table>
	<? } ?>
</body>
</html>
<?
mysql_close($conexao);
?>