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
    $valeur5 = 0;
    $nu="";
    if (isset ($_SESSION['pseudo'])){
        $nu = $_SESSION['pseudo'];
        $ni = $_SESSION['mailA'];
        $na = $_SESSION['natio'];
        $no = $_SESSION['id'];
        $nas = $_SESSION['vwallet'];
    }

    if ($nu == null) {
    $output1 = $valeur;
    $output2 = $valeur2;
    $output3 = $valeur3;
    $output4 = $valeur4;
    $output5 = $valeur5;
    } else {
    $output1 = $nu;
    $output2 = $ni;
    $output3 = $na;
    $output4 = $no;
    $output5 = $nas;
    }
    ?>
    <div class="bloc1">
        <div class="image1">
            <img src="https://blush.design/api/download?shareUri=mQphEtmveiwYfoNy&c=Hair_0%7E0f0f0f-0.6%7E0f0f0f_Skin_0%7Ef6cbc3-0.6%7Ef6cbc3&w=800&h=800&fm=png">
        </div>
        <div class="titre">
            <h1>Découvrez le monde<br> des Cryptomonnaies <?php echo $output1; ?>! </h1>
            <button class="button-9" role="button" href="login.php" onclick="self.location.href='login.php'">S'inscrire !</button>
        </div>
    </div>
    <div class="bordure"></div>
    <div class="bloc2">
        <div class="image2">
            <img src="https://blush.design/api/download?shareUri=4StWlbCQyVnfXpGA&c=Hair_0%7E878787-0.2%7E9b5120-0.3%7E0f0f0f_Skin_0%7Eecafa3-0.2%7Ef6cbc3-0.3%7Ef6cbc3&w=800&h=800&fm=png">
        </div>
        <div class="titre2">
            <h1>Simuler vos prochains investissements en toute sécurité <?php echo $output1; ?>! </h1>
            <p>Penser à vérifier votre email : <?php echo $output2; ?></p>
        </div>
    </div>




</body>


</html>