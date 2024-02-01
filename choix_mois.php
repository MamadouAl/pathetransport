<!DOCTYPE html>
<html>
<head>
    
 <meta charset="UTF-8">
 <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.8.1/slick.css"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Choix du mois</title>
    
    <style>
        
        
        /* Définir les styles pour les écrans larges */
        @media screen and (min-width: 768px) {
            /* Styles spécifiques pour les écrans larges */
        }
        
        /* Définir les styles pour les écrans de taille moyenne */
        @media screen and (max-width: 767px) {
            /* Styles spécifiques pour les écrans de taille moyenne */
        }
        
        /* Définir les styles pour les petits écrans (mobiles) */
        @media screen and (max-width: 480px) {
            /* Styles spécifiques pour les petits écrans (mobiles) */
        }
    
    /* Styles CSS pour la mise en page */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        
        header {
            background-color: #0072ce;
            color: #fff;
            padding: 1.7%;
            text-align: center;
			margin: 0 auto;
           /* max-width: 63%; */
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }


        header h1 {
            margin: 0;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        footer p {
            margin: 0;
        }

        .content {
            background-color: #fff;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
            text-align:center;
        }

        p {
            margin-bottom: 10px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            background-color: #0072ce;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #ff9900;
        }
        
        
        nav {
            /*background-color: #007bff; */
            color: #fff;
            padding: 10px;
           /* text-align: center; */
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
       
       .container img {
         width: 100%;
         height : 100%;
        } 
   
       
        
    </style>
</head>
<body>
    <header>
        <h1>Choix du mois</h1>
    </header>



    <div class="container">
        <div class="content">
     
            <h2> Bienvenue sur la page de sélection du mois ! </h2>
            
                <p><img src="./images/GuineeCarte.png" alt="Envoi de colis en France Metropolitaine en camionnette"></p>
            
        <p> Ici, vous pouvez choisir le mois pour lequel vous souhaitez consulter les créneaux disponibles.</p>
        <p> Sélectionnez simplement le mois souhaité dans le menu déroulant, puis cliquez sur le bouton <b>Voir les créneaux</b>. Vous serez dirigé vers la page suivante qui affichera le calendrier des créneaux disponibles pour ce mois. </p>

        <p>Assurez-vous de choisir le mois approprié et de planifier vos colis en fonction des créneaux disponibles. </p>
        <p>Profitez de la flexibilité offerte par notre système de réservation en ligne et planifiez vos envois de colis en toute simplicité !</p>


            <!-- Sélection du mois -->
            <form method="GET" action="choix_creneau.php">
                <label for="mois">Sélectionnez le mois qui vous convient :</label>
                <select name="mois" id="mois">
                    <option value="aout">Août</option>
                    <option value="octobre">Octobre</option>
                    <option value="décembre">Décembre</option>
                    <!-- Ajoutez les options pour les autres mois ici... -->
                </select>
                <input type="submit" value="Voir les créneaux">
            </form>
            

        </div>
    </div>

    <footer>
        
        <nav>
        <ul>
			<li><a href="index.php">Accueil</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    
    
    <hr>
    &copy; 2023 pathe_transport. Tous droits réservés | Politique de confidentialité | Mentions légales | Politique de cookies.

    </footer>

</body>
</html>

