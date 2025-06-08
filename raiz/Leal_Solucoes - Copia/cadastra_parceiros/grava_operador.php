
<html>

<head>

<title>Untitled Document</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">


</head>

<style type="text/css">
	
.style1 {font-size: 18px;
	font-weight: bold;
	color: #ffffff;
}
</style>

<?



require '../../conect/conect.php';


$sql = "SELECT * FROM cad_empresa limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {


$nfantasia_empresa = $linha[2];
$email_empresa = $linha[14];
$site_empresa = $linha[15];

}




//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 

$sql = "SELECT * FROM fundo_navegacao";

//EXECUTA O COMANDO ACIMA

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {

$reg++;

?>





<body bgcolor="#<? printf("$linha[1]"); ?>">

  <?

if($reg==1){

echo "</tr><tr>";

$reg=0;

}

?>

  

<? } ?>

<?

// dados do operador



$tipo_op = $_POST['tipo_op'];



$nome = $_POST['nome'];

$sexo = $_POST['sexo'];

$estadocivil = $_POST['estadocivil'];

$cpf = $_POST['cpf'];

$rg = $_POST['rg'];

$orgao = $_POST['orgao'];

$emissao = $_POST['emissao'];

$data_nasc = $_POST['data_nasc'];

$pai = $_POST['pai'];

$mae = $_POST['mae'];

$endereco = $_POST['endereco'];

$numero  = $_POST['numero'];

$bairro = $_POST['bairro'];

$complemento = $_POST['complemento'];

$cidade = $_POST['cidade'];

$estado = $_POST['estado'];

$cep = $_POST['cep'];

$telefone = $_POST['telefone'];

$celular = $_POST['celular'];

$email = $_POST['email'];

$datacadastro = $_POST['datacadastro'];

$horacadastro = $_POST['horacadastro'];

$salario = $_POST['salario'];
$recebequinzena = $_POST['recebequinzena'];

$vale_alimentacao = $_POST['vale_alimentacao'];
$vt = $_POST['vt'];

$gratificacao = $_POST['gratificacao'];

$comissao = $_POST['comissao'];

$emprestimo = $_POST['emprestimo'];

$admissao = $_POST['admissao'];

$demissao = $_POST['demissao'];



//estabelecimento a que pertence

$estab_pertence = $_POST['estab_pertence'];

$cidade_estab_pertence = $_POST['cidade_estab_pertence'];

$tel_estab_pertence = $_POST['tel_estab_pertence'];

$email_estab_pertence = $_POST['email_estab_pertence'];











//dados do operador



$operador = $_POST['operador'];

$cel_operador = $_POST['cel_operador'];

$email_operador = $_POST['email_operador'];



//dados do estabelecimento



$estabelecimento = $_POST['estabelecimento'];

$cidade_estabelecimento = $_POST['cidade_estabelecimento'];

$tel_estabelecimento = $_POST['tel_estabelecimento'];

$email_estabelecimento = $_POST['email_estabelecimento'];

$usuario = $_POST['usuario'];

$senha = $_POST['senha'];

$frase_secreta = $_POST['frase_secreta'];

// Observações



$obs = $_POST['obs'];

$funcao = $_POST['funcao'];

$meta = $_POST['meta'];

$status = "Inativo";

$bloqueio_parcial = $_POST['bloqueio_parcial'];
$bloqueio_compra = "Nao";

$tempo_almoco = $_POST['tempo_almoco'];

$horas_diarias = $_POST['horas_diarias'];

$horariologin = $_POST['horariologin'];
$horaslogin = $_POST['horaslogin'];
$minutoslogin = $_POST['minutoslogin'];
$segundoslogin = $_POST['segundoslogin'];


$sql = "SELECT * FROM operadores where cpf = '$cep' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros_op = mysql_num_rows($res);


}
	
if($registros_op>=1){
	
echo "<script>

alert('ATENÇÃO!!!... VOCÊ JA ENVIOU SEU CADASTRO! AGUARDE...');
window.location = 'httP://www.lealfinanceira.com.br';

</script>";
	
}
else{	

$comando = "insert into operadores(nome,sexo,estadocivil,cpf,rg,orgao,emissao,data_nasc,pai,mae,endereco,numero,bairro,complemento,cidade,estado,cep,telefone,celular,email,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,obs,datacadastro,horacadastro,usuario,senha,funcao,estab_pertence,cidade_estab_pertence,tel_estab_pertence,email_estab_pertence,tipo_op,salario,vale_alimentacao,gratificacao,comissao,emprestimo,admissao,demissao,meta,status,bloqueio_parcial,bloqueio_compra,tempo_almoco,horas_diarias,horariologin,horaslogin,minutoslogin,segundoslogin,recebequinzena,vt) values('$nome','$sexo','$estadocivil','$cpf','$rg','$orgao','$emissao','$data_nasc','$pai','$mae','$endereco','$numero','$bairro','$complemento','$cidade','$estado','$cep','$telefone','$celular','$email','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$obs','$datacadastro','$horacadastro','$usuario','$senha','$funcao','$estab_pertence','$cidade_estab_pertence','$tel_estab_pertence','$email_estab_pertence','$tipo_op','$salario','$vale_alimentacao','$gratificacao','$comissao','$emprestimo','$admissao','$demissao','$meta','$status','$bloqueio_parcial','$bloqueio_compra','$tempo_almoco','$horas_diarias','$horariologin','$horaslogin','$minutoslogin','$segundoslogin','$recebequinzena','$vt')";



mysql_query($comando,$conexao) or die("Erro ao gravar operador!");





//echo " Voce cadastrado com sucesso!<br> Agora e so aguardar se for seleciondo, entraremos em contato! <br><br>";



?>





<?

$sql = "SELECT * FROM operadores order by codigo desc limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

?>

<?

$codigo = $linha[1];

$nome = $linha[1];

$cpf = $linha[4];

$datacadastro = $linha[29];

$horacadastro = $linha[30];

$operador = $linha[21];

$cel_operador = $linha[22];

$email_operador = $linha[23];

$estabelecimento = $linha[24];

$cidade_estabelecimento = $linha[25];

$tel_estabelecimento = $linha[26];

$email_estabelecimento = $linha[27];

$usuario = $linha[40];

$senha = $linha[41];

$estab_pertence = $linha[44];

$cidade_estab_pertence = $linha[45];

$email_estab_pertence = $linha[47];

$tel_estab_pertence = $linha[46];



}

?>







<?



	

	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO

	$email_dest   =   $email_empresa;

	

	//PREPARA O PEDIDO

	$mens   =  "Olá! PARCEIRO cadastrado como operador na $nfantasia_empresa!   \n";

	$mens  .=  "Verifique e analise e conclua o cadastro se for interesse da empresa \n";

	$mens  .=  "Nome: ".$nome."                                                       \n";

	$mens  .=  "CPF: ".$cpf."                                                    \n";

	$mens  .=  "Ligado ao estabelecimento: ".$estab_pertence."                                                    \n";

	$mens  .=  "Cidade: ".$cidade_estab_pertence."                                                    \n";

	$mens  .=  "Telefone: ".$tel_estab_pertence."                                                    \n";

	$mens  .=  "E_Mail: ".$email_estab_pertence."                                                    \n";	

	$mens  .=  "Data do cadastro: ".$datacadastro."                                                    \n";

	$mens  .=  "Hora do cadastro: ".$horacadastro."                                                    \n";

	

	//DISPARA O EMAIL

	$envia  =  mail($email_dest, "PARCEIRO cadastrado no sistema em ".$datacadastro, $mens,"From:".$email_dest);

	


}
?>









<p>&nbsp;</p>

<table width="100%" border="0">
  <tr>
    <td width="23%">&nbsp;</td>
    <td width="32%" class="style1">Pode fechar essa guia...</td>
    <td width="45%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="style1"><? echo " Voce cadastrado com sucesso!<br> Agora e so aguardar se for seleciondo, entraremos em contato! <br><br>"; ?></td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>

<p>&nbsp;</p>

</body>

</html>

<?

mysql_close($conexao);

?>