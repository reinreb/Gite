<!DOCTYPE html>
<html>
    <head>
        <title>Quoi visiter ? &#8211; L'Escale : Loire et châteaux</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styleprojet.css"/>
        <link rel="shortcut icon" href="logoescale.png"/>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div id="main">
            <section class="resultats">
                <div class="resultats-container">
                    <h1>Résultats de la recherche</h1>
                    <?php
                        include 'fonction.php';

                        $connection = connexion();
                        // vérification : si le type de lieu a été sélectionné
                        if (isset($_GET['type_lieu'])) {
                            $typeLieu = $_GET['type_lieu'];

                            $req = "SELECT * FROM lieux_touristiques WHERE type_lieu = '$typeLieu'";

                            $data = requete($connection, $req);

                            // vérification : s'il y a des résultats
                            if (mysqli_num_rows($data) > 0) {
                                // Afficher les résultats dans un tableau
                                echo "<table>";
                                echo "<tr><th>Nom</th><th>Description</th><th>Localisation</th><th>Distance</th><th>Image</th><th>Site Web</th></tr>";
                                while ($row = mysqli_fetch_assoc($data)) {
                                    echo "<tr>";
                                    echo "<td>".$row['nom_lieu']."</td>";
                                    echo "<td>".$row['description_lieu']."</td>";
                                    echo "<td>".$row['adresse_lieu']."</td>";
                                    echo "<td>".$row['distance_lieu']."     km </td>";
                                    echo "<td><img src='affichageimage.php?id_lieu=".$row['id_lieu']."&id_image=".$row['id_image']."' alt='".$row['nom_lieu']."'></td>";
                                    echo "<td>Site : <a href='".$row['lien_lieu']."' target='_blank'>".$row['nom_lieu']."</a></td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                            } else {
                                echo "Aucun résultat trouvé pour ce type de lieu.";
                            }
                            close($connection);
                        }
                    ?>
                </div>
            </section> 
        </div>
    </body>
</html>
