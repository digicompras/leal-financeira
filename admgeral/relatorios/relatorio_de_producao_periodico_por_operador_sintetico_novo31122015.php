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

<title>RELATORIO DE PRODU&Ccedil;&Atilde;O SINTETICO</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

.style4 {font-size: 18px}

.style5 {font-size: 24px}

.style7 {

	font-size: 9px;

	font-weight: bold;

}

.style8 {font-size: 9px}

.style17 {font-size: 18px; font-weight: bold; }
.style18 {font-weight: bold}
.style19 {font-size: 10px}
.style20 {
	font-size: 16px;
	font-weight: bold;
}

-->

</style>
</head>

<?



require '../../conect/conect.php';



$mes_ano = $_POST['mes_ano'];



$dia = date('d');

$mes = date('m');

$ano = date('Y');

$hora = date('H:i:s');



$dia_inicial = $_POST['dia_inicial'];

$mes_inicial = $_POST['mes_inicial'];

$ano_inicial = $_POST['ano_inicial'];



$dia_final = $_POST['dia_final'];

$mes_final = $_POST['mes_final'];

$ano_final = $_POST['ano_final'];





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

  

<? } ?>











      <p>

        <?

$sql = "SELECT * FROM fundo_intermediaria";

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {



$cor = $linha[1];	

?>

<? } ?>

</p>

      <form name="form1" method="post" action="informe_operador_para_gerar_relatorio_mensal.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input type="submit" name="Submit" value="Voltar">     

</form>

      <table width="100%"  border="0">

        <tr>

          <td width="26%"><span class="style4"><strong>Valor bruto de opera&ccedil;&atilde;o</strong></span></td>

          <td width="23%"><span class="style4"><strong><span class="style5"><strong><strong>

            <?

$sql = "select sum(valor_total) as total from propostas where dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_bruto = $linha['total'];

$valortotalbruto = bcadd($valor_total_bruto,0,2);

echo "R$ ".$valortotalbruto;

?>

</strong></strong></span></strong></span></td>

          <td width="28%"><span class="style4"><strong>Total de contratos efetivados</strong></span></td>

          <td width="23%"><span class="style4"><strong><span class="style5"><strong>

            <?

$sql = "select * from propostas where dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE'";

$resultado=mysql_query($sql);

$registros_total = mysql_num_rows($resultado);



echo $registros_total;

?>

          </strong></span></strong></span></td>
        </tr>

        <tr>

          <td><span class="style17">Comiss&atilde;o da Empresa </span></td>

          <td><span class="style4"><strong><span class="style5"><strong><strong>

            <?

$sql = "select sum(valor_a_receber) as total from propostas where dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_comissao_empresa = $linha['total'];

$valortotalcomissaoempresa = bcadd($valor_total_comissao_empresa,0,2);

echo "R$ ".$valortotalcomissaoempresa;

?>

</strong></strong></span></strong></span></td>

          <td><div align="left"><strong>Montante de parcelas</strong></div></td>
          <td><div align="left"><strong>
          <?




echo "$dia_inicial-$mes_inicial-$ano_inicial at&eacute; $dia_final-$mes_final-$ano_final";

?>
          <?

if($campanha_filtro=="selecione"){

$sql = "select sum(parcela) as total from propostas where nome_operador = '$nome_operador' and dataproposta = '$dataproposta' order by nome asc";

}

else{

$sql = "select sum(parcela) as total from propostas where nome_operador = '$nome_operador' and dataproposta = '$dataproposta' order by nome asc";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];



//echo "R$ ".$valor_total;

?>
          </strong></div></td>
        </tr>
      </table>

<p class="style4">&nbsp;</p>

      <table width="100%"  border="1">

        <tr bgcolor="#ffffff">

          <td><div align="center" class="style7">Nome</div></td>

          <td><div align="center" class="style8"><strong>FLEX 1 </strong></div></td>

          <td><div align="center" class="style8"><strong>FLEX 2 </strong></div></td>

          <td><div align="center" class="style8"><strong>FLEX 3 </strong></div></td>

          <td><div align="center" class="style8"><strong>FLEX 4</strong></div></td>

          <td><div align="center" class="style7">FLEX 5</div></td>
          <td><div align="center" class="style7"><span class="style8"><strong>TOP NORMAL</strong></span></div></td>
          <td><div align="center" class="style8"><strong>Total Pontos</strong></div></td>
          <td><div align="center" class="style8"><strong>Total</strong></div></td>
          <td><div align="center"><strong>Comiss&atilde;o Empresa</strong></div></td>
        </tr>

            <?

	

$sql = "SELECT * FROM operadores where funcao <> 'Psic�loga Organizacional' and funcao <> 'Secretaria' and funcao <> 'Assistente' and funcao <> 'Operador de Privado' and status = 'Ativo' order by nome asc";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$nome_operador = $linha[1];

$meta = $linha[55];



?>            

        <tr>

          <td width="10%" align="center" valign="top">

            <form action="relatorio_de_producao_periodico_por_operador_novo.php" method="post" name="form2">

              <input name="nome_operador" type="hidden" id="nome_operador" value="<? echo $nome_operador; ?>">

              <input name="campanha" type="hidden" id="campanha" value="selecione">

              <input name="dia_inicial" type="hidden" id="dia_inicial" value="<? echo $dia_inicial; ?>">

              <input name="mes_inicial" type="hidden" id="mes_inicial" value="<? echo $mes_inicial; ?>">

              <input name="ano_inicial" type="hidden" id="dia_inicial3" value="<? echo $ano_inicial; ?>">

              <input name="dia_final" type="hidden" id="dia_inicial4" value="<? echo $dia_final; ?>">

              <input name="mes_final" type="hidden" id="dia_final" value="<? echo $mes_final; ?>">

              <input name="ano_final" type="hidden" id="ano_final" value="<? echo $ano_final; ?>">

              <input type="submit" name="Submit2" value="<? echo $nome_operador; ?>">
            </form>         </td>

          <td width="4%"><div align="center" class="style19">

            <?

$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' and tabela = 'FLEX 1'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_flex1 = $linha['total'];

$valortotalflex1 = bcadd($valor_total_flex1,0,2);

echo "R$ ".$valortotalflex1;

?></div></td>

        <td width="4%"><div align="center" class="style19">

            <?

$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' and tabela = 'FLEX 2'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_flex2 = $linha['total'];

$valortotalflex2 = bcadd($valor_total_flex2,0,2);

echo "R$ ".$valortotalflex2;

?></div></td>

<td width="4%"><div align="center" class="style19">

            <?

$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' and tabela = 'FLEX 3'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_flex3 = $linha['total'];

$valortotalflex3 = bcadd($valor_total_flex3,0,2);

echo "R$ ".$valortotalflex3;

?></div></td>

          <td width="5%"><div align="center" class="style19"><span class="style8">
            <?

$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' and tabela = 'FLEX 4'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_flex4 = $linha['total'];

$valortotalflex4 = bcadd($valor_total_flex4,0,2);

echo "R$ ".$valortotalflex4;

?>
          </span></div></td>

          <td width="5%"><div align="center" class="style8">
            <?

$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' and tabela = 'FLEX 5'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_flex5 = $linha['total'];

$valortotalflex5 = bcadd($valor_total_flex5,0,2);

echo "R$ ".$valortotalflex5;

?></div></td>
          <td width="5%"><div align="center" class="style8"><span class="style19">
          <?

$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' and tabela = 'TOP NORMAL'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_top_normal = $linha['total'];

$valortotaltopnormal = bcadd($valor_total_top_normal,0,2);

echo "R$ ".$valortotaltopnormal;

?>
          </span></div></td>
          <td width="8%"><div align="center"><strong>
            <span class="style20">
            <?

$sql = "select sum(meta) as total_meta from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_meta = $linha['total_meta'];


//echo $valor_total_meta."%";

?>
            </span></strong>
              <span class="style20">
            <?
$sql = "select sum(meta) as total from propostas_veiculos where operador_atendente = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' order by num_proposta desc";

$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_meta_veiculos = $linha['total'];

//echo "$total_meta_veiculos%";


$meta_atingida = bcadd($total_meta_veiculos,$valor_total_meta,4);

echo "$meta_atingida";

?></span></div></td>
          <td width="8%"><div align="center" class="style8 style18"><strong>

            <?

$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];

$total_geral_da_producao = $valor_total_0+$valor_total_1+$valor_total_2+$valor_total_3+$valor_total_4+$valor_total_5+$valor_total_6+$valor_total_7+$valor_total_8+$valor_total_9+$valor_total_10+$valor_total;

$totalgeraldaproducao = bcadd($total_geral_da_producao,0,2);

echo "R$ ".$totalgeraldaproducao;

?>

          </strong></div></td>
          <td width="8%"><div align="center"><strong><strong>
          <?

$sql = "select sum(valor_a_receber) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];

$valortotal_comissao_empresa = bcadd($valor_total,0,2);

echo "R$ ".$valortotal_comissao_empresa;

?>
          </strong></strong></div></td>
        </tr>

<? } ?>
</table>

<p align="center">

<?

$sql = "SELECT * FROM allcred limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$nfantasia = $linha[2];

$endereco = $linha[5];

$numero = $linha[6];

$bairro = $linha[7];

$cep = $linha[9];

$cidade = $linha[10];

$estado = $linha[11];

$telefone = $linha[12];

$fax = $linha[13];

$email_empresa = $linha[14];

$site = $linha[15];



}



?>

<br>

<span class="style4"><strong><? echo $site; ?></strong></span>

<br>

<? echo $endereco; ?>

,

<? echo $numero; ?> - <? echo $bairro; ?> - <? echo $cidade; ?> - <? echo $estado; ?> - <? echo $cep; ?>

<br>

<? echo "Telefone / Fax: ". $telefone." "; ?>

/ <? echo $fax; ?>

<br>

<? echo "E-Mail: ". $email_empresa; ?>

</p>

<p align="center"><span class="style7">

  <? echo $meta_inss; ?>

</span><span class="style4"><strong><span class="style5"><strong>

</strong></span></strong></span> </p>

</body>

</html>

