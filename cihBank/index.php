<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400;500;600;700&family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
    <title>cihbankk</title>
</head>
<body>


    <section class="container">
        <div class="login-container">
            <div class="circle circle-one"></div>
            <div class="form-container">
                <img src="img/pic.jpg" alt="illustration" class="illustration" />
                <h1 class="opacity">LOGIN</h1>
                <form action="./login.php" method="POST">
                    <input type="text" name="email" placeholder="USERNAME" />
                    <input type="password" name="password" placeholder="PASSWORD" />
                    <div style="color: red; margin-bottom: 15px"><?php if (isset($_GET['error'])) echo "Invalide email and password" ?></div>
                    <button class="opacity">SUBMIT</button>
                </form>
</div>
        <div class="theme-btn-container"></div>
    </section>
    <footer>
      <p>&#169; copyright-k-bank</p>
    </footer>
    <script src="main.js"></script>
</body>
</html>

<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "cihbank";

// $cnx = new mysqli($servername, $username, $password, $dbname);

// if ($cnx->connect_error) {
//     die("Connection failed: " . $cnx->connect_error);
// }

// $sql = "SELECT * FROM client";

// $result = $cnx->query($sql);

// die($result)    

/*



$sqlClient = "INSERT INTO client (nom, prenom, dateNais, nationalite, genre)

VALUES ('Elhaini', 'Kawtar', '2006-01-08', 'Marocaine', 'Femme')";

if ($cnx->query($sqlClient) === TRUE) {
    $clientID = $cnx->insert_id;

    
    $sqlCompte = "INSERT INTO compte (balance, devise, rib, clientid)
    VALUES ('1000', '$', '123456789', $clientID)";

    if ($cnx->query($sqlCompte) === TRUE) {
        
        $sqlTransaction = "INSERT INTO transactions (montant, types, clientid)
        VALUES ('500', 'Credit', $clientID)";

        if ($cnx->query($sqlTransaction) === TRUE) {
            echo "Données insérées avec succès";
        } else {
            echo "Erreur d'insertion dans la table transactions: " . $cnx->error;
        }
    } else {
        echo "Erreur d'insertion dans la table compte: " . $cnx->error;
    }
} else {
    echo "Erreur d'insertion dans la table client: " . $cnx->error;
}


$cnx->close();
*/ 
?>




