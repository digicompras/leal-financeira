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
	
	<script language="JavaScript">
 /*
 A função Mascara tera como valores no argumento os dados inseridos no input (ou no evento onkeypress)
 onkeypress="mascara(this, '## ####-####')"
 onkeypress = chama uma função quando uma tecla é pressionada, no exemplo acima, chama a função mascara e define os valores do argumento na função
 O primeiro valor é o this, é o Apontador/Indicador da Mascara, o '## ####-####' é o modelo / formato da mascara
 no exemplo acima o # indica os números, e o - (hifen) o caracter que será inserido entre os números, ou seja, no exemplo acima o telefone ficara assim: 11-4000-3562
 para o celular de são paulo o modelo deverá ser assim: '## #####-####' [11 98563-1254]
 para o RG '##.###.###.# [40.123.456.7]
 para o CPF '###.###.###.##' [789.456.123.10]
 Ou seja esta mascara tem como objetivo inserir o hifen ou espaço automáticamente quando o usuário inserir o número do celular, cpf, rg, etc 

 lembrando que o hifen ou qualquer outro caracter é contado tambem, como: 11-4561-6543 temos 10 números e 2 hifens, por isso o valor de maxlength será 12
 <input type="text" name="telefone" onkeypress="mascara(this, '## ####-####')" maxlength="12">
 neste código não é possivel inserir () ou [], apenas . (ponto), - (hifén) ou espaço
 */

 function mascara(t, mask){
 var i = t.value.length;
 var saida = mask.substring(1,0);
 var texto = mask.substring(i)
 if (texto.substring(0,1) != saida){
 t.value += texto.substring(0,1);
 }
 }
 </script>
	
<script type="text/javascript">
// INICIO FUNÇÃO DE MASCARA MAIUSCULA
function maiuscula(z){
        v = z.value.toUpperCase();
        z.value = v;
    }
//FIM DA FUNÇÃO MASCARA MAIUSCULA
</script>
	
<script language="JavaScript">
/* Formatação para qualquer mascara */

function formatar(src, mask) 
{
var i = src.value.length;
var saida = mask.substring(0,1);
var texto = mask.substring(i)
if (texto.substring(0,1) != saida) 
{
src.value += texto.substring(0,1);
}
}

/* Valida Data */

var reDate4 = /^((0?[1-9]|[12]\d)\/(0?[1-9]|1[0-2])|30\/(0?[13-9]|1[0-2])|31\/(0?[13578]|1[02]))\/(19|20)?\d{2}$/;
var data_nasc = reDate4;

function doDateVenc(Id, pStr, pFmt){
d = document.getElementById(Id);
if (d.value != ""){ 
if (d.value.length < 10){
alert("Data Inválida!\nDigite corretamente a data: dd-mm-aaaa !");
d.value="";
d.focus(); 
return false;
}else{

eval("data_nasc = data_nasc" + pFmt);
if (data_nasc.test(pStr)) {
return false;
} else if (pStr != null && pStr != "") {
alert("ALERTA DE ERRO!!\n\n" + pStr + " NÃO é uma data válida.");
d.value="";
d.focus(); 
return false;
}
}	
}else{
return false;
}
}
</script>


<?



require '../../conect/conect.php';
error_reporting(E_ALL);
error_reporting( E_ALL ^E_NOTICE );



$resposta = $_POST['resposta'];

//-------------------------------------------------------

$nome = $_POST['nome'];

$nomeget = $_GET['nome'];

if(empty($nome)){
$nomeretorno = $nomeget;
}
else{
$nomeretorno = $nome;
}


//-------------------------------------------------------

$cpf = $_POST['cpf'];

$cpfget = $_GET['cpf'];

if(empty($cpf)){
$cpfretorno = $cpfget;
}
else{
$cpfretorno = $cpf;
}


//-------------------------------------------------------

$telefone = $_POST['telefone'];

$telefoneget = $_GET['telefone'];

if(empty($telefone)){
$telefoneretorno = $telefoneget;
}
else{
$telefoneretorno = $telefone;
}


//-------------------------------------------------------

$celular = $_POST['celular'];

$celularget = $_GET['celular'];

if(empty($celular)){
$celularretorno = $celularget;
}
else{
$celularretorno = $celular;
}


//-------------------------------------------------------

$num_beneficio = $_POST['num_beneficio'];

$num_beneficioget = $_GET['num_beneficio'];

if(empty($num_beneficio)){
$num_beneficioretorno = $num_beneficioget;
}
else{
$num_beneficioretorno = $num_beneficio;
}


//-------------------------------------------------------

$secretaria = $_POST['secretaria'];

$secretariaget = $_GET['secretaria'];

if(empty($secretaria)){
$secretariaretorno = $secretariaget;
}
else{
$secretariaretorno = $secretaria;
}


//-------------------------------------------------------

$categoria = $_POST['categoria'];

$categoriaget = $_GET['categoria'];

if(empty($categoria)){
$categoriaretorno = $categoriaget;
}
else{
$categoriaretorno = $categoria;
}


//-------------------------------------------------------

$rg = $_POST['rg'];

$rgget = $_GET['rg'];

if(empty($rg)){
$rgretorno = $rgget;
}
else{
$rgretorno = $rg;
}


//-------------------------------------------------------

$mae = $_POST['mae'];

$maeget = $_GET['mae'];

if(empty($mae)){
$maeretorno = $maeget;
}
else{
$maeretorno = $mae;
}


//-------------------------------------------------------

$valorrenda = $_POST['valorrenda'];

$valorrendaget = $_GET['valorrenda'];

if(empty($valorrenda)){
$valorrendaretorno = $valorrendaget;
}
else{
$valorrendaretorno = $valorrenda;
}


//-------------------------------------------------------

$senha_servidor = $_POST['senha_servidor'];

$senha_servidorget = $_GET['senha_servidor'];

if(empty($senha_servidor)){
$senha_servidorretorno = $senha_servidorget;
}
else{
$senha_servidorretorno = $senha_servidor;
}


//-------------------------------------------------------

$idade = $_POST['idade'];

$idadeget = $_GET['idade'];

if(empty($idade)){
$idaderetorno = $idadeget;
}
else{
$idaderetorno = $idade;
}


//-------------------------------------------------------

?>


<?
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$background = $linha[1];

}
?>

<body background="../../background/<? echo "$background"; ?>">

<form name="form2" method="post" action="">

</form>

<form name="form1" method="post" action="menu.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="hidden" name="codigolancamento" id="codigolancamento">
  <input type="hidden" name="solicitacao" id="solicitacao">
  <input class="clas01" type="submit" name="Submit3" value="Voltar">

</form>

<?



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];





$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {





$nome = $linha[1];

$celular = $linha[19];

$email = $linha[20];

$estabelecimento = $linha[24];

$cidade_estabelecimento = $linha[25];

$tel_estabelecimento = $linha[26];

$email_estabelecimento = $linha[27];

$funcao_operador = $linha[43];

$estab_pertence = $linha[44];

$cidade_estab_pertence = $linha[45];

$tel_estab_pertence = $linha[46];

$email_estab_pertence = $linha[47];





?>

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

<? } ?>

<form name="form1" method="post" action="grava_cadcli.php">



<table width="100%" border="0" cellpadding="0" cellspacing="0">

    <tr> 

      <td colspan="5"><strong><font color="#0000FF" size="4">Cadastro 

        de clientes! O N&ordm; da matr&iacute;cula ser&aacute; informado ao t&eacute;rmino do cadastro! Data Cadastro </font><font color="#0000FF"><? echo date('d-m-Y'); ?>

        <input name="datacadastro" type="hidden" id="datacadastro" value="<? echo date('d-m-Y'); ?>">

        <input name="horacadastro" type="hidden" id="horacadastro" value="<? echo $hora_atual; ?>">

        <input name="criar_pasta" type="hidden" id="criar_pasta" value="<? echo "Não"; ?>">

        <input name="status_cliente" type="hidden" id="status_cliente" value="<? echo "Ativo"; ?>">
      </font></strong></td>
    </tr>

    <tr>
      <td background="../../imagens/fundocelulas1.png">Como Conheceu a Empresa?</td>
      <td background="../../imagens/fundocelulas1.png">Nome*</td>
      <td background="../../imagens/fundocelulas1.png">Perfil</td>
      <td background="../../imagens/fundocelulas1.png">Data Nasc      </td>
      <td background="../../imagens/fundocelulas1.png">Idade</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><select class='class02' name="resposta" id="resposta">
        <option selected><? echo $resposta; ?></option>
        <?

   $sql = "select * from como_conheceu_empresa order by resposta asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['resposta']."</option>";

    }

?>
      </select></td>
      <td background="../../imagens/fundocelulas1.png"><input class='class02' name="nome" type="text" id="nome2" onKeyUp="maiuscula(this)" value="<? echo $nomeretorno; ?>"></td>
      <td background="../../imagens/fundocelulas1.png"><select class='class02' name="tipo" id="tipo">
        <option selected><? echo $tipo; ?></option>
        <?





    $sql = "select * from tipos order by tipo asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['tipo']."</option>";

    }

?>
      </select></td>
      <td background="../../imagens/fundocelulas1.png"><input name="data_nasc" class='class02' type="text" id="data_nasc" value="<? echo $data_nascretorno; ?>" size="15" maxlength="10" OnKeyPress="formatar(this, '##/##/####')" onBlur="return doDateVenc(this.id,this.value, 4);"></td>
      <td background="../../imagens/fundocelulas1.png"><input name="idade" type="text" class='class02' id="idade" onKeyUp="maiuscula(this)" value="<? echo $idaderetorno; ?>" size="15" maxlength="10" readonly="true"></td>
    </tr>
    <tr> 

      <td background="../../imagens/fundocelulas1.png">Categoria*</td>

      <td background="../../imagens/fundocelulas1.png">Secretaria*</td>

      <td background="../../imagens/fundocelulas1.png">Naturalidade</td>

      <td background="../../imagens/fundocelulas1.png">Orienta&ccedil;&atilde;o Sexual</td>
      <td background="../../imagens/fundocelulas1.png">Estado Civil </td>
    </tr>

    <tr> 

      <td width="18%" background="../../imagens/fundocelulas1.png"><strong>
        <select class='class02' name="categoria" id="categoria">
          <option selected><? echo $categoriaretorno; ?></option>
          <?





    $sql = "select * from categorias_clientes order by categoria asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['categoria']."</option>";

    }

?>
        </select>
      </strong></td>

      <td width="23%" background="../../imagens/fundocelulas1.png"><strong>
        <select class='class02' name="secretaria" id="secretaria">
          <option selected><? echo $secretariaretorno; ?></option>
          <?





    $sql = "select * from secretarias order by secretaria asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['secretaria']."</option>";

    }

?>
        </select>
      </strong></td>

      <td width="17%" background="../../imagens/fundocelulas1.png"><input class='class02' name="naturalidade" type="text" id="naturalidade" onKeyUp="maiuscula(this)"></td>

      <td width="23%" background="../../imagens/fundocelulas1.png"><select class='class02' name="sexo" id="sexo">
        <?

    $sql = "select * from orientacaosexual order by sexo asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['sexo']."</option>";

    }

?>
      </select></td>
      <td width="19%" background="../../imagens/fundocelulas1.png"><select class='class02' name="estadocivil" id="estadocivil">
        <option selected>Selecione</option>
        <?





    $sql = "select * from estado_civil order by estadocivil asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option value=" .$x['estadocivil']. ">".$x['estadocivil']."</option>";

    }

?>
      </select></td>
    </tr>

    <tr>
      <td background="../../imagens/fundocelulas2.png">CPF*</td>
      <td background="../../imagens/fundocelulas2.png">RG*</td>
      <td background="../../imagens/fundocelulas2.png">&Oacute;rg&atilde;o Emissor RG</td>
      <td background="../../imagens/fundocelulas2.png">Data Emiss&atilde;o RG</td>
      <td background="../../imagens/fundocelulas2.png">Tipo do Benef&iacute;cio</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="cpf" type="text" id="cpf" onKeyUp="maiuscula(this)" value="<? echo $cpfretorno; ?>" size="18" maxlength="14"></td>
      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="rg" type="text" id="rg" onKeyUp="maiuscula(this)" value="<? echo $rgretorno; ?>" size="25" maxlength="25"></td>
      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="orgao" type="text" id="cpf3" onKeyUp="maiuscula(this)" size="15" maxlength="14"></td>
      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="emissao" type="text" id="emisao" OnKeyPress="formatar(this, '##/##/####')" onBlur="return doDateVenc(this.id,this.value, 4);" size="15" maxlength="10">
dd-mm-aaaa </td>
      <td background="../../imagens/fundocelulas2.png"><select class='class02' name="pagto_beneficio" id="cidade">
        <option selected>Selecione</option>
        <?





    $sql = "select * from pagto_beneficio order by modo_recebimento asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['modo_recebimento']."</option>";

    }

?>
      </select></td>
    </tr>
    <tr> 

      <td background="../../imagens/fundocelulas2.png">N&ordm; do Benef&iacute;cio 1*</td>

      <td background="../../imagens/fundocelulas2.png">Valor Renda*</td>

      <td background="../../imagens/fundocelulas2.png">Codigo do Beneficio 1</td>

      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png">Senha DATAPREV </td>
    </tr>

    <tr>

      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="num_beneficio" type="text" id="num_beneficio" onKeyUp="maiuscula(this)" value="<? echo $num_beneficioretorno; ?>"></td>

      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="valorrenda" type="text" id="valorrenda" value="<? echo $valorrendaretorno; ?>" onKeyUp="maiuscula(this)"></td>

      <td background="../../imagens/fundocelulas2.png"><select class='class02' name="codigo_inss1" id="codigo_inss1">
        <?

    $sql = "select * from tabela_beneficios where status = 'ativo' order by codigo_inss asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['codigo_inss']."</option>";
  echo "<option selected></option>";

    }

?>
      </select></td>

      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="dataprev" type="text" id="dataprev" onKeyUp="maiuscula(this)"></td>
    </tr>

    <tr>
      <td background="../../imagens/fundocelulas2.png">N&ordm; Benef&iacute;cio2</td>
      <td background="../../imagens/fundocelulas2.png">Valor Renda2</td>
      <td background="../../imagens/fundocelulas2.png">Codigo do Beneficio 2</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png">Senha do Servidor*</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="num_beneficio2" type="text" id="num_beneficio2" onKeyUp="maiuscula(this)"></td>
      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="valorrenda2" type="text" id="valorrenda2" value="<? echo $valorrenda2retorno; ?>" onKeyUp="maiuscula(this)"></td>
      <td background="../../imagens/fundocelulas2.png"><select class='class02' name="codigo_inss2" id="codigo_inss2">
        <?

    $sql = "select * from tabela_beneficios where status = 'ativo' order by codigo_inss asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['codigo_inss']."</option>";
  echo "<option selected></option>";

    }

?>
      </select></td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png"><font color="#0000FF">
        <input class='class02' type="text" name="senha_servidor" id="senha_servidor">
      </font></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png">N&ordm; Benef&iacute;cio 3 </td>
      <td background="../../imagens/fundocelulas2.png">Valor Renda3</td>
      <td background="../../imagens/fundocelulas2.png">Codigo do Beneficio 3</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="num_beneficio3" type="text" id="num_beneficio3" onKeyUp="maiuscula(this)">
      <input name="num_beneficio4" type="hidden" class='class02' id="num_beneficio4" value=""></td>
      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="valorrenda3" type="text" id="valorrenda3" value="<? echo $valorrenda3retorno; ?>" onKeyUp="maiuscula(this)"></td>
      <td background="../../imagens/fundocelulas2.png"><select class='class02' name="codigo_inss3" id="codigo_inss3">
        <?

    $sql = "select * from tabela_beneficios where status = 'ativo' order by codigo_inss asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['codigo_inss']."</option>";
  echo "<option selected></option>";

    }

?>
      </select></td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png">E-Mail</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png">Pai</td>
      <td background="../../imagens/fundocelulas2.png">M&atilde;e*</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="email" type="text" id="email" onKeyUp="maiuscula(this)"></td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="pai" type="text" id="pai" onKeyUp="maiuscula(this)"></td>
      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="mae" type="text" id="mae" onKeyUp="maiuscula(this)" value="<? echo $maeretorno; ?>"></td>
      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="tem_margem" type="hidden" id="tem_margem"></td>
    </tr>
    <tr>

      <td background="../../imagens/fundocelulas1.png">Endere&ccedil;o</td>

      <td background="../../imagens/fundocelulas1.png">N&uacute;mero</td>

      <td background="../../imagens/fundocelulas1.png">Bairro</td>

      <td background="../../imagens/fundocelulas1.png">Complemento</td>
      <td background="../../imagens/fundocelulas1.png">Cidade</td>
    </tr>

    <tr> 

      <td background="../../imagens/fundocelulas1.png"><input class='class02' name="endereco" type="text" id="endereco" onKeyUp="maiuscula(this)"></td>

      <td background="../../imagens/fundocelulas1.png"><input class='class02' name="numero" type="text" id="numero" size="10" maxlength="10" onKeyUp="maiuscula(this)"></td>

      <td background="../../imagens/fundocelulas1.png"><input class='class02' name="bairro" type="text" id="bairro" onKeyUp="maiuscula(this)"></td>

      <td background="../../imagens/fundocelulas1.png"><input class='class02' name="complemento" type="text" id="complemento" onKeyUp="maiuscula(this)"></td>
      <td background="../../imagens/fundocelulas1.png"><select class='class02' name="cidade" id="cidade">
        <option selected>Selecione</option>
        <?





    $sql = "select * from cidades order by cidade asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['cidade']."</option>";

    }

?>
      </select></td>
    </tr>

    <tr> 

      <td background="../../imagens/fundocelulas1.png"><p>Estado</p></td>

      <td background="../../imagens/fundocelulas1.png">Cep</td>

      <td background="../../imagens/fundocelulas1.png">Telefone</td>

      <td background="../../imagens/fundocelulas1.png">Celular*</td>
      <td background="../../imagens/fundocelulas1.png">Celular 2</td>
    </tr>

    <tr>

      <td background="../../imagens/fundocelulas1.png"><select class='class02' name="estado" id="estado">
        <option selected>Selecione</option>
        <?





    $sql = "select * from estados_do_brasil order by estado asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option value=" .$x['estado']. ">".$x['estado']."</option>";

    }

?>
      </select></td>

      <td background="../../imagens/fundocelulas1.png"><input class='class02' name="cep" type="text" id="cep" onKeyUp="maiuscula(this)" size="9" maxlength="9">
      00000-000</td>

      <td background="../../imagens/fundocelulas1.png"><input class='class02' name="telefone" type="text" id="telefone" onkeypress="mascara(this, '##-####-####')" value="<? echo $telefoneretorno; ?>" size="12" maxlength="12"></td>

      <td background="../../imagens/fundocelulas1.png"><input class='class02' name="celular" type="text" id="celular" onkeypress="mascara(this, '##-#####-####')"  value="<? echo $celularretorno; ?>" size="12" maxlength="13"></td>
      <td background="../../imagens/fundocelulas1.png"><input class='class02' name="celular2" type="text" id="celular2" onkeypress="mascara(this, '##-#####-####')"  value="<? echo $celularretorno; ?>" size="12" maxlength="13"></td>
    </tr>

    <tr> 

      <td background="../../imagens/fundocelulas2.png">Banco do cliente </td>

      <td background="../../imagens/fundocelulas2.png">Ag&ecirc;ncia</td>

      <td background="../../imagens/fundocelulas2.png">Conta</td>

      <td background="../../imagens/fundocelulas2.png">Tipo Conta</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
    </tr>

    <tr> 

      <td background="../../imagens/fundocelulas2.png"><select class='class02' name="banco" id="banco">
        <?





    $sql = "select * from bancos order by banco asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['banco']."</option>";

    }

?>
      </select></td>

      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="agencia" type="text" id="agencia" onKeyUp="maiuscula(this)"></td>

      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="conta" type="text" id="conta" onKeyUp="maiuscula(this)"></td>

      <td background="../../imagens/fundocelulas2.png"><strong><font color="#0000FF">
        <select class='class02' name="tipo_conta" id="tipo_conta">
          <?


    $sql = "select * from tipos_contas order by tipo_conta asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['tipo_conta']."</option>";
    }
?>
        </select>
      </font></strong></td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
    </tr>

    <tr>

      <td background="../../imagens/fundocelulas2.png">Conjuge</td>

      <td background="../../imagens/fundocelulas2.png">CPF Conjuge</td>

      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>

      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
    </tr>

    <tr>

      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="conjuge" type="text" id="conjuge" size="30" onKeyUp="maiuscula(this)"></td>

      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="cpfconjuge" type="text" id="cpfconjuge" size="30" onKeyUp="maiuscula(this)"></td>

      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>

      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
    </tr>

    <tr>
      <td background="../../imagens/fundocelulas1.png">Obs</td>
      <td colspan="2" background="../../imagens/fundocelulas1.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr>

      <td background="../../imagens/fundocelulas1.png"><textarea class='class02' name="obs" cols="50" rows="7" id="obs" onKeyUp="maiuscula(this)"></textarea></td>

      <td colspan="2" background="../../imagens/fundocelulas1.png"><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
      <input class='class01' type="submit" name="Submit" value="Salvar"></td>

      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>

    <tr>

      <td colspan="2"><strong><font color="#0000FF">

        <input name="operador" type="hidden" id="operador3" value="<? echo $nome; ?>">

        <input name="funcao_operador" type="hidden" id="funcao_operador" value="<? echo $funcao_operador; ?>">
        <input name="cel_operador" type="hidden" id="cel_operador" value="<? echo $celular; ?>">

        <input name="email_operador" type="hidden" id="email_operador" value="<? echo $email; ?>">

        <input name="estabelecimento" type="hidden" id="estabelecimento" value="<? echo $estab_pertence; ?>">

        <input name="cidade_estabelecimento" type="hidden" id="cidade_estabelecimento" value="<? echo $cidade_estab_pertence; ?>">

        <input name="tel_estabelecimento" type="hidden" id="tel_estabelecimento" value="<? echo $tel_estab_pertence; ?>">

        <input name="email_estabelecimento" type="hidden" id="email_estabelecimento" value="<? echo $email_estab_pertence; ?>">

        <input name="valor_parcela" type="hidden" class='class02' id="valor_parcela" value="">
        <input name="saldo_devedor" type="hidden" class='class02' id="saldo_devedor" value="">
        <input name="parcelas_em_aberto" type="hidden" class='class02' id="parcelas_em_aberto" value="">
      </font></strong></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>


    <tr> 

      <td colspan="5"><input name="parc1" type="hidden" id="parc1" value="<? echo $parc1; ?>">
        <input name="parc2" type="hidden" id="parc2" value="<? echo $parc2; ?>">
        <input name="parc3" type="hidden" id="parc3" value="<? echo $parc3; ?>">
        <input name="parc4" type="hidden" id="parc4" value="<? echo $parc4; ?>">
        <input name="parc5" type="hidden" id="parc5" value="<? echo $parc5; ?>">
        <input name="parc6" type="hidden" id="parc6" value="<? echo $parc6; ?>">
        <input name="parc7" type="hidden" id="parc7" value="<? echo $parc7; ?>">
        <input name="banco1" type="hidden" id="banco1" value="<? echo $banco1; ?>">
        <input name="banco2" type="hidden" id="banco2" value="<? echo $banco2; ?>">
        <input name="banco3" type="hidden" id="banco3" value="<? echo $banco3; ?>">
        <input name="banco4" type="hidden" id="banco4" value="<? echo $banco4; ?>">
        <input name="banco5" type="hidden" id="banco5" value="<? echo $banco5; ?>">
        <input name="banco6" type="hidden" id="banco6" value="<? echo $banco6; ?>">
        <input name="banco7" type="hidden" id="banco7" value="<? echo $banco7; ?>">
        <input name="vencto1" type="hidden" id="vencto1" value="<? echo $vencto1; ?>">
        <input name="vencto2" type="hidden" id="vencto2" value="<? echo $vencto2; ?>">
        <input name="vencto3" type="hidden" id="vencto3" value="<? echo $vencto3; ?>">
        <input name="vencto4" type="hidden" id="vencto4" value="<? echo $vencto4; ?>">
        <input name="vencto5" type="hidden" id="vencto5" value="<? echo $vencto5; ?>">
        <input name="vencto6" type="hidden" id="vencto6" value="<? echo $vencto6; ?>">
        <input name="vencto7" type="hidden" id="vencto7" value="<? echo $vencto7; ?>">
        <input name="compra1" type="hidden" id="compra1" value="<? echo $compra1; ?>">
        <input name="compra2" type="hidden" id="compra3" value="<? echo $compra2; ?>">
        <input name="compra3" type="hidden" id="compra4" value="<? echo $compra3; ?>">
        <input name="compra4" type="hidden" id="compra5" value="<? echo $compra4; ?>">
        <input name="compra5" type="hidden" id="compra6" value="<? echo $compra5; ?>">
        <input name="compra6" type="hidden" id="compra7" value="<? echo $compra6; ?>">
        <input name="compra7" type="hidden" id="compra8" value="<? echo $compra7; ?>">
        <input name="saldo1" type="hidden" id="compra2" value="<? echo $saldo1; ?>">
        <input name="saldo2" type="hidden" id="compra9" value="<? echo $saldo2; ?>">
        <input name="saldo3" type="hidden" id="compra10" value="<? echo $saldo3; ?>">
        <input name="saldo4" type="hidden" id="compra11" value="<? echo $saldo4; ?>">
        <input name="saldo5" type="hidden" id="compra12" value="<? echo $saldo5; ?>">
        <input name="saldo6" type="hidden" id="compra13" value="<? echo $saldo6; ?>">
      <input name="saldo7" type="hidden" id="compra14" value="<? echo $saldo7; ?>"></td>
    </tr>
  </table>

</form>

<form name="form1" method="post" action="">

  <table width="100%" border="0" cellpadding="0" cellspacing="0">

    <tr>

      <td colspan="2" background="../../imagens/fundocelulas2.png"><strong>Ol&aacute;! Seja bem vindo<br>

      </strong><strong><font color="#0000FF"><? echo $nome; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>

<td width="35%" background="../../imagens/fundocelulas2.png"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>

              <? echo $email; ?> </font><font color="#0000FF"> </font></strong></td>

<td width="20%" background="../../imagens/fundocelulas2.png"><strong>Celular:<font color="#0000FF"><br>

              <? echo $celular; ?> </font><font color="#0000FF"> </font></strong></td>

      <td width="1%">&nbsp;</td>

    </tr>

    <tr>

      <td width="18%" background="../../imagens/fundocelulas2.png"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>

          <strong><font color="#0000FF"><? echo $estab_pertence; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>

<td width="26%" background="../../imagens/fundocelulas2.png"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $tel_estab_pertence; ?> </font></strong></td>

<td background="../../imagens/fundocelulas2.png"><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $email_estab_pertence; ?> </font><font color="#0000FF"> </font></strong></td>

  <td background="../../imagens/fundocelulas2.png"><strong>Cidade: <br>

            <font color="#0000FF"><? echo $cidade_estab_pertence; ?> </font></strong></td>

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

</form>

</body>

</html>

