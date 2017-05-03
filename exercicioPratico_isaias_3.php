<title> isaías </title>
<?php
require_once "exercicioPratico04.html";
$n1= $_POST["n1"];
$n2= $_POST["n2"];
$n3= $_POST["n3"];
$m= ($n1+$n2+$n3)/3;
if($m<6){
echo "Sua nota é: ".$m." e você esta reprovado.";
}else{
echo "Sua nota é: ".$m." e você esta aprovado";
}


?>
