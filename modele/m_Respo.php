<?php
  require_once"m_modele.php";
  /**
   * Hérite de la classe Modele
   */
  class Respo extends Modele {
    /**
     * @var $pk_key clé primaire de la table
     */
    protected $pk_key = 'idrespo';
    /**
     * @var $table table de la base de données utilisée par la classe
     */
    protected $table = 'respo';
    /**
     * Création d'un nouveau respo
     */
    public function createRespo($respo) {
      try {
        $postgre = 'INSERT INTO '.$this->table.' (firstname,lastname,mail,idclub) VALUES (:firstname, :lastname, :mail, :idclub)';
        $req = $this->query($postgre, array(
                                        ':firstname' => $respo['firstname'],
                                        ':lastname' => $respo['lastname'],
                                        ':mail' =>$respo['mail'],
                                        ':idclub' =>$respo['idclub']));
        return $this->database->lastInsertId();
      }
      catch(PDOException $e){
        exit('<p>Erreur lors de l\'insertion des données dans la table : '.$this->table
             .'<br/>'.$e->getMessage().'</p>');
      }
    }
    /**
     * Modification d'un respo
     */

    public function modifyRespo($respo){
      try {
        $postgre = 'UPDATE '.$this->table.' SET firstname = :firstname, lastname = :lastname, mail = :mail WHERE idclub = :idclub';
        $req = $this->query($postgre, array(':lastname' => $respo['lastname'],
                                        ':firstname' => $respo['firstname'], ':mail' =>$respo['mail'], ':idclub'=>$respo['idclub']));
        print_r($req);
        return $this->database->lastInsertId();// quelle fonction utiliser ?
      }
      catch(PDOException $e){
        exit('<p>Erreur lors de la modification des données dans la table : '.$this->table
             .'<br/>'.$e->getMessage().'</p>');
      }
    }
    /**
     * Suppression d'un respo
     */

    public function deleteRespo($respo){
      try {
        $postgre = 'DELETE FROM '.$this->table.' WHERE idrespo = :idrespo';
        $req = $this->query($postgre, array(':idrespo' => $respo['idrespo']));
        return $this->database->lastInsertId();// quelle fonction utiliser ?
      }
      catch(PDOException $e){
        exit('<p>Erreur lors de l\'effacement des données dans la table : '.$this->table
             .'<br/>'.$e->getMessage().'</p>');
      }
    }

    /**
     * Selection d'un respo par son idclub
     */
    public function getRespobyClub($idclub){
      try {
        $postgre = 'SELECT * FROM '.$this->table.' WHERE idclub = :idclub';
        $req = $this->query($postgre, array(':idclub' => $idclub
                                        ));
        $res = $req->fetch(PDO::FETCH_ASSOC);
        return $res;
      }
      catch(PDOException $e){
        exit('<p>Erreur lors de la sélection sur la table : '.$this->table
             .'<br/>'.$e->getMessage().'</p>');
      }
    }
    
  }
?>