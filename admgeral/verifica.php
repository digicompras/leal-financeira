<?

session_start();





$usuario=$_POST['usuario'];

$senha=$_POST['senha'];

$frase_secreta=$_POST['frase_secreta'];



require '../conect/conect.php';



$user= "select * from admgeral where usuario='$usuario' and  senha='$senha'";

$result=mysql_query($user,$conexao) or die("Falha ao selecionar a tabela user");

if(mysql_num_rows($result)==0){




Header("Location: alerta.php");



}else{
	
	

$sql = "SELECT * FROM admgeral where usuario='$usuario' and  senha='$senha' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nome = $linha['1'];
$funcao = $linha['43'];
$dataultimatrocadesenha = $linha['55'];
$penultimasenha = $linha['56'];
$ultimasenha = $linha['57'];

}

if($funcao=="Desenvolvedor"){
	
	
	
$comando = "insert into login_admgeral(nome,date,hora,usuario,senha) values('$nome','$date','$hora','$usuario','$senha')";



mysql_query($comando,$conexao);

	$_SESSION['nome'] = $usuario;

	$_SESSION['usuario'] = $usuario;

	$_SESSION['senha'] = $senha;

	Header("Location: principal.php");
	
}
else{
	

	
$sql = "SELECT * FROM diaslimitetrocarsenha limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$diaslimite = $linha['1'];

}




$date = date('Y-m-d');
$hora = date('H:i:s');


// Calcula a diferença em segundos entre as datas
$diferenca = strtotime($date) - strtotime($dataultimatrocadesenha);

//Calcula a diferença em dias
$dias = floor($diferenca / (60 * 60 * 24));




if($dias>=$diaslimite){
	
	//echo "erro!! tente novamente em alguns instantes $dias - $diaslimite ";
	
	$_SESSION['nome'] = $nome;

	$_SESSION['usuario'] = $usuario;

	$_SESSION['senha'] = $senha;

	Header("Location: ups.php");
	
}else{





$comando = "insert into login_admgeral(nome,date,hora,usuario,senha) values('$nome','$date','$hora','$usuario','$senha')";



mysql_query($comando,$conexao);

	$_SESSION['nome'] = $usuario;

	$_SESSION['usuario'] = $usuario;

	$_SESSION['senha'] = $senha;

	Header("Location: principal.php");

}
	
}

}



?> 

