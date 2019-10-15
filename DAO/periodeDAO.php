<?php
require_once('DAO.php');
require_once('periode.php');

Class PeriodeDAO extends DAO {
    //Constructeur
    public function __construct() {
        parent::__construct();
    }

    //Nouvelle periode
    public function createPeriode($annee, $tarif, $statut) {
        $sql = "INSERT INTO periode (annee, forfait_km, code_statut) ";
        $sql .= "VALUES (:annee, :forfait_km, :code_statut)";

        var_dump($sql);

        try {
            $sth = $this->pdo->prepare($sql);
            $sth->execute(array(
                ':annee' => $annee,
                ':forfait_km' => $tarif,
                ':code_statut' => $statut
            ));
        } catch (PDOException $ex) {
            throw new Exception("Erreur lors de la requête SQL : ".$ex->getMessage());
        }

        header('Location: liste_periode.php');
    }

    //Retourne toutes les periodes
    public function findAll() {
        $sql = "SELECT * FROM periode";

        try {
            $sth = $this->pdo->prepare($sql);
            $sth->execute();
            $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
        }

        $periodes = array();

        foreach ($rows as $row) {
            $periodes[] = new Periode($row);
        }

        // Retourne un tableau d'objets
        return $periodes;
    }
}