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

$sql = "SELECT * FROM fundo_navegacao";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$cordefundo = $linha[1];								 
	
}



?>



<html>

<head>

<title>ABERTURA DE CHAMADO NO TELEMARKETING</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

<!--

	.style1 {
	color: #0000FF;
	font-weight: bold;
	font-size: 14px;
	}


.style2 {	color: #0000FF;

	font-weight: bold;

}

.style3 {color: #FF0000}
	
.style5 {
	color: #0000FF;
	font-weight: bold;
	font-size: 14px;
}
.style6 {color: #FF0000}



-->

</style>

</head>


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





<body bgcolor="<? echo "$cordefundo"; ?>" leftmargin="0" topmargin="0" bgproperties="fixed" marginwidth="0" marginheight="0">

<?

$cpf = $_POST['cpf'];

$dia_abertura = date('d');

$mes_abertura = date('m');

$ano_abertura = date('Y');

$hora_abertura = $hora_atual;
$hora_manutencao = $hora_atual;
$status = "Em Manutenção";

$data_manutencao = "$ano_abertura-$mes_abertura-$dia_abertura";



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];





$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha' limit 1";
$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {

$operador = $linha[1];

$estab_pertence = $linha[44];

$cidade_estab_pertence = $linha[45];

}

?>



<?

$sql = "SELECT * FROM clientes where cpf = '$cpf' limit 1";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {



$cod_cliente = $linha[0];

$nome = $linha[1];

$sexo = $linha[2];

$estadocivil = $linha[3];

$cpf = $linha[4];

$rg = $linha[5];

$orgao = $linha[6];

$emissao = $linha[7];

$data_nasc = $linha[8];

$pai = $linha[9];

$mae = $linha[10];

$endereco = $linha[11];

$numero = $linha[12];

$bairro = $linha[13];

$complemento = $linha[14];

$cidade = $linha[15];

$estado = $linha[16];

$cep = $linha[17];

$telefone = $linha[18];

$celular = $linha[19];

$email = $linha[20];

$obs = $linha[28];

$datacadastro = $linha[29];

$horacadastro = $linha[30];

$dataalteracao = $linha[31];

$horaalteracao = $linha[32];

$tipo = $linha[40];

$banco = $linha[41];

$agencia = $linha[42];

$conta = $linha[43];

$num_beneficio = $linha[44];



$parc1 = $linha[45];

$banco1 = $linha[46];

$vencto1 = $linha[47];

$compra1 = $linha[48];



$parc2 = $linha[49];

$banco2 = $linha[50];

$vencto2 = $linha[51];

$compra2 = $linha[52];



$parc3 = $linha[53];

$banco3 = $linha[54];

$vencto3 = $linha[55];

$compra3 = $linha[56];



$parc4 = $linha[57];

$banco4 = $linha[58];

$vencto4 = $linha[59];

$compra4 = $linha[60];



$parc5 = $linha[61];

$banco5 = $linha[62];

$vencto5 = $linha[63];

$compra5 = $linha[64];



$parc6 = $linha[65];

$banco6 = $linha[66];

$vencto6 = $linha[67];

$compra6 = $linha[68];



$parc7 = $linha[69];

$banco7 = $linha[70];

$vencto7 = $linha[71];

$compra7 = $linha[72];



$num_beneficio2 = $linha[73];

$num_beneficio3 = $linha[74];

$num_beneficio4 = $linha[75];



$dataprev2 = $linha[76];

$dataprev = $linha[76];

//$obs2 = $linha[77];

$mes_niver = $linha[88];

$salario1 = $linha[93];

$salario2 = $linha[94];

$salario3 = $linha[95];

$salario4 = $linha[96];

$tem_margem = $linha[107];

$quant_vezes_trabalhado = $linha[118];

$resposta = $linha[119];

$tipo_benef_1 = $linha[121];

$tipo_benef_2 = $linha[122];

$tipo_benef_3 = $linha[123];

$tipo_benef_4 = $linha[124];

$valorcontrato1 = $linha[125];
$valorcontrato2 = $linha[126];
$valorcontrato3 = $linha[127];
$valorcontrato4 = $linha[128];
$valorcontrato5 = $linha[129];
$valorcontrato6 = $linha[130];
$valorcontrato7 = $linha[131];


$valorliqcliente1 = $linha[132];
$valorliqcliente2 = $linha[133];
$valorliqcliente3 = $linha[134];
$valorliqcliente4 = $linha[135];
$valorliqcliente5 = $linha[136];
$valorliqcliente6 = $linha[137];
$valorliqcliente7 = $linha[138];


$telefone2 = $linha[139];
$telefone3 = $linha[140];

$celular2 = $linha[141];
$celular3 = $linha[142];

}

?>






<?

$sql = "SELECT * FROM telemarketing where cod_cliente = '$cod_cliente' and status = 'Em Manutenção' order by codigo desc limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$quantidade = mysql_num_rows($res);

}

if($quantidade==0){

$comando = "insert into telemarketing(data_abertura,data_manutencao,hora_manutencao,dia_abertura,mes_abertura,ano_abertura,hora_abertura,status,operador,estab_pertence,cidade_estab_pertence,cod_cliente,cpf,nome,telefone,celular) 

values('$data_manutencao','$data_manutencao','$hora_manutencao','$dia_abertura','$mes_abertura','$ano_abertura','$hora_abertura','$status','$operador','$estab_pertence','$cidade_estab_pertence','$cod_cliente','$cpf','$nome','$telefone','$celular')";



mysql_query($comando,$conexao);





$sql = "select * from db";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {


$quant_vezes_trabalhado2 = bcadd($quant_vezes_trabalhado,1);


$comando = "update `$linha[1]`.`clientes` set `codigo` = '$cod_cliente',`telemarketing` = 'Em Manutenção',`operador_manutencao` = '$operador',`data_manutencao` = '$data_manutencao',`cidade_estab_pertence_manutencao` = '$cidade_estab_pertence',`dia_liberado` = '',`mes_liberado` = '',`ano_liberado` = '',`hora_liberado` = '',`quant_vezes_trabalhado` = '$quant_vezes_trabalhado2' where `clientes`. `codigo` = '$cod_cliente' limit 1 ";

}



mysql_query($comando,$conexao);





}
else{

echo "<script>

alert('ATENÇÃO!!!... ESTE CLIENTE JÁ ESTÁ SENDO TRABALHADO VERIFIQUE SUA AGENDA!');
window.location = 'menu.php';

</script>";


}


?>



<?

$sql = "SELECT * FROM telemarketing where cod_cliente = '$cod_cliente' order by codigo desc limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$registro++;



$codigo_telemarketing = $linha[0];

$dia_abertura = $linha[1];

$mes_abertura = $linha[2];

$ano_abertura = $linha[3];

$hora_abertura = $linha[4];



$status = $linha[6];

$operador = $linha[7];

$estab_pertence = $linha[8];

$cidade_estab_pertence = $linha[9];



$dia_ligar = $linha[15];

$mes_ligar = $linha[16];

$ano_ligar = $linha[17];

$hora_ligar = $linha[18];

$proposta = $linha[24];

$data_ligar = $linha[29];

$data_abertura = $linha[28];
$data_ligar = $linha[29];
$data_manutencao = $linha[30];
$hora_manutencao = $linha[31];


}

?>


<?
$sql = "SELECT * FROM clientes where cpf = '$cpf' limit 1";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$quant_vezes_trabalhado = $linha[118];


}

?>


<p align="center"><strong><font color="#0000FF" size="4">Registro de Telemarketing </font><font color="#0000FF"><? echo $codigo_telemarketing; ?></font></strong></p>

<form name="form1" method="post" action="grava_contato_telemarketing.php">



<table width="100%" border="0" cellspacing="4">

    <tr> 

      <td><input name="codigo" type="hidden" id="codigo2" value="<? echo $codigo_telemarketing; ?>">
      Cliente j&aacute; foi trabalhado </td>

      <td><? echo $quant_vezes_trabalhado;  ?> vez(es)
      <input name="quant_vezes_trabalhado" type="hidden" id="quant_vezes_trabalhado" value="<? echo $quant_vezes_trabalhado; ?>"></td>

      <td>N&ordm; de Matr&iacute;cula </td>

      <td><strong><font color="#0000FF"><? echo $cod_cliente; ?></font>

          <input name="cod_cliente" type="hidden" id="cod_cliente" value="<? echo $cod_cliente; ?>">

      </strong></td>
    </tr>

    <tr> 

      <td>Nome</td>

      <td><input class="class02" name="nome" type="text" id="nome2" value="<? echo $nome; ?>" size="50" maxlength="50"></td><td>Tipo</td>

      <td><strong>
        <select class="class02" name="tipo" id="tipo">
          <option selected><? echo $tipo; ?></option>
          <?





    $sql = "select * from tipos order by tipo asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['tipo']."</option>";

    }

?>
        </select>
      </strong></td>
    </tr>

    <tr>
      <td>Endere&ccedil;o</td>
      <td><input class="class02" name="endereco" type="text" id="endereco" value="<? echo $endereco; ?>" size="50" maxlength="30"></td>
      <td>N&uacute;mero</td>
      <td><input class="class02" name="numero" type="text" id="numero2" value="<? echo $numero; ?>" size="10" maxlength="10"></td>
    </tr>
    <tr>
      <td>Bairro</td>
      <td><input class="class02" name="bairro" type="text" id="bairro" value="<? echo $bairro; ?>" size="50" maxlength="50"></td>
      <td>Complemento</td>
      <td><input class="class02" name="complemento" type="text" id="endereco4" value="<? echo $complemento; ?>" size="50" maxlength="50"></td>
    </tr>
    <tr>
      <td>Cidade</td>
      <td><select class="class02" name="cidade" id="estado">
        <option selected><? echo $cidade; ?></option>
        <?





    $sql = "select * from cidades order by cidade asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['cidade']."</option>";

    }

?>
      </select></td>
      <td>Estado</td>
      <td><select class="class02" name="estado" id="select7">
        <option selected><? echo $estado; ?></option>
        <?





    $sql = "select * from estados_do_brasil order by estado asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['estado']."</option>";

    }

?>
      </select> 
        CEP 
        <input class="class02" name="cep" type="text" id="cep" value="<? echo $cep; ?>" size="9" maxlength="9"></td>
    </tr>
    <tr> 

      <td width="22%">Data Nasc </td>

      <td width="28%"><input class="class02" name="data_nasc" type="text" id="data_nasc" value="<? echo $data_nasc; ?>" size="15" maxlength="10">

        m&ecirc;s do anivers&aacute;rio

      <input class="class02" name="mes_niver" type="text" id="mes_niver" value="<? echo $mes_niver; ?>" size="4" maxlength="2"></td>

      <td width="16%">Orienta&ccedil;&atilde;o sexual</td>

      <td width="34%"><select class='class02' name="sexo" id="sexo">
        <option selected><? echo "$sexo"; ?>
          <option>
            <?

    $sql = "select * from orientacaosexual order by sexo asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['sexo']."</option>";

    }

?>
      </select>        <font color="#0000FF">&nbsp; </font></td>
    </tr>

    <tr> 

      <td>Estado Civil </td>

      <td><select class='class02' name="estadocivil" id="estadocivil">
        <option selected><? echo $estadocivil; ?></option>
        <?





    $sql = "select * from estado_civil order by estadocivil asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option value=" .$x['estadocivil']. ">".$x['estadocivil']."</option>";

    }

?>
      </select></td>

      <td>CPF</td>

      <td><input class='class02' name="cpf" type="text" id="cpf" value="<? echo $cpf; ?>">      </td>
    </tr>

    <tr>

      <td>RG</td>

      <td><input class='class02' name="rg" type="text" id="rg" value="<? echo $rg; ?>" size="25" maxlength="25">        &Oacute;rg&atilde;o 

      <input class='class02' name="orgao" type="text" id="cpf3" value="<? echo $orgao; ?>" size="10" maxlength="10"></td>

      <td>Emiss&atilde;o</td>

      <td><input class='class02' name="emissao" type="text" id="cpf4" value="<? echo $emissao; ?>" size="15" maxlength="10"></td>
    </tr>

    <tr> 

      <td>Celular 1</td>

      <td><input class='class02' name="celular" type="text" id="telefone" value="<? echo $celular; ?>" size="15" maxlength="14"></td>

      <td>Telefone 1</td>

      <td><input class='class02' name="telefone" type="text" id="endereco5" value="<? echo $telefone; ?>" size="15" maxlength="14"></td>
    </tr>

    <tr>
      <td>Celular 2</td>
      <td><input class='class02' name="celular2" type="text" id="celular2" value="<? echo $celular2; ?>" size="15" maxlength="14"></td>
      <td>Telefone 2</td>
      <td><input class='class02' name="telefone2" type="text" id="telefone2" value="<? echo $telefone2; ?>" size="15" maxlength="14"></td>
    </tr>
    <tr>
      <td>Celular 3</td>
      <td><input class='class02' name="celular3" type="text" id="celular3" value="<? echo $celular3; ?>" size="15" maxlength="14"></td>
      <td>Telefone 3</td>
      <td><input class='class02' name="telefone3" type="text" id="telefone3" value="<? echo $telefone3; ?>" size="15" maxlength="14"></td>
    </tr>
    <tr>
      <td>Banco para pagto  do cliente </td>
      <td><select class='class02' name="banco" id="banco">
        <option selected><? echo $banco; ?></option>
        <?

    $sql = "select * from bancos order by banco asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['banco']."</option>";

    }

?>
      </select></td>
      <td>Agencia</td>
      <td><input class='class02' name="agencia" type="text" id="agencia" value="<? echo $agencia; ?>"></td>
    </tr>
    <tr>
      <td>Conta</td>
      <td><input class='class02' name="conta" type="text" id="conta" value="<? echo $conta; ?>"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>

      <td>N&ordm; Benef&iacute;cio </td>

      <td><input class='class02' name="num_beneficio" type="text" id="num_beneficio5" value="<? echo $num_beneficio; ?>"></td>
      <td>Senha DATAPREV </td>
      <td><input class='class02' name="dataprev" type="text" id="num_beneficio23" value="<? echo $dataprev; ?>"></td>
    </tr>

    <tr>
      <td>Tipo</td>
      <td><select class='class02' name="tipo_benef_1" id="tipo_benef_">
          <option selected><? echo $tipo_benef_1; ?></option>
          <?


    $sql = "select * from tipos_benef order by tipo asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['tipo']."</option>";
    }
?>
        </select></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>

      <td>N&ordm; Benef&iacute;cio2</td>

      <td><input class='class02' name="num_beneficio2" type="text" id="num_beneficio22" value="<? echo $num_beneficio2; ?>"></td>
      <td>Tem Margem nova?</td>
      <td><input class='class02' name="tem_margem" type="text" id="tem_margem" value="<? echo $tem_margem; ?>"></td>
    </tr>

    <tr>
      <td>Tipo</td>
      <td><select class='class02' name="tipo_benef_2" id="tipo_benef_2">
          <option selected><? echo $tipo_benef_2; ?></option>
          <?


    $sql = "select * from tipos_benef order by tipo asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['tipo']."</option>";
    }
?>
        </select></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>

      <td>N&ordm; Benef&iacute;cio 3 </td>

      <td><input class='class02' name="num_beneficio3" type="text" id="num_beneficio32" value="<? echo $num_beneficio3; ?>"></td>
      <td>Como Conheceu a Empresa?</td>
      <td><select class='class02' name="resposta" id="resposta">
        <option selected><? echo $resposta; ?></option>
        <?

    $sql = "select * from como_conheceu_empresa order by resposta asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['resposta']."</option>";

    }

?>
      </select></td>
    </tr>

    <tr>
      <td>Tipo</td>
      <td><select class='class02' name="tipo_benef_3" id="tipo_benef_3">
        <option selected><? echo $tipo_benef_3; ?></option>
        <?


    $sql = "select * from tipos_benef order by tipo asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['tipo']."</option>";
    }
?>
      </select></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>

      <td>N&ordm; Benef&iacute;cio 4</td>

      <td><input class='class02' name="num_beneficio4" type="text" id="num_beneficio4" value="<? echo $num_beneficio4; ?>"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>

    <tr>
      <td>Tipo</td>
      <td><select class='class02' name="tipo_benef_4" id="select6">
        <option selected><? echo $tipo_benef_4; ?></option>
        <?


    $sql = "select * from tipos_benef order by tipo asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['tipo']."</option>";
    }
?>
      </select></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4"><div align="center">
        <table width="100%" border="0">
          <tr>
            <td width="20%"><div align="center">Banco</div></td>
            <td width="13%"><div align="center">Valor Parcela </div></td>
            <td width="20%"><div align="center">Valor Contrato</div></td>
            <td width="20%"><div align="center">Valor Quita&ccedil;&atilde;o </div></td>
            <td width="20%"><div align="center">Valor Liq. Cliente</div></td>
            <td width="20%"><div align="center">Tipo Opera&ccedil;&atilde;o</div></td>
            <td width="20%"><div align="center">Parcelas Pagas</div></td>
          </tr>
          <tr>
            <td><div align="center">
                <input class='class02' name="banco1" type="text" id="banco1" value="<? echo $banco1; ?>">
            </div></td>
            <td><div align="center">
                <input class='class02' name="parc1" type="text" id="parc1" value="<? echo $parc1; ?>">
            </div></td>
            <td><div align="center">
              <input class='class02' name="valorcontrato1" type="text" id="valorcontrato1" value="<? echo $valorcontrato1; ?>">
            </div></td>
            <td><div align="center">
                <input class='class02' name="compra1" type="text" id="compra1" value="<? echo $compra1; ?>">
            </div></td>
            <td><div align="center">
              <input class='class02' name="valorliqcliente1" type="text" id="valorliqcliente1" value="<? echo $valorliqcliente1; ?>">
            </div></td>
            <td><div align="center">
                <input class='class02' name="vencto1" type="text" id="vencto1" value="<? echo $vencto1; ?>">
            </div></td>
            <td><div align="center">
                <input class='class02' name="saldo1" type="text" id="saldo1" value="<? echo $saldo1; ?>">
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <input class='class02' name="banco2" type="text" id="banco2" value="<? echo $banco2; ?>">
            </div></td>
            <td><p align="center">
                <input class='class02' name="parc2" type="text" id="parc2" value="<? echo $parc2; ?>">
            </p></td>
            <td><div align="center">
              <input class='class02' name="valorcontrato2" type="text" id="valorcontrato2" value="<? echo $valorcontrato2; ?>">
            </div></td>
            <td><div align="center">
                <input class='class02' name="compra2" type="text" id="compra3" value="<? echo $compra2; ?>">
            </div></td>
            <td><div align="center">
              <input class='class02' name="valorliqcliente2" type="text" id="valorliqcliente2" value="<? echo $valorliqcliente2; ?>">
            </div></td>
            <td><div align="center">
                <input class='class02' name="vencto2" type="text" id="vencto2" value="<? echo $vencto2; ?>">
            </div></td>
            <td><div align="center">
                <input class='class02' name="saldo2" type="text" id="saldo2" value="<? echo $saldo2; ?>">
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <input class='class02' name="banco3" type="text" id="banco3" value="<? echo $banco3; ?>">
            </div></td>
            <td><div align="center">
                <input class='class02' name="parc3" type="text" id="parc3" value="<? echo $parc3; ?>">
            </div></td>
            <td><div align="center">
              <input class='class02' name="valorcontrato3" type="text" id="valorcontrato3" value="<? echo $valorcontrato3; ?>">
            </div></td>
            <td><div align="center">
                <input class='class02' name="compra3" type="text" id="compra4" value="<? echo $compra3; ?>">
            </div></td>
            <td><div align="center">
              <input class='class02' name="valorliqcliente3" type="text" id="valorliqcliente3" value="<? echo $valorliqcliente3; ?>">
            </div></td>
            <td><div align="center">
                <input class='class02' name="vencto3" type="text" id="vencto3" value="<? echo $vencto3; ?>">
            </div></td>
            <td><div align="center">
                <input class='class02' name="saldo3" type="text" id="saldo3" value="<? echo $saldo3; ?>">
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <input class='class02' name="banco4" type="text" id="banco4" value="<? echo $banco4; ?>">
            </div></td>
            <td><div align="center">
                <input class='class02' name="parc4" type="text" id="parc4" value="<? echo $parc4; ?>">
            </div></td>
            <td><div align="center">
              <input class='class02' name="valorcontrato4" type="text" id="valorcontrato4" value="<? echo $valorcontrato4; ?>">
            </div></td>
            <td><div align="center">
                <input class='class02' name="compra4" type="text" id="compra5" value="<? echo $compra4; ?>">
            </div></td>
            <td><div align="center">
              <input class='class02' name="valorliqcliente4" type="text" id="valorliqcliente4" value="<? echo $valorliqcliente4; ?>">
            </div></td>
            <td><div align="center">
                <input class='class02' name="vencto4" type="text" id="vencto4" value="<? echo $vencto4; ?>">
            </div></td>
            <td><div align="center">
                <input class='class02' name="saldo4" type="text" id="saldo4" value="<? echo $saldo4; ?>">
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <input class='class02' name="banco5" type="text" id="banco5" value="<? echo $banco5; ?>">
            </div></td>
            <td><div align="center">
                <input class='class02' name="parc5" type="text" id="parc5" value="<? echo $parc5; ?>">
            </div></td>
            <td><div align="center">
              <input class='class02' name="valorcontrato5" type="text" id="valorcontrato5" value="<? echo $valorcontrato5; ?>">
            </div></td>
            <td><div align="center">
                <input class='class02' name="compra5" type="text" id="compra6" value="<? echo $compra5; ?>">
            </div></td>
            <td><div align="center">
              <input class='class02' name="valorliqcliente5" type="text" id="valorliqcliente5" value="<? echo $valorliqcliente5; ?>">
            </div></td>
            <td><div align="center">
                <input class='class02' name="vencto5" type="text" id="vencto5" value="<? echo $vencto5; ?>">
            </div></td>
            <td><div align="center">
                <input class='class02' name="saldo5" type="text" id="saldo5" value="<? echo $saldo5; ?>">
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <input class='class02' name="banco6" type="text" id="banco6" value="<? echo $banco6; ?>">
            </div></td>
            <td><div align="center">
                <input class='class02' name="parc6" type="text" id="parc6" value="<? echo $parc6; ?>">
            </div></td>
            <td><div align="center">
              <input class='class02' name="valorcontrato6" type="text" id="valorcontrato6" value="<? echo $valorcontrato6; ?>">
            </div></td>
            <td><div align="center">
                <input class='class02' name="compra6" type="text" id="compra7" value="<? echo $compra6; ?>">
            </div></td>
            <td><div align="center">
              <input class='class02' name="valorliqcliente6" type="text" id="valorliqcliente6" value="<? echo $valorliqcliente6; ?>">
            </div></td>
            <td><div align="center">
                <input class='class02' name="vencto6" type="text" id="vencto6" value="<? echo $vencto6; ?>">
            </div></td>
            <td><div align="center">
                <input class='class02' name="saldo6" type="text" id="saldo6" value="<? echo $saldo6; ?>">
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <input class='class02' name="banco7" type="text" id="banco7" value="<? echo $banco7; ?>">
            </div></td>
            <td><div align="center">
                <input class='class02' name="parc7" type="text" id="parc7" value="<? echo $parc7; ?>">
            </div></td>
            <td><div align="center">
              <input class='class02' name="valorcontrato7" type="text" id="valorcontrato7" value="<? echo $valorcontrato7; ?>">
            </div></td>
            <td><div align="center">
                <input class='class02' name="compra7" type="text" id="compra8" value="<? echo $compra7; ?>">
            </div></td>
            <td><div align="center">
              <input class='class02' name="valorliqcliente7" type="text" id="valorliqcliente7" value="<? echo $valorliqcliente7; ?>">
            </div></td>
            <td><div align="center">
                <input class='class02' name="vencto7" type="text" id="vencto7" value="<? echo $vencto7; ?>">
            </div></td>
            <td><div align="center">
                <input class='class02' name="saldo7" type="text" id="saldo7" value="<? echo $saldo7; ?>">
            </div></td>
          </tr>
        </table>
      </div></td>
    </tr>
    <tr>

      <td colspan="4">Operador <? echo $operador; ?> - Ag&ecirc;ncia <? echo $estab_pertence; ?> - Cidade <? echo $cidade_estab_pertence; ?></td>
    </tr>

    <tr>

      <td colspan="4"><div align="center">

        <?

$hoje = date('d/m/Y')+1;



$dias_atraso = ($hoje-$vencto)*-1;

 ?>

      </div></td>
    </tr>

    <tr>

      <td>Abertura de chamada </td>

      <td colspan="2"><? echo "$dia_abertura"."/"."$mes_abertura"."/"."$ano_abertura "." as $hora_abertura"; ?></td>

      <td>&nbsp;</td>
    </tr>

    <tr>
      <td>Manuten&ccedil;&atilde;o sendo efetuada em</td>
      <td colspan="2"><?  echo "$data_manutencao as $hora_manutencao"; ?>
          <input name="data_manutencao" type="hidden" id="data_manutencao" value="<? echo $data_manutencao;  ?>">
          <input name="hora_manutencao" type="hidden" id="hora_manutencao" value="<? echo $hora_manutencao;  ?>"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>

      <td>Pr&oacute;xima Liga&ccedil;&atilde;o 

      <strong>      </strong></td>

      <td colspan="2">      <strong><font color="#0000FF">

</font>      <font color="#0000FF">

Dia

        <select class='class02' name="dia_ligar" id="dia_ligar">

          <option selected><? echo $dia_ligar; ?></option>

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

- M&ecirc;s

<select class='class02' name="mes_ligar" id="select">

  <option selected><? echo $mes_ligar; ?></option>

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

- ano

<select class='class02' name="ano_ligar" id="select2">

  <option selected><? $ano_ligar; ?></option>

  <option><? $ano_atual = date('Y'); echo $ano_atual; ?></option>

  <option><? $proximo_ano = bcadd($ano_atual,1); echo "$proximo_ano"; ?></option>
</select> 

- Hora 



<select class='class02' name="hora_ligar" id="select3">

  <option selected><? echo $hora_ligar; ?></option>

  <option>08:00:00</option>

  <option>08:30:00</option>

  <option>09:00:00</option>

  <option>09:30:00</option>

  <option>10:00:00</option>

  <option>10:30:00</option>

  <option>11:00:00</option>

  <option>11:30:00</option>

  <option>12:00:00</option>

  <option>12:30:00</option>

  <option>13:00:00</option>

  <option>13:30:00</option>

  <option>14:00:00</option>

  <option>14:30:00</option>

  <option>15:00:00</option>

  <option>15:30:00</option>

  <option>16:00:00</option>

  <option>16:30:00</option>

  <option>17:00:00</option>

  <option>17:30:00</option>

  <option>18:00:00</option>
</select>

</font></strong></td>

      <td>Status 

        <select class='class02' name="status" id="select4">

          <option><? echo $status; ?></option>

          <option>Em manutenção</option>

          <option>Liberado</option>
        </select> 

        Efetuou Proposta 

        <select class='class02' name="proposta" id="select5">

          <option><? echo $proposta; ?></option>

          <option>Sim</option>

          <option selected>Não</option>
      </select></td>
    </tr>

    <tr>

      <td>Observa&ccedil;&otilde;es</td>

      <td colspan="3"><textarea class='class02' name="obs" cols="100" rows="10" id="textarea"><? echo $obs2; ?></textarea></td>
    </tr>

    <tr>

      <td>&nbsp;</td>

      <td colspan="3"><textarea class='class02' name="obs_cli" cols="100" rows="10" readonly="readonly" id="obs_cli"><?  

$sql = "SELECT * FROM obs_telemarketing where cod_cliente = '$cod_cliente' order by codigo desc";

$res = mysql_query($sql);

$reg = 0;

//echo "<tr>";

while($linha=mysql_fetch_row($res)) {



$codigo = $linha[0];

$cod_cliente = $linha[1];

$dia = $linha[2];

$mes = $linha[3];

$ano = $linha[4];

$hora = $linha[5];

$operador = $linha[6];

$estab_pertence = $linha[7];

$cidade_estab_pertence = $linha[8];

$obs = $linha[9];



echo "$dia/$mes/$ano - $hora - "."$operador - $estab_pertence - $cidade_estab_pertence - "."$obs";

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

      <td colspan="2"><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

      <input class='class01' type="submit" name="Submit" value="Gravar contato">          </td><td><div align="right"> </div></td>

      <td>&nbsp;</td>
    </tr>

    <tr> 

      <td colspan="2">&nbsp;</td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>
    </tr>
  </table>

</form>

<table width="100%"  border="0">

  <tr bgcolor="#ffffff">

    <td><div align="center" class="style2">N&ordm; da Proposta </div></td>

    <td><div align="center" class="style2">Data Proposta </div></td>

    <td><div align="center" class="style2">Data T&eacute;rmino </div></td>

    <td><div align="center" class="style2">Valor Cr&eacute;dito Solicitado </div></td>

    <td width="11%"><div align="center" class="style2">Quant parcelas </div></td>

    <td width="12%"><div align="center" class="style2">Valor parcelas </div></td>

    <td><div align="center" class="style2">Status</div></td>

  </tr>

  <?

			

$sql = "SELECT * FROM propostas where cpf = '$cpf' order by num_proposta desc";

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





$parc1 = $linha[52];

$banco1 = $linha[53];

$vencto1 = $linha[54];

$compra1 = $linha[55];



$num_beneficio2 = $linha[80];

$num_beneficio3 = $linha[81];

$num_beneficio4 = $linha[82];



$tipo_proposta = $linha[83];

$bco_operacao = $linha[86];

$num_contrato_banco = $linha[105];

$num_bordero = $linha[129];



$valor_liberado = $linha[97];





?>

  <tr>

    <td width="17%"><div align="center">

        <form action="../propostas/imprimir_proposta.php" method="post" name="form2" target="_blank">

          <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

          <input name="num_proposta" type="hidden" id="num_proposta" value="<? echo $linha[0]; ?>">

          <? // printf("<a href='editar_proposta.php?chamar=$linha[0]' >$linha[0]</a>"); ?>

          <? printf("$linha[0]"); ?>

          <input class='class01' type="submit" name="Submit2" value="Visualizar Proposta">

        </form>

    </div></td>

    <td width="14%"><div align="center"><? echo $dataproposta; ?></div></td>

    <td width="13%"><div align="center"><? echo $compra1; ?></div></td>

    <td width="17%"><div align="center"><? printf("R$ $linha[25]</a> ");?> </div></td>

    <td><div align="center"><? printf("$linha[26]"); ?> </div></td>

    <td><div align="center"><? printf("R$ $linha[27]"); ?> </div></td>

    <td width="16%"><div align="center"><? printf("$linha[51]"); ?> </div></td>

    <?

if($reg==1){

echo "</tr>";

$reg=0;

}

?>

    <? } ?>

</table>

</body>

</html>

