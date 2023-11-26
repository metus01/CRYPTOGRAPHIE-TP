# Application de Chiffrement César

Cette application C++ implémente le chiffrement César pour le cryptage et le décryptage de texte. Le chiffrement César est une méthode de substitution où chaque lettre du texte en clair est décalée d'un certain nombre de positions dans l'alphabet.

## Table des matières

- [Application de Chiffrement César](#application-de-chiffrement-césar)
  - [Table des matières](#table-des-matières)
  - [Description](#description)
  - [Installation](#installation)
  - [Utilisation](#utilisation)
    - [Code de la Fenêtre Principale](#code-de-la-fenêtre-principale)
  - [Auteur](#auteur)

## Description

L'application utilise une interface utilisateur graphique (GUI) créée avec Qt et comprend une fenêtre principale avec deux onglets : un pour le chiffrement (`Chiffrement`) et l'autre pour le déchiffrement (`Déchiffrement`).

Le code pertinent pour la classe de la fenêtre principale (`MainWindow`) est fourni dans le fichier `mainwindow.cpp`. Il inclut des fonctions pour gérer les clics de bouton et effectuer les opérations de chiffrement César.

## Installation

Pour utiliser cette application, vous devez avoir Qt installé sur votre système. Vous pouvez télécharger et installer Qt depuis [https://www.qt.io/download](https://www.qt.io/download).

Une fois Qt installé, vous pouvez ouvrir le fichier du projet dans Qt Creator et construire l'application.

```bash
qmake
make
```

## Utilisation

1. Lancez l'application.
2. Accédez à l'onglet `Chiffrement` pour le cryptage ou à l'onglet `Déchiffrement` pour le décryptage.
3. Entrez le texte dans le champ d'entrée.
4. Définissez la valeur de décalage à l'aide de la boîte de sélection.
5. Cliquez sur le bouton correspondant (`Chiffrer` pour le cryptage ou `Déchiffrer` pour le décryptage).
6. Visualisez le résultat dans le champ de sortie.

### Code de la Fenêtre Principale

```cpp
#include "mainwindow.h"
#include "ui_mainwindow.h"

MainWindow::MainWindow(QWidget *parent) :
    QMainWindow(parent),
    ui(new Ui::MainWindow)
{
    // ... (code du constructeur)
}

MainWindow::~MainWindow()
{
    // ... (code du destructeur)
}

// ... (autres fonctions, y compris l'implémentation du chiffrement César)

```

## Auteur 
[ Métus Carnel M. GBOGBOHOUNDADA ]
Étudiant en 3ième année de licence en Informatique de Gestion spécialité  Administration des Réseaux Informatiques à l'ENEAM à l'UAC.
