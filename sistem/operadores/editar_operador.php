<?php
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
<title>CADASTRO DE CLIENTES</title>
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



<form name="form1" method="post" action="../index.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input class="class01" type="submit" name="button" id="button" value="Voltar">
</form>
<?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
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
$usuario_op = $linha[40];
$senha_op = $linha[41];
$funcao = $linha[43];
?>
<? } ?>
<?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$operador_alterou = $linha[1];
$cel_operador_alterou = $linha[19];
$email_operador_alterou = $linha[20];
$estabelecimento_alterou = $linha[24];
$cidade_estabelecimento_alterou = $linha[25];
$tel_estabelecimento_alterou = $linha[26];
$email_estabelecimento_alterou = $linha[27];

?>
<? } ?>
<form name="form1" method="post" action="grava_editar_operador.php">

<table width="60%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr> 
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png"><strong><font color="#0000FF" size="4">Tela de edi&ccedil;&atilde;o do cadastro 
        de operadores!</font></strong></td>
      <td background="../../imagens/fundocelulas2.png">C&oacute;digo<strong><font color="#0000FF"><? echo $codigo; ?></font>
          <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>">
      </strong></td>
    <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png">Nome</td>
      <td background="../../imagens/fundocelulas2.png">Fun&ccedil;&atilde;o</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png"><input class="class02" name="nome" type="text" id="nome2" value="<? echo $nome; ?>" size="50" maxlength="50" readonly="true"></td>
      <td background="../../imagens/fundocelulas2.png"><strong>
        <input class="class02" name="funcao" type="text" id="funcao" value="<? echo $funcao; ?>" readonly="true">
      </strong></td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png">Data Nasc </td>
      <td background="../../imagens/fundocelulas2.png">Sexo</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td width="5%" background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td width="47%" background="../../imagens/fundocelulas2.png"><input class="class02" name="data_nasc" type="text" id="data_nasc" value="<? echo $data_nasc; ?>" size="15" maxlength="10" readonly="true"></td>
      <td width="41%" background="../../imagens/fundocelulas2.png"><font color="#0000FF">
        <input class="class02" name="sexo" type="text" id="sexo" value="<? echo $sexo; ?>" readonly="true">
      </font></td>
      <td width="6%" background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td width="1%">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png">Estado Civil </td>
      <td background="../../imagens/fundocelulas2.png">CPF</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png"><input class="class02" name="estadocivil" type="text" id="estadocivil" value="<? echo $estadocivil; ?>" readonly="true"></td>
      <td background="../../imagens/fundocelulas2.png"><input class="class02" name="cpf" type="text" id="cpf" value="<? echo $cpf; ?>" size="18" maxlength="14" readonly="true"></td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png">RG/&Oacute;rg&atilde;o        </td>
      <td background="../../imagens/fundocelulas2.png">Emiss&atilde;o</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png"><input class="class02" name="rg" type="text" id="rg" value="<? echo $rg; ?>" size="25" maxlength="25" readonly="true">
      <input class="class02" name="orgao" type="text" id="cpf3" value="<? echo $orgao; ?>" size="15" maxlength="14" readonly="true"></td>
      <td background="../../imagens/fundocelulas2.png"><input class="class02" name="emissao" type="text" id="cpf4" value="<? echo $emissao; ?>" size="15" maxlength="10" readonly="true"></td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png">Pai</td>
      <td background="../../imagens/fundocelulas2.png">M&atilde;e</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png"><input class="class02" name="pai" type="text" id="pai" value="<? echo $pai; ?>" size="50" maxlength="50" readonly="true"></td>
      <td background="../../imagens/fundocelulas2.png"><input class="class02" name="mae" type="text" id="endereco3" value="<? echo $mae; ?>" size="50" maxlength="50" readonly="true"></td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png">Endere&ccedil;o</td>
      <td background="../../imagens/fundocelulas2.png">N&uacute;mero</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png"><input class="class02" name="endereco" type="text" id="endereco" value="<? echo $endereco; ?>" size="50" maxlength="50" readonly="true">      </td>
      <td background="../../imagens/fundocelulas2.png"><input class="class02" name="numero" type="text" id="numero2" value="<? echo $numero; ?>" size="10" maxlength="10" readonly="true"></td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td background="../../imagens/fundocelulas2.png"><p>&nbsp;</p></td>
      <td background="../../imagens/fundocelulas2.png">Bairro</td>
      <td background="../../imagens/fundocelulas2.png">Complemento</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png"><input class="class02" name="bairro" type="text" id="bairro" value="<? echo $bairro; ?>" size="50" maxlength="50" readonly="true"></td>
      <td background="../../imagens/fundocelulas2.png"><input class="class02" name="complemento" type="text" id="endereco4" value="<? echo $complemento; ?>" size="50" maxlength="50" readonly="true"></td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png">Cidade</td>
      <td background="../../imagens/fundocelulas2.png">Estado</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png"><input class="class02" name="cidade" type="text" id="cidade" value="<? echo $cidade; ?>" size="50" maxlength="50" readonly="true"></td>
      <td background="../../imagens/fundocelulas2.png"><input class="class02" name="estado" type="text" id="estado" value="<? echo $estado; ?>" readonly="true"></td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png">Cep</td>
      <td background="../../imagens/fundocelulas2.png">Telefone</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png"><input class="class02" name="cep" type="text" id="cep" value="<? echo $cep; ?>" size="9" maxlength="9" readonly="true"></td>
      <td background="../../imagens/fundocelulas2.png"><input class="class02" name="telefone" type="text" id="endereco5" value="<? echo $telefone; ?>" size="15" maxlength="14" readonly="true"></td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png">Celular</td>
      <td background="../../imagens/fundocelulas2.png">E-Mail</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png"><input class="class02" name="celular" type="text" id="telefone" value="<? echo $celular; ?>" size="15" maxlength="14" readonly="true"></td>
      <td background="../../imagens/fundocelulas2.png"><input class="class02" name="email" type="text" id="email" value="<? echo $email; ?>" size="50" maxlength="50" readonly="true"></td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png">Obs</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td colspan="2" background="../../imagens/fundocelulas2.png"><textarea class="class02" name="obs" cols="50" rows="7" readonly="readonly" id="obs"><? echo $obs; ?></textarea></td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png">Usu&aacute;rio</td>
      <td background="../../imagens/fundocelulas2.png">Senha</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png"><input class="class02" name="usuario" type="text" id="usuario" value="<? echo $usuario_op; ?>"></td>
      <td background="../../imagens/fundocelulas2.png"><input class="class02" name="senha" type="text" id="senha" value="<? echo $senha_op; ?>"></td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" background="../../imagens/fundocelulas2.png"><strong><font color="#0000FF">
        <input name="dataalteracao" type="hidden" id="dataalteracao" value="<? echo date('d-m-Y'); ?>">
        <input name="horaalteracao" type="hidden" id="horaalteracao" value="<? echo $hora_atual; ?>">
        <input name="operador_alterou" type="hidden" id="operador3" value="<? echo $operador_alterou; ?>">
        <input name="cel_operador_alterou" type="hidden" id="cel_operador_alterou" value="<? echo $cel_operador_alterou; ?>">
        <input name="email_operador_alterou" type="hidden" id="email_operador_alterou" value="<? echo $email_operador_alterou; ?>">
        <input name="estabelecimento_alterou" type="hidden" id="estabelecimento_alterou" value="<? echo $estabelecimento_alterou; ?>">
        <input name="cidade_estabelecimento_alterou" type="hidden" id="cidade_estabelecimento_alterou" value="<? echo $cidade_estabelecimento_alterou; ?>">
        <input name="tel_estabelecimento_alterou" type="hidden" id="tel_estabelecimento_alterou" value="<? echo $tel_estabelecimento_alterou; ?>">
        <input name="email_estabelecimento_alterou" type="hidden" id="email_estabelecimento_alterou" value="<? echo $email_estabelecimento_alterou; ?>">
      </font></strong></td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2" background="../../imagens/fundocelulas2.png"><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input class="class01" type="submit" name="Submit" value="Alterar dados do Operador"></td>
      <td background="../../imagens/fundocelulas2.png"><div align="right"> </div></td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<form name="form1" method="post" action="">
  <table width="100%" border="0" cellspacing="4">
    <tr>
      <td colspan="2"><strong>Cadastro efetuado por <br>
        </strong><strong><font color="#0000FF"><? echo $operador; ?>
        
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
          <strong><font color="#0000FF"><? echo $estabelecimento; ?>        </font></strong><strong><font color="#0000FF"> </font></strong></td>
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


$sql = "SELECT * FROM operadores where nome = '$nome'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$operador_alterou = $linha[33];
$cel_operador_alterou = $linha[34];
$email_operador_alterou = $linha[35];
$estabelecimento_alterou = $linha[36];
$cidade_estabelecimento_alterou = $linha[37];
$tel_estabelecimento_alterou = $linha[38];
$email_estabelecimento_alterou = $linha[39];
$dataalteracao = $linha[31];
$horaalteracao = $linha[32];
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
      <td valign="top" bgcolor="#CCCCCC"><strong>Data do Cadastro <br>
            <font color="#0000FF"><? echo $dataalteracao; ?> </font></strong></td>
      <td valign="top" bgcolor="#CCCCCC"><strong>Hora que foi efetuado o Cadastro <br>
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


$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$operador_alterou = $linha[1];
$cel_operador_alterou = $linha[19];
$email_operador_alterou = $linha[20];
$estabelecimento_alterou = $linha[24];
$cidade_estabelecimento_alterou = $linha[25];
$tel_estabelecimento_alterou = $linha[26];
$email_estabelecimento_alterou = $linha[27];

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
