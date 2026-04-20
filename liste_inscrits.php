<?php
require 'config.php';

$conn = openDb();

$sql = "SELECT * FROM inscriptions ORDER BY date_inscription DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste des Inscrits</title>
  <link rel="stylesheet" href="style/site.css">
  <script src="script/site.js" defer></script>
</head>
<body>
  <header class="site-header">
    <div class="brand">
      <a href="index.php" class="brand-logo"><img src="img/aa1.png" alt="Logo ESIM YOPOUGON"></a>
      <div>
        <p class="brand-label">Liste des inscrits</p>
        <h1>Suivi des candidatures</h1>
      </div>
    </div>
    <button class="nav-toggle" aria-label="Menu" type="button"><span></span></button>
    <nav class="site-nav">
      <a href="index.php">Accueil</a>
      <a href="apropos.php">À propos</a>
      <div class="nav-dropdown">
        <button type="button">Nos filières ▾</button>
        <div class="dropdown-panel">
          <a href="info1.php">Filières industrielles</a>
          <a href="info2.php">Filières tertiaires</a>
        </div>
      </div>
      <a href="inscription.php" class="button-secondary">S'inscrire</a>
    </nav>
  </header>

  <main class="main">
    <section class="section">
      <div class="section-head">
        <span>Inscriptions</span>
        <h2>Liste des candidatures enregistrées</h2>
      </div>
      <div class="table-responsive">
        <table>
          <thead>
            <tr>
              <th>Nom</th>
              <th>Prénom</th>
              <th>Email</th>
              <th>Ville</th>
              <th>Naissance</th>
              <th>Filière</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>"
                        . "<td>" . htmlspecialchars($row['nom']) . "</td>"
                        . "<td>" . htmlspecialchars($row['prenom']) . "</td>"
                        . "<td>" . htmlspecialchars($row['email']) . "</td>"
                        . "<td>" . htmlspecialchars($row['ville']) . "</td>"
                        . "<td>" . htmlspecialchars($row['date_naissance']) . "</td>"
                        . "<td>" . htmlspecialchars($row['filiere']) . "</td>"
                        . "<td>" . htmlspecialchars($row['date_inscription']) . "</td>"
                        . "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>Aucun inscrit</td></tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </section>
  </main>

  <footer class="footer main">
    <div class="footer-grid">
      <div>
        <h3>ESIM YOPOUGON</h3>
        <p>Suivi des candidatures et gestion des inscriptions.</p>
      </div>
      <div>
        <h3>Accès rapide</h3>
        <ul>
          <li><a href="inscription.php">S'inscrire</a></li>
          <li><a href="index.php">Accueil</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© 2026 ESIM YOPOUGON</span>
      <span>Liste des inscrits</span>
    </div>
  </footer>
</body>
</html>
<?php $conn->close(); ?>
