<html>
<head>
<title>Leal Soluções Financeiras</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?
ini_set('default_charset','UTF8_general_mysql500_ci');

require 'conect/conect.php';


$sql = "select * from pag_inicial";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$pagina_inicial = $linha[1];
$texto2 = $linha[2];
$tamanho_fonte = $linha[3];
}
?>

<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {
	color: #009900;
	font-weight: bold;
	font-size: <? echo $tamanho_fonte; ?>;
}
.style2 {
	color: #1328c9;
	font-weight: bold;
	font-size: 12px;
}
.style3 {
	color: #0000FF;
	font-weight: bold;
	font-size: 50px;

}
.style10 {
	color: #1328c9;
	font-weight: bold;
	font-size: 24px;
}

-->
</style>
<style type="text/css">
<!--
.botao  {
	padding-left: 35px;
	float: left;
	middle:77px;
	
	margin:0px;
	padding:0px;
	width: 130px;
	height:25px;
        }

.botao a:visited {
	font: bold 12px/24px arial, helvetica, sans-aerif;
	padding:0px;
	text-decoration: none;
	text-align:center;

	background:  url('imagens/botao.png') no-repeat 
center center;
	width:130px;
	height:25px;
	display:block;
	}

.botao a:hover {
	background:  url('imagens/botao2.png') no-repeat 
center center;
	border: #ff4300;
               }
.style4 {
	font: bold 12px/24px arial, helvetica, sans-aerif;
	padding:0px;

	text-decoration: none;
	text-align:center;

float: left;
	middle:77px;
	background:  url('imagens/botao.png') no-repeat 
center center;
width:130px;
	height:25px;
	display:block;
	color: #FFFFFF;
}
.botao1 {	padding-left: 35px;
	float: left;
	middle:77px;
	
	margin:0px;
	padding:0px;
	width: 130px;
	height:25px;
}
.style8 {	font: bold 12px/24px arial, helvetica, sans-aerif;
	padding:0px;

	text-decoration: none;
	text-align:center;

float: left;
	middle:77px;
	background:  url('imagens/botao.png') no-repeat 
center center;
width:130px;
	height:25px;
	display:block;
	color: #FFFFFF;
}
.botao11 {padding-left: 35px;
	float: left;
	middle:77px;
	
	margin:0px;
	padding:0px;
	width: 130px;
	height:25px;
}
.style9 {font: bold 12px/24px arial, helvetica, sans-aerif;
	padding:0px;

	text-decoration: none;
	text-align:center;

float: left;
	middle:77px;
	background:  url('imagens/botao.png') no-repeat 
center center;
width:130px;
	height:25px;
	display:block;
	color: #FFFFFF;
}
-->

</style>



<script language="JavaScript" type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
</head>

<?

setlocale(LC_TIME, 'pt_BR');

$data_completa = strftime("%A, %d de %B de %Y<br><br>");

$hoje = strftime("%A");


$instrucao = $_GET['instrucao'];

?>

<?
	  
$sql = "SELECT * FROM franquia";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$franquia = $linha[1];
}
?>

<?
	  
$sql = "SELECT * FROM a_empresa";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$aempresa = $linha[1];
}
?>

<?
$sql = "select * from hora_encerramento where dia = '$hoje' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];
$dia = $linha[1];
$horas_inicio = $linha[2];
$minutos_inicio = $linha[3];
$segundos_inicio = $linha[4];
$horas_termino = $linha[5];
$minutos_termino = $linha[6];
$segundos_termino = $linha[7];

}
//$ajuste_horario = 2;
//$horacerta = date('H')+2;
//$hora_atual = "0".$horacerta.date(':i:s');
$date = date('d-m-Y');
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


<?
$hora_iniciar = "$horas_inicio".":"."$minutos_inicio".":"."$segundos_inicio";
$hora_terminar = "$horas_termino".":"."$minutos_termino".":"."$segundos_termino";
?>
<script language="javascript">
function foco(usuario)
{
document.getElementById(usuario).focus();
}
</script>



<?
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$background = $linha[1];

}
?>

<body background="background/<? echo $background; ?>" bgproperties="fixed">
<table width="998"  border="0" cellpadding="0" background="imagens/fundocelulas2.png">
  <tr>
    <td width="25%" valign="top">&nbsp;</td>
    <td width="60%" valign="top"><div align="center">
	

<?
if(empty($instrucao)){ 
$sql = "select * from publicidade order by posicao asc limit 3";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];
$posicao = $linha[1];
$imagem = $linha[2];



echo "<a href='publicidade/$imagem' target='_blank'><img src='publicidade/$imagem' border='0' width='200'></a> "; 

//printf("<img src='publicidade/$linha[1]' border='0' width='300'>");
}
}
if(empty($instrucao)){ echo "<div align='center' class='style1'><blink>". $pagina_inicial. "</blink></div><br>"; }
if(empty($instrucao)){ echo "<div align='center' class='style1'><blink> $texto2 </blink></div><br>"; }
//if(empty($instrucao)){ echo "<div align='center' class='style3'>0800-940-0481</div><br>"; }

if($instrucao=="franquia"){ echo "<br><br>".$franquia; }
if($instrucao=="aempresa"){ echo "<br>".$aempresa; }

if($instrucao=="contato"){ 

//INICIO DO SCRIPT PARA PEGAR IP
 
$_SERVER['REMOTE_ADDR'] . "<br/>";
 
$_SERVER['HTTP_X_FORWARDED_FOR'] . "<br/>";
 
$_SERVER['HTTP_CLIENT_IP'] . "<br/>";
 

 
 
$ip_faleconosco = $_SERVER['REMOTE_ADDR'];
 
 
 

//FIM DO SCRIPT PARA PEGAR IP

if($_POST[opc_enviar]) {


    
	//RECEBE OS DADOS DO FORMULÁRIO
	$v_nome      =   $_POST[nome];
	$v_email    =  $_POST[email];
	$v_fone  =  $_POST[fone];
	$v_obs   =  $_POST[obs];
	$v_cidade   =  $_POST[cidade];
	$v_estado   =  $_POST[estado];

	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO
	
$sql = "SELECT * FROM operadores where nome = 'Diogo Luiz Pelizaro' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$administrador = $linha[20];

}
	
	$email_dest   =   $administrador;
	
	//PREPARA O PEDIDO
	$mens  .=  " A sua mensagem foi enviada com sucesso. Agradecemos o seu contato    \n";
	$mens  .=  " Em breve lhe retornaremos sobre o assunto! \n\n";
	
	$mens  .=  "IP Utilizado: ".$ip_faleconosco."                                                       \n";
	$mens  .=  "Nome: ".$v_nome."                                                       \n";
	$mens  .=  "E-Mail: ".$v_email."                                                    \n";
	$mens  .=  "Telefone: ".$v_fone."                                                    \n";
	$mens  .=  "Cidade: ".$v_cidade."                                                    \n";
	$mens  .=  "Estado: ".$v_estado."                                                    \n";

	$mens  .=  "Mensagem: ".$v_obs."                                                    \n";
	
	//DISPARA O EMAIL
	$envia  =  mail($email_dest, "Fale conosco", $mens,"From:".$email_dest."\r\nBcc:".$v_email);
	
	//VERIFICA SE O EMAIL FOI ENVIADO COM SUCESSO
	if($envia) { 
	   //ELIMINA TODAS AS VARIÁVEIS DA SESSÃO
       $_SESSION = array();
       
	   //DESTRÓI A SESSÃO PARA GARANTIR
       @session_destroy(); ?>
<script language="JavaScript">
	   <!--
	      alert("PARABÉNS!!\n\n A Sua mensagem foi enviada com sucesso! Em breve lhe retornaremos sobre o assunto.");
		  window.location.href = "index.php";
	   //-->
	   </script>
    <?
	}//FECHA IF(envia)
	else {?>
       <script language="JavaScript">
	   <!--
	      alert("ERRO!!\n\n Ocorreu um erro inesperado em seu servidor.\n\nPor favor, tente novamente...");
		  window.location.href = "index.php";
	   //-->
	   </script>
<?
   }//FECHA ELSE (envia)
}//FECHA IF
?>
   
<table width="519"  border="0" cellspacing="0" cellpadding="0" >
  <tr> 
    <td> <form method="post" name="frmfinalizar" onSubmit="return finaliza();">
        <p align="center"> 
          <input type="hidden" name="opc_enviar" value="1">
          <input type="hidden" name="v_produtos" value="<? echo $v_produtos; ?>">
          <input type="hidden" name="v_nome" value="<? echo $v_nome; ?>">
          <input type="hidden" name="v_email" value="<? echo $v_email; ?>">
          <input type="hidden" name="v_user" value="<? echo $v_user; ?>">
          <input type="hidden" name="v_nomeE" value="<? echo $v_nomeE; ?>">
          <input type="hidden" name="v_EnderecoE" value="<? echo $v_EnderecoE; ?>">
          <input type="hidden" name="v_cidadeE" value="<? echo $v_cidadeE; ?>">
          <input type="hidden" name="v_EstadoE" value="<? echo $v_EstadoE; ?>">
          <input type="hidden" name="v_fonee" value="<? echo $v_fonee; ?>">
          <input type="hidden" name="v_CEPE" value="<? echo $v_CEPE; ?>">
          <input type="hidden" name="v_EmailE" value="<? echo $v_EmailE; ?>">
          <input type="hidden" name="v_insc" value="<? echo $v_insc; ?>">
          <input type="hidden" name="v_cnpj" value="<? echo $v_cnpj; ?>">
          <input type="hidden" name="v_pgto" value="<? echo $v_pgto; ?>">
          <input type="hidden" name="v_transp" value="<? echo $v_transp; ?>">
          <input type="hidden" name="v_total" value="<? echo $total; ?>">
          <input type="hidden" name="v_dataped" value="<? echo $dataped; ?>">
          <input type="hidden" name="v_dataent" value="<? echo $dataent; ?>">
      <div align="center"></div>
    </form></table>
      </div>
    
<? } ?>

<?
if($instrucao=="veiculos"){


//INICIO DO SCRIPT PARA PEGAR IP
 
echo "Remote addr: " .$_SERVER['REMOTE_ADDR'] . "<br/>";
 
echo "X Forward: " . $_SERVER['HTTP_X_FORWARDED_FOR'] . "<br/>";
 
echo "Clien IP: " . $_SERVER['HTTP_CLIENT_IP'] . "<br/>";
 

function getIp()
{
 
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
 
        $ip = $_SERVER['HTTP_CLIENT_IP'];
 
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
 
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
 
    }
    else{
 
        $ip = $_SERVER['REMOTE_ADDR'];
 
    }
 
    return $ip;
 
}

//FIM DO SCRIPT PARA PEGAR IP


echo "<form name='form1' method='post' action='verifica_op_veiculos.php' target='_top'>
  <table width='100%' border='0' align='center'>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan='4'><span class='style5'><span class='style2'><br>$data_completa</span></span></td>
      <td>&nbsp;</td>
      <td><span class='style5'><span class='style2'>$hora_atual</span></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan='9'><div align='left'>Hor&aacute;rio de funcionamento do sistema! In&iacute;cio as $hora_iniciar - T&eacute;rmino as $hora_terminar</span></div></td>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align='center'><span class='style6'>";
        
if($hora_atual<=$hora_iniciar){echo "Prezado Operador! Seu dia de trabalho ainda n&atilde;o teve inicio!<br>O sistema abrir&aacute; as $hora_iniciar<br>";
}

if($hora_atual>$hora_iniciar)if($hora_atual<$hora_terminar){ echo "<br><br>Prezado operador!<br><br>PARA SUA SEGURANÇA SEU IP $ip SERÁ GRAVADO AO REALIZAR SEU LOGIN!<br> Tenha um ótimo dia de trabalho!<br>";
} 


if($hora_atual>=$hora_terminar){echo "Prezado Operador! Seu dia de trabalho j&aacute; terminou!<br>J&aacute; s&atilde;o $hora_atual, portanto, n&atilde;o &eacute; poss&iacute;vel acessar o sistema agora!<br> V&aacute; descansar para amanh&atilde; seu dia ser proveitoso!";
}


      "</span></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>"; if($hora_atual>$hora_iniciar)if($hora_atual<$hora_terminar){echo"Usuário ";}"</td>
      <td>"; if($hora_atual>$hora_iniciar)if($hora_atual<$hora_terminar){echo"<input name='usuario' type='text' id='usuario'><br><br>";}"</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>"; if($hora_atual>$hora_iniciar)if($hora_atual<$hora_terminar){echo "Senha   "; }"</td>
      <td>"; if($hora_atual>$hora_iniciar)if($hora_atual<$hora_terminar){echo "<input name='senha' type='password' id='senha'><br><br>"; } 
echo "<input name='data_hoje' type='hidden' id='data_hoje' value='$date'>"; "</td>
      <td>&nbsp; </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>"; if($hora_atual>$hora_iniciar)if($hora_atual<$hora_terminar){echo "<input type='submit' name='Submit' value='Conectar'>"; } 
       if($hora_atual>$hora_iniciar)if($hora_atual<$hora_terminar){echo "<input type='reset' name='Submit2' value='Limpar'>"; } "</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>";

}

?>

<?
$ip = $_SERVER['REMOTE_ADDR'];

$user= "select * from ips where ip = '$ip' and estab_pertence <> '' limit 1";
$result=mysql_query($user);
while($linha=mysql_fetch_row($result)) {


$ip_cadastrado = $linha[1];
$estab_pertence = $linha[2];
}



if(mysql_num_rows($result)==1){


if($instrucao=="funcionario"){



echo "<form name='form1' method='post' action='verifica.php' target='_top'>
  <table width='100%' border='0' align='center'>
    <tr>
      <td><span class='style5'><span class='style2'><br>$data_completa</span></span></td>
      <td>&nbsp;</td>
      <td><span class='style5'><span class='style2'>$hora_atual</span></span></td>
    </tr>
    <tr>
      <td colspan='6'><div align='left'>Hor&aacute;rio de funcionamento do sistema! In&iacute;cio as $hora_iniciar - T&eacute;rmino as $hora_terminar</div></td>
    </tr>
    <tr>
      <td colspan='3'><div align='center'><span class='style6'>";
          
//if($hora_atual<=$hora_iniciar){echo "Prezado operador! Seu dia de trabalho ainda n&atilde;o teve inicio!<br><br>O sistema abrir&aacute; as $hora_iniciar <br>";
//}

//if($hora_atual>$hora_iniciar)if($hora_atual<$hora_terminar){ echo "<br><br>Prezado operador!<br>PARA SUA SEGURANÇA SEU IP $ip_cadastrado SERÁ GRAVADO AO REALIZAR SEU LOGIN! Tenha um ótimo dia de trabalho!<br>";
//} 


//if($hora_atual>=$hora_terminar){echo "Prezado operador!<br> Seu dia de trabalho j&aacute; terminou!<br><br>J&aacute; s&atilde;o $hora_atual, portanto, n&atilde;o &eacute; poss&iacute;vel acessar o sistema agora!<br><br> V&aacute; descansar para amanh&atilde; seu dia ser proveitoso!<br> "; 
//}



      "</span></div></td>
    </tr>
	<tr>
	<td>"; //if($hora_atual>$hora_iniciar)if($hora_atual<$hora_terminar){echo"<input name='estab_pertence' type='hidden' id='estab_pertence' value='$estab_pertence'>"; echo "$estab_pertence<br> "; 
	//} "
	echo "</td>
	<td>"; //if($hora_atual>$hora_iniciar)if($hora_atual<$hora_terminar){
	echo "Nome "; //} "
	echo "</td>
	<td>";
//if($hora_atual>$hora_iniciar)if($hora_atual<$hora_terminar){	
//echo"<select name='nome' id='select5'>";
    //$sql = "select * from operadores where estab_pertence = '$estab_pertence' and status = 'Ativo' order by nome asc";
   // $result = mysql_query($sql);
    //while($x=mysql_fetch_array($result)){
  //echo "<option>".$x['nome']."</option>";
   //}
      //echo"</select><br>";	
	  //}
	"</td>
	</tr>
    <tr> 
      <td>"; //if($hora_atual>$hora_iniciar)if($hora_atual<$hora_terminar){
	  echo "Usuário "; //} 
	  "</td>
      <td>"; //if($hora_atual>$hora_iniciar)if($hora_atual<$hora_terminar){
	  echo"<input class='class02' name='usuario' type='text' id='usuario'><br><br>"; //} 
	  "</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td width='28%'>"; //if($hora_atual>$hora_iniciar)if($hora_atual<$hora_terminar){
	  echo"Senha"; //} 
	  "</td>
      <td width='46%'>"; //if($hora_atual>$hora_iniciar)if($hora_atual<$hora_terminar){
	  echo"<input class='class02' name='senha' type='password' id='senha'><br><br>"; //}
      echo "<input name='data_hoje' type='hidden' id='data_hoje' value='$date'>"; "</td>
      <td width='26%'>&nbsp; </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>"; //if($hora_atual>$hora_iniciar)if($hora_atual<$hora_terminar){
	  echo"<input class='class01' type='submit' name='Submit' value='Conectar'>"; //} 
      //if($hora_atual>$hora_iniciar)if($hora_atual<$hora_terminar){
	  //echo"<input type='reset' name='Submit2' value='Limpar'>"; //} 
	  "</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>"; 


}
}
else {
echo "ATENCAO!!!...<br><br>O IP $ip DO LOCAL DE ONDE VOCE ESTA TENTANDO ACESSAR O SISTEMA NAO ESTA AUTORIZADO PELA EMPRESA!<br><br> ACESSE O SISTEMA DE UM LOCAL DEVIDAMENTE AUTORIZADO!";
}

?>
<?
if($instrucao=="parceiros"){

$ip = $_SERVER['REMOTE_ADDR'];


echo "<form name='form1' method='post' action='verifica_parceiros.php' target='_top'>
  <table width='100%' border='0' align='center'>
    <tr>
      <td><span class='style5'><span class='style2'><br>$data_completa</span></span></td>
      <td>&nbsp;</td>
      <td><span class='style5'><span class='style2'>$hora_atual</span></span></td>
    </tr>
    <tr>
      <td colspan='6'><div align='left'>Hor&aacute;rio de funcionamento do sistema! In&iacute;cio as $hora_iniciar - T&eacute;rmino as $hora_terminar</div></td>
    </tr>
    <tr>
      <td colspan='3'><div align='center'><span class='style6'>";
          
if($hora_atual<=$hora_iniciar){echo "Prezado Parceiro! Seu dia de trabalho ainda n&atilde;o teve inicio!<br><br>O sistema abrir&aacute; as $hora_iniciar <br>";
}

if($hora_atual>$hora_iniciar)if($hora_atual<$hora_terminar){ echo "<br><br>Prezado Parceiro!<br><br>PARA SUA SEGURANÇA SEU IP $ip SERÁ GRAVADO AO REALIZAR SEU LOGIN! Tenha um ótimo dia de trabalho!<br>";
} 


if($hora_atual>=$hora_terminar){echo "Prezado Parceiro! Seu dia de trabalho j&aacute; terminou!<br><br>J&aacute; s&atilde;o $hora_atual, portanto, n&atilde;o &eacute; poss&iacute;vel acessar o sistema agora!<br><br> V&aacute; descansar para amanh&atilde; seu dia ser proveitoso!<br> "; 
}



      "</span></div></td>
    </tr>
    <tr> 
      <td>"; if($hora_atual>$hora_iniciar)if($hora_atual<$hora_terminar){echo "Usuário "; } "</td>
      <td>"; if($hora_atual>$hora_iniciar)if($hora_atual<$hora_terminar){echo"<input name='usuario' type='text' id='usuario'><br><br>";} "</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td width='28%'>"; if($hora_atual>$hora_iniciar)if($hora_atual<$hora_terminar){echo"Senha"; } "</td>
      <td width='46%'>"; if($hora_atual>$hora_iniciar)if($hora_atual<$hora_terminar){echo"<input name='senha' type='password' id='senha'><br><br>"; }
      echo "<input name='data_hoje' type='hidden' id='data_hoje' value='$date'>"; "</td>
      <td width='26%'>&nbsp; </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>"; if($hora_atual>$hora_iniciar)if($hora_atual<$hora_terminar){echo"<input class='class01' type='submit' name='Submit' value='Conectar'>"; } 
       "</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>"; 


}

?>
<?
if($instrucao=="agencias"){ ?>

<TABLE width="100%" border=0 align="center" cellPadding=3 cellSpacing=7>
    <?
	
	
$sql = "SELECT * FROM estabelecimentos where aparecer_site = 'Sim' order by posicao asc";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

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
$proprietario = $linha[16];
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

?>
            <td valign="middle">    <div align="center"><span class="style2"><? if($endereco<>""){echo $nfantasia."<br>"; } ?>        
            <? if($endereco<>""){echo $endereco.","; } ?>  <? if($endereco<>""){echo $numero."<br>"; } ?>        
            <? if($endereco<>""){echo $cidade." - "; } ?>   <? if($endereco<>""){echo $estado."<br>"; } ?>
            <? if($endereco<>""){echo $cep."<br>"; } ?>
            <? if($endereco<>""){echo $telefone."<br>"; } ?>
            <? if($endereco<>""){echo $email."<br>"; } ?>
		    </span>  </div></td>




          <?
if($reg==2){
echo "</tr><tr></tr><tr>";
$reg=0;
}
?>
<? } ?>

</TABLE>
<?
}


?></td>
    <td width="4%" valign="top">&nbsp;</td>
  </tr>
</table>
</body>
</html>
