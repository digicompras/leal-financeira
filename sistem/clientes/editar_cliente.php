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
	
	
$solicitacao = $_POST['solicitacao'];

if($solicitacao=="excluirarquivo"){

$codigodoarquivointegral = $_POST['codigodoarquivointegral'];


$sql = "SELECT * FROM anexos where codigo = '$codigodoarquivointegral' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

//$codigodoarquivointegral = $linha[0];
	$numerodaproposta = $linha[4];
$anexonome = $linha[7];
$caminhoarquivo = $linha[8];
$tipoanexo_integral_antes = $linha[9];
$statusanexo = $linha[10];


$caminhoarquivoanexonome = "../../$caminhoarquivo$anexonome";

}


	$arquivoaserdeletado = "$caminhoarquivoanexonome";
//$arquivoaserdeletado = $_POST['arquivodeletar'];

unlink("$arquivoaserdeletado");


	
$comando = "delete from `anexos` where `anexos`. `codigo` = '$codigodoarquivointegral' limit 1 ";

mysql_query($comando,$conexao) or die("Erro ao excluir anexo");
	
$cpfretorno = $_POST['cpfretorno'];
	
	echo "<script>

alert('Arquivo deletado com sucesso!');



window.location = 'editar_cliente.php?cpf=$cpfretorno';



</script>";
	


}


?>



<html>

<script language="Javascript">

function right(e) {

if (navigator.appName == 'Netscape' && (e.which == 3 || e.which == 2)){

alert("ATENÇAO!!!... NÃO É PERMITIDO CÓPIAS!");

return false;

}

else if (navigator.appName == 'Microsoft Internet Explorer' &&

(event.button == 2 || event.button == 3)) {

alert("ATENÇAO!!!... NÃO É PERMITIDO CÓPIAS!");

return false;

}

return true;

}

document.onmousedown=right;

if (document.layers) window.captureEvents(Event.MOUSEDOWN);

window.onmousedown=right;

</script>

<head>
	
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

-->
</style>

</head>
<?




$cpf = $_POST['cpf'];

$cpfget = $_GET['cpf'];

if(empty($cpf)){
$cpfretorno = $cpfget;
}
else{
$cpfretorno = $cpf;
}


?>
<?



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];





$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha' and status = 'Ativo' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$operador_alterando = $linha[1];

$cel_operador_alterando = $linha[19];

$email_operador_alterando = $linha[20];

$estab_pertence_alterando = $linha[44];


}

?>



<?

$sql = "SELECT * FROM clientes where cpf = '$cpfretorno' limit 1";

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

//$cel_operador_alterou = $linha[34];

$email_operador_alterou = $linha[35];

$estabelecimento_alterou = $linha[36];

//$cidade_estabelecimento_alterou = $linha[37];

//$tel_estabelecimento_alterou = $linha[38];

//$email_estabelecimento_alterou = $linha[39];

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





$dataprev = $linha[76];

$cpf_rg = $linha[78];

$comp_end = $linha[79];

$comp_quit1 = $linha[80];

$comp_quit2 = $linha[81];

$comp_quit3 = $linha[82];

$comp_quit4 = $linha[83];

$comp_quit5 = $linha[84];

$comp_quit6 = $linha[85];

$comp_renda = $linha[86];

$cpf_rg_testemunha = $linha[87];

$status_cliente = $linha[89];

$tem_margem = $linha[107];

$saldo1 = $linha[108];
$saldo2 = $linha[109];
$saldo3 = $linha[110];
$saldo4 = $linha[111];
$saldo5 = $linha[112];
$saldo6 = $linha[113];
$saldo7 = $linha[114];
$naturalidade = $linha[115];
$pagto_beneficio = $linha[116];



$resposta = $linha[119];



$secretaria = $linha[124];
$senha_servidor = $linha[125];
$fazer_portabilidade = $linha[126];
$obs_das_margens = $linha[127];


$valor_parcela = $linha[128];
$saldo_devedor = $linha[129];
$parcelas_em_aberto = $linha[130];
$prazo_contrato = $linha[131];
$aprovacao = $linha[132];
$valor_liberado = $linha[133];
$categoria = $linha[134];

$funcao_operador = $linha[135];

$valorrenda = $linha[136];

$idade = $linha[137];

$dia_niver = $linha[138];

$ano_niver = $linha[139];

$celular2 = $linha[140];

$tipo_conta = $linha[141];
	
$conjuge = $linha[143];
$cpfconjuge = $linha[144];
$valorrenda2 = $linha[145];
$valorrenda3 = $linha[146];

$mes_do_niver = $linha[88];

	$codigo_inss1 = $linha[148];
	$codigo_inss2 = $linha[149];
	$codigo_inss3 = $linha[150];
	$codigo_inss4 = $linha[151];
	$especiebeneficio1 = $linha[152];
	$especiebeneficio2 = $linha[153];
	$especiebeneficio3 = $linha[154];
	$especiebeneficio4 = $linha[155];
	
}

$datanascimento = "$dia_niver/$mes_do_niver/$ano_niver";

if(empty($data_nasc)){

}
else{

//calculando a idade

  // Declara a data! :P
    $data = $data_nasc;
   
    // Separa em dia, mês e ano
    list($dia, $mes, $ano) = explode('/', $data);
   
    // Descobre que dia é hoje e retorna a unix timestamp
    $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
    // Descobre a unix timestamp da data de nascimento do fulano
    $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
   
    // Depois apenas fazemos o cálculo já citado :)
    $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
    //print $idade;
	
$mes_niver = $mes;

//fim do calculo de idade

}
?>


<?


//-------------------------------------------------------

//$nome = $_POST['nome'];

$nomeget = $_GET['nome'];

if(empty($nome)){
$nomeretorno = $nomeget;
}
else{
$nomeretorno = $nome;
}


//-------------------------------------------------------



//-------------------------------------------------------

//$telefone = $_POST['telefone'];

$telefoneget = $_GET['telefone'];

if(empty($telefone)){
$telefoneretorno = $telefoneget;
}
else{
$telefoneretorno = $telefone;
}


//-------------------------------------------------------

//$celular = $_POST['celular'];

$celularget = $_GET['celular'];

if(empty($celular)){
$celularretorno = $celularget;
}
else{
$celularretorno = $celular;
}


//-------------------------------------------------------

//$num_beneficio = $_POST['num_beneficio'];

$num_beneficioget = $_GET['num_beneficio'];

if(empty($num_beneficio)){
$num_beneficioretorno = $num_beneficioget;
}
else{
$num_beneficioretorno = $num_beneficio;
}


//-------------------------------------------------------

//$secretaria = $_POST['secretaria'];

$secretariaget = $_GET['secretaria'];

if(empty($secretaria)){
$secretariaretorno = $secretariaget;
}
else{
$secretariaretorno = $secretaria;
}


//-------------------------------------------------------

//$categoria = $_POST['categoria'];

$categoriaget = $_GET['categoria'];

if(empty($categoria)){
$categoriaretorno = $categoriaget;
}
else{
$categoriaretorno = $categoria;
}


//-------------------------------------------------------

//$rg = $_POST['rg'];

$rgget = $_GET['rg'];

if(empty($rg)){
$rgretorno = $rgget;
}
else{
$rgretorno = $rg;
}


//-------------------------------------------------------

//$mae = $_POST['mae'];

$maeget = $_GET['mae'];

if(empty($mae)){
$maeretorno = $maeget;
}
else{
$maeretorno = $mae;
}


//-------------------------------------------------------

//$valorrenda = $_POST['valorrenda'];

$valorrendaget = $_GET['valorrenda'];

if(empty($valorrenda)){
$valorrendaretorno = $valorrendaget;
}
else{
$valorrendaretorno = $valorrenda;
}


//-------------------------------------------------------

//$senha_servidor = $_POST['senha_servidor'];

$senha_servidorget = $_GET['senha_servidor'];

if(empty($senha_servidor)){
$senha_servidorretorno = $senha_servidorget;
}
else{
$senha_servidorretorno = $senha_servidor;
}


//-------------------------------------------------------

//$idade = $_POST['idade'];

$idadeget = $_GET['idade'];

if(empty($idade)){
$idaderetorno = $idadeget;
}
else{
$idaderetorno = $idade;
}


//-------------------------------------------------------

//$data_nasc = $_POST['data_nasc'];

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



<form name="form2" method="post" action="">

</form>

<form name="form1" method="post" action="menu.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
  <input type="hidden" name="codigolancamento" id="codigolancamento">
  <input type="hidden" name="solicitacao" id="solicitacao">
<input class='class01' type="submit" name="Submit3" value="Voltar">

</form>


<?

if($status_cliente =="Inativo"){
echo "<script>
alert('ATENÇÃO!!!... CLIENTE BLOQUEADO NO SISTEMA, IMPOSSÍVEL EDITAR O CLIENTE!');

window.location = 'menu.php';

</script>";
}
?>

<?



if($mes_niver == ""){

echo "<script>

alert('ATENÇÃO!!!... INFORME O MÊS DO ANIVERSÁRIO QUE SE ENCONTRA AO LADO DA DATA DE NASCIMENTO!.');

</script>";

}

?>
<?

//Define o caminho da pasta/arquivo

//$pasta = "../../$cpf";

//$jaexiste = "Pasta do cliente existente!";

?>

<div align="center">

  <strong><font color="#0000FF" size="4">Tela de edi&ccedil;&atilde;o do cadastro de clientes!</font></strong>

<form name="form3" method="post" action="cria_diretorio.php">

    <div align="center"> <strong>

      <input name="codigo" type="hidden" id="codigo4" value="<? echo $codigo; ?>">

      <input name="cpf" type="hidden" id="cpf" value="<? echo $cpf; ?>">

      </strong>

        <?

//Checa se o arquivo/pasta existe

//if(file_exists($pasta)) { echo $jaexiste; echo'<input type="hidden" name="criar_pasta" value="Não">';}

//else {

//        echo'<input type="submit" name="Submit2" value="Criar Pasta">';

//		        echo'<input type="hidden" name="criar_pasta" value="Sim">';



//}

?>
    </div>

  </form>

  </div>
<form action="grava_editar_cliente.php" method="post" enctype="multipart/form-data" name="form1">



<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">

    <tr>
      <td background="../../imagens/fundocelulas1.png">N&ordm; de Matr&iacute;cula      </td>
      <td background="../../imagens/fundocelulas1.png">Status</td>
      <td background="../../imagens/fundocelulas1.png">Perfil</td>
      <td background="../../imagens/fundocelulas1.png">Data Nasc      </td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><strong><font color="#0000FF"><? echo $codigo; ?></font>
            <input name="codigo" type="hidden" id="codigo3" value="<? echo $codigo; ?>">
      </strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong><font color="#0000FF"><? echo $status_cliente; ?></font></strong></td>

      <td background="../../imagens/fundocelulas1.png"><strong>
        <select class='class02' name="tipo" id="tipo">
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

      <td background="../../imagens/fundocelulas1.png"><input name="data_nasc" class='class02' type="text" id="data_nasc" value="<? if(empty($data_nasc)){ echo "$datanascimento"; }else{ echo "$data_nascretorno"; } ?>" size="15" maxlength="10" OnKeyPress="formatar(this, '##/##/####')" onBlur="return doDateVenc(this.id,this.value, 4);"></td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>

    <tr>
      <td background="../../imagens/fundocelulas1.png">Como Conheceu a Empresa?</td>
      <td background="../../imagens/fundocelulas1.png">Nome*</td>
      <td background="../../imagens/fundocelulas1.png">Estado Civil </td>
      <td background="../../imagens/fundocelulas1.png">Idade</td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
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
      <td background="../../imagens/fundocelulas1.png"><input class='class02' name="nome" type="text" id="nome" onKeyUp="maiuscula(this)" value="<? echo $nomeretorno; ?>"></td>
      <td background="../../imagens/fundocelulas1.png"><select class='class02' name="estadocivil" id="estadocivil">
        <option selected><? echo $estadocivil; ?></option>
        <?





    $sql = "select * from estado_civil order by estadocivil asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option value=" .$x['estadocivil']. ">".$x['estadocivil']."</option>";

    }

?>
      </select></td>
      <td background="../../imagens/fundocelulas1.png"><input name="idade" type="text" class='class02' id="idade" onKeyUp="maiuscula(this)" value="<? echo $idaderetorno; ?>" size="15" maxlength="10" readonly="true"></td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png">Categoria*</td>
      <td background="../../imagens/fundocelulas1.png">Secretaria*</td>
      <td background="../../imagens/fundocelulas1.png">Naturalidade</td>
      <td background="../../imagens/fundocelulas1.png">Orienta&ccedil;&atilde;o Sexual</td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><strong>
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
      <td background="../../imagens/fundocelulas1.png"><strong>
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
      <td background="../../imagens/fundocelulas1.png"><input class='class02' name="naturalidade" type="text" id="naturalidade" onKeyUp="maiuscula(this)" value="<? echo $naturalidade; ?>"></td>
      <td background="../../imagens/fundocelulas1.png"><select class='class02' name="sexo" id="sexo">
      <option selected><? echo "$sexo"; ?><option>
        <?

    $sql = "select * from orientacaosexual order by sexo asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['sexo']."</option>";

    }

?>
      </select></td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png">CPF*</td>
      <td background="../../imagens/fundocelulas2.png">RG*</td>
      <td background="../../imagens/fundocelulas2.png">&Oacute;rg&atilde;o Emissor RG</td>
      <td background="../../imagens/fundocelulas2.png">Data Emiss&atilde;o RG</td>
      <td background="../../imagens/fundocelulas2.png">Tipo do Benef&iacute;cio</td>
    </tr>

    <tr>
      <td width="23%" background="../../imagens/fundocelulas2.png"><input class='class02' name="cpf" type="text" id="cpf" onKeyUp="maiuscula(this)" value="<? echo $cpfretorno; ?>" size="18" maxlength="14"></td>
      <td width="27%" background="../../imagens/fundocelulas2.png"><input class='class02' name="rg" type="text" id="rg" onKeyUp="maiuscula(this)" value="<? echo $rgretorno; ?>" size="25" maxlength="25"></td>

      <td width="27%" background="../../imagens/fundocelulas2.png"><input class='class02' name="orgao" type="text" id="orgao" onKeyUp="maiuscula(this)" value="<? echo $orgao; ?>" size="15" maxlength="14"></td>

      <td width="23%" background="../../imagens/fundocelulas2.png"><input class='class02' name="emissao" type="text" id="emissao" value="<? echo $emissao; ?>" OnKeyPress="formatar(this, '##/##/####')" onBlur="return doDateVenc(this.id,this.value, 4);" size="15" maxlength="10"></td>
      <td width="23%" background="../../imagens/fundocelulas2.png"><select class='class02' name="pagto_beneficio" id="pagto_beneficio">
        <option selected><? echo $pagto_beneficio; ?></option>
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
      <td colspan="2" background="../../imagens/fundocelulas2.png">Codigo do Beneficio 1 / Especie do beneficio 1</td>
      <td background="../../imagens/fundocelulas2.png">Senha DATAPREV </td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="num_beneficio" type="text" id="num_beneficio" onKeyUp="maiuscula(this)" value="<? echo $num_beneficio; ?>"></td>
      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="valorrenda" type="text" id="valorrenda" onKeyUp="maiuscula(this)" value="<? echo $valorrendaretorno; ?>"></td>
      <td colspan="2" background="../../imagens/fundocelulas2.png"><strong>
        <select class='class02' name="codigo_inss1" id="codigo_inss1">
          <option selected><? echo "$codigo_inss1"; ?></option>
          <?

    $sql = "select * from tabela_beneficios where status = 'ativo' order by codigo_inss asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['codigo_inss']."</option>";

    }

?>
        </select>        
      <? echo "$especiebeneficio1"; ?></strong></td>
      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="dataprev" type="text" id="dataprev" onKeyUp="maiuscula(this)" value="<? echo $dataprev; ?>"></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png">N&ordm; Benef&iacute;cio2</td>
      <td background="../../imagens/fundocelulas2.png">Valor Renda2</td>
      <td colspan="2" background="../../imagens/fundocelulas2.png">Codigo do Beneficio 2 / Especie do beneficio 2</td>
      <td background="../../imagens/fundocelulas2.png">Senha do Servidor*</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="num_beneficio2" type="text" id="num_beneficio2" onKeyUp="maiuscula(this)" value="<? echo $num_beneficio2; ?>"></td>
      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="valorrenda2" type="text" id="valorrenda2" value="<? echo $valorrenda2; ?>" onKeyUp="maiuscula(this)"></td>
      <td colspan="2" background="../../imagens/fundocelulas2.png"><strong>
        <select class='class02' name="codigo_inss2" id="codigo_inss2">
          <option selected><? echo "$codigo_inss2"; ?></option>
          <?

    $sql = "select * from tabela_beneficios where status = 'ativo' order by codigo_inss asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['codigo_inss']."</option>";

    }

?>
        </select>        
      <? echo "$especiebeneficio2"; ?></strong></td>
      <td background="../../imagens/fundocelulas2.png"><font color="#0000FF">
        <input class='class02' name="senha_servidor" type="text" id="senha_servidor" value="<? echo $senha_servidorretorno; ?>">
      </font></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png">N&ordm; Benef&iacute;cio 3</td>
      <td background="../../imagens/fundocelulas2.png">Valor Renda3</td>
      <td colspan="2" background="../../imagens/fundocelulas2.png">Codigo do Beneficio 3 / Especie do beneficio 3</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="num_beneficio3" type="text" id="num_beneficio3" onKeyUp="maiuscula(this)" value="<? echo $num_beneficio3; ?>"></td>
      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="valorrenda3" type="text" id="valorrenda3" value="<? echo $valorrenda3; ?>" onKeyUp="maiuscula(this)"></td>
      <td colspan="2" background="../../imagens/fundocelulas2.png"><strong>
        <select class='class02' name="codigo_inss3" id="codigo_inss3">
          <option selected><? echo "$codigo_inss3"; ?></option>
          <?

    $sql = "select * from tabela_beneficios where status = 'ativo' order by codigo_inss asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['codigo_inss']."</option>";

    }

?>
        </select>        
      <? echo "$especiebeneficio3"; ?></strong></td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png">Pai</td>

      <td background="../../imagens/fundocelulas2.png">M&atilde;e*</td>

      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
    </tr>

    <tr>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="pai" type="text" id="pai" onKeyUp="maiuscula(this)" value="<? echo $pai; ?>"></td>

      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="mae" type="text" id="mae" onKeyUp="maiuscula(this)" value="<? echo $maeretorno; ?>"></td>

      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png">Endere&ccedil;o</td>
      <td background="../../imagens/fundocelulas1.png">N&uacute;mero</td>
      <td background="../../imagens/fundocelulas1.png">Bairro</td>
      <td background="../../imagens/fundocelulas1.png">Complemento</td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><input class='class02' name="endereco" type="text" id="endereco" onKeyUp="maiuscula(this)" value="<? echo $endereco; ?>"></td>
      <td background="../../imagens/fundocelulas1.png"><input class='class02' name="numero" type="text" id="numero" onKeyUp="maiuscula(this)" value="<? echo $numero; ?>" size="10" maxlength="10"></td>
      <td background="../../imagens/fundocelulas1.png"><input class='class02' name="bairro" type="text" id="bairro" onKeyUp="maiuscula(this)" value="<? echo $bairro; ?>"></td>
      <td background="../../imagens/fundocelulas1.png"><input class='class02' name="complemento" type="text" id="complemento" onKeyUp="maiuscula(this)" value="<? echo $complemento; ?>"></td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png">Cidade</td>
      <td background="../../imagens/fundocelulas1.png">Cep</td>

      <td background="../../imagens/fundocelulas1.png">E-Mail</td>

      <td background="../../imagens/fundocelulas1.png">Telefone</td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>

    <tr>
      <td background="../../imagens/fundocelulas1.png"><select class='class02' name="cidade" id="cidade">
        <option selected><? echo $cidade; ?></option>
        <?





    $sql = "select * from cidades order by cidade asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['cidade']."</option>";

    }

?>
      </select></td>
      <td background="../../imagens/fundocelulas1.png"><input class='class02' name="cep" type="text" id="cep" onKeyUp="maiuscula(this)" value="<? echo $cep; ?>" size="9" maxlength="9">
00000-000</td>

      <td background="../../imagens/fundocelulas1.png"><input class='class02' name="email" type="text" id="email" onKeyUp="maiuscula(this)" value="<? echo $email; ?>"></td>

      <td background="../../imagens/fundocelulas1.png"><input class='class02' name="telefone" type="text" id="telefone" onkeypress="mascara(this, '##-####-####')" value="<? echo $telefoneretorno; ?>" size="12" maxlength="12"></td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png">Estado</td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas1.png">Celular*</td>
      <td background="../../imagens/fundocelulas1.png">Celular2</td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><select class='class02' name="estado" id="estado">
        <option selected><? echo $estado; ?></option>
        <?





    $sql = "select * from estados_do_brasil order by estado asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option value=" .$x['estado']. ">".$x['estado']."</option>";

    }

?>
      </select></td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas1.png"><input class='class02' name="celular" type="text" id="celular" onkeypress="mascara(this, '##-#####-####')" value="<? echo $celularretorno; ?>" size="12" maxlength="13"></td>
      <td background="../../imagens/fundocelulas1.png"><input class='class02' name="celular2" type="text" id="celular2" onkeypress="mascara(this, '##-#####-####')" value="<? echo $celular2; ?>" size="12" maxlength="13"></td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>

    <tr>
      <td background="../../imagens/fundocelulas2.png"><p>Banco do cliente</p></td>
      <td background="../../imagens/fundocelulas2.png">Ag&ecirc;ncia</td>

      <td background="../../imagens/fundocelulas2.png">Conta</td>

      <td background="../../imagens/fundocelulas2.png">Tipo Conta</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
    </tr>

    <tr>
      <td background="../../imagens/fundocelulas2.png"><select class='class02' name="banco" id="banco">
          <option selected><? echo $banco; ?></option>
          <?





    $sql = "select * from bancos order by banco asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['banco']."</option>";

    }

?>
      </select></td>
      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="agencia" type="text" id="agencia" onKeyUp="maiuscula(this)" value="<? echo $agencia; ?>"></td>

      <td background="../../imagens/fundocelulas2.png"><input class='class02' name="conta" type="text" id="conta" onKeyUp="maiuscula(this)" value="<? echo $conta; ?>"></td>

      <td background="../../imagens/fundocelulas2.png"><strong><font color="#0000FF">
        <select class='class02' name="tipo_conta" id="tipo_conta">
        <option selected><? echo "$tipo_conta"; ?><option>
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
      <td background="../../imagens/fundocelulas2.png"><input name="conjuge" type="text" class='class02' id="conjuge" onKeyUp="maiuscula(this)" value="<? echo "$conjuge"; ?>" size="30"></td>
      <td background="../../imagens/fundocelulas2.png"><input name="cpfconjuge" type="text" class='class02' id="cpfconjuge" onKeyUp="maiuscula(this)" value="<? echo "$cpfconjuge"; ?>" size="30"></td>
      <td background="../../imagens/fundocelulas2.png">Observa&ccedil;&otilde;es</td>

      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
    </tr>

    <tr>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png"><textarea class='class02' name="obs2" cols="45" rows="7"  id="obs2" onKeyUp="maiuscula(this)"><? echo $obs2; ?></textarea></td>
      <td background="../../imagens/fundocelulas2.png"><textarea class='class02' name="obs_cli" cols="45" rows="7" readonly="readonly" id="obs_cli" onKeyUp="maiuscula(this)"><?  

$sql = "SELECT * FROM observacoes_de_clientes where cpf = '$cpf' order by codigo desc";

$res = mysql_query($sql);

$reg = 0;

//echo "<tr>";

while($linha=mysql_fetch_row($res)) {



//$codigo = $linha[0];

$cod_cli = $linha[1];

$cpf = $linha[2];

$data = $linha[3];

$hora = $linha[4];

$observacoes_do_cliente = $linha[5];

$operador = $linha[6];





echo "$data - $hora - "."$observacoes_do_cliente - "."$operador";

?>



<?



if($reg==1){

//echo "</tr>";

$reg=0;

}





}

	  

	  

	  

	  

	   ?>
      </textarea></td>

      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
      <td background="../../imagens/fundocelulas2.png">&nbsp;</td>
    </tr>

    <tr>
      <td colspan="5"><div align="left">________________________________________________________________________________________________________________________________________</div></td>
    </tr>
    <tr>
      <td colspan="5"><div align="center"><strong>RESPOSTA PUBLICO / VER MARGEM</strong></div></td>
    </tr>
    <tr>
      <td colspan="5"><div align="center">
        <?
//----------------------INICIO DA GRAVA&Ccedil;&Atilde;O E ENVIO PARA O OPERADOR--------------------

if($solicitacao=="responder"){

$codigolancamento = $_POST['codigolancamento'];
$cod_cli_gravar = $_POST['cod_cli'];
$date_gravar = date('Y-m-d');
$hora_gravar = date('H:i:s');
$status = $_POST['status'];
$operador_gravar = $_POST['operador'];

$margem_disponivel = $_POST['margem_disponivel'];
$obs = $_POST['obs'];

$valor_parcela = $_POST['valor_parcela'];
$saldo_devedor = $_POST['saldo_devedor'];
$parcelas_em_aberto = $_POST['parcelas_em_aberto'];
$prazo_contrato = $_POST['prazo_contrato'];
$aprovacao = $_POST['aprovacao'];
$valor_liberado = $_POST['valor_liberado'];


$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`margem_portabilidade` set `data_resposta` = '$date_gravar',`hora_resposta` = '$hora_gravar',`status` = '$status',`margem_disponivel` = '$margem_disponivel',`obs` = '$obs' where `margem_portabilidade`. `codigo` = '$codigolancamento' limit 1 ";
}

mysql_query($comando,$conexao);




$sql = "SELECT * FROM parcelas_pedido_margem where pedido = '$codigolancamento' order by codigo asc";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$codigo_parcelas_pedido_margem = $linha[0];


$sql2 = "select * from db";
$res2 = mysql_query($sql2);
while($linha=mysql_fetch_row($res2)) {


$comando = "update `$linha[1]`.`parcelas_pedido_margem` set `pedido` = '$codigolancamento',`status` = '$status' where `parcelas_pedido_margem`. `codigo` = '$codigo_parcelas_pedido_margem'";
}

mysql_query($comando,$conexao);

}




}


//---------------------FIM DA GRAVA&Ccedil;&Atilde;O E ENVIO PARA O OPERADOR------------------------
?>
        <?

$sql = "SELECT * FROM margem_portabilidade where cod_cli = '$codigo' and (status = 'Analisado' or status = 'Pendente') order by codigo desc limit 1";

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

$margem_disponivel2 = $linha[31];

$bco_operacao1 = $linha[32];

$bco_operacao2 = $linha[33];

$margem_rmc = $linha[35];


?>
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td colspan="6"><div align="center" class="style9">
              <strong>
            <? $sql2 = "SELECT * FROM margem_portabilidade where cod_cli = '$codigo' and (status = 'A Verificar' or status = 'Pendente') order by codigo desc limit 1";

$res2 = mysql_query($sql2);

while($linha=mysql_fetch_row($res2)) {
$registros_portabilidade = mysql_num_rows($res2);



$num_pedido_ver_margem = $linha[0];

}

if($registros_portabilidade>=1){
	
echo "O pedido nº $num_pedido_ver_margem está em análise!";

}

?>
              </strong></div></td>
            </tr>
          <tr>
            <td colspan="2" background="../../imagens/fundocelulas1.png">Resposta do pedido N&ordm; <? echo $codigolancamento; ?></td>
            <td width="6%" background="../../imagens/fundocelulas1.png">Status</td>
            <td width="11%" background="../../imagens/fundocelulas1.png"><table width="100%" border="1">
              <tr>
                <td><? echo $status; ?></td>
              </tr>
            </table></td>
            <td width="16%" background="../../imagens/fundocelulas1.png"><div align="center">Data / Hora da resposta: </div></td>
            <td width="21%" background="../../imagens/fundocelulas1.png"><table width="100%" border="1">
              <tr>
                <td><? echo "$data_resposta / $hora_resposta"; ?></td>
              </tr>
            </table></td>
            </tr>
          <tr>
            <td width="15%" background="../../imagens/fundocelulas1.png">Margem Disponivel 1</td>
            <td colspan="2" background="../../imagens/fundocelulas1.png"><table width="100%" border="1">
              <tr>
                <td><? echo $margem_disponivel; ?></td>
              </tr>
            </table></td>
            <td background="../../imagens/fundocelulas1.png"><div align="right">Bco Opera&ccedil;&atilde;o</div></td>
            <td background="../../imagens/fundocelulas1.png"><? echo $bco_operacao1; ?></td>
            <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
            </tr>
          <tr>
            <td background="../../imagens/fundocelulas1.png">Margem Disponivel 2</td>
            <td colspan="2" background="../../imagens/fundocelulas1.png"><table width="100%" border="1">
              <tr>
                <td><? echo $margem_disponivel2; ?></td>
              </tr>
            </table></td>
            <td background="../../imagens/fundocelulas1.png"><div align="right">Bco Opera&ccedil;&atilde;o</div></td>
            <td background="../../imagens/fundocelulas1.png"><? echo $bco_operacao2; ?></td>
            <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
            </tr>
          <tr>
            <td background="../../imagens/fundocelulas1.png">Margem p/ RMC</td>
            <td colspan="2" background="../../imagens/fundocelulas1.png"><table width="100%" border="1">
              <tr>
                <td><? echo $margem_rmc; ?></td>
              </tr>
            </table></td>
            <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
            <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
            <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
            </tr>
          <tr>
            <td background="../../imagens/fundocelulas1.png">Observa&ccedil;&otilde;es<strong>
              <input name="obs" type="hidden" id="obs" value="<? echo $obs; ?>">
            </strong></td>
            <td colspan="4" background="../../imagens/fundocelulas1.png"><table width="100%" border="1">
              <tr>
                <td>
<?
				 
//$sql = "SELECT * FROM margem_portabilidade where cod_cli = '$codigo' order by data_resposta desc limit 1";
//$res = mysql_query($sql);
//while($linha=mysql_fetch_row($res)) {


//$ultima_obs = $linha[29];


//}

echo $obs; 

?></td>
                </tr>
            </table></td>
            <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
            </tr>
        </table>
        <? } ?>
      </div></td>
    </tr>
    <tr>
      <td colspan="5"><div align="center">
        <table width="100%" border="0" align="center">
          <tr>
            <td colspan="5"><div align="center"></div></td>
          </tr>
          <?

echo "<form name='form1' method='post' action='margem_a_verificar.php'>

<tr>
<td colspan='6'><div align='center'>PORTABILIDADES A SEREM FEITAS</div></td>
</tr>

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
      </div></td>
    </tr>
    <tr>
      <td colspan="5"><div align="left">____________________________________________________________________________________________________________________________________________________________</div></td>
    </tr>
    <tr>
      <td colspan="5" background="../../imagens/fundocelulas2.png"><div align="center"><strong>HISTORICO RESPOSTA PUBLICO / MARGEM</strong></div></td>
    </tr>
    <tr>
      <td colspan="5" background="../../imagens/fundocelulas2.png"><div align="center">
        <textarea class='class02' name="obs4" cols="100" rows="4" <?  echo "readonly='readonly'"; ?> id="obs4"><?  

$sql = "SELECT * FROM margem_portabilidade where cod_cli = '$codigo' order by data_resposta desc";

$res = mysql_query($sql);

$reg = 0;

while($linha=mysql_fetch_row($res)) {



$operador_respodeu = $linha[5];

$data_resposta = $linha[27];

$hora_resposta = $linha[28];

$obs = $linha[29];





echo "$data_resposta - $hora_resposta -"."$obs - $operador_respodeu";

?>



<?



if($reg==1){

//echo "</tr>";

$reg=0;

}





}

	  
?>
	  

	  

	  

</textarea>
      </div></td>
    </tr>
    <tr>
      <td colspan="5" background="../../imagens/fundocelulas2.png"><div align="center"><strong>RESPOSTA INSS / VER POSSIBILIADES</strong></div></td>
    </tr>
    <tr>
      <td colspan="5" background="../../imagens/fundocelulas2.png"><div align="center">
        <textarea class='class02' name="hiscon" cols="100" rows="10" readonly="readonly" id="hiscon"><?  

$sql = "SELECT * FROM hiscon where cpf = '$cpf' order by codigo desc";

$res = mysql_query($sql);

$reg = 0;

//echo "<tr>";

while($linha=mysql_fetch_row($res)) {



//$codigo = $linha[0];

$cod_cli = $linha[1];

$cpf = $linha[2];

$data = $linha[3];

$hora = $linha[4];

$observacoes_do_cliente = $linha[5];

$operador = $linha[6];





echo "$data - $hora - "."$observacoes_do_cliente - "."$operador";

?>



<?



if($reg==1){

//echo "</tr>";

$reg=0;

}





}

	  

	  

	  

	  

	   ?>
        </textarea>
      </div></td>
    </tr>
    <tr>
      <td colspan="5" align="center" background="../../imagens/fundocelulas2.png">Inserir Arquivo</td>
    </tr>
    <tr>
      <td colspan="5" align="center" background="../../imagens/fundocelulas2.png">Num Proposta
        <label for="num_proposta">:</label>
        <input class='class02' type="text" name="num_proposta" id="num_proposta">
        <label for="anexointegralproposta">:</label>
        <label for="anexointegralproposta">:</label>
        <input class='class02' type="file" name="anexointegralproposta" id="anexointegralproposta">
Link externo
<label for="linkexterno">:</label>
<input class='class02' type="text" name="linkexterno" id="linkexterno">
(Opcional)</td>
    </tr>
    <tr>
      <td colspan="5" background="../../imagens/fundocelulas2.png"><div align="center">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <input class='class01' type="submit" name="button" id="button" value="Salvar">
      </div></td>
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
<table width="100%" border="0">
  <tr>
    <td align="center" valign="middle">#</td>
    <td align="center">Data da Inser&ccedil;&atilde;o</td>
    <td align="center" valign="middle">Nome do Arquivo</td>
    <td align="center" valign="middle">Numero da Proposta</td>
    <td align="center" valign="middle">#</td>
    <td align="center" valign="middle">Link Externo(Opcional)</td>
  </tr>
  <?
		
$sql = "SELECT * FROM anexos where numeroprotocolo = '$codigo' order by codigo desc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registrosdeprotocolo = mysql_num_rows($res);

$codigodoarquivointegral = $linha[0];
$datadainsercao = $linha[1];
$numerodaproposta = $linha[4];
$anexonome = $linha[7];
$caminhoarquivo = $linha[8];
$tipoanexo_integral_antes = $linha[9];
$statusanexo = $linha[10];
$linkexterno = $linha[12];

$caminhoarquivoanexonome = "../../$caminhoarquivo$anexonome";
	
$estadodocampo_excluirarquivos = "<input class='class01' type='submit' name='button6' id='button6' value='x'>";

?>
  <tr>
    <td width="20%" valign="middle"><form name="form4" method="post" action="editar_cliente.php">
      <div align="center">
        <input name="codigodoarquivointegral" type="hidden" id="codigodoarquivointegral" value="<? echo "$codigodoarquivointegral"; ?>">
        <input name="solicitacao" type="hidden" id="solicitacao" value="<? echo "excluirarquivo"; ?>">
        <input name="arquivodeletar" type="hidden" id="arquivodeletar" value="<? echo "$caminhoarquivoanexonome"; ?>">
        <input name="cpfretorno" type="hidden" id="cpfretorno" value="<? echo "$cpf"; ?>">
        <strong><font color="#0000FF"> </font></strong>
        <input name="protocologerado" type="hidden" id="protocologerado" value="<? echo "$protocolomateria"; ?>">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <? echo "$estadodocampo_excluirarquivos"; ?> </div>
    </form></td>
    <td width="12%" align="center"><? echo "$datadainsercao"; ?></td>
    <td width="18%" valign="middle"><div align="center"><? echo "$anexonome"; ?></div></td>
    <td width="19%" valign="middle"><div align="center"><? echo "<a href='../propostas/imprimir_proposta.php?num_proposta=$numerodaproposta' target='_blank'>$numerodaproposta</a> "; ?></div></td>
    <td width="19%" valign="middle"><div align="center"><? echo "<a href='$caminhoarquivoanexonome' target='_blank'>Visualizar/Download</a>"; ?></div></td>
    <td width="12%" align="center" valign="middle"><? if(empty($linkexterno)){}else{ echo "<a href='$linkexterno' target='_blank'>Link Externo</a>"; } ?></td>
  </tr>
  <?  }  ?>
</table><br>
<table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>

      <td colspan="2" background="../../imagens/fundocelulas1.png"><strong>Cadastro efetuado por <br>

        </strong><strong><font color="#0000FF"><? echo $operador; ?>

        

      </font></strong><strong><font color="#0000FF"> </font></strong></td>

<td width="35%" background="../../imagens/fundocelulas1.png"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>

              <? echo $email_operador; ?>

      </font><font color="#0000FF"> </font></strong></td>

<td width="20%" background="../../imagens/fundocelulas1.png"><strong>Celular:<font color="#0000FF"><br>

              <? echo $cel_operador; ?>

      </font><font color="#0000FF"> </font></strong></td>
  </tr>

    <tr>

      <td width="18%" background="../../imagens/fundocelulas1.png"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>

          <strong><font color="#0000FF"><? echo $estab_pertence; ?>        </font></strong><strong><font color="#0000FF"> </font></strong></td>

<td width="26%" background="../../imagens/fundocelulas1.png"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $tel_estab_pertence; ?>

      </font></strong></td>

<td background="../../imagens/fundocelulas1.png"><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $email_estab_pertence; ?>

      </font><font color="#0000FF"> </font></strong></td>

  <td background="../../imagens/fundocelulas1.png"><strong>Cidade: <br>

            <font color="#0000FF"><? echo $cidade_estab_pertence; ?>          </font></strong></td>
    </tr>

    <tr>

      <td background="../../imagens/fundocelulas1.png"><strong>Data do Cadastro <br>

              <font color="#0000FF"><? echo $datacadastro; ?> </font></strong></td>

<td background="../../imagens/fundocelulas1.png"><strong>Hora que foi efetuado o Cadastro <br>

              <font color="#0000FF"><? echo $horacadastro; ?> </font></strong></td>

      <td background="../../imagens/fundocelulas1.png"><strong></strong></td>

      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
</table>

  <?

  	$_SESSION['usuario'] = $usuario;

	$_SESSION['senha'] = $senha;

	?>









  <table width="100%" border="0" cellpadding="0" cellspacing="0">

    <tr>

      <td colspan="2" valign="top" background="../../imagens/fundocelulas2.png"><strong>&Uacute;ltima altera&ccedil;&atilde;o efetuada pelo operador: <br>

      </strong><strong><font color="#0000FF"><? echo "$operador_alterou em $dataalteracao as $horaalteracao"; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>

<td width="35%" valign="top" background="../../imagens/fundocelulas2.png"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>

              <? echo $email_operador_alterou; ?> </font><font color="#0000FF"> </font></strong></td>

<td width="20%" valign="top" background="../../imagens/fundocelulas2.png"><strong>Celular:<font color="#0000FF"><br>

              <? echo $cel_operador_alterou; ?> </font><font color="#0000FF"> </font></strong></td>
    </tr>

    <tr>

      <td width="18%" valign="top" background="../../imagens/fundocelulas2.png"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>

          <strong><font color="#0000FF"><? echo $estabelecimento_alterou; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>

<td width="26%" valign="top" background="../../imagens/fundocelulas2.png"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $tel_estab_pertence; ?> </font></strong></td>

<td valign="top" background="../../imagens/fundocelulas2.png"><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $email_estab_pertence; ?> </font><font color="#0000FF"> </font></strong></td>

  <td valign="top" background="../../imagens/fundocelulas2.png"><strong>Cidade: <br>

            <font color="#0000FF"><? echo $cidade_estab_pertence; ?> </font></strong></td>
    </tr>
  </table>




  <table width="100%" border="0" cellpadding="0" cellspacing="0">

    <tr>

      <td colspan="2" background="../../imagens/fundocelulas1.png"><strong>Cadastro atualmente sendo alterado por: </strong></td>

      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>

      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>

    <tr>

      <td colspan="2" background="../../imagens/fundocelulas1.png"><strong><? echo $operador_alterando; ?></strong></td>

<td width="35%" background="../../imagens/fundocelulas1.png"> <strong>E-Mail do operador: <br>

              <? echo $email_operador_alterando; ?>  </strong></td>

      <td width="20%" background="../../imagens/fundocelulas1.png"><strong>Celular:<br>

              <? echo $cel_operador_alterou; ?>  </strong></td>
    </tr>

    <tr>

      <td width="18%" background="../../imagens/fundocelulas1.png"><strong> Estabelecimento:</strong> <br>

          <strong><? echo $estab_pertence_alterando; ?> </strong> </td>

      <td width="26%" background="../../imagens/fundocelulas1.png"><strong>Tel do estabelecimento: <br>

              <? echo $tel_estab_pertence; ?> </strong></td>

      <td background="../../imagens/fundocelulas1.png"><strong>E-Mail do estabelecimento: <br>

              <? echo $email_estab_pertence; ?>  </strong></td>

      <td background="../../imagens/fundocelulas1.png"><strong>Cidade: <br>
        <? echo $cidade_estab_pertence; ?> </strong></td>
    </tr>

    <tr>

      <td><strong><font color="#0000FF"> </font><font color="#0000FF"> </font></strong></td>

      <td>&nbsp;</td>

      <td><strong></strong></td>

      <td>&nbsp;</td>
    </tr>
  </table>




</body>

</html>

