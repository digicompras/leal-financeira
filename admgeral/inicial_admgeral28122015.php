<?php

/* Define o limitador de cache para 'private' */
session_cache_limiter('private');
$cache_limiter = session_cache_limiter();

/* Define o limite de tempo do cache em 30 minutos */
session_cache_expire(60);
$cache_expire = session_cache_expire();


session_start(); //inicia sessão...

if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...

echo ""; //se for emite mensagem positiva.

else //se não for...

header("Location: alerta.php");



require '../conect/conect.php';


?>


<?
setlocale(LC_TIME, 'pt_BR');

$data_completa = strftime("%A, %d de %B de %Y<br><br>");

$hoje = strftime("%A");

$dia = date('d');
$mes = date('m');
$ano = date('Y');

$datacadastro = date('d-m-Y');

$horacadastro = date('H:i:s');

$date = date('Y-m-d');

$historico = "Lançamento efetuado automaticamente pelo sistema na virada do mês!!!...";

$valor = "0.00";

$num_sete_um = $_POST['num_sete_um'];



if($dia<="03"){

$sql = "SELECT * FROM estabelecimentos order by nfantasia asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nfantasia = $linha[2];


$sql2= "select * from cx_entradas where nfantasia = '$nfantasia' and mes = '$mes' and ano = '$ano'";

$result=mysql_query($sql2,$conexao);

if(mysql_num_rows($result)==0){



$sql3 = "SELECT * FROM categorias_receitas order by categoria asc";
$res3 = mysql_query($sql3);
while($linha=mysql_fetch_row($res3)) {

$categoria_conta = $linha[1];



$comando = "insert into cx_entradas(dia,mes,ano,datacadastro,horacadastro,nfantasia,historico,categoria_conta,valor,num_sete_um,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento) values('$dia','$mes','$ano','$datacadastro','$horacadastro','$nfantasia','$historico','$categoria_conta','$valor','$num_sete_um','Lançamento Automático','Lançamento Automático','Lançamento Automático','Lançamento Automático','Lançamento Automático','Lançamento Automático','Lançamento Automático')";



mysql_query($comando,$conexao);

}

}

}

}




?>



<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="refresh" content="120" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(../background/preview.jpg);
	background-repeat: no-repeat;
	background-attachment:fixed
}
.style1 {
	font-size: 16px;
	font-weight: bold;
}
.style2 {font-size: 9px}
.style3 {font-size: 10px; }
.style5 {font-size: 10px; font-weight: bold; }
.style7 {font-size: 16px}
-->
</style></head>

<body>
<table width="100%" border="0">
  <tr>
    <td colspan="9" bgcolor="#B1C3D9">
    
      <div align="center"><span class="style1">
        <?


$num_dia = date('w');
$sql = "SELECT * FROM dias_semana where num_dia = '$num_dia' limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$dia_hoje = $linha[2];
$dia_semana = $linha[2];

}

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
$sql = "SELECT * FROM hora_ponto limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$h_ponto = $linha[1];
$m_ponto = $linha[2];
$s_ponto = $linha[3];

}

$hora_ponto = "$h_ponto:$m_ponto:$s_ponto";
?>


<?
$data = date('d-m-Y');

//$date = date('Y-m-d');

$mes_ano = date('m-Y');


$dia = date('d');
$mes = date('m');
$ano = date('Y');

?>

<?

if($hora_atual>=$hora_ponto){

$sql = "SELECT * FROM operadores where status = 'Ativo' and funcao <> 'Agente' order by nome ";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {




$nome_operador = $linha[1];

$funcionario = $linha[42];

$funcao = $linha[43];

$estab_pertence = $linha[44];






$sql2 = "SELECT * FROM ponto where nome = '$nome_operador' and date = '$date' order by date desc";

$resultado=mysql_query($sql2);

$registros_total = mysql_num_rows($resultado);

//echo $registros_total;



if($registros_total>="1"){

//$mensagem = "Já marcou o ponto, Por essa razão não foi lançada falta para esse funcionário!";

}
else{



if(($dia_semana<>"Sábado") && ($dia_semana<>"Domingo")){

$comando = "insert into ponto(nome,data,ent_m,mes_ano,sai_m,ent_t,sai_t,dia_semana,dia,mes,ano,date,estab_pertence)
values('$nome_operador','$data','FALTOU','$mes_ano','FALTOU','FALTOU','FALTOU','$dia_semana','$dia','$mes','$ano','$date','$estab_pertence')";

mysql_query($comando,$conexao);

}

}

}
}

?>

<?

if($hora_atual>=$hora_ponto){


if($dia_hoje=="Sexta-Feira"){


$sql = "SELECT * FROM operadores where status = 'Ativo' and funcao <> 'Agente' order by nome ";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {




$nome_operador = $linha[1];

$funcionario = $linha[42];

$funcao = $linha[43];

$estab_pertence = $linha[44];



$num_dia_somar = date('w')+1;

if($num_dia_somar>="7"){
$num_dia = "0";
}
else{
$num_dia = $num_dia_somar;

}
$sql2 = "SELECT * FROM dias_semana where num_dia = '$num_dia'";

$res2 = mysql_query($sql2);

while($linha=mysql_fetch_row($res2)) {

$dia_semana_sabado = $linha[2];

}


$date_sabado = date('Y-m-d', strtotime("+1 day"));

$data_sabado = explode("-", $date_sabado);



$dia_sabado = $data_sabado[2];

$ano_sabado = $data_sabado[0];

$mes_sabado = $data_sabado[1];


$data_sabado2 = "$dia_sabado-$mes_sabado-$ano_sabado";
$mes_ano_sabado = "$mes_sabado-$ano_sabado";


$sql3 = "SELECT * FROM ponto where nome = '$nome_operador' and date = '$date_sabado' order by date desc";

$resultado3=mysql_query($sql3);

$registros_total_sabado = mysql_num_rows($resultado3);







if($registros_total_sabado>="1"){
}
else{

$comando = "insert into ponto(nome,data,ent_m,mes_ano,sai_m,ent_t,sai_t,dia_semana,dia,mes,ano,date,estab_pertence)
values('$nome_operador','$data_sabado2','DSR','$mes_ano_sabado','DSR','DSR','DSR','$dia_semana_sabado','$dia_sabado','$mes_sabado','$ano_sabado','$date_sabado','$estab_pertence')";

mysql_query($comando,$conexao);

}

}


}

}
?>
<?

if($hora_atual>=$hora_ponto){


if($dia_hoje=="Sexta-Feira"){


$sql = "SELECT * FROM operadores where status = 'Ativo' and funcao <> 'Agente' order by nome ";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {




$nome_operador = $linha[1];

$funcionario = $linha[42];

$funcao = $linha[43];

$estab_pertence = $linha[44];



$num_dia_somar = date('w')+2;

if($num_dia_somar>="7"){
$num_dia = "0";
}
else{
$num_dia = $num_dia_somar;

}
$sql2 = "SELECT * FROM dias_semana where num_dia = '$num_dia'";

$res2 = mysql_query($sql2);

while($linha=mysql_fetch_row($res2)) {

$dia_semana_domingo = $linha[2];

}


$date_domingo = date('Y-m-d', strtotime("+2 day"));

$data_domingo = explode("-", $date_domingo);



$dia_domingo = $data_domingo[2];

$ano_domingo = $data_domingo[0];

$mes_domingo = $data_domingo[1];


$data_domingo2 = "$dia_domingo-$mes_domingo-$ano_domingo";
$mes_ano_domingo = "$mes_domingo-$ano_domingo";



$sql3 = "SELECT * FROM ponto where nome = '$nome_operador' and date = '$date_domingo' order by date desc";

$resultado3=mysql_query($sql3);

$registros_total_domingo = mysql_num_rows($resultado3);







if($registros_total_domingo>="1"){
}
else{

$comando = "insert into ponto(nome,data,ent_m,mes_ano,sai_m,ent_t,sai_t,dia_semana,dia,mes,ano,date,estab_pertence)
values('$nome_operador','$data_domingo2','DSR','$mes_ano_domingo','DSR','DSR','DSR','$dia_semana_domingo','$dia_domingo','$mes_domingo','$ano_domingo','$date_domingo','$estab_pertence')";

mysql_query($comando,$conexao);

}

}


}

}
?>



<? 

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];


	
$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nome_admgeral = $linha[1];

}



	
	
$sql2 = "SELECT * FROM login_admgeral where nome = '$nome_admgeral'";
$res2 = mysql_query($sql2);
while($linha=mysql_fetch_row($res2)) {
$registros = mysql_num_rows($res2);

}

echo "Olá $nome_admgeral esse é seu acesso de nº $registros!";
  ?>
    </span>      </div></td>
  </tr>
  
  <tr>
    <td colspan="2" bgcolor="#ECE9D8"><div align="center"><strong>Informações sobre seu domínio</strong></div></td>
    <td>  <div align="center"></div></td>
    <td colspan="2" bgcolor="#ECE9D8"><div align="center"><strong>Informações sobre Database</strong></div></td>
    <td width="0%">&nbsp;</td>
    <td colspan="2" bgcolor="#ECE9D8"><div align="center"><strong>Fatos  em <? echo $data_completa; ?></strong></div></td>
    <td width="6%">&nbsp;</td>
  </tr>
  
  
  <tr>
    <td width="4%" bgcolor="#E3E9F1"><span class="style5">Domínio</span></td>
    <td width="19%" bgcolor="#E3E9F1"><div align="center" class="style5">www.allcredfinanceira.com.br</div></td>
    <td width="0%"><div align="center"></div></td>
    <td width="14%" bgcolor="#E3E9F1"><strong>Total Clientes cadastrados</strong></td>
    <td width="13%" bgcolor="#E3E9F1"><div align="center">
      <form action="relatorios/relatorio_e totalizacao_de_clientes.php" method="post" name="form2" target="_blank">
        <strong><span class="style7">
        <? 	
$sql = "SELECT * FROM clientes";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros_cli = mysql_num_rows($res);

}

  ?>
        </span></strong>
            <input type="submit" name="button2" id="button2" value="<? echo $registros_cli; ?>">
      </form>
      </div></td>
    <td>&nbsp;</td>
    <td width="18%" bgcolor="#E3E9F1"><strong>Clientes cadastrados</strong></td>
    <td bgcolor="#E3E9F1"><div align="center"><strong><span class="style7">
      <? 	


$sql = "SELECT * FROM clientes where date = '$date'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros_cli_cadastrados_hoje = mysql_num_rows($res);

}

echo "$registros_cli_cadastrados_hoje";
  ?>
    </span></strong></div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#E3E9F1"><span class="style5">Titular</span></td>
    <td bgcolor="#E3E9F1">
      <div align="center" class="style5">
        <pre>ALLCRED SERVIÇOS DE INTERMEDIAÇÃO FINANCEIRA LTDA</pre>
    </div></td>
    <td><div align="center"></div></td>
    <td bgcolor="#E3E9F1"><strong>Total Propostas registradas</strong></td>
    <td bgcolor="#E3E9F1"><div align="center"><strong><span class="style7">
      <? 	
$sql = "SELECT * FROM propostas";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros_propostas = mysql_num_rows($res);

}

echo "$registros_propostas";
  ?>
    </span></strong></div></td>
    <td>&nbsp;</td>
    <td bgcolor="#E3E9F1"><strong>Propostas registradas</strong></td>
    <td bgcolor="#E3E9F1"><div align="center"><strong><span class="style7">
      <? 	
$sql = "SELECT * FROM propostas where data_proposta = '$date'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros_propostas_registradas_hoje = mysql_num_rows($res);

}

echo "$registros_propostas_registradas_hoje";
  ?>
    </span></strong></div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#E3E9F1"><span class="style5">Documento</span></td>
    <td bgcolor="#E3E9F1"><div align="center" class="style5">
      008.768.992/0001-03
    </div></td>
    <td><div align="center"></div></td>
    <td bgcolor="#E3E9F1"><strong>Fornecedores cadastrados</strong></td>
    <td bgcolor="#E3E9F1"><div align="center"><strong><span class="style7">
      <? 	
$sql = "SELECT * FROM fornecedores";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros_for = mysql_num_rows($res);

}

echo "$registros_for";
  ?>
    </span></strong></div></td>
    <td>&nbsp;</td>
    <td bgcolor="#E3E9F1"><strong>Propostas (Simulação) SITE</strong></td>
    <td bgcolor="#E3E9F1"><div align="center">
      <form action="relatorios/propostas_atraves_do_site.php" method="post" name="form3" target="_blank">
        <strong><span class="style7">
        <? 	
$sql = "SELECT * FROM propostas where tipo_proposta = 'SITE' and tipo_contrato = 'SITE' and data_proposta = '$date'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros_propostas_simulacao_hoje = mysql_num_rows($res);

}

//echo "$registros_propostas_simulacao_hoje";
  ?>
        <input name="date" type="hidden" id="date" value="<? echo $date; ?>">
        </span></strong>
        <input type="submit" name="button3" id="button3" value="<? echo $registros_propostas_simulacao_hoje; ?>">
      </form>
    </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#E3E9F1"><span class="style5">Responsável</span></td>
    <td bgcolor="#E3E9F1"><div align="center" class="style5">
      <pre>ALESSANDRO MENDES RODRIGUES</pre>
    </div></td>
    <td><div align="center"></div></td>
    <td bgcolor="#E3E9F1"><strong>Imobilizado registrado</strong></td>
    <td bgcolor="#E3E9F1"><div align="center"><strong><span class="style7">
      <? 	
$sql = "SELECT * FROM imobilizado";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros_imob = mysql_num_rows($res);

}

echo "$registros_imob";
  ?>
    </span></strong></div></td>
    <td>&nbsp;</td>
    <td bgcolor="#E3E9F1"><strong>Propostas alteradas (Status)</strong></td>
    <td bgcolor="#E3E9F1"><div align="center"><strong><span class="style7">
      <? 	
$sql = "SELECT * FROM propostas where data_proposta = '$date'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros_propostas_registradas_hoje = mysql_num_rows($res);

}

echo "$registros_propostas_registradas_hoje";
  ?>
    </span></strong></div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#E3E9F1"><span class="style5">Criado</span></td>
    <td bgcolor="#E3E9F1"><div align="center" class="style5">
      <pre>15/06/2009</pre>
    </div></td>
    <td><div align="center"></div></td>
    <td bgcolor="#E3E9F1"><strong>Logins Incorretos</strong></td>
    <td bgcolor="#E3E9F1"><div align="center"><strong><span class="style7">
      <? 	
$sql = "SELECT * FROM registros_de_login_errados_operadores";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros_error = mysql_num_rows($res);

}

echo "$registros_error";
  ?>
    </span></strong></div></td>
    <td>&nbsp;</td>
    <td bgcolor="#E3E9F1"><strong>Propostas Digitadas</strong></td>
    <td bgcolor="#E3E9F1"><div align="center"><strong><span class="style7">
      <? 	
$sql = "SELECT * FROM propostas where data_digitacao = '$date'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros_propostas_digitadas_hoje = mysql_num_rows($res);

}

echo "$registros_propostas_digitadas_hoje";
  ?>
    </span></strong></div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#E3E9F1"><span class="style5">Expiração</span></td>
    <td bgcolor="#E3E9F1"><div align="center" class="style5">
      <pre>15/06/2020</pre>
    </div></td>
    <td><div align="center"></div></td>
    <td bgcolor="#E3E9F1"><strong>Logins Corretos</strong></td>
    <td bgcolor="#E3E9F1"><div align="center"><strong><span class="style7">
      <? 	
$sql = "SELECT * FROM registros_de_login_corretos_operadores";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros_ok = mysql_num_rows($res);

}

echo "$registros_ok";
  ?>
    </span></strong></div></td>
    <td>&nbsp;</td>
    <td bgcolor="#E3E9F1"><strong>Solicitação de Possibilidades</strong></td>
    <td bgcolor="#E3E9F1"><div align="center"><strong><span class="style7">
      <? 	
$sql = "SELECT * FROM possibilidades where data_da_possibilidade = '$date'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros_possibilidade_hoje = mysql_num_rows($res);

}

echo "$registros_possibilidade_hoje";
  ?>
    </span></strong></div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#E3E9F1"><span class="style5">Status</span></td>
    <td bgcolor="#E3E9F1"><div align="center" class="style5">Publicado</div></td>
    <td><div align="center"></div></td>
    <td bgcolor="#E3E9F1"><strong>Mensagens aos Funcionários</strong></td>
    <td bgcolor="#E3E9F1"><div align="center"><strong><span class="style7">
      <? 	
$sql = "SELECT * FROM mensagens_ao_funcionario";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros_mens = mysql_num_rows($res);

}

echo "$registros_mens";
  ?>
    </span></strong></div></td>
    <td>&nbsp;</td>
    <td bgcolor="#E3E9F1"><div align="left"><strong>Possibilidades Respondidas</strong></div></td>
    <td bgcolor="#E3E9F1"><div align="center"><strong><span class="style7">
      <? 	
$sql = "SELECT * FROM possibilidades where data_da_possibilidade = '$date' and status = 'respondido'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros_possibilidade_hoje = mysql_num_rows($res);

}

echo "$registros_possibilidade_hoje";
  ?>
    </span></strong></div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#ECE9D8"><div align="center"><span class="style2"><span class="style3"></span></span></div></td>
    <td><div align="center"></div></td>
    <td bgcolor="#E3E9F1"><strong>Funcionários Ativos Total</strong></td>
    <td bgcolor="#E3E9F1"><div align="center"><strong><span class="style7">
      <? 	
$sql = "SELECT * FROM operadores where status = 'Ativo'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros_func_ativo = mysql_num_rows($res);

}

echo "$registros_func_ativo";
  ?>
    </span></strong></div></td>
    <td>&nbsp;</td>
    <td bgcolor="#E3E9F1"><div align="center"><strong>Funcionários Ativos/Faltantes</strong></div></td>
    <td bgcolor="#E3E9F1"><div align="center">
      <form action="relatorios/relatorio_periodico_de_faltas.php" method="post" name="form1" target="_blank">
        <strong><span class="style7">
          <? 	
$sql = "SELECT * FROM operadores where status = 'Ativo'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$funcionarios_ativos = mysql_num_rows($res);

}

echo "$funcionarios_ativos";
  ?>/
          <? 	


$sql = "SELECT * FROM ponto where date = '$date' and ent_m = 'FALTOU'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros_funcionarios_faltantes_hoje = mysql_num_rows($res);

}


  ?>
          </span></strong>
        <? $nb = $registros_funcionarios_faltantes_hoje; ?>
        <input type="submit" name="button" id="button" value="<? echo "$nb"; ?>">
      </form>
    </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td bgcolor="#E3E9F1"><strong>Funcionários Adm Geral</strong></td>
    <td bgcolor="#E3E9F1"><div align="center"><strong><span class="style7">
      <? 	
$sql = "SELECT * FROM admgeral";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros_func_admgeral = mysql_num_rows($res);

}

echo "$registros_func_admgeral";
  ?>
    </span></strong></div></td>
    <td>&nbsp;</td>
    <td bgcolor="#E3E9F1"><div align="center"><strong>DSR <? echo $data_sabado2; ?> Lançados</strong></div></td>
    <td bgcolor="#E3E9F1"><div align="center"><strong><span class="style7">
      <? 	


$sql = "SELECT * FROM ponto where date = '$date_sabado' and ent_m = 'DSR'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros_funcionarios_dsr_sabado = mysql_num_rows($res);

}

echo $registros_funcionarios_dsr_sabado;
  ?>
    </span></strong></div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td bgcolor="#E3E9F1"><strong>Funcionários Admin</strong></td>
    <td bgcolor="#E3E9F1"><div align="center"><strong><span class="style7">
      <? 	
$sql = "SELECT * FROM adm";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros_func_admin = mysql_num_rows($res);

}

echo "$registros_func_admin";
  ?>
    </span></strong></div></td>
    <td>&nbsp;</td>
    <td bgcolor="#E3E9F1"><div align="center"><strong>DSR <? echo $data_domingo2; ?> Lançados</strong></div></td>
    <td bgcolor="#E3E9F1"><div align="center"><strong><span class="style7">
      <? 	


$sql = "SELECT * FROM ponto where date = '$date_domingo' and ent_m = 'DSR'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros_funcionarios_dsr_domingo = mysql_num_rows($res);

}

echo $registros_funcionarios_dsr_domingo;
  ?>
    </span></strong></div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2" bgcolor="#ECE9D8">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2" bgcolor="#ECE9D8"><div align="center"></div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
  </tr>
</table>
<div align="center"></div>
</body>
</html>
