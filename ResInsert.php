<!DOCTYPE html>
<html>
    <head>
        <title>Reservation &#8211; L'Escale : Loire et châteaux</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styleprojet.css"/>
        <link rel="shortcut icon" href="logoescale.png"/>
    </head>
    <body >
        <?php include 'header.php'; ?>
        <div id="main">
            <?php
            include 'fonction.php';

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                // vérifie si toutes les données nécessaires sont présentes
                if(isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['tel'], $_POST['date_arrivee'], $_POST['date_depart'], $_POST['adultes'], $_POST['enfants'])) {

                    //récupération des données pour la table clients
                    $nom = $_POST['nom'];
                    $prenom=$_POST['prenom'];
                    $email=$_POST['email'];
                    $tel=$_POST['tel'];

                    //requête clients
                    $req_client ="INSERT INTO clients (nom_client, prenom_client, email_client, telephone_client) VALUES ('$nom','$prenom','$email','$tel')";

                    //echo "$req_client <br>";

                    $connection = connexion();

                    if($connection) {

                        $data_client = requete($connection,$req_client);

                        // vérifie si l'insertion du client est bonne
                        if($data_client) {

                            //récupération de l'id du client en question pour reservations
                            $id_client = mysqli_insert_id($connection);

                            //récupération des données pour la table reservations
                            $date_arrivee=$_POST['date_arrivee'];
                            $date_depart=$_POST['date_depart'];
                            $adultes=$_POST['adultes'];
                            $enfants=$_POST['enfants'];

                            //requête reservations
                            $req_reservation ="INSERT INTO reservations (date_arrivee, date_depart, nb_adultes, nb_enfants, id_client, id_paiement, prix, statut) VALUES ('$date_arrivee','$date_depart','$adultes','$enfants', '$id_client', NULL, NULL, NULL)";

                            //echo "$req_reservation <br>";

                            $data_reservation = requete($connection,$req_reservation);
                            // vérifie si l'insertion de la reservation est bonne
                            if($data_reservation) {
                                echo "<p>La réservation a été ajoutée avec succès</p>";
                            } else {
                                echo "<p>Echec de la réservation. Veuillez réessayer</p>";
                            }
                        }
                        close($connection);
                    }
                }
            }
            ?>
        </div>
        <div class="btnres">
            <!-- javascript:history.back() permet de retourner à la dernière page de l'historique -->
                <a class="btn" href="javascript:history.back()">RETOUR A LA PAGE DE RESERVATION</a>
            </div>
    </body>
</html>
