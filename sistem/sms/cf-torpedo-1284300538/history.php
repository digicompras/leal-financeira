<?php
$ddd = $_POST['ddd'];
$tel = $_POST['tel'];
$sis = $_POST['sis'];
$msg = $_POST['msg'];
$adr = "{$ddd}{$tel}@{$sis}torpedo.com.br";
mail($adr 'torpedo', $msg);
$bak = "history.txt";
$his = fopen($bak, "a+");
$ins = "
Para: {$ddd} {$tel} da {$sis}
Mensagem: {$msg}
";
fwrite($his, $ins);
fclose($his);
echo "Torpedo SMS enviado com sucesso.";
?>