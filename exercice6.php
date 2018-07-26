##Exercice 6 Faire une fonction qui prend trois paramètres : nom, prenom et age. Elle doit renvoyer une chaine de la forme :
"Bonjour" + nom + prenom + ",tu as" + age + "ans".

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

 <?php
 function personne($nom,$prenom,$age){
 echo"$nom.$prenom.$age";
  }
 personne("Bonjour"." "."machin"." "."truc"." ".",tu as "."25"."ans");

 ?>
</body>
</html>
