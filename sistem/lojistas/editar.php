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

<title>ALTERA&Ccedil;&Atilde;O DO CADASTRO DE FORNECEDOR</title>

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

	
<script>
function MascaraParaLabel(valorDoTextBox) {

        if (valorDoTextBox.length <= 14) {  

            //Coloca ponto entre o segundo e o terceiro dígitos
            valorDoTextBox = valorDoTextBox.replace(/^(\d{2})(\d)/, "$1.$2")

            //Coloca ponto entre o quinto e o sexto dígitos
            valorDoTextBox = valorDoTextBox.replace(/^(\d{2})\.(\d{3})(\d)/, "$1 $2 $3")

            //Coloca uma barra entre o oitavo e o nono dígitos
            valorDoTextBox = valorDoTextBox.replace(/\.(\d{3})(\d)/, ".$1/$2")

            //Coloca um hífen depois do bloco de quatro dígitos
            valorDoTextBox = valorDoTextBox.replace(/(\d{4})(\d)/, "$1-$2") 
        } 
        return valorDoTextBox

</script>

  <?

if($reg==1){

echo "</tr><tr>";

$reg=0;

}

?>

  

<? } ?>









<form name="form1" method="post" action="informe_nfantasia_para_edicao.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" class='class01' name="Submit3" value="Voltar">

</form>

<?



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];



$nfantasia = $_POST['nfantasia'];





$sql = "SELECT * FROM lojistas where nfantasia = '$nfantasia'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {



$codigo = $linha[0];

$razaosocial = $linha[1];

$nfantasia = $linha[2];

$cnpj = $linha[3];

$inscr_est = $linha[4];

$endereco = $linha[5];

$numero = $linha[6];

$bairro = $linha[7];

$complemento = $linha[8];

$cep = $linha[9];

$cidade = $linha[10];

$estado = $linha[11];

$telefone = $linha[12];

$fax = $linha[13];

$email = $linha[14];

$site = $linha[15];

$cpf = $linha[17];

$rg = $linha[18];

$operador = $linha[24];

$cel_operador = $linha[25];

$email_operador = $linha[26];

$estabelecimento = $linha[27];

$cidade_estabelecimento = $linha[28];

$tel_estabelecimento = $linha[29];

$email_estabelecimento = $linha[30];

$obs = $linha[19];

$datacadastro = $linha[20];

$horacadastro = $linha[21];

$dataalteracao = $linha[22];

$horaalteracao = $linha[23];

$operador_alterou = $linha[31];

$cel_operador_alterou = $linha[32];

$email_operador_alterou = $linha[33];

$estabelecimento_alterou = $linha[34];

$cidade_estabelecimento_alterou = $linha[35];

$tel_estabelecimento_alterou = $linha[36];

$email_estabelecimento_alterou = $linha[37];

$operador_atendente = $linha[41];
	
$proprietario = $linha[16];
$celular = $linha[44];
$email_representante = $linha[42];
$data_nasc = $linha[43];
	$dia = $linha[67];
	$mes = $linha[68];
	$ano = $linha[69];
	
$proprietario2 = $linha[45];
$cpf2 = $linha[79];
$celular2 = $linha[46];
$email_representante2 = $linha[47];
$data_nasc2 = $linha[48];
	$dia2 = $linha[70];
	$mes2 = $linha[71];
	$ano2 = $linha[72];

$proprietario3 = $linha[49];
$cpf3 = $linha[80];
$celular3 = $linha[50];
$email_representante3 = $linha[51];
$data_nasc3 = $linha[52];
	$dia3 = $linha[73];
	$mes3 = $linha[74];
	$ano3 = $linha[75];

$proprietario4 = $linha[53];
$cpf4 = $linha[81];
$celular4 = $linha[54];
$email_representante4 = $linha[55];
$data_nasc4 = $linha[56];
	$dia4 = $linha[76];
	$mes4 = $linha[77];
	$ano4 = $linha[78];
	
	$banco = $linha[57];
	$codagencia = $linha[58];
	$digitoagencia = $linha[59];
	$conta = $linha[60];
	$digitoconta = $linha[61];
	$tipoconta = $linha[62];
	$titularconta = $linha[63];
	$nomeagencia = $linha[64];
	$chavepix = $linha[65];
	$tipochavepix = $linha[66];
	


	
}
	
//-------------------------------------------------------

$data_nascget = $_GET['data_nasc'];

if(empty($data_nasc)){
$data_nascretorno = $data_nascget;
}
else{
$data_nascretorno = $data_nasc;
}


//-------------------------------------------------------

?>

<?



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];





$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {





$operador_alterou = $linha[1];

$cel_operador_alterou = $linha[12];

$email_operador_alterou = $linha[13];

$estabelecimento_alterou = $linha[18];

$cidade_estabelecimento_alterou = $linha[19];

$tel_estabelecimento_alterou = $linha[20];

$email_estabelecimento_alterou = $linha[21];



?>

<? } ?>

<form name="form1" method="post" action="grava_editar.php">

  <table width="100%" border="0" cellspacing="0">

    <tr>

      <td>&nbsp;</td>

      <td colspan="4" align="center"><strong><font color="#0000FF" size="4">Tela de edi&ccedil;&atilde;o do cadastro de lojista!. </font></strong></td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td><strong>C&oacute;digo</strong></td>

      <td><strong><? echo $codigo; ?> 
        <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>">
      </strong></td>

      <td style="text-align: right"><strong>Operador que atende </strong></td>

      <td colspan="2"><strong>
        <select name="operador_atendente" class='class02' id="select6">
          
          <option selected><? echo $operador_atendente; ?></option>
          
          <?





    $sql = "select * from operadores order by nome asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['nome']."</option>";

    }

?>
          
        </select>
      </strong></td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td width="11%"><strong>Raz&atilde;o Social </strong></td>

      <td width="23%"><strong>
        <input name="razaosocial" class='class02' type="text" id="razaosocial" value="<? echo $razaosocial; ?>" size="50" maxlength="50">
      </strong></td>

      <td width="12%" style="text-align: right"><strong>Nome Fantasia </strong></td>

      <td colspan="2"> <strong><font color="#0000FF">

        <input name="nfantasia" class='class02' type="text" id="data_nasc2" value="<? echo $nfantasia; ?>" size="50" maxlength="50">

      </font></strong></td>

      <td width="15%">&nbsp;</td>

    </tr>

    <tr>

      <td><strong>CNPJ</strong></td>

      <td><strong>
        <input name="cnpj" class='class02' type="text" id="cnpj" value="<? echo $cnpj; ?>" maxlength="18" OnKeyPress="formatar(this, '##.###.###/####-##')" onBlur="return doDateVenc(this.id,this.value, 4);">
      </strong></td>

      <td style="text-align: right">&nbsp;</td>

      <td colspan="2"><strong>
        <input name="inscr_est" class='class02' type="hidden" id="inscr_est" value="<? echo $inscr_est; ?>" size="25" maxlength="25">
      </strong></td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td><strong>Endere&ccedil;o</strong></td>

      <td><strong>
        <input name="endereco" class='class02' type="text" id="endereco" value="<? echo $endereco; ?>" size="50" maxlength="50">

      </strong></td>

      <td style="text-align: right"><strong>N&uacute;mero</strong></td>

      <td colspan="2"><strong>
        <input name="numero" class='class02' type="text" id="numero2" value="<? echo $numero; ?>" size="10" maxlength="10">

      </strong></td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td><p><strong>Bairro</strong></p></td>

      <td><strong>
        <input name="bairro" class='class02' type="text" id="bairro" value="<? echo $bairro; ?>" size="50" maxlength="50">

      </strong></td>

      <td style="text-align: right"><strong>Complemento</strong></td>

      <td colspan="2"><strong>
        <input name="complemento" class='class02' type="text" id="endereco4" value="<? echo $complemento; ?>" size="50" maxlength="50">
      </strong></td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td><strong>Cep</strong></td>

      <td><strong>
        <input name="cep" class='class02' type="text" id="cep2" value="<? echo $cep; ?>" size="9" maxlength="9">

      Use o formato 00000-000</strong></td>

      <td style="text-align: right"><strong>Cidade</strong></td>

      <td colspan="2"><strong>
        <input name="cidade" class='class02' type="text" id="cidade2" value="<? echo $cidade; ?>" size="50" maxlength="50">
      </strong></td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td><strong>Estado</strong></td>

      <td><strong>
        <select name="estado" class='class02' id="select">
          
          <option selected><? echo $estado; ?></option>
          
          <?





    $sql = "select * from estados_do_brasil order by estado asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option value=" .$x['estado']. ">".$x['estado']."</option>";

    }

?>
          
        </select>
      </strong></td>

      <td style="text-align: right"><strong>Telefone</strong></td>

      <td colspan="2"><strong>
        <input name="telefone" class='class02' type="text" id="telefone2" value="<? echo $telefone; ?>" size="15" maxlength="14">
      </strong></td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td><strong>Site</strong></td>

      <td><strong>
        <input name="site" class='class02' type="text" id="site" value="<? echo $site; ?>" size="50" maxlength="50">
      </strong></td>

      <td style="text-align: right"><strong>E-Mail</strong></td>

      <td colspan="2"><strong>
        <input name="email" class='class02' type="text" id="email" value="<? echo $email; ?>" size="50" maxlength="50">

      </strong></td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td><strong>
        <input name="fax" class='class02' type="hidden" id="fax" value="<? echo $fax; ?>" size="15" maxlength="14">
      </strong></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

      <td colspan="2">&nbsp;</td>

      <td>&nbsp;</td>

    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>

    <tr background="../../imagens/fundocelulas2.png">

      <td><strong>Proprietario</strong></td>

      <td><strong>
        <input name="proprietario" onKeyUp="maiuscula(this)" class='class02' type="text" id="site" value="<? echo $proprietario; ?>" size="50" maxlength="50">
      </strong></td>
      <td style="text-align: center"><strong>CPF</strong></td>
      <td style="text-align: center"><strong>
      Data Nasc </strong></td>

      <td style="text-align: center"><strong>Celular</strong></td>

      <td>&nbsp;</td>

    </tr>

    <tr background="../../imagens/fundocelulas2.png">
      <td><strong>Email Proprietario</strong></td>
      <td><strong>
        <input name="email_representante" class='class02' type="text" id="email_representante" value="<? echo $email_representante; ?>" size="50" maxlength="50">
      </strong></td>
      <td style="text-align: center"><strong>
        <input name="cpf" type="text" class='class02' id="cpf" value="<? echo "$cpf"; ?>" size="15">
      </strong></td>
      <td style="text-align: center"><strong>
        <input name="data_nasc" class='class02' type="text" id="data_nasc" value="<? echo "$dia-$mes-$ano"; ?>" size="15" maxlength="10" OnKeyPress="formatar(this, '##-##-####')" onBlur="return doDateVenc(this.id,this.value, 4);">
      </strong></td>
      <td style="text-align: center"><strong>
        <input name="celular" class='class02' type="text" id="celular" value="<? echo $celular; ?>">
      </strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr background="../../imagens/fundocelulas1.png">
      <td><strong>Proprietario 2 </strong></td>
      <td><strong>
        <input name="proprietario2" type="text" class='class02' id="proprietario2" onKeyUp="maiuscula(this)" value="<? echo $proprietario2; ?>" size="50" maxlength="50">
      </strong></td>
      <td style="text-align: center">&nbsp;</td>
      <td style="text-align: center"><strong>Data Nasc2 </strong></td>
      <td style="text-align: center"><strong>Celular2</strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr background="../../imagens/fundocelulas1.png">
      <td>&nbsp;</td>
      <td><strong>
        <input name="email_representante2" type="hidden" class='class02' id="email_representante2" onKeyUp="maiuscula(this)" value="<? echo $email_representante2; ?>" size="50" maxlength="50">
      </strong></td>
      <td style="text-align: center"><strong>
        <input name="cpf2" type="hidden" class='class02' id="cpf2" value="<? echo "$cpf2"; ?>">
      </strong></td>
      <td style="text-align: center"><strong>
        <input name="data_nasc2" class='class02' type="text" id="data_nasc2" value="<? echo "$dia2-$mes2-$ano2"; ?>" size="15" maxlength="10" OnKeyPress="formatar(this, '##-##-####')" onBlur="return doDateVenc(this.id,this.value, 4);">
      </strong></td>
      <td style="text-align: center"><strong>
        <input name="celular2" type="text" class='class02' id="celular2" onKeyUp="maiuscula(this)" value="<? echo $celular2; ?>">
      </strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr background="../../imagens/fundocelulas2.png">
      <td><strong>Proprietario 3 </strong></td>
      <td><strong>
        <input name="proprietario3" type="text" class='class02' id="proprietario3" onKeyUp="maiuscula(this)" value="<? echo $proprietario3; ?>" size="50" maxlength="50">
      </strong></td>
      <td style="text-align: center">&nbsp;</td>
      <td style="text-align: center"><strong>Data Nasc 3</strong></td>
      <td style="text-align: center"><strong>Celular3</strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr background="../../imagens/fundocelulas2.png">
      <td>&nbsp;</td>
      <td><strong>
        <input name="email_representante3" type="hidden" class='class02' id="email_representante3" onKeyUp="maiuscula(this)" value="<? echo $email_representante3; ?>" size="50" maxlength="50">
      </strong></td>
      <td style="text-align: center"><strong>
        <input name="cpf3" type="hidden" class='class02' id="cpf3" value="<? echo "$cpf3"; ?>">
      </strong></td>
      <td style="text-align: center"><strong>
        <input name="data_nasc3" class='class02' type="text" id="data_nasc3" value="<? echo "$dia3-$mes3-$ano3"; ?>" size="15" maxlength="10" OnKeyPress="formatar(this, '##-##-####')" onBlur="return doDateVenc(this.id,this.value, 4);">
      </strong></td>
      <td style="text-align: center"><strong>
        <input name="celular3" type="text" class='class02' id="celular3" onKeyUp="maiuscula(this)" value="<? echo $celular3; ?>">
      </strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr background="../../imagens/fundocelulas1.png">
      <td><strong>Proprietario 4 </strong></td>
      <td><strong>
        <input name="proprietario4" type="text" class='class02' id="proprietario4" onKeyUp="maiuscula(this)" value="<? echo $proprietario4; ?>" size="50" maxlength="50">
      </strong></td>
      <td style="text-align: center">&nbsp;</td>
      <td style="text-align: center"><strong>Data Nasc 4</strong></td>
      <td style="text-align: center"><strong>Celular4</strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr background="../../imagens/fundocelulas1.png">
      <td>&nbsp;</td>
      <td><strong>
        <input name="email_representante4" type="hidden" class='class02' id="email_representante4" onKeyUp="maiuscula(this)" value="<? echo $email_representante4; ?>" size="50" maxlength="50">
      </strong></td>
      <td style="text-align: center"><strong>
        <input name="cpf4" type="hidden" class='class02' id="cpf4" value="<? echo "$cpf4"; ?>">
      </strong></td>
      <td style="text-align: center"><strong>
        <input name="data_nasc4" class='class02' type="text" id="data_nasc4" value="<? echo "$dia4-$mes4-$ano4"; ?>" size="15" maxlength="10" OnKeyPress="formatar(this, '##-##-####')" onBlur="return doDateVenc(this.id,this.value, 4);">
      </strong></td>
      <td style="text-align: center"><strong>
        <input name="celular4" type="text" class='class02' id="celular4" onKeyUp="maiuscula(this)" value="<? echo $celular4; ?>">
      </strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr background="../../imagens/fundocelulas2.png">
      <td align="center"><strong>Banco</strong></td>
      <td align="center"><strong>Agencia</strong></td>
      <td align="center"><strong>Conta</strong></td>
      <td align="center"><strong>Tipo de Conta</strong></td>
      <td align="center">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr background="../../imagens/fundocelulas2.png">
      <td align="center"><strong><font color="#0000FF">
        <select class='class02' name="banco" id="banco">
          <option selected><? echo $banco; ?></option>
          <?


    $sql = "select * from bancos order by banco asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['banco']."</option>";
    }
?>
        </select>
      </font></strong></td>
      <td align="center"><strong><font color="#0000FF">
        <input name="codagencia" onKeyUp="maiuscula(this)" type="text" class='class02' id="codagencia" value="<? echo $codagencia; ?>" size="10">
        -
  <input class='class02' name="digitoagencia" onKeyUp="maiuscula(this)" type="hidden" id="digitoagencia" value="<? echo $digitoagencia; ?>" size="5">
      </font></strong></td>
      <td align="center"><strong><font color="#0000FF">
        <input name="conta" type="text" onKeyUp="maiuscula(this)" class='class02' id="conta" value="<? echo $conta; ?>" size="10">
        -
  <input class='class02' name="digitoconta" onKeyUp="maiuscula(this)" type="hidden" id="digitoconta" value="<? echo $digitoconta; ?>" size="3">
      </font></strong></td>
      <td align="center"><strong><font color="#0000FF">
        <select class='class02' name="tipoconta" id="tipoconta">
          <option selected><? echo $tipoconta; ?></option>
          <?

    $sql = "select * from tipos_contas order by tipo_conta asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['tipo_conta']."</option>";
    }
?>
        </select>
      </font></strong></td>
      <td align="center">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr background="../../imagens/fundocelulas2.png">
      <td align="center"><strong>CHAVE PIX</strong></td>
      <td align="center"><strong>TIPO CHAVE</strong></td>
      <td align="center">&nbsp;</td>
      <td width="19%" align="center">&nbsp;</td>
      <td width="20%" align="center">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr background="../../imagens/fundocelulas2.png">
      <td align="center"><strong><font color="#0000FF">
        <input class='class02' name="chavepix" onKeyUp="maiuscula(this)" type="text" id="chavepix" value="<? echo $chavepix; ?>">
      </font></strong></td>
      <td align="center"><strong><font color="#0000FF"><font color="#0000FF">
        <select class='class02' name="tipochavepix" id="tipochavepix">
          <option selected><? echo $tipochavepix; ?></option>
          <?


    $sql = "select * from tipos_chaves_pix order by tipochave asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['tipochave']."</option>";
    }
?>
        </select>
      </font></font></strong></td>
      <td align="center"><strong><font color="#0000FF">
        <input class='class02' name="titularconta" onKeyUp="maiuscula(this)" type="hidden" id="titularconta" value="<? echo $titularconta; ?>">
      </font></strong></td>
      <td align="center"><strong><font color="#0000FF">
        <input class='class02' name="nomeagencia" onKeyUp="maiuscula(this)" type="hidden" id="nomeagencia" value="<? echo $nomeagencia; ?>">
      </font></strong></td>
      <td align="center">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>

      <td><strong>Obs</strong></td>

      <td colspan="2"><strong>
        <textarea name="obs" class='class02' cols="50" rows="7" id="obs"><? echo $obs; ?></textarea>
      </strong></td>

      <td colspan="2">&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td colspan="2"><strong><font color="#0000FF">

        <input name="dataalteracao" type="hidden" id="dataalteracao" value="<? echo date('d-m-Y'); ?>">

        <input name="horaalteracao" type="hidden" id="horaalteracao" value="<? echo date('H:i:s'); ?>">

        <input name="operador_alterou" type="hidden" id="operador_alterou" value="<? echo $operador_alterou; ?>">

        <input name="cel_operador_alterou" type="hidden" id="cel_operador_alterou" value="<? echo $cel_operador_alterou; ?>">

        <input name="email_operador_alterou" type="hidden" id="email_operador_alterou" value="<? echo $email_operador_alterou; ?>">

        <input name="estabelecimento_alterou" type="hidden" id="estabelecimento_alterou" value="<? echo $estabelecimento_alterou; ?>">

        <input name="cidade_estabelecimento_alterou" type="hidden" id="cidade_estabelecimento_alterou" value="<? echo $cidade_estabelecimento_alterou; ?>">

        <input name="tel_estabelecimento_alterou" type="hidden" id="tel_estabelecimento_alterou" value="<? echo $tel_estabelecimento_alterou; ?>">

        <input name="email_estabelecimento_alterou" type="hidden" id="email_estabelecimento_alterou" value="<? echo $email_estabelecimento_alterou; ?>">

        <input name="motivo_exclusao" type="hidden" id="motivo_exclusao">

      </font></strong></td>

      <td>&nbsp;</td>

      <td colspan="2">&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td colspan="2"><strong>
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

          <input type="submit" class='class01' name="Submit" value="Salvar">
      </strong></td>

      <td><div align="right"> </div></td>

      <td colspan="2">&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td colspan="2">&nbsp;</td>

      <td>&nbsp;</td>

      <td colspan="2">&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

  </table>

</form>
<strong><font color="#FF0000"></font></strong>
</body>

</html>

