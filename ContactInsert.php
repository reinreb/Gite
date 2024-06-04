<!DOCTYPE html>
<html>
    <head>
        <title>Contacts &#8211; L'Escale : Loire et châteaux</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styleprojet.css"/>
        <link rel="shortcut icon" href="logoescale.png"/>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div id="main">
                <?php
                include 'fonction.php';

                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    //vérifie si toutes les données nécessaires sont présentes
                    if(isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['message'])) {

                        //récupération des données pour la table contacts
                        $nom = $_POST['nom'];
                        $prenom = $_POST['prenom'];
                        $email = $_POST['email'];
                        $message = $_POST['message'];

                        $connection = connexion();

                        if($connection) {

                            $req_contacts = "INSERT INTO contacts (nom_contacts, prenom_contacts, email_contacts, message_contact) VALUES ('$nom', '$prenom', '$email', '$message')";
                            $res_contacts = requete($connection, $req_contacts);

                            //vérifie si l'insertion dans la table contacts est bonne
                            if($result_insert_message) {
                                //récupération de l'id du client en question
                                $id_client = mysqli_insert_id($connection);
                                $req_clients = "INSERT INTO clients (id_client, nom_client, prenom_client, email_client, telephone_client) VALUES ('$id_client', '$nom', '$prenom', '$email', NULL)";
                                $res_clients = requete($connection, $req_clients);

                                //vérifie si l'insertion dans la table clients est bonne
                                if($res_clients) {
                                    echo "<p>Le message a été envoyé avec succès</p>";
                                } else {
                                    echo "<p>Erreur lors de l'envoi du message. Veuillez réessayer</p>";
                                }
                                close($connection);
                            }
                        }
                    }
                }
            ?>
            <div class="btnres">
                <!-- javascript:history.back() permet de retourner à la dernière page de l'historique -->
                <a class="btn" href="javascript:history.back()">RETOUR A LA PAGE DE CONTACT</a>
            </div>
        </div>
    </body>
</html>