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

<title>CADASTRO DE FORNECEDORES</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>
	
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
	
function formatCnpjCpf($value)
{
  $CPF_LENGTH = 11;
  $cnpj_cpf = preg_replace("/\D/", '', $value);
  
  if (strlen($cnpj_cpf) === $CPF_LENGTH) {
    return preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4", $cnpj_cpf);
  } 
  
  return preg_replace("/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/", "\$1.\$2.\$3/\$4-\$5", $cnpj_cpf);
}
	
</script>
	
	

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





<form name="form1" method="post" action="menu.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" class='class01' name="Submit22" value="Voltar">

</form>

<?



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];





$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha'";

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



?>

<? } ?>

<form name="form1" method="post" action="grava.php">



<table width="100%" border="0" cellspacing="0">

    <tr> 

      <td>&nbsp;</td>

      <td colspan="4" align="center"><strong><font color="#0000FF" size="4">Cadastro 

        de fornecedores!. </font></strong></td>

      <td>&nbsp;</td>

    </tr>

    <tr> 

      <td><strong>Data Cadastro </strong></td>

      <td><strong><font color="#0000FF"><? echo date('d-m-Y'); ?></font>

        <input name="datacadastro" type="hidden" id="datacadastro" value="<? echo date('d-m-Y'); ?>">

        <input name="horacadastro" type="hidden" id="horacadastro" value="<? echo date('H:i:s'); ?>">
      </strong></td>

      <td style="text-align: right"><strong>Operador que atende </strong></td>

      <td colspan="2"><strong>
        <select name="operador_atendente" class='class02' id="select6">
          
          <option selected>Selecione o operador</option>
          
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

      <td width="24%"><strong>
        <input name="razaosocial" onKeyUp="maiuscula(this)" class='class02' type="text" id="razaosocial" size="50" maxlength="50">
      </strong></td>

      <td width="18%" style="text-align: right"><strong>Nome Fantasia </strong></td>

      <td colspan="2">        <strong><font color="#0000FF">

        <input name="nfantasia" onKeyUp="maiuscula(this)" class='class02' type="text" id="nfantasia" size="50" maxlength="50"> 

      </font></strong></td>

      <td width="15%">&nbsp;</td>

    </tr>

    <tr>

      <td><strong>CNPJ</strong></td>

      <td><strong>
        <input name="cnpj" class='class02' type="text" id="cnpj" maxlength="18" OnKeyPress="formatar(this, '##.###.###/####-##')" onBlur="return doDateVenc(this.id,this.value, 4);">
      </strong></td>

      <td style="text-align: right">&nbsp;</td>

      <td colspan="2"><strong>
        <input name="inscr_est" onKeyUp="maiuscula(this)" class='class02' type="hidden" id="inscr_est" size="25" maxlength="25">
      </strong></td>

      <td>&nbsp;</td>

    </tr>

    <tr> 

      <td><strong>Endere&ccedil;o</strong></td>

      <td><strong>
        <input name="endereco" onKeyUp="maiuscula(this)" class='class02' type="text" id="endereco" size="50" maxlength="50"> 

      </strong></td>

      <td style="text-align: right"><strong>N&uacute;mero</strong></td>

      <td colspan="2"><strong>
        <input name="numero" onKeyUp="maiuscula(this)" class='class02' type="text" id="numero2" size="10" maxlength="10"> 

      </strong></td>

      <td>&nbsp;</td>

    </tr>

    <tr> 

      <td><p><strong>Bairro</strong></p></td>

      <td><strong>
        <input name="bairro" onKeyUp="maiuscula(this)" class='class02' type="text" id="bairro" size="50" maxlength="50"> 

      </strong></td>

      <td style="text-align: right"><strong>Complemento</strong></td>

      <td colspan="2"><strong>
        <input name="complemento" onKeyUp="maiuscula(this)" class='class02' type="text" id="endereco4" size="50" maxlength="50">
      </strong></td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td><strong>Cep</strong></td>

      <td><strong>
        <input name="cep" onKeyUp="maiuscula(this)" class='class02' type="text" id="cep2" size="9" maxlength="9">

      Use o formato 00000-000</strong></td>

      <td style="text-align: right"><strong>Cidade</strong></td>

      <td colspan="2"><strong>
        <input name="cidade" onKeyUp="maiuscula(this)" class='class02' type="text" id="cidade2" size="50" maxlength="50">
      </strong></td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td><strong>Estado</strong></td>

      <td><strong>
        <select name="estado" class='class02' id="select">
          
          <option selected>Selecione</option>
          
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
        <input name="telefone" onKeyUp="maiuscula(this)" class='class02' type="text" id="telefone" size="15" maxlength="14">
      </strong></td>

      <td>&nbsp;</td>

    </tr>

    <tr> 

      <td><strong>
      Site</strong></td>

      <td><strong>
        <input name="site" onKeyUp="maiuscula(this)" class='class02' type="text" id="telefone2" size="50" maxlength="50">
      </strong></td>

      <td style="text-align: right"><strong>E-Mail</strong></td>

      <td colspan="2"><strong>
        <input name="email" onKeyUp="minuscula(this)" class='class02' type="text" id="email" size="50" maxlength="50"> 
      </strong></td>

      <td>&nbsp;</td>

    </tr>

    <tr> 

      <td><strong>
        <input name="cpf" type="hidden" id="cpf" value="">
        <input name="fax" onKeyUp="maiuscula(this)" class='class02' type="hidden" id="telefone3" size="15" maxlength="14">
      </strong></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

      <td colspan="2">&nbsp;</td>

      <td>&nbsp;</td>

    </tr>
    <tr background="../../imagens/fundocelulas2.png">

      <td><strong>Proprietario</strong></td>

      <td><strong>
        <input name="proprietario" onKeyUp="maiuscula(this)" class='class02' type="text" id="site" size="50" maxlength="50">
      </strong></td>

      <td align="right" style="text-align: center"><strong>CPF</strong></td>

      <td style="text-align: center"><strong>
      Data Nasc </strong></td>
      <td style="text-align: center"><strong>Celular</strong></td>

      <td>&nbsp;</td>

    </tr>

    <tr background="../../imagens/fundocelulas2.png">
      <td><strong>Email Proprietario</strong></td>
      <td><strong>
        <input name="email_representante" onKeyUp="maiuscula(this)" class='class02' type="text" id="email_representante" size="50" maxlength="50">
      </strong></td>
      <td align="right" style="text-align: center"><strong>
        <input name="cpf5" type="text" class='class02' id="cpf5" size="15">
      </strong></td>
      <td style="text-align: center"><strong>
        <input name="data_nasc" class='class02' type="text" id="data_nasc" value="" size="15" maxlength="10" OnKeyPress="formatar(this, '##-##-####')" onBlur="return doDateVenc(this.id,this.value, 4);">
      </strong></td>
      <td style="text-align: center"><strong>
        <input name="celular" onKeyUp="maiuscula(this)" class='class02' type="text" id="celular">
      </strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr background="../../imagens/fundocelulas1.png">
      <td><strong>Proprietario 2       </strong></td>
      <td><strong>
        <input name="proprietario2" onKeyUp="maiuscula(this)" class='class02' type="text" id="proprietario2" size="50" maxlength="50">
      </strong></td>
      <td align="right">&nbsp;</td>
      <td style="text-align: center"><strong>Data Nasc2 </strong></td>
      <td style="text-align: center"><strong>Celular2</strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr background="../../imagens/fundocelulas1.png">
      <td>&nbsp;</td>
      <td><strong>
        <input name="email_representante2" onKeyUp="maiuscula(this)" class='class02' type="hidden" id="email_representante2" size="50" maxlength="50">
      </strong></td>
      <td align="right"><strong>
        <input type="hidden" class='class02' name="cpf2" id="cpf2">
      </strong></td>
      <td style="text-align: center"><strong>
        <input name="data_nasc2" class='class02' type="text" id="data_nasc2" value="" size="15" maxlength="10" OnKeyPress="formatar(this, '##-##-####')" onBlur="return doDateVenc(this.id,this.value, 4);">
      </strong></td>
      <td style="text-align: center"><strong>
        <input name="celular2" onKeyUp="maiuscula(this)" class='class02' type="text" id="celular2">
      </strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr background="../../imagens/fundocelulas2.png">
      <td><strong>Proprietario 3       </strong></td>
      <td><strong>
        <input name="proprietario3" onKeyUp="maiuscula(this)" class='class02' type="text" id="proprietario3" size="50" maxlength="50">
      </strong></td>
      <td align="right">&nbsp;</td>
      <td style="text-align: center"><strong>Data Nasc 3</strong></td>
      <td style="text-align: center"><strong>Celular3</strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr background="../../imagens/fundocelulas2.png">
      <td>&nbsp;</td>
      <td><strong>
        <input name="email_representante3" onKeyUp="maiuscula(this)" class='class02' type="hidden" id="email_representante3" size="50" maxlength="50">
      </strong></td>
      <td align="right"><strong>
        <input type="hidden" class='class02' name="cpf3" id="cpf3">
      </strong></td>
      <td style="text-align: center"><strong>
        <input name="data_nasc3" class='class02' type="text" id="data_nasc3" size="15" maxlength="10" OnKeyPress="formatar(this, '##-##-####')" onBlur="return doDateVenc(this.id,this.value, 4);">
      </strong></td>
      <td style="text-align: center"><strong>
        <input name="celular3" onKeyUp="maiuscula(this)" class='class02' type="text" id="celular3">
      </strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr background="../../imagens/fundocelulas1.png">
      <td><strong>Proprietario 4       </strong></td>
      <td><strong>
        <input name="proprietario4" onKeyUp="maiuscula(this)" class='class02' type="text" id="proprietario4" size="50" maxlength="50">
      </strong></td>
      <td align="right">&nbsp;</td>
      <td style="text-align: center"><strong>Data Nasc 4</strong></td>
      <td style="text-align: center"><strong>Celular4</strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr background="../../imagens/fundocelulas1.png">
      <td>&nbsp;</td>
      <td><strong>
        <input name="email_representante4" onKeyUp="maiuscula(this)" class='class02' type="hidden" id="email_representante4" size="50" maxlength="50">
      </strong></td>
      <td align="right"><strong>
        <input type="hidden" class='class02' name="cpf4" id="cpf4">
      </strong></td>
      <td style="text-align: center"><strong>
        <input name="data_nasc4" class='class02' type="text" id="data_nasc4" size="15" maxlength="10" OnKeyPress="formatar(this, '##-##-####')" onBlur="return doDateVenc(this.id,this.value, 4);">
      </strong></td>
      <td style="text-align: center"><strong>
        <input name="celular4" onKeyUp="maiuscula(this)" class='class02' type="text" id="celular4">
      </strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr background="../../imagens/fundocelulas2.png">
      <td align="center"><strong>Banco</strong></td>
      <td align="center"><strong> Agencia</strong></td>
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
      <td width="13%" align="center">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr background="../../imagens/fundocelulas2.png">
      <td align="center"><strong><font color="#0000FF">
        <input class='class02' name="chavepix" onKeyUp="maiuscula(this)" type="text" id="chavepix" value="<? echo $chavepix; ?>">
      </font></strong></td>
      <td align="center"><strong><font color="#0000FF"><font color="#0000FF">
        <select class='class02' name="tipochavepix" id="tipochavepix">
          <option selected><? echo $tipochave; ?></option>
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
      <td align="center">&nbsp;</td>
      <td align="center"><strong><font color="#0000FF">
        <input class='class02' name="nomeagencia" onKeyUp="maiuscula(this)" type="hidden" id="nomeagencia" value="<? echo $nomeagencia; ?>">
      </font></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>

      <td><strong>Obs</strong></td>

      <td colspan="2"><strong>
        <textarea name="obs" onKeyUp="maiuscula(this)" class='class02' cols="50" rows="7" id="obs"></textarea>
      </strong></td>

      <td colspan="2">&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td colspan="2"><strong><font color="#0000FF">

        <input name="dataalteracao" type="hidden" id="dataalteracao">

        <input name="horaalteracao" type="hidden" id="horaalteracao">

        <input name="operador" type="hidden" id="operador3" value="<? echo $nome; ?>">

        <input name="cel_operador" type="hidden" id="cel_operador" value="<? echo $celular; ?>">

        <input name="email_operador" type="hidden" id="email_operador" value="<? echo $email; ?>">

        <input name="estabelecimento" type="hidden" id="estabelecimento" value="<? echo $estabelecimento; ?>">

        <input name="cidade_estabelecimento" type="hidden" id="cidade_estabelecimento" value="<? echo $cidade_estabelecimento; ?>">

        <input name="tel_estabelecimento" type="hidden" id="tel_estabelecimento" value="<? echo $tel_estabelecimento; ?>">

        <input name="email_estabelecimento" type="hidden" id="email_estabelecimento" value="<? echo $email_estabelecimento; ?>">

        <input name="operador_alterou" type="hidden" id="operador_alterou">

        <input name="cel_operador_alterou" type="hidden" id="cel_operador_alterou">

        <input name="email_operador_alterou" type="hidden" id="email_operador_alterou">

        <input name="estabelecimento_alterou" type="hidden" id="estabelecimento_alterou">

        <input name="cidade_estabelecimento_alterou" type="hidden" id="cidade_estabelecimento_alterou">

        <input name="tel_estabelecimento_alterou" type="hidden" id="tel_estabelecimento_alterou">

        <input name="email_estabelecimento_alterou" type="hidden" id="email_estabelecimento_alterou">

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
      </strong></td><td><div align="right"> </div></td>

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
</body>

</html>

