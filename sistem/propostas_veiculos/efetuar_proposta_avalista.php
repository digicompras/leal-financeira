<?php

session_start(); //inicia sess�o...

if ($_SESSION["usuario"] == true) //verifica se a vari�vel "usuario" � verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["senha"] == true) //verifica se a vari�vel "senha" � verdadeira...

echo ""; //se for emite mensagem positiva.

else //se n�o for...

header("Location: alerta.php");


require '../../conect/conect.php';

?>



<html>

<head>

<title>FICHA PROPOSTA DE FINANCIAMENTO DE VEICULO </title>

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
.style1 {
	color: #0000FF;
	font-weight: bold;
}

-->
</style>


</head>

<?





$num_proposta_proponente = $_POST['num_proposta_proponente'];

$estabelecimento_proposta = $_POST['estabelecimento_proposta'];

$cpf = $_POST['cpf'];

$tipo_pessoa = $_POST['tipo_pessoa'];



$valor_venda = $_POST['valor_venda'];

$valor_entrada = $_POST['valor_entrada'];

$categoria_veiculo = $_POST['categoria_veiculo'];

$bem = $_POST['bem'];



$r_2 = $_POST['r'];

$r_calcula = $_POST['r']*1.2;



$r = $r_calcula/100;

$coeficiente = $_POST['coeficiente'];

$codigo_tabela = $_POST['codigo_tabela'];

$mista = $_POST['mista'];

$num_parcelas = $_POST['num_parcelas'];







$sql = "SELECT * FROM tac where categoria_veiculo = '$categoria_veiculo'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {



$tac = $linha[2];

}

$diferenca = bcsub($valor_venda,$valor_entrada,2);

?>




<?
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$background = $linha[1];

}
?>

<body background="../../background/<? echo "$background"; ?>">

<form name="form1" method="post" action="informacoes_antecedem_efetuar_proposta.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input class="class01" type="submit" name="Submit3" value="Voltar">

  <input name="cpf" type="hidden" id="cpf" value="<? echo $cpf; ?>">

  <strong><font color="#0000FF">

  <input name="estabelecimento_proposta" type="hidden" id="estabelecimento_proposta" value="<? echo $estabelecimento_proposta; ?>">

  <input name="valor_venda" type="hidden" id="valor_venda2" value="<? echo $valor_venda; ?>">

  <strong>

  <input name="valor_entrada" type="hidden" id="valor_entrada2" value="<? echo $valor_entrada; ?>">

  <input name="r" type="hidden" id="r" value="<? echo $r_2; ?>">

  <input name="categoria_veiculo" type="hidden" id="r3" value="<? echo $categoria_veiculo; ?>">

  <input name="coeficiente" type="hidden" id="coeficiente" value="<? echo $coeficiente; ?>">

  <input name="codigo_tabela" type="hidden" id="codigo_tabela4" value="<? echo $codigo_tabela; ?>">

  <input name="mista" type="hidden" id="mista" value="<? echo $mista; ?>">

  <input name="num_parcelas" type="hidden" id="num_parcelas3" value="<? echo $num_parcelas; ?>">

  <font color="#0000FF"><strong>

  <input name="tipo_pessoa" type="hidden" id="tipo_pessoa" value="<? echo $tipo_pessoa; ?>">

  <font color="#0000FF"><strong>

  <input name="bem" type="hidden" id="num_parcelas4" value="<? echo $bem; ?>">

  </strong></font> </strong></font> </strong></font></strong>

</form>



<?



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];





$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {





$nome_op = $linha[1];

$celular_op = $linha[19];

$email_op = $linha[20];

$estab_pertence = $linha[44];

$cidade_estab_pertence = $linha[45];

$tel_estab_pertence = $linha[46];

$email_estab_pertence = $linha[47];



}

?>



<?

$sql = "SELECT * FROM estabelecimentos where nfantasia = '$estabelecimento_proposta' and operador_atendente = '$nome_op'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

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

$proprietario = $linha[16];

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

$status = $linha[42];

$usuario_estab = $linha[43];

$senha_estab = $linha[44];

$num_banco = $linha[45];

$agencia = $linha[46];

$conta = $linha[47];



}



?>

<form name="form1" method="post" action="grava_proposta_avalista.php">
  <TABLE style="BORDER-COLLAPSE: collapse" border=1 cellSpacing=0 
borderColor=#000000 borderColorLight=#000000 borderColorDark=#000000 
cellPadding=3 width=80% align=center>
  <TBODY>
    <TR>
      <TD background="../../imagens/fundocelulas1.png">&nbsp;</TD>
    </TR>
    <TR>
      <TD background="../../imagens/fundocelulas2.png" bgcolor="#CCCCCC"><div align="center"><strong>Ficha proposta de financiamento de ve&iacute;culo</strong> - <strong>AVALISTA</strong></div></TD>
    </TR>
    <TR>
      <TD><TABLE class=corpo border=0 cellSpacing=0 cellPadding=2 width=100% x:str>
        <COLGROUP>
        <COL style="WIDTH: 53pt" class=xl42 width=71>
        <COL style="WIDTH: 48pt" class=xl42 span=2 width=64>
        <COL style="WIDTH: 64pt" class=xl42 width=85>
        <COL style="WIDTH: 80pt" class=xl42 width=106>
        <COL style="WIDTH: 53pt" class=xl42 width=71>
        <COL style="WIDTH: 48pt" class=xl42 span=3 width=64>
        <COL style="WIDTH: 52pt" class=xl42 width=69>
        <TBODY>
          
          <TR height=17>
            <TD width=177 height=19 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Operador:</FONT></B></TD>
            <TD width=178 height=19 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Estabelecimento:</FONT></B></TD>
            <TD width=136 height=19 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Data da proposta:</FONT></B></TD>
            <TD height=19 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Perfil do cliente:</FONT></B></TD>
            <TD height=19 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>N&ordm; proposta do proponente</FONT></B></TD>
            <TD width=198 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Tipo da  proposta:</FONT></B></TD>
          </TR>
          <TR height=17>
            <TD height=26 background="../../imagens/fundocelulas1.png" class=corpo><strong><font color="#0000FF" size="2"><? echo $nome_op; ?>
                  <input name="operador_atendente" type="hidden" id="operador_atendente" value="<? echo $nome_op; ?>">
            </font></strong></TD>
            <TD height=26 background="../../imagens/fundocelulas1.png" class=corpo><strong><font color="#0000FF" size="2"><? echo $estabelecimento_proposta; ?>
                  <input name="estabelecimento_proposta" type="hidden" id="estabelecimento_proposta" value="<? echo $estabelecimento_proposta; ?>">
            </font></strong></TD>
            <TD height=26 background="../../imagens/fundocelulas1.png" class=corpo><strong><font color="#0000FF" size="2"><? echo date('d-m-Y'); ?>
                  <input name="dataproposta" type="hidden" id="dataproposta" value="<? echo date('d/m/Y'); ?>">
                  <input name="horaproposta" type="hidden" id="horaproposta2" value="<? echo date('H:i:s'); ?>">
                  <input name="mes_ano" type="hidden" id="mes_ano" value="<? echo date('m-Y'); ?>">
                  <input name="status" type="hidden" id="status" value="<? echo "Em Andamento"; ?>">
            </font></strong></TD>
            <TD width="163" height=26 background="../../imagens/fundocelulas1.png"><strong><font color="#0000FF" size="2"><? echo "Avalista"; ?>
              <input name="tipo" type="hidden" id="tipo" value="<? echo "Avalista"; ?>">
            </font></strong></TD>
            <TD width="165" background="../../imagens/fundocelulas1.png"><strong><font color="#0000FF" size="2"><? echo $num_proposta_proponente; ?>
              <input name="num_proposta_proponente" type="hidden" id="num_proposta_proponente" value="<? echo $num_proposta_proponente; ?>">
            </font></strong></TD>
            <TD height=26 background="../../imagens/fundocelulas1.png"><strong><font color="#0000FF" size="2"><? echo $tipo_proposta; ?>
                  <select class="class02" name="tipo_proposta" id="tipo_proposta">
                    <option>CDC</option>
                    <option>Leasing</option>
                    <option>Cons&oacute;rcio</option>
                    <option>Seguro</option>
                  </select>
            </font></strong></TD>
          </TR>
        </TBODY>
      </TABLE></TD>
    </TR>
    <TR>
      <TD background="../../imagens/fundocelulas2.png" bgcolor="#CCCCCC"><div align="center"><strong>Dados do cliente</strong></div></TD>
    </TR>
    <TR>
      <TD><TABLE class=corpo border=0 cellSpacing=0 cellPadding=2 width=100% x:str>
        <COLGROUP>
          <COL style="WIDTH: 53pt" class=xl42 width=71>
          <COL style="WIDTH: 48pt" class=xl42 span=2 width=64>
          <COL style="WIDTH: 64pt" class=xl42 width=85>
          <COL style="WIDTH: 80pt" class=xl42 width=106>
          <COL style="WIDTH: 53pt" class=xl42 width=71>
          <COL style="WIDTH: 48pt" class=xl42 span=3 width=64>
          <COL style="WIDTH: 52pt" class=xl42 width=69>
          <TBODY>
            
            <TR height=17>
              <TD width=123 height=19 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Nome:</FONT></B></TD>
              <TD width=124 height=19 background="../../imagens/fundocelulas1.png">&nbsp;</TD>
              <TD width=190 height=19 background="../../imagens/fundocelulas1.png">&nbsp;</TD>
              <TD width=136 height=19 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Tipo de pessoa:</FONT></B></TD>
              <TD width=136 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Data nasc:</FONT></B></TD>
            </TR>
            <TR height=17>
              <TD height=26 colSpan=3 background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                <input class="class02" name="nome" type="text" id="nome" value="<? echo $nome_cli; ?>" size="50" maxlength="50">
              </font></TD>
              <TD height=26 background="../../imagens/fundocelulas1.png"><font size="2"><strong><font color="#0000FF"><? echo $tipo_pessoa; ?></font></strong>
                  <input name="tipo_pessoa" type="hidden" id="tipo_pessoa" value="<? echo $tipo_pessoa; ?>">
              </font></TD>
              <TD height=26 background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="data_nasc" type="text" id="data_nasc" value="<? echo $data_nasc_cli; ?>" size="15" maxlength="10">
              </font></TD>
            </TR>
          </TBODY>
      </TABLE>
          <TABLE class=corpo border=0 cellSpacing=0 cellPadding=2 width=100% x:str>
            <COLGROUP>
            <COL style="WIDTH: 53pt" class=xl42 width=71>
            <COL style="WIDTH: 48pt" class=xl42 span=2 width=64>
            <COL style="WIDTH: 64pt" class=xl42 width=85>
            <COL style="WIDTH: 80pt" class=xl42 width=106>
            <COL style="WIDTH: 53pt" class=xl42 width=71>
            <COL style="WIDTH: 48pt" class=xl42 span=3 width=64>
            <COL style="WIDTH: 52pt" class=xl42 width=69>
            <TBODY>
              <TR height=17>
                <TD width=172 height=19 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>CPF:</FONT></B></TD>
                <TD width=164 height=19 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>RG:</FONT></B></TD>
                <TD width=344 height=19 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Org&atilde;o emissor :</FONT></B></TD>
                <TD height=19 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Data de emiss&atilde;o:</FONT></B></TD>
                <TD height=19 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Nacionalidade:</FONT></B></TD>
              </TR>
              <TR height=17>
                <TD height=26 background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                  <input class="class02" name="cpf2" type="text" id="cpf2" value="<? echo $cpf; ?>" size="11" maxlength="11">
                </font></TD>
                <TD height=26 background="../../imagens/fundocelulas1.png"><font size="2">
                  <input class="class02" name="rg" type="text" id="rg" value="<? echo $rg_cli; ?>" size="15" maxlength="15">
                </font></TD>
                <TD height=26 background="../../imagens/fundocelulas1.png"><font size="2">
                  <input class="class02" name="orgao" type="text" id="orgao" value="<? echo $orgao_cli; ?>" size="15" maxlength="14">
-
<select class="class02" name="estado_emissao" id="estado_emissao">
  <option>AC</option>
  <option>AL</option>
  <option>AP</option>
  <option>AM</option>
  <option>BA</option>
  <option>CE</option>
  <option>DF</option>
  <option>GO</option>
  <option>ES</option>
  <option>MA</option>
  <option>MT</option>
  <option>MS</option>
  <option>MG</option>
  <option>PA</option>
  <option>PB</option>
  <option>PR</option>
  <option>PE</option>
  <option>PI</option>
  <option>RJ</option>
  <option>RN</option>
  <option>RS</option>
  <option>RO</option>
  <option>RR</option>
  <option>SP</option>
  <option>SC</option>
  <option>SE</option>
  <option>TO</option>
</select>
                </font></TD>
                <TD width="148" height=26 background="../../imagens/fundocelulas1.png"><font size="2">
                  <input class="class02" name="emissao" type="text" id="emissao" value="<? echo $emissao_cli; ?>" size="15" maxlength="10">
                </font></TD>
                <TD width="198" background="../../imagens/fundocelulas1.png"><font size="2">
                  <select class="class02" name="nacionalidade" id="nacionalidade">
                    <option><? echo $nacionalidade_cli; ?></option>
                    <option>Brasileira</option>
                    <option>Estrangeira</option>
                  </select>
                </font></TD>
              </TR>
            </TBODY>
        </TABLE></TD>
    </TR>
    <TR>
      <TD><TABLE style="BORDER-COLLAPSE: collapse" cellSpacing=0 borderColor=#ffffff 
      borderColorLight=#ffffff borderColorDark=#ffffff cellPadding=3 
      width="100%" align=left height=32>
        <TBODY>
          <TR>
            <TD width=74 height=30 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Sexo:</FONT></B></TD>
            <TD width=206 background="../../imagens/fundocelulas1.png"><font size="2">
              <select class="class02" name="sexo" id="sexo">
                <option selected><? echo $sexo_cli; ?></option>
                <option>Masculino</option>
                <option>Feminino</option>
              </select>
            </font></TD>
            <TD width=100 background="../../imagens/fundocelulas1.png"><div align="left"><B><FONT color=#008000 size=1 face=Verdana>Estado 
              Civil</FONT><FONT color=#008000 size=1 face=Verdana>: </FONT></B></div></TD>
            <TD width=126 background="../../imagens/fundocelulas1.png"><font size="2">
              <select class="class02" name="estadocivil" id="estadocivil">
                <option selected><? echo $estadocivil_cli; ?></option>
                <?





    $sql = "select * from estado_civil order by estadocivil asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option value=" .$x['estadocivil']. ">".$x['estadocivil']."</option>";

    }

?>
              </select>
            </font></TD>
            <TD width=103 background="../../imagens/fundocelulas1.png"><DIV align=right><B><FONT color=#008000 size=1 face=Verdana>N.&ordm; 
              Dependentes: </FONT></B></DIV></TD>
            <TD width=120 height=30 colSpan=2 background="../../imagens/fundocelulas1.png"><font size="2">
              <input class="class02" name="quant_dependente" type="text" id="quant_dependente" value="0" size="4" maxlength="2">
            </font></TD>
          </TR>
        </TBODY>
      </TABLE></TD>
    </TR>
    <TR>
      <TD><TABLE style="BORDER-COLLAPSE: collapse" cellSpacing=0 borderColor=#ffffff 
      borderColorLight=#ffffff borderColorDark=#ffffff cellPadding=3 
      width="100%" align=left>
        <TBODY>
          <TR>
            <TD width=43 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Pai:</FONT></B></TD>
            <TD width=252 background="../../imagens/fundocelulas1.png"><font size="2">
              <input class="class02" name="pai" type="text" id="pai" value="<? echo $pai_cli; ?>" size="40" maxlength="40">
            </font></TD>
            <TD width=85 background="../../imagens/fundocelulas1.png"><DIV align=right><B><FONT color=#008000 size=1 face=Verdana>M&atilde;e</FONT></B></DIV></TD>
            <TD width=320 background="../../imagens/fundocelulas1.png"><font size="2">
              <input class="class02" name="mae" type="text" id="mae" value="<? echo $mae_cli; ?>" size="40" maxlength="40">
            </font></TD>
          </TR>
        </TBODY>
      </TABLE></TD>
    </TR>
    <TR>
      <TD><TABLE class=corpo border=0 cellSpacing=0 cellPadding=2 width=100% x:str>
        <COLGROUP>
          <COL style="WIDTH: 53pt" class=xl42 width=71>
          <COL style="WIDTH: 48pt" class=xl42 span=2 width=64>
          <COL style="WIDTH: 64pt" class=xl42 width=85>
          <COL style="WIDTH: 80pt" class=xl42 width=106>
          <COL style="WIDTH: 53pt" class=xl42 width=71>
          <COL style="WIDTH: 48pt" class=xl42 span=3 width=64>
          <COL style="WIDTH: 52pt" class=xl42 width=69>
          <TBODY>
            <TR height=17>
              <TD width=46 height=28 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Conjuge: </FONT></B></TD>
              <TD width=138 background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                <input class="class02" name="conjuge" type="text" id="conjuge" size="50" maxlength="50">
              </font></TD>
              <TD width=37 height=28 background="../../imagens/fundocelulas1.png"><div align="left"><B><FONT color=#008000 size=1 face=Verdana>Nasc: </FONT></B></div></TD>
              <TD width=88 background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="data_nasc_conjuge" type="text" id="data_nasc_conjuge" value="<? echo $data_nasc_cli; ?>" size="15" maxlength="10">
              </font></TD>
              <TD width=50 height=28 background="../../imagens/fundocelulas1.png"><DIV align=right></DIV></TD>
              <TD width=180 background="../../imagens/fundocelulas1.png">&nbsp;</TD>
              </TR>
            <TR height=17>
              <TD height=28 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Endere&ccedil;o: </FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                <input class="class02" name="endereco" type="text" id="endereco" value="<? echo $endereco_cli; ?>" size="50" maxlength="50">
              </font></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png"><div align="left"><B><FONT color=#008000 size=1 face=Verdana>N&ordm;: </FONT></B></div></TD>
              <TD background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="numero" type="text" id="numero" value="<? echo $numero_cli; ?>" size="10" maxlength="10">
              </font></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 face=Verdana>Bairro: </FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="bairro" type="text" id="bairro" value="<? echo $bairro_cli; ?>">
              </font></TD>
              </TR>
            <TR height=17>
              <TD height=28 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Complemento: </FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                <input class="class02" name="complemento" type="text" id="complemento" value="<? echo $complemento_cli; ?>" size="50" maxlength="50">
              </font></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 face=Verdana>CEP: </FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="cep" type="text" id="cep" value="<? echo $cep_cli; ?>" size="9" maxlength="9">
              </font></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png">&nbsp;</TD>
              <TD background="../../imagens/fundocelulas1.png">&nbsp;</TD>
              </TR>
            <TR height=17>
              <TD height=28 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Cidade: </FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                <input class="class02" name="cidade" type="text" id="cidade" value="<? echo $cidade_cli; ?>" size="50" maxlength="50">
              </font></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png"><div align="left"><B><FONT color=#008000 size=1 face=Verdana>UF: </FONT></B></div></TD>
              <TD background="../../imagens/fundocelulas1.png"><font size="2">
                <select class="class02" name="estado" id="estado">
                  <option selected><? echo $estado_cli; ?></option>
                  <?





    $sql = "select * from estados_do_brasil order by estado asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option value=" .$x['estado']. ">".$x['estado']."</option>";

    }

?>
                </select>
              </font></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 face=Verdana>End Corresp: </FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png"><font size="2">
                <select class="class02" name="correspondencia" id="correspondencia">
                  <option>Residencial</option>
                  <option>Comercial</option>
                </select>
              </font></TD>
            </TR>
            <TR height=17>
              <TD height=28 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Tipo residencia: </FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                <select class="class02" name="tipo_residencia" id="tipo_residencia">
                  <option selected><? echo $tipo_residencia; ?></option>
                  <?





    $sql = "select * from tipos_residencias order by tipo_residencia asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option value=" .$x['tipo_residencia']. ">".$x['tipo_residencia']."</option>";

    }

?>
                </select>
              </font></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 face=Verdana>R$ Aluguel: </FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="valor_aluguel" type="text" id="valor_aluguel" size="10" maxlength="15">
              </font></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png">&nbsp;</TD>
              <TD background="../../imagens/fundocelulas1.png">&nbsp;</TD>
            </TR>
            <TR height=17>
              <TD height=28 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Tempo de residencia: </FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                <B><FONT color=#008000 size=1 face=Verdana>anos</FONT></B>
                <input class="class02" name="tempo_residencia" type="text" id="tempo_residencia" size="10" maxlength="10">
                <B><FONT color=#008000 size=1 face=Verdana>meses </FONT></B> 
                <input class="class02" name="meses_residencia" type="text" id="meses_residencia" size="10" maxlength="10">
              </font></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 face=Verdana>Telefone: </FONT></B></TD>
              <TD height="28" colspan="2" background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="ddd_tel" type="text" id="ddd_tel" size="4" maxlength="2">
-
<input class="class02" name="telefone" type="text" id="telefone" value="<? echo $telefone_cli; ?>" size="10" maxlength="9">
              </font></TD>
              <TD background="../../imagens/fundocelulas1.png">&nbsp;</TD>
            </TR>
            <TR height=17>
              <TD height=28 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana> Celular: </FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                <input class="class02" name="ddd_cel" type="text" id="ddd_cel" size="4" maxlength="2">
-
<input class="class02" name="celular" type="text" id="celular" value="<? echo $celular_cli; ?>" size="10" maxlength="9">
              </font></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png"><p><B><FONT color=#008000 size=1 face=Verdana>Tipo</FONT></B><B><FONT color=#008000 size=1 face=Verdana>Telefone: </FONT></B></p>                </TD>
              <TD background="../../imagens/fundocelulas1.png"><font size="2">
                <select class="class02" name="tipo_telefone" id="tipo_telefone">
                  <option selected><? echo $tipo_telefone; ?></option>
                  <?





    $sql = "select * from tipo_telefones order by tipo_telefone asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option value=" .$x['tipo_telefone']. ">".$x['tipo_telefone']."</option>";

    }

?>
                </select>
              </font></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png">&nbsp;</TD>
              <TD background="../../imagens/fundocelulas1.png">&nbsp;</TD>
            </TR>
            <TR height=17>
              <TD height=28 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana> Residencia anterior: </FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                <input class="class02" name="residencia_anterior" type="text" id="residencia_anterior" size="50" maxlength="50">
              </font></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png"><B><font color="#008000" size="1" face="Verdana">Bairro: </font></B></TD>
              <TD background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="bairro_anterior" type="text" id="bairro_anterior">
              </font></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png">&nbsp;</TD>
              <TD background="../../imagens/fundocelulas1.png">&nbsp;</TD>
            </TR>
            <TR height=17>
              <TD height=28 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Cidade: </FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                <input class="class02" name="cidade_anterior" type="text" id="cidade_anterior" size="50" maxlength="50">
              </font></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 face=Verdana>UF: </FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png"><font size="2">
                <select class="class02" name="estado_anterior" id="estado_anterior">
                  <option selected><? echo $estado_cli; ?></option>
                  <?





    $sql = "select * from estados_do_brasil order by estado asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option value=" .$x['estado']. ">".$x['estado']."</option>";

    }

?>
                </select>
              </font></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 face=Verdana>Tempo: </FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="tempo_residencia_anterior" type="text" id="tempo_residencia_anterior">
              </font></TD>
            </TR>
            <TR height=17>
              <TD height=28 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>E-Mail: </FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                <input class="class02" name="email" type="text" id="email" value="<? echo $email_cli; ?>" size="50" maxlength="50">
              </font></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png">&nbsp;</TD>
              <TD background="../../imagens/fundocelulas1.png">&nbsp;</TD>
              <TD height=28 background="../../imagens/fundocelulas1.png">&nbsp;</TD>
              <TD background="../../imagens/fundocelulas1.png">&nbsp;</TD>
            </TR>
          </TBODY>
      </TABLE></TD>
    </TR>
    <TR>
      <TD background="../../imagens/fundocelulas2.png" bgcolor="#CCCCCC"><div align="center"><strong>Dados profissionais</strong></div></TD>
    </TR>
    <TR>
      <TD><TABLE class=corpo border=0 cellSpacing=0 cellPadding=2 width="100%" 
x:str>
        <COLGROUP>
          <COL style="WIDTH: 53pt" class=xl42 width=71>
          <COL style="WIDTH: 48pt" class=xl42 span=2 width=64>
          <COL style="WIDTH: 64pt" class=xl42 width=85>
          <COL style="WIDTH: 80pt" class=xl42 width=106>
          <COL style="WIDTH: 53pt" class=xl42 width=71>
          <COL style="WIDTH: 48pt" class=xl42 span=3 width=64>
          <COL style="WIDTH: 52pt" class=xl42 width=69>
          <TBODY>
            
            <TR height=17>
              <TD width=82 height=28 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Empresa:</FONT></B></TD>
              <TD width=154 background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                <input class="class02" name="empresa" type="text" id="empresa">
              </font></TD>
              <TD width=157 height=28 background="../../imagens/fundocelulas1.png"><div align="left"><B><FONT color=#008000 size=1 
            face=Verdana>Porte:</FONT></B></div></TD>
              <TD width=148 background="../../imagens/fundocelulas1.png"><font size="2">
                <select class="class02" name="porte_empresa" id="porte_empresa">
                  <option selected><? echo $porte_empresa; ?></option>
                  <?





    $sql = "select * from porte_empresas order by porte_empresa asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option value=" .$x['porte_empresa']. ">".$x['porte_empresa']."</option>";

    }

?>
                </select>
              </font></TD>
              <TD width=131 background="../../imagens/fundocelulas1.png" class=pocospazio><div align="left"><B><FONT color=#008000 size=1 
            face=Verdana>Tempo de servi&ccedil;o:</FONT></B></div></TD>
              <TD width="350" height=28 background="../../imagens/fundocelulas1.png"><DIV align=left><font size="2"><b><font color="#008000" size="1" face="Verdana">anos</font></b>
                    <input class="class02" name="data_admissao" type="text" id="data_admissao" size="10" maxlength="10">
                <b><font color="#008000" size="1" face="Verdana">meses</font></b>
                <input class="class02" name="meses" type="text" id="meses" size="10" maxlength="10">
              </font></DIV></TD>
              </TR>
            <TR height=17>
              <TD height=28 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>In&iacute;cio atividade:</FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                <input class="class02" name="inicio_atividade" type="text" id="inicio_atividade">
              </font></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png"><div align="left"><B><FONT color=#008000 size=1 
            face=Verdana>Endere&ccedil;o:</FONT></B></div></TD>
              <TD height="28" colspan="3" background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="end_empresa" type="text" id="end_empresa" size="50" maxlength="50">
                <B><FONT color=#008000 size=1 
            face=Verdana>N &ordm;:</FONT></B>
                <input class="class02" name="numero_empresa" type="text" id="numero_empresa" size="10" maxlength="10">
              </font></TD>
              </TR>
            <TR height=17>
              <TD height=28 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Complemento:</FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                <input class="class02" name="complemento_empresa" type="text" id="complemento_empresa">
              </font></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Bairro:</FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="bairro_empresa" type="text" id="bairro_empresa">
              </font></TD>
              <TD background="../../imagens/fundocelulas1.png" class=pocospazio><B><FONT color=#008000 size=1 face=Verdana>CEP: </FONT></B></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="cep_empresa" type="text" id="cep_empresa">
              </font></TD>
            </TR>
            <TR height=17>
              <TD height=28 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Cidade:</FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                <input class="class02" name="cidade_empresa" type="text" id="cidade_empresa">
              </font></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 face=Verdana>UF: </FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png"><font size="2">
                <select class="class02" name="estado_empresa" id="estado_empresa">
                  <option selected><? echo $estado_cli; ?></option>
                  <?





    $sql = "select * from estados_do_brasil order by estado asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option value=" .$x['estado']. ">".$x['estado']."</option>";

    }

?>
                </select>
              </font></TD>
              <TD background="../../imagens/fundocelulas1.png" class=pocospazio><B><FONT color=#008000 size=1 face=Verdana>Telefone: </FONT></B></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="ddd_tel_empresa" type="text" id="ddd_tel_empresa" size="4" maxlength="2">
-
<input class="class02" name="telefone_empresa" type="text" id="telefone_empresa" size="10" maxlength="9">
              </font></TD>
            </TR>
            <TR height=17>
              <TD height=28 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Cargo:</FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                <input class="class02" name="cargo" type="text" id="cargo">
              </font></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 face=Verdana>Natureza opera&ccedil;&atilde;o: </FONT></B></TD>
              <TD colspan="2" background="../../imagens/fundocelulas1.png"><font size="2">
                <select class="class02" name="natureza_operacao" id="natureza_operacao">
                  <option>Funcion&aacute;rio P&uacute;blico</option>
                  <option>Aut&ocirc;nomo</option>
                  <option>Profissional Liberal</option>
                  <option selected>Empresa Privada - CLT</option>
                  <option>Empresa P&uacute;blica</option>
                  <option>Propriet&aacute;rio-S&oacute;cio-Rendas</option>
                  <option>Aposentado-Pensionista</option>
                  <option>Do lar-Estudante</option>
                </select>
              </font></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png">&nbsp;</TD>
            </TR>
            <TR height=17>
              <TD height=28 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Sal&aacute;rio:</FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                <input class="class02" name="salario" type="text" id="salario">
              </font></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 face=Verdana>Atividade principal: </FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="atividade_principal" type="text" id="atividade_principal">
              </font></TD>
              <TD background="../../imagens/fundocelulas1.png" class=pocospazio>&nbsp;</TD>
              <TD height=28 background="../../imagens/fundocelulas1.png">&nbsp;</TD>
            </TR>
            <TR height=17>
              <TD height=28 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>CNPJ:</FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                <input class="class02" name="cnpj" type="text" id="cnpj">
              </font></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 face=Verdana>Telefone contador: </FONT></B></TD>
              <TD colspan="2" background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="ddd_tel_contador" type="text" id="ddd_tel_contador" size="4" maxlength="2">
-
<input class="class02" name="tel_contador" type="text" id="tel_contador" size="10" maxlength="9">
              </font></TD>
              <TD height=28 background="../../imagens/fundocelulas1.png">&nbsp;</TD>
            </TR>
          </TBODY>
      </TABLE></TD>
    </TR>
    
    <TR bgColor=#cccccc>
      <TD background="../../imagens/fundocelulas2.png" bgcolor="#cccccc"><div align="center"><STRONG><FONT size=2 
      face="Verdana, Arial, Helvetica, sans-serif">Atividade/Emprego anterior</FONT></STRONG></div></TD>
    </TR>
    <TR>
      <TD><TABLE class=corpo border=0 cellSpacing=0 cellPadding=2 width=100% x:str>
        <COLGROUP>
          <COL style="WIDTH: 53pt" class=xl42 width=71>
          <COL style="WIDTH: 48pt" class=xl42 span=2 width=64>
          <COL style="WIDTH: 64pt" class=xl42 width=85>
          <COL style="WIDTH: 80pt" class=xl42 width=106>
          <COL style="WIDTH: 53pt" class=xl42 width=71>
          <COL style="WIDTH: 48pt" class=xl42 span=3 width=64>
          <COL style="WIDTH: 52pt" class=xl42 width=69>
          <TBODY>
            <TR height=17>
              <TD width=180 height=19 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Atividade/Emprego anterior:</FONT></B></TD>
              <TD width=180 height=19 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Data admiss&atilde;o:</FONT></B></TD>
              <TD width=180 height=19 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Sa&iacute;da:</FONT></B></TD>
              <TD width=180 height=19 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Cargo:</FONT></B></TD>
            </TR>
            <TR height=17>
              <TD width=180 height=26 background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                <input class="class02" name="atividade_anterior" type="text" id="atividade_anterior">
              </font></TD>
              <TD width=180 height=26 background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="data_admissao_anterior" type="text" id="data_admissao_anterior">
              </font></TD>
              <TD width=180 height=26 background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="data_saida" type="text" id="data_saida">
              </font></TD>
              <TD width=180 height=26 background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="cargo_anterior" type="text" id="cargo_anterior">
              </font></TD>
            </TR>
            <TR height=17>
              <TD height=26 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Telefone:</FONT></B></TD>
              <TD height=26 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Outras rendas:</FONT></B></TD>
              <TD height=26 background="../../imagens/fundocelulas1.png">&nbsp;</TD>
              <TD height=26 background="../../imagens/fundocelulas1.png">&nbsp;</TD>
            </TR>
            <TR height=17>
              <TD height=26 background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                <input class="class02" name="ddd_tel_empresa_anterior" type="text" id="ddd_tel_empresa_anterior" size="4" maxlength="2">
-
<input class="class02" name="telefone_empresa_anterior" type="text" id="telefone_empresa_anterior" size="10" maxlength="9">
              </font></TD>
              <TD height=26 background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="outras_rendas" type="text" id="outras_rendas">
              </font></TD>
              <TD height=26 background="../../imagens/fundocelulas1.png">&nbsp;</TD>
              <TD height=26 background="../../imagens/fundocelulas1.png">&nbsp;</TD>
            </TR>
          </TBODY>
      </TABLE></TD>
    </TR>
    
    
    <TR bgColor=#cccccc>
      <TD background="../../imagens/fundocelulas2.png" bgcolor="#cccccc"><div align="center"><STRONG><FONT size=2 
      face="Verdana, Arial, Helvetica, sans-serif">Fontes de refer&ecirc;ncia</FONT></STRONG></div></TD>
    </TR>
    <TR>
      <TD><TABLE class=corpo border=0 cellSpacing=0 cellPadding=2 width=100% x:str>
        <COLGROUP>
          <COL style="WIDTH: 53pt" class=xl42 width=71>
          <COL style="WIDTH: 48pt" class=xl42 span=2 width=64>
          <COL style="WIDTH: 64pt" class=xl42 width=85>
          <COL style="WIDTH: 80pt" class=xl42 width=106>
          <COL style="WIDTH: 53pt" class=xl42 width=71>
          <COL style="WIDTH: 48pt" class=xl42 span=3 width=64>
          <COL style="WIDTH: 52pt" class=xl42 width=69>
          <TBODY>
            <TR height=17>
              <TD width=341 height=19 colSpan=6 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 
            size=1 face=Verdana>Pessoal - Nome:</FONT></B></TD>
              <TD width=373 height=19 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Telefone com DDD:</FONT></B></TD>
            </TR>
            <TR height=17>
              <TD width=341 height=26 colSpan=6 background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                <input class="class02" name="ref_pessoal" type="text" id="ref_pessoal" size="50">
              </font></TD>
              <TD height=26 background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="ddd_ref_pessoal" type="text" id="ddd_ref_pessoal" size="4" maxlength="2">
-
<input class="class02" name="tel_ref_pessoal" type="text" id="tel_ref_pessoal" size="10" maxlength="9">
              </font></TD>
            </TR>
            <TR height=17>
              <TD height=26 colSpan=6 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 
            size=1 face=Verdana>Pessoal - Nome:</FONT></B></TD>
              <TD height=26 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Telefone com DDD:</FONT></B></TD>
            </TR>
            <TR height=17>
              <TD height=26 colSpan=6 background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                <input class="class02" name="ref_pessoal2" type="text" id="ref_pessoal2" size="50">
              </font></TD>
              <TD height=26 background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="ddd_ref_pessoal2" type="text" id="ddd_ref_pessoal2" size="4" maxlength="2">
-
<input class="class02" name="tel_ref_pessoal2" type="text" id="tel_ref_pessoal2" size="10" maxlength="9">
              </font></TD>
            </TR>
            <TR height=17>
              <TD height=26 colSpan=6 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 
            size=1 face=Verdana>Comercial - Nome:</FONT></B></TD>
              <TD height=26 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Telefone com DDD:</FONT></B></TD>
            </TR>
            <TR height=17>
              <TD height=26 colSpan=6 background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                <input class="class02" name="ref_comercial" type="text" id="ref_comercial" size="50">
              </font></TD>
              <TD height=26 background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="ddd_ref_comercial" type="text" id="ddd_ref_comercial" size="4" maxlength="2">
-
<input class="class02" name="tel_ref_comercial" type="text" id="tel_ref_comercial" size="10" maxlength="9">
              </font></TD>
            </TR>
          </TBODY>
      </TABLE></TD>
    </TR>
    
    <TR bgColor=#cccccc>
      <TD background="../../imagens/fundocelulas2.png" bgcolor="#cccccc"><div align="center"><STRONG><FONT size=2 
      face="Verdana, Arial, Helvetica, sans-serif">Refer&ecirc;ncias financeiras</FONT></STRONG></div></TD>
    </TR>
    <TR>
      <TD><TABLE class=corpo border=0 cellSpacing=0 cellPadding=2 width=100% x:str>
        <COLGROUP>
          <COL style="WIDTH: 53pt" class=xl42 width=71>
          <COL style="WIDTH: 48pt" class=xl42 span=2 width=64>
          <COL style="WIDTH: 64pt" class=xl42 width=85>
          <COL style="WIDTH: 80pt" class=xl42 width=106>
          <COL style="WIDTH: 53pt" class=xl42 width=71>
          <COL style="WIDTH: 48pt" class=xl42 span=3 width=64>
          <COL style="WIDTH: 52pt" class=xl42 width=69>
          <TBODY>
            <TR height=17>
              <TD width=39 height=16 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Banco:</FONT></B></TD>
              <TD width=663 height=16 background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="ref_banco" type="text" id="ref_banco" size="50">
              </font></TD>
            </TR>
          </TBODY>
      </TABLE>
          <TABLE class=corpo border=0 cellSpacing=0 cellPadding=2 width=100% x:str>
            <COLGROUP>
            <COL style="WIDTH: 53pt" class=xl42 width=71>
            <COL style="WIDTH: 48pt" class=xl42 span=2 width=64>
            <COL style="WIDTH: 64pt" class=xl42 width=85>
            <COL style="WIDTH: 80pt" class=xl42 width=106>
            <COL style="WIDTH: 53pt" class=xl42 width=71>
            <COL style="WIDTH: 48pt" class=xl42 span=3 width=64>
            <COL style="WIDTH: 52pt" class=xl42 width=69>
            <TBODY>
              <TR height=17>
                <TD width=122 height=16 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Ag&ecirc;ncia:</FONT></B></TD>
                <TD width=122 height=16 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Conta:</FONT></B></TD>
                <TD width=160 height=16 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Tipo:</FONT></B></TD>
                <TD width=61 height=16 background="../../imagens/fundocelulas1.png">&nbsp;</TD>
              </TR>
              <TR height=17>
                <TD height=26 background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                  <input class="class02" name="ref_agencia" type="text" id="ref_agencia">
-
<input class="class02" name="digito_agencia" type="text" id="digito_agencia" size="4" maxlength="2">
                </font></TD>
                <TD height=26 background="../../imagens/fundocelulas1.png"><font size="2">
                  <input class="class02" name="ref_conta" type="text" id="ref_conta">
-
<input class="class02" name="digito_conta" type="text" id="digito_conta" size="4" maxlength="2">
                </font></TD>
                <TD height=26 background="../../imagens/fundocelulas1.png"><font size="2">
                  <select class="class02" name="ref_tipo_conta" id="ref_tipo_conta">
                    <option>Especial</option>
                    <option>Sal&aacute;rio</option>
                    <option>Comum</option>
                    <option>Poupan&ccedil;a</option>
                    <option selected>N&atilde;o Tem</option>
                  </select>
                </font></TD>
                <TD height=26 background="../../imagens/fundocelulas1.png">&nbsp;</TD>
              </TR>
              <TR height=17>
                <TD height=26 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Conta desde:</FONT></B></TD>
                <TD height=26 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Cart&atilde;o de cr&eacute;dito:</FONT></B></TD>
                <TD height=26 background="../../imagens/fundocelulas1.png">&nbsp;</TD>
                <TD height=26 background="../../imagens/fundocelulas1.png">&nbsp;</TD>
              </TR>
              <TR height=17>
                <TD height=26 background="../../imagens/fundocelulas1.png" class=corpo><font size="2"><B><FONT color=#008000 size=1 
            face=Verdana>M&ecirc;s</FONT></B>
                <input class="class02" name="ref_conta_desde" type="text" id="ref_conta_desde" size="4" maxlength="2">
                    <B><FONT color=#008000 size=1 
            face=Verdana>ano</FONT></B>
                    <input class="class02" name="ano_ref_conta" type="text" id="ano_ref_conta" size="6" maxlength="4">
                </font></TD>
                <TD height=26 background="../../imagens/fundocelulas1.png"><font size="2">
                  <select class="class02" name="cartao_credito" id="cartao_credito">
                    <option>N&atilde;o tem</option>
                    <option>Amex</option>
                    <option>Diners</option>
                    <option>Visa</option>
                    <option>Credicard</option>
                    <option>Outros</option>
                  </select>
                </font></TD>
                <TD height=26 background="../../imagens/fundocelulas1.png">&nbsp;</TD>
                <TD height=26 background="../../imagens/fundocelulas1.png">&nbsp;</TD>
              </TR>
            </TBODY>
          </TABLE></TD>
    </TR>
    
    <TR>
      <TD background="../../imagens/fundocelulas2.png" bgColor=#cccccc><div align="center"><STRONG><FONT size=2 
      face="Verdana, Arial, Helvetica, sans-serif">Refer&ecirc;ncias de bens</FONT></STRONG></div></TD>
    </TR>
    <TR>
      <TD><TABLE style="BORDER-COLLAPSE: collapse" cellSpacing=0 borderColor=#ffffff 
      borderColorLight=#ffffff borderColorDark=#ffffff cellPadding=3 
      width="100%" align=left>
        <TBODY>
          <TR>
            <TD width=119 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Autom&oacute;vel:</FONT></B></TD>
            <TD width=230 background="../../imagens/fundocelulas1.png"><font size="2">
              <select class="class02" name="automovel" id="automovel">
                <option>N&atilde;o tem</option>
                <option>Tem um</option>
                <option>Tem mais de um</option>
              </select>
            </font></TD>
            <TD width=83 background="../../imagens/fundocelulas1.png"><div align="left"><B><FONT color=#008000 size=1 face=Verdana>Valor 
              total:</FONT></B></div></TD>
            <TD width=178 background="../../imagens/fundocelulas1.png"><font size="2">
              <input class="class02" name="valor_automoveis" type="text" id="valor_automoveis">
            </font></TD>
            <TD width=140 background="../../imagens/fundocelulas1.png"><P>&nbsp;</P></TD>
          </TR>
          <TR>
            <TD background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Resid&ecirc;ncia:</FONT></B></TD>
            <TD background="../../imagens/fundocelulas1.png"><font size="2">
              <select class="class02" name="residencia" id="residencia">
                <option>N&atilde;o tem</option>
                <option>Resid&ecirc;ncia Pr&oacute;pria</option>
                <option>Resid&ecirc;ncia Financiada</option>
              </select>
            </font></TD>
            <TD background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 face=Verdana>Valor 
              total:</FONT></B></TD>
            <TD background="../../imagens/fundocelulas1.png"><font size="2">
              <input class="class02" name="valor_residencia" type="text" id="valor_residencia">
            </font></TD>
            <TD background="../../imagens/fundocelulas1.png">&nbsp;</TD>
          </TR>
          <TR>
            <TD background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Outras propriedades:</FONT></B></TD>
            <TD background="../../imagens/fundocelulas1.png"><font size="2">
              <select class="class02" name="outras_propriedades" id="outras_propriedades">
                <option>N&atilde;o tem</option>
                <option>Terreno(s)</option>
                <option>Fazenda(s)</option>
                <option>Ch&aacute;cara(s)</option>
                <option>Outras Urbanas</option>
              </select>
            </font></TD>
            <TD background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 face=Verdana>Valor 
              total:</FONT></B></TD>
            <TD background="../../imagens/fundocelulas1.png"><font size="2">
              <input class="class02" name="valor_outras_propriedades" type="text" id="valor_outras_propriedades">
            </font></TD>
            <TD background="../../imagens/fundocelulas1.png">&nbsp;</TD>
          </TR>
        </TBODY>
      </TABLE></TD>
    </TR>
    <TR bgColor=#cccccc>
      <TD background="../../imagens/fundocelulas2.png" bgcolor="#cccccc"><div align="center"><STRONG><FONT size=2 
      face="Verdana, Arial, Helvetica, sans-serif">Dados da opera&ccedil;&atilde;o</FONT></STRONG></div></TD>
    </TR>
    <TR>
      <TD><TABLE class=corpo border=0 cellSpacing=0 cellPadding=2 width=100% x:str>
        <COLGROUP>
          <COL style="WIDTH: 53pt" class=xl42 width=71>
          <COL style="WIDTH: 48pt" class=xl42 span=2 width=64>
          <COL style="WIDTH: 64pt" class=xl42 width=85>
          <COL style="WIDTH: 80pt" class=xl42 width=106>
          <COL style="WIDTH: 53pt" class=xl42 width=71>
          <COL style="WIDTH: 48pt" class=xl42 span=3 width=64>
          <COL style="WIDTH: 52pt" class=xl42 width=69>
          <TBODY>
            <TR height=17>
              <TD width=132 height=19 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Tipo de </FONT><FONT color=#008000 size=1 
            face=Verdana> Ve&iacute;culo:</FONT></B></TD>
              <TD width=132 height=19 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Chassi:</FONT></B></TD>
              <TD width=145 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Marca e ve&iacute;culo:</FONT></B></TD>
              <TD width=145 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Ano/modelo:</FONT></B></TD>
            </TR>
            <TR height=17>
              <TD width=132 height=26 background="../../imagens/fundocelulas1.png" class=corpo><font size="2"><strong><font color="#0000FF"><? echo $bem; ?></font><font size="2"><strong><font color="#0000FF">
              <input name="bem" type="hidden" id="bem" value="<? echo $bem; ?>">
              </font></strong></font></strong></font></TD>
              <TD width=132 height=26 background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="chassi" type="text" id="chassi">
              </font></TD>
              <TD width=145 background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="veiculo" type="text" id="veiculo" value="Digitar igual no CRV">
              </font></TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff background="../../imagens/fundocelulas1.png"><P><font size="2">
                <input class="class02" name="ano_modelo" type="text" id="ano_modelo" size="6" maxlength="4">
-
<input class="class02" name="modelo" type="text" id="modelo" size="6" maxlength="4">
              </font></P></TD>
            </TR>
            <TR height=17>
              <TD height=26 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Renavam:</FONT></B></TD>
              <TD height=26 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>N&ordm; de portas:</FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Combust&iacute;vel:</FONT></B></TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Placas:</FONT></B></TD>
            </TR>
            <TR height=17>
              <TD height=26 background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                <input class="class02" name="renavam" type="text" id="renavam">
              </font></TD>
              <TD height=26 background="../../imagens/fundocelulas1.png"><font size="2">
                <select class="class02" name="num_portas" id="num_portas">
                  <option>2</option>
                  <option>4</option>
                </select>
              </font></TD>
              <TD background="../../imagens/fundocelulas1.png"><font size="2">
                <select class="class02" name="combustivel" id="combustivel">
                  <option>Gasolina</option>
                  <option>Alcool</option>
                  <option>Diesel</option>
                  <option>G&aacute;s Natural</option>
                  <option>Biodiesel</option>
                  <option>Querosene</option>
                </select>
              </font></TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="placa" type="text" id="placa">
              </font></TD>
            </TR>
            <TR height=17>
              <TD height=26 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Valor venda:</FONT></B></TD>
              <TD height=26 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Valor de entrada:</FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Tarifa de cadastro:</FONT></B></TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Valor a financiar:</FONT></B></TD>
            </TR>
            <TR height=17>
              <TD height=26 background="../../imagens/fundocelulas1.png" class=corpo><font size="2"><strong><font color="#0000FF"><strong><font color="#0000FF"><? echo $valor_venda; ?></font></strong>
                  <input name="valor_venda" type="hidden" id="valor_venda" value="<? echo $valor_venda; ?>">
              </font></strong></font></TD>
          <TD height=26 background="../../imagens/fundocelulas1.png"><font size="2"><font color="#0000FF"><strong><font color="#0000FF"><? echo $valor_entrada; ?></font>
                  <input name="valor_entrada" type="hidden" id="valor_entrada" value="<? echo $valor_entrada; ?>">
              </strong></font></font></TD>
              <TD background="../../imagens/fundocelulas1.png"><font size="2"><strong><font color="#0000FF"><? echo $tac; ?></font></strong>
                  <input name="tarifa_cadastro" type="hidden" id="tarifa_cadastro2" value="<? echo $tac; ?>">
              </font></TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff background="../../imagens/fundocelulas1.png"><font size="2"><font color="#0000FF"><strong><font color="#0000FF">
                <? $financiar = bcadd($diferenca,$tac,2);

	  echo $financiar;

	   ?>
              </font>
                  <input name="valor_financiar" type="hidden" id="valor_financiar2" value="<? $financiar = bcadd($diferenca,$tac,2);

	  echo $financiar;

	   ?>">
              </strong></font></font></TD>
            </TR>
            <TR height=17>
              <TD height=26 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Codigo da tabela:</FONT></B></TD>
              <TD height=26 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Coeficiente:</FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Servi&ccedil;os de terceiros:</FONT></B></TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Valor liberado:</FONT></B></TD>
            </TR>
            <TR height=17>
              <TD height=26 background="../../imagens/fundocelulas1.png" class=corpo><font size="2"><strong><font color="#0000FF"><? echo $codigo_tabela; ?></font></strong>
                  <input name="codigo_tabela" type="hidden" id="codigo_tabela2" value="<? echo $codigo_tabela; ?>">
                  <b><font color="#008000" size="1" face="Verdana">Mista</font></b>
                  <strong><font color="#0000FF"><? echo $mista; ?></font></strong>
                  <input name="mista" type="hidden" id="codigo_tabela6" value="<? echo $mista; ?>">
              </font></TD>
          <TD height=26 background="../../imagens/fundocelulas1.png"><font size="2"><font color="#0000FF"><strong><font color="#0000FF"><? echo $coeficiente; ?></font>
                  <input name="coeficiente" type="hidden" id="coeficiente" value="<? echo $coeficiente; ?>">
              </strong></font></font></TD>
              <TD background="../../imagens/fundocelulas1.png"><font size="2"><strong><font color="#0000FF"><? echo $r_2; ?> </font></strong>
                  <input name="r" type="hidden" id="r" value="<? echo $r_2; ?>">
              </font></TD>
          <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff background="../../imagens/fundocelulas1.png"><font size="2"><font color="#0000FF"><strong><? echo "0.00"; ?>
                  <input name="valor_liberado" type="hidden" id="valor_liberado" value="<? echo "0.00"; ?>">
              </strong></font></font></TD>
            </TR>
            <TR height=17>
              <TD height=26 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>N&ordm; de parcelas:</FONT></B></TD>
              <TD height=26 background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Valor das parcelas:</FONT></B></TD>
              <TD background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Car&ecirc;ncia:</FONT></B></TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff background="../../imagens/fundocelulas1.png"><B><FONT color=#008000 size=1 
            face=Verdana>Pagto de servi&ccedil;os de terceiros:</FONT></B></TD>
            </TR>
            <TR height=17>
              <TD height=26 background="../../imagens/fundocelulas1.png" class=corpo><font size="2"><strong><font color="#0000FF"><? echo $num_parcelas; ?></font></strong>
                  <input name="num_parcelas" type="hidden" id="num_parcelas" value="<? echo $num_parcelas; ?>">
              </font></TD>
              <TD height=26 background="../../imagens/fundocelulas1.png"><font size="2"><font color="#0000FF"><strong><font color="#0000FF">
                <? $prestacao = bcmul($financiar,$coeficiente,2);

	  echo $prestacao;

	   ?>
              </font></strong></font></font> <font size="2">
              <input name="valor_parcelas" type="hidden" id="valor_parcelas" value="<? $prestacao = bcmul($financiar,$coeficiente,2);

	   echo $prestacao; ?>">
              </font></TD>
              <TD background="../../imagens/fundocelulas1.png"><font size="2">
                <input class="class02" name="trinta" type="checkbox" id="trinta" value="30 DD">
                <B><FONT color=#008000 size=1 
            face=Verdana>30 DD</FONT></B>
                <input class="class02" name="quarenta_cinco" type="checkbox" id="quarenta_cinco" value="45 DD">
                <B><FONT color=#008000 size=1 
            face=Verdana>45 DD</FONT></B></font></TD>
              <TD borderColor=#ffffff borderColorLight=#ffffff 
          borderColorDark=#ffffff background="../../imagens/fundocelulas1.png"><font size="2"><strong><font color="#0000FF">
                <? $serv_terceiros = bcmul($diferenca,$r,2);  echo $serv_terceiros; ?>
                <input name="pagto_serv_terc" type="hidden" id="pagto_serv_terc" value="<? echo $serv_terceiros; ?>">
              </font></strong></font></TD>
            </TR>
          </TBODY>
      </TABLE></TD>
    </TR>
    <TR bgColor=#cccccc>
      <TD background="../../imagens/fundocelulas2.png" bgcolor="#cccccc"><div align="center"><STRONG><FONT size=2 
      face="Verdana, Arial, Helvetica, sans-serif">Observa&ccedil;&otilde;es</FONT></STRONG></div></TD>
    </TR>
    <TR>
      <TD><TABLE class=corpo border=0 cellSpacing=0 cellPadding=2 width="100%" 
x:str>
        <COLGROUP>
          <COL style="WIDTH: 53pt" class=xl42 width=71>
          <COL style="WIDTH: 48pt" class=xl42 span=2 width=64>
          <COL style="WIDTH: 64pt" class=xl42 width=85>
          <COL style="WIDTH: 80pt" class=xl42 width=106>
          <COL style="WIDTH: 53pt" class=xl42 width=71>
          <COL style="WIDTH: 48pt" class=xl42 span=3 width=64>
          <COL style="WIDTH: 52pt" class=xl42 width=69>
          <TBODY>
            <TR height=17>
              <TD width=168 height=19 background="../../imagens/fundocelulas1.png" class=corpo><B><FONT color=#008000 size=1 
            face=Verdana>Observa&ccedil;&otilde;es: </FONT></B></TD>
              <TD width=102 height=19 background="../../imagens/fundocelulas1.png">&nbsp;</TD>
              <TD width=250 background="../../imagens/fundocelulas1.png">&nbsp;</TD>
              <TD width=186 background="../../imagens/fundocelulas1.png">&nbsp;</TD>
            </TR>
            <TR height=17>
              <TD height=26 colspan="4" background="../../imagens/fundocelulas1.png" class=corpo><font size="2">
                <textarea class="class02" name="obs" cols="50" rows="5" id="obs"></textarea>
                <strong><font color="#0000FF">
                <input name="recebido" type="hidden" id="recebido2" value="<? echo "N&atilde;o"; ?>">
                </font></strong></font></TD>
              </TR>
          </TBODY>
      </TABLE></TD>
    </TR>
    <TR>
      <TD><TABLE class=corpo border=0 cellSpacing=0 cellPadding=2 width="100%" 
x:str>
        <COLGROUP>
          <COL style="WIDTH: 53pt" class=xl42 width=71>
          <COL style="WIDTH: 48pt" class=xl42 span=2 width=64>
          <COL style="WIDTH: 64pt" class=xl42 width=85>
          <COL style="WIDTH: 80pt" class=xl42 width=106>
          <COL style="WIDTH: 53pt" class=xl42 width=71>
          <COL style="WIDTH: 48pt" class=xl42 span=3 width=64>
          <COL style="WIDTH: 52pt" class=xl42 width=69>
          <TBODY>
            <TR height=17>
              <TD height=19 background="../../imagens/fundocelulas1.png" class=corpo><strong><font color="#0000FF">
                <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
                <input class="class01" type="submit" name="Submit" value="Concluir efetiva&ccedil;&atilde;o da proposta">
                <input name="operador" type="hidden" id="operador3" value="<? echo $nome_op; ?>">
                <input name="cel_operador" type="hidden" id="cel_operador" value="<? echo $celular_op; ?>">
                <input name="email_operador" type="hidden" id="email_operador" value="<? echo $email_op; ?>">
                <input name="estab_pertence" type="hidden" id="estab_pertence" value="<? echo $estab_pertence; ?>">
                <input name="cidade_estab_pertence" type="hidden" id="cidade_estab_pertence" value="<? echo $cidade_estab_pertence; ?>">
                <input name="tel_estab_pertence" type="hidden" id="tel_estab_pertence" value="<? echo $tel_estab_pertence; ?>">
                <input name="email_estab_pertence" type="hidden" id="email_estab_pertence" value="<? echo $email_estab_pertence; ?>">
              </font></strong>
                <input name="cpt" type="hidden" id="cpt2" value="">
                <input name="serie" type="hidden" id="serie" value="">
                <input name="vencto_1_parcela" type="hidden" id="vencto_1_parcela2" value="">
                <input name="data_constituicao" type="hidden" id="data_constituicao2" value="">
                <input name="inscr_est" type="hidden" id="inscr_est2" value=""></TD>
              </TR>
          </TBODY>
      </TABLE></TD>
    </TR>
  </TBODY>
</TABLE>
</form>

<table width="100%"  border="0">

  <tr>

    <td><form name="form1" method="post" action="informacoes_antecedem_efetuar_proposta.php">

      <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

      <input class="class01" type="submit" name="Submit32" value="Voltar">

      <input name="cpf" type="hidden" id="cpf3" value="<? echo $cpf; ?>">

      <strong><font color="#0000FF">

      <input name="estabelecimento_proposta" type="hidden" id="estabelecimento_proposta4" value="<? echo $estabelecimento_proposta; ?>">

      <input name="valor_venda" type="hidden" id="valor_venda4" value="<? echo $valor_venda; ?>">

      <strong>

      <input name="valor_entrada" type="hidden" id="valor_entrada4" value="<? echo $valor_entrada; ?>">

      <input name="r" type="hidden" id="r5" value="<? echo $r_2; ?>">

      <input name="categoria_veiculo" type="hidden" id="categoria_veiculo" value="<? echo $categoria_veiculo; ?>">

      <input name="coeficiente" type="hidden" id="coeficiente4" value="<? echo $coeficiente; ?>">

      <input name="codigo_tabela" type="hidden" id="codigo_tabela3" value="<? echo $codigo_tabela; ?>">

      <input name="mista" type="hidden" id="mista" value="<? echo $mista; ?>">

      <input name="num_parcelas" type="hidden" id="num_parcelas" value="<? echo $num_parcelas; ?>">
</strong></font></strong>

      <strong><font color="#0000FF"><strong><font color="#0000FF"><strong>
      <input name="tipo_pessoa" type="hidden" id="tipo_pessoa" value="<? echo $tipo_pessoa; ?>">
      <font color="#0000FF"><strong>
      <input name="bem" type="hidden" id="bem" value="<? echo $bem; ?>">
      </strong></font></strong></font></strong></font></strong>
    </form></td>

    <td>&nbsp;</td>

  </tr>

</table>

<form name="form1" method="post" action="">

  <table width="100%" border="0" cellspacing="4">

    <tr>

      <td colspan="2"><strong>Operador<br>

      </strong><strong><font color="#0000FF"><? echo $nome_op; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>

      <td width="35%"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>

              <? echo $email_op; ?> </font><font color="#0000FF"> </font></strong></td>

      <td width="20%"><strong>Celular:<font color="#0000FF"><br>

              <? echo $celular_op; ?> </font><font color="#0000FF"> </font></strong></td>

      <td width="1%">&nbsp;</td>

    </tr>

    <tr>

      <td width="18%"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>

          <strong><font color="#0000FF"><? echo $estab_pertence; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>

      <td width="26%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $tel_estab_pertence; ?> </font></strong></td>

      <td><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $email_estab_pertence; ?> </font><font color="#0000FF"> </font></strong></td>

      <td><strong>Cidade: <br>

            <font color="#0000FF"><? echo $cidade_estab_pertence; ?> </font></strong></td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td><strong><font color="#0000FF"> </font><font color="#0000FF"> </font></strong></td>

      <td>&nbsp;</td>

      <td><strong></strong></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

  </table>

</form>

</body>

</html>

