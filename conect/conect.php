<?
$conexao = mysql_connect("localhost","lealfina_ivan","20792079") or die("Falha na conex�o");
mysql_select_db("lealfina_bancodedados",$conexao) or die("Falha ao selecionar a database");

?>


<style type="text/css">
	body {
	background-color: #a9a9a9;
	font: bold arial, helvetica, sans-aerif;
	font-weight: bold;
	color: #000000;
}

.class01 {
    font: bold arial, helvetica, sans-aerif;
	font-weight: bold;
	background-color: #1328c9; 
	border-radius: 8px; 
	border: 3px solid #aaa; 
	color: #FFF; 
	cursor: pointer; 
	padding: 4px;
}
.class01:hover {
    font: bold arial, helvetica, sans-aerif;
	background-color: #09EF15;
	color: #009900;
	font-weight: bold;
}

.class02 {
    font: bold arial, helvetica, sans-aerif;
	font-weight: bold;
	background-color: #ffffff; 
	border-radius: 8px; 
	border: 3px solid #ffffff; 
	color: #000000; 
	cursor: pointer; 
	padding: 4px;
}
.class02:hover {
    font: bold arial, helvetica, sans-aerif;
	background-color: #000000;
	border-radius: 8px; 
	border: 3px solid #00CED1;
	color: #ffffff;
	font-weight: bold;
}

.class03 {
    font: bold arial, helvetica, sans-aerif;
	font-weight: bold;
	background-color: #1328c9; 
	border-radius: 8px; 
	border: 3px solid #00ff00; 
	color: #FFF; 
	cursor: pointer; 
	padding: 4px;
}
.class03:hover {
    font: bold arial, helvetica, sans-aerif;
	background-color: #000000;
	color: #ffcc00;
	font-weight: bold;
}

#div01 {
	color: #000;
	font-size: 40px;
	font-weight: bold;
	height: 100px;
	position: absolute;
	top: 40px;
	left: 50px;
	width: 100px;
}


.style1 {font-size: 18px;
	font-weight: bold;
	color: #ffffff;
}
.style2 {
	font-size: 20px;
	color: #ffffff;
	font-weight: bold;
}
.style3 {font-size: 35px;
	font-weight: bold;
	color: #ffffff;
}
.style4 {font-size: 18px}
.style5 {
	color: #0000FF;
	font-weight: bold;
	font-size: 10px;
}
.style6 {color: #FF0000}
.style7 {
	font-size: 9px;
	font-weight: bold;
}
.style8 {font-size: 9px}
.style9 {color: #000000;
	font-weight: bold;
	font-size: 12px; }
.style10 {font-weight: bold}
.style11 {font-size: 10px}
.style12 {
	font-size: 16px;
	font-weight: bold;
}
</style>
