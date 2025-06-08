<?php




$tipo_proposta = $_POST['tipo_proposta'];
?>

<html>

<head>

<title>LISTANDO TODAS AS PROPOSTAS POR <? $tipo_proposta ?> </title>

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


	  

//$nome_operador = $_POST['nome_operador'];

$mes_ano = $_POST['mes_ano'];







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
 <table width="100%"  border="0">

   <tr>

          <td colspan="9"><div align="left"><span class="style2">

            <?

$nome_operador = $_POST['nome_operador'];

			

$sql = "SELECT * FROM propostas where nome_operador = '$nome_operador' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nome_operador = $linha[1];

}
?>

          Listando todas as propostas do tipo:</span> <span class="style2"><? echo $tipo_proposta; ?></span></div></td>
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
$sql = "select sum(valor_liquido_cliente) as total from propostas where tipo_proposta = '$tipo_proposta' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and tipo_proposta <> 'REFIN_PORTABILIDADE' or 'INTENCAO_PORTABILIDADE' order by nome asc";
}
else{
$sql = "select sum(valor_liquido_cliente) as total from propostas where tipo_proposta = '$tipo_proposta' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos'  and tabela = '$campanha_filtro' and tipo_proposta <> 'REFIN_PORTABILIDADE' or 'INTENCAO_PORTABILIDADE' order by nome asc";
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
$sql = "select sum(meta) as total from propostas_veiculos where tipo_proposta = '$tipo_proposta' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' order by num_proposta desc";

$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_meta_veiculos = $linha['total'];

			
			
if($campanha_filtro=="selecione"){
$sql = "select sum(meta) as total from propostas where tipo_proposta = '$tipo_proposta' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' order by nome asc";
}
else{
$sql = "select sum(meta) as total from propostas where tipo_proposta = '$tipo_proposta' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and tabela = '$campanha_filtro' order by nome asc";
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
$sql = "select sum(comissao_op) as total from propostas_veiculos where tipo_proposta = '$tipo_proposta' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' order by num_proposta desc";

$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_comissao_veiculos = $linha['total'];

			
			
			
if($campanha_filtro=="selecione"){
$sql = "select sum(comissao_op) as total from propostas where tipo_proposta = '$tipo_proposta' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' order by nome asc";
}
else{
$sql = "select sum(comissao_op) as total from propostas where tipo_proposta = '$tipo_proposta' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and tabela = '$campanha_filtro' order by nome asc";
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
$sql = "select sum(valor_a_receber) as total from propostas_veiculos where tipo_proposta = '$tipo_proposta' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' order by num_proposta desc";

$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_valor_a_receber_veiculos = $linha['total'];

?>
          </span>
                <?

if($campanha_filtro=="selecione"){

$sql = "select sum(valor_a_receber) as total from propostas where tipo_proposta = '$tipo_proposta' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' order by nome asc";

}

else{

$sql = "select sum(valor_a_receber) as total from propostas where tipo_proposta = '$tipo_proposta' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and tabela = '$campanha_filtro' order by nome asc";

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
$sql = "select sum(valor_liquido_cliente) as total from propostas where tipo_proposta = '$tipo_proposta' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and (tipo_proposta = 'INTENCAO_PORTABILIDADE' or tipo_proposta = 'REFIN_PORTABILIDADE') order by nome asc";
}
else{
$sql = "select sum(valor_liquido_cliente) as total from propostas where tipo_proposta = '$tipo_proposta' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and (tipo_proposta = 'INTENCAO_PORTABILIDADE' or tipo_proposta = 'REFIN_PORTABILIDADE') and tabela = '$campanha_filtro' order by nome asc";
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
          
$sql = "select sum(quant_pontos) as total_pontos_extras from pontuacao where tipo_proposta = '$tipo_proposta' and data between '$datainicial' and '$datafinal' and tipo_dos_pontos = '+' ";

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
$sql = "select sum(valor_liberado) as total from propostas_veiculos where tipo_proposta = '$tipo_proposta' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' order by num_proposta desc";

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
          
$sql = "select sum(quant_pontos) as total_pontos_negativos from pontuacao where tipo_proposta = '$tipo_proposta' and data between '$datainicial' and '$datafinal' and tipo_dos_pontos = '-' ";

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

$sql = "select sum(valor_total) as total from propostas where tipo_proposta = '$tipo_proposta' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' order by nome asc";

}

else{

$sql = "select sum(valor_total) as total from propostas where tipo_proposta = '$tipo_proposta' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and tabela = '$campanha_filtro' order by nome asc";

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

      Per&iacute;odo de <? echo "$dia_inicial-$mes_inicial-$ano_inicial até $dia_final-$mes_final-$ano_final Status considerado para calculos $status_de_calculos";?><br>

<table width="100%"  border="0">

              <tr>

                <td width="26%" valign="middle"><div align="right"><strong>Selecione a campanha que deseja filtrar</strong></div></td>

				<td width="34%" valign="middle"><form name="form3" method="post" action="relatorio_de_producao_periodico_por_operador_novo.php">
				  <select class='class02' name="tipo_proposta" id="tipo_proposta">
				    <option selected>
				      <? if(empty($tipo_proposta)){ echo $tipo_proposta2;} else{ echo $tipo_proposta; } ?>
			        </option>
				    <?
$sql = "select * from tipos_propostas where setor = 'CONSIGNADO' and status = 'Ativo' group by tipo_proposta order by tipo_proposta asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['tipo_proposta']."</option>";
    }
?>
			      </select>
				  <input type="submit" name="Submit" value="Filtrar">

                  <input name="nome_operador" type="hidden" id="nome_operador" value="<? echo $nome_operador; ?>">

                  <span class="style7 style13">

                  <input name="dia_inicial" type="hidden" id="dia_inicial" value="<? echo $dia_inicial; ?>">

                  <input name="mes_inicial" type="hidden" id="mes_inicial" value="<? echo $mes_inicial; ?>">

                  <input name="ano_inicial" type="hidden" id="ano_inicial" value="<? echo $ano_inicial; ?>">

                  <input name="dia_final" type="hidden" id="dia_final" value="<? echo $dia_final; ?>">

                  <input name="mes_final" type="hidden" id="mes_final" value="<? echo $mes_final; ?>">

                  <input name="ano_final" type="hidden" id="ano_final" value="<? echo $ano_final; ?>">

                  </span>                  </form></td>

				<td width="40%">&nbsp;</td>

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
$sql = "SELECT * FROM propostas where tipo_proposta = '$tipo_proposta' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and tipo_proposta <> 'REFIN_PORTABILIDADE' and tipo_proposta <> 'INTENÇÃO_PORTABILIDADE' order by nome asc";

}
else{
		

$sql = "SELECT * FROM propostas where tipo_proposta = '$tipo_proposta' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and tabela = '$campanha_filtro' and tipo_proposta <> 'REFIN_PORTABILIDADE' and tipo_proposta <> 'INTENÇÃO_PORTABILIDADE' order by nome asc";

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
$sql = "select sum(valor_credito) as total from propostas where tipo_proposta = '$tipo_proposta' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and tipo_proposta <> 'REFIN_PORTABILIDADE' and tipo_proposta <> 'INTENÇÃO_PORTABILIDADE' order by nome asc";
}
else{
$sql = "select sum(valor_credito) as total from propostas where tipo_proposta = '$tipo_proposta' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and campanha = '$campanha_filtro' and tipo_proposta <> 'REFIN_PORTABILIDADE' and tipo_proposta <> 'INTENÇÃO_PORTABILIDADE' order by nome asc";
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
$sql = "select sum(valor_liquido_cliente) as total from propostas where tipo_proposta = '$tipo_proposta' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and tipo_proposta <> 'REFIN_PORTABILIDADE' and tipo_proposta <> 'INTENÇÃO_PORTABILIDADE' order by nome asc";
}
else{
$sql = "select sum(valor_liquido_cliente) as total from propostas where tipo_proposta = '$tipo_proposta' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and campanha = '$campanha_filtro' and tipo_proposta <> 'REFIN_PORTABILIDADE' and tipo_proposta <> 'INTENÇÃO_PORTABILIDADE' order by nome asc";
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
$sql = "select sum(valor_total) as total from propostas where tipo_proposta = '$tipo_proposta' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and tipo_proposta <> 'REFIN_PORTABILIDADE' and tipo_proposta <> 'INTENÇÃO_PORTABILIDADE' order by nome asc";
}
else{
$sql = "select sum(valor_total) as total from propostas where tipo_proposta = '$tipo_proposta' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and campanha = '$campanha_filtro' and tipo_proposta <> 'REFIN_PORTABILIDADE' and tipo_proposta <> 'INTENÇÃO_PORTABILIDADE' order by nome asc";
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
$sql = "select sum(meta) as total from propostas where tipo_proposta = '$tipo_proposta' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and tipo_proposta <> 'REFIN_PORTABILIDADE' and tipo_proposta <> 'INTENÇÃO_PORTABILIDADE' order by nome asc";
}
else{
$sql = "select sum(meta) as total from propostas where tipo_proposta = '$tipo_proposta' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and campanha = '$campanha_filtro' and tipo_proposta <> 'REFIN_PORTABILIDADE' and tipo_proposta <> 'INTENÇÃO_PORTABILIDADE' order by nome asc";
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
$sql = "select sum(comissao_op) as total from propostas where tipo_proposta = '$tipo_proposta' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and tipo_proposta <> 'REFIN_PORTABILIDADE' and tipo_proposta <> 'INTENÇÃO_PORTABILIDADE' order by nome asc";
}
else{
$sql = "select sum(comissao_op) as total from propostas where tipo_proposta = '$tipo_proposta' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = '$status_de_calculos' and campanha = '$campanha_filtro' and tipo_proposta <> 'REFIN_PORTABILIDADE' and tipo_proposta <> 'INTENÇÃO_PORTABILIDADE' order by nome asc";
}
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_liquido_cliente = bcadd($linha['total'],0);

echo "R$ ".$valor_liquido_cliente;
?>
          </strong></div></td>
          <td><div align="center"><span class="style9"></span></div></td>
</table>



<p align="center">&nbsp;</p>
</body>

</html>

