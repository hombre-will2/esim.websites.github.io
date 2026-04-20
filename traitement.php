<?php
require 'config.php';

$conn = openDb();

// Initialiser les variables
$image = "";
$message = "";

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $conn->real_escape_string($_POST['nom']);
    $prenom = $conn->real_escape_string($_POST['prenom']);
    $email = $conn->real_escape_string($_POST['email']);
    $ville = $conn->real_escape_string($_POST['ville']);
    $date_naissance = $conn->real_escape_string($_POST['dob']);
    $filiere = $conn->real_escape_string($_POST['filiere']);
    $password = $conn->real_escape_string($_POST['modpas']);

    // Requête SQL
    $sql = "INSERT INTO inscriptions (nom, prenom, email, ville, date_naissance, filiere, password) 
            VALUES ('$nom', '$prenom', '$email', '$ville', '$date_naissance', '$filiere', '$password')";

    if ($conn->query($sql) === TRUE) {
        $message = "Inscription Réussie !";
        $image = "img/cap.png"; // Ton chemin d’image
    } else {
        $message = "Erreur : " . $conn->error;
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Félicitation</title>
    <link rel="stylesheet" href="style/inscription.css">
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
    
        }
        .success-message {
            color: green;
            font-size: 24px;
            margin-top: 20px;
            text-transform: uppercase;
        }
        .image-container img {
            margin-top: 20vh;
            max-width: 200vh;
            margin-top: 2px;
        }
    </style>
</head>
<body>
<div class="btn-container">
    <a href="acceuil.php" class="btn btn-primary">Retourner à la page d'Accueil</a>
    <a href="liste_inscrits.php" class="btn btn-success">Voir les inscrits</a>
</div>
    <?php if ($message): ?>
        <p class="success-message"><?php echo $message; ?></p>
    <?php endif; ?>

    <?php if ($image): ?>
        <div class="image-container">
            <img src="<?php echo $image; ?>" alt="Image dynamique">
        </div>
    <?php endif; ?>
    <div class="dossier">
        <h2>dossiers a fournir</h2>
        <p>(01) Certificat de nationalité (original),</p>
        <p>(04) Extraits d'acte de naissance (original),</p>
        <p>(04) Photocopies de l'Attestation d'indentité de la CNI, du Passeport ou de la Carte Consulaire,</p>
        <p>Certificat de scolarité (pour les étudiants venant d'un autre établissement supérieur),</p>
        <p>(03) Photocopies du relevé de note du BAC / BT,</p>
        <p>(01) Photocopie dee la fiche d'autorisation d'inscription en Année Préparatoire (AP),</p>
        <p>(8) Photos d'Identité du même tirage,</p>
        <p>(01) Photocopies du dernier bulletin de terminale</p>
    </div>
</body>
</html>
