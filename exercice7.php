##Exercice 7 Faire une fonction qui prend deux paramètres : age et genre. Le paramètre genre peut prendre comme valeur :

    Homme
    Femme

La fonction doit renvoyer en fonction des paramètres :

    Vous êtes un homme et vous êtes majeur
    Vous êtes un homme et vous êtes mineur
    Vous êtes une femme et vous êtes majeur
    Vous êtes une femme et vous êtes mineur

Gérer tous les cas.

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    function  agegenre($genre="",$age=""){
        return "VOUS ETES $genre ET VOUS ETES $age.\n";
    }
    echo agegenre ("UN HOMME", "MAJEUR");
    echo agegenre ("UN HOMME", "MINEUR");
    echo agegenre ("UNE FEMME", "MAJEURE");
    echo agegenre ("UNE FEMME", "MINEURE");

    ?>
</body>
</html>