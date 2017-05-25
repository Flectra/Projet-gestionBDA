<?php

print_r(scandir($_SERVER['DOCUMENT_ROOT']));
require_once ('m_DatabaseConnexion.php');


abstract class Modele {
    /**
     * @var $database instance de la connexion à la base de données
     */
    protected $database;
    /**
     * @var $pk_key clé primaire de la table sur laquelle on exécute les requêtes
     */
    protected $pk_key;
    /**
     * @var $table nom de la table sur laquelle on exécute les requêtes
     */
    protected $table;
    /**
     * Fonction pour l'exécution de requêtes
     * @param string $postgre requête SQL à exécuter
     * @param array $params tableau des paramètres de la requête, null si non spécifié
     * @return PDOStatement le résultat de la requête SQL
     */
    protected function query($postgre, $params = null) {
      $this->database = connexion();
      if ($params == null) {
        $resultat = $this->database->query($postgre);    // exécution directe
      }
      else {
        $resultat = $this->database->prepare($postgre);  // requête préparée
        $resultat->execute($params);
      }
      return $resultat;
    }
    /**
     * Fonction pour récupérer tous les enregistrements de la table
     * @return array tableau asso-ciatif
     */
    public function getAll() {
      try{
        $postgre = 'SELECT * FROM '.$this->table;
        $req = $this->query($postgre);
        $res = $req->fetchAll(PDO::FETCH_ASSOC);
        return $res;
      }
      catch (PDOException $e)
      {
        exit('<p>Erreur lors de la sélection sur la table : '.$this->table
             .'<br/>'.$e->getMessage().'</p>');
      }
    }
    /**
     * Fonction pour la récupération d'un enregistrement en particulier
     * @param int $id identifiant de l'enregistrement
     * @return array tableau associatif
     */
    public function getById($id) {
      try{
        $postgre = 'SELECT * FROM '.$this->table.' WHERE '.$this->pk_key.' = :id';
        $req = $this->query($postgre,array(":id"=>$id));
        $res = $req->fetch(PDO::FETCH_ASSOC);
        return $res;
      }
      catch(PDOException $e){
        exit('<p>Erreur lors de la selection de l\'objet dans la table : '.$this->table
             .'<br/>'.$e->getMessage().'</p>');
      }
    }
}
?>