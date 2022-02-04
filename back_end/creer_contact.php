<?php

var_dump($_POST);
if (isset($_POST['creer_contact'])) {
    
    if (!empty($_POST['nom_contact']) && !empty($_POST['prenom_contact']) && !empty($_POST['tel_contact']) && !empty($_POST['email_contact'])) {
        
        $query = "INSERT INTO SALARIE (ID_SALARIE, ID_ENTREPRISE,NOM_SALARIE,PRENOM_SALARIE,TEL_SALARIE, EMAIL_SALARIE) VALUES (:nom_contact,:prenom_contact,:tel_contact,:email_contact);";
    
            $stmt = $db->prepare($query);
            $stmt->bindValue(':nom_contact', $_SESSION['nom_contact'], PDO::PARAM_INT);
            $stmt->bindValue(':prenom_contact', $_POST['prenom_contact'], PDO::PARAM_INT);
            $stmt->bindValue(':tel_contact', $_POST['tel_contact'], PDO::PARAM_STR);
            $stmt->bindValue(':email_contact', $_POST['email_contact'], PDO::PARAM_STR);

        try {    
              $stmt->execute();
             header("refresh:1; ..front_end\Creer_contact.php");
        } 
        catch    (Exception $e){
            echo $message ;
            $message= $e;
            $success = false;
            $message ="pas d'ajout.";
        }
    } 
}