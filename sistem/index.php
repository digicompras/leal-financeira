<?php

session_start(); //inicia sess�o...

if ($_SESSION["usuario"] == true) //verifica se a vari�vel "usuario" � verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["senha"] == true) //verifica se a vari�vel "senha" � verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["data_hoje"] == true) //verifica se a vari�vel "senha" � verdadeira...

echo ""; //se for emite mensagem positiva.





else //se n�o for...

header("Location: alerta.php");


require '../conect/conect.php';

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>

<?
  
 $user= "select * from operadores where usuario='$usuario' and  senha='$senha'";

$result=mysql_query($user,$conexao) or die("Falha ao selecionar a tabela user");

if(mysql_num_rows($result)==0){




Header("Location: alerta.php");



}else{
	
	

$sql = "SELECT * FROM operadores where usuario='$usuario' and  senha='$senha' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nome = $linha['1'];

$dataultimatrocadesenha = $linha['67'];
$penultimasenha = $linha['68'];
$ultimasenha = $linha['69'];

}

$sql = "SELECT * FROM diaslimitetrocarsenha limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$diaslimite = $linha['1'];

}



$date = date('Y-m-d');
$hora = date('H:i:s');


// Calcula a diferen�a em segundos entre as datas
$diferenca = strtotime($date) - strtotime($dataultimatrocadesenha);

//Calcula a diferen�a em dias
$dias = floor($diferenca / (60 * 60 * 24));


if($dias>=$diaslimite){
	
	//echo "erro!! tente novamente em alguns instantes $dias - $diaslimite ";
	
	$_SESSION['nome'] = $nome;

	$_SESSION['usuario'] = $usuario;

	$_SESSION['senha'] = $senha;

	Header("Location: ../ups.php");
	
}else{


?>




<html>

<head>
<link rel="stylesheet" href="style.css">
<title>Servi&ccedil;os ao Cliente</title>

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
.style2 {color: #FF0000}

-->
</style>
</head>

<?





$solicitacao = $_POST['solicitacao'];


$hoje = date('Y-m-d');
$mes_atual = date('m');
$mes_anterior = bcsub($mes_atual,1);

$ano_atual = date('Y');
$ano_anterior = bcsub($ano_atual,1);

$data_hoje = $_SESSION['data_hoje'];

$codigo_mensagem = $_POST['codigo_mensagem'];

$mensagem_lida = $_POST['mensagem_lida'];

$data_leitura = date('d-m-Y');

$hora_leitura = date('H:i:s');





if($mensagem_lida=="Lida"){

$sql = "select * from db";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$comando = "update `$linha[1]`.`mensagens_ao_funcionario` set `codigo` = '$codigo_mensagem',`mensagem_lida` = '$mensagem_lida',`data_leitura` = '$data_leitura',`hora_leitura` = '$hora_leitura' where `mensagens_ao_funcionario`. `codigo` = '$codigo_mensagem' limit 1 ";

}



mysql_query($comando,$conexao);



}


$dia = date('d');

$mes = date('m');

$ano = date('Y');

$ano_anterior = date('Y')-1;
$ano_atual = date('Y');
$ano_proximo = date('Y')+1;

?>


<?
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$background = $linha[1];

}
?>

<body background="../background/<? echo "$background"; ?>">



<?



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];





$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha' limit 1";

$res = mysql_query($sql);

echo "<tr>";

while($linha=mysql_fetch_row($res)) {

$reg++;



$codigo_operador = $linha[0];

$nome_operador = $linha[1];

$senha_op = $linha[41];

$tipo_op = $linha[42];

$funcao = $linha[43];

$estab_pertence = $linha[44];

$bloqueio_parcial = $linha[57];


?>
<?

//include '../conect/verificahora.php';

?>

<?

//--------------RECALCULA O PRAZO DE ENVIO DOS FISICOS----------------

$sql = "SELECT * FROM prazo_entrega_fisico limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$periodo = $linha[1];

$ativar_bloqueio = $linha[2];

$data_inicio_busca = $linha[3];


}



$sql = "SELECT * FROM verificacao_de_prazos_de_propostas where nome_operador = '$nome_operador' and date = '$hoje'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$verificacao = mysql_num_rows($res);

}

if($verificacao>="1"){
	
}
else{
	



$sql = "SELECT * FROM propostas where nome_operador = '$nome_operador' and (status_fisico = 'PENDENTE DE ENVIO' or status_fisico = 'PENDENTE') and data_proposta >= '$data_inicio_busca' order by num_proposta asc";

$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros = mysql_num_rows($res);

$num_proposta = $linha[0];
$obs_fisico = $linha[122];

$data_proposta = $linha[152];
//$prazo_final = $linha[153];



//------------------------------------------------------

//Separa��o dos valores (ano,mes,dia) data_proposta
$arr1 = explode("-", $hoje);
 
$anolimite1 = $arr1[0];
$meslimite1 = $arr1[1];
$dialimite1 = $arr1[2];

//-------------------------------------------------------

//Separa��o dos valores (ano,mes,dia) data_proposta
$arr2 = explode("-", $data_proposta);
 
$anolimite2 = $arr2[0];
$meslimite2 = $arr2[1];
$dialimite2 = $arr2[2];

//--------------------------------------------------------

//calculo timestam das duas datas
$timestamp1 = mktime(0,0,0,$meslimite1,$dialimite1,$anolimite1);
$timestamp2 = mktime(0,0,0,$meslimite2,$dialimite2,$anolimite2); 


//diminuo a uma data a outra
$segundos_diferenca = $timestamp1 - $timestamp2;
//echo $segundos_diferenca;

//converto segundos em dias
$dias_diferenca = $segundos_diferenca / (60 * 60 * 24);

//obtenho o valor absoluto dos dias (tiro o poss�vel sinal negativo)
//$dias_diferenca = abs($dias_diferenca);

//tiro os decimais aos dias de diferenca
$dias_de_atraso = floor($dias_diferenca);


//----------------PRAZO FINAL--------------------------------------

$arr1 = explode("-", $data_proposta);
 
$anofinalentrega = $arr1[0];
$mesfinalentrega = $arr1[1];
$dialfinalentrega = $arr1[2];


$data_inc_inversa = date('Y-m-d', mktime(0, 0, 0, $mesfinalentrega, $dialfinalentrega + $periodo, $anofinalentrega));


$prazo_final = $data_inc_inversa;

//-------------------------------------------------------



$sql2 = "select * from db";
$res2 = mysql_query($sql2);
while($linha=mysql_fetch_row($res2)) {

if($dias_diferenca>$periodo){

$dias_atraso = bcsub($dias_de_atraso,$periodo);

$comando = "update `$linha[1]`.`propostas` set `prazo_final` = '$prazo_final',`dias_diferenca` = '$dias_diferenca',`dias_atraso` = '$dias_atraso' where `propostas`. `num_proposta` = '$num_proposta'";

}
else{
$comando = "update `$linha[1]`.`propostas` set `prazo_final` = '$prazo_final',`dias_diferenca` = '$dias_diferenca',`dias_atraso` = '0' where `propostas`. `num_proposta` = '$num_proposta'";
}
}

mysql_query($comando,$conexao) or die("Erro ao alterar informa��es desse cadastro");





$comando = "insert into verificacao_de_prazos_de_propostas(date,nome_operador) values('$hoje','$nome_operador')";

mysql_query($comando,$conexao);


}




}




$sql = "SELECT * FROM propostas where nome_operador = '$nome_operador' and (status_fisico = 'PENDENTE DE ENVIO' or status_fisico = 'PENDENTE') and data_proposta >= '$data_inicio_busca' and dias_atraso >= '1' order by num_proposta asc";

$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$contagem = mysql_num_rows($res);


}

if($contagem<="0"){
	
$propostas_em_atraso = "0";	
	
}
else{
	
$propostas_em_atraso = $contagem;
	
}

if(($ativar_bloqueio=="Sim") && ($propostas_em_atraso>="1")){
	
$sql2 = "select * from db";
$res2 = mysql_query($sql2);
while($linha=mysql_fetch_row($res2)) {

$comando = "update `$linha[1]`.`operadores` set `bloqueio_parcial` = 'Sim' where `operadores`. `usuario` = '$usuario' and senha = '$senha'";

}

mysql_query($comando,$conexao) or die("Erro ao alterar informa��es desse operador");


}
else{
	
$sql3 = "select * from db";
$res3 = mysql_query($sql3);
while($linha=mysql_fetch_row($res3)) {

$comando = "update `$linha[1]`.`operadores` set `bloqueio_parcial` = 'Nao' where `operadores`. `usuario` = '$usuario' and senha = '$senha'";

}

mysql_query($comando,$conexao) or die("Erro ao alterar informa��es desse operador");
	
	
	
	
	
}



if($propostas_em_atraso>="1"){

echo "<script>

alert('ATEN��O!!!... VOC� TEM $propostas_em_atraso PROPOSTAS ATRASADAS PARA O ENVIO DO FISICO A MATRIZ!!!... � PRIORIT�RIO QUE VOC� PROVIDENCIE A REGULARIZA��O E O ENVIO DAS MESMAS!!!...');

</script>";


	}



//---------------FIM DO CALCULO DO PRAZO DE ENVIO DOS FISICOS------------------

?>


  <?
$sql = "SELECT * FROM mensagens_ao_funcionario where nome_operador = '$nome_operador' and mensagem_lida = 'Nao lida'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$reg_mensagem++;

}
	?>
  <table width="100%" border="0" cellspacing="4">

    <tr> 

      <td width="15%"><strong>Ol&aacute;! Seja bem vindo!<br> 

        </strong><strong><font color="#0000FF"><? echo $nome_operador; ?> 

            

</font></strong></td>

      <td width="17%"><strong>Fun&ccedil;&atilde;o</strong><br>      
          <span class="style1"><? echo $funcao; ?></span></td>
      <td width="30%"><strong>E-mail:</strong><br>

      <strong><font color="#0000FF"><? echo $linha[20]; ?></font></strong>     </td>

      <td width="15%"><strong>Celular:<font color="#0000FF"><br>

            <? echo $linha[19]; ?>

      </font><font color="#0000FF">      </font></strong></td>

      <td width="23%" valign="top"><div align="center">

        <strong><font color="#0000FF">Confira a data de hoje<br> 

        </font></strong>

        <strong><font color="#0000FF"><? echo $data_hoje; ?></font></strong>

           

        </p>

</div></td>
    </tr>


<?

if($reg==3){

echo "</tr><tr>";

$reg=0;

}

?>



<? } ?>
</table>

  <?

$sql = "SELECT * FROM mensagens_ao_funcionario where nome_operador = '$nome_operador' and mensagem_lida = 'Nao lida'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg_mensagem = mysql_num_rows($res);


$codigo_mensagem = $linha[0];

$nome_operador = $linha[1];

$data_mensagem = $linha[2];

$hora_mensagem = $linha[3];

$mensagem = $linha[4];

$mensagem_lida = $linha[5];

$data_leitura = $linha[6];

$hora_leitura = $linha[7];

$assunto = $linha[8];


?>
  <form name="form9" method="post" action="index.php">
    <table width="100%"  border="0">
      <tr>
        <td width="9%"><div align="center"><? echo $data_mensagem; ?></div></td>
        <td width="9%"><div align="center"><? echo $hora_mensagem; ?></div></td>
        <td width="62%"><div align="center">
            <textarea name="mensagem" cols="120" rows="7" id="mensagem"><? echo "$assunto - $mensagem"; ?></textarea>
        </div></td>
        <td width="20%"><div align="center">
            <input name="codigo_mensagem" type="hidden" id="codigo_mensagem" value="<? echo $codigo_mensagem; ?>">
            <input name="mensagem_lida" type="hidden" id="mensagem_lida" value="Lida">
        </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="center">
            <input type="submit" name="Submit" value="Declaro que li a mensagem">
        </div></td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </form>
  <p>
    <? } ?>
  </p>
<table width="100%" border="0">
	<section>
    <tr>
      <td><div align="center">
        <form name="form1" method="post" action="ponto/marcarponto.php">
          <div align="center">
            <?

$hora = date('H');		



$sql = "SELECT * FROM ponto where nome = '$nome_operador' and data = '$data_hoje'";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$codigo_ponto = $linha[0];

$ent_t = $linha[5];



}



?>
            <strong><font color="#0000FF">
            <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
            <input name="nome" type="hidden" id="nome" value="<? echo $nome_operador; ?>">
            <input name="codigo_ponto" type="hidden" id="codigo_ponto" value="<? echo $codigo_ponto; ?>">
            <input name="data" type="hidden" id="data" value="<? echo date('d-m-Y'); ?>">
            </font></strong>
			  
            <? if(($reg_mensagem==0) && ($funcao<>"Agente")){ echo "<input class='class01' type='submit' value='Marcar Ponto' name='button' id='button' value='Marcar Ponto'>"; } ?>
				  
          </div>
        </form>
      </div></td>
      <td><div align="center">
        <form name="form2" method="post" action="operadores/editar_operador.php">
          <div align="center">
            <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
			  
            <? if($reg_mensagem==0){ echo "<input class='class01' type='submit' name='Submit2' value='Editar Dados Cadastrais'>"; } ?>
			  
          </div>
        </form>
      </div></td>
      <td><div align="center">
        <form name="form9" method="post" action="telemarketing/menu.php">
          <div align="center">
            <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
			  
            <? if(($reg_mensagem==0) && ($funcao<>"Agente")){ echo "<input class='class01' type='submit' name='button' id='button' value='Telemarketing'>"; } ?>
			  
            <input name="nome" type="hidden" id="nome">
          </div>
        </form>
      </div></td>
      <td><div align="center">
        <form action="link_acessorapido/index.php" method="post" name="form5" target="_blank" id="form">
          <div align="center">
            <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
			  
            <? if($reg_mensagem==0){ echo "<input class='class01' type='submit' value='Acesso Rapido' name='Submit17' >"; } ?>
			  
          </div>
        </form>
      </div></td>
    </tr>
    <tr>
      <td width="15%"><form action="clientes/menu.php" method="post" name="form2">
        <div align="center">
          <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
			
          <? if(($reg_mensagem==0) && ($funcao<>"Agente")){ echo "<input class='class01' type='submit' value='Clientes' name='Submit5' "; } ?>
			
          <input type="hidden" name="codigolancamento" id="codigolancamento">
          <input type="hidden" name="solicitacao" id="solicitacao">
          </div>
      </form></td>
      <td width="21%"><form action="propostas/menu.php" method="post" name="form2">
        <div align="center">
          <input name="nome_operador" type="hidden" id="nome_operador" value="<? echo $nome_operador;  ?>">
          <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
			
          <?      

if($reg_mensagem==0){ echo "<input class='class01' type='submit' value='Propostas' name='Submit' >"; }

?>
			
          </div>
      </form></td>
      <td width="16%"><form name="form5" method="post" action="borderos/borderos.php">
        
        <div align="center">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          <input name="estab_pertence" type="hidden" id="estab_pertence" value="<? echo $estab_pertence; ?>">
          <input name="nome_operador" type="hidden" id="nome_operador" value="<? echo $nome_operador; ?>">
			
          <?
if($reg_mensagem==0){ echo "<input class='class01' type='submit' value='Borderos' name='Submit' >"; } 

?>
          </div>
      </form></td>
      <td width="48%"><form action="relatorios/relatorio_de_producao_periodico_por_operador_novo.php" method="post" name="form5">
        
        <div align="center">
          <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
          <input name="campanha" type="hidden" id="campanha" value="selecione">
          <?
       
if(($reg_mensagem==0) && ($funcao=="Gerente")){ 
        echo "<select class='class02' name='nome_operador' id='nome_operador'>
          <option selected></option>";
		  

          
    $sql = "select * from operadores where estab_pertence = '$estab_pertence' and status = 'Ativo' order by nome asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['nome']."</option>";
  
  
  
  	}

  echo "</select>";
  

}
else{
	
if($funcao=="Parceiro Master"){
	
        echo "<select class='class02' name='nome_operador' id='nome_operador'>
          <option selected></option>";
		  

          
    $sql = "select * from operadores where estab_pertence = '$estab_pertence' and (funcao = 'Parceiro Master' or funcao = 'Parceiro') and status = 'Ativo' order by nome asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['nome']."</option>";
  
  
  
  	}

  echo "</select>";
	
	
	
}
else{
		
echo "<input class='class02' name='nome_operador' type='hidden' id='nome_operador' value='$nome_operador'>";

}
		
}
        

if($funcao=="Parceiro"){
	
	
}
else{

if(($reg_mensagem==0) && ($funcao=="Gerente")){
	
echo "De
        <select class='class02' name='dia_inicial' id='dia_inicial'>";





    $sql = "select * from propostas where dia_alteracao_status <> '' group by dia_alteracao_status order by dia_alteracao_status asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['dia_alteracao_status']."</option>";

    }

        echo "</select>
        <select class='class02' name='mes_inicial' id='mes_inicial'>";
if($funcao=="Gerente"){
         echo "<option selected>$mes</option>
          <option>01</option>
          <option>02</option>
          <option>03</option>
          <option>04</option>
          <option>05</option>
          <option>06</option>
          <option>07</option>
          <option>08</option>
          <option>09</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>";

}
else{

$sql = "select * from propostas where mes_alteracao_status = '$mes_atual' group by mes_alteracao_status order by mes_alteracao_status desc limit 2";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['mes_alteracao_status']."</option>";
  echo "<option>"."0$mes_anterior"."</option>";


    }

}
    

        echo "</select>
        <select class='class02' name='ano_inicial' id='ano_inicial'>";
if($funcao=="Gerente"){
          echo "<option selected>$ano_atual</option>
            <option>$ano_anterior</option>
            <option>$ano_proximo</option>";

}
else{

$sql = "select * from propostas where ano_alteracao_status = '$ano_atual' group by ano_alteracao_status order by ano_alteracao_status desc limit 1";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['ano_alteracao_status']."</option>";

    }
}


        echo "</select>
        ate
        <select class='class02' name='dia_final' id='dia_final'>";





    $sql = "select * from propostas group by dia_alteracao_status order by dia_alteracao_status desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['dia_alteracao_status']."</option>";

    }

        echo "</select>
        <select class='class02' name='mes_final' id='mes_final'>";
if($funcao=="Gerente"){
          echo "<option>$mes</option>
          <option>01</option>
          <option>02</option>
          <option>03</option>
          <option>04</option>
          <option>05</option>
          <option>06</option>
          <option>07</option>
          <option>08</option>
          <option>09</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>";

}
else{

$sql = "select * from propostas where mes_alteracao_status = '$mes_atual' group by mes_alteracao_status order by mes_alteracao_status desc limit 2";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['mes_alteracao_status']."</option>";
  echo "<option>"."0$mes_anterior"."</option>";

}

  }  

        
		echo "</select>
        <select class='class02' name='ano_final' id='ano_final'>";
if($funcao=="Gerente"){
          echo "<option selected>$ano_atual</option>
            <option>$ano_anterior</option>
            <option>$ano_proximo</option>";
			
			}
			else{
$sql = "select * from propostas where ano_alteracao_status = '$ano_atual' group by ano_alteracao_status order by ano_alteracao_status desc limit 1";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['ano_alteracao_status']."</option>";

    }
			}

echo "</select>";

}

}

?>
			
          <? if(($reg_mensagem==0) && ($funcao<>"Parceiro")){ echo "<input class='class01' type='submit' value='Relatorio de Producao' name='Submit5232' >"; } ?>
			
          </div>
      </form></td>
    </tr>
    <tr>
      <td><form action="clientes/cupom.php" method="post" name="form5">
        
        <div align="center">
          <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
			
          <? if($reg_mensagem==0){ echo "<b>CPF</b><br>
        <input class='class02' name='cpf' type='text' id='cpf' size='11' maxlength='11'>
        <input class='class01' type='submit' value='Registrar Cupom' name='Submit52322' >"; } ?>
			
          </div>
      </form></td>
      <td><form action="lojistas/menu.php" method="post" name="form2">
        <div align="center">
          <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
			
          <? if(($reg_mensagem==0) && ($funcao<>"Agente")){ echo "<input class='class01' type='submit' value='LOJISTAS' name='Submit5' >"; } ?>
			
          <input type="hidden" name="codigolancamento2" id="codigolancamento2">
          <input type="hidden" name="solicitacao2" id="solicitacao2">
        </div>
      </form></td>
      <td><form action="simuladores/index.php" method="post" name="form5" id="form38">
        <div align="center">
          <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
			
          <? if($reg_mensagem==0){ echo "<input class='class01' type='submit' value='SIMULADORES' name='Submit17' >"; } ?>
			
          </div>
      </form></td>
      <td><form name="form4" method="post" action="relatorios/verificar_producao_diaria_operador_e_parceiro_individual.php">
        <div align="center">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          <? if(($reg_mensagem==0) && ($funcao=="Gerente")){ 
echo"<select class='class02' name='dataproposta' id='dataproposta'>";
    $sql = "select * from propostas group by dataproposta order by num_proposta desc limit 60";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['dataproposta']."</option>";
   }
      echo"</select>";

}
  ?>
          <? if(($reg_mensagem==0) && ($funcao=="Gerente")){ echo"<b>Operador</b>" ; } ?>
          <? if(($reg_mensagem==0) && ($funcao=="Gerente")){ 
echo"<select class='class02' name='nome_operador' id='nome_operador'>";
    $sql = "select * from operadores where estab_pertence = '$estab_pertence' and status = 'Ativo' order by nome asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome']."</option>";
   }
      echo"</select>";

}
  ?>
			
          <? if($funcao=="Gerente"){ if($reg_mensagem==0){ echo "<input class='class01' type='submit' value='rELATORIO DE pRODUCAO dIARIO' name='Submit523223' >"; } }?>
			
          </div>
      </form></td>
    </tr>
		</section>
  </table>
<p>&nbsp;</p>

<?

if($solicitacao=="responder_atribuicao"){

$num_proposta_atribuida = $_POST['num_proposta_atribuida'];
$obs2 = $_POST['obs2'];
$num_ver_margem = $_POST['num_ver_margem'];

$dataalteracao = date('d-m-Y');
$horaalteracao = date('H:i:s');

$sql = "SELECT * FROM propostas where num_proposta = '$num_proposta_atribuida'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$cpf_cliente = $linha[7];

}



$comando = "insert into observacoes_de_propostas(num_proposta,cpf,data,hora,obs,operador) values('$num_proposta_atribuida','$cpf','$dataalteracao','$horaalteracao','$obs2','$nome_operador')";



mysql_query($comando,$conexao);


$sql2 = "select * from db";
$res2 = mysql_query($sql2);
while($linha=mysql_fetch_row($res2)) {

$comando = "update `$linha[1]`.`atribuicao_de_propostas` set `num_ver_margem`= '$num_ver_margem' where `atribuicao_de_propostas`. `num_proposta_atribuida` = '$num_proposta_atribuida' limit 1 ";

}

mysql_query($comando,$conexao) or die("Erro ao alterar informa��es dessa atribui��o");









}
?>
<table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0">
        <tr bgcolor="#<? echo $cor ?>">
          <td colspan="6" background="../imagens/fundocelulas2.png"><div align="center"><strong>Propostas atribuidas a min(Vieram do site)</strong></div></td>
        </tr>
        <tr bgcolor="#<? echo $cor ?>">
          <td background="../imagens/fundocelulas2.png"><div align="center"><strong>N&ordm; da Proposta </strong></div></td>
          <td background="../imagens/fundocelulas2.png"><div align="center">Margem Cart&atilde;o</div></td>
          <td background="../imagens/fundocelulas2.png"><div align="center">Margem Empr&eacute;stimo</div></td>
          <td background="../imagens/fundocelulas2.png"><div align="center"><strong>Obseva&ccedil;&otilde;es</strong></div></td>
          <td background="../imagens/fundocelulas2.png"><div align="center">N&ordm; pedido ver margem</div></td>
          <td background="../imagens/fundocelulas2.png">&nbsp;</td>
        </tr>
        
 <?
$date_inicio_pesquisa = date('Y-m-01');
$date_termino_pesquisa = date('Y-m-31');

			
$sql = "SELECT * FROM atribuicao_de_propostas where operador_atribuido = '$nome_operador' order by num_proposta_atribuida desc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$num_proposta_atribuida = $linha[2];
$margemcartao = $linha[5];
$margememprestimo = $linha[6];



?>
        <tr>
          <td width="22%" background="../imagens/fundocelulas1.png"><form action="propostas/imprimir_proposta.php" method="post" name="form2" target="_blank">
              <div align="center">
                <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
                <input name="num_proposta" type="hidden" id="num_proposta" value="<? echo $num_proposta_atribuida; ?>">
                <? // echo $num_proposta_atribuida; ?>
                <input type="submit" name="Submit2" value="<? echo "$echo $num_proposta_atribuida"; ?>">
              </div>
          </form></td>
          
          <td width="10%" background="../imagens/fundocelulas1.png"><div align="center">
            <?  echo $margemcartao; ?>
          </div></td>
          <td width="10%" background="../imagens/fundocelulas1.png"><div align="center">
            <?  echo $margememprestimo; ?>
          </div></td>
          <form name="form6" method="post" action="index.php">
          <td width="22%" background="../imagens/fundocelulas1.png"><div align="center">
            
              <textarea name="obs2" cols="45" rows="3" id="obs2"><? echo $obs3; ?></textarea>
                        
            </div></td>
          <td width="14%" background="../imagens/fundocelulas1.png"><div align="center">
            <input type="text" name="num_ver_margem" id="num_ver_margem">
            <input name="solicitacao" type="hidden" id="solicitacao" value="responder_atribuicao">
            <input name="num_proposta_atribuida" type="hidden" id="num_proposta_atribuida" value="<? echo $num_proposta_atribuida; ?>">
          </div></td>
          <td width="22%" background="../imagens/fundocelulas1.png"><input type="submit" name="button" id="button" value="Responder"></td>
          </form>
          </tr>
          <? } ?>
</table>
<p>&nbsp;</p>
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        
        <tr>
          <td width="2%">&nbsp;</td>
          <td width="13%">&nbsp;</td>
          <td width="58%"><div align="center">
              <?
    $sql = "SELECT * FROM logo";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$largura = $linha['2'];
$altura = $linha['3'];

echo "<img src='../imagens/$linha[1]' border='0'  width='$linha[2]' height='$linha[3]'>";

 } 
 ?>
          </div></td>
          <td width="25%">&nbsp;</td>
          <td width="2%">&nbsp;</td>
        </tr>
      </table>
<p>&nbsp;      </p>
<div align="center"></div>

<strong></strong>
<p align="center">

  

  

</p>
</body>

</html>

<? }} ?>

<? 

mysql_free_result($res);

mysql_close($conexao);

?>