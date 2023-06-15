
<!DOCTYPE html>
<html>
<head>
    <title>Laissez-nous un avis</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    <div class="container">
        <h1>Laissez-nous un avis</h1>
        <form action="traitement.php" method="POST">
            <div class="input-group">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" placeholder="Votre nom">
            </div>
            <div class="input-group">
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" placeholder="Votre prénom">
            </div>
             <div class="input-group">
                <label for="date_naissance">date de naissance</label>
                <input type="text" id="date_naissance" name="date_naissance" placeholder="Votre date de naissance">
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Votre email">
            </div>
            <div class="input-group">
                <label for="telephone">Téléphone</label>
                <input type="text" id="telephone" name="telephone" placeholder="Votre numéro de téléphone">
            </div>
            <div class="input-group">
                <label for="pays">Pays</label>
                <input type="text" id="pays" name="pays" placeholder="Votre pays">
            </div>
            <div class="avis">
                <h2>Postez votre avis</h2>
                <textarea id="avis" name="avis" placeholder="Votre avis"></textarea>
                <button type="submit">Poster votre avis</button>
            </div>
          
        </form>
        
    </div>
</body>
</html>



