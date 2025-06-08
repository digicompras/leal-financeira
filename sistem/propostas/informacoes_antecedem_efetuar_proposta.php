<?php
session_start(); //inicia sessão...
if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
else //se não for...
header("Location: alerta.php");

ini_set('default_charset','UTF8_general_mysql500_ci');

require '../../conect/conect.php';


?>
<html>
<head>
<title>Informa&ccedil;&otilde;es pr&eacute;vias para preenchimento de proposta!</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-repeat: no-repeat;
	background-attachment: fixed;

}

-->
</style>
</head>

<?
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$background = $linha[1];

}
?>

<body background="../../background/<? echo "$background"; ?>">
<p><?
//require("conect/conect.php"); or die("erro na requisição");

$cpf = $_POST['cpf'];
$tipo = $_POST['tipo'];
$estabelecimento_proposta = $_POST['estabelecimento_proposta'];
$bloqueio_compra = $_POST['bloqueio_compra'];


$bloqueio_compra_recebe = $_GET['bloqueio_compra'];
$bloqueio_compra2 = $bloqueio_compra_recebe;

if(empty($bloqueio_compra)){
$bloqueio_de_compra = $bloqueio_compra2;
}
else{
$bloqueio_de_compra = $bloqueio_compra;
}


$cpf_recebe = $_GET['cpf'];
$cpf2 = $cpf_recebe;

$tipo_recebe = $_GET['tipo'];
$tipo2 = $tipo_recebe;

$estabelecimento_proposta_recebe = $_GET['estabelecimento_proposta'];
$estabelecimento_proposta2 = $estabelecimento_proposta_recebe;

$tipo_proposta_recebe = $_GET['tipo_proposta'];
$tipo_proposta2 = $tipo_proposta_recebe;


$tipo_contrato_recebe = $_GET['tipo_contrato'];
$tipo_contrato2 = $tipo_contrato_recebe;


$tabela_recebe = $_GET['tabela'];
$tabela2 = $tabela_recebe;





error_reporting(E_ALL);

?>
      <? 

$sql = "SELECT * FROM termo_de_responsabilidade limit 1";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$termo = $linha[1];

}


 ?>


</p>
<form name="form1" method="post" action="menu.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input class='class01' type="submit" name="Submit2" value="Voltar">
</form>
<p>&nbsp;</p>
<form action="efetuar_proposta.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="60%"  border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td background="../../imagens/fundocelulas1.png"><strong>
        <input name="bloqueio_compra" type="hidden" id="bloqueio_compra" value="<? echo $bloqueio_de_compra; ?>" />
      Qual o perfil do cliente? </strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Agencia da proposta </strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>CPF informado</strong></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><? if(empty($tipo)){ echo $tipo2;} else{ echo $tipo; } ?>
        <input name="tipo" type="hidden" id="tipo" value="<? if(empty($tipo)){ echo $tipo2;} else{ echo $tipo; } ?>"></td>
      <td background="../../imagens/fundocelulas1.png"><? if(empty($estabelecimento_proposta)){ echo $estabelecimento_proposta2;} else{ echo $estabelecimento_proposta; } ?>
        <input name="estabelecimento_proposta" type="hidden" id="estabelecimento_proposta" value="<? if(empty($estabelecimento_proposta)){ echo $estabelecimento_proposta2;} else{ echo $estabelecimento_proposta; } ?>"></td>
      <td background="../../imagens/fundocelulas1.png"><? if(empty($cpf)){ echo $cpf2;} else{ echo $cpf; } ?>
        <input name="cpf" type="hidden" id="cpf" value="<? if(empty($cpf)){ echo $cpf2;} else{ echo $cpf; } ?>"></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><strong>Tipo de proposta </strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Tipo de contrato</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Tabela</strong></td>
    </tr>
    <tr>
      <td width="36%" background="../../imagens/fundocelulas1.png"><select class='class02' name="tipo_proposta" id="tipo_proposta">
        <option selected>
          <? if(empty($tipo_proposta)){ echo $tipo_proposta2;} else{ echo $tipo_proposta; } ?>
          </option>
        <?

if($bloqueio_de_compra=="Sim"){
$sql = "select * from tipos_propostas where tipo_proposta <> 'COMPRAS' and setor = 'CONSIGNADO' and status = 'Ativo' order by tipo_proposta asc";
}
else{
$sql = "select * from tipos_propostas where setor = 'CONSIGNADO' and status = 'Ativo' order by tipo_proposta asc";
}
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['tipo_proposta']."</option>";
    }
?>
      </select>
      <br></td>
      <td width="37%" background="../../imagens/fundocelulas1.png"><select class='class02' name="tipo_contrato" id="tipo_contrato">
        <option selected>
          <? if(empty($tipo_contrato)){ echo $tipo_contrato2;} else{ echo $tipo_contrato; } ?>
          </option>
        <?

if($bloqueio_de_compra=="Sim"){
$sql = "select * from tipo_contrato where tipo_contrato <> 'COMPRA' and status = 'Ativo' order by tipo_contrato asc";
}
else{
$sql = "select * from tipo_contrato where status = 'Ativo' order by tipo_contrato asc";
}
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['tipo_contrato']."</option>";
    }
?>
      </select></td>
    <td width="27%" background="../../imagens/fundocelulas1.png"><select class='class02' name="tabela" id="tabela">
      <option selected>
        <? if(empty($tabela)){ echo $tabela2;} else{ echo $tabela; } ?>
        </option>
      <?


    $sql = "select * from tabelas order by tabela asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['tabela']."</option>";
    }
?>
    </select></td></tr>
    <tr>
      <td colspan="3" background="../../imagens/fundocelulas2.png"><div align="center"><strong>Especifico para Ve&iacute;culos</strong></div></td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><strong>Tipo do bem </strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Tipo de ve&iacute;culo a ser financiado </strong></td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><strong><font color="#0000FF">
        <select class="class02" name="bem" id="select11">
          <option selected>Selecione</option>
          <?





    $sql = "select * from tipos_bens order by bem desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['bem']."</option>";

    }

?>
        </select>
      </font></strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>
        <select class="class02" name="categoria_veiculo" id="select8">
          <option selected>Selecione</option>
          <?

    $sql = "select * from categorias_veiculos order by categoria asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['categoria']."</option>";

    }

?>
        </select>
      </strong></td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><strong>Valor de venda do bem</strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Valor de entrada </strong></td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png">R$
        <input class="class02" name="valor_venda" type="text" id="valor_venda" value="0.00">
        Formato 0000.00 </td>
      <td background="../../imagens/fundocelulas1.png">R$
        <input class="class02" name="valor_entrada" type="text" id="valor_entrada" value="0.00">
        Formato 0000.00 </td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><strong>N&ordm; de parcelas </strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Coeficiente</strong></td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><select class="class02" name="num_parcelas" id="num_parcelas">
          <option selected>Selecione</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
          <option>18</option>
          <option>24</option>
          <option>36</option>
          <option>42</option>
          <option>48</option>
          <option>50</option>
          <option>60</option>
          <option>72</option>
      </select></td>
      <td background="../../imagens/fundocelulas1.png"><input class="class02" name="coeficiente" type="text" id="coeficiente" value="0.00"></td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><strong>C&oacute;digo da Tabela </strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>Mista </strong></td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><input class="class02" name="codigo_tabela" type="text" id="codigo_tabela" value="0.00"></td>
      <td background="../../imagens/fundocelulas1.png"><select class="class02" name="mista" id="mista">
          <option>Sim</option>
          <option selected>Não</option>
      </select></td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><strong>Servi&ccedil;o de terceiros </strong></td>
      <td background="../../imagens/fundocelulas1.png"><strong>
        <input name="valor_liberado" type="hidden" id="valor_liberado" value="<? echo 0.00; ?>">
        TC</strong></td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr>
      <td background="../../imagens/fundocelulas1.png"><select class="class02" name="r" id="select5">
          <option selected>Selecione</option>
          <option>0</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
      </select></td>
      <td background="../../imagens/fundocelulas1.png"><input name="tac" type="text" class="class02" id="tac" value="0.00"></td>
      <td background="../../imagens/fundocelulas1.png">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" background="../../imagens/fundocelulas2.png"><div align="center"><strong>
        <?

echo "<br>Termo de Responsabilidade(Assinatura eletrônica)<br><br>$termo";
?>
      </strong></div></td>
    </tr>
    <tr>
      <td colspan="3" background="../../imagens/fundocelulas2.png"><div align="center"><strong>
        <input class='class02' name="termo_de_responsabilidade" type="radio" id="radio" value="Estou ciente e de Acordo!">
      Estou ciente e de Acordo!</strong></div></td>
    </tr>
    <tr>
      <td colspan="3" background="../../imagens/fundocelulas2.png"><div align="center">
        <input name="valor_liberado" type="hidden" id="valor_liberado" value="<? echo 0.00; ?>">
        <input name="bco_operacao" type="hidden" id="bco_operacao" value="<? echo "Será informado posteriormente"; ?>">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input class='class01' type="submit" name="Submit" value="Efetuar Proposta">
      </div></td>
    </tr>
  </table>
</form>

<p>&nbsp;</p>
</body>
</html>
