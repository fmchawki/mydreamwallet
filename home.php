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
    $valeur5 = 5000;
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
        <div class="titre1">
            <h1>Découvrez le monde<br> des Cryptomonnaies <?php echo $output1; ?>! </h1>
            <button class="button-9" role="button" href="crypto.php" onclick="self.location.href='crypto.php'">Se lancer !</button>
        </div>
    </div>
    <div class="container">
    <h1 style="color:white; text-align:center;">Une multidude de cryptomonnaies différentes</h1>
    <table class="responsive-table">
        <thead>
        <tr>
            <th scope="col">Crypto - MDW</th>
            <th scope="col">BTC</th></th>
            <th scope="col">ETH</th>
            <th scope="col">DOT</th>
            <th scope="col">AVA</th>
            <th scope="col">BNB</th>
            <th scope="col">SOL</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">Les plus populaires</th>
            <td data-title="Released" id="stock-price-btc">BTC</td>
            <td data-title="Studio" id="stock-price-eth">ETH</td>
            <td data-title="Worldwide Gross" data-type="currency" id="stock-price-dot">DOT</td>
            <td data-title="Domestic Gross" data-type="currency" id="stock-price-ava">AVA</td>
            <td data-title="International Gross" data-type="currency" id="stock-price-bnbbtc">BNB</td>
            <td data-title="Budget" data-type="currency" id="stock-price-sol">SOL</td>
        </tr>
        </tbody>
    </table>
    </div>

    <div class="bloc2">
        <div class="image2">
            <img src="https://blush.design/api/download?shareUri=4StWlbCQyVnfXpGA&c=Hair_0%7E878787-0.2%7E9b5120-0.3%7E0f0f0f_Skin_0%7Eecafa3-0.2%7Ef6cbc3-0.3%7Ef6cbc3&w=800&h=800&fm=png">
        </div>
        <div class="titre2">
            <h1>Votre sécurité,<br>Notre priorité <?php echo $output1; ?>! </h1>
            <p>Penser à vérifier votre email : <?php echo $output2; ?></p>
        </div>
    </div>

    <div class="bloc3">
        <div class="image3">
            <img src="https://blush.design/api/download?shareUri=MU_J1DEJcOUPwunF&c=Hair_0%7E878787-0.4%7E878787_Skin_0%7Ec26e5e-0.4%7Eecafa3&w=800&h=800&fm=png">
        </div>
        <div class="titre3">
            <h1>Tu as <?php echo $output5; ?>$,<br> Tu peux encore t'améliorer ! </h1>
            <p>Des cours seront bientôt disponibles</p>
        </div>
    </div>


<!-- linking javascript -->
<script src="js/eth.js"></script>

</body>

<?php include("footer.php"); ?>


</html>