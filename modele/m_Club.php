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
    protected $pk_key = 'idclub';
    /**
     * @var $table table de la base de données utilisée par la classe
     */
    protected $table = 'club';
    /**
     * Création d'un nouveau club
     * @param array $club tableau contenant les valeurs à insérer dans la table
     * @return int l'identifiant du nouvel enregistrement
     */
    public function createClub($club) {
      try {
        $postgre = 'INSERT INTO '.$this->table.' (nomclub, pagefb,descriptif,urlimage) VALUES (:nomclub, :pagefb, :descriptif,:urlimage)';
        $req = $this->query($postgre, array(':nomclub' => $club['nomclub'],
                                        ':pagefb' => $club['pagefb'], ':descriptif' =>$club['descriptif'],
                                        ':urlimage' => $club['urlimage']));
        echo "l'insertion a bien été faite !";
        print_r($club);
        return $this->database->lastInsertId();
      }
      catch(PDOException $e){
        exit('<p>Erreur lors de l\'insertion des données dans la table : '.$this->table
             .'<br/>'.$e->getMessage().'</p>');
      }
    }
    public function modifyClub($club){
      try {
        $postgre = 'UPDATE '.$this->table.' SET nomclub = :nomclub, pagefb = :pagefb, descriptif = :descriptif, urlimage = :urlimage WHERE idclub = :idclub';
        $req = $this->query($postgre, array(':nomclub' => $club['nomclub'],
                                        ':pagefb' => $club['pagefb'], ':descriptif' =>$club['descriptif'],':urlimage' => $club['urlimage'],
                                        ':idclub'=>$club['idclub']));
      }
      catch(PDOException $e){
        exit('<p>Erreur lors de la modification des données dans la table : '.$this->table
             .'<br/>'.$e->getMessage().'</p>');
      }
    }

    public function deleteClub($idclub){
      try {
        $postgre = 'DELETE FROM '.$this->table.' WHERE idclub = :idclub';
        echo($postgre);
        $req = $this->query($postgre, array(':idclub' => $idclub));
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

    public function getIDRespo($club) {
      try{
        $postgre = 'SELECT respo FROM '.$this->table.' WHERE idclub = :idclub';
        $req = $this->query($postgre,array(":nomclub"=>$nomclub));
        $res = $req->fetch(PDO::FETCH_ASSOC);
        return $res;
      }
      catch(PDOException $e){
        exit('<p>Erreur lors de la selection de l\'objet Respo dans la table : '.$this->table
             .'<br/>'.$e->getMessage().'</p>');
      }
    }

    /**public function getNbClubs() {
      try{
        $postgre = 'SELECT count(*) FROM '.$this->table.;
        $req = $this->query($postgre);
        $res = $req->fetch(PDO::FETCH_ASSOC);
        return $res;
      }
      catch(PDOException $e){
        exit('<p>Erreur lors du comptage du nc de clubs dans la table : '.$this->table
             .'<br/>'.$e->getMessage().'</p>');
      }
    }*/

    
    
  }
?>