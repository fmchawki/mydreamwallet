<!DOCTYPE html>
<html><body>
<?php 
/*
if (isset($_GET['valeur'])){
    echo $_GET['valeur'];  
    echo $_GET['monnaie'];
    namecrypto = $_GET['monnaie'];
}

$nu="";
if (isset ($_SESSION['pseudo'])){
    $nu="connecté"
    $npseudo = $_SESSION['pseudo'];
    $nmail = $_SESSION['mailA'];
    $nnatio = $_SESSION['natio'];
    $nid = $_SESSION['id'];
}


if ($nu == null) {
    header('Location: connect.php');
} else {

qcrypto = "q_" + namecrypto;
$db_username = '254480';
$db_password = 'Thomas&PierreMDW*';
$db_name     = 'mydreamwallet_base';
$db_host     = 'mysql-mydreamwallet.alwaysdata.net';
$db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
    or die('could not connect to database');
$requete = "SELECT * FROM mywallet JOIN User ON User.id = mywallet.id_user WHERE User.id='".$nid."'; ";
$exec_requete = mysqli_query($db,$requete);
$count = mysqli_num_rows($exec_requete);
for ($j = 0; $j < $count; $j++) {
  $ligne = mysqli_fetch_array($exec_requete);
  $valeurwallet = $ligne["vwallet"];
  $qbtc = $ligne["q_btc"];
  $qeth = $ligne["q_eth"];
  $qbnb = $ligne["q_bnb"];
  $qsol = $ligne["q_sol"];
  $qlink = $ligne["q_link"];
  $qdot = $ligne["q_dot"];
  $qada = $ligne["q_ada"];
  $qxrp = $ligne["q_xrp"];
  $qavax = $ligne["q_avax"];
  $qluna = $ligne["q_luna"];

}

*/
function console_log($data){
    echo '<script>';
    echo 'console.log('. json_encode($data).')';
    echo '</script>';
}
console_log($_POST['values']);
console_log($_POST['type']);
?>


</body>
</html>