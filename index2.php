<?php
function main() {
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
    $letter_morse = array_flip($morse_code);

    function translate($txt, $morse_code, $letter_morse) {
        if ($txt == "") {
            echo "No se ingresó ningún texto";
        } else {
            $regex = "/^[A-Za-z0-9 ]+$/";

            if (preg_match($regex, $txt)) {
                $txt = strtoupper($txt);
                // si son letras
                for ($i = 0; $i < strlen($txt); $i++) {
                    if ($txt[$i] == " ") {
                        echo " ";
                    } else {
                        echo $morse_code[$txt[$i]] . " ";
                    }
                }
            } else {
                // si son morse
                $txt = explode(" ", $txt);
                foreach ($txt as $value) {
                    if ($value == "") {
                        echo " ";
                    } else {
                        echo $letter_morse[$value];
                    }
                }
            }
        }
    }

    translate("hola mundo que tal", $morse_code, $letter_morse);
}

main();
?>