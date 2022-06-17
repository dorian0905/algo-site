<?php

/* Les habitants de Toon’sCity paient l’impôt selon les règles suivantes :
les hommes de plus de 20 ans paient l’impôt
les femmes paient l’impôt si elles ont entre 18 et 35 ans
les autres ne paient pas d’impôt
Le programme demandera donc l’âge et le sexe du Toon, et se prononcera donc ensuite sur le fait que l’habitant est imposable ou non. */

$pseudoCode = 'Variables age en Entier, gender en String
Début
    Lire age, gender
    Si ((age > 20 ET gender = "homme") OU (age > 18 ET age < 35 ET gender = "femme"))
        Retourner "L\'habitant est imposable"
    Sinon
        Retourner "L\'habitant n\'est pas imposable"
    Fin Si
Fin';

// start php
function fonction_php() {
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    if(($age > 20 && $gender == "Homme") || ($age > 18 && $age < 35 && $gender == "Femme")) {
        return 'L\'habitant est imposable';
    } else {
        return 'L\'habitant est non imposable';
    }  
}
// end php

echo('
<div class="form__element">
    <label class="form__element__label hidden" for="age">Age :</label>
    <input class="form__element__input hidden" type="number" name="age" id="age" value="' . (isset($_POST['submited']) ? $_POST['age'] : '') . '">
</div>
<div class="form__element">
    <label class="form__element__label hidden" for="gender">Genre :</label>
    <select class="form__element__input hidden" name="gender" id="gender" value="' . (isset($_POST['submited']) ? $_POST['gender'] : '') . '">
        <option>Femme</option>
        <option>Homme</option>
    </select>
</div>

');

?>