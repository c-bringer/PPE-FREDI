<?php
class Ligne {
    private $id_ligne;
    private $date_frais;
    private $lib_trajet;
    private $cout_peage;
    private $cout_repas;
    private $cout_hebergement;
    private $nb_km;
    private $total_km;
    private $total_ligne;
    private $code_statut;
    private $id_motif;
    private $annee;
    private $id_note;

    //Constructeur
    public function __construct(array $row) {
        $this->id_ligne = $row['id_ligne'];
        $this->date_frais = $row['date_frais'];
        $this->lib_trajet = $row['lib_trajet'];
        $this->cout_peage = $row['cout_peage'];
        $this->cout_repas = $row['cout_repas'];
        $this->cout_hebergement = $row['cout_hebergement'];
        $this->nb_km = $row['nb_km'];
        $this->total_km = $row['total_km'];
        $this->total_ligne = $row['total_ligne'];
        $this->code_statut = $row['code_statut'];
        $this->id_motif = $row['id_motif'];
        $this->annee = $row['annee'];
        $this->id_note = $row['id_note'];
    }

    //Get id_ligne
    public function get_id_ligne() {
        return $this->id_ligne;
    }
    

    //Set id_ligne
    public function set_id_ligne($id_ligne) {
        $this->id_ligne = $id_ligne;
    }

    //Get date_frais
    public function getDate_frais() {
        return $this->date_frais;
    }

    //Set date_frais
    public function setDate_frais($date_frais) {
        $this->date_frais = $date_frais;
    }

    //Get tarif
    public function getLib_trajet() {
        return $this->lib_trajet;
    }

    //Set tarif
    public function setLib_trajet($lib_trajet) {
        $this->lib_trajet = $lib_trajet;
    }

    //Get Cout_peage
    public function getCout_peage() {
        return $this->cout_peage;
    }

    //Set Cout_peage
    public function setCout_peage($cout_peage) {
        $this->cout_peage = $cout_peage;
    }
    //Get Cout_repas
    public function getCout_repas() {
        return $this->cout_repas;
    }

    //Set Cout_repas
    public function setCout_repas($cout_repas) {
        $this->cout_repas = $cout_repas;
    }
    //Get Cout_hebergement
    public function getCout_hebergement() {
        return $this->cout_hebergement;
    }

    //Set Cout_hebergement
    public function setCout_hebergement($cout_hebergement) {
        $this->cout_hebergement = $cout_hebergement;
    }
    //Get nb_km
    public function get_nb_km() {
        return $this->nb_km;
    }

    //Set nb_km
    public function set_nb_km($nb_km) {
        $this->nb_km = $nb_km;
    }
    //Get total_km
    public function get_total_km() {
        return $this->total_km;
    }

    //Set total_km
    public function set_total_km($total_km) {
        $this->total_km = $total_km;
    }
    //Get total_ligne
    public function get_total_ligne() {
        return $this->total_ligne;
    }

    //Set total_ligne
    public function set_total_ligne($total_ligne) {
        $this->total_ligne = $total_ligne;
    }
    //Get code_statut
    public function get_code_statut() {
        return $this->code_statut;
    }

    //Set code_statut
    public function set_code_statut($code_statut) {
        $this->code_statut = $code_statut;
    }
    //Get id_motif
    public function get_id_motif() {
        return $this->id_motif;
    }

    //Set id_motif
    public function set_id_motif($id_motif) {
        $this->id_motif = $id_motif;
    }

    //Get annee
    public function get_annee() {
        return $this->annee;
    }

    //Set annee
    public function set_annee($annee) {
        $this->annee = $annee;
    }

    //Get id_note
    public function get_id_note() {
        return $this->id_note;
    }

    //Set id_note
    public function set_id_note($id_note) {
        $this->id_note = $id_note;
    }
}
?>