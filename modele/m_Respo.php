<?php
  require_once"m_modele.php";
  /**
   * Classe permettant l'interaction avec la table "admin"
   * Hérite de la classe Model
   * @author JohanBrunet
   */
  class Respo extends Modele {
    /**
     * @var $pk_key clé primaire de la table
     */
    protected $pk_key = 'idrespo';
    /**
     * @var $table table de la base de données utilisée par la classe
     */
    protected $table = 'Respo';
    /**
     * Création d'un nouveau compte administrateur
     * @param array $admin tableau contenant les valeurs à insérer dans la table
     * @return int l'identifiant du nouvel enregistrement
     */
    public function createRespo($respo) {
      try {
        $postgre = 'INSERT INTO '.$this->table.' (idrespo, firstname,mail) VALUES (:username, :password, :salt, Admin)';
        $req = $this->query($postgre, array(':username' => $utilisateur['username'],
                                        ':password' => $utilisateur['password'], ':salt' =>$utilisateur['salt'],'Admin' => $utilisateur['role']));
        return $this->database->lastInsertId();
      }
      catch(PDOException $e){
        exit('<p>Erreur lors de l\'insertion des données dans la table : '.$this->table
             .'<br/>'.$e->getMessage().'</p>');
      }
    }
    /**
     * Sélection d'un administrateur par son login
     * @param string $login le login de l'administrateur
     * @return array tableau associatif contenant les informations du compte
     */
    public function getRespobyID($idrespo) {
      try{
        $postgre = 'SELECT * FROM '.$this->table.' WHERE idrespo = :idrespo';
        $req = $this->query($postgre,array(":idrespo"=>$idrespo));
        $res = $req->fetch(PDO::FETCH_ASSOC);
        return $res;
      }
      catch(PDOException $e){
        exit('<p>Erreur lors de la selection de l\'objet dans la table : '.$this->table
             .'<br/>'.$e->getMessage().'</p>');
      }
    }

    public function modifyRespo($respo){
      try {
        $postgre = 'UPDATE '.$this->table.'SET firstname = :firstname, mail = :mail) WHERE idrespo = :idrespo';
        $req = $this->query($postgre, array(':idrespo' => $Respo['idrespo'],
                                        ':firstname' => $Respo['firstname'], ':mail' =>$Respo['mail']));
        return $this->database->lastInsertId();// quelle fonction utiliser ?
      }
      catch(PDOException $e){
        exit('<p>Erreur lors de la modification des données dans la table : '.$this->table
             .'<br/>'.$e->getMessage().'</p>');
      }
    }

    public function deleteRespo($idrespo){
      try {
        $postgre = 'DELETE FROM '.$this->table.' WHERE idrespo = :idrespo';
        $req = $this->query($postgre, array(':idrespo' => $Respo['idrespo']));
        return $this->database->lastInsertId();// quelle fonction utiliser ?
      }
      catch(PDOException $e){
        exit('<p>Erreur lors de l\'effacement des données dans la table : '.$this->table
             .'<br/>'.$e->getMessage().'</p>');
      }
    }
    
  }
?>