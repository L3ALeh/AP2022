<?php
/**
 * NR le 24/12/2020
 * ce fichier permet de 
 *   . réaliser la connexion à la base de données
 *   . définir des fonctions à la base . ces fonctions n'ont pas été testées systématiquement, elles ne sont pas utilisées.
 **/
// il est INCLUS SYSTéMATQUEMENT lors de l'inclusion 
// de l'en-tête de toutes pages du site
// protection de la connexion par une exception pour afficher à l'utilisateur 
// un message d'erreur si la connexion n'a pas réussi n'a pas réussi
try {
    $db = new PDO('mysql:host=localhost; dbname=ppenr; port=3306', 'root', '');
}
// si la connexion à la BDR n'a pas été effectuée , 
//Avertissement de l'utilisateur cybersécurité???
catch(Exception $e) {
    die('Erreur '.$e->getMessage());
}

/**
 * Execute une requête $query via PDO
 *
 * @param $query  string La requête à
 *                exécuter
 * @param $params array Tableau associative pour l'utilisation de bindParam
 *                Ex: [':etudiant_id' => 2, ':entreprise_id' => 10]
 */
