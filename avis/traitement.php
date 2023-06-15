
<?php


function traiterFormulaire($nom, $prenom, $email, $dateNaissance,$telephone) {
    // Vérifier si les champs obligatoires sont vides
  
    if (empty($nom) || empty($prenom) || empty($email) || empty($dateNaissance)) {
        echo "Veuillez remplir tous les champs obligatoires.";
        
        return;
    }

    // Vérifier si le nom et le prénom ne contiennent que des lettres
    if (!preg_match('/^[a-zA-Z]+$/', $nom) || !preg_match('/^[a-zA-Z]+$/', $prenom)) {
        echo "Le nom et le prénom ne doivent contenir que des lettres.";
      
        return;
    }

    // Vérifier si la date de naissance est dans le format "jj/mm/aaaa"
    $dateNaissanceArr = explode('/', $dateNaissance);
    if (count($dateNaissanceArr) !== 3 || !checkdate($dateNaissanceArr[1], $dateNaissanceArr[0], $dateNaissanceArr[2])) {
        echo "Veuillez fournir une date de naissance valide au format 'jj/mm/aaaa'.";
      
        return ;
    }

    // Vérifier si l'adresse email est valide
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Veuillez fournir une adresse email valide.";
     
        return;
    }

    if (!preg_match('/^[0-9]+$/',$telephone)) {
        echo "Veuillez fournir un numero de telephone valide.";

        return;
    }

    return True;

    
}


$nom = trim($_POST['nom']);
$prenom = trim($_POST['prenom']);
$datenaissance = trim($_POST['date_naissance']);
$email = trim($_POST['email']);
$telephone = trim($_POST['telephone']);
$pays = trim($_POST['pays']);
$avis = trim($_POST['avis']);

$host = "localhost";
$username = "id20169362_bahsine";
$password = "BAhsine.1998";
$dbname = "id20169362_bahsine" ;

$validation = traiterFormulaire($nom, $prenom, $email, $datenaissance,$telephone);
if ($validation==True){
        // Connexion à la base de données
        $connexion = new mysqli($host, $username, $password, $dbname);

        // Vérification des erreurs de connexion
        if ($connexion->connect_error) {
            die("Échec de la connexion à la base de données : " . $connexion->connect_error);
        }else {
            $requete = "INSERT INTO avis (nom, prenom, date_naissance, email, telephone, pays, avis)
            VALUES ('$nom','$prenom','$datenaissance','$email','$telephone','$pays','$avis')";
            $result = mysqli_query($connexion,$requete);
            if ($result){
                echo "votre avis est bien enregistrer";
                header("Location: avis.php");
                exit;

            } else {
                echo "Erreur lors de l'insertion : " . mysqli_error($connexion);
            }
         
        }


}else {
    echo $validation;
   
}

?>
