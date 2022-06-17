<?php
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ressources/css/style.css">
    <link rel="icon" href="/ressources/img/flavion.png">
    <script src="ressources/script/script_home.js" defer></script>
    <script src="/particles/particles.js"></script>
    <title>ALGORITHMIQUE - ACCUEIL</title>
</head>
<body>
    <div id="particles-js"></div>
    <div class="window window--home">
        <header class="hero">
            <h1>ALGORITHMIQUE</h1>
        </header>
        <main>
            <nav class="seasons-navigation">
                <ul class="seasons-navigation__list">
                    <?php
                        echo('<p id="activatedSeason" class="hidden">');
                        if(isset($_GET['season'])) {
                            echo($_GET['season']);
                        }
                        echo('</p>');
                        // Boucle permettant l'affichage des boutons de selection de saison en fonction du nombre de saisons existantes dans le fichier data.php
                        include_once('ressources/php/data.php');
                        foreach($seasonsData as $key => $season) {
                            echo('
                            <li class="seasons-navigation__list__item">
                                <p id="button-season' . ($key + 1) . '" class="seasons-navigation__list__item__text" onClick="seasonSelect(' . ($key + 1) . ')">S' . ($key + 1) . '</p>
                            </li>
                            ');
                        }
                    ?>
                </ul>
            </nav>
            <div class="articles-container">
                <p id="home-message" class="empty-content">Sélectionner une saison pour afficher les exercices correspondants.</p>
                <?php
                    // Affichage en CACHE de chaque exercice saison par saison en fonction de ce qui existe dans data.php
                    // Récupération du title et de la description.
                    foreach($seasonsData as $seasonKey => $season) {
                        foreach($season as $exerciceKey => $exercice) {
                            echo('
                            <article class="article season' . ($seasonKey + 1) . ' hidden" onClick="exerciceSelect(' . ($seasonKey + 1) . ', ' . ($exerciceKey + 1) . ')">
                                <div class="article__content">
                                    <h2 class="article__content__title">' . $exercice['title'] . '</h2>
                                    <p class="article__content__description">' . $exercice['description'] . '</p>
                                </div>
                            </article>
                            ');
                        }
                    }
                ?>
            </div>
        </main>
    </div>
    <footer>
        <a href="http://www.afpa.fr" target="_blank">AFPA</a>
    </footer>
    <script>
        particlesJS.load('particles-js', 'particles/particlesjs-config.json', function() {});
    </script>
</body>
</html>