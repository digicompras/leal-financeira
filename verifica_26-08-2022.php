<?
session_start();

$nome=$_POST['nome'];
$usuario=$_POST['usuario'];
$senha=$_POST['senha'];
$data_hoje=$_POST['data_hoje'];

require 'conect/conect.php';

?>

<html>
<head>
<title>Verifica��o</title>
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
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$background = $linha[1];

}
?>


<body background="/background/<? echo "$background"; ?>">



<?

	/* Configura��o da hora correta */
	setlocale(LC_TIME, 'pt_BR');
	$data_completa = strftime("%A, %d de %B de %Y<br><br>");
	$hoje = strftime("%A");

	/* Carrega o hor�rio de funcionamento do dia atual */
	$sql = "SELECT * FROM hora_encerramento WHERE dia = '$hoje' LIMIT 1";
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
	$date = date('d-m-Y');

	/* Realiza o ajuste da hoja */
	$sql = "SELECT * FROM hora_certa limit 1";
	$res = mysql_query($sql);
	while($linha=mysql_fetch_row($res)) {
		$acao = $linha[5];
		$hora_ajuste = $linha[2];
	}
	$horacerta = date('H')+$hora_ajuste;
	if($horacerta<=9){
		$hora_atual = "0".$horacerta.date(':i:s');
	} else {
		$hora_atual = $horacerta.date(':i:s');
	}

	/* Carrega o hor�rio de trabalho */
	$sql = "SELECT * FROM hora_ponto limit 1";
	$res = mysql_query($sql);
	while($linha=mysql_fetch_row($res)) {
		$h_ponto = $linha[1];
		$m_ponto = $linha[2];
		$s_ponto = $linha[3];
	}
	$hora_ponto = "$h_ponto:$m_ponto:$s_ponto";
	$hora_iniciar = "$horas_inicio".":"."$minutos_inicio".":"."$segundos_inicio";
	$hora_terminar = "$horas_termino".":"."$minutos_termino".":"."$segundos_termino";




//$user = "select * from operadores where status = 'Ativo' and usuario = '$usuario' and senha = '$senha'";
//$result=mysql_query($user,$conexao) or die("Falha ao selecionar a tabela user");
$user = "SELECT * FROM operadores where status = 'Ativo' and usuario = '$usuario' and senha = '$senha' limit 1";
$result = mysql_query($user);
while($linha=mysql_fetch_row($result)) {

$nome_operador = $linha[1];
$estab_pertence = $linha[44];
$tempo_almoco = $linha[58];
$horariologin = $linha[61];

}




if(mysql_num_rows($result)==0){

echo "<script>location.href='alerta.php';</script>";
	}
	





if(mysql_num_rows($result)==1){

if(($horariologin=="padrao") && ($hora_atual<$hora_iniciar)){


echo "ATEN��O!!!... $nome_operador VOC� N�O POSSUI AUTORIZA��O PARA EFETUAR LOGIN NESSE HOR�RIO!!!... AGUARDE A ABERTURA DO SISTEMA NO HOR�RIO PROGRAMADO!!!...";

echo "<form name='form1' method='post' action='/raiz/operador/index.php' target='_top'>

<input class='class01' type='submit' name='Submit' value='Voltar' class='button'>

</form>";

}

if(($horariologin=="diferenciado") && ($hora_atual<$hora_iniciar)){

$sql = "SELECT * FROM ponto where nome = '$nome_operador' and data = '$data_hoje' order by codigo desc limit 1 ";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
$ponto++;



$codigo_ponto = $linha[0];
$sai_m = $linha[4];

}

if($ponto=="1" && $sai_m<>" "){

$hora_atual = date('H:i');

function calcular_tempo_trasnc($sai_m,$hora_atual){
    $separar[1]=explode(':',$sai_m);
    $separar[2]=explode(':',$hora_atual);

$total_minutos_trasncorridos[1] = ($separar[1][0]*60)+$separar[1][1];
$total_minutos_trasncorridos[2] = ($separar[2][0]*60)+$separar[2][1];
$total_minutos_trasncorridos = $total_minutos_trasncorridos[2]-$total_minutos_trasncorridos[1];
if($total_minutos_trasncorridos<=59) return($total_minutos_trasncorridos.' Minutos');
elseif($total_minutos_trasncorridos>59){
$HORA_TRANSCORRIDA = round($total_minutos_trasncorridos/60);
if($HORA_TRANSCORRIDA<=9) $HORA_TRANSCORRIDA='0'.$HORA_TRANSCORRIDA;
$MINUTOS_TRANSCORRIDOS = $total_minutos_trasncorridos%60;
if($MINUTOS_TRANSCORRIDOS<=9) $MINUTOS_TRANSCORRIDOS='0'.$MINUTOS_TRANSCORRIDOS;
return ($HORA_TRANSCORRIDA.':'.$MINUTOS_TRANSCORRIDOS.' Horas');

} }
//chamamos a fun��o e imprimimos
$diferenca =  calcular_tempo_trasnc(date($hora_atual),$sai_m)*-1;

$diferenca_hora = bcdiv($diferenca,60,0);
if($diferenca_hora>="1"){ 
$hora_subtracao = bcmul($diferenca_hora,60,0);
}
$diferenca_minutos = $diferenca-$hora_subtracao;


if($ponto=="1" && $diferenca>=$tempo_almoco){
	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	$_SESSION['data_hoje'] = $data_hoje;
	Header("Location: sistem/index.php");
	}
else{



echo " Aten��o!!!...<br> $nome_operador, voc� encerrou seu 1� per�odo de trabalho de hoje as $sai_m.<br> Seu horario de almo�o transcorreu apenas ";
if($diferenca_hora<="9"){ echo "0$diferenca_hora:"; } else { echo $diferenca_hora; } if($diferenca_minutos<="9"){ echo"0$diferenca_minutos : "; } else{ echo $diferenca_minutos; } echo "<br>Portanto voc� n�o pode acessar o sistema agora! deve-se respeitar um intervalo de $tempo_almoco minutos<br><br>";



}}

else{

	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	$_SESSION['data_hoje'] = $data_hoje;
echo "<script>location.href='sistem/index.php';</script>";


}

}//se for diferenciado


if(($horariologin=="padrao") or ($horariologin=="diferenciado") && ($hora_atual>=$hora_iniciar)){

$sql = "SELECT * FROM ponto where nome = '$nome_operador' and data = '$data_hoje' order by codigo desc limit 1 ";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
$ponto++;



$codigo_ponto = $linha[0];
$sai_m = $linha[4];

}

if($ponto=="1" && $sai_m<>" "){

$hora_atual = date('H:i');

function calcular_tempo_trasnc($sai_m,$hora_atual){
    $separar[1]=explode(':',$sai_m);
    $separar[2]=explode(':',$hora_atual);

$total_minutos_trasncorridos[1] = ($separar[1][0]*60)+$separar[1][1];
$total_minutos_trasncorridos[2] = ($separar[2][0]*60)+$separar[2][1];
$total_minutos_trasncorridos = $total_minutos_trasncorridos[2]-$total_minutos_trasncorridos[1];
if($total_minutos_trasncorridos<=59) return($total_minutos_trasncorridos.' Minutos');
elseif($total_minutos_trasncorridos>59){
$HORA_TRANSCORRIDA = round($total_minutos_trasncorridos/60);
if($HORA_TRANSCORRIDA<=9) $HORA_TRANSCORRIDA='0'.$HORA_TRANSCORRIDA;
$MINUTOS_TRANSCORRIDOS = $total_minutos_trasncorridos%60;
if($MINUTOS_TRANSCORRIDOS<=9) $MINUTOS_TRANSCORRIDOS='0'.$MINUTOS_TRANSCORRIDOS;
return ($HORA_TRANSCORRIDA.':'.$MINUTOS_TRANSCORRIDOS.' Horas');

} }
//chamamos a fun��o e imprimimos
$diferenca =  calcular_tempo_trasnc(date($hora_atual),$sai_m)*-1;

$diferenca_hora = bcdiv($diferenca,60,0);
if($diferenca_hora>="1"){ 
$hora_subtracao = bcmul($diferenca_hora,60,0);
}
$diferenca_minutos = $diferenca-$hora_subtracao;


if($ponto=="1" && $diferenca>=$tempo_almoco){
	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	$_SESSION['data_hoje'] = $data_hoje;
echo "<script>location.href='sistem/index.php';</script>";
	}
else{



echo " Aten��o!!!...<br> $nome_operador, voc� encerrou seu 1� per�odo de trabalho de hoje as $sai_m.<br> Seu horario de almo�o transcorreu apenas ";
if($diferenca_hora<="9"){ echo "0$diferenca_hora:"; } else { echo $diferenca_hora; } if($diferenca_minutos<="9"){ echo"0$diferenca_minutos : "; } else{ echo $diferenca_minutos; } echo "<br>Portanto voc� n�o pode acessar o sistema agora! deve-se respeitar um intervalo de $tempo_almoco minutos<br><br>";



}}

else{

	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	$_SESSION['data_hoje'] = $data_hoje;
echo "<script>location.href='sistem/index.php';</script>";


}

}//se for padrao





}

?> 

</body>
</html>
