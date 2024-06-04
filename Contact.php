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
            <section class="contact">
                <div class="content">
                    <h2>Contactez-nous</h2><br>
                    <p>Questions, suggestions ou salutations ? Utilisez le formulaire ci-dessous. Votre avis compte et nous vous répondrons rapidement !</p>
                </div>
                <div class="container">
                    <div class="contactinfo">
                        <div class="box">
                            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 20.8995L16.9497 15.9497C19.6834 13.2161 19.6834 8.78392 16.9497 6.05025C14.2161 3.31658 9.78392 3.31658 7.05025 6.05025C4.31658 8.78392 4.31658 13.2161 7.05025 15.9497L12 20.8995ZM12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364L12 23.7279ZM12 13C13.1046 13 14 12.1046 14 11C14 9.89543 13.1046 9 12 9C10.8954 9 10 9.89543 10 11C10 12.1046 10.8954 13 12 13ZM12 15C9.79086 15 8 13.2091 8 11C8 8.79086 9.79086 7 12 7C14.2091 7 16 8.79086 16 11C16 13.2091 14.2091 15 12 15Z"></path></svg>
                            </div>
                                <div class="texte">
                                    <h3>Adresse</h3>
                                    <p>32 Route de Blois, <br>41120 Les Montils</p>
                                </div>
                        </div>
                        <div class="box">
                            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M21 3C21.5523 3 22 3.44772 22 4V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V19H20V7.3L12 14.5L2 5.5V4C2 3.44772 2.44772 3 3 3H21ZM8 15V17H0V15H8ZM5 10V12H0V10H5ZM19.5659 5H4.43414L12 11.8093L19.5659 5Z"></path></svg>
                            </div>
                                <div class="texte">
                                    <h3>Mail</h3>
                                    <p>contact.gitelescale@gmail.com</p>
                                </div>
                        </div>
                        <div class="box">
                            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M9.36556 10.6821C10.302 12.3288 11.6712 13.698 13.3179 14.6344L14.2024 13.3961C14.4965 12.9845 15.0516 12.8573 15.4956 13.0998C16.9024 13.8683 18.4571 14.3353 20.0789 14.4637C20.599 14.5049 21 14.9389 21 15.4606V19.9234C21 20.4361 20.6122 20.8657 20.1022 20.9181C19.5723 20.9726 19.0377 21 18.5 21C9.93959 21 3 14.0604 3 5.5C3 4.96227 3.02742 4.42771 3.08189 3.89776C3.1343 3.38775 3.56394 3 4.07665 3H8.53942C9.0611 3 9.49513 3.40104 9.5363 3.92109C9.66467 5.54288 10.1317 7.09764 10.9002 8.50444C11.1427 8.9484 11.0155 9.50354 10.6039 9.79757L9.36556 10.6821ZM6.84425 10.0252L8.7442 8.66809C8.20547 7.50514 7.83628 6.27183 7.64727 5H5.00907C5.00303 5.16632 5 5.333 5 5.5C5 12.9558 11.0442 19 18.5 19C18.667 19 18.8337 18.997 19 18.9909V16.3527C17.7282 16.1637 16.4949 15.7945 15.3319 15.2558L13.9748 17.1558C13.4258 16.9425 12.8956 16.6915 12.3874 16.4061L12.3293 16.373C10.3697 15.2587 8.74134 13.6303 7.627 11.6707L7.59394 11.6126C7.30849 11.1044 7.05754 10.5742 6.84425 10.0252Z"></path></svg>
                            </div>
                                <div class="texte">
                                    <h3>Téléphone</h3>
                                    <p>06 60 23 29 90</p>
                                </div>
                        </div> 
                    </div>
                    <div class="contactform">
                        <form action="ContactInsert.php" method="post">
                            <h2>Envoyer un message</h2>
                            <div class="inputbox">
                                <input type="text" name="nom" required="required" pattern="^[A-Za-z]$">
                                <span>Nom</span>
                            </div>
                            <div class="inputbox">
                                <input type="text" name="prenom" required="required" pattern="^[A-Za-z]$">
                                <span>Prénom</span>
                            </div>
                            <div class="inputbox">
                                <input type="text" name="email" required="required" title="email@boitemail.com" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}$">
                                <span>Email</span>
                            </div>
                            <div class="inputbox">
                                <textarea name="message" required="required"></textarea>
                                <span>Ecrivez votre message ici</span>
                            </div>
                            <div class="inputbox">
                                <input type="submit" name="submit" value="Envoyer">
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
        <div class="footercontact">
        </div>
    </body>
</html>
