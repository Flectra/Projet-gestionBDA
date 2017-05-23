<?php
require_once "../modele/m_Club.php";
require_once "../modele/m_Utilisateur.php";
require_once "../modele/m_Respo.php";


$club = new Club();
$utilisateur = new Utilisateur();
$respo = new Respo();

echo "TESTS CLUBS";

print_r ($club->getById(1));

print_r($club->getAll()); 

$AllClub = $club->getAll();


print_r($AllClub[0]);
echo $AllClub[0]['pagefb'];



echo "TESTS UTILISATEURS";
$pseudo = "Flectra";
print_r($utilisateur->getById($pseudo));

print_r($utilisateur->getAll()); 

$AllUsers = $utilisateur->getAll();


print_r($AllUsers[0]);
echo $AllUsers[0]['role'];

echo "TESTS Respos";

print_r($respo->getById(3));

print_r($respo->getAll()); 

$AllRespos = $respo->getAll();


print_r($AllRespos[0]);
echo $AllRespos[0]['lastname'];




?>
