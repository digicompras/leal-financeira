<?php
session_start(); //inicia sess�o...
if ($_SESSION["usuario"] == true) //verifica se a vari�vel "usuario" � verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a vari�vel "senha" � verdadeira...
echo ""; //se for emite mensagem positiva.
else //se n�o for...
header("Location: alerta.php");

?>
<html>
<head>
<title>LISTANDO TODAS AS PROPOSTAS PAGAS DO PERIODO</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style4 {font-size: 9px}
-->
</style>
</head>
<?

require '../../../conect/conect.php';





$sql = "SELECT * FROM fundo_navegacao";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
?>


<body bgcolor="#<? printf("$linha[1]"); ?>" 
  
<? } ?>
<?
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>

background="background/<? printf("$linha[1]"); ?>" bgproperties="fixed">
  
      <p>
        <? } ?>
      </p>
      <form name="form1" method="post" action="../index.php">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <input type="submit" name="Submit3" value="Voltar">
      </form>
      <p>&nbsp;</p>
<p>
        <?
$sql = "SELECT * FROM fundo_intermediaria";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$cor = $linha[1];	
?>
<? } ?>
</p>
<? echo "Relat�rio gerado no per�odo de $dia_inicial-$mes_inicial-$ano_inicial at� $dia_final-$mes_final-$ano_final"; ?>
<br>
      <br>
      <table width="100%"  border="0">
        <tr bgcolor="#<? echo "008080"; ?>">
          <td><div align="center" class="style4">N&ordm; da Proposta </div></td>
          <td><div align="center" class="style4">Cliente</div></td>
          <td><div align="center" class="style4">Data Proposta</div></td>
          <td><div align="center" class="style4">Alterar Status </div></td>
          <td><div align="center" class="style4">Imprimir</div></td>
          <td><div align="center" class="style4">Valor  Cr&eacute;dito</div></td>
          <td width="5%"><div align="center" class="style4">Quant parcelas </div></td>
          <td width="6%"><div align="center" class="style4">Valor parcelas </div></td>
          <td><div align="center" class="style4">Titulo Proposta</div></td>
          <td><div align="center" class="style4">Status</div></td>
          <td><div align="center" class="style4">Operador</div></td>
        </tr>
        <?
$dia_inicial = $_POST['dia_inicial'];

$mes_inicial = $_POST['mes_inicial'];

$ano_inicial = $_POST['ano_inicial'];



$dia_final = $_POST['dia_final'];

$mes_final = $_POST['mes_final'];

$ano_final = $_POST['ano_final'];


$datainicial = "$ano_inicial-$mes_inicial-$dia_inicial";
$datafinal = "$ano_final-$mes_final-$dia_final";



$sql = "SELECT * FROM propostas_veiculos where data_proposta between '$datainicial'and '$datafinal' order by data_proposta,horaproposta asc";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$num_proposta = $linha[0];

$dataproposta = $linha[1];

$horaproposta = $linha[2];

$mes_ano = $linha[3];

$estabelecimento_proposta = $linha[4];

$operador_atendente = $linha[5];

$status = $linha[6];

$tipo = $linha[7];

$tipo_proposta = $linha[8];

$nome = $linha[9];

$tipo_pessoa = $linha[10];

$data_nasc = $linha[11];

$cpf = $linha[12];

$rg = $linha[13];

$orgao = $linha[14];

$emissao = $linha[15];

$sexo = $linha[16];

$estadocivil = $linha[17];

$nacionalidade = $linha[18];

$quant_dependente = $linha[19];

$pai = $linha[20];

$mae = $linha[21];

$conjuge = $linha[22];

$data_nasc_conjuge = $linha[23];

$endereco = $linha[24];

$numero = $linha[25];

$bairro = $linha[26];

$complemento = $linha[27];

$cidade = $linha[28];

$estado = $linha[29];

$cep = $linha[30];

$correspondencia = $linha[31];

$tipo_residencia = $linha[32];

$valor_aluguel = $linha[33];

$tempo_residencia = $linha[34];

$telefone = $linha[35];

$celular = $linha[36];

$tipo_telefone = $linha[37];

$residencia_anterior = $linha[38];

$bairro_anterior = $linha[39];

$cidade_anterior = $linha[40];

$estado_anterior = $linha[41];

$tempo_residencia_anterior = $linha[42];

$email = $linha[43];

$empresa = $linha[44];

$porte_empresa = $linha[45];

$data_admissao = $linha[46];

$inicio_atividade = $linha[47];

$end_empresa = $linha[48];

$numero_empresa = $linha[49];

$complemento_empresa = $linha[50];

$bairro_empresa = $linha[51];

$cep_empresa = $linha[52];

$cidade_empresa = $linha[53];

$estado_empresa = $linha[54];

$telefone_empresa = $linha[55];

$cpt = $linha[56];

$serie = $linha[57];

$cargo = $linha[58];

$natureza_operacao = $linha[59];

$salario = $linha[60];

$atividade_principal = $linha[61];

$data_constituicao = $linha[62];

$cnpj = $linha[63];

$inscr_est = $linha[64];

$capital_social = $linha[65];

$atividade_anterior = $linha[66];

$data_admissao_anterior = $linha[67];

$data_saida = $linha[68];

$cargo_anterior = $linha[69];

$telefone_empresa_anterior = $linha[70];

$outras_rendas = $linha[71];

$ref_pessoal = $linha[72];

$tel_ref_pessoal = $linha[73];

$ref_pessoal2 = $linha[74];

$tel_ref_pessoal2 = $linha[75];

$ref_comercial = $linha[76];

$tel_ref_comercial = $linha[77];

$ref_banco = $linha[78];

$ref_agencia = $linha[79];

$ref_conta = $linha[80];

$ref_tipo_conta = $linha[81];

$ref_conta_desde = $linha[82];

$cartao_credito = $linha[83];

$automovel = $linha[84];

$valor_automoveis = $linha[85];

$residencia = $linha[86];

$valor_residencia = $linha[87];

$outras_propriedades = $linha[88];

$valor_outras_propriedades = $linha[89];

$veiculo = $linha[90];

$ano_modelo = $linha[91];

$renavam = $linha[92];

$num_portas = $linha[93];

$combustivel = $linha[94];

$placa = $linha[95];

$valor_venda = $linha[96];

$valor_entrada = $linha[97];

$tarifa_cadastro = $linha[98];

$valor_financiar = $linha[99];

$coeficiente = $linha[100];

$codigo_tabela = $linha[101];

$num_parcelas = $linha[102];

$valor_parcelas = $linha[103];

$vencto_1_parcela = $linha[104];

$r = $linha[105];

$valor_liberado = $linha[106];

$pagto_serv_terc = $linha[107];

$obs = $linha[108];

$operador = $linha[109];

$cel_operador = $linha[110];

$email_operador = $linha[111];

$estab_pertence = $linha[112];

$cidade_estab_pertence = $linha[113];

$tel_estab_pertence = $linha[114];

$email_estab_pertence = $linha[115];

$operador_alterou = $linha[116];

$operador = $linha[117];

$cel_operador_alterou = $linha[118];

$email_operador_alterou = $linha[119];

$estab_alterou = $linha[120];

$cidade_estab_alterou = $linha[121];

$tel_estab_alterou = $linha[122];

$email_estab_alterou = $linha[123];

$dataalteracao = $linha[124];

$horaalteracao = $linha[125];

$recebido = $linha[126];

$comissao_op = $linha[127];

$meses = $linha[128];

$parecer_credito = $linha[145];

$titulo_proposta = $linha[150];



?>
        <tr>
          <td width="6%"><form name="form2" method="post" action="editar_proposta.php">
              <div align="center" class="style4"> 
                <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
                <input name="num_proposta" type="hidden" id="num_proposta4" value="<? echo $linha[0]; ?>">
                <? // printf("<a href='editar_proposta.php?chamar=$linha[0]' >$linha[0]</a>"); ?>
                <? printf("$linha[0]"); ?><strong><font color="#0000FF">
                <input name="dataalteracao" type="hidden" id="dataalteracao" value="<? echo date('d/m/Y'); ?>">
                <input name="horaalteracao" type="hidden" id="horaalteracao2" value="<? echo date('H:i:s'); ?>">
                </font></strong></div>
          </form></td>
          <td width="19%"><div align="center" class="style4"><? echo $nome;?></div></td>
          <td width="8%"><div align="center" class="style4"><? echo $dataproposta;?><? echo " - $horaproposta";?></div></td>
          <td width="7%"><form action="../altera_status.php" method="post" name="form2" class="style4">
              <div align="center"> 
                <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
                <input name="num_proposta" type="hidden" id="num_proposta4" value="<? echo $linha[0]; ?>">
                <input type="submit" name="Submit322" value="Alterar Status">
               </div>
          </form></td>
          <td width="7%"><form action="../imprimir_proposta.php" method="post" name="form2" target="_blank" class="style4">
              <div align="center"> 
                <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
                <input name="num_proposta" type="hidden" id="num_proposta6" value="<? echo $linha[0]; ?>">
                <input type="submit" name="Submit323" value="Imprimir">
                <strong><font color="#0000FF">
                <input name="dataalteracao" type="hidden" id="dataalteracao3" value="<? echo date('d/m/Y'); ?>">
                <input name="horaalteracao" type="hidden" id="horaalteracao3" value="<? echo date('H:i:s'); ?>">
                </font></strong>  </div>
          </form></td>
          <td width="7%"><div align="center" class="style4"><? echo "R$ ".$valor_financiar;?></div></td>
          <td><div align="center" class="style4"><? echo $num_parcelas;?></div></td>
          <td><div align="center" class="style4"><? echo "R$ ".$valor_parcelas;?></div></td>
          <td width="9%"><div align="center" class="style4"><? echo $titulo_proposta;?></div></td>
          <td width="11%"><div align="center" class="style4"><? echo $status;?></div></td>
          <td width="15%"><div align="center" class="style4"><? echo $operador_atendente;?></div></td>
          <?

if($reg==1){

echo "</tr>";

$reg=0;

}

?>
          <? } ?>
</table>
<p>&nbsp;</p>



</body>
</html>
