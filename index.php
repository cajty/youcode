<?php
include("./Controllers/UerController.php");

$UserControl = new UerController();

if (isset($_GET['action'])) {
    $submit = $_GET['action'];
    switch ($submit) {
        case 'listFormateurs':
            $UserControl->listFormateurs();
            break;

        case 'listUsers':
            $UserControl->listUsers();
            break;

        case 'ajouterFormateur':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $nom = $_POST['nom'];

                $prenom = $_POST['prenom'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $id_class = $_POST['id_class'];

                $UserController->ajouterFormateur($nom, $prenom, $email, $password, $id_class);
            }
            break;
        case 'ajouterApprenant':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $id_class = $_POST['id_class'];

                $UserController->ajouterApprenant($nom, $prenom, $email, $password, $id_class);
            }
            break;






        case 'updateFormateur':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $id_utilisateur = $_POST['id_utilisateur'];
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $id_class = $_POST['id_class'];

                $UserController->updateFormateur($id_utilisateur, $nom, $prenom, $email, $password, $id_class);
            }
            break;


        case 'updateApprenant':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $id_utilisateur = $_POST['id_utilisateur'];
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $id_class = $_POST['id_class'];

                $UserController->updateApprenant($id_utilisateur, $nom, $prenom, $email, $password, $id_class);
            }
            break;

        case 'deleteFormateur':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $id_utilisateur = $_POST['id_utilisateur'];
                $UserController->deleteFormateur($id_utilisateur);
            }
            break;

        case 'deleteApprenant':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $id_utilisateur = $_POST['id_utilisateur'];
                $UserController->deleteApprenant($id_utilisateur);
            }
            break;



        default:
            $UserController->listUsers();
            break;
    }
} else {
    $UserController->listUsers();
}
