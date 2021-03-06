<?php 
require_once('DAO/user.php');
require_once('init.php');
require_once('DAO/periodeDAO.php');
session_start();

if(isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    //Verifie si il s'agit d'un admin
    if($user->getTypeUser() == 2 || $user->getTypeUser() == 3) {
        header('Location: index.php');
    }
} else {
    header('Location: index.php');
}

//Verifie si annee nest pas vide
if($_GET['annee'] == '') {
    header('Location: liste_periode.php');
} else {
    $unePeriode = new PeriodeDAO();
    $tarifPeriode = $unePeriode->find($_GET['annee']);
}

//Recupère champs du formulaire
$annee = $_GET['annee'];
$tarif = isset($_POST['tarif']) ? $_POST['tarif'] : '';
$statut = isset($_POST['statut']) ? $_POST['statut'] : '';
$submit = isset($_POST['periodeForm']);

if($submit) {
    if($annee != '' && $tarif != '' && $statut != '') {
        $periode = new PeriodeDAO();
        $periode->updatePeriode($annee, $tarif, $statut);
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>FREDI Modifier Periode</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <?php require_once('include/nav.php'); ?>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="text-align: center; margin-bottom: 15%;">Modifier la période <?php echo $annee; ?></h1>
                </div>
                <?php
                //Message d'erreur
                if (isset($_GET['res'])) {
                    echo '<p class="color: red">' . $_GET['res'] . ' Retourner à la <a href="liste_periode.php">liste</a></p>';
                }
                ?>
            </div>
            <form method="POST">
                <div class="row">
                    <div class="col-md-6"><span>Tarif kilometrique:&nbsp;</span>
                        <input type="text" name="tarif" style="padding: 10px 10px 10px 10px;" value="<?php echo $tarifPeriode->getTarif(); ?>">
                    </div>
                    <div class="col-md-6"><span>Statut:&nbsp;</span>
                        <select class="form-control" name="statut">
                            <option value="1" <?php if($tarifPeriode->getCodeStatut() == 1) { echo "selected"; }?>>Ouverte</option>
                            <option value="0" <?php if($tarifPeriode->getCodeStatut() == 0) { echo "selected"; }?>>Fermée</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center"><button class="btn btn-primary" type="submit" name="periodeForm" style="margin-top: 15%; width: 50%">Modifier la periode</button></div>
                    <div class="col-md-12 text-center"><a class="btn btn-primary" style="margin-top: 25px; width: 50%" href="liste_periode.php">Annuler</a></div>
                </div>
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>