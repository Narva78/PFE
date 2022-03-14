<?php

class PdoTest{   		
    private static $serveur='mysql:host=localhost';
    private static $bdd='dbname=ux';   		
    private static $user='root' ;    		
    private static $mdp='secret' ;	
        private static $monPdo;
        private static $monPdoTest=null;

    
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */
    private function __construct(){
        PdoTest::$monPdo = new PDO(PdoTest::$serveur.';'.PdoTest::$bdd, PdoTest::$user, PdoTest::$mdp); 
        PdoTest::$monPdo->query("SET CHARACTER SET utf8");
    }

    public function _destruct(){
        PdoTest::$monPdo = null;
    }


    public static function getPdoTest(){
		if(PdoTest::$monPdoTest==null){
			PdoTest::$monPdoTest= new PdoTest();
		}
		return PdoTest::$monPdoTest;  
	}

    public function getInfoUser($login, $mdp){
        $req = "select * from user
        where user.login = '$login'
        and user.mdp = '$mdp'";
        $rs = PdoTest::$monPdo->query($req);
        $ligne = $rs->fetch();
        return $ligne;
        }

        //Récupération des informations en fonction de l'id courant
    public function getUser($id){
        $req = "select * from user
        where user.id = '$id'";
        $rs = PdoTest::$monPdo->query($req);
        $ligne = $rs->fetch();
        return $ligne;
        }     



    public function Infologin($login){
        $req = "select * from user
        where login = '$login'";
        $rs = PdoTest::$monPdo->query($req);
        $ligne = $rs->fetch();
        return $ligne;
    }

    public function Info_mdp($mdp){
        $req = "select * from user
        where mdp = '$mdp'";
        $rs = PdoTest::$monPdo->query($req);
        $ligne = $rs->fetch();
        return $ligne;
    }

    //fonction barre de recherche Annuaire des Anciens
    public function barreDeRecherche(){
        $req ="SELECT nom, prenom, promotion 
        FROM user 
        ORDER BY id DESC";
        $rs = PdoTest::$monPdo->query($req);
        $ligne = $rs->fetch();
        return $ligne;
    }

    public function barreDeRecherche1($q){
        $req ="SELECT nom, prenom, promotion 
        FROM user 
        WHERE nom LIKE '%".$q."%' 
        ORDER BY id DESC";
        $rs = PdoTest::$monPdo->query($req);
        $value = $rs -> fetch();
        return $value;
    }

    public function barreDeRecherche2($q){
        $req ="SELECT nom, prenom, promotion 
        FROM user 
        WHERE CONCAT(nom, prenom, promotion) LIKE '%".$q."%' 
        ORDER BY id DESC";
        $rs = PdoTest::$monPdo->query($req);
        $ligne = $rs->fetch();
        return $ligne;
    }
    
    //récupérer les messages stockées dans la base de donnée
    public function recupMessages(){
        $req ="select * from messages";
        $rs = PdoTest::$monPdo->query($req);
        $ligne = $rs->fetch();
        return $ligne;
    }


    //INSERT INTO
    public function formInscription($nom, $prenom, $parcours, $login, $mdp, $departement, $promotion, $email, $sexe, $hobbies, $telephone){
        $req = "insert into user (nom,prenom,parcours,login,mdp,departement,promotion,email,sexe,hobbies,telephone)
        values ('$nom', '$prenom', '$parcours', '$login', '$mdp','$departement', '$promotion', '$email', '$sexe','$hobbies', '$telephone')";
        PdoTest::$monPdo->exec($req);
    }

    //tchat
    public function insererMessage($pseudo, $message){
        $req="insert into messages(pseudo, message)
        values($pseudo, $message)";
        PdoTest::$monPdo->exec($req); 
    }
    
}
?>
