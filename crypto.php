<!DOCTYPE html>
<head>
    <title>My Dream Wallet</title>
    <link rel="stylesheet" href="css/stylecrypto.css">
    <link rel="icon" type="image/png" href="images/logowalletbtc.png">
    <meta name="Description" content="Data films et series" />
    <?php include("menu.php"); ?>
</head>
<body>

<?php 

$valeur  = "new_utilisateur";
$valeur2 = "mail";
$valeur3 = "nationalité";
$valeur4 = "id";
$nu="";
if (isset ($_SESSION['pseudo'])){
    $npseudo = $_SESSION['pseudo'];
    $nmail = $_SESSION['mailA'];
    $nnatio = $_SESSION['natio'];
    $nid = $_SESSION['id'];
}

if ($nu == null) {
$output1 = $valeur;
$output2 = $valeur2;
$output3 = $valeur3;
$output4 = $valeur4;
} else {
$output1 = $npseudo;
$output2 = $nmail;
$output3 = $nnatio;
$output4 = $nid;
}



$db_username = '254480';
$db_password = 'Thomas&PierreMDW*';
$db_name     = 'mydreamwallet_base';
$db_host     = 'mysql-mydreamwallet.alwaysdata.net';
$db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
    or die('could not connect to database');
$requete = "SELECT * FROM User WHERE id='".$output4."'; ";
$exec_requete = mysqli_query($db,$requete);
$count = mysqli_num_rows($exec_requete);
for ($j = 0; $j < $count; $j++) {
  $ligne = mysqli_fetch_array($exec_requete);
  $pseudo = $ligne["pseudo"];
  $nat = $ligne["natio"];
  $iduser = $ligne["id"];
}


?>

<!-- input tag -->
<input id="searchbar" onkeyup="search_crypto()" type="text"
        name="search" placeholder="Trouver une crypto..">
      
    <!-- ordered list -->
    <ol id='list'>
        <li class="cryptobar">BITCOIN</li>
        <li class="cryptobar">ETHEREUM</li>
        <li class="cryptobar">BINANCE COIN</li>
        <li class="cryptobar">SOLANA</li>
        <li class="cryptobar">CHAIN LINK</li>
        <li class="cryptobar">POLSKA DOT</li>
        <li class="cryptobar">CARDANO</li>
        <li class="cryptobar">XRP</li>
        <li class="cryptobar">AVAX</li>
        <li class="cryptobar">LUNA</li>
    </ol>
      
    <!-- linking javascript -->
    <script src="js/search.js"></script>

<div class="container">
  <table class="responsive-table">
    <thead>
      <tr>
        <th scope="col">Crypto - MDW</th>
        <th scope="col">%UP/DOWN</th></th>
        <th scope="col">Market Cap</th>
        <th scope="col">Quantity</th>
        <th scope="col">Price</th>
        <th scope="col">Buy</th>
        <th scope="col">Sell</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">BITCOIN</th>
        <td data-title="Released">//</td>
        <td data-title="Studio">//</td>
        <td data-title="Worldwide Gross" data-type="currency">//</td>
        <td data-title="Domestic Gross" data-type="currency" id="stock-price-btc">BTC</td>
        <td data-title="International Gross" data-type="currency"><div class="button-green">Buy</div></td>
        <td data-title="Budget" data-type="currency"><div class="button-red">Sell</div></td>
      </tr>
      <tr>
        <th scope="row">ETHEREUM</th>
        <td data-title="Released">//</td>
        <td data-title="Studio">//</td>
        <td data-title="Worldwide Gross" data-type="currency">//</td>
        <td data-title="Domestic Gross" data-type="currency" id="stock-price-eth">ETH</td>
        <td data-title="International Gross" data-type="currency"><div class="button-green">Buy</div></td>
        <td data-title="Budget" data-type="currency"><div class="button-red">Sell</div></td>
      </tr>
      <tr>
        <th scope="row">BINANCE COIN</th>
        <td data-title="Released">//</td>
        <td data-title="Studio">//</td>
        <td data-title="Worldwide Gross" data-type="currency">//</td>
        <td data-title="Domestic Gross" data-type="currency" id="stock-price-bnbbtc">BNBC</td>
        <td data-title="International Gross" data-type="currency"><div class="button-green">Buy</div></td>
        <td data-title="Budget" data-type="currency"><div class="button-red">Sell</div></td>
      </tr>
       <tr>
        <th scope="row">SOLANA</th>
        <td data-title="Released">//</td>
        <td data-title="Studio">//</td>
        <td data-title="Worldwide Gross" data-type="currency">//</td>
        <td data-title="Domestic Gross" data-type="currency" id="stock-price-sol">SOL</td>
        <td data-title="International Gross" data-type="currency"><div class="button-green">Buy</div></td>
        <td data-title="Budget" data-type="currency"><div class="button-red">Sell</div></td>
      </tr>
      <tr>
        <th scope="row">CHAIN LINK</th>
        <td data-title="Released">//</td>
        <td data-title="Studio">//</td>
        <td data-title="Worldwide Gross" data-type="currency">//</td>
        <td data-title="Domestic Gross" data-type="currency" id="stock-price-link">LINK</td>
        <td data-title="International Gross" data-type="currency"><div class="button-green">Buy</div></td>
        <td data-title="Budget" data-type="currency"><div class="button-red">Sell</div></td>
      </tr>
      <tr>
        <th scope="row">POLKA DOT</th>
        <td data-title="Released">//</td>
        <td data-title="Studio">//</td>
        <td data-title="Worldwide Gross" data-type="currency">//</td>
        <td data-title="Domestic Gross" data-type="currency" id="stock-price-dot">DOT</td></td>
        <td data-title="International Gross" data-type="currency"><div class="button-green">Buy</div></td>
        <td data-title="Budget" data-type="currency"><div class="button-red">Sell</div></td>
      </tr>
      <tr>
        <th scope="row">CARDANO</th>
        <td data-title="Released">//</td>
        <td data-title="Studio">//</td>
        <td data-title="Worldwide Gross" data-type="currency">//</td>
        <td data-title="Domestic Gross" data-type="currency" id="stock-price-wbt">ADA</td>
        <td data-title="International Gross" data-type="currency"><div class="button-green">Buy</div></td>
        <td data-title="Budget" data-type="currency"><div class="button-red">Sell</div></td>
      </tr>
      <tr>
        <th scope="row">XRP</th>
        <td data-title="Released">//</td>
        <td data-title="Studio">//</td>
        <td data-title="Worldwide Gross" data-type="currency">//</td>
        <td data-title="Domestic Gross" data-type="currency" id="stock-price-xrp">XRP</td>
        <td data-title="International Gross" data-type="currency"><div class="button-green">Buy</div></td>
        <td data-title="Budget" data-type="currency"><div class="button-red">Sell</div></td>
      </tr>
      <tr>
        <th scope="row">AVAX</th>
        <td data-title="Released">//</td>
        <td data-title="Studio">//</td>
        <td data-title="Worldwide Gross" data-type="currency">//</td>
        <td data-title="Domestic Gross" data-type="currency" id="stock-price-ava">AVAX</td>
        <td data-title="International Gross" data-type="currency"><div class="button-green">Buy</div></td>
        <td data-title="Budget" data-type="currency"><div class="button-red">Sell</div></td>
      </tr>
      <tr>
        <th scope="row">LUNA</th>
        <td data-title="Released">//</td>
        <td data-title="Studio">//</td>
        <td data-title="Worldwide Gross" data-type="currency">//</td>
        <td data-title="Domestic Gross" data-type="currency" id="stock-price-lun">LUNA</td>
        <td data-title="International Gross" data-type="currency"><div class="button-green">Buy</div></td>
        <td data-title="Budget" data-type="currency"><div class="button-red">Sell</div></td>
      </tr>
    </tbody>
  </table>
</div>
<div id="askcrypto">
    <?php
    if (isset ($_REQUEST['carotte'])){
      $vote = $_REQUEST['carotte'];
      echo $vote;
    }
    ?> 
    </div>
<script src='js/eth.js'></script>
</body>
</html>