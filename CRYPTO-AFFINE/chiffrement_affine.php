<?php
// chiffrement

function chiffrement_affine(string $message, int $a,  int $b)
{
    $encrypt_message = "";
    foreach (str_split($message) as $c) {
        if (ctype_alpha($c)) {
            $first_letter = ctype_upper($c) ? 'A' : 'a';
            $encrypt_message .= chr(($a * (ord($c) - ord($first_letter)) + $b) % 26 + ord($first_letter));
        } else {
            $encrypt_message .= $c;
        }
    }
    return $encrypt_message;
}

// dechiffrement

function dechiffrment_affine(string $message, int $a, int $b)
{
    $decrypt_message = "";
    $inverse_of_a = 0;
    while (($a * $inverse_of_a) % 26 != 1) {
        $inverse_of_a++;
    }
    foreach (str_split($message)  as $c) {
        if ($c == "") {
            $decrypt_message .= "";
        } else {
            $y = ord($c) - ord('A');
            $decrypt_char = chr((($inverse_of_a * ($y - $b + 26)) % 26) + ord('A'));
            $decrypt_message .= $decrypt_char;
        }
    }
    return $decrypt_message;
}
// exemple d'utilisation 

$a = 5;
$b = 3;

$message = " CODONS VIVANT ";
echo "Message : " . $message;

echo $encrypt =  chiffrement_affine($message, $a, $b);

echo $decrypt_message = dechiffrment_affine($encrypt, $a , $b);
