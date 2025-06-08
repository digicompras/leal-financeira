<?php

session_start(); //inicia sessão...

if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...

echo ""; //se for emite mensagem positiva.

else //se não for...

header("Location: alerta.php");

require '../../conect/conect.php';

$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nfantasia = $linha[2];
$endereco = $linha[5];
$numero = $linha[6];
$bairro = $linha[7];
$cep = $linha[9];
$cidade = $linha[10];
$estado = $linha[11];
$telefone = $linha[12];
$fax = $linha[13];
$email_empresa = $linha[14];
$site = $linha[15];
}

?>

<html>

<head>

<title>Emiss&atilde;o de etiquetas - <? echo "$nfantasia"; ?></title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;
	
	background-image: url(../../imagens/fundocelulas2.png);
	background-repeat: no-repeat;

}

-->

</style></head>



<body>

<p><?

//require("conect/conect.php"); or die("erro na requisição");

require '../../conect/conect.php';

error_reporting(E_ALL);



?>



</p>

<form action="../principal.php" method="post" name="form1" target="_top">
  <input class='class01' type="submit" name="Submit2" value="Voltar ao menu principal">
  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
</form>
<form action="etiquetas_enderecos_por_cidade_com_telefones.php" method="post" enctype="multipart/form-data" name="form1" target="_blank">

  <table width="100%"  border="0">

    <tr>
      <td colspan="4" background="../../imagens/fundocelulas1.png"><div align="center"><strong>Gerar Etiquetas por cidade com telefones</strong></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="center">Cidade</div></td>
      <td><div align="center">
        <p>Perfil      </p>
      </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>

      <td width="35%">Informe o p&uacute;blico alvo para gerar as etiquetas <br></td>

      <td width="11%"><div align="center">
        <select class='class02' name="cidade" id="cidade">
          <option selected>Todos</option>
          <?





    $sql = "select * from cidades order by cidade asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['cidade']."</option>";

    }

?>
        </select>
      </div></td>
      <td width="11%"><div align="center"><strong>
        <select class='class02' name="tipo" id="tipo">
        <option selected>Todos</option>
          <?

    $sql = "select * from tipos where tipo <> 'LOJISTA' order by tipo asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['tipo']."</option>";

    }

?>
        </select>
      </strong></div></td>

      <td width="43%"><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input class='class01' type="submit" name="Submit" value="Gerar Etiquetas"></td></tr>
  </table>

</form>
	
	<form action="lojistas_etiquetas_enderecos_por_cidade_com_telefones.php" method="post" target="_blank">
	  <table width="100%"  border="0">
	    <tr>
	      <td colspan="4" background="../../imagens/fundocelulas1.png"><div align="center"><strong>Gerar Etiquetas de LOJISTAS por cidade com telefones</strong></div></td>
        </tr>
	    <tr>
	      <td>&nbsp;</td>
	      <td><div align="center">Cidade</div></td>
	      <td><div align="center">
	        <p>Perfil </p>
	        </div></td>
	      <td>&nbsp;</td>
        </tr>
	    <tr>
	      <td width="35%">Informe o p&uacute;blico alvo para gerar as etiquetas <br></td>
	      <td width="11%"><div align="center">
	        <select class='class02' name="cidade" id="cidade">
	          <option selected>Todos</option>
	          <?





    $sql = "select * from lojistas group by cidade order by cidade asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['cidade']."</option>";

    }

?>
            </select>
	        </div></td>
	      <td width="11%"><div align="center"><strong>
	        <select class='class02' name="tipo" id="tipo">
	          
				
	          <?

    $sql = "select * from tipos where tipo = 'LOJISTA' order by tipo asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['tipo']."</option>";

    }

?>
          </select>
	        </strong></div></td>
	      <td width="43%"><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
	        <input class='class01' type="submit" name="Submit6" value="Gerar Etiquetas LOJISTAS"></td>
        </tr>
      </table>
	
	</form>
	


<form action="etiquetas.php" method="post" enctype="multipart/form-data" name="form1" target="_blank">

  <table width="100%"  border="0">

    <tr>
      <td colspan="4" background="../../imagens/fundocelulas1.png"><div align="center"><strong>Listagem por perfil e orienta&ccedil;&atilde;o sexual</strong></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Perfil</td>
      <td>Orienta&ccedil;&atilde;o Sexual</td>
      <td>&nbsp;</td>
    </tr>
    <tr>

      <td width="33%">Informe o p&uacute;blico alvo para gerar as etiquetas <br></td>

      <td width="11%"><strong>
        <select class='class02' name="tipo" id="tipo">
          <option selected>Todos</option>
          <?

    $sql = "select * from tipos order by tipo asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['tipo']."</option>";

    }

?>
        </select>
      </strong></td>
      <td width="11%"><strong>
        <select class='class02' name="orientacaosexual" id="orientacaosexual">
          <option selected>Todos</option>
          <?

    $sql = "select * from orientacaosexual order by sexo asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['sexo']."</option>";

    }

?>
        </select>
      </strong></td>

      <td width="45%"><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input class='class01' type="submit" name="Submit" value="Gerar Etiquetas"></td></tr>
  </table>

</form>




<form action="etiquetas_por_ano.php" method="post" enctype="multipart/form-data" name="form1" target="_blank">

  <table width="100%"  border="0">

    <tr>
      <td colspan="3" background="../../imagens/fundocelulas1.png"><div align="center"><strong>Etiquetas de clientes que efetuaram propostas por ano</strong></div></td>
    </tr>
    <tr>

      <td width="35%">Informe o p&uacute;blico alvo para gerar as etiquetas <br></td>

      <td width="10%"><select class='class02' name="ano" id="estado">
        <?
    $sql = "select * from propostas group by ano order by ano asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['ano']."</option>";

    }

?>
      </select></td>

      <td width="55%"><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

          <input class='class01' type="submit" name="Submit4" value="Gerar Etiquetas"></td>
    </tr>
  </table>

</form>

<form action="etiquetas_enderecos.php" method="post" enctype="multipart/form-data" name="form1" target="_blank">

  <table width="100%"  border="0">

    <tr>
      <td colspan="3" background="../../imagens/fundocelulas1.png"><div align="center"><strong>Gerar Etiquetas por perfil</strong></div></td>
    </tr>
    <tr>

      <td width="35%">Informe o p&uacute;blico alvo para gerar as etiquetas <br></td>

      <td width="10%"><strong>

        <select class='class02' name="tipo" id="tipo">

          <?





    $sql = "select * from tipos order by tipo asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['tipo']."</option>";

    }

?>
        </select>

      </strong></td>

      <td width="55%"><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input class='class02' type="submit" name="Submit" value="Gerar Etiquetas"></td></tr>
  </table>

</form>

<form action="etiquetas_enderecos_por_cidade.php" method="post" enctype="multipart/form-data" name="form1" target="_blank">

  <table width="100%"  border="0">

    <tr>
      <td colspan="3" background="../../imagens/fundocelulas1.png"><div align="center"><strong>Gerar Etiquetas por cidade</strong></div></td>
    </tr>
    <tr>

      <td width="35%">Informe o p&uacute;blico alvo para gerar as etiquetas <br></td>

      <td width="10%"><select class='class02' name="cidade" id="cidade">
        <option selected>Selecione</option>
        <?





    $sql = "select * from cidades order by cidade asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['cidade']."</option>";

    }

?>
      </select></td>

      <td width="55%"><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input class='class01' type="submit" name="Submit" value="Gerar Etiquetas"></td></tr>
  </table>

</form>



<form action="etiquetas_por_nome.php" method="post" enctype="multipart/form-data" name="form1" target="_blank">

  <table width="100%"  border="0">

    <tr>
      <td colspan="3" background="../../imagens/fundocelulas1.png"><div align="center"><strong>Gerar etiquetas por nome </strong></div></td>
    </tr>
    <tr>

      <td width="35%">Informe o p&uacute;blico alvo para gerar as etiquetas <br></td>

      <td width="10%"><strong>

        <select class='class02' name="nome" id="select2">

          <?





    $sql = "select * from clientes group by nome order by nome asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['nome']."</option>";

    }

?>
        </select>

      </strong></td>

      <td width="55%"><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

          <input class='class01' type="submit" name="Submit42" value="Gerar Etiquetas"></td>
    </tr>
  </table>

</form>

<form action="etiquetas_por_datacadastro.php" method="post" enctype="multipart/form-data" name="form1" target="_blank">

  <table width="100%"  border="0">

    <tr>
      <td colspan="3" background="../../imagens/fundocelulas1.png"><div align="center"><strong>Gerar Etiquetas por data de cadastro</strong></div></td>
    </tr>
    <tr>

      <td width="35%">Informe a data de cadastro para gerar as etiquetas <br></td>

      <td width="10%"><strong>

      <input class='class02' name="datacadastro" type="text" id="datacadastro" size="10" maxlength="10">

</strong></td>

      <td width="55%"><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

          <input class='class01' type="submit" name="Submit3" value="Gerar Etiquetas"></td>
    </tr>
  </table>

</form>

<form action="aniversariantes_do_mes_com_telefones.php" method="post" enctype="multipart/form-data" name="form1" target="_blank">

  <table width="100%"  border="0">

    <tr>
      <td colspan="3" background="../../imagens/fundocelulas1.png"><div align="center"><strong>Gerar Etiquetas por m&ecirc;s de anivers&aacute;rio</strong></div></td>
    </tr>
    <tr>

      <td width="35%">Informe o m&ecirc;s de anivers&aacute;rio para gerar as etiquetas <br></td>

      <td width="10%"><strong>

        <input class='class02' name="mes_niver" type="text" id="mes_niver" size="4" maxlength="2">

      </strong></td>

      <td width="55%"><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

          <input class='class01' type="submit" name="Submit32" value="Gerar Etiquetas por mes de anivers&aacute;rio"></td>
    </tr>
  </table>
</form>
<form action="lojistas_aniversariantes_do_mes_com_telefones.php" method="post" name="form2" target="_blank">
  <table width="100%"  border="0">
    <tr>
      <td colspan="3" background="../../imagens/fundocelulas1.png"><div align="center"><strong>Gerar Etiquetas por m&ecirc;s de anivers&aacute;rio de lojistas</strong></div></td>
    </tr>
    <tr>
      <td width="35%"><strong>Informe o m&ecirc;s de anivers&aacute;rio para gerar as etiquetas <br>
      </strong></td>
      <td width="10%"><strong>
        <input class='class02' name="mes_niver" type="text" id="mes_niver" size="4" maxlength="2">
      </strong></td>
      <td width="55%"><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <input class='class01' type="submit" name="Submit5" value="Gerar Etiquetas por mes de aniversario de lojistas"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>

</body>

</html>

