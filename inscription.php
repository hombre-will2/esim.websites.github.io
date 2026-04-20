<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>ESIM YOPOUGON - Inscription</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/site.css">
  <script src="script/site.js" defer></script>
</head>
<body>
  <header class="site-header">
    <div class="brand">
      <a href="index.php" class="brand-logo"><img src="img/aa1.png" alt="Logo ESIM YOPOUGON"></a>
      <div>
        <p class="brand-label">Inscription</p>
        <h1>Rejoignez ESIM</h1>
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
        <span>Inscription</span>
        <h2>Complétez votre dossier en ligne</h2>
      </div>
      <div class="program-grid">
        <article class="form-card">
          <h3>Formulaire d'inscription</h3>
          <p>Remplissez les informations pour réserver votre place.</p>
          <form action="traitement.php" method="POST">
            <div class="form-grid">
              <label for="nom">Nom</label>
              <input type="text" id="nom" name="nom" required>
              <label for="prenom">Prénom</label>
              <input type="text" id="prenom" name="prenom" required>
              <label for="email">Email</label>
              <input type="email" id="email" name="email" required>
              <label for="ville">Ville</label>
              <input type="text" id="ville" name="ville" required>
              <label for="dob">Date de naissance</label>
              <input type="date" id="dob" name="dob" required>
            </div>
            <div class="form-grid">
              <label for="password">Créer un mot de passe</label>
              <div class="password-wrapper">
                <input type="password" id="password" name="modpas" required>
                <button type="button" class="toggle-password" aria-label="Afficher le mot de passe"><svg style="width:1em;height:1em;display:inline-block" viewBox="0 0 24 24" fill="currentColor"><path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/></svg></button>
              </div>
              <label for="filiere">Sélectionnez une filière</label>
              <select id="filiere" name="filiere" required>
                <optgroup label="Filières Industrielles">
                  <option value="RIT">Réseaux Informatiques et Télécommunications</option>
                  <option value="IDA">Informatique Développeur d'Applications</option>
                  <option value="SEI">Systèmes Électroniques et Informations</option>
                  <option value="GBAT">Génie Civil option Bâtiment</option>
                  <option value="GTP">Génie Civil option Travaux Publics</option>
                  <option value="CV">Communication Visuelle</option>
                </optgroup>
                <optgroup label="Filières Tertiaires">
                  <option value="FCGE">Finance Comptabilité et Gestion d'Entreprises</option>
                  <option value="LOG">Logistique</option>
                  <option value="TH">Tourisme-Hôtellerie</option>
                  <option value="AD">Assistanat de Direction</option>
                  <option value="RHC">Ressources Humaines et Communication</option>
                  <option value="GEC">Gestion Commerciale</option>
                </optgroup>
              </select>
            </div>
            <button type="submit" class="button button-primary">Envoyer ma candidature</button>
          </form>
        </article>

        <aside class="info-cards">
          <article class="info-card">
            <span><svg style="width:1em;height:1em;display:inline-block" viewBox="0 0 24 24" fill="currentColor"><path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg></span>
            <h3>Dossier à fournir</h3>
            <p>Certificat de nationalité, extrait d'acte de naissance, pièces d'identité et relevés de notes.</p>
          </article>
          <article class="info-card">
            <span><svg style="width:1em;height:1em;display:inline-block" viewBox="0 0 24 24" fill="currentColor"><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/></svg></span>
            <h3>Pour les bacheliers</h3>
            <p>Des conditions d'admission claires pour garantir votre bonne intégration.</p>
          </article>
          <article class="info-card">
            <span><svg style="width:1em;height:1em;display:inline-block" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg></span>
            <h3>Accompagnement</h3>
            <p>Une équipe dédiée pour vous aider à finaliser votre inscription.</p>
          </article>
        </aside>
      </div>

      <section class="section section-white">
        <div class="section-head">
          <span>Conditions</span>
          <h2>Ce qu'il faut savoir avant de postuler</h2>
        </div>
        <div class="grid-3">
          <article class="info-card">
            <h3>Bacheliers affectés</h3>
            <p>Dossier complet et accompagnement personnalisé pour finaliser votre inscription.</p>
          </article>
          <article class="info-card">
            <h3>Bacheliers non affectés</h3>
            <p>Inscription ouverte aux candidats souhaitant reprendre leurs études.</p>
          </article>
          <article class="info-card">
            <h3>Critères d'admission</h3>
            <p>Niveau terminale ou équivalent, bac récent ou profil international.</p>
          </article>
        </div>
      </section>
    </section>
  </main>

  <footer class="footer main">
    <div class="footer-grid">
      <div>
        <h3>Besoin d'aide ?</h3>
        <p>Contactez-nous pour toute question sur votre dossier d'inscription.</p>
      </div>
      <div>
        <h3>Contact</h3>
        <ul>
          <li><svg style="width:1em;height:1em;display:inline-block;margin-right:0.5em;vertical-align:middle" viewBox="0 0 24 24" fill="currentColor"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>esimabidjan@gmail.com</li>
          <li><svg style="width:1em;height:1em;display:inline-block;margin-right:0.5em;vertical-align:middle" viewBox="0 0 24 24" fill="currentColor"><path d="M17 10.5V7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4z"/></svg>+225 01 52 70 54 80</li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© 2026 ESIM YOPOUGON</span>
    </div>
  </footer>
</body>
</html>
