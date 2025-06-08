<?php
session_start(); //inicia sessão...
if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
else //se não for...
header("Location: alerta.php");

ini_set('default_charset','UTF8_general_mysql500_ci');

?>

<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-repeat: no-repeat;
	background-attachment: fixed;

}
.style1 {
	color: #0000FF;
	font-weight: bold;
}

-->
</style>

</head>

<?

require '../../conect/conect.php';


error_reporting(E_ALL);
error_reporting( E_ALL ^E_NOTICE );

$codigolancamento = $_POST['codigolancamento'];

$solicitacao = $_POST['solicitacao'];


?>

<?
$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


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
$usuario_op = $linha[40];
$senha_op = $linha[41];
$tipo_op = $linha[42];
$funcao = $linha[43];
$estab_pertence = $linha[44];
$cidade_estab_pertence = $linha[45];
$tel_estab_pertence = $linha[46];
$email_estab_pertence = $linha[47];
$salario = $linha[48];
$vale_alimentacao = $linha[49];
$gratificacao = $linha[50];
$comissao = $linha[51];
$emprestimo = $linha[52];
$admissao = $linha[53];
$demissao = $linha[54];
$meta = $linha[55];
$status = $linha[56];
$bloqueio_parcial = $linha[57];
$tempo_almoco = $linha[58];



}

?>

<?

//include '../../conect/verificahora.php';

?>


<?
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$background = $linha[1];

}
?>

<body background="../../background/<? echo "$background"; ?>">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
      <td width="19%">&nbsp;</td>
      <td colspan="2"><div align="center"><strong><font color="#0000FF" size="4">O que deseja fazer com os clientes?</font></strong></div></td>
      <td width="2%">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><form name="form1" method="post" action="../index.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input class='class01' type="submit" name="Submit22" value="Voltar ao menu principal">
      </form></td>
      <td background="../../imagens/fundocelulas1.png"><form name="form2" method="post" action="menu.php">
        <div align="center"> <strong>Pesquisa por n&ordm; de Pedido de Margem / Portabilidade</strong>
          <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
          <input name="codigolancamento" class='class02' type="text" id="codigolancamento" value="<? echo $codigolancamento; ?>" size="10">
          <input name="solicitacao" type="hidden" id="solicitacao" value="<? echo "abrir"; ?>">
          <input class='class01' type="submit" name="button2" id="button2" value="Pesquisar">
        </div>
      </form></td>
      <td width="29%" background="../../imagens/fundocelulas1.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="16%" background="../../imagens/fundocelulas1.png"><div align="center"></div></td>
    <td width="19%" background="../../imagens/fundocelulas1.png"><div align="center">
      <form action="menu.php" method="post" name="form2">
        <input name="solicitacao" type="hidden" id="solicitacao" value="<? echo "cadastrarcliente"; ?>">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input class='class01' type="submit" name="Submit2" value="Cadastrar Cliente ">
      </form>
    </div></td>
    <td width="23%" background="../../imagens/fundocelulas1.png"><div align="center">
      <form name="form3" method="post" action="menu.php">
        <input name="solicitacao" type="hidden" id="solicitacao" value="<? echo "editarcliente"; ?>">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <? if($funcao<>"Agente"){ echo"<input class='class01' type='submit' name='Submit3' value='Editar Cliente por CPF'>"; } ?>
      </form>
    </div></td>
    <td width="28%" background="../../imagens/fundocelulas1.png"><div align="center">
      <form name="form5" method="post" action="menu.php">
        <input name="solicitacao" type="hidden" id="solicitacao" value="<? echo "editarclienteporcodigo"; ?>">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <? if($funcao<>"Agente"){ echo"<input class='class01' type='submit' name='button' id='button' value='Editar Cliente por N&ordm; de Matr&iacute;cula'>";  }?>
      </form>
    </div></td>
    <td width="14%" background="../../imagens/fundocelulas1.png"><div align="center"></div></td>
  </tr>
  <tr>
    <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    <td colspan="3" background="../../imagens/fundocelulas1.png"><div align="center">
      <form name="form4" method="post" action="menu.php">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <input class='class02' name="nome" type="text" id="nome" value="TODOS" size="50">
        <input class='class01' type="submit" name="Submit5" value="Buscar">
      </form>
    </div></td>
    <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
  </tr>
</table>
<?
 if($solicitacao=="cadastrarcliente"){ ?>
<form action="verifica.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="30%"  border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="35%" background="../../imagens/fundocelulas2.png">
        <div align="center">
 <?         
      echo "Informe o CPF do cliente a ser pesquisado<br>
      <input class=='class02' type='text' name='cpf' id='cpf'>
	  ";
	  
	  ?>
          
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      </div></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png"><div align="center">
        <input class='class01' type="submit" name="Submit" value="Verificar">
      </div></td>
    </tr>
  </table>
</form>
<p>
  <? } ?>
  <?
 if($solicitacao=="editarcliente"){ ?>
</p>
<form action="editar_cliente.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="30%"  border="0" align="center">
    <tr>
      <td width="10%" background="../../imagens/fundocelulas2.png">
        <div align="center">
          <?
      echo "Informe o CPF do cliente a ser alterado<br>
  <input class='class02' name='cpf' type='text' id='cpf'>";
  ?>
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          <input class="class01" type="submit" name="Submit3" value="Editar Cliente">
      </div></td>
    </tr>
  </table>
</form>
<p>
  <? } ?>
  <?
 if($solicitacao=="editarclienteporcodigo"){ ?>
</p>
<form action="editar_cliente_por_codigo.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="30%"  border="0" align="center">
    <tr>
      <td width="10%" background="../../imagens/fundocelulas2.png"><div align="center">
        <?
      echo "Informe o Codigo do cliente a ser alterado<br>
  <input class='class02' name='codigo' type='text' id='codigo'>";
  ?>
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input class="class01" type="submit" name="Submit4" value="Editar Cliente">
      </div></td>
    </tr>
  </table>
</form>
<p>
  <? } ?>
</p>
<table width="80%"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td background="../../imagens/fundocelulas2.png"><div align="center"><strong>Nome do Cliente </strong></div></td>
    <td background="../../imagens/fundocelulas2.png"><div align="center"><strong>Quant vezes Trabalhado</strong></div></td>
    <td background="../../imagens/fundocelulas2.png"><div align="center"><strong>Cadastro efetuado por</strong></div></td>
    <td background="../../imagens/fundocelulas2.png"><div align="center"><strong>Estab. Pertence</strong></div></td>
    <td background="../../imagens/fundocelulas2.png"><div align="center"><strong>Telemarketing</strong></div></td>
    <td background="../../imagens/fundocelulas2.png"><div align="center"><strong>Data/hora libera&ccedil;&atilde;o </strong></div></td>
  </tr>
  <?
$nome = $_POST['nome'];



if($nome=="TODOS"){

$sql = "select * from clientes order by nome asc";

}

else{

if(empty($nome)){

$sql = "select * from clientes where nome = '.' order by nome asc";



}

else{

$sql = "select * from clientes where nome like '%$nome%' order by nome asc";

}}

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
    <td width="20%" valign="top" background="../../imagens/fundocelulas1.png"><div align="center">
      <form name="form1" method="post" action="editar_cliente.php" >
        <div align="center">
          <input name="cpf" type="hidden" id="codigo2" value="<? echo $cpf;  ?>">
          <input class='class01' type="submit" name="Submit42" value="<? echo $nome; ?>">
        </div>
      </form>
    </div></td>
    <td width="19%" valign="top" background="../../imagens/fundocelulas1.png"><div align="center"><span class="<? if($telemarketing=="Em Manuten&ccedil;&atilde;o"){echo"style3"; } else{ echo "style1"; } ?>"><? echo $quant_vezes_trabalhado; ?></span></div></td>
    <td width="17%" valign="top" background="../../imagens/fundocelulas1.png"><div align="center"><strong><font color="#0000FF"><? echo $operador; ?></font></strong></div></td>
    <td width="13%" valign="top" background="../../imagens/fundocelulas1.png"><div align="center"><strong><font color="#0000FF"><? echo $estab_pertence; ?></font></strong></div></td>
    <td width="16%" valign="top" background="../../imagens/fundocelulas1.png"><div align="center">
      <form name="form1" method="post" action="../telemarketing/abrir_telemarketing.php" >
        <div align="center">
          <input name="cpf" type="hidden" id="cpf" value="<? echo $cpf;  ?>">
          <? if($telemarketing<>"Em Manutenção"){ echo "<input class='class01' type='submit' name='Submit42' value='Abrir Telemarketing'>"; } else{ echo "<span class='style3'>$telemarketing</span>"; } ?>
        </div>
      </form>
    </div></td>
    <td width="15%" valign="top" background="../../imagens/fundocelulas1.png"><div align="center"><span class="<? if($telemarketing=="Em Manuten&ccedil;&atilde;o"){echo"style3"; } else{ echo "style1"; } ?>">
      <?  if($dia_liberado<>""){  echo "$dia_liberado"."/"."$mes_liberado"."/"."$ano_liberado"." - "."$hora_liberado"; } ?>
    </span></div></td>
  </tr>
  <? } ?>
</table>
<p>&nbsp;</p>
<form name="form1" method="post" action="margem_a_verificar.php">
  <?

$sql = "SELECT * FROM margem_portabilidade where codigo = '$codigolancamento' and (status = 'Analisado' or status = 'Pendente') order by codigo asc";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$codigolancamento = $linha[0];

$cod_cli = $linha[18];

$nome = $linha[1];

$cpf = $linha[2];

$operador_solicitante = $linha[5];

$num_beneficio = $linha[8];

$num_beneficio2 = $linha[9];

$num_beneficio3 = $linha[10];

$num_beneficio4 = $linha[11];

$horacadastro = $linha[15];

$datacadastro = $linha[17];

$secretaria = $linha[21];

$status = $linha[19];

$tipo = $linha[20];

$rg = $linha[22];

$mae = $linha[23];

$data_nasc = $linha[24];

$senha_servidor = $linha[25];

$fazer_portabilidade = $linha[26];

$data_resposta = $linha[27];

$hora_resposta = $linha[28];

$obs = $linha[29];

$margem_disponivel = $linha[30];



?>
  <table width="100%" border="0" align="center">
    <tr>
      <td colspan="2" background="../../imagens/fundocelulas2.png">Resposta do pedido N&ordm; <? echo $codigolancamento; ?></td>
      <td width="6%" background="../../imagens/fundocelulas2.png">Status</td>
      <td width="11%" background="../../imagens/fundocelulas2.png"><table width="100%" border="1">
        <tr>
          <td><? echo $status; ?></td>
        </tr>
      </table></td>
      <td width="16%" background="../../imagens/fundocelulas2.png"><div align="center">Data / Hora da resposta: </div></td>
      <td width="21%" background="../../imagens/fundocelulas2.png"><table width="100%" border="1">
        <tr>
          <td><? echo "$data_resposta / $hora_resposta"; ?></td>
        </tr>
      </table></td>
      <td width="6%" background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td width="6%" background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td width="6%" background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td width="6%" background="../../imagens/fundocelulas2.png">&nbsp;</td>
    </tr>
    <tr>
      <td width="15%" background="../../imagens/fundocelulas2.png">Margem Disponivel</td>
      <td colspan="2" background="../../imagens/fundocelulas2.png"><table width="100%" border="1">
        <tr>
          <td><? echo $margem_disponivel; ?></td>
        </tr>
      </table></td>
      <td background="../../imagens/fundocelulas2.png"><div align="right"></div></td>
      <td background="../../imagens/fundocelulas2.png"><div align="center">CPF: <? echo $cpf; ?></div></td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png">Observa&ccedil;&otilde;es</td>
      <td colspan="4" background="../../imagens/fundocelulas2.png"><table width="100%" border="1">
        <tr>
          <td><? echo $obs; ?></td>
        </tr>
      </table></td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
    </tr>
  </table>
  <? } ?>
</form>
<table width="100%" border="0" align="center">
  <tr>
    <td colspan="5" background="../../imagens/fundocelulas1.png"><div align="center"></div></td>
  </tr>
  <?

echo "<form name='form1' method='post' action='margem_a_verificar.php'>

  <tr>
    <td><div align='center'>
      <input name='solicitacao' type='hidden' id='solicitacao' value='gravar_parcela'>
      <input name='codigolancamento' type='hidden' id='codigolancamento' value='$codigolancamento'>
      <input name='cod_cli' type='hidden' id='cod_cli' value='$cod_cli'>
      <input name='status' type='hidden' id='status' value='A VERIFICAR'>
      Valor Parcela</div></td>
    <td><div align='center'>Banco a ser Portado</div></td>
    <td><div align='center'>Valor Liberado</div></td>
    <td><div align='center'>Parcelas em Aberto</div></td>
    <td><div align='center'>Prazo do contrato</div></td>
    <td><div align='center'>Faixa RCO</div></td>
  </tr>";
  

$sql = "SELECT * FROM parcelas_pedido_margem where pedido = '$codigolancamento' and (status = 'Analisado' or status = 'Pendente') order by codigo asc";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$pedido = $linha[0];
$valor_parcela = $linha[8];
$banco_a_ser_portado = $linha[9];
$valor_liberado = $linha[10];
$parcelas_em_aberto = $linha[11];
$prazo_do_contrato = $linha[12];
$faixa_rco = $linha[14];


echo "<tr>
          <td><table width='100%' border='1'><tr><td><div align='center'>$valor_parcela</div></td></tr></table></td>
          <td><table width='100%' border='1'><tr><td><div align='center'>$banco_a_ser_portado</div></td></tr></table></td>
          <td><table width='100%' border='1'><tr><td><div align='center'>$valor_liberado</div></td></tr></table></td>
          <td><table width='100%' border='1'><tr><td><div align='center'>$parcelas_em_aberto</div></td></tr></table></td>
          <td><table width='100%' border='1'><tr><td><div align='center'>$prazo_do_contrato</div></td></tr></table></td>
          <td><table width='100%' border='1'><tr><td><div align='center'>$faixa_rco</div></td></tr></table></td>
        </tr>";
		
}
	

?>
</table>
<p>&nbsp;</p>
</body>
</html>
