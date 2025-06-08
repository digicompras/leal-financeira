<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
/**
 * Envio de SMS utilizando PHP, XML e cURL.
 * 
 * @author John-Henrique
 * @copyright 2013
 * @version 1.0
 * @link http://smsdeck.com.br/documentacao/enviar-sms-php.html
 * 
 */
$ddd = $_POST['ddd']; 
$celular = $_POST['celular']; 
$msg = $_POST['msg']; 

$celular_destino = "$ddd$celular";
// dados do SMS
$numero_destino = "5521$celular_destino";
$numero_origem = "552116997391418";
$mensagem = "$msg";
$agendar = ''; // este SMS será enviado imediatamente
$token = 'a54d54ae7r84gfg1fh4g78h1mj4k7u';
$key = '8qw4er8w4sdfg21hd2jf65u6uk8k9j89';
// estrutura XML
$xml = '<?xml version="1.0" encoding="iso-8859-1"?>
<sms>
<contato>
<numero_destino>'. $numero_destino .'</numero_destino>
<numero_origem>'. $numero_origem .'</numero_origem>
</contato>
<mensagem>'. $mensagem .'</mensagem>
<agendar>'. $agendar .'</agendar>
<token>'. $token .'</token>
<key>'. $key .'</key>
</sms>';
// API alvo da ação
$acao = "sms";
// cria uma conexão CURL
$curl = curl_init( "http://smsdeck.com.br/api/". $acao ); 
// define que o envio deve ser via POST
curl_setopt($curl, CURLOPT_POST, 1);
// define o conteúdo da mensagem
curl_setopt($curl, CURLOPT_POSTFIELDS, $xml ); 
// ignora cabeçalhos
curl_setopt($curl, CURLOPT_HEADER, 0);
// retorna o resultado como texto
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
// saida do conteudo na variavel $resultado
$resposta = curl_exec($curl); 
// fecha a conexão CURL 
curl_close($curl);
// exibe na tela o retorno do servidor
print_r( $resposta, true );
?>

</body>
</html>
