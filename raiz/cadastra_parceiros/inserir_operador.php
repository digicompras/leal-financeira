
<html>

<head>

<title>CADASTRO DE OPERADORES</title>

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
	
$sql = "SELECT * FROM fundo_site";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$reg++;

?>





<body bgcolor="#<? printf("$linha[1]"); ?>" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  <?

if($reg==1){

echo "</tr><tr>";

$reg=0;

}

?>

  

<? } ?>



<?
$sql = "SELECT * FROM hora_certa limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {


$acao = $linha[5];
$hora_ajuste = $linha[2];

}

$horacerta = date('H')+$hora_ajuste;
if($horacerta<=9){
$hora_atual = "0".$horacerta.date(':i:s');
}
else{
$hora_atual = $horacerta.date(':i:s');
}
?>
<?


$sql = "SELECT * FROM estabelecimentos limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$estab_pertence = $linha[2];

$cidade_estab_pertence = $linha[10];

$email_estab_pertence = $linha[14];

$tel_estab_pertence = $linha[12];

 }
?>


<form name="form1" method="post" action="grava_operador.php">



<table width="100%" border="0" cellspacing="4">

    <tr>
      <td class="style1"><a href="index.php#aviso_de_filiais"><img width="180" height="90" src="../images/logo.jpg" alt="company logo" /></a></td>
      <td class="style1"><?

$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$razaosocial = $linha[1];
$nfantasia = $linha[2];
$cnpj = $linha[3];
$endereco = $linha[5];
$numero = $linha[6];
$bairro = $linha[7];
$cep = $linha[9];
$cidade = $linha[10];
$estado = $linha[11];

}

?><?  
								echo "Razao Social: $razaosocial <br>";
								echo "Nome Fantasia:$nfantasia <br>";
								echo "CNPJ:$cnpj <br>";
								echo "Endereco: $endereco, $numero $bairro $cidade-$estado <br>";
								echo "CEP: $cep <br>";
								
								?></td>
      <td class="style1">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 

      <td class="style1">Tipo de operador </td>

      <td><select class="class02" name="tipo_op" id="tipo_op">

        <option selected>PARCEIRO</option>

       

      </select></td>

      <td class="style1">Data Cadastro </td>

      <td><strong><font color="#0000FF"><? echo date('d-m-Y'); ?></font></strong>

        <input name="datacadastro" type="hidden" id="datacadastro2" value="<? echo date('d-m-Y'); ?>">

        <input name="horacadastro" type="hidden" id="horacadastro2" value="<? echo $hora_atual; ?>">

        <input name="status" type="hidden" id="status" value="Ativo">

        <input name="bloqueio_parcial" type="hidden" id="bloqueio_parcial" value="Nao"></td>
    </tr>

    <tr>

      <td class="style1">Estabelecimento</td>

      <td><strong><font color="#0000FF"><? echo $estab_pertence; ?>

        <input name="estab_pertence" type="hidden" id="datacadastro" value="<? echo $estab_pertence; ?>">

      </font></strong></td>

      <td class="style1">Cidade</td>

      <td><strong><font color="#0000FF"><? echo $cidade_estab_pertence; ?>

            <input name="cidade_estab_pertence" type="hidden" id="estab_pertence" value="<? echo $cidade_estab_pertence; ?>">

      </font></strong></td>
    </tr>

    <tr>

      <td class="style1">Telefone</td>

      <td><strong><font color="#0000FF"><? echo $tel_estab_pertence; ?>

            <input name="tel_estab_pertence" type="hidden" id="tel_estab_pertence" value="<? echo $tel_estab_pertence; ?>">

      </font></strong></td>

      <td class="style1">E_Mail</td>

      <td><strong><font color="#0000FF"><? echo $email_estab_pertence; ?>

            <input name="email_estab_pertence" type="hidden" id="estab_pertence3" value="<? echo $email_estab_pertence; ?>">

      </font></strong></td>
    </tr>

    <tr> 

      <td class="style1">Nome</td>

      <td><input class="class02" name="nome" type="text" id="nome2" size="50" maxlength="50"></td>

      <td class="style1">Fun&ccedil;&atilde;o</td>

      <td><select class="class02" name="funcao" id="funcao">

        <option selected>Operador(a)</option>

      </select></td>
    </tr>

    <tr> 

      <td width="17%" class="style1">Data Nasc </td>

      <td width="34%"><input class="class02" name="data_nasc" type="text" id="data_nasc" size="15" maxlength="10"></td>

      <td width="15%" class="style1">Orienta&ccedil;&atilde;o Sexual</td>

      <td width="34%"><select class='class02' name="sexo" id="sexo">
        <?

    $sql = "select * from orientacaosexual order by sexo asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['sexo']."</option>";

    }

?>
      </select>        <font color="#0000FF">&nbsp; </font></td>
    </tr>

    <tr> 

      <td class="style1">Estado Civil </td>

      <td><select class="class02" name="estadocivil" id="select3">

        <option selected>Selecione</option>

        <?

    $sql = "select * from estado_civil order by estadocivil asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['estadocivil']."</option>";

    }

?>

      </select>        </td>

      <td class="style1">CPF</td>

      <td><input class="class02" name="cpf" type="text" id="cpf" size="18" maxlength="14">      </td>
    </tr>

    <tr>

      <td class="style1">RG</td>

      <td><input class="class02" name="rg" type="text" id="rg" size="25" maxlength="25"> 

        <span class="style1">&Oacute;rg&atilde;o</span>
        <input class="class02" name="orgao" type="text" id="cpf3" size="15" maxlength="14"></td>

      <td class="style1">Emiss&atilde;o</td>

      <td><input class="class02" name="emissao" type="text" id="cpf4" size="15" maxlength="10">
        <span class="style1"> 
        dd/mm/aaaa </span></td>
    </tr>

    <tr>

      <td class="style1">Pai</td>

      <td><input class="class02" name="pai" type="text" id="pai" size="50" maxlength="50"></td>

      <td class="style1">M&atilde;e</td>

      <td><input class="class02" name="mae" type="text" id="endereco3" size="50" maxlength="50"></td>
    </tr>

    <tr> 

      <td class="style1">Endere&ccedil;o</td>

      <td><input class="class02" name="endereco" type="text" id="endereco" size="50" maxlength="50">      </td>

      <td class="style1">N&uacute;mero</td>

      <td><input class="class02" name="numero" type="text" id="numero2" size="10" maxlength="10">      </td>
    </tr>

    <tr> 

      <td class="style1"><p>Bairro</p></td>

      <td><input class="class02" name="bairro" type="text" id="bairro" size="50" maxlength="50">      </td>

      <td class="style1">Complemento</td>

      <td><input class="class02" name="complemento" type="text" id="endereco4" size="50" maxlength="50"></td>
    </tr>

    <tr>

      <td class="style1">Cidade</td>

      <td><input class="class02" name="cidade" type="text" id="cidade" size="50" maxlength="50"></td>

      <td class="style1">Estado</td>

      <td><select class="class02" name="estado" id="select7">

        <option selected>Selecione</option>

        <?





    $sql = "select * from estados_do_brasil order by estado asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option value=" .$x['estado']. ">".$x['estado']."</option>";

    }

?>

      </select></td>
    </tr>

    <tr> 

      <td class="style1">Cep</td>

      <td><input class="class02" name="cep" type="text" id="cep" size="9" maxlength="9">

      <span class="style1">Use o formato 00000-000</span></td>

      <td class="style1">Telefone</td>

      <td><input class="class02" name="telefone" type="text" id="endereco5" size="15" maxlength="14"> </td>
    </tr>

    <tr> 

      <td class="style1">Celular</td>

      <td><input class="class02" name="celular" type="text" id="telefone" size="15" maxlength="14"></td>

      <td class="style1">E-Mail</td>

      <td><input class="class02" name="email" type="text" id="email" size="50" maxlength="50"></td>
    </tr>

    <tr>

      <td class="style1">Obs</td>

      <td colspan="2"><textarea class="class02" name="obs" cols="50" rows="7" id="obs"></textarea></td>

      <td>&nbsp;</td>
    </tr>

    <tr> 

      <td colspan="2"><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input class="class01" type="submit" name="Submit" value="Salvar"></td>
      <td align="left">&nbsp;</td>

      <td>&nbsp;</td>
    </tr>

    <tr> 

      <td colspan="2">&nbsp;</td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>
    </tr>
  </table>

</form>
</body>

</html>

