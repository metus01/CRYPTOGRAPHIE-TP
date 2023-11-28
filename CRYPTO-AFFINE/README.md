

---

# Chiffrement et déchiffrement affine en PHP

Ce fichier PHP propose des fonctions pour le chiffrement et le déchiffrement de messages en utilisant la méthode de chiffrement affine.

## Prérequis

- **PHP** : Assurez-vous d'avoir PHP installé sur votre système. Vous pouvez vérifier cela en ouvrant un terminal (ou une invite de commande) et en tapant `php -v`. Si PHP est installé, vous verrez la version installée.

## Installation

1. Téléchargez ou clonez ce fichier PHP dans un répertoire sur votre système.
2. Aucune installation spécifique n'est requise pour exécuter ce fichier. Assurez-vous simplement d'avoir PHP installé et fonctionnel sur votre machine.

## Exécution du programme

- Ouvrez un terminal (ou une invite de commande) et naviguez jusqu'au répertoire où se trouve le fichier PHP.
- Utilisez la commande suivante pour exécuter le programme :

```bash
php nom_du_fichier.php
```

Remplacez `nom_du_fichier.php` par le nom réel du fichier où se trouvent les fonctions de chiffrement et de déchiffrement.

## Utilisation

Les fonctions fournies permettent de chiffrer et de déchiffrer des messages à l'aide de la méthode de chiffrement affine.

### Exemple d'utilisation

Modifiez les valeurs de `$a`, `$b`, et `$message` dans le code pour expérimenter avec vos propres messages et clés de chiffrement.

```php
$a = 5;
$b = 3;
$message = " CODONS VIVANT ";

// Chiffrement
$encrypt = chiffrement_affine($message, $a, $b);
echo "Message chiffré : " . $encrypt . "\n";

// Déchiffrement
$decrypt_message = dechiffrment_affine($encrypt, $a , $b);
echo "Message déchiffré : " . $decrypt_message . "\n";
```

## Notes supplémentaires

- Ces fonctions ne sont qu'une implémentation de base du chiffrement affine et ne doivent pas être utilisées pour des communications sensibles ou des données critiques.
- Assurez-vous de comprendre le code avant de l'utiliser dans des applications réelles.
- Il est recommandé de consulter des ressources supplémentaires pour approfondir la compréhension du chiffrement affine et son application.

---
