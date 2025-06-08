<?

require '../conect/conect.php';

?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Untitled Document</title>

<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

.style1 {	font-size: 18px;

	font-weight: bold;

	color: #0000FF;

}

-->

</style></head>



<body>

<table background="../imagens/fundocelulas2.png" width="100%" cellpadding="0" cellspacing="0" bgcolor="#ECE9D8">

  <tr>

    <td width="11%" valign="top">      <form action="principal.php" method="post" name="form1" target="_top" id="form4">

        

        

        <div align="center">

          <?



$usuario = $_SESSION['usuario'];



$senha = $_SESSION['senha'];



ini_set('default_charset','UTF8_general_mysql500_ci');



?>

          <input class="class01" type="submit" name="Submit4" value="Home">

          </div>

    </form></td>

    <td width="14%" valign="top"><form action="campanhas/menu.php" method="post" name="form5" target="navegacao" id="form23">

      <div align="center">

        <?



$usuario = $_SESSION['usuario'];



$senha = $_SESSION['senha'];



?>

        <input class='class01' type="submit" name="Submit522" value="CAMPANHAS" />

        </div>

    </form></td>

    <td width="13%" valign="top">      <form action="operacoes_a_serem_executadas.php" method="post" name="form3" target="navegacao" id="form10">

        

        <div align="center">

          <?



$usuario = $_SESSION['usuario'];



$senha = $_SESSION['senha'];



?>

          <input name="solicitacao" type="hidden" id="solicitacao" value="<? echo "verificar propostas"; ?>" />

          <input class='class01' type="submit" name="button2" id="button2" value="Verificar propostas por CPF" />

          </div>

    </form></td>

    <td width="12%" valign="top"><form action="etiquetas/informe_tipo_para_gerar_etiquetas.php" method="post" name="form4" target="navegacao" id="form17">

      

        <div align="center">

          <?



$usuario = $_SESSION['usuario'];



$senha = $_SESSION['senha'];



?>

          <input class='class01' type="submit" name="Submit7" value="Etiquetas mala-direta" />

          </div>

    </form></td>

    <td width="9%" valign="top">      <form action="depto_pessoal/principal.php" method="post" name="form20" target="navegacao" id="form20">

        

        <div align="center">

          <?



$usuario = $_SESSION['usuario'];



$senha = $_SESSION['senha'];



?>

          <input class='class01' type="submit" name="Submit20" value="Depto Pessoal" />

          </div>

    </form></td>

    <td valign="top"><form action="ips/menu.php" method="post" name="form8" target="navegacao" id="form13">

      

        <div align="center">

          <?



$usuario = $_SESSION['usuario'];



$senha = $_SESSION['senha'];



?>

          <input class='class01' type="submit" name="Submit21" value="Autorização de IP's" />

          </div>

    </form></td>

    <td valign="top">      <form action="cidades/menu.php" method="post" name="form6" target="navegacao" id="form25">

        <div align="center">

          <?



$usuario = $_SESSION['usuario'];



$senha = $_SESSION['senha'];



?>

          <input class='class01' type="submit" name="Submit28" value="Cidades do Brasil " />

          </div>

    </form></td>

    <td width="12%" valign="top">      <form action="status/menu.php" method="post" name="form17" target="navegacao" id="form28">

        <div align="center">

          <?



$usuario = $_SESSION['usuario'];



$senha = $_SESSION['senha'];



?>

          <input class='class01' type="submit" name="Submit172" value="Status" />

          </div>

    </form></td>

  </tr>

  <tr>

    <td>      <form action="estabelecimentos/menu.php" method="post" name="form2" target="navegacao" id="form21">

        

        <div align="center">

          <?



$usuario = $_SESSION['usuario'];



$senha = $_SESSION['senha'];



?>

          <input class='class01' type="submit" name="Submit6" value="Estabelecimentos" />

          </div>

    </form></td>

    <td><form action="clientes/menu.php" method="post" name="form1" target="navegacao" id="form1">

      

        <div align="center">

          <?



$usuario = $_SESSION['usuario'];



$senha = $_SESSION['senha'];



?>

          <input type="hidden" name="nome" id="nome" />

          <input type="hidden" name="codigolancamento" id="codigolancamento" />

          <input type="hidden" name="solicitacao" id="solicitacao" />

          <input class='class01' type="submit" name="Submit22" value="Clientes" />

          </div>

    </form></td>

    <td>      <form action="operacoes_a_serem_executadas.php" method="post" name="form3" target="navegacao" id="form6">

        

        <div align="center">

          <?



$usuario = $_SESSION['usuario'];



$senha = $_SESSION['senha'];



?>

          <input name="solicitacao" type="hidden" id="solicitacao" value="<? echo "alterar status proposta"; ?>" />

          <input type="hidden" name="num_proposta" id="num_proposta" />

          <input class='class01' type="submit" name="button10" id="button10" value="Alterar status proposta" />

          </div>

    </form></td>

    <td>      <form action="producao_telemarketing/menu.php" method="post" name="form5" target="navegacao" id="form12">

        

        <div align="center">

          <?



$usuario = $_SESSION['usuario'];



$senha = $_SESSION['senha'];



?>

          <input type="hidden" name="codigo_atualizar" id="codigo_atualizar" />

          <input type="hidden" name="limite_atualizar" id="limite_atualizar" />

          <input type="hidden" name="quant_vezes_trabalhado_atualizar" id="quant_vezes_trabalhado_atualizar" />

          <input class='class01' type="submit" name="Submit18" value="Produção de Telemarketing" />

          </div>

    </form></td>

    <td>      <form action="mensagens_aos_funcionarios/menu.php" method="post" name="form8" target="navegacao" id="form8">

        

        <div align="center">

          <?



$usuario = $_SESSION['usuario'];



$senha = $_SESSION['senha'];



?>

          <input class='class01' type="submit" name="Submit26" value="Mensagens aos Funcionários" />

          <input name="mensagem" type="hidden" id="mensagem" />

          <input name="nome_operador" type="hidden" id="nome_operador" />

          <input type="hidden" name="assunto" id="assunto" />

        </div>

    </form></td>

    <td width="16%"><form action="propostas/informe_operador_para_verificar_propostas_aguardando_ativacao.php" method="post" name="form9" target="navegacao" id="form24">

      <div align="center">

        <?



$usuario = $_SESSION['usuario'];



$senha = $_SESSION['senha'];



?>

        <input class='class01' type="submit" name="Submit24" value="Verificar status por operador" />

        </div>

    </form></td>

    <td width="13%">      <form action="estados_do_brasil/menu.php" method="post" name="form6" target="navegacao" id="form26">

        <div align="center">

          <?



$usuario = $_SESSION['usuario'];



$senha = $_SESSION['senha'];



?>

          <input class='class01' type="submit" name="Submit62" value="Estados do Brasil " />

          </div>

    </form></td>

    <td>      <form action="tipo_cliente/menu.php" method="post" name="form2" target="navegacao" id="form35">

        <div align="center">

          <?



$usuario = $_SESSION['usuario'];



$senha = $_SESSION['senha'];



?>

          <input class='class01' type="submit" name="Submit14" value="PERFIL" />

          </div>

    </form></td>

  </tr>

  <tr>

    <td><form action="correspondentes/menu.php" method="post" name="form20" target="navegacao" id="form16">

      

        <div align="center">

          <?



$usuario = $_SESSION['usuario'];



$senha = $_SESSION['senha'];



?>

          <input class='class01' type="submit" name="Submit202" value="Agentes" />

          </div>

    </form></td>

    <td><form action="tipos_contratos/menu.php" method="post" name="form2" target="navegacao" id="form39">

      <div align="center">

        <?



$usuario = $_SESSION['usuario'];



$senha = $_SESSION['senha'];



?>

        <input class='class01' type="submit" name="Submit19" value="Tipos Contratos" />

        </div>

    </form></td>

    <td><form action="propostas/menu.php" method="post" name="form2" target="navegacao" id="form22">

      <div align="center">

        <?



$usuario = $_SESSION['usuario'];



$senha = $_SESSION['senha'];



?>

        <input class='class01' type="submit" name="Submit5" value="Propostas" />

      </div>

    </form></td>

    <td><form action="categorias_clientes/menu.php" method="post" name="form9" target="navegacao" id="form37">

      <div align="center">

        <?



$usuario = $_SESSION['usuario'];



$senha = $_SESSION['senha'];



?>

        <input class='class01' type="submit" name="Submit16" value="Categorias" />

        </div>

    </form></td>

    <td><form action="relatorios/menu.php" method="post" name="form9" target="navegacao" id="form9">

      

        <div align="center">

          <input type="hidden" name="solicitacao" id="solicitacao" />

          <input type="hidden" name="comissao" id="comissao" />

          <?



$usuario = $_SESSION['usuario'];



$senha = $_SESSION['senha'];



?>

          <input class='class01' type="submit" name="Submit3" value="Relatórios" />

          </div>

    </form></td>

    <td><form action="secretarias/menu.php" method="post" name="form6" target="navegacao" id="form34">

      <div align="center">

        <?



$usuario = $_SESSION['usuario'];



$senha = $_SESSION['senha'];



?>

        <input class='class01' type="submit" name="Submit13" value="Secretarias" />

        </div>

    </form></td>

    <td>      <form action="bco_operacao/menu.php" method="post" name="form6" target="navegacao" id="form27">

        <div align="center">

          <?



$usuario = $_SESSION['usuario'];



$senha = $_SESSION['senha'];



?>

          <input class='class01' type="submit" name="Submit8" value="Bancos de Operação" />

          </div>

    </form></td>

    <td>      <form action="bancos/menu.php" method="post" name="form6" target="navegacao" id="form30">

        <div align="center">

          <?



$usuario = $_SESSION['usuario'];



$senha = $_SESSION['senha'];



?>

          <input class='class01' type="submit" name="Submit9" value="Bancos" />

          </div>

    </form></td>

  </tr>

  <tr>

    <td><div align="center">

      <form action="publicidade/menu.php" method="post" name="form19" target="navegacao" id="form19">

        <div align="center">

          <input class='class01' type="submit" name="Submit" value="Imagens Pagina Inicial" />

          <span class="style1">

            <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

          </span></div>

      </form>

    </div></td>

    <td><div align="center">
      <form action="tipos_beneficios/menu.php" method="post" name="form2" target="navegacao" id="form2">
        <div align="center">
          <?



$usuario = $_SESSION['usuario'];



$senha = $_SESSION['senha'];



?>
          <input class='class01' type="submit" name="Submit2" value="Tipos de Beneficios" />
        </div>
      </form>
    </div></td>

    <td><form action="cad_admin/menu.php" method="post" name="form2" target="navegacao" id="form3">
      <div align="center">
        <?



$usuario = $_SESSION['usuario'];



$senha = $_SESSION['senha'];



?>
        <input class='class01' type="submit" name="Submit10" value="Senha ADMGERAL" />
      </div>
    </form></td>

    <td><div align="center"></div></td>

    <td><div align="center"></div></td>

    <td><div align="center"></div></td>

    <td><div align="center"></div></td>

    <td><div align="center"></div></td>

  </tr>

  <tr>

    <td><div align="center"></div></td>

    <td><div align="center"></div></td>

    <td><div align="center"></div></td>

    <td><div align="center"></div></td>

    <td><div align="center"></div></td>

    <td><div align="center"></div></td>

    <td><div align="center"></div></td>

    <td><div align="center"></div></td>

  </tr>

  <tr>

    <td><div align="center"></div></td>

    <td><div align="center"></div></td>

    <td><div align="center"></div></td>

    <td><div align="center"></div></td>

    <td><div align="center"></div></td>

    <td><div align="center"></div></td>

    <td><div align="center"></div></td>

    <td><div align="center"></div></td>

  </tr>

  <tr>

    <td><div align="center"></div></td>

    <td><div align="center"></div></td>

    <td><div align="center"></div></td>

    <td><div align="center"></div></td>

    <td><div align="center"></div></td>

    <td><div align="center"></div></td>

    <td><div align="center"></div></td>

    <td><div align="center"></div></td>

  </tr>

  <tr>

    <td><div align="center"></div></td>

    <td><div align="center"></div></td>

    <td><div align="center"></div></td>

    <td><div align="center"></div></td>

    <td><div align="center"></div></td>

    <td><div align="center"></div></td>

    <td><div align="center"></div></td>

    <td><div align="center"></div></td>

  </tr>

</table>

</body>

</html>

<?

mysql_close($conexao);

?>

