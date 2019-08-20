<!DOCTYPE html>
<html>
    <head>
        <title>Exam.</title>
        <!-- The JavaScript & include -->
        <link type="text/css" rel="stylesheet" href="css/index.css" media="screen"/>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/writer.js"></script>
        <script type='text/javascript' src="js/jparticle.jquery.js"></script>
    </head>
    <body>
<!-----------------------------------NOTIF----------------------------------->
        <div class="newsletter">
            <div>
            <div class="entete entete_proj"><p class="top_titre"><a>N'hésitez pas à vous abonner au Newsletter.</a></div>
            <?php
                if(isset($_POST['mailform'])){
                    if(!empty($_POST['mail'])){
                        $header="MIME-Version: 1.0\r\n";
                        $header.='From:"Newsletter"<mleo1998@gmail.com>'."\n";
                        $header.='Content-Type:text/html; charset="uft-8"'."\n";
                        $header.='Content-Transfer-Encoding: 8bit';
                        $message='
                        <html>
                            <body>
                                <div>
                                    <br/>
                                    <u>Vous avez un nouvel abonné au newletters !.<br/>
                                    <u>Mail de l\'abonné :</u>'.$_POST['mail'].'<br/>
                                </div>
                            </body>
                        </html>
                        ';
						mail("mleo1998@gmail.com", "Nouvel abonné aux Newsletter", $message, $header);
						$msg="Vous êtes maintenant inscrit au Newsletter !";    
					}else{
                        $msg="Renseignez votre adresse mail !";
                    }
                }?>
            <div>
                <form method="POST" action="">
                    <input type="email" name="mail" placeholder="Entrez votre adresse mail" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" />
                    <input type="submit" value="Envoyer !" name="mailform"/>
                </form>
                <?php if(isset($msg)) echo $msg; ?>
            </div>
        </div>
        </div>
<!-------------------------------MENU--------------------------------------->
        <div class="menu">
            <ul class="nav">
                <li><a class="btn" href="#index">Accueil</a></li>
                <li><a class="btn" href="#product">Produit</a></li>
            </ul>
        </div>
<!---------------------------------INDEX----------------------------------->
        <div class="section_index index" id="index">
                <div class="accueil">
                    <p class="titre" id="txt">I'm 
                    <span class="txt-type" data-wait="1000" data-words='["Developer", "Designer", "Creator"]'></span>
                    </p>
                    <br><br><br>
                    <p class="sous_titre">FOR TOMORROW JOBS</p>
                </div>
            </div>
        </div>
<!-----------------------------------PRODUCT--------------------------------->        
        <div class="section_product contact" id="product">
                <img class="img" src="src/1.png"/>
                <img class="img" src="src/2.jpg"/>
                <img class="img" src="src/3.png"/>
                <img class="img" src="src/4.png"/>
            </div>
        </div>
<!---------------------------------------------------------------------------->  
    </body>
</html>
