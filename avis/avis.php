<!DOCTYPE html>
<html>
<head>
    <title>Avis des utilisateurs</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Avis des utilisateurs</h1>    
    <?php

$username = "id20169362_bahsine";
$password = "BAhsine.1998";
$dbname = "id20169362_bahsine" ;
    // Connexion à la base de données
    $connexion = mysqli_connect('localhost', $username, $password, $dbname);

    // Vérification de la connexion
    if (!$connexion) {
        die("Erreur de connexion à la base de données: " . mysqli_connect_error());
    }

    // Récupération des avis depuis la base de données
    $requete = "SELECT nom,prenom,avis FROM avis";
    $resultat = mysqli_query($connexion, $requete);

    // Vérification du résultat de la requête
    if (mysqli_num_rows($resultat) > 0) {
        // Parcourir les avis et les afficher
        while ($row = mysqli_fetch_assoc($resultat)) {
            $nom = $row['nom'];
            $prenom = $row['prenom'];
            $avis = $row['avis'];

            echo '<div class="avis">';
            echo '<h2> Nom complet : ' . $nom . ' ' . $prenom . '</h2>';
            echo '<p> Avis : ' . $avis . '</p>';
            echo '</div>';
        }
    } else {
        echo '<p>Aucun avis disponible.</p>';
    }

    // Fermeture de la connexion à la base de données
    mysqli_close($connexion);
    ?>

</div>
</body>
</html>