<?php
// restrictions d'affichage des champs extra relatifs aux volumes
// voir http://www.spip-contrib.net/Champs-Extras-2
 include_spip('inc/cextras_autoriser');
// restreindre les champs disponiblite, presentation' et 'presentation_marge des articles sur les rubriques 194, 230 (volumes 1 et 2), même  chose pour les champs surtitre et soustitre des rubriques.
 restreindre_extras('article', array('disponibilite','presentation','presentation_marge'), array(194,230));
 restreindre_extras('rubrique', array('surtitre','soustitre','pres','pres_marge','dispo'), array(194,230,236,237));


function nom_mois_court($numdate){
        $tableau_mois = array (
        "01"=>"janv.",
        "02"=>"f&eacute;v.",
        "03"=>"mar.",
        "04"=>"avr.",
        "05"=>"mai",
        "06"=>"juin",
        "07"=>"juil.",
        "08"=>"ao&ucirc;t",
        "09"=>"sept.",
        "10"=>"oct.",
        "11"=>"nov.",
        "12"=>"d&eacute;c."
        );
        return $tableau_mois[affdate_base($numdate, 'mois')];
}

?>