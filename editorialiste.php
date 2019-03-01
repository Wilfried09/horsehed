<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Editorialiste</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
Bonjour<hr>

La table Journal

<table>
    <tr>
    <?php
        //$label_journal est un array contenant la liste des champs de la table Journal
        $len_label_journal=count($label_journal);
        foreach ($label_journal as $item){?>
            <th>$item</th><?php
        }
        ?>
        <th>ajouter</th>
        <th>modifier</th>
        <th>supprimer</th>
    </tr>
    <?php
    //$journal est un array contenant la liste des tuples de la table Journal
    for($i=0;$i<$len_label_journal;$i++){?>
        <td>$journal[$i]</td><?php
    }
    ?>
    <td><button>+</button></td>
    <td><button>-</button></td>
    <td><button>X</button></td>
</table>
</body>
</html>

