<?

session_start(); //inicia sess�o...
if ($_SESSION["usuario"] == true) //verifica se a vari�vel "usuario" � verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a vari�vel "senha" � verdadeira...
echo ""; //se for emite mensagem positiva.
else //se n�o for...
header("Location: alerta.php");

require '../../conect/conect.php';

?>
<html>
<head>
<title>Untitled Document</title>
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
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$background = $linha[1];

}
?>

<body background="../../background/<? echo "$background"; ?>">


<?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$estabelecimento_proposta = $_POST['estabelecimento_proposta'];


$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nfantasia = $linha[2];
$email_empresa = $linha[14];
$site = $linha[15];

}





$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$nome_op = $linha[1];
$celular_op = $linha[19];
$email_op = $linha[20];
$estab_pertence = $linha[44];
$cidade_estab_pertence = $linha[45];
$tel_estabPertence = $linha[46];
$email_estab_pertence = $linha[47];
}

$cpf = $_POST['cpf'];


$sql = "SELECT * FROM propostas_veiculos where cpf = '$cpf' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg++;

$num_proposta = $linha[0];
$cpf_cli = $linha[11];
$nome = $linha[9];
}
?>
  <?
if($reg==1){
echo "ATEN��O!!!...O cliente "?>
  <span class="style1"><? echo $nome; ?></span><? echo " j� est� possui proposta na $nfantasia!<br><br>Verifique antes de PREENCHER PROPOSTA!";
//$reg=0;
}
else
{
echo "Cliente N�O possui proposta na $nfantasia!<br><br> Clique em PREENCHER PROPOSTA!";
}

?>

  <?
$sql = "SELECT * FROM fundo_intermediaria";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$cor = $linha[1];	
?>
  <? } ?>
<table width="100%"  border="0">
  <tr>
    <td width="26%"><form name="form1" method="post" action="pesquiza_cpf.php">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input class="class01" type="submit" name="Submit3" value="Voltar">
    </form>	</td>
    <td width="34%"><form action="informacoes_antecedem_efetuar_proposta.php" method="post" name="form1">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input name="cpf" type="hidden" id="cpf" value="<? echo $cpf; ?>">
      <input name="estabelecimento_proposta" type="hidden" id="estabelecimento_proposta" value="<? echo $estabelecimento_proposta; ?>">
      <input class="class01" type="submit" name="Submit2" value="Preencher Proposta">
    </form></td>
    <td width="40%">&nbsp;</td>
  </tr>
</table>




      <table width="100%"  border="0">
        <tr>
          <td><div align="center"><span class="style2">
            <?
$cpf = $_POST['cpf'];
			
$sql = "SELECT * FROM propostas_veiculos where cpf = '$cpf' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$nome = $linha[4];



?>
          Listando todas as propostas do cliente:</span> <span class="style2"><? printf("$linha[4]"); ?><BR>
		   CPF:  <? echo $cpf; ?>        <? } ?> </span></div></td>
        </tr>
      </table>
      
<table width="100%"  border="0">
              <tr>
                <td>
</td>
              </tr>
</table>            
      <table width="100%"  border="0">
        <tr bgcolor="#<? echo $cor ?>">
          <td><div align="center"><span class="style3">N&ordm; da Proposta </span></div></td>
          <td><div align="center" class="style3">Data</div></td>
          <td width="14%"><div align="center" class="style3">Nome</div></td>
          <td width="16%"><div align="center" class="style3">CPF</div></td>
          <td width="16%"><div align="center" class="style3">Loja</div></td>
          <td width="9%"><div align="center" class="style3">Valor Liberado </div></td>
          <td width="9%"><div align="center" class="style3">Status</div></td>
          <td><span class="style3"></span></td>
        </tr>
      <?
$cpf = $_POST['cpf'];
			
$sql = "SELECT * FROM propostas_veiculos where cpf = '$cpf' order by num_proposta desc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$num_proposta = $linha[0];
$dataproposta = $linha[1];
$estabelecimento_proposta = $linha[4];
$operador_atendente = $linha[5];

$status = $linha[6];
$nome = $linha[9];
$cpf = $linha[12];
$valor_liberado = $linha[106];

?>            

        <tr>

          <td width="16%"><div align="center" class="style3">
              <form action="imprimir_proposta.php" method="post" name="form2" target="_blank">
                <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
                <input name="num_proposta" type="hidden" id="codigo2" value="<? echo $linha[0]; ?>">
                <? // printf("<a href='editar_proposta.php?chamar=$linha[0]' >$linha[0]</a>"); ?>
                <? printf("$linha[0]"); ?>
                <input class="class01" type="submit" name="Submit" value="Visualizar">
            </form>
          </div></td>
          <td width="6%"><div align="center" class="style3"><? echo $dataproposta; ?> </div></td>
          <td><div align="center"><span class="style3"><? echo $nome; ?></span></div></td>
          <td><div align="center"><span class="style3"><? echo $cpf; ?></span></div></td>
          <td><div align="center"><span class="style3"><? echo $estabelecimento_proposta; ?></span> </div></td>
          <td><div align="center"><span class="style3"><? echo $valor_liberado; ?></span></div></td>
          <td><div align="center" class="style3"><? echo $status; ?> </div></td>
          <td width="14%"><div align="center"><span class="style3"></span> </div></td>
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
