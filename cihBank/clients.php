<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>kbank</title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cihbank";

$cnx = new mysqli($servername, $username, $password, $dbname);
if ($cnx->connect_error) {
    die("Connection failed: " . $cnx->connect_error);
}

$sql = "SELECT id, nom, prenom, dateNais, nationalite, genre FROM client";
$result = $cnx->query($sql);

?>

<header>
<a href="index.php" class="logo"><img src="img/jpg.jpg" alt="" style="margin-left:10px ;margin-top:14px; width:80px; height: 65px"></a>
    <nav class="navigation">
        <a href="index.php">Home</a>
        <a href="clients.php">Clients</a>
        <a href="comptes.php">Comptes</a>
        <a href="transactions.php">Transactions</a>
    </nav>
</header>

<section class="tabclient">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de naissance</th>
                <th>Nationalité</th>
                <th>Genre</th>
                <th>Comptes</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['nom']}</td>
                        <td>{$row['prenom']}</td>
                        <td>{$row['dateNais']}</td>
                        <td>{$row['nationalite']}</td>
                        <td>{$row['genre']}</td>
                        <td><a href='comptes.php?comp={$row['id']}'>Afficher les comptes</a></td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='7'>Aucun client trouvé.</td></tr>";
            }
            $cnx->close();
            ?>
        </tbody>
    </table>
</section>

<footer>
    	<div class="box-top">
    		<div class="container">
    			<a href="https://www.cihbank.ma/accueil" class="logo">
    				<img src="https://www.cihbank.ma/themes/ciht/images/logo-footer.png" alt="Cih Bank">
    			</a>
    			<div class="menu-footer">	
    				<div class="col">
    					<a href="#" class="title">CIH BANK</a>
    					<ul>
    						<li>
                    	    <a href="https://www.cihbank.ma/en/cih-bank-Group">
    							CIH BANK Group
    						</a>
    						</li>
    						
    				</div>
    			</div>
    			<p>
    				CIH BANK est assujetti à la loi N° 09-08, relative à la protection des personnes physiques à l'égard du traitement des données personnelles et elle a pris ses dispositions pour en respecter la lettre et l'esprit.
    			</p>
    		</div>	
    	</div>
    	<div class="box-bottom">
    		<div class="container">
    			<ul>
    				<li>
    					<a href="https://www.cihbank.ma/notice-legale">
    						Notice légale 
    				
    					<a href="https://www.cihbank.ma/tarification">
    				 		Tarification 
    					</a>
    				</li>
    				<li>
    					<a href="https://www.cihbank.ma/etre-contacter">
    						Réclamations
    					</a>
    				</li>
    				<li>
    					<a href="https://www.cihbank.ma/politique-qualite">
    						Politique qualité  
    					</a>
    				</li>
    			</ul>
				© 2023 CIH BANK
    			<div class="reseau-sociaux">
    				<a href="https://www.facebook.com/cihbank/" class="facebook" target="_blank">
    					<i class="fa fa-facebook"></i>
    				</a>
    				<a href="https://twitter.com/cihbank" class="twitter" target="_blank">
    					<i class="fa fa-twitter"></i>
    				</a>
    				<a href="https://www.instagram.com/cihbankma/" class="instagram" target="_blank">
    					<i class="fa fa-instagram"></i>
    				</a>
    				<a href="https://www.youtube.com/channel/UC2sZyU1dfxLlMIBGGvquJWg" class="youtube" target="_blank">
    					<i class="fa fa-youtube-play"></i>
    				</a>
    				<a href="https://www.linkedin.com/company/cihbank/" class="linkedin" target="_blank">
    					<i class="fa fa-linkedin"></i>
    				</a>
    			</div>
    			<h1>
    			    © 2023 CIH BANK
    			</h1>
    			<div class="clr"></div>
    		</div>
    	</div>	
    </footer>
</body>
</html>
