<?

require '../../conect/conect.php';

?>


  <?

$mes_niver = $_POST['mes_niver'];
		



?>


<?

$sql = "SELECT * FROM lojistas where ( mes = '$mes_niver' or mes2 = '$mes_niver' or mes3 = '$mes_niver' or mes4 = '$mes_niver' ) order by nfantasia asc";
$res = mysql_query($sql);
$registros_encontrados = mysql_num_rows($res);


?>

<?
$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nfantasia_empresa = $linha[2];
$email_empresa = $linha[14];
$site_empresa = $linha[15];

}
	
	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO
	//$email_dest   =   $email_empresa;
		$email_dest   =   "";

	
	//PREPARA O PEDIDO
	$mens   =  "Ola! Seu cliente $nfantasia_empresa! acabou de efetuar um Download do relatorio de fichas enviadas para fabrica! Confira abaixo:   \n";
	$mens  .=  " \n";
	$mens  .=  "Cliente: ".$nfantasia."                                                       \n";
	$mens  .=  "Data do Download: ".$data_download."                                                    \n";
	$mens  .=  "Hora: ".$hora."                                                    \n\n";
	
	$mens  .=  "Periodo escolhido: ".$dia_inicial."-".$mes_inicial."-".$ano_inicial." ate ".$dia_final."-".$mes_final."-".$ano_final."                                       \n";
	$mens  .=  "Total de pares no periodo: ".$total_producao."                                                    \n";
	

	
	//DISPARA O EMAIL
	//$envia  =  mail($email_dest, "Download de relatorio em $data_download - ".$hora, $mens,"From:".$nfantasia."@$nfantasia.com.br");

?>


<?




$sql = "SELECT * FROM lojistas where ( mes = '$mes_niver' or mes2 = '$mes_niver' or mes3 = '$mes_niver' or mes4 = '$mes_niver' ) order by nfantasia asc";
$res = mysql_query($sql);
$reg = 0;
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
	
	
	if ( $mes_niver==$mes){ $imprime_proprietario = $proprietario; }
			  if ( $mes_niver==$mes2){ $imprime_proprietario = $proprietario2; }
	if ( $mes_niver==$mes3){ $imprime_proprietario = $proprietario3; }
	if ( $mes_niver==$mes4){ $imprime_proprietario = $proprietario4; }
	
	
	if ( $mes_niver==$mes){ $imprime_aniversario = "$dia-$mes-$ano"; }
			  if ( $mes_niver==$mes2){ $imprime_aniversario = "$dia2-$mes2-$ano2"; }
			  if ( $mes_niver==$mes3){ $imprime_aniversario = "$dia3-$mes3-$ano3"; }
			  if ( $mes_niver==$mes4){ $imprime_aniversario = "$dia4-$mes4-$ano4"; }
	
	
	if ( $mes_niver==$mes){ $imprime_celular = $celular; }
			  if ( $mes_niver==$mes2){ $imprime_celular = $celular2; }
			  if ( $mes_niver==$mes3){ $imprime_celular = $celular3; }
			  if ( $mes_niver==$mes4){ $imprime_celular = $celular4; }
	
	
	if ( $mes_niver==$mes){ $imprime_email_representante = $email_representante; }
			  if ( $mes_niver==$mes2){ $imprime_email_representante = $email_representante2; }
			  if ( $mes_niver==$mes3){ $imprime_email_representante = $email_representante3; }
			  if ( $mes_niver==$mes4){ $imprime_email_representante = $email_representante4; }

 
 
// Criamos uma tabela HTML com o formato da planilha
$html = '';
$html .= '<table>';
//$html .= '<tr>';
//$html .= '<td colspan="10"><div align="center">Total de clientes no mes'." $mes_niver ". '--->>> '."$registros_encontrados".'</div></td>';
//$html .= '</tr>';
//$html .= '<tr>';
//$html .= '<td><div align="center"><b>Nome</b></div></td>';
//$html .= '<td><div align="center"><b>CPF</b></div></td>';
//$html .= '<td><div align="center"><b>Data Nasc</b></div></td>';
//$html .= '<td><div align="center"><b>Endereço</b></div></td>';
//$html .= '<td><div align="center"><b>Numero</b></div></td>';
//$html .= '<td><div align="center"><b>Bairro</b></div></td>';
//$html .= '<td><div align="center"><b>Complemento</b></div></td>';
//$html .= '<td><div align="center"><b>Cidade</b></div></td>';
//$html .= '<td><div align="center"><b>Estado</b></div></td>';
//$html .= '<td><div align="center"><b>CEP</b></div></td>';
//$html .= '<td><div align="center"><b>Telefone</b></div></td>';
//$html .= '<td><div align="center"><b>Celular</b></div></td>';
//$html .= '<td><div align="center"><b>E-Mail</b></div></td>';

//$html .= '</tr>';

$html .= '<tr>';
$html .= '<td><div align="center">'."$nfantasia".'</div></td>';
$html .= '<td><div align="center">'."$imprime_proprietario".'</div></td>';
$html .= '<td><div align="center">'."$imprime_aniversario".'</div></td>';
$html .= '<td><div align="center">'."$imprime_celular".'</div></td>';
$html .= '<td><div align="center">'."$imprime_email_representante".'</div></td>';
//$html .= '<td><div align="center">'."$celular2".'</div></td>';
//$html .= '<td><div align="center">'."$email".'</div></td>';
//$html .= '<td><div align="center">'."$endereco".'</div></td>';
//$html .= '<td><div align="center">'."$numero".'</div></td>';
//$html .= '<td><div align="center">'."$bairro".'</div></td>';
//$html .= '<td><div align="center">'."$complemento".'</div></td>';
//$html .= '<td><div align="center">'."$cidade".'</div></td>';
//$html .= '<td><div align="center">'."$estado".'</div></td>';
//$html .= '<td><div align="center">'."$cep".'</div></td>';




$html .= '</tr>';



$html .= '</table>';


// Definimos o nome do arquivo que será exportado

$data = date('d-m-Y');
$hora_download = date('H:i:s');

$arquivo = "$nfantasia_empresa-$data-$hora_download.xls";

 
// Configurações header para forçar o download
header ("Expires: Mon, 16 Abril 2014 21:00:00 GMT");
header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");
header ("Content-type: application/x-msexcel");
header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
header ("Content-Description: PHP Generated Data" );
 
// Envia o conteúdo do arquivo
echo $html;

}

exit;
 
?>
