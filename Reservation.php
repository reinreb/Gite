<!DOCTYPE html>
<html>
    <head>
        <title>Reservation &#8211; L'Escale : Loire et châteaux</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styleprojet.css"/>
        <link rel="shortcut icon" href="logoescale.png"/>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div id="main">
            <section class="main-reserver">
                <section class="reserver">
                        <div class="resform">
                            <form action="ResInsert.php" method="post">
                                <h2>Faire une réservation</h2>
                                <div class="inputbox">
                                    <!-- pattern : ^ -> debut de chaine , $ -> fin de chaine -->
                                    <input type="text" name="nom" required="required" pattern="[A-Za-z]+">
                                    <span>Nom</span>
                                </div>
                                <div class="inputbox">
                                    <input type="text" name="prenom" required="required" pattern="[A-Za-z]+">
                                    <span>Prénom</span>
                                </div>
                                <div class="inputbox">
                                    <input type="text" name="email" required="required" title="email@boitemail.com" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}$">
                                    <span>Email</span>
                                </div>
                                <div class="inputbox">
                                    <input type="tel" name="tel" required="required" pattern="^[0-9]{10}$">
                                    <span>Téléphone</span>
                                </div>
                                <div class="inputbox">
                                    <input type="date" name="date_arrivee" required="required">
                                    <span>Date d'arrivée</span>
                                </div>
                                <div class="inputbox">
                                    <input type="date" name="date_depart" required="required" >
                                    <span>Date de départ</span>
                                </div>
                                <div class="inputbox">
                                    <input type="number" name="adultes" required="required" pattern="^[0-9]$">
                                    <span>Nombre d'adultes</span>
                                </div>
                                <div class="inputbox">
                                    <input type="number" name="enfants" required="required" pattern="^[0-9]$">
                                    <span>Nombre d'enfants</span>
                                </div>
                                <div class="inputbox">
                                    <input type="submit" name="submit" value="Réserver">
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </section> 
        </div>
    </body>
</html>
