<?php
    session_start();
    if(!isset($_SESSION['continue'])) {
        $_SESSION['continue'] = false;
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ressources/css/style.css">
    <link rel="icon" href="/ressources/img/flavion.png">
    <script src="ressources/script/jquery-3.4.1.min.js"></script>
    <script src="ressources/lib/codemirror/lib/codemirror.js"></script>
    <link rel="stylesheet" href="ressources/lib/codemirror/lib/codemirror.css">
    <link rel="stylesheet" href="ressources/lib/codemirror/theme/material.css">
    <script src="ressources/lib/codemirror/mode/javascript/javascript.js"></script>
    <script src="/particles/particles.js"></script>
    <!-- Récupération du fichier JS en fonction de l'exercice sélectionné -->
    <script src="ressources/script/<?php echo('script_s' . $_GET['season'] . '/script_e' . $_GET['exercice']); ?>.js"></script>
    <script src="ressources/script/script_exercice.js" defer></script>
    <title>ALGORITHMIQUE - EXERCICE</title>
</head>
<body>
    <div id="particles-js"></div>
    <div class="window window--exercice">
        <header>
            <a class="return-link" href="index.php?season=<?php echo($_GET['season']); ?>">
                <img class="return-link__image" src="ressources/img/left_arrow.png" alt="Flèche gauche">
                <p class="return-link__text">Retour</p>
            </a>
            <?php
                // Ecriture du title et de la description automatique depuis data.php en fonction de l'exercice selectionné via méthode GET
                include_once('ressources/php/data.php');
                echo('
                <h1 class="exercice-title">' . $seasonsData[$_GET['season']-1][$_GET['exercice']-1]['title'] . '</h1>
                <h2 class="exercice-description">' . $seasonsData[$_GET['season']-1][$_GET['exercice']-1]['description'] . '</h2>
                ')
            ?>
        </header>
        <main>
            <div class="textarea-container">
                <div class="textarea-container__element">
                    <label class="textarea-container__element__label" for="pseudocode">Pseudocode :</label>
                    <textarea class="textarea-container__element__textarea" name="pseudocode" id="pseudocode" cols="30" rows="10" spellcheck="false"></textarea>
                </div>
                <div class="textarea-container__element">
                    <label class="textarea-container__element__label" for="code">Code :</label>
                    <textarea class="textarea-container__element__textarea" name="code" id="code" cols="30" rows="10" spellcheck="false">// Sélectionnez un langage pour visualiser le code associé.</textarea>
                    <div class="textarea-container__element__buttons-container">
                        <div class="textarea-container__element__buttons-container__button" onClick="display('javascript')">
                            <div id="button-javascript" class="textarea-container__element__buttons-container__button__interior">
                                <img src="ressources/img/logo_js.png" alt="Logo JavaScript">
                            </div>
                        </div>
                        <div class="textarea-container__element__buttons-container__button" onClick="display('jquery')">
                            <div id="button-jquery" class="textarea-container__element__buttons-container__button__interior">
                                <img src="ressources/img/logo_jquery.png" alt="Logo jQuery">
                            </div>
                        </div>
                        <div class="textarea-container__element__buttons-container__button" onClick="display('php')">
                            <div id="button-php" class="textarea-container__element__buttons-container__button__interior">
                                <img src="ressources/img/logo_php.png" alt="Logo PHP">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                // Ajout des codes des différents langages en hidden
                include_once('ressources/php/auto_textarea.php');
            ?>
            <form class="form" id="form" method="POST" action="exercice.php?season=<?php echo($_GET['season']); ?>&exercice=<?php echo($_GET['exercice']); ?>" onkeydown="return event.key != 'Enter';">
                <!-- Conservation de l'exercice selectionné lors de la résolution en php -->
                <input type="hidden" name="submited" value="1">
                <?php
                    // Ajout des possibles input nécessaires à l'exercice, du pseudocode, et de la fonction PHP
                    include_once('ressources/php/php_s' . $_GET['season'] . '/php_e' . $_GET['exercice'] . '.php');
                ?>
            </form>
            <div id="solution-display">
                <?php
                    // Execution de la fonction php si envoi du formulaire ($_POST[submit] existe ?)
                    if(isset($_POST['submited'])) {
                        echo(fonction_php());
                    }
                ?>
            </div>
            
            <?php
            // Ecriture du pseudocode en hidden pour le retranscrir dans le textarea via JS
            echo('<p id="hidden-pseudocode" class="hidden">' . $pseudoCode . '</p>');
            // Vérification php lancé
            echo('<p id="activatedPhp" class="hidden">' . (isset($_POST['submited']) ? '1' : '') . '</p>');
            // Verification de nécessité de non désactivation et cachage des elements du form
            echo('<p id="restrictedForm" class="hidden">' . ($_SESSION['continue'] ? '1' : '') . '</p>');
            ?>

            <div id="run-button" class="run-button hidden" onClick="run()">
                <p class="run-button__text">EXECUTER</p>
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