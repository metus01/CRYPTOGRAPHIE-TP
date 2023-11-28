<?php

// Fonction pour créer la table de substitution
function createSubstitutionTable(string $key)
{
    $alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $substitutionTable = "";

    foreach (str_split($key) as $c) {
        $alphabet = str_replace($c, '', $alphabet);
        $substitutionTable .= $c;
    }

    $exit = $substitutionTable . $alphabet;
    return strrev($exit);
}

// Fonction pour chiffrer un message
function encryptMessage($message, $key)
{
    $substitutionTable = createSubstitutionTable($key);
    $table = strrev($substitutionTable);
    $encryptedMessage = "";

    foreach (str_split($message) as $c) {
        if (ctype_alpha($c)) {
            $index = strpos($table, strtoupper($c));
            if ($index >= 0) {
                $encryptedMessage .= ctype_lower($c) ? strtolower($substitutionTable[$index]) : $substitutionTable[$index];
            } else {
                $encryptedMessage .= $c; // Laisser les caractères spéciaux ou non alphabétiques tels quels
            }
        } else {
            $encryptedMessage .= $c; // Laisser les caractères spéciaux ou non alphabétiques tels quels
        }
    }

    return $encryptedMessage;
}

// Fonction pour déchiffrer un message
function decryptMessage($encryptedMessage, $key)
{
    $substitutionTable = createSubstitutionTable($key);
    $table = strrev($substitutionTable);
    $decryptedMessage = "";

    foreach (str_split($encryptedMessage) as $c) {
        if (ctype_alpha($c)) {
            $index = strpos($substitutionTable, strtoupper($c));
            if ($index >= false) {
                $decryptedMessage .= ctype_lower($c) ? strtolower($table[$index]) : $table[$index];
            } else {
                $decryptedMessage .= $c; // Laisser les caractères spéciaux ou non alphabétiques tels quels
            }
        } else {
            $decryptedMessage .= $c; // Laisser les caractères spéciaux ou non alphabétiques tels quels
        }
    }

    return $decryptedMessage;
}

// Exemple d'utilisation
$key = "KEY"; // Clé pour la substitution
//$substitutionTable = createSubstitutionTable($key);

// Message à chiffrer
$message = "HELLO WORLD!";

// Chiffrer le message
$encryptedMessage = encryptMessage($message, $key);
echo "Message chiffré : " . $encryptedMessage . "\n"; 

// Déchiffrer le message chiffré
$decryptedMessage = decryptMessage($encryptedMessage, $key);
echo "Message déchiffré : " . $decryptedMessage . "\n";

