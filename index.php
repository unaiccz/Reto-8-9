<?php


function namstrong($n){
    $n = trim($n);
$tct = strval($n);
$num_car = 0;
$suma_exp = 0;
for($i=0;$i<strlen($tct);$i++){
    $num_car +=1;
}
for($i=0;$i< $num_car;$i++){
    $power = pow(intval($tct[$i]),$num_car);
$suma_exp += $power;
echo $tct[$i].  "^ ". $num_car."=> ". $power . "<br>";

}
if($n == $suma_exp){
    echo  $n."  Es un numero de amstrong";
} else{
    echo $n."  No es un numero de amstrong";
}
}

function main(){
namstrong(8208);

}


main();