<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo2phpP2</title>
</head>

<body>
    <p><?php
        $gender = 'homme';
        $age = 18;


        if ($age >= 18 and $gender == "homme" OR $gender == "femme") {
            echo "Vous êtes un homme et vous êtes Majeur! <br/>";
            echo "Vous êtes une femme et vous êtes Majeur! <br/>" ;
            
        }
        
        if ($age <= 18 and $gender == "homme" OR $gender == 'femme') {
            echo "Vous êtes un homme et vous êtes Mineur! <br/>";
            echo "Vous êtes une femme et vous êtes Mineur!";
        }

        
        else // SINON
        {
            echo " ";
            $gender = false;
        }

        ?>
    </p>

</body>

</html>