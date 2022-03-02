<?php
/*  echo'<pre>';
var_dump($_SERVER); //permet d'afficher les informations du serveur
echo'</pre>'; */ 

 /**
* Chemin sur dossier racine du projet
*/
define("ROOT",str_replace("public".DIRECTORY_SEPARATOR."index.php","",$_SERVER['SCRIPT_FILENAME']));

define("DOSSIER_PUBLIC",str_replace("index.php","",$_SERVER['SCRIPT_NAME']));
/* var_dump(DOSSIER_PUBLIC); */

/* echo'<pre>';
var_dump(ROOT); //permet d'afficher les informations du serveur
echo'</pre>'; */
/* die */

/**
* Chemin sur dossier src qui contient les controllers et les modeles
*/
define("PATH_SRC",ROOT."src".DIRECTORY_SEPARATOR);
/**
* Chemin sur dossier templates du projet
*/
define("PATH_VIEWS",ROOT."templates".DIRECTORY_SEPARATOR);
/**
* Chemin sur data qui contient le fichier Json db.json
*/
define("PATH_DB",ROOT."data".DIRECTORY_SEPARATOR."db.json");

/* c'est ici qu'on envoie tous requet GET ou POST */

define("WEB_ROOT","http://localhost:8181/");
//cle  d'erreurs
define("KEY_ERRORS","errors");
//cle d'acces a l'utilisateurs
define("KEY_USER_CONNECT","user-connect");
