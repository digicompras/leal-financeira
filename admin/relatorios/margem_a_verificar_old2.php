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

<title>LISTANDO TODOS OS PEDIDOS DE POSSIBILIDADES DO PERIODO</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

.style3 {font-size: 10px}
.style2 {
	color: #0000FF;

	font-weight: bold;
}
.style5 {font-size: 18px}
.style5 {font-size: 24px}

-->

</style>
</head>

<?



require '../../conect/conect.php';


$sql = "SELECT * FROM fundo_navegacao";

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {

?>





<body bgcolor="#<? printf("$linha[1]"); ?>" 

  

<? } ?>

<?

$sql = "SELECT * FROM background";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

?>



background="background/<? printf("$linha[1]"); ?>" bgproperties="fixed">

  

<? } ?>

<?

$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$nfantasia_empresa = $linha[2];
$email_empresa = $linha[14];
$site_empresa = $linha[15];


}


?>

<?
//----------------------INICIO DA GRAVA��O E ENVIO PARA O OPERADOR--------------------
$solicitacao_gravar = $_POST['solicitacao'];

if($solicitacao_gravar=="gravar"){

$codigolancamento = $_POST['codigolancamento'];
$cod_cli_gravar = $_POST['cod_cli'];
$cpf_gravar = $_POST['cpf'];
$data_gravar = date('d-m-Y');
$date_gravar = date('Y-m-d');
$hora_gravar = date('H:i:s');
$tem_margem_gravar = $_POST['tem_margem'];
$operador_gravar = $_POST['operador'];
$email_operador_gravar = $_POST['email_operador'];

$fazer_portabilidade = $_POST['fazer_portabilidade'];
$obs_das_margens = $_POST['obs_das_margens'];

$valor_parcela = $_POST['valor_parcela'];
$saldo_devedor = $_POST['saldo_devedor'];
$parcelas_em_aberto = $_POST['parcelas_em_aberto'];
$prazo_contrato = $_POST['prazo_contrato'];
$aprovacao = $_POST['aprovacao'];
$valor_liberado = $_POST['valor_liberado'];


$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`clientes` set `codigo` = '$cod_cli_gravar',`tem_margem` = '$tem_margem_gravar',`date_margem_verificada` = '$date_gravar',`hora_margem_verificada` = '$hora_gravar',`fazer_portabilidade` = '$fazer_portabilidade',`obs_das_margens` = '$obs_das_margens',`valor_parcela` = '$valor_parcela',`saldo_devedor` = '$saldo_devedor',`parcelas_em_aberto` = '$parcelas_em_aberto',`prazo_contrato` = '$prazo_contrato',`aprovacao` = '$aprovacao',`valor_liberado` = '$valor_liberado' where `clientes`. `codigo` = '$cod_cli_gravar' limit 1 ";
}

mysql_query($comando,$conexao) or die("Erro ao gravar margem no cadastro do cliente! <br><br>");




$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`margem_portabilidade` set `codigo` = '$codigolancamento',`status` = 'respondido' where `margem_portabilidade`. `codigo` = '$codigolancamento' limit 1 ";
}

mysql_query($comando,$conexao);


	

	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO

	$email_dest   =   $email_operador_gravar;

	

	//PREPARA O PEDIDO

	$mens  .=  "Ol�! $operador_gravar voc� solicitou o VER POSSIBILIDADE do CPF abaixo na $nfantasia_empresa!   \n\n";

	$mens  .=  "Visite-nos $site_empresa \n\n\n";
	
	$mens  .=  "Segue a situa��o e o parecer da mesa!!!...   \n\n";

	$mens  .=  "CPF: ".$cpf_gravar."                                                    \n\n";

	$mens  .=  "POSSIBILIDADE: "."Sua resposta j� se encontra no sistema....Verifique no cadastro do cliente!"."                                                    \n\n";


	

	//DISPARA O EMAIL

	//$envia  =  mail($email_dest, "Resposta sobre o VER POSSIBILIDADES ".$data_gravar, $mens,"From:".$email_dest."\r\nBcc:".$email);

	





}


//---------------------FIM DA GRAVA��O E ENVIO PARA O OPERADOR------------------------
?>








      <p>

        <?

$sql = "SELECT * FROM fundo_intermediaria";

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {



$cor = $linha[1];	

?>

<? } ?>

</p>

      <p><br>

  <?

$nome_operador = $_POST['nome_operador'];

$data_inicial = $_POST['data_inicial'];

$data_final = $_POST['data_final'];




$sql = "SELECT * FROM margem_portabilidade where status = 'a responder'";

$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros = mysql_num_rows($res);

}
?><br>
        
      <?

$sql = "SELECT * FROM allcred limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$nfantasia = $linha[2];

$endereco = $linha[5];

$numero = $linha[6];

$bairro = $linha[7];

$cep = $linha[9];

$cidade = $linha[10];

$estado = $linha[11];

$telefone = $linha[12];

$fax = $linha[13];

$email_empresa = $linha[14];

$site = $linha[15];



}



?>
      <table width="70%"  border="0" align="center">
        <tr>
          <td colspan="5"><div align="center"><span class="style2">
          
            Listando todos os pedidos de verifica&ccedil;&atilde;o de margem da empresa:</span> <span class="style2"><? echo $nfantasia; ?>
              
            </span></div></td>
        </tr>
        <tr>
          <td colspan="5">&nbsp;</td>
        </tr>
        <tr>
          <td width="33%"><div align="center">Total de Clientes para verificar margem</div></td>
          <td width="13%"><div align="center"><strong><? echo " $registros";?></strong></div></td>
          <td width="14%">&nbsp;</td>
          <td width="18%">&nbsp;</td>
          <td width="22%"><div align="center"></div></td>
        </tr>
      </table>
      <p align="center"></p>
      <p align="center" class="style5">
        <?

//------------------INICIO DA RESPOSTA DO HISCON--------------------

$recebe_codigo_abrir = $_POST['codigo_abrir'];
$codigolancamento = $_POST['codigolancamento'];
$solicitacao_recebida = $_POST['solicitacao'];
$cpf_abrir = $_POST['cpf'];
$data = date('d-m-Y');
$hora = date('H:i:s');

?>
        <?

if(empty($solicitacao_recebida)){

}
else{

if($solicitacao_recebida=="abrir"){
	
$sql = "SELECT * FROM clientes where cpf = '$cpf' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg++;

$tem_margem = $linha[107];

$date_margem_verificada = $linha[122];
$hora_margem_verificada = $linha[123];
$fazer_portabilidade = $linha[126];
$obs_das_margens = $linha[127];

$valor_parcela = $linha[128];
$saldo_devedor = $linha[129];
$parcelas_em_aberto = $linha[130];
$prazo_contrato = $linha[131];
$aprovacao = $linha[132];
$valor_liberado = $linha[133];

}


echo "<form name='form1' method='post' action='margem_a_verificar.php'>

  <div align='center'><span class='style3'>";
    

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];


echo "Respondendo solicita&ccedil;&atilde;o da matricula $recebe_codigo_abrir--->>> Margem Disponivel <input name='solicitacao' type='hidden' id='solicitacao' value='gravar'>
    <input name='codigolancamento' type='hidden' id='codigolancamento' value='$codigolancamento'>
    <input name='cod_cli' type='hidden' id='cod_cli' value='$recebe_codigo_abrir'>
	<input name='cpf' type='hidden' id='cpf' value='$cpf_abrir'>
	<input name='operador' type='hidden' id='operador' value='$operador'>
	<input name='email_operador' type='hidden' id='email_operador' value='$email_operador'>
	<input name='solicitacao_recebida' type='hidden' id='solicitacao_recebida' value=''>
	<input name='codigo_possibilidade' type='hidden' id='codigo_possibilidade' value='$codigo_possibilidade'>
  </span>
    <input name='tem_margem' type='text' id='tem_margem'> --->>> � possivel portabilidade?  <select name='fazer_portabilidade' id='fazer_portabilidade'>
  <option selected></option>
  <option>Sim</option>
  <option>N�o</option>
      </select><br>
Valor Parcela <input name='valor_parcela' type='text' id='valor_parcela' value='$valor_parcela'> Saldo Devedor <input name='saldo_devedor' type='text' id='saldo_devedor' value='$saldo_devedor'> Parcelas em Aberto <input name='parcelas_em_aberto' type='text' id='parcelas_em_aberto' value='$parcelas_em_aberto'> Prazo Contrato <input name='prazo_contrato' type='text' id='prazo_contrato' value='$prazo_contrato'><br>
 Aprova��o <select name='aprovacao' id='aprovacao'>
  <option selected>$aprovacao</option>
  <option>Sim</option>
  <option>N�o</option>
      </select> Valor Liberado <input name='valor_liberado' type='text' id='valor_liberado' value='$valor_liberado'><br>
	  Observa��es: <textarea name='obs_das_margens' cols='45' rows='3'  id='obs_das_margens'></textarea>


  
<input type='submit' name='Submit' value='Responder'>
  </div>
</form>";

}

}
//-------------------------FIM DA RESPOSTA DO HISCOM-----------------------

?></p>
<p>
        <?

$sql = "SELECT * FROM margem_portabilidade where status = 'a responder' order by data_da_possibilidade desc";

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







?>
        
</p>
<table width="100%"  border="0">

        <tr bgcolor="#<? echo $cor ?>">

          <td><div align="center" class="style3">Matricula</div></td>
          <td class="style3"><div align="center">Operador</div></td>

          <td><div align="center" class="style3">Perfil</div></td>
          <td class="style3"><div align="center">Secretaria</div></td>
          <td><div align="center" class="style3">Nome</div></td>
          <td><div align="center" class="style3">CPF</div></td>
          <td class="style3"><div align="center">RG</div></td>

          <td><div align="center" class="style3">M&atilde;e</div></td>
          <td><div align="center" class="style3">Data Nasc.</div></td>
          <td><div align="center"><span class="style3">Matricula ( Ben<span class="style3">ef&iacute;cio</span></span>)</div></td>

          <td><div align="center"><span class="style3">Senha Servidor</span></div></td>

          <td><div align="center" class="style3">&Eacute; possivel fazer portabilidade?</div>            </td>

          <td colspan="3" class="style3"><div align="center">Observa&ccedil;&otilde;es sobre margem</div></td>
  </tr>

		

        <tr>

          <td width="10%">               <form name="form2" method="post" action="margem_a_verificar.php">
            <div align="center" class="style3">

            <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
            <input name="codigolancamento" type="hidden" id="codigolancamento" value="<? echo $codigolancamento; ?>">
            <input name="codigo_abrir" type="hidden" id="codigo_abrir" value="<? echo $cod_cli; ?>">
            <input name="solicitacao" type="hidden" id="solicitacao" value="<? echo "abrir"; ?>">
            <input name="cpf" type="hidden" id="cpf" value="<? echo $cpf; ?>">
            <input type="submit" name="button" id="button" value="<? echo $cod_cli; ?>">
            </div>
          </form></td>
          <td width="6%" class="style3"><div align="center"><span class="style3"><? echo $operador_solicitante;?></span></div></td>

          <td width="6%"><div align="center"><span class="style3"><? echo $tipo;?></span></div></td>
          <td width="5%" class="style3"><div align="center"><span class="style3"><? echo $secretaria;?></span></div></td>
          <td width="5%"><div align="center"><span class="style3"><? echo $nome;?></span></div></td>
          <td width="5%"><div align="center" class="style3"><? echo $cpf;?></div></td>
          <td width="6%" class="style3"><div align="center"><span class="style3"><? echo $rg;?></span></div></td>

          <td width="6%"><div align="center"><span class="style3"></span><span class="style3"><? echo $mae;?></span></div></td>
          <td width="6%"><div align="center"><span class="style3"></span><span class="style3"><? echo $data_nasc;?></span></div></td>
          <td width="7%"><div align="center"><span class="style3"><? echo $num_beneficio;?></span></div></td>

          <td width="7%"><div align="center"><span class="style3"><? echo $senha_servidor;?></span></div></td>

          <td width="7%">

          <div align="center" class="style3"><? echo $fazer_portabilidade;?></div></td>

          <td colspan="3" class="style3"><div align="center" class="style3"><? echo $obs_das_margens;?></div>            <div align="center" class="style3"></div>            <div align="center"></div></td>

          <?

if($reg==1){

echo "</tr>";

$reg=0;

}

?>





<? } ?>
        <tr>

          <td><span class="style3"></span></td>
          <td class="style3"><div align="center"></div></td>

          <td><div align="center"></div></td>
          <td class="style3"><div align="center"></div></td>
          <td>&nbsp;</td>
          <td><span class="style3"></span></td>
          <td class="style3"><div align="center"></div></td>

          <td><div align="center"><span class="style3"></span></div></td>
          <td><div align="center"><span class="style3"></span></div></td>
          <td><div align="center"><span class="style3"></span></div></td>

          <td><div align="center"><span class="style3"></span></div></td>

          <td><span class="style3"></span></td>

          <td width="7%"><span class="style3"></span></td>

          <td width="4%"><span class="style3"></span></td>

          <td width="19%">&nbsp;</td>
  </tr>
</table>

<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center"><span class="style5"><strong><? echo $site; ?></strong></span> <br>
  <? echo $endereco; ?> , <? echo $numero; ?> - <? echo $bairro; ?> - <? echo $cidade; ?> - <? echo $estado; ?> - <? echo $cep; ?> <br>
  <? echo "Telefone / Fax: ". $telefone." "; ?> / <? echo $fax; ?> <br>
  <? echo "E-Mail: ". $email_empresa; ?></p>
</body>

</html>

