<?php

session_start(); //inicia sess�o...

if ($_SESSION["usuario"] == true) //verifica se a vari�vel "usuario" � verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["senha"] == true) //verifica se a vari�vel "senha" � verdadeira...

echo ""; //se for emite mensagem positiva.

else //se n�o for...

header("Location: alerta.php");



?>



<html>

<head>

<title>Documento sem t&iacute;tulo</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

<!--

.style1 {

	color: #0000FF;

	font-weight: bold;

	font-size: 18px;

}

-->

</style>

</head>



<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  <table background="../../imagens/fundocelulas2.png" width="100%" border="0" cellspacing="10">

    <tr>

      <td colspan="4"><?

//require("conect/conect.php"); or die("erro na requisi��o");

require '../../conect/conect.php';

error_reporting(E_ALL);

?>



<?
$assunto = $_POST['assunto'];

$mensagem = $_POST['mensagem'];

$nome_operador = $_POST['nome_operador'];

$data = date('d-m-Y');

$hora = date('H:i:s');



if (empty($mensagem)) {

}

else{

if($nome_operador=="Todos"){

$sql = "SELECT * FROM operadores where status = 'Ativo' and nome <> 'Ivan - Sistemas'";
$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {



$nome = $linha[1];



$comando = "insert into mensagens_ao_funcionario(nome_operador,data_mensagem,hora_mensagem,mensagem,mensagem_lida,assunto) values('$nome','$data','$hora','$mensagem','Nao lida','$assunto')";



mysql_query($comando,$conexao);

}
}
}



if (empty($mensagem)) {

}

else{

if($nome_operador<>"Todos"){




$comando = "insert into mensagens_ao_funcionario(nome_operador,data_mensagem,hora_mensagem,mensagem,mensagem_lida,assunto) values('$nome_operador','$data','$hora','$mensagem','Nao lida','$assunto')";



mysql_query($comando,$conexao);

}
}


?>



</td>

    </tr>

    <tr>

      <td colspan="4" background="../../imagens/fundocelulas1.png"><div align="center" ><strong>Sess&atilde;o de envio de mensagens/comunicados aos operadores(funcion&aacute;rios) </strong></div></td>

    </tr>

    <tr>

      <td width="23%"><form action="../principal.php" method="post" name="form1" target="_top">
        <input class='class01' type="submit" name="Submit2" value="Voltar ao menu principal">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
      </form></td>

      <td colspan="3">&nbsp;</td>

    </tr>

  </table>

  <form name="form2" method="post" action="menu.php">

    <table background="../../imagens/fundocelulas2.png" width="100%"  border="0">

      <tr>

        <td width="12%">Nome do operador(a) </td>

        <td width="21%"><select class='class02' name="nome_operador" id="select6">

          <option selected><? echo "Todos";  ?></option>

          <?





    $sql = "select * from operadores order by nome asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['nome']."</option>";

    }

?>

        </select></td>

        <td width="6%">Assunto:</td>
        <td width="35%"><input class='class02' name="assunto" type="text" id="assunto" size="50"></td>
        <td width="26%"><input class='class01' type="submit" name="Submit" value="Enviar"></td>
      </tr>

      <tr>

        <td colspan="5"><div align="center">

          <textarea class='class02' name="mensagem" cols="100" rows="7" id="mensagem"></textarea>

        </div></td>
      </tr>

      <tr>

        <td colspan="5"><div align="center">Lista de mensagens do operador </div></td>
      </tr>

      <tr>

        <td colspan="5"><div align="center">

          <textarea class='class02' name="historico_mensagens" cols="100" rows="10" readonly="readonly" id="textarea"><?  

$sql = "SELECT * FROM mensagens_ao_funcionario where nome_operador = '$nome_operador' order by codigo desc";

$res = mysql_query($sql);

$reg = 0;

//echo "<tr>";

while($linha=mysql_fetch_row($res)) {



$codigo = $linha[0];

$nome_operador = $linha[1];

$data_mensagem = $linha[2];

$hora_mensagem = $linha[3];

$mensagem = $linha[4];

$mensagem_lida = $linha[5];

$data_leitura = $linha[6];

$hora_leitura = $linha[7];

$assunto = $linha[8];




echo "$data_mensagem - "."$hora_mensagem - "."$assunto - "."$mensagem - "."$mensagem_lida - "."$data_leitura - "."$hora_leitura ";

?>



<?



if($reg==1){

//echo "</tr>";

$reg=0;

}





}

	  

	  

	  

	  

	   ?>

          </textarea>

        </div></td>
      </tr>
    </table>

</form>

<p>&nbsp; </p>

</body>

</html>

