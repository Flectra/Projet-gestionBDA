<?php
require_once "../modele/m_Club.php";
/**require_on$club../modele/m_Utilisateur.php";
require_once "../modele/m-Respo.php";
*/

$club = new Club();

echo $club->getById(1);

?>
