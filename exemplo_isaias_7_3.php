<html>
<Head>
<meta charset="utf-8">
<title>EXEMPLOS DE PHP</title>
</Head>
<body>
<center>
<h1>EXEMPLO 7.3 DO ISAÍAS</h1>
</center>
<?php
$altura=1.58;
$peso=62;
$imc=$peso/($altura*$altura);
if($imc<18.5){
echo ($imc+" classificação magreza");
}else if(($imc>18.5)&&($imc<24.9)){
echo ($imc+" classificação saudável");
}else if(($imc>25.0)&&($imc<29.9)){
echo ($imc+" classificação sobrepeso");
}else if(($imc>30.0)&&($imc<39.9)){
echo ($imc+" classificação obesidade grau 1");
}else if(($imc>35.0)&&($imc<39.9)){
echo ($imc+" classificação obesidade grau 2");
}else if($imc>=40){
echo($imc+" classificação obesidade grau 3(mórbida)");
}
?>
</body>
</html>
