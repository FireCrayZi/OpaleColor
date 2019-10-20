<?php


$errors = [];
// verification du champ remplis ou non 
if(!array_key_exists('nom', $_POST) || $_POST['nom'] == ''){
    $errors['nom'] = "Vous n'avez pas renseigné votre nom";
}
if(!array_key_exists('prenom', $_POST) || $_POST['prenom'] == ''){
    $errors['prenom'] = "Vous n'avez pas renseigné votre prenom";
}
if(!array_key_exists('activite', $_POST) || $_POST['activite'] == ''){
    $errors['activite'] = "Vous n'avez pas renseigné votre activité";
}
if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors['email'] = "Vous n'avez pas renseigné un  email valide";
}
if(!array_key_exists('telephone', $_POST) || $_POST['telephone'] == ''){
    $errors['telephone'] = "Vous n'avez pas renseigné votre numéro de telephone";
}
if(!array_key_exists('message', $_POST) || $_POST['message'] == ''){
    $errors['message'] = "Vous n'avez pas indiquer de message";
}
session_start();
if(!empty($errors)){

    // stockage de l'erreur dans la session puis renvoie sur la page de contact avec les erreurs
    $_SESSION['errors'] =  $errors;
    $_SESSION['inputs'] =  $_POST;
    header('Location: contact.php');

} else {
// SUCCESS du formulaire puis envoie au mail 
    $_SESSION['success'] = 1;
    $headers = 'FROM: ' . $_POST['email'];
    $pl =  "\r\n";
    mail('theo.guerinot2@gmail.com', 'Formulaire de contact de  ' . $_POST['nom'] . ' ' . $_POST['prenom'],
    'Mon message est: ' . $_POST['message'] . $pl . 'Je suis un(e) ' . $_POST['activite'] . $pl . 
    'Mon numéro de téléphone est: ' . $_POST['telephone'], $headers);    
    header('Location: contact.php');

}




?>
