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
console_log($_POST['name']);
?>

<?php

session_start();

$nu="";
if (isset ($_SESSION['pseudo'])){
    $nu = $_SESSION['pseudo'];
    $ni = $_SESSION['mailA'];
    $na = $_SESSION['natio'];
    $nid = $_SESSION['id'];
    $v_wallet = $_SESSION['vwallet'];
    $vcry = $_POST['values'];
    $nomcrypto=$_POST['name'];
    $qcryptonom = "q_".$nomcrypto;
    $db_username = '254480';
    $db_password = 'Thomas&PierreMDW*';
    $db_name     = 'mydreamwallet_base';
    $db_host     = 'mysql-mydreamwallet.alwaysdata.net';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
        or die('could not connect to database');
    if(mysqli_connect_errno()) {
        echo ("Connexion échouée : \n".mysqli_connect_error());
        exit();
        }
    $requete = "SELECT * FROM User WHERE id='$nid'";
    $exec_requete = mysqli_query($db,$requete);
    $count = mysqli_num_rows($exec_requete);
    for ($j = 0; $j < $count; $j++) {
        $ligne = mysqli_fetch_array($exec_requete);
        $qcrypto = $ligne[$qcryptonom];
    }


} else {
    header("Location:connect.php");
} 


if ($nu != null){
    if (($_POST['type'] == "buy") and ($v_wallet >= $vcry)){
        $v_wallet = $v_wallet-$vcry;
        $qcrypto = $qcrypto +1;
        $db_username = '254480';
        $db_password = 'Thomas&PierreMDW*';
        $db_name     = 'mydreamwallet_base';
        $db_host     = 'mysql-mydreamwallet.alwaysdata.net';
        $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
            or die('could not connect to database');
        if(mysqli_connect_errno()) {
            echo ("Connexion échouée : \n".mysqli_connect_error());
            exit();
            }
        $requete = "UPDATE User SET ".$qcryptonom." = ".$qcrypto.", vwallet = '$v_wallet' WHERE id='$nid'";
        $exec_requete = mysqli_query($db,$requete);
        header("Location:crypto.php");
    } elseif (($_POST['type'] == "sell") and ($qcrypto >=1)){
        $v_wallet = $v_wallet+$vcry;
        $qcrypto = $qcrypto -1;
        $db_username = '254480';
        $db_password = 'Thomas&PierreMDW*';
        $db_name     = 'mydreamwallet_base';
        $db_host     = 'mysql-mydreamwallet.alwaysdata.net';
        $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
            or die('could not connect to database');
        if(mysqli_connect_errno()) {
            echo ("Connexion échouée : \n".mysqli_connect_error());
            exit();
            }
        $requete = "UPDATE User SET ".$qcryptonom." = ".$qcrypto.", vwallet = '$v_wallet' WHERE id='$nid'";
        $exec_requete = mysqli_query($db,$requete);
        header("Location:crypto.php");
    } else {
        header("Location:crypto.php");
    } 
}


?>
</body>
</html>