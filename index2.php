<?php
function main(){

    
    $morse_code = array(
        "A" => ".-",
        "B" => "-...",
        "C" => "-.-.",
        "D" => "-..",
        "E" => ".",
        "F" => "..-.",
        "G" => "--.",
        "H" => "....",
        "I" => "..",
        "J" => ".---",
        "K" => "-.-",
        "L" => ".-..",
        "M" => "--",
        "N" => "-.",
        "O" => "---",
        "P" => ".--.",
        "Q" => "--.-",
        "R" => ".-.",
        "S" => "...",
        "T" => "-",
        "U" => "..-",
        "V" => "...-",
        "W" => ".--",
        "X" => "-..-",
        "Y" => "-.--",
        "Z" => "--..",
        "0" => "-----",
        "1" => ".----",
        "2" => "..---",
        "3" => "...--",
        "4" => "....-",
        "5" => ".....",
        "6" => "-....",
        "7" => "--...",
        "8" => "---..",
        "9" => "----.",
        " " => " "
    );
    function translate($txt, $morse_code){
        $regex = "/^[A-Za-z0-9 ]+$/";

        if(preg_match($regex,$txt)){
            $txt = strtoupper($txt);
            //si son letras__
            for($i=0;$i<strlen($txt);$i++){
                if($txt[$i] == " "){
                    echo " ";
                }
echo $txt[$i] . " => ". $morse_code[$txt[$i]] . "<br>";
            }
        }else{
            foreach($morse_code as $letter => $morse ){
                echo $txt. "=>" ."<br>";
            }
        }
    }
    translate("..---", $morse_code);
}

main();