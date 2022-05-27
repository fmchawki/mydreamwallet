<!DOCTYPE html>
<head>
    <title>My Dream Wallet</title>
    <link rel="stylesheet" href="css/styleranking.css">
    <link rel="icon" type="image/png" href="images/logowalletbtc.png">
    <meta name="Description" content="Data films et series" />

</head>
<body>
    <?php include("menu.php"); 

    $valeur  = "Vous n'avez pas encore de portefeuille ? Inscrivez-vous !";
    $nu="";
    if (isset ($_SESSION['pseudo'])){
        $nu = $_SESSION['pseudo'];
        $ni = $_SESSION['mailA'];
        $na = $_SESSION['natio'];
        $valeurconnect = "Devient le meilleur investisseur du monde $nu !";
    }

    if ($nu == null) {
    $output1 = $valeur;
    } else {
    $output1 = $valeurconnect;
    }
    ?>

  <div class="titre">
      <h1>Classement Mondial - MDW</h1>
      <p><?php echo $output1; ?></p>
      <?php if (!isset($ni)) { ?>
      <button class="button-9" role="button" href="login.php" onclick="self.location.href='login.php'">S'inscrire !</button>
      <?php } ?>
  </div>
  <div class="container">
  <table class="responsive-table">
    <thead>
      <tr>
        <th scope="col">Rank</th>
        <th scope="col">Nom</th>
        <th scope="col">Pays</th></th>
        <th scope="col">Valeur Wallet</th>
        <th scope="col">Q BTC</th>
        <th scope="col">Q ETH</th>
        <th scope="col">Q BNB</th>
        <th scope="col">Q SOL</th>
        <th scope="col">Q LINK</th>
        <th scope="col">Q DOT</th>
        <th scope="col">Q ADA</th>
        <th scope="col">Q XRP</th>
        <th scope="col">Q AVAX</th>
        <th scope="col">Q LUNA</th>
      </tr>
    </thead>
    <tbody>

    <?php

    // connexion à la base de données
    $db_username = '254480';
    $db_password = 'Thomas&PierreMDW*';
    $db_name     = 'mydreamwallet_base';
    $db_host     = 'mysql-mydreamwallet.alwaysdata.net';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    $requete = "SELECT * FROM User ORDER BY vwallet DESC";
    $exec_requete = mysqli_query($db,$requete);
    $count = mysqli_num_rows($exec_requete);
    for ($j = 0; $j < $count; $j++) {
      $ligne = mysqli_fetch_array($exec_requete);
      $pseudo = $ligne["pseudo"];
      $nat = $ligne["natio"];
      $iduser = $ligne["id"];
      $valeurwallet = $ligne["vwallet"];
      $rank = $j + 1;
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
    echo"<tr>
    <td data-title='rang'>".$rank."</td>
    <td data-title='Name'>".$pseudo."</td>
    <td data-title='Nationalité'><img src='https://flagcdn.com/".$nat.".svg' width='70' height='50'</td>
    <td data-title='Valeur'>".$valeurwallet."</td>
    <td data-title='QBTC'>".$qbtc."</td>
    <td data-title='QETH'>".$qeth."</td>
    <td data-title='QBNB'>".$qbnb."</td>
    <td data-title='QSOL'>".$qsol."</td>
    <td data-title='QLINK'>".$qlink."</td>
    <td data-title='QDOT'>".$qdot."</td>
    <td data-title='QADA'>".$qada."</td>
    <td data-title='QXRP'>".$qxrp."</td>
    <td data-title='QAVAX'>".$qavax."</td>
    <td data-title='ALUNA'>".$qluna."</td>
    </tr>";
    }




    ?>
    </tbody>
  </table>
</div>
<div class="footer">
<div class="bordure"></div>
    <footer>
        <p>Site crée par Marchal Thomas & Attenot Pierre,</p>
        <p>Des questions ou suggestions ? Contacter nous</p><a href="contact.php" style="color:blue;">ici</a>
        <p>En étroite colaboration avec le NSI Gang</p>
        <p>Merci.</p>
    </footer>
</div>
</body>

</html>