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

<title>TELA DE EDI&Ccedil;&Atilde;O DE PROPOSTAS</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>

<?



require '../../conect/conect.php';





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







<form action="../principal.php" method="post" name="form1" target="_top">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" name="Submit3" value="Voltar ao menu principal">

</form>

<?





$num_proposta = $_POST['num_proposta'];

//$percentual = $_POST['percentual']/100;
$percentual = 10/100;


//$percentual_op = $_POST['percentual_op']/100;
$percentual_op = 1/100;


$spread = ($_POST['percentual'])/100;







$sql = "select * from db";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$comando = "update `$linha[1]`.`propostas` set `num_proposta` = '$num_proposta',`quoeficiente` = '$percentual',`percentual_op` = '$percentual_op' where `propostas`. `num_proposta` = '$num_proposta' limit 1 ";

}

mysql_query($comando,$conexao);









$sql = "SELECT * FROM propostas where num_proposta = '$num_proposta'";

$res = mysql_query($sql);

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

$valor_credito = $linha[25];

$quant_parc_gravado = $linha[26];

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

$retorno = $linha[85];

$bco_operacao = $linha[86];

$valor_a_receber = $linha[87];

$recebido = $linha[88];

$data_recebimento = $linha[89];





$parc1 = $linha[52];

$banco1 = $linha[53];

$vencto1 = $linha[54];

$compra1 = $linha[55];



$num_beneficio2 = $linha[80];

$num_beneficio3 = $linha[81];

$num_beneficio4 = $linha[82];



$tipo_proposta = $linha[83];



$quoeficiente = $linha[90];

$valor_liberado = $linha[97];

$tipo_capital = $linha[98];

$percentual_op = $linha[100];

$comissao_op = $linha[101];

$obs3 = $linha[102];

$tabela = $linha[109];

$valor_total = $linha[113];

$campanha_gravada = $linha[114];

$valor_liquido_cliente = $linha[115];

$num_contrato_bco = $linha[177];

$custo_operacao = $linha[187];

$dia_parc = $linha[188];

$mes_parc = $linha[189];

$ano_parc = $linha[190];




?>

<? } ?>





<?



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];





$sql = "SELECT * FROM adm where usuario = '$usuario' and senha = '$senha'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {





$operador_alterou = $linha[1];

$cel_operador_alterou = $linha[19];

$email_operador_alterou = $linha[20];

$estab_pertence = $linha[44];

$cidade_estab_pertence = $linha[45];

$tel_estab_pertence = $linha[46];

$email_estab_pertence = $linha[47];



?>

<? } ?>





<form name="form1" method="post" action="grava_alterar_status_da_proposta.php">



<table width="100%" border="0" cellspacing="4">

    <tr>

      <td colspan="4"><div align="center"><font color="#0000FF" size="4">EDITANDO PROPOSTA N&ordm; <strong><? echo $num_proposta; ?>

                <input name="num_proposta" type="hidden" id="num_proposta" value="<? echo $num_proposta; ?>">

      </strong></font></div></td>

    </tr>

    <tr>

      <td width="17%">Status</td>

      <td width="18%"><strong><font color="#0000FF">

        <select name="status" id="select11">

          <option selected><? echo $status; ?></option>

          <?





    $sql = "select * from status where setor = 'CONSIGNADO' and status <> 'PAGO AO CLIENTE' order by status asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['status']."</option>";

    }

?>

        </select>

        <input name="mes_ano_status" type="hidden" id="mes_ano_status" value="<? echo date('m-Y'); ?>">

</font></strong></td>
      <td width="14%">Cliente</td>
      <td width="51%"><p><strong><font color="#0000FF"><? echo $nome; ?></font></strong></p></td>

    </tr>

    <tr>

      <td><input name="nome_operador" type="hidden" id="nome_operador" value="<? echo $nome_operador; ?>">
        <strong><font color="#0000FF">
        <? //echo "Ser� calculado"; ?>
        <input name="retorno" type="hidden" id="retorno2" value="<? $calculo = bcmul($valor_credito, $spread, 2)/14400.00; $calculo_spread = bcmul($calculo,100,2); echo $calculo_spread; ?>">
        <? //$calculo2 = bcmul($valor_credito, $spread, 2)/14400.00; $calculo_spread2 = bcmul($calculo2,100,2); echo $calculo_spread2;?>
        <input name="percentual_op" type="hidden" id="percentual_op2" value="<? echo $percentual_op; ?>">
        <input name="campanha" type="hidden" id="campanha" value="<? if($campanha_gravada==""){echo "selecione"; } else{echo $campanha_gravada; } ?>">
      </font></strong></td>

      <td><strong></strong></td>

      <td>CPF do cliente </td>

      <td><strong><font color="#0000FF"><? echo $cpf; ?>
            <input name="cpf" type="hidden" id="cpf2" value="<? echo $cpf; ?>">
      </font></strong></td>

    </tr>

    <tr>

      <td><strong>Valor bruto de opera&ccedil;&atilde;o R$ </strong></td>

      <td><input name="valor_total" type="text" id="valor_total" value="<? echo $valor_total; ?>"></td>

      <td><strong>Base de Calculo</strong></td>

      <td><strong><font color="#0000FF">

        <input name="valor_credito" type="text" id="valor_credito" value="<? echo $valor_credito; ?>">

      </font></strong></td>

    </tr>

    <tr>

      <td><strong><font color="#000000">Quant de Parcelas</font></strong></td>

      <td><strong><font color="#0000FF">
        <select name="quant_parc" id="quant_parc">
        <option selected><? echo $quant_parc_gravado; ?><option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
          <option>13</option>
          <option>14</option>
          <option>15</option>
          <option>16</option>
          <option>17</option>
          <option>18</option>
          <option>19</option>
          <option>20</option>
          <option>21</option>
          <option>22</option>
          <option>23</option>
          <option>24</option>
          <option>25</option>
          <option>26</option>
          <option>27</option>
          <option>28</option>
          <option>29</option>
          <option>30</option>
          <option>31</option>
          <option>32</option>
          <option>33</option>
          <option>34</option>
          <option>35</option>
          <option>36</option>
          <option>37</option>
          <option>38</option>
          <option>39</option>
          <option>40</option>
          <option>41</option>
          <option>42</option>
          <option>43</option>
          <option>44</option>
          <option>45</option>
          <option>46</option>
          <option>47</option>
          <option>48</option>
          <option>49</option>
          <option>50</option>
          <option>51</option>
          <option>52</option>
          <option>53</option>
          <option>54</option>
          <option>55</option>
          <option>56</option>
          <option>57</option>
          <option>58</option>
          <option>59</option>
          <option>60</option>
          <option>61</option>
          <option>62</option>
          <option>63</option>
          <option>64</option>
          <option>65</option>
          <option>66</option>
          <option>67</option>
          <option>68</option>
          <option>69</option>
          <option>70</option>
          <option>71</option>
          <option>72</option>
          <option>73</option>
          <option>74</option>
          <option>75</option>
          <option>76</option>
          <option>77</option>
          <option>78</option>
          <option>79</option>
          <option>80</option>
          <option>81</option>
          <option>82</option>
          <option>83</option>
          <option>84</option>
          <option>85</option>
          <option>86</option>
          <option>87</option>
          <option>88</option>
          <option>89</option>
          <option>90</option>
          <option>91</option>
          <option>92</option>
          <option>93</option>
          <option>94</option>
          <option>95</option>
          <option>96</option>
          <option>97</option>
          <option>98</option>
          <option>99</option>
          <option>100</option>
        </select>
        <input name="valor_liberado" type="hidden" id="valor_liberado" value="<? echo $valor_liberado; ?>">
      </font></strong></td>

      <td><strong>Valor da parcela </strong></td>

      <td><input name="parcela" type="text" id="parcela2" value="<? echo $parcela; ?>"></td>

    </tr>

    <tr>

      <td><strong>Valor liquido cliente R$ </strong></td>

      <td><strong>

        <input name="valor_liquido_cliente" type="text" id="valor_liquido_cliente" value="<? echo $valor_liquido_cliente; ?>">

      </strong></td>

      <td>Bco da Opera&ccedil;&atilde;o </td>

      <td><strong><font color="#0000FF">
        <select name="bco_operacao" id="select3">
          <option selected><? echo $bco_operacao; ?></option>
          <?


    $sql = "select * from bco_operacao order by banco asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['banco']."</option>";
    }
?>
        </select>
        <? //echo $quoeficiente; ?>
            <input name="quoeficiente" type="hidden" id="quoeficiente" value="<? echo $quoeficiente; ?>">
      </font><font color="#0000FF">
      <input name="comissao_op" type="hidden" id="comissao_op" value="<? echo bcmul($valor_credito, $percentual_op, 2); ?>">
      <input name="valor_a_receber" type="hidden" id="valor_a_receber" value="<? echo bcmul($valor_credito, $quoeficiente, 2); ?>">
      <input name="valor_a_receber_comparativo" type="hidden" id="valor_a_receber_comparativo" value="<?
if(($tipo_proposta=="REFINANCIAMENTO") or ($tipo_proposta=="CONTRATO NOVO")){
echo bcmul($valor_total, $quoeficiente, 2)-$custo_operacao;

}
else{
echo bcmul($valor_credito, $quoeficiente, 2)-$custo_operacao;

}
	  
	  
	  
	    ?>">
      </font></strong></td>

    </tr>

    <tr>

      <td>N&ordm; Contrato</td>

      <td><input name="num_contrato_bco" type="text" id="num_contrato_bco" value="<? echo $num_contrato_bco; ?>"></td>

      <td>Tabela</td>

      <td><select name="tabela" id="tabela">
        <option selected><? echo $tabela; ?></option>
        <?
    $sql = "select * from tabelas order by tabela asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['tabela']."</option>";
    }
?>
      </select></td>

    </tr>

    <tr>

      <td>Inicio do Contrato</td>

      <td><select name="dia_parc" id="dia_parc">
        <option selected><? echo $dia_parc; ?></option>
        <option>01</option>
        <option>02</option>
        <option>03</option>
        <option>04</option>
        <option>05</option>
        <option>06</option>
        <option>07</option>
        <option>08</option>
        <option>09</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
        <option>21</option>
        <option>22</option>
        <option>23</option>
        <option>24</option>
        <option>25</option>
        <option>26</option>
        <option>27</option>
        <option>28</option>
        <option>29</option>
        <option>30</option>
        <option>31</option>
      </select>
        <select name="mes_parc" id="mes_parc">
          <option selected><? echo $mes_parc; ?></option>
          <option>01</option>
          <option>02</option>
          <option>03</option>
          <option>04</option>
          <option>05</option>
          <option>06</option>
          <option>07</option>
          <option>08</option>
          <option>09</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
        </select>
        <select name="ano_parc" id="ano_parc">
          <option selected>
            <?

$ano_atual = date('Y');
$proximo_ano = bcadd($ano_atual,1);

if(empty($ano_parc)){
	
echo "$ano_atual";

}
else{
	
echo "$ano_parc";
	
}

	  ?>
          </option>
          <option><? echo "$proximo_ano"; ?></option>
      </select>
      <input name="percentual_entrada" type="hidden" id="percentual_entrada" value="0"></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td>Final do Contrato</td>

      <td>
<?
	  
$sql = "SELECT * FROM contas_a_receber where num_proposta = '$num_proposta' order by vencto desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros_contas_a_receber_proposta = mysql_num_rows($res);



$venctocontrato = $linha['8'];
	  
}


$venctodocontrato = explode("-", $venctocontrato);

$ano_vencto_contrato = $venctodocontrato[0];
$mes_vencto_contrato = $venctodocontrato[1];
$dia_vencto_contrato = $venctodocontrato[2];


if($registros_contas_a_receber_proposta>=1){
	
echo "$dia_vencto_contrato-$mes_vencto_contrato-$ano_vencto_contrato";

}
else{
	
echo "Nao calculado!";
	
}

?>
         
         <input name="venctocontrato" type="hidden" id="venctocontrato" value="<? echo $venctocontrato; ?>">
         <input name="dia_vencto_contrato" type="hidden" id="dia_vencto_contrato" value="<? echo $dia_vencto_contrato; ?>">
         <input name="mes_vencto_contrato" type="hidden" id="mes_vencto_contrato" value="<? echo $mes_vencto_contrato; ?>">
         <input name="ano_vencto_contrato" type="hidden" id="ano_vencto_contrato" value="<? echo $ano_vencto_contrato; ?>"></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td colspan="2"><div align="center">Observa&ccedil;&otilde;es</div></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td colspan="2"><textarea name="obs2" cols="45" rows="7" id="obs2"><? echo $obs3; ?></textarea></td>

      <td colspan="2"><textarea name="parecer_credito" cols="45" rows="7" readonly="readonly" id="parecer_credito"><?  

$sql = "SELECT * FROM observacoes_parecer_credito where num_proposta = '$num_proposta' order by codigo desc";

$res = mysql_query($sql);

$reg = 0;

//echo "<tr>";

while($linha=mysql_fetch_row($res)) {



$codigo = $linha[0];

$num_proposta_cli = $linha[1];

$cpf = $linha[2];

$data = $linha[3];

$hora = $linha[4];

$parecer_de_credito = $linha[5];

$operador = $linha[6];





echo "$data - "."$parecer_de_credito - "."$operador";

?>



<?



if($reg==1){

//echo "</tr>";

$reg=0;

}





}

	  

	  

	  

	  

	   ?>

      </textarea></td>

    </tr>

    <tr>

      <td colspan="2"><strong><font color="#0000FF">

        <input name="data_pagto_cliente" type="hidden" id="data_pagto_cliente" value="<? echo date('d-m-Y'); ?>">
        <input name="hora_pagto_cliente" type="hidden" id="hora_pagto_cliente" value="<? echo $hora_atual; ?>">
        <input name="dataalteracao" type="hidden" id="dataalteracao" value="<? echo date('d-m-Y'); ?>">

        <input name="horaalteracao" type="hidden" id="horaalteracao" value="<? echo date('H:i:s'); ?>">

        <input name="operador_alterou" type="hidden" id="operador3" value="<? echo $operador_alterou; ?>">

        <input name="cel_operador_alterou" type="hidden" id="cel_operador_alterou" value="<? echo $cel_operador_alterou; ?>">

        <input name="email_operador_alterou" type="hidden" id="email_operador_alterou" value="<? echo $email_operador_alterou; ?>">

        <input name="estabelecimento_alterou" type="hidden" id="estabelecimento_alterou" value="<? echo $estab_pertence; ?>">

        <input name="cidade_estabelecimento_alterou" type="hidden" id="cidade_estabelecimento_alterou" value="<? echo $cidade_estab_pertence; ?>">

        <input name="tel_estabelecimento_alterou" type="hidden" id="tel_estabelecimento_alterou" value="<? echo $tel_estab_pertence; ?>">

        <input name="email_estabelecimento_alterou" type="hidden" id="email_estabelecimento_alterou" value="<? echo $email_estab_pertence; ?>">

        <input name="recebido" type="hidden" id="recebido" value="<? echo N�o; ?>">

</font></strong></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

    <tr> 

      <td colspan="2"><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <input type="submit" name="Submit" value="Alterar Status da Proposta"> 

          <input type="reset" name="Submit2" value="Limpar"> </td><td><div align="right"> </div></td>

      <td>&nbsp;</td>

    </tr>

    <tr> 

      <td colspan="2">&nbsp;</td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

  </table>

</form>

<form name="form1" method="post" action="">

  <table width="100%" border="0" cellspacing="4">

    <tr>

      <td colspan="2"><strong>Cadastro efetuado por <br>

        </strong><strong><font color="#0000FF"><? echo $nome_operador; ?>

        

      </font></strong><strong><font color="#0000FF"> </font></strong></td>

      <td width="35%"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>

              <? echo $email_operador; ?>

      </font><font color="#0000FF"> </font></strong></td>

      <td width="20%"><strong>Celular:<font color="#0000FF"><br>

              <? echo $cel_operador; ?>

      </font><font color="#0000FF"> </font></strong></td>

      <td width="1%">&nbsp;</td>

    </tr>

    <tr>

      <td width="18%"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>

          <strong><font color="#0000FF"><? echo $estabelecimento_proposta; ?>        </font></strong><strong><font color="#0000FF"> </font></strong></td>

      <td width="26%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $tel_estabelecimento; ?>

      </font></strong></td>

      <td><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $email_estabelecimento; ?>

      </font><font color="#0000FF"> </font></strong></td>

      <td><strong>Cidade: <br>

            <font color="#0000FF"><? echo $cidade_estabelecimento; ?>          </font></strong></td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td><strong>Data do Cadastro <br>

              <font color="#0000FF"><? echo $datacadastro; ?> </font></strong></td>

      <td><strong>Hora que foi efetuado o Cadastro <br>

              <font color="#0000FF"><? echo $horacadastro; ?> </font></strong></td>

      <td><strong></strong></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

  </table>

  <?

  	$_SESSION['usuario'] = $usuario;

	$_SESSION['senha'] = $senha;

	?>

</form>

<form name="form1" method="post" action="">

<?



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];





$sql = "SELECT * FROM propostas where num_proposta = '$num_proposta'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {





$operador_alterou = $linha[44];

$cel_operador_alterou = $linha[45];

$email_operador_alterou = $linha[46];

$estabelecimento_alterou = $linha[47];

$cidade_estabelecimento_alterou = $linha[48];

$tel_estabelecimento_alterou = $linha[49];

$email_estabelecimento_alterou = $linha[50];

$dataalteracao = $linha[42];

$horaalteracao = $linha[43];

?>



  <table width="100%" border="0" cellspacing="4">

    <tr>

      <td colspan="2" valign="top" bgcolor="#CCCCCC"><strong>&Uacute;ltima altera&ccedil;&atilde;o efetuada pelo operador: <br>

      </strong><strong><font color="#0000FF"><? echo $operador_alterou; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>

      <td width="35%" valign="top" bgcolor="#CCCCCC"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>

              <? echo $email_operador_alterou; ?> </font><font color="#0000FF"> </font></strong></td>

      <td width="20%" valign="top" bgcolor="#CCCCCC"><strong>Celular:<font color="#0000FF"><br>

              <? echo $cel_operador_alterou; ?> </font><font color="#0000FF"> </font></strong></td>

      <td width="1%">&nbsp;</td>

    </tr>

    <tr>

      <td width="18%" valign="top" bgcolor="#CCCCCC"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>

          <strong><font color="#0000FF"><? echo $estabelecimento_alterou; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>

      <td width="26%" valign="top" bgcolor="#CCCCCC"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $tel_estabelecimento_alterou; ?> </font></strong></td>

      <td valign="top" bgcolor="#CCCCCC"><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $email_estabelecimento_alterou; ?> </font><font color="#0000FF"> </font></strong></td>

      <td valign="top" bgcolor="#CCCCCC"><strong>Cidade: <br>

            <font color="#0000FF"><? echo $cidade_estabelecimento_alterou; ?> </font></strong></td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td valign="top" bgcolor="#CCCCCC"><strong>Data da Altera&ccedil;&atilde;o <br>

            <font color="#0000FF"><? echo $dataalteracao; ?> </font></strong></td>

      <td valign="top" bgcolor="#CCCCCC"><strong>Hora que foi efetuado a Altera&ccedil;&atilde;o <br>

            <font color="#0000FF"><? echo $horaalteracao; ?> </font></strong></td>

      <td valign="top" bgcolor="#CCCCCC"><strong></strong></td>

      <td valign="top" bgcolor="#CCCCCC">&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

  </table>

  <? } ?>

</form>

<form name="form1" method="post" action="">

  <?



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];





$sql = "SELECT * FROM adm where usuario = '$usuario' and senha = '$senha'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {





$operador_alterou = $linha[1];

$cel_operador_alterou = $linha[19];

$email_operador_alterou = $linha[20];

$estabelecimento_alterou = $linha[44];

$cidade_estabelecimento_alterou = $linha[45];

$tel_estabelecimento_alterou = $linha[46];

$email_estabelecimento_alterou = $linha[47];



?>

  <table width="100%" border="0" cellspacing="4">

    <tr>

      <td colspan="2"><strong><font color="#FF0000">Cadastro atualmente sendo alterado por: </font></strong></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td colspan="2"><strong>Ol&aacute;! Seja bem vindo<br>

      </strong><strong><font color="#0000FF"><? echo $operador_alterou; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>

      <td width="35%"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>

              <? echo $email_operador_alterou; ?> </font><font color="#0000FF"> </font></strong></td>

      <td width="20%"><strong>Celular:<font color="#0000FF"><br>

              <? echo $cel_operador_alterou; ?> </font><font color="#0000FF"> </font></strong></td>

      <td width="1%">&nbsp;</td>

    </tr>

    <tr>

      <td width="18%"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>

          <strong><font color="#0000FF"><? echo $estabelecimento_alterou; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>

      <td width="26%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $tel_estabelecimento_alterou; ?> </font></strong></td>

      <td><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $email_estabelecimento_alterou; ?> </font><font color="#0000FF"> </font></strong></td>

      <td><strong>Cidade: <br>

            <font color="#0000FF"><? echo $cidade_estabelecimento_alterou; ?> </font></strong></td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td><strong><font color="#0000FF"> </font><font color="#0000FF"> </font></strong></td>

      <td>&nbsp;</td>

      <td><strong></strong></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

  </table>

<? } ?>

</form>

</body>

</html>

