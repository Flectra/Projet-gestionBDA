<?php
/**
 * fonction de connexion à une base de données
 * @author JadeHennebert
 */
function connexion() {

   $dsn = "pgsql:"
    . "host=ec2-54-247-166-129.eu-west-1.compute.amazonaws.com;"
    . "dbname=df31gucuf1s0aq;"
    . "user=ylfcmvhxquwoyl;"
    . "port=5432;"
    . "sslmode=require;"
    . "password=bf493d54e982a24e9b4bfffbfed1526b2105b5ff049981a16409e51937efda84";
    echo "si ça s'affiche pas y a un soucis";

    try{
      $db = new PDO($dsn);
      echo "salut";
      $gh = $db->prepare("SELECT * from utilisateur");
      echo "ca";
      $gh->execute();
      echo "va";
      $result = $gh ->fetchAll(PDO::FETCH_OBJ);
      var_dump($result);
    }
    catch (Exception $e)
    { 
        echo "test";
        die('Erreur : ' . $e->getMessage());
    } 
return($db);}

connexion();
?>