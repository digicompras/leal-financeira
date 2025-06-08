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

<title>MENU PRINCIPAL DE TELEMARKETING</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

<!--



.style2 {	color: #0000FF;

	font-weight: bold;

}
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



require '../../conect/conect.php';



$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$consultar = $_POST['consultar'];
//$operador = $_POST['operador'];


$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];





$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha' limit 1";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {





$operador = $linha[1];

$estab_pertence = $linha[44];

$cidade_estab_pertence = $linha[45];



}





			

$sql = "SELECT * FROM fundo_navegacao";

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {

?>





<body bgcolor="#ffffff"



background="../background/<? printf("$linha[1]"); ?>" leftmargin="0" topmargin="0" bgproperties="fixed" marginwidth="0" marginheight="0" 

  

<? } ?>

<?

$sql = "SELECT * FROM background";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

?>>

  

<? } ?><br>

  <table width="100%" border="0" cellspacing="10">

    <tr>

      <td colspan="4"><?

error_reporting(E_ALL);



?>
<?
$sql = "SELECT * FROM limite_diario_telemarketing limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {


$limite = $linha[1];
$quant_vezes_trabalhado = $linha[2];

}

?>      </td>
    </tr>

    <tr>

      <td width="18%"><form name="form1" method="post" action="../index.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input type="submit" name="Submit22" value="Voltar ao menu principal">

      </form></td>

      <td colspan="3"><strong><font color="#0000FF" size="4">Fa&ccedil;a a busca com o nome ou parte dele para abrir o chamado de Telemarketing na cidade de <? echo $cidade_estab_pertence;  ?></font></strong></td>
    </tr>

    <tr>

      <td>&nbsp;</td>

      <td width="25%"><form name="form2" method="post" action="agenda.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <input type="submit" name="Submit" value="Verificar Agenda">

      </form></td>
      <td width="31%" class="style5">A busca retornar&aacute; aleatoriamente os <? echo $limite ?> clientes que ja foram trabalhados <span class="style6"><? echo $quant_vezes_trabalhado;  ?> </span>vez(s)</td>
      <td>&nbsp;</td>
    </tr>

    <tr>

      <td><div align="center">

        <?

if($nome=="TODOS"){

if(empty($cidade)){

$sql = "select * from clientes where quant_vezes_trabalhado = '$quant_vezes_trabalhado' and telemarketing = 'Liberado'";

}
else{

if(empty($cidade)){

$sql = "select * from clientes where quant_vezes_trabalhado = '$quant_vezes_trabalhado' and telemarketing = 'Liberado'";

}
else{

$sql = "select * from clientes where cidade = '$cidade' and quant_vezes_trabalhado = '$quant_vezes_trabalhado' and telemarketing = 'Liberado'";

}

}

$res = mysql_query($sql);

$total = mysql_num_rows($res);

echo "Total de registros encontrados ".$total;

}

else{


$sql = "select * from clientes where cidade = '$cidade' and quant_vezes_trabalhado = '$quant_vezes_trabalhado' and telemarketing = 'Liberado'";


$res = mysql_query($sql);

$total = mysql_num_rows($res);

echo "Total de registros encontrados ".$total;



}





?>

</div></td> 

      <td colspan="2"><form name="form4" method="post" action="menu.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input name="nome" type="text" id="nome" value="TODOS" size="50">
        Cidade
        <select name="cidade" id="estado">
          <option selected><? if(empty($cidade)){ echo $cidade_estab_pertence; } else{ echo $cidade; } ?></option>
          <?





    $sql = "select * from clientes group by cidade order by cidade asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['cidade']."</option>";

    }

?>
        </select>
        <input type="submit" name="Submit4" value="Buscar">

      </form></td>

      <td width="26%">&nbsp;</td>
    </tr>
</table>

<?

if(empty($nome)) {

echo "Digite o nome do cliente ou parte dele na caixa acima e clique em buscar para executar sua pesquisa.";


}

?>

  <table width="100%"  border="1">

    <tr>

      <td valign="middle"><div align="center" class="style2">Telemarketing</div></td>

      <td><div align="center" class="style2">Nome do Cliente </div></td>

      <td><div align="center" class="style2">Quant vezes trabalhado</div></td>
      <td><div align="center" class="style2">Operador</div></td>

      <td><div align="center" class="style2">Cidade</div></td>

      <td><div align="center" class="style2">Data e hora da libera&ccedil;&atilde;o </div></td>
    </tr>

    <?



if($nome=="TODOS"){

if(empty($cidade)){

$sql = "select * from clientes where quant_vezes_trabalhado = '$quant_vezes_trabalhado' and telemarketing = 'Liberado'  order by rand() limit $limite";

}
else{

$sql = "select * from clientes where cidade = '$cidade' and quant_vezes_trabalhado = '$quant_vezes_trabalhado' and telemarketing = 'Liberado'  order by rand() limit $limite";

}
}

else{

if(empty($nome)){

if(empty($cidade)){

$sql = "select * from clientes where nome = '.'  and quant_vezes_trabalhado = '$quant_vezes_trabalhado' and telemarketing = 'Liberado' order by rand() limit $limite";

}
else{

$sql = "select * from clientes where nome = '.'  and cidade = '$cidade' and quant_vezes_trabalhado = '$quant_vezes_trabalhado' and telemarketing = 'Liberado' order by rand() limit $limite";

}

}

else{

if(empty($cidade)){

$sql = "select * from clientes where nome like '$nome%' and quant_vezes_trabalhado = '$quant_vezes_trabalhado' and telemarketing = 'Liberado'  order by rand() limit $limite";

}
else{

$sql = "select * from clientes where nome like '$nome%' and cidade = '$cidade' and quant_vezes_trabalhado = '$quant_vezes_trabalhado' and telemarketing = 'Liberado'  order by rand() limit $limite";


}

}

}

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$codigo = $linha[0];

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

$operador = $linha[21];

$cel_operador = $linha[22];

$email_operador = $linha[23];

$estabelecimento = $linha[24];

$cidade_estabelecimento = $linha[25];

$tel_estabelecimento = $linha[26];

$email_estabelecimento = $linha[27];

$obs = $linha[28];

$datacadastro = $linha[29];

$horacadastro = $linha[30];

$dataalteracao = $linha[31];

$horaalteracao = $linha[32];

$operador_alterou = $linha[33];

$cel_operador_alterou = $linha[34];

$email_operador_alterou = $linha[35];

$estabelecimento_alterou = $linha[36];

$cidade_estabelecimento_alterou = $linha[37];

$tel_estabelecimento_alterou = $linha[38];

$email_estabelecimento_alterou = $linha[39];

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

$obs2 = $linha[77];



$tipo_benef_1 = $linha[78];

$tipo_benef_2 = $linha[79];

$tipo_benef_3 = $linha[80];

$tipo_benef_4 = $linha[81];



$mes_nasc = $linha[82];





$cpf_rg = $linha[83];

$comp_end = $linha[84];

$comp_quit1 = $linha[85];

$comp_quit2 = $linha[86];

$comp_quit3 = $linha[87];

$comp_quit4 = $linha[88];

$comp_quit5 = $linha[89];

$comp_quit6 = $linha[90];

$comp_renda = $linha[91];

$cpf_rg_testemunha = $linha[92];

$telemarketing = $linha[100];

$operador_manutencao = $linha[101];

$cidade_estab_pertence_manutencao = $linha[102];

$dia_liberado = $linha[103];

$mes_liberado = $linha[104];

$ano_liberado = $linha[105];

$hora_liberado = $linha[106];

$quant_vezes_trabalhado = $linha[118];


?>



    <tr>

      <td width="15%" ><form name="form1" method="post" action="abrir_telemarketing.php" >

        

            <div align="center">

            <input name="cpf" type="hidden" id="codigo2" value="<? echo $cpf;  ?>">

            <? if($telemarketing<>"Em Manutenção"){ echo "<input type='submit' name='Submit42' value='Abrir Telemarketing'>"; } else{ echo "<span class='style3'>EM Manutenção</span>"; } ?>
            </div>

      </form></td>

      <td width="24%" valign="top"><div align="center">
        <form action="../clientes/editar_cliente.php" method="post" name="form3" target="_blank">
          <span class="<? if($telemarketing=="Em Manutenção"){echo"style3"; } else{ echo "style1"; } ?>"><? echo $nome; ?></span>
          <input name="cpf" type="hidden" id="cpf" value="<? echo $cpf;  ?>">
          <input type="submit" name="button" id="button" value="Consultar">
        </form>
      </div></td>

      <td width="13%" valign="top"><div align="center"><span class="<? if($telemarketing=="Em Manuten&ccedil;&atilde;o"){echo"style3"; } else{ echo "style1"; } ?>"><? echo $quant_vezes_trabalhado; ?></span></div></td>
      <td width="18%" valign="top"><div align="center"><span class="<? if($telemarketing=="Em Manutenção"){echo"style3"; } else{ echo "style1"; } ?>"><? echo $operador_manutencao; ?></span></div></td>

      <td width="16%" valign="top"><div align="center"><span class="<? if($telemarketing=="Em Manutenção"){echo"style3"; } else{ echo "style1"; } ?>"><?  echo $cidade; ?></span></div></td>

      <td width="14%" valign="top"><div align="center"><span class="<? if($telemarketing=="Em Manuten&ccedil;&atilde;o"){echo"style3"; } else{ echo "style1"; } ?>">

        <?  if($dia_liberado<>""){  echo "$dia_liberado"."/"."$mes_liberado"."/"."$ano_liberado"." - "."$hora_liberado"; } ?>

      </span></div></td>
    </tr>

    <? } ?>
</table>

<p>&nbsp;</p>

</body>

</html>

