<?php
require_once "exercicioPratico06.html";
function teste($num){
$num= $_POST["n"];
$opc= $_POST["opc"];
if($opc=="Opção1"){
if($num==5 or $num==7 or $num==2 or $num==3 or $num==1){
echo "O número é primo";
}
if($num%2==1 or $num%3==1){
echo "O número é primo.";
}if($num%2==0 or $num%2==0){
echo "O número não é primo.";
}
}

if($opc=="Opção2"){
if($num%2==0){
echo "O numero é par.";
}
if($num%2==1){
echo "O numero é impar.";
}
}
}
teste($num);

?>