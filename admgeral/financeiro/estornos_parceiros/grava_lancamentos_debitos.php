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

<title>Untitled Document</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

.style1 {

	font-size: 24px;

	font-weight: bold;

}

.style4 {

	font-size: 18px;

	font-weight: bold;

}

.style5 {font-size: 18px}

.style9 {font-size: 14px; font-weight: bold; }

.style10 {font-size: 14px}

-->

</style></head>



<?



require '../../../conect/conect.php';



			

$sql = "SELECT * FROM fundo_navegacao";

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {

?>





<body bgcolor="#<? printf("$linha[1]"); ?>"



background="../background/<? printf("$linha[1]"); ?>" leftmargin="0" topmargin="0" bgproperties="fixed" marginwidth="0" marginheight="0" 

  

<? } ?>

<?

$sql = "SELECT * FROM background";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

?>>

  

<? } ?>

<?

// dados do aluno

$dia = date('d');

$mes = date('m');

$ano = date('Y');

$datacadastro = date('d-m-Y');

$horacadastro = date('H:i:s');

$nome_operador = $_POST['nome_operador'];

$valor = $_POST['valor'];

$descricao = $_POST['descricao'];


//dados do operador



$operador = $_POST['operador'];

$cel_operador = $_POST['cel_operador'];

$email_operador = $_POST['email_operador'];

$estabelecimento = $_POST['estabelecimento'];

$cidade_estabelecimento = $_POST['cidade_estabelecimento'];

$tel_estabelecimento = $_POST['tel_estabelecimento'];

$email_estabelecimento = $_POST['email_estabelecimento'];







?>



<?



$comando = "insert into estornos_parceiros(nome_operador,valor,descricao,dia,mes,ano,datacadastro,horacadastro,status,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento)
values('$nome_operador','$valor','$descricao','$dia','$mes','$ano','$datacadastro','$horacadastro','A DEBITAR','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento')";



mysql_query($comando,$conexao) or die("Erro ao registrar a estorno de correspondente!... Tente novamente");



echo "Estorno registrado com sucesso!<br><br>";







$sql = "SELECT * FROM estornos_parceiros order by codigo desc limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$codigo = $linha[0];

$nome_operador = $linha[1];

$valor = $linha[2];

$descricao = $linha[3];

$datacadastro = $linha[4];

$horacadastro = $linha[5];

$dia = $linha[6];

$mes = $linha[7];

$ano = $linha[8];

$status = $linha[9];


$operador = $linha[10];
$cel_operador = $linha[11];
$email_operador = $linha[12];
$estabelecimento = $linha[13];
$cidade_estabelecimento = $linha[14];
$tel_estabelecimento = $linha[15];
$email_estabelecimento = $linha[16];

}

?>









<?

$sql = "SELECT * FROM allcred limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$nfantasia = $linha[2];

$email_empresa = $linha[14];

$site = $linha[15];



}

	

	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO

	$email_dest   =   $email_empresa;

	

	//PREPARA O PEDIDO

	$mens   =  "Ol� Alessandra! Foi registrado uma entrada no caixa da $nfantasia   \n";

	$mens  .=  "Verifique abaixo \n\n";

	

	$mens  .=  "C�digo do Aluno : ".$codigo_aluno."                                                    \n";

	$mens  .=  "Nome: ".$nome."                                                       \n";

	$mens  .=  "Nome do Respons�vel: ".$nome_resp."                                                       \n";

	$mens  .=  "Curso : ".$curso."                                                    \n";

	$mens  .=  "Dura��o : ".$duracao."                                                    \n";

	$mens  .=  "Mensalide : R$ ".$mensalidade."                                                    \n";

	$mens  .=  "Vencimento: ".$vencto."                                                    \n";

	$mens  .=  "Valor Recebido: ".$valor_recebido."                                                    \n";

	$mens  .=  "Quita��o : ".$quitacao."                                                    \n";

	$mens  .=  "Observa��es: ".$obs."                                                       \n";

	$mens  .=  "Data do registro: ".$datacadastro."                                                       \n";

	$mens  .=  "hora do registro: ".$horacadastro."                                                       \n";

	

	$mens  .=  "Operador que efetuou o cadastro: ".$operador."                                                    \n";

	$mens  .=  "Celular: ".$cel_operador."                                                    \n";

	$mens  .=  "E-Mail: ".$email_operador."                                                    \n";

	$mens  .=  "Estabelecimento: ".$estabelecimento."                                                    \n";

	$mens  .=  "Cidade: ".$cidade_estabelecimento."                                                    \n";

	$mens  .=  "Telefone: ".$tel_estabelecimento."                                                    \n";

	$mens  .=  "E-Mail: ".$email_estabelecimento."                                                    \n";



	

	//DISPARA O EMAIL

	//$envia  =  mail($email_dest, "Entrada no caixa da $nfantasia em ".$datacadastro, $mens,"From:".$email_dest."\r\nBcc:".$email);



?>

<table width="100%"  border="0">

  <tr>

    <td width="18%"><form name="form1" method="post" action="lancamentos_debitos.php">

      <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

      <input type="submit" name="Submit2" value="Voltar">

    </form></td>

    <td width="2%">&nbsp;</td>

    <td width="23%">&nbsp;</td>

    <td width="3%">&nbsp;</td>

    <td width="20%">&nbsp;</td>

    <td width="34%">&nbsp;</td>

  </tr>

</table>

<table width="100%"  border="1">

  <tr>

    <td colspan="4"><div align="center" class="style1">Aviso de lan&ccedil;amento de estorno de comiss&atilde;o n&ordm; <? echo $codigo; ?></div></td>

  </tr>

  <tr>

    <td width="21%"><span class="style4">Data do lan&ccedil;amento </span></td>

    <td width="20%"><span class="style9"><? echo $datacadastro; ?></span></td>

    <td width="23%"><span class="style4">Hora do lan&ccedil;amento </span></td>

    <td width="36%"><span class="style9"><? echo $horacadastro; ?></span></td>

  </tr>

  <tr>

    <td>&nbsp;</td>

    <td><span class="style10"></span></td>

    <td><span class="style5"></span></td>

    <td><span class="style10"></span></td>

  </tr>

  <tr>

    <td><span class="style5"><strong>Correspondente</strong></span></td>

    <td><span class="style9"><? echo $nome_operador; ?></span></td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td>&nbsp;</td>

    <td><span class="style10"></span></td>

    <td>&nbsp;</td>

    <td><span class="style10"></span></td>

  </tr>

  <tr>

    <td><span class="style5"><strong>Valor</strong></span></td>

    <td><span class="style9"><? echo "R$ ".$valor; ?></span></td>

    <td>&nbsp;</td>

    <td><span class="style10"></span></td>

  </tr>

  <tr>

    <td>&nbsp;</td>

    <td><span class="style10"></span></td>

    <td>&nbsp;</td>

    <td><span class="style10"></span></td>

  </tr>

  <tr>

    <td><span class="style5"><strong>Descri&ccedil;&atilde;o</strong></span></td>

    <td colspan="3"><span class="style9"><? echo $descricao; ?></span></td>

  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td><span class="style10"><strong>N&ordm; do lan&ccedil;amento no sistema <? echo $codigo; ?></strong></span></td>

  </tr>

</table>

<p></p>

<table width="100%" border="1" cellspacing="4">

  <tr>

    <td colspan="2"><strong>Cadastro efetuado por <br>

    </strong><strong><font color="#0000FF"><? echo $operador; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>

    <td width="35%"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>

            <? echo $email_operador; ?> </font><font color="#0000FF"> </font></strong></td>

    <td width="20%"><strong>Celular:<font color="#0000FF"><br>

            <? echo $cel_operador; ?> </font><font color="#0000FF"> </font></strong></td>
  </tr>

  <tr>

    <td width="18%"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>

        <strong><font color="#0000FF"><? echo $estabelecimento; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>

    <td width="26%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>

            <? echo $tel_estabelecimento; ?> </font></strong></td>

    <td valign="top"><strong><font color="#000000">Assinatura Alessandro : </font><font color="#0000FF"><br>

            <? //echo $email_estabelecimento; ?> </font><font color="#0000FF"> </font></strong></td>

<td><strong>Cidade: <br>

          <font color="#0000FF"><? echo $cidade_estabelecimento; ?> </font></strong></td>
  </tr>
</table>

<p>&nbsp;</p>

<p>&nbsp;</p>

</body>

</html>

<?

mysql_close($conexao);

?>