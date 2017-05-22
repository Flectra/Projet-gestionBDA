<?php
  require_once "m_modele.php";
  /**
   * Classe permettant l'interaction avec la table "admin"
   * Hérite de la classe Model
   * @author JohanBrunet
   */
  class Utilisateur extends Modele {
    /**
     * @var $pk_key clé primaire de la table
     */
    protected $pk_key = 'ID_Utilisateur';
    /**
     * @var $table table de la base de données utilisée par la classe
     */
    protected $table = 'utilisateur';
    /**
     * Création d'un nouveau compte administrateur
     * @param array $admin tableau contenant les valeurs à insérer dans la table
     * @return int l'identifiant du nouvel enregistrement
     */
    public function createAdmin($utilisateur) {
      try {
        $postgre = 'INSERT INTO '.$this->table.' (username, password, role) VALUES (:username, :password, Admin)';
        $req = $this->query($postgre, array(':username' => $utilisateur['username'],
                                        ':password' => $utilisateur['password'],'Admin' => $utilisateur['role']));
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
    public function getByUserName($username) {
      try{
        $postgre = 'SELECT * FROM '.$this->table.' WHERE username = :username';
        $req = $this->query($postgre,array(":username"=>$username));
        $res = $req->fetch(PDO::FETCH_ASSOC);
        return $res;
      }
      catch(PDOException $e){
        exit('<p>Erreur lors de la selection de l\'objet dans la table : '.$this->table
             .'<br/>'.$e->getMessage().'</p>');
      }
    }

    /**public function modifyPassword($utilisateur){
      try{
        $postgre = 'UPDATE '.$this->table.' WHERE username = :username';
        $req = $this->query($postgre,array(":username"=>$username));
        $res = $req->fetch(PDO::FETCH_ASSOC);
        return $res;
      }
      catch(PDOException $e){
        exit('<p>Erreur lors de la modification du mot de passe dans la table : '.$this->table
             .'<br/>'.$e->getMessage().'</p>');
      }
    }
    **/
  }
?>