<?
require 'conect/conect.php';

include '../css_menus/modal.css';
?>
<?php
# Inicnando a variavel que vai indentificar se temos que exibir o modal ou não
$exibirModal = false;
# Verificando se não existe o cookie
if(!isset($_COOKIE["usuarioVisualizouModal"]))
{
# Caso não exista entra aqui.

# Vamos criar o cookie com duração de 1 semana
$diasparaexpirar = 7;
setcookie('usuarioVisualizouModal', 'SIM', (time() + ($diasparaexpirar * 24 * 3600)));

# Seto nossa variavel de controle com o valor TRUE ( Verdadeiro)
$exibirModal = true;
}

?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

    <div id="meumodal" class="modal" role="dialog">
<a href="#fechar" title="Fechar" class="fechar">Fechar</a>
<br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<?
$sql = "select * from publicidade order by posicao asc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];
$posicao = $linha[1];
$imagem = $linha[2];
$texto1 = $linha[3];
$tamanho1 = $linha[3];
}
?>
<tr align="center">

<?



echo "<img src='../publicidade/$imagem' border='0' width='800' height='620' alt='$texto'>"; 


?>
<link rel="stylesheet" type="text/css" href="../css_menus/estilo.css"/>
<font-size="<? echo "$tamanho1"; ?>">
<strong><? echo "$texto1"; ?></strong>
</font>
  </tr>
</table>
</form>
</div>


</body>

<?php if($exibirModal === true) : ?>
<script type="text/javascript">
$(document).ready(function()
{
$("#meumodal").modal("show");
});
</script>
<?php endif;?>
</html>