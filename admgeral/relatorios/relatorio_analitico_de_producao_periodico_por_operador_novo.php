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

<title>LISTANDO TODAS AS PROPOSTAS PAGAS DO OPERADOR</title>

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



require '../../conect/conect.php';


$sql = "select * from status_para_calculos where codigo = '$codigo'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$status_de_calculos = $linha[1];

}


	  

$nome_operador = $_POST['nome_operador'];

$mes_ano = $_POST['mes_ano'];

$campanha_filtro = $_POST['campanha'];





$dia_inicial = $_POST['dia_inicial'];

$mes_inicial = $_POST['mes_inicial'];

$ano_inicial = $_POST['ano_inicial'];



$dia_final = $_POST['dia_final'];

$mes_final = $_POST['mes_final'];

$ano_final = $_POST['ano_final'];

$datainicial = "$ano_inicial-$mes_inicial-$dia_inicial";
$datafinal = "$ano_final-$mes_final-$dia_final";


$sql = "SELECT * FROM fundo_intermediaria";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$cor = $linha[1];
}
?>





<body bgcolor="#<? echo "$cor"; ?>">

 <p>

       
</p>

      <form name="form1" method="post" action="relatorio_de_producao_periodico_por_operador_sintetico_novo.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <span class="style7 style13">

        <input name="dia_inicial" type="hidden" id="dia_inicial" value="<? echo $dia_inicial; ?>">

        <input name="mes_inicial" type="hidden" id="mes_inicial" value="<? echo $mes_inicial; ?>">

        <input name="ano_inicial" type="hidden" id="dia_inicial3" value="<? echo $ano_inicial; ?>">

        <input name="dia_final" type="hidden" id="dia_inicial4" value="<? echo $dia_final; ?>">

        <input name="mes_final" type="hidden" id="dia_final" value="<? echo $mes_final; ?>">

        <input name="ano_final" type="hidden" id="ano_final" value="<? echo $ano_final; ?>">

        </span>        

        <input class='class01' type="submit" name="Submit2" value="Voltar ao sint&eacute;tico">

</form>

      <table width="100%"  border="0">

        <tr>

          <td colspan="9"><div align="left"><span class="style2">

            <?

$nome_operador = $_POST['nome_operador'];

			

$sql = "SELECT * FROM propostas where nome_operador = '$nome_operador' limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$nome_operador = $linha[1];







?>

          Listando todas as propostas do operador:</span> <span class="style2"><? echo $nome_operador; ?>

          <? } ?>

          </span></div></td>
        </tr>

        <tr>

          <td colspan="9">&nbsp;</td>
        </tr>

        <tr>
          <td width="5%">&nbsp;</td>
          <td width="27%"><div align="center">Somat&oacute;ria da Meta</div></td>
          <td width="5%"><div align="center"></div></td>
          <td width="2%">&nbsp;</td>
          <td width="25%"><div align="center">Somat&oacute;ria de Pontos</div></td>
          <td width="2%"><div align="center"></div></td>
          <td width="6%"><div align="center"></div></td>
          <td width="25%"><div align="center">Premia&ccedil;&otilde;es</div></td>
          <td width="3%"><div align="center"></div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><div align="center">Produ&ccedil;&atilde;o Consignado<span class="style6"><span class="style61">
            <?
if($campanha_filtro=="selecione"){
$sql = "select sum(valor_liquido_cliente) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and tipo_proposta <> 'REFIN_PORTABILIDADE' or 'INTENCAO_PORTABILIDADE' order by nome asc";
}
else{
$sql = "select sum(valor_liquido_cliente) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos'  and tabela = '$campanha_filtro' and tipo_proposta <> 'REFIN_PORTABILIDADE' or 'INTENCAO_PORTABILIDADE' order by nome asc";
}
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_valor_liquido_cliente = bcadd(0,$linha['total'],2);

echo " R$ ".$total_valor_liquido_cliente;

?>
          </span></span></div></td>
          <td><div align="center"></div></td>
          <td>&nbsp;</td>
          <td><div align="center">Contratos<strong>
            <?
$sql = "select sum(meta) as total from propostas_veiculos where operador_atendente = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' order by num_proposta desc";

$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_meta_veiculos = $linha['total'];

			
			
if($campanha_filtro=="selecione"){
$sql = "select sum(meta) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' order by nome asc";
}
else{
$sql = "select sum(meta) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and tabela = '$campanha_filtro' order by nome asc";
}
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_meta_consignado = $linha['total'];

$meta_atingida = bcadd($total_meta_veiculos,$total_meta_consignado,4);



echo " $meta_atingida";
?>
          </strong></div></td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td><div align="center">Premia&ccedil;&atilde;o Promotor<span class="style61"><strong><strong>
            <?
$sql = "select sum(comissao_op) as total from propostas_veiculos where operador_atendente = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' order by num_proposta desc";

$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_comissao_veiculos = $linha['total'];

			
			
			
if($campanha_filtro=="selecione"){
$sql = "select sum(comissao_op) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' order by nome asc";
}
else{
$sql = "select sum(comissao_op) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and tabela = '$campanha_filtro' order by nome asc";
}
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_comissao_consignado = $linha['total'];


$valor_total = bcadd($total_comissao_veiculos,$total_comissao_consignado,2);


echo " R$ ".$valor_total;
?>
          </strong></strong></span></div></td>
          <td><div align="center"></div></td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td><div align="center">+</div></td>
          <td><div align="center"></div></td>
          <td>&nbsp;</td>
          <td><div align="center">+</div></td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td><div align="center">Comiss&atilde;o Empresa <strong><span class="style8">
            <?
$sql = "select sum(valor_a_receber) as total from propostas_veiculos where operador_atendente = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' order by num_proposta desc";

$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_valor_a_receber_veiculos = $linha['total'];

?>
          </span>
                <?

if($campanha_filtro=="selecione"){

$sql = "select sum(valor_a_receber) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' order by nome asc";

}

else{

$sql = "select sum(valor_a_receber) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and tabela = '$campanha_filtro' order by nome asc";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$total_valor_a_receber_consignado = $linha['total'];


$totalizacao_veiculos_mais_consignado = bcadd($total_valor_a_receber_veiculos,$total_valor_a_receber_consignado,2);

echo " R$ $totalizacao_veiculos_mais_consignado";

?>
          </strong></div></td>
          <td><div align="center"></div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><div align="center">Produ&ccedil;&atilde;o REFIN_PORTABILIDADE<span class="style61">
            <?
if($campanha_filtro=="selecione"){
$sql = "select sum(valor_liquido_cliente) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and (tipo_proposta = 'INTENCAO_PORTABILIDADE' or tipo_proposta = 'REFIN_PORTABILIDADE') order by nome asc";
}
else{
$sql = "select sum(valor_liquido_cliente) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and (tipo_proposta = 'INTENCAO_PORTABILIDADE' or tipo_proposta = 'REFIN_PORTABILIDADE') and tabela = '$campanha_filtro' order by nome asc";
}
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_valor_liquido_cliente_refin = $linha['total'];

echo " R$ ".$total_valor_liquido_cliente_refin;

?>
          </span></div></td>
          <td><div align="center"></div></td>
          <td>&nbsp;</td>
          <td><div align="center">Pontos Exras
            <?
          
$sql = "select sum(quant_pontos) as total_pontos_extras from pontuacao where nome = '$nome_operador' and data between '$datainicial' and '$datafinal' and tipo_dos_pontos = '+' ";

$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_dos_pontos_extras = $linha['total_pontos_extras'];

$totalizando_com_casas_apos_virgula = bcadd($total_dos_pontos_extras,0,4);
echo " $totalizando_com_casas_apos_virgula";		  
		  ?>
          </div></td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td><div align="center">+</div></td>
          <td><div align="center"></div></td>
          <td>&nbsp;</td>
          <td><div align="center">-</div></td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><div align="center">Produ&ccedil;&atilde;o Credito Pessoal<span class="style6"><span class="style61">
            <?
$sql = "select sum(valor_liberado) as total from propostas_veiculos where operador_atendente = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' order by num_proposta desc";

$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_valor_liberado_veiculos = $linha['total'];

echo " R$ $total_valor_liberado_veiculos";

?>
          </span></span></div></td>
          <td><div align="center"></div></td>
          <td>&nbsp;</td>
          <td><div align="center">Pontos Negativos
            <?
          
$sql = "select sum(quant_pontos) as total_pontos_negativos from pontuacao where nome = '$nome_operador' and data between '$datainicial' and '$datafinal' and tipo_dos_pontos = '-' ";

$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_dos_pontos_negativos = $linha['total_pontos_negativos'];

$totalizando_apos_virgula_pontos_negativos = bcadd($total_dos_pontos_negativos,0,4);

echo " $totalizando_apos_virgula_pontos_negativos";		  
		  ?>
          </div></td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td><div align="center">Total Produ&ccedil;&atilde;o<span class="style6"><span class="style61">
            <?
		  
$totalizacao_valor_liberado_mais_valor_liquido_cliente = $total_valor_liberado_veiculos+$total_valor_liquido_cliente+$total_valor_liquido_cliente_refin;

echo " R$ ".$totalizacao_valor_liberado_mais_valor_liquido_cliente;

		  
		  ?>
          </span></span></div></td>
          <td><div align="center"></div></td>
          <td>&nbsp;</td>
          <td><div align="center">Saldo de Pontos<strong>
            <?
          
$subsaldo_pontos_mais_pontosextras = bcadd($meta_atingida,$total_dos_pontos_extras,4);
$saldo_de_pontos = bcsub($subsaldo_pontos_mais_pontosextras,$total_dos_pontos_negativos,4);

echo " $saldo_de_pontos";
		  
		  ?>
          </strong></div></td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td><div align="center">Valor bruto de opera&ccedil;&atilde;o<strong><strong>
            <?

if($campanha_filtro=="selecione"){

$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' order by nome asc";

}

else{

$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and tabela = '$campanha_filtro' order by nome asc";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];




$soma_valortotal_mais_creditopessoal = bcadd($total_valor_liberado_veiculos,$valor_total,2);

echo " R$ ".$soma_valortotal_mais_creditopessoal;

?>
          </strong></strong></div></td>
          <td><div align="center"></div></td>
          <td>&nbsp;</td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td>&nbsp;</td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
        </tr>
</table>

<br>

      Per&iacute;odo de <? echo "$dia_inicial-$mes_inicial-$ano_inicial at� $dia_final-$mes_final-$ano_final Status considerado para calculos $status_de_calculos";?><br>

<table width="100%"  border="0">

              <tr>

                <td width="26%" valign="middle"><div align="right"><strong>Selecione a campanha que deseja filtrar</strong></div></td>

				<td width="34%" valign="middle"><form name="form3" method="post" action="relatorio_de_producao_periodico_por_operador_novo.php">

				  <strong><font color="#0000FF">

				  <select class='class02' name="campanha" id="campanha">

                    <option selected>selecione</option>

                    <?





    $sql = "select * from campanhas order by campanha asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['campanha']."</option>";

    }

?>

                  </select>

			    </font></strong>

				  <input class='class01' type="submit" name="Submit" value="Filtrar">

                  <input name="nome_operador" type="hidden" id="nome_operador" value="<? echo $nome_operador; ?>">

                  <span class="style7 style13">

                  <input name="dia_inicial" type="hidden" id="dia_inicial" value="<? echo $dia_inicial; ?>">

                  <input name="mes_inicial" type="hidden" id="mes_inicial" value="<? echo $mes_inicial; ?>">

                  <input name="ano_inicial" type="hidden" id="ano_inicial" value="<? echo $ano_inicial; ?>">

                  <input name="dia_final" type="hidden" id="dia_final" value="<? echo $dia_final; ?>">

                  <input name="mes_final" type="hidden" id="mes_final" value="<? echo $mes_final; ?>">

                  <input name="ano_final" type="hidden" id="ano_final" value="<? echo $ano_final; ?>">

                  </span>                  </form></td>

				<td width="40%"><form name="form4" method="post" action="exporta_excel_relatorio_analitico_de_producao_periodico_por_operador_novo.php">
				  <input name="nome_operador" type="hidden" id="nome_operador" value="<? echo "$nome_operador"; ?>">
				  <input name="dia_inicial" type="hidden" id="dia_inicial" value="<? echo "$dia_inicial"; ?>">
				  <input name="mes_inicial" type="hidden" id="mes_inicial" value="<? echo "$mes_inicial"; ?>">
			      <input name="ano_inicial" type="hidden" id="ano_inicial" value="<? echo "$ano_inicial"; ?>">
				  <input name="dia_final" type="hidden" id="dia_final" value="<? echo "$dia_final"; ?>">
				  <input name="mes_final" type="hidden" id="mes_final" value="<? echo "$mes_final"; ?>">
				  <input name="ano_final" type="hidden" id="ano_final" value="<? echo "$ano_final"; ?>">
				  <input class='class01' type="submit" name="submit" id="submit" value="Exportar">
				</form></td>

  </tr>

</table>            


      <table  bgcolor="#<? echo $cor ?>" width="100%"  border="0" cellspacing="0">

        <tr bgcolor="#<? echo $cor ?>">

          <td><div align="center" class="style9">N&ordm; Proposta </div></td>

          <td><div align="center" class="style9">Valor Solicitado </div></td>

          <td><div align="center" class="style9">Valor liq cliente </div></td>

          <td><div align="center"><span class="style9">Valor Total </span></div></td>

          <td><div align="center"><span class="style9">Tabela</span></div></td>

          <td><div align="center" class="style9">Cliente</div></td>

          <td><div align="center" class="style9">CPF</div></td>

          <td width="2%"><div align="center" class="style9">Prazo</div></td>

          <td width="4%"><div align="center" class="style9">R$ Parcelas </div></td>

          <td><div align="center" class="style9">Tipo de Proposta </div></td>

          <td><div align="center" class="style9">Bco Opera&ccedil;&atilde;o </div></td>

          <td><div align="center" class="style9">Status</div></td>

          <td><div align="center" class="style9"> Meta </div></td>

          <td><div align="center" class="style9">Premia&ccedil;&atilde;o</div></td>

          <td><div align="center"><span class="style9">Comiss&atilde;o Empresa</span></div></td>
        </tr>

      <?



if($campanha_filtro=="selecione"){
$sql = "SELECT * FROM propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and tipo_proposta <> 'REFIN_PORTABILIDADE' and tipo_proposta <> 'INTEN��O_PORTABILIDADE' order by nome asc";

}
else{
		

$sql = "SELECT * FROM propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and tabela = '$campanha_filtro' and tipo_proposta <> 'REFIN_PORTABILIDADE' and tipo_proposta <> 'INTEN��O_PORTABILIDADE' order by nome asc";

}
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {



$num_proposta = $linha[0];

$nome_operador = $linha[1];

$valor_credito = $linha[25];


$bco_operacao = $linha[86];



$valor_a_receber = $linha[87];

$comissao_op = $linha[101];

$tabela = $linha[109];

$valor_total = $linha[113];

$valor_liquido_cliente = $linha[115];

$meta = $linha[171];


?>

        <tr>

          <td width="5%" >               <form name="form2" method="post" action="altera_comissoes.php">
            <div align="center" class="style9">

              <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

              

  <input name="num_proposta" type="hidden" id="num_proposta" value="<? echo $num_proposta; ?>">
  <input name="nome_operador" type="hidden" id="nome_operador" value="<? echo $nome_operador; ?>">

            <input name="campanha" type="hidden" id="campanha" value="<? echo $campanha_filtro; ?>">
            <input name="dia_inicial" type="hidden" id="dia_inicial" value="<? echo $dia_inicial; ?>">
            <input name="mes_inicial" type="hidden" id="mes_inicial" value="<? echo $mes_inicial; ?>">
            <input name="ano_inicial" type="hidden" id="dia_inicial5" value="<? echo $ano_inicial; ?>">
            <input name="dia_final" type="hidden" id="dia_inicial6" value="<? echo $dia_final; ?>">
            <input name="mes_final" type="hidden" id="mes_final" value="<? echo $mes_final; ?>">
            <input name="ano_final" type="hidden" id="ano_final" value="<? echo $ano_final; ?>">
            <? echo $num_proposta;?>            </div>
          </form></td>

          <td width="7%"><div align="center" class="style9"><? echo "R$ ".$valor_credito;?></div></td>

          <td width="6%"><div align="center"><span class="style9"><? echo "R$ ".$valor_liquido_cliente;?></span></div></td>

          <td width="6%"><div align="center"><span class="style9"><? echo $valor_total;?></span></div></td>

          <td width="6%"><div align="center"><span class="style9"><? echo $tabela;?></span></div></td>

          <td width="14%">

          <div align="center" class="style9"><? printf("$linha[4]");?> </div></td>

          <td width="8%"><div align="center" class="style9"><? printf("$linha[7]");?> </div></td>

          <td><div align="center" class="style9"><? printf("$linha[26]"); ?> </div></td>

          <td><div align="center" class="style9"><? printf("$linha[27]"); ?> </div></td>

          <td width="6%"><div align="center" class="style9"><? printf("$linha[83]"); ?> </div></td>

          <td width="7%"><div align="center" class="style9"><? echo $bco_operacao;?></div></td>

          <td width="9%"><div align="center" class="style9"><? printf("$linha[51]");?></div></td>

          <td width="5%"><div align="center" class="style9"><? echo "$meta%";?></div></td>

          <td width="7%"><div align="center" class="style9"><? echo "R$ ".$comissao_op;?></div></td>

          <td width="8%"><div align="center"><span class="style9"><? echo "R$ ".$valor_a_receber;?></span></div></td>
          <?

if($reg==1){

echo "</tr>";

$reg=0;

}

?>


<? } ?>
        <tr>
          <td>Total</td>
          <td><div align="center" class="style9"><strong>
          <?
if($campanha_filtro=="selecione"){
$sql = "select sum(valor_credito) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and tipo_proposta <> 'REFIN_PORTABILIDADE' and tipo_proposta <> 'INTEN��O_PORTABILIDADE' order by nome asc";
}
else{
$sql = "select sum(valor_credito) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and campanha = '$campanha_filtro' and tipo_proposta <> 'REFIN_PORTABILIDADE' and tipo_proposta <> 'INTEN��O_PORTABILIDADE' order by nome asc";
}
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = bcadd($linha['total'],0);

echo "R$ ".$valor_total;
?>
          </strong></div></td>
          <td><div align="center" class="style9"><strong>
          <?
if($campanha_filtro=="selecione"){
$sql = "select sum(valor_liquido_cliente) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and tipo_proposta <> 'REFIN_PORTABILIDADE' and tipo_proposta <> 'INTEN��O_PORTABILIDADE' order by nome asc";
}
else{
$sql = "select sum(valor_liquido_cliente) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and campanha = '$campanha_filtro' and tipo_proposta <> 'REFIN_PORTABILIDADE' and tipo_proposta <> 'INTEN��O_PORTABILIDADE' order by nome asc";
}
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_liquido_cliente = bcadd($linha['total'],0);

echo "R$ ".$valor_liquido_cliente;
?>
          </strong></div></td>
          <td><div align="center" class="style9"><strong>
          <?
if($campanha_filtro=="selecione"){
$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and tipo_proposta <> 'REFIN_PORTABILIDADE' and tipo_proposta <> 'INTEN��O_PORTABILIDADE' order by nome asc";
}
else{
$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and campanha = '$campanha_filtro' and tipo_proposta <> 'REFIN_PORTABILIDADE' and tipo_proposta <> 'INTEN��O_PORTABILIDADE' order by nome asc";
}
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_liquido_cliente = bcadd($linha['total'],0);

echo "R$ ".$valor_liquido_cliente;
?>
          </strong></div></td>
          <td><div align="center"><span class="style9"></span></div></td>
          <td><div align="center"><span class="style9"></span></div></td>
          <td><div align="center"><span class="style9"></span></div></td>
          <td><div align="center"><span class="style9"></span></div></td>
          <td><div align="center"><span class="style9"></span></div></td>
          <td><div align="center"><span class="style9"></span></div></td>
          <td><div align="center"><span class="style9"></span></div></td>
          <td><div align="center"><span class="style9"></span></div></td>
          <td><div align="center" class="style9"><strong>
          <?
if($campanha_filtro=="selecione"){
$sql = "select sum(meta) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and tipo_proposta <> 'REFIN_PORTABILIDADE' and tipo_proposta <> 'INTEN��O_PORTABILIDADE' order by nome asc";
}
else{
$sql = "select sum(meta) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and campanha = '$campanha_filtro' and tipo_proposta <> 'REFIN_PORTABILIDADE' and tipo_proposta <> 'INTEN��O_PORTABILIDADE' order by nome asc";
}
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_liquido_cliente = bcadd($linha['total'],0);

echo $valor_liquido_cliente."%";
?>
          </strong></div></td>
          <td><div align="center" class="style9"><strong>
          <?
if($campanha_filtro=="selecione"){
$sql = "select sum(comissao_op) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and tipo_proposta <> 'REFIN_PORTABILIDADE' and tipo_proposta <> 'INTEN��O_PORTABILIDADE' order by nome asc";
}
else{
$sql = "select sum(comissao_op) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and campanha = '$campanha_filtro' and tipo_proposta <> 'REFIN_PORTABILIDADE' and tipo_proposta <> 'INTEN��O_PORTABILIDADE' order by nome asc";
}
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_liquido_cliente = bcadd($linha['total'],0);

echo "R$ ".$valor_liquido_cliente;
?>
          </strong></div></td>
          <td><div align="center"><span class="style9"></span></div></td>
</table>



<p align="center"><strong>REFIN_PORTABILIDADE / INTEN&Ccedil;&Atilde;O_PORTABILIDADE</strong></p>
<table width="100%"  border="0" cellspacing="0">
  <tr bgcolor="#<? echo $cor ?>">
    <td><div align="center" class="style9">N&ordm; Proposta </div></td>
    <td><div align="center" class="style9">Valor Solicitado </div></td>
    <td><div align="center" class="style9">Valor liq cliente </div></td>
    <td><div align="center"><span class="style9">Valor Total </span></div></td>
    <td><div align="center"><span class="style9">Tabela</span></div></td>
    <td><div align="center" class="style9">Cliente</div></td>
    <td><div align="center" class="style9">CPF</div></td>
    <td width="2%"><div align="center" class="style9">Prazo</div></td>
    <td width="4%"><div align="center" class="style9">R$ Parcelas </div></td>
    <td><div align="center" class="style9">Tipo de Proposta </div></td>
    <td><div align="center" class="style9">Bco Opera&ccedil;&atilde;o </div></td>
    <td><div align="center" class="style9">Status</div></td>
    <td><div align="center" class="style9"> Meta </div></td>
    <td><div align="center" class="style9">Premia&ccedil;&atilde;o</div></td>
    <td><div align="center"><span class="style9">Comiss&atilde;o Empresa</span></div></td>
  </tr>
  <?



if($campanha_filtro=="selecione"){
$sql = "SELECT * FROM propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and (tipo_proposta = 'INTENCAO_PORTABILIDADE' or tipo_proposta = 'REFIN_PORTABILIDADE') order by nome asc";

}
else{
		

$sql = "SELECT * FROM propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and tabela = '$campanha_filtro' and (tipo_proposta = 'INTENCAO_PORTABILIDADE' or tipo_proposta = 'REFIN_PORTABILIDADE') order by nome asc";

}
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {



$num_proposta = $linha[0];

$nome_operador = $linha[1];

$valor_credito = $linha[25];


$bco_operacao = $linha[86];



$valor_a_receber = $linha[87];

$comissao_op = $linha[101];

$tabela = $linha[109];

$valor_total = $linha[113];

$valor_liquido_cliente = $linha[115];

$meta = $linha[171];


?>
  <tr>
    <td width="5%"><form name="form2" method="post" action="altera_comissoes.php">
      <div align="center" class="style9">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <input name="num_proposta3" type="hidden" id="num_proposta3" value="<? echo $num_proposta; ?>">
        <input name="nome_operador2" type="hidden" id="nome_operador2" value="<? echo $nome_operador; ?>">
        <input name="campanha2" type="hidden" id="campanha2" value="<? echo $campanha_filtro; ?>">
        <input name="dia_inicial2" type="hidden" id="dia_inicial2" value="<? echo $dia_inicial; ?>">
        <input name="mes_inicial2" type="hidden" id="mes_inicial2" value="<? echo $mes_inicial; ?>">
        <input name="dia_inicial2" type="hidden" id="dia_inicial7" value="<? echo $ano_inicial; ?>">
        <input name="dia_inicial2" type="hidden" id="dia_inicial8" value="<? echo $dia_final; ?>">
        <input name="mes_final2" type="hidden" id="mes_final2" value="<? echo $mes_final; ?>">
        <input name="ano_final2" type="hidden" id="ano_final2" value="<? echo $ano_final; ?>">
        <? echo $num_proposta;?></div>
    </form></td>
    <td width="7%"><div align="center" class="style9"><? echo "R$ ".$valor_credito;?></div></td>
    <td width="6%"><div align="center"><span class="style9"><? echo "R$ ".$valor_liquido_cliente;?></span></div></td>
    <td width="6%"><div align="center"><span class="style9"><? echo $valor_total;?></span></div></td>
    <td width="6%"><div align="center"><span class="style9"><? echo $tabela;?></span></div></td>
    <td width="14%"><div align="center" class="style9"><? printf("$linha[4]");?></div></td>
    <td width="8%"><div align="center" class="style9"><? printf("$linha[7]");?></div></td>
    <td><div align="center" class="style9"><? printf("$linha[26]"); ?></div></td>
    <td><div align="center" class="style9"><? printf("$linha[27]"); ?></div></td>
    <td width="6%"><div align="center" class="style9"><? printf("$linha[83]"); ?></div></td>
    <td width="7%"><div align="center" class="style9"><? echo $bco_operacao;?></div></td>
    <td width="9%"><div align="center" class="style9"><? printf("$linha[51]");?></div></td>
    <td width="5%"><div align="center" class="style9"><? echo "$meta%";?></div></td>
    <td width="7%"><div align="center" class="style9"><? echo "R$ ".$comissao_op;?></div></td>
    <td width="8%"><div align="center"><span class="style9"><? echo "R$ ".$valor_a_receber;?></span></div></td>
    <?

if($reg==1){

echo "</tr>";

$reg=0;

}

?>
    <? } ?>
  <tr>
    <td>Total</td>
    <td><div align="center" class="style9"><strong>
      <?
if($campanha_filtro=="selecione"){
$sql = "select sum(valor_credito) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and (tipo_proposta = 'INTENCAO_PORTABILIDADE' or tipo_proposta = 'REFIN_PORTABILIDADE') order by nome asc";
}
else{
$sql = "select sum(valor_credito) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and campanha = '$campanha_filtro' and (tipo_proposta = 'INTENCAO_PORTABILIDADE' or tipo_proposta = 'REFIN_PORTABILIDADE') order by nome asc";
}
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
    </strong></div></td>
    <td><div align="center" class="style9"><strong>
      <?
if($campanha_filtro=="selecione"){
$sql = "select sum(valor_liquido_cliente) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and (tipo_proposta = 'INTENCAO_PORTABILIDADE' or tipo_proposta = 'REFIN_PORTABILIDADE') order by nome asc";
}
else{
$sql = "select sum(valor_liquido_cliente) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and campanha = '$campanha_filtro' and (tipo_proposta = 'INTENCAO_PORTABILIDADE' or tipo_proposta = 'REFIN_PORTABILIDADE') order by nome asc";
}
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_liquido_cliente = $linha['total'];

echo "R$ ".$valor_liquido_cliente;
?>
    </strong></div></td>
    <td><div align="center" class="style9"><strong>
      <?
if($campanha_filtro=="selecione"){
$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and (tipo_proposta = 'INTENCAO_PORTABILIDADE' or tipo_proposta = 'REFIN_PORTABILIDADE') order by nome asc";
}
else{
$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and campanha = '$campanha_filtro' and (tipo_proposta = 'INTENCAO_PORTABILIDADE' or tipo_proposta = 'REFIN_PORTABILIDADE') order by nome asc";
}
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_liquido_cliente = $linha['total'];

echo "R$ ".$valor_liquido_cliente;
?>
    </strong></div></td>
    <td><div align="center"><span class="style9"></span></div></td>
    <td><div align="center"><span class="style9"></span></div></td>
    <td><div align="center"><span class="style9"></span></div></td>
    <td><div align="center"><span class="style9"></span></div></td>
    <td><div align="center"><span class="style9"></span></div></td>
    <td><div align="center"><span class="style9"></span></div></td>
    <td><div align="center"><span class="style9"></span></div></td>
    <td><div align="center"><span class="style9"></span></div></td>
    <td><div align="center" class="style9"><strong>
      <?
if($campanha_filtro=="selecione"){
$sql = "select sum(meta) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and (tipo_proposta = 'INTENCAO_PORTABILIDADE' or tipo_proposta = 'REFIN_PORTABILIDADE') order by nome asc";
}
else{
$sql = "select sum(meta) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and campanha = '$campanha_filtro' and (tipo_proposta = 'INTENCAO_PORTABILIDADE' or tipo_proposta = 'REFIN_PORTABILIDADE') order by nome asc";
}
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_liquido_cliente = $linha['total'];

echo $valor_liquido_cliente."%";
?>
    </strong></div></td>
    <td><div align="center" class="style9"><strong>
      <?
if($campanha_filtro=="selecione"){
$sql = "select sum(comissao_op) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and (tipo_proposta = 'INTENCAO_PORTABILIDADE' or tipo_proposta = 'REFIN_PORTABILIDADE') order by nome asc";
}
else{
$sql = "select sum(comissao_op) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and campanha = '$campanha_filtro' and (tipo_proposta = 'INTENCAO_PORTABILIDADE' or tipo_proposta = 'REFIN_PORTABILIDADE') order by nome asc";
}
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_liquido_cliente = $linha['total'];

echo "R$ ".$valor_liquido_cliente;
?>
    </strong></div></td>
    <td><div align="center"><span class="style9"></span></div></td>
</table>
<p align="center"><strong>CREDITO PESSOAL / VEICULOS</strong> Per&iacute;odo de <? echo "$dia_inicial-$mes_inicial-$ano_inicial at&eacute; $dia_final-$mes_final-$ano_final";?></p>
<table bgcolor="#<? echo $cor ?>" width="100%"  border="0" cellspacing="0">
  <tr >
    <td width="10%"><div align="center" class="style9">N&ordm; Proposta </div></td>
    <td width="20%"><div align="center" class="style9">Cliente</div></td>
    <td width="13%"><div align="center" class="style9">CPF</div></td>
    <td width="15%"><div align="center" class="style9">Valor Financiar</div></td>
    <td width="11%"><div align="center" class="style9">Valor Liberado</div></td>
    <td width="11%"><div align="center" class="style9">Bco Opera&ccedil;&atilde;o</div></td>
    <td width="5%"><div align="center" class="style9">
      <div align="center" class="style9">Meta</div>
    </div></td>
    <td width="7%"><div align="center" class="style9">Premia&ccedil;&atilde;o</div></td>
    <td width="8%"><div align="center"><span class="style9">Comiss&atilde;o Empresa</span></div></td>
  </tr>
  <?



$sql = "SELECT * FROM propostas_veiculos where operador_atendente = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' order by num_proposta desc";
			


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

$tel_contador = $linha[65];

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

$cel_operador_alterou = $linha[117];

$email_operador_alterou = $linha[118];

$estab_alterou = $linha[119];

$cidade_estab_alterou = $linha[120];

$tel_estab_alterou = $linha[121];

$email_estab_alterou = $linha[122];

$dataalteracao = $linha[123];

$horaalteracao = $linha[124];

$recebido = $linha[125];

$comissao_op = $linha[126];

$meses = $linha[127];

$trinta = $linha[128];

$quarenta_cinco = $linha[129];

$meses_residencia = $linha[130];

$ddd_tel = $linha[131];

$ddd_cel = $linha[132];

$ddd_tel_empresa = $linha[133];

$ddd_tel_contador = $linha[134];

$ddd_tel_empresa_anterior = $linha[135];

$ddd_ref_pessoal = $linha[136];

$ddd_ref_pessoal2 = $linha[137];

$ddd_ref_comercial = $linha[138];

$digito_agencia = $linha[139];

$digito_conta = $linha[140];

$ano_ref_conta = $linha[141];

$modelo = $linha[142];

$estado_emissao = $linha[143];

$mista = $linha[144];

$parecer_credito = $linha[145];

$bem = $linha[146];

$chassi = $linha[147];

$bco_operacao_cp = $linha[158];

$meta = $linha[178];

$valor_a_receber_veiculos = $linha[177];


?>
  <tr>
    <td><form action="propostas/imprimir_proposta.php" method="post" name="form3" target="_blank" class="style9">
      <div align="center"> <? echo $num_proposta; ?>
            <input name="num_proposta2" type="hidden" id="num_proposta2" value="<? echo $num_proposta; ?>">
      </div>
    </form></td>
    <td><div align="center" class="style9"><? echo $nome; ?></div></td>
    <td><div align="center" class="style9"><? echo $cpf; ?></div></td>
    <td><div align="center" class="style9"><? echo "R$ $valor_financiar"; ?></div></td>
    <td><div align="center" class="style9"><? echo "R$ ".$valor_liberado; ?></div></td>
    <td><div align="center" class="style9"><? echo $bco_operacao_cp; ?></div></td>
    <td><div align="center" class="style9"><? echo "$meta%"; ?></div></td>
    <td><div align="center" class="style9"><? echo "R$ ".$comissao_op; ?></div></td>
    <td><div align="center"><span class="style9"><? echo "R$ ".$valor_a_receber_veiculos;?></span></div></td>
    <?

if($reg==1){

echo "</tr>";

$reg=0;

}

?>
    <? } ?>
  <tr>
    <td><span class="style9">Total</span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center"><span class="style8">
      <?
$sql = "select sum(valor_financiar) as total from propostas_veiculos where operador_atendente = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' order by num_proposta desc";

$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_comissao_veiculos = $linha['total'];

echo "R$ ".$total_comissao_veiculos;
?>
    </span></div></td>
    <td><div align="center"><span class="style8">
      <?
$sql = "select sum(valor_liberado) as total from propostas_veiculos where operador_atendente = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' order by num_proposta desc";

$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_comissao_veiculos = $linha['total'];

echo "R$ ".$total_comissao_veiculos;
?>
    </span></div></td>
    <td>&nbsp;</td>
    <td><div align="center" class="style8">
      <?
$sql = "select sum(meta) as total from propostas_veiculos where operador_atendente = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' order by num_proposta desc";

$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_meta_veiculos = $linha['total'];

echo "$total_meta_veiculos%";
?>
    </div></td>
    <td><div align="center" class="style8">
      <?
$sql = "select sum(comissao_op) as total from propostas_veiculos where operador_atendente = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' order by num_proposta desc";

$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_comissao_veiculos = $linha['total'];

echo "R$ ".$total_comissao_veiculos;
?>
    </div></td>
    <td><div align="center"><span class="style8">
      <?
$sql = "select sum(valor_a_receber) as total from propostas_veiculos where operador_atendente = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' order by num_proposta desc";

$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_comissao_veiculos = $linha['total'];

echo "R$ ".$total_comissao_veiculos;
?>
    </span></div></td>
</table>
<p align="center">&nbsp;</p>
<table bgcolor="#<? echo $cor ?>" width="100%" border="1" align="center" cellspacing="0">
  <tr>
    <td width="28%" height="15"><div align="center"><strong><span class="style9">Banco de Opera&ccedil;&atilde;o</span></strong></div></td>
    <td width="14%"><div align="center" class="style9">Comiss&atilde;o da Empresa</div></td>
    <td width="17%"><div align="center" class="style9">Valor Total</div></td>
    <td width="22%"><div align="center"><strong><span class="style9">Valor Solicitado</span></strong></div></td>
    <td width="19%"><div align="center" class="style9"><strong><span class="style9">Valor Liquido Cliente</span></strong></div></td>
  </tr>
  <?
  
//$dia_inicial = $_POST['dia_inicial'];

//$mes_inicial = $_POST['mes_inicial'];

//$ano_inicial = $_POST['ano_inicial'];



//$dia_final = $_POST['dia_final'];

//$mes_final = $_POST['mes_final'];

//$ano_final = $_POST['ano_final'];

  


$sql1 = "select * from bco_operacao order by banco asc";
$res1 = mysql_query($sql1);
while($linha=mysql_fetch_row($res1)) {

$banco_operacao = $linha[1];

?>
  <tr>
    <td><div align="center"><span class="style9"><strong><strong><? echo $banco_operacao; ?></strong></strong></span></div></td>
    <td><div align="center"><strong><strong>
      <?

if($campanha_filtro=="selecione"){

$sql2 = "select sum(valor_a_receber) as totalbanco from propostas where bco_operacao = '$banco_operacao' and nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos'";

}

else{

$sql2 = "select sum(valor_a_receber) as totalbanco from propostas where bco_operacao = '$banco_operacao' and nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and tabela = '$campanha_filtro'";

}


$resultado2=mysql_query($sql2, $conexao);

$linha=mysql_fetch_array($resultado2);



$total_producao = $linha['totalbanco'];


//echo "R$ ".$total_producao;

?>
    </strong></strong><strong><strong>
    <?

if($campanha_filtro=="selecione"){

$sql2 = "select sum(comissao_empresa) as totalbanco from propostas_veiculos where bco_operacao = '$banco_operacao' and operador_atendente = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos'";

}

else{

$sql2 = "select sum(comissao_empresa) as totalbanco from propostas_veiculos where bco_operacao = '$banco_operacao' and operador_atendente = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and tabela = '$campanha_filtro'";

}


$resultado2=mysql_query($sql2, $conexao);

$linha=mysql_fetch_array($resultado2);



$total_producao_cp = $linha['totalbanco'];


//echo "R$ ".$total_producao_cp;

?>

<?

$total_producao_consignado_cp = bcadd($total_producao,$total_producao_cp,2);

echo "R$ ".$total_producao_consignado_cp;

?>
    </strong></strong></div></td>
    <td><div align="center" class="style9"><strong><strong><?

if($campanha_filtro=="selecione"){

$sql3 = "select sum(valor_total) as totalbanco from propostas where bco_operacao = '$banco_operacao' and nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos'";

}

else{

$sql3 = "select sum(valor_total) as totalbanco from propostas where bco_operacao = '$banco_operacao' and nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and tabela = '$campanha_filtro'";

}


$resultado3=mysql_query($sql3, $conexao);

$linha=mysql_fetch_array($resultado3);



$total_producao = $linha['totalbanco'];


//echo "R$ ".$total_producao;

?>
    </strong></strong><strong><strong>
    <?

if($campanha_filtro=="selecione"){

$sql2 = "select sum(valor_financiar) as totalbanco from propostas_veiculos where bco_operacao = '$banco_operacao' and operador_atendente = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos'";

}

else{

$sql2 = "select sum(valor_financiar) as totalbanco from propostas_veiculos where bco_operacao = '$banco_operacao' and operador_atendente = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and tabela = '$campanha_filtro'";

}


$resultado2=mysql_query($sql2, $conexao);

$linha=mysql_fetch_array($resultado2);



$total_producao_cp = $linha['totalbanco'];


//echo "R$ ".$total_producao_cp;

?>
    <?

$total_producao_consignado_cp = bcadd($total_producao,$total_producao_cp,2);

echo "R$ ".$total_producao_consignado_cp;

?>
    </strong></strong></div></td>
    <td><div align="center" class="style9"><strong><strong><?

if($campanha_filtro=="selecione"){

$sql4 = "select sum(valor_credito) as totalbanco from propostas where bco_operacao = '$banco_operacao' and nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos'";

}

else{

$sql4 = "select sum(valor_credito) as totalbanco from propostas where bco_operacao = '$banco_operacao' and nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and tabela = '$campanha_filtro'";

}


$resultado4=mysql_query($sql4, $conexao);

$linha=mysql_fetch_array($resultado4);



$total_producao = $linha['totalbanco'];


echo "R$ ".$total_producao;

?>
    </strong></strong></div></td>
    <td><div align="center" class="style9"><strong><strong><?

if($campanha_filtro=="selecione"){

$sql5 = "select sum(valor_liquido_cliente) as totalbanco from propostas where bco_operacao = '$banco_operacao' and nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos'";

}

else{

$sql5 = "select sum(valor_liquido_cliente) as totalbanco from propostas where bco_operacao = '$banco_operacao' and nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and tabela = '$campanha_filtro'";

}


$resultado5=mysql_query($sql5, $conexao);

$linha=mysql_fetch_array($resultado5);



$total_producao = $linha['totalbanco'];


//echo "R$ ".$total_producao;

?>
    </strong></strong><strong><strong>
    <?

if($campanha_filtro=="selecione"){

$sql2 = "select sum(valor_liberado) as totalbanco from propostas_veiculos where bco_operacao = '$banco_operacao' and operador_atendente = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos'";

}

else{

$sql2 = "select sum(valor_liberado) as totalbanco from propostas_veiculos where bco_operacao = '$banco_operacao' and operador_atendente = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and tabela = '$campanha_filtro'";

}


$resultado2=mysql_query($sql2, $conexao);

$linha=mysql_fetch_array($resultado2);



$total_producao_cp = $linha['totalbanco'];


//echo "R$ ".$total_producao_cp;

?>
    <?

$total_producao_consignado_cp = bcadd($total_producao,$total_producao_cp,2);

echo "R$ ".$total_producao_consignado_cp;

?>
    </strong></strong></div></td>
  </tr>
  <?
}
?>
</table>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
</body>

</html>

