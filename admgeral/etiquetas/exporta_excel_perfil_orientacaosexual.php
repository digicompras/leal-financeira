<?

require '../../conect/conect.php';

?>


  <?
$tipo = $_POST['tipo'];
$orientacaosexual = $_POST['orientacaosexual'];
	
if(($tipo=="Todos") && ($orientacaosexual=="Todos")){
$sql = "SELECT * FROM clientes group by cpf order by nome asc";
}
	
if(($tipo<>"Todos") && ($orientacaosexual<>"Todos")){
$sql = "SELECT * FROM clientes where tipo = '$tipo' and sexo = '$orientacaosexual' group by cpf order by nome asc";
}
	
if(($tipo<>"Todos") && ($orientacaosexual=="Todos")){
$sql = "SELECT * FROM clientes where tipo = '$tipo' group by cpf order by nome asc";
}

if(($tipo=="Todos") && ($orientacaosexual<>"Todos")){
	
$sql = "SELECT * FROM clientes where sexo = '$orientacaosexual' group by cpf order by nome asc";
}
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
	
	
?>


<?
	
if(($tipo=="Todos") && ($orientacaosexual=="Todos")){
$sql = "SELECT * FROM clientes group by cpf order by nome asc";
}
	
if(($tipo<>"Todos") && ($orientacaosexual<>"Todos")){
$sql = "SELECT * FROM clientes where tipo = '$tipo' and sexo = '$orientacaosexual' group by cpf order by nome asc";
}
	
if(($tipo<>"Todos") && ($orientacaosexual=="Todos")){
$sql = "SELECT * FROM clientes where tipo = '$tipo' group by cpf order by nome asc";
}

if(($tipo=="Todos") && ($orientacaosexual<>"Todos")){
	
$sql = "SELECT * FROM clientes where sexo = '$orientacaosexual' group by cpf order by nome asc";
}
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {




$nome = $linha[1];
	
$cpf = $linha[4];

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

$num_beneficio = $linha[44];
 
 
// Criamos uma tabela HTML com o formato da planilha
$html = '';
$html .= '<table>';
//$html .= '<tr>';
//$html .= '<td colspan="10"><div align="center">Total de clientes no perfil'." $tipo ". '--->>> '."$registros_encontrados".'</div></td>';
//$html .= '</tr>';
//$html .= '<tr>';
//$html .= '<td><div align="center"><b>Nome</b></div></td>';
//$html .= '<td><div align="center"><b>Endereço</b></div></td>';
//$html .= '<td><div align="center"><b>Numero</b></div></td>';
//$html .= '<td><div align="center"><b>Bairro</b></div></td>';
//$html .= '<td><div align="center"><b>Complemento</b></div></td>';
//$html .= '<td><div align="center"><b>Cidade</b></div></td>';
//$html .= '<td><div align="center"><b>Estado</b></div></td>';
//$html .= '<td><div align="center"><b>CEP</b></div></td>';
//$html .= '<td><div align="center"><b>Telefone</b></div></td>';
//$html .= '<td><div align="center"><b>Celular</b></div></td>';

//$html .= '</tr>';

$html .= '<tr>';
$html .= '<td><div align="center">'."$nome".'</div></td>';
$html .= '<td><div align="center">'."$cpf".'</div></td>';
$html .= '<td><div align="center">'."$endereco".'</div></td>';
$html .= '<td><div align="center">'."$numero".'</div></td>';
$html .= '<td><div align="center">'."$bairro".'</div></td>';
$html .= '<td><div align="center">'."$complemento".'</div></td>';
$html .= '<td><div align="center">'."$cidade".'</div></td>';
$html .= '<td><div align="center">'."$estado".'</div></td>';
$html .= '<td><div align="center">'."$cep".'</div></td>';
$html .= '<td><div align="center">'."$telefone".'</div></td>';
$html .= '<td><div align="center">'."$celular".'</div></td>';

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
