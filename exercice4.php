##Exercice 4 Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :

    Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
    Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
    Les deux nombres sont identiques si les deux nombres sont égaux.

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    function nombres ($a,$b) {
        if ($a>$b){
        echo "Le premier nombre est plus grand que le deuxième";
        }
        else if ($a<$b){
        echo "Le premier nombre est plus petit que le deuxième";
        }
        else if ($a==$b){
        echo "coucou Les deux nombres sont identiques";
        }
    };
    nombres (5,5);

    ?>
</body>
</html>