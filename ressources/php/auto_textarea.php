<?php

    $languages = ['javascript', 'jquery', 'php'];
    echo('<p class="hidden">');
    foreach($languages as $language) {
        echo('<span id="' . $language . '-code">');
        if ($language === 'php') {
            $recoveredText = file('ressources/php/php_s' . $_GET['season'] . '/php_e' . $_GET['exercice'] . '.php', FILE_IGNORE_NEW_LINES);
        } else {
            $recoveredText = file('ressources/script/script_s' . $_GET['season'] . '/script_e' . $_GET['exercice'] . '.js', FILE_IGNORE_NEW_LINES);
        }
        $firstLine = array_search('// start ' . $language, $recoveredText) + 1;
        $lastLine = array_search('// end ' . $language, $recoveredText) - 1;
        for($line = $firstLine; $line < $lastLine; $line++) {
            echo($recoveredText[$line] .'
');
        }
        echo($recoveredText[$lastLine]);
        echo('</span>');
    }
    echo('</p>');

?>