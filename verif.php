<?php
session_start();


    // connexion à la base de données
    $db_username = '254480';
    $db_password = 'Thomas&PierreMDW*';
    $db_name     = 'mydreamwallet_base';
    $db_host     = 'mysql-mydreamwallet.alwaysdata.net';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    if ( isset( $_POST['submit'] ) ) {
     /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
       */
     $nom = $_POST['firstname']; 
     $_SESSION['pseudo'] = $nom;
     $pass = hash('sha256', $_POST['passw2']); 
     
     $adresse = $_POST['email2'];
     $natio = $_POST['origin'];
     $verif=0;
     
    $result = mysqli_query($db,"SELECT * FROM User");
    $num_rows = mysqli_num_rows($result);
    $yep = 10;
    echo $num_rows;
    $requete = "INSERT Into User (User.pseudo,User.natio,User.pass,User.email,User.verif,User.vwallet,User.q_btc,User.q_eth,User.q_bnb,User.q_sol,User.q_link,User.q_dot,User.q_ada,User.q_xrp,User.q_avax,User.q_luna) VALUES ('".$nom."','".$natio."','".$pass."','".$adresse."','".$verif."',5000,0,0,0,0,0,0,0,0,0,0)";
    $exec_requete = mysqli_query($db,$requete);

    $_SESSION['vwallet'] = 5000;
    $_SESSION['mailA'] = $adresse;
    $_SESSION['pseudo'] = $nom;
    $_SESSION['natio'] = $natio;
    $_SESSION['id'] = $num_rows +1;  

    /* *
    function validateEmail($adresse) {
    if(filter_var($adresse, FILTER_VALIDATE_EMAIL)) {
        echo "{$adresse}: A valid email"."<br>";
       
    }
    else {
        echo "{$adresse}: Not a valid email"."<br>";
    }
    */
    
}

/*
validateEmail($adresse);


    echo "cc";
    mail($adresse, 'Bonjour', 'Merci de t\'être inscrit sur notre site web j\'espere que tu vas passer un moment pourris en ma compagnie');
     
    $requete = "INSERT Into User (User.id,User.pseudo,User.natio,User.pass,User.email,User.verif) VALUES ('".$yep."','".$nom."','".$natio."','".$pass."','".$adresse."','".$verif."');";
    $exec_requete = mysqli_query($db,$requete);
   

header("location:home.php"):
     
  

}
*/
mysqli_close($db); // fermer la connexion

echo $nom;
header("location:home.php")
?>