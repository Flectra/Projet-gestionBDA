<?php
  require_once "m_modele.php";
  require_once"m_Respo.php"; 
  /**
   * Classe permettant l'interaction avec la table "admin"
   * Hérite de la classe Model
   * @author JohanBrunet
   */
  class Club extends Modele {
    /**
     * @var $pk_key clé primaire de la table
     */
    protected $pk_key = 'nomclub';
    /**
     * @var $table table de la base de données utilisée par la classe
     */
    protected $table = 'Club';
    /**
     * Création d'un nouveau club
     * @param array $club tableau contenant les valeurs à insérer dans la table
     * @return int l'identifiant du nouvel enregistrement
     */
    public function createClub($Club) {
      try {
        $postgre = 'INSERT INTO '.$this->table.' (nomclub, pagefb,respo,urlimage) VALUES (:nomclub, :pagefb, :descriptif, :respo, :urlimage)';
        $req = $this->query($postgre, array(':nomclub' => $Club['nomclub'],
                                        ':pagefb' => $Club['pagefb'], ':descriptif' =>$Club['descriptif'],':respo' => $Club['respo'],
                                        ':urlimage' => $Club['urlimage']));
        return $this->database->lastInsertId();
      }
      catch(PDOException $e){
        exit('<p>Erreur lors de l\'insertion des données dans la table : '.$this->table
             .'<br/>'.$e->getMessage().'</p>');
      }
    }
    public function modifyClub($Club){
      try {
        $postgre = 'UPDATE '.$this->table.'SET nomclub = :nomclub, pagefb = :pagefb, descriptif = :descriptif, respo = :respo, urlimage = :urlimage) WHERE nomclub = :nomclub';
        $req = $this->query($postgre, array(':nomclub' => $Club['nomclub'],
                                        ':pagefb' => $Club['pagefb'], ':descriptif' =>$Club['descriptif'],':urlimage' => $Club['urlimage']));
        return $this->database->lastInsertId();
      }
      catch(PDOException $e){
        exit('<p>Erreur lors de la modification des données dans la table : '.$this->table
             .'<br/>'.$e->getMessage().'</p>');
      }
    }

    public function deleteClub($nomclub){
      try {
        $postgre = 'DELETE FROM '.$this->table.' WHERE nomclub = :nomclub';
        $req = $this->query($postgre, array(':nomclub' => $Club['nomclub']));
        return $this->database->lastInsertId();// quelle fonction utiliser ?
      }
      catch(PDOException $e){
        exit('<p>Erreur lors de l\'effacement des données dans la table : '.$this->table
             .'<br/>'.$e->getMessage().'</p>');
      }
    }
    /**
     * Sélection d'un respo par son login
     * @param string $login le login de l'administrateur
     * @return array tableau associatif contenant les informations du compte
     */

    public function getIDRespo($nomclub) {
      try{
        $postgre = 'SELECT respo FROM '.$this->table.' WHERE nomclub = :nomclub';
        $req = $this->query($postgre,array(":nomclub"=>$nomclub));
        $res = $req->fetch(PDO::FETCH_ASSOC);
        return $res;
      }
      catch(PDOException $e){
        exit('<p>Erreur lors de la selection de l\'objet Respo dans la table : '.$this->table
             .'<br/>'.$e->getMessage().'</p>');
      }
    }


    
    
  }
?>