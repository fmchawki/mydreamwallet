<!DOCTYPE html>
<head>
    <title>My Dream Wallet</title>
    <link rel="stylesheet" href="css/stylehome.css">
    <link rel="icon" type="image/png" href="images/logowalletbtc.png">
    <meta name="Description" content="Data films et series" />
</head>
<body>
    <?php include("menu.php");
    $valeur  = "New_utilisateur";
    $valeur2 = "mail";
    $valeur3 = "nationalité";
    $valeur4 = "votre id";
    $nu="";
    if (isset ($_SESSION['pseudo'])){
        $nu = $_SESSION['pseudo'];
        $ni = $_SESSION['mailA'];
        $na = $_SESSION['natio'];
        $no = $_SESSION['id'];
    }

    if ($nu == null) {
    $output1 = $valeur;
    $output2 = $valeur2;
    $output3 = $valeur3;
    $output4 = $valeur4;
    } else {
    $output1 = $nu;
    $output2 = $ni;
    $output3 = $na;
    $output4 = $no;
    }
    ?>
    
    <div class="titre">
        <h1>Découvrez le monde<br> des Cryptomonnaies <?php echo $output1; echo $output4; ?>! </h1>
        <button class="button-9" role="button" href="login.php" onclick="self.location.href='login.php'">S'inscrire !</button>
        <p>Vérifier votre email : <?php echo $output2; ?></p>
        <p>Premier portefeuille virtuel de cryptomonnaies au monde!<p>
        <p style="color:white;"> Vous êtes <?php echo $output3; ?> !</p>
    </div>
    
</body>

</html>