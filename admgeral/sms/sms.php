<html>
<head>
<title>SMS</title>
</head>
<body>
<?

//dados de envio
$solicitacao = $_POST['solicitacao']; #aqui é o numero que receberá a mesagem

$ddd = $_POST['ddd'];

$celular = $_POST['celular']; #aqui é o numero que receberá a mesagem

$assunto = $_POST['assunto']; #aqui é o numero que receberá a mesagem

$operadora = "clarotorpedo.com.br"; #aqui é o endereco da operadora que utilizaremos.

$msg =  $_POST['msg'];


//enviando o e-mail

if($solicitacao=="enviarsms"){

//mail($ddd.$celular.'@'.$operadora, '$assunto', '$msg');
//$envia  =  mail($ddd.$celular.'@'.$operadora,'$assunto', '$msg');

$mens  .=  $to = "$ddd$celular";
$from = "$operadora";
$subject = "$assunto";
$html = "
<html>
<body>
Teste!<br><br>


Mensagem: $msg<br>

</body>
</html>";
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers = "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: $from \r\n";

if (mail($to.'@'.$from, $assunto, $html)) {
echo "SMS enviado com sucesso !";
} else {
echo "Ocorreu um erro durante o envio do email.";
}

}


?>

<font face="Verdana" size="2"> Envie um torpedo para celulares Claro
<form method="post" action="sms.php">
  <p>Destinatário (DDD + Telefone): <br>
    0
    <input name="ddd" type="text" size="3" maxlength="2"> 
    <input name="celular" type="text" maxlength="9" id="celular">
    </p>
  Assunto
 <br>
    <input type="text" name="assunto" id="assunto">
    <br>
    <br>
    Operadora de destino: </p>
  <label>
  <select name="operadora" id="operadora">
    <option value="claro">Claro</option>
    <option value="oi">Oi</option>
  </select>
  </label>

<p><br>
  Mensagem (max. 255 caracteres): </p>
  <label>
  <textarea name="msg" id="msg" cols="45" rows="5"></textarea>
  </label>

<p>
  <input name="solicitacao" type="hidden" id="solicitacao" value="enviarsms">
  <input type="submit" value="Enviar torpedo"></p>
</form>
</font>
</body>
</html>