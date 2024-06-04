<?php
include 'fonction.php';
$connection = connexion();
//vérifie si id_lieu et id_image sont bien définis
if(isset($_GET['id_lieu']) && isset($_GET['id_image'])) {
    $idLieu = $_GET['id_lieu'];
    $idImage = $_GET['id_image'];
    $req = "SELECT url_image FROM image_lieu WHERE id_lieu = $idLieu AND id_image = $idImage";
    $res = requete($connection, $req);
    if($res && mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        $imageUrl = $row['url_image'];
        // Affichage de l'image du lieu en question
        header("Content-type: image/jpeg"); //type MIME : indique au navigateur qu'il s'agit d'une image jpeg
        readfile($imageUrl); //permet de lire l'image à partir de son url
    }
}
close($connection);
?>
