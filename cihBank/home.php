<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cih BANK</title>
    <link rel="stylesheet" href="styleE.css">
    <script src="https://kit.fontawesome.com/96dcb489df.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- section acceuil -->
     <section id="container">
      <header>
        <div class="logo">
            <p>CIHBANK</p>
        </div>

        <!-- menu responsive -->
        <div class="menu-toggle"></div>

        <ul class="menu">
            <li><a href="#container">acceuil</a></li>
            <li><a href="#a-propos">à propos</a></li>
            <li><a href="#gallerie">Nos cartes</a></li>
            <li><a href="#contact">contact</a></li>
        </ul>
      </header>
      <div class="container-text">
          <h1>CIH BANK</h1>
          <p>CIH BANK MET à VOTRE DISPOSITION TOUS SES CANAUX POUR ENVOYER VOS DONS GRATUITEMENT AU PROFIT DU "FONDS SPéCIAL POUR LA GESTION DES EFFETS DU TREMBLEMENT DE TERRE"</p>
          <a href="index.php">login</a>
      </div>
    </section> 

    <!-- section a propos -->
     <section id="a-propos">
        <div>
            <p class="tittle-section">à propos</p>
            <h1 class="sub-tittle-section">Qui sommes nous </h1>
            <div class="description-photo">
                    <div class="desc">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam id voluptatibus dolor facere aperiam numquam quisquam libero minima nostrum, ut laborum veniam, nesciunt a. Quod minima cupiditate ad. Veritatis, amet.</p>

                        <H2>NOS SERVICES</H2>
                        <div class="list-services">
                            <div class="service">
                                <i class="fas fa-tachometer-alt"></i>
                                <p>RAPIDE</p>
                            </div>
                            <div class="service">
                                <i class="fas fa-money-check-alt"></i>
                                <p>ECONOMIQUE</p>
                            </div>
                            <div class="service">
                                <i class="fas fa-check"></i>
                                <p>FIABLE</p>
                            </div>
                        </div>
                </div>
                <img src="img/cihmobile.jpg" alt="">
            </div>
        </div>
    </section> 

    <!-- section gallerie destination -->
    <section id="gallerie">
            <p class="tittle-section">NOS CARTES</p>
            <!-- <h1 class="sub-tittle-section">les pays de vos rêves </h1> -->
            <div class="liste-photos">
                <div class="gallerie-img">
                    <img src="img/carte1.jpg" alt="">
                    <div class="show-country"><p>CARTE CODE 30</p></div>
                </div>
                <div class="gallerie-img">
                    <img src="img/carte2.jpg" alt="">
                    <div class="show-country"><p>CARTE GO</p></div>
                </div>
                <div class="gallerie-img">
                    <img src="img/carte3.jpg" alt="">
                    <div class="show-country"><p>CARTE SAYIDATI</p></div>
                </div>
                <div class="gallerie-img">
                    <img src="img/carte4.jpg" alt="">
                    <div class="show-country"><p>CARTE CODE 60</p></div>
                </div>
                <div class="gallerie-img">
                    <img src="img/carte5.jpg" alt="">
                    <div class="show-country"><p>CARTE VISA GOLD</p></div>
                </div>
                <div class="gallerie-img">
                    <img src="img/carte6.jpg" alt="">
                    <div class="show-country"><p>CARTE VISA PLATINIUM</p></div>
                </div>
            </div>
    </section> 

<!--  section contact -->
    <section id="contact">
        <p class="tittle-section">...........</p>
        <h1 class="sub-tittle-section">-------------</h1>
        <div>
            <form action="">
                <label>Adresse Mail</label>
                <input type="text" placeholder="Ex: azerty@gmail.com">
                <label>Message</label>
                <textarea name="" id="" cols="30" rows="10" placeholder="Votre message..."></textarea>
                <input type="submit" value="ENVOYER">
            </form>
            <div class="images-contact">
                <img src="img/CIH-Bank.jpg" alt="">
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer>
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
			
        <p>	© 2023 CIH BANK</p>
    </footer>

<script>
    var menu_toggle = document.querySelector('header .menu-toggle');
    var menu = document.querySelector('header .menu');
    menu_toggle.onclick = function(){
        menu_toggle.classList.toggle('active') ; 
        menu.classList.toggle('responsive') ; 
    }
</script>

</body>
</html>