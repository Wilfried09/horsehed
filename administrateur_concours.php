<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Administrateur de concours</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
Bonjour<hr>

La table Concours

<table>
    <tr>
        <?php
        //$label_concours est un array contenant la liste des champs de la table Concours
        $len_label_concours=count($label_concours);
        foreach ($label_concours as $item){?>
            <th>$item</th><?php
        }
        ?>
        <th>ajouter</th>
        <th>modifier</th>
        <th>supprimer</th>
    </tr>
    <?php
    //$concours est un array contenant la liste des tuples de la table Journal
    for($i=0;$i<$len_label_concours;$i++){?>
        <td>$concours[$i]</td><?php
    }
    ?>
    <td><button>+</button></td>
    <td><button>-</button></td>
    <td><button>X</button></td>
</table>
</body>
</html>
