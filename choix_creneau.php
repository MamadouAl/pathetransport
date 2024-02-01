<?php
// Tableau des créneaux disponibles pour chaque mois (exemple)
$creneaux_disponibles = array(
    'aout' => array(
        30 // Créneaux disponibles pour aout
    ),
    'octobre' => array(
        20 // Créneaux disponibles pour octobre
    ),
    'décembre' => array(
        15 // Créneaux disponibles pour décembre
    ),
    
    // Ajoutez les créneaux disponibles pour les autres mois ici...
);

// Récupérer le mois sélectionné depuis la page précédente
$mois = isset($_GET['mois']) ? $_GET['mois'] : null;

// Vérifier si le mois est valide
if ($mois === null || !array_key_exists($mois, $creneaux_disponibles)) {
    echo "Mois invalide.";
    exit;
}

// Récupérer le nombre de jours dans le mois et l'année en cours (2023)
$nombre_jours = cal_days_in_month(CAL_GREGORIAN, date('m'), 2023);

// Récupérer les créneaux disponibles pour le mois sélectionné
$creneaux = $creneaux_disponibles[$mois];
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendrier des créneaux disponibles</title>
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
			display: flex;
    		align-items: center;
           /* max-width: 63%; */
           display: flex;
    align-items: center; /* Aligner verticalement */
    padding: 20px 0; /* Ajouter un peu d'espace autour du header */
    justify-content: center; /* Centrer horizontalement */
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
        }

        p {
            margin-bottom: 10px;
            line-height: 1.5;
            font-size : 18px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th,
        table td {
            padding: 8px;
            text-align: center;
            border: 1px solid #ccc;
        }

        .creneau-disponible {
            background-color: green;
            color: white;
            font-weight: bold;
        }

        .creneau-selectionne {
            background-color: red;
            color: white;
            font-weight: bold;
        }

        form {
            margin-top: 20px;
            text-align: center;
        }

        input[type="text"] {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
            width: 100%;
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
        
        /* Espacement entre les éléments */
		header ul {
			margin: 0;
			padding: 0;
			list-style: none;
			display: flex;
			gap: 30px; /* Espacement entre les éléments de la liste */
			
		}

/* Style de l'image dans la liste */
header ul img {
    border: none; /* Supprimer les bordures autour de l'image */
}
        
       
    </style>
    <script>
        function selectCreneau(creneau) {
            // Désélectionner tous les créneaux
            var creneaux = document.getElementsByClassName("creneau-disponible");
            for (var i = 0; i < creneaux.length; i++) {
                creneaux[i].classList.remove("creneau-selectionne");
            }

            // Sélectionner le créneau choisi
            var creneauChoisi = document.getElementById("creneau-" + creneau);
            creneauChoisi.classList.add("creneau-selectionne");

            // Mettre à jour la valeur du champ de formulaire avec le créneau choisi
            document.getElementById("creneau-selectionne").value = creneau;
        }
    </script>
</head>
<body>
<header><ul>
        <li><a href="index.php"> <img src="./images/icone0.png" alt=Accueil" title="Accueil" height="45" width="65"> </a></li>
        <li><h1>Calendrier des créneaux disponibles</h1></li>
        </ul>
 </header>
    <div class="container">
        

        <div class="content">
        <p><b>Vous êtes maintenant sur la page du calendrier des créneaux disponibles.</b> </p>
	<p> Ici, vous pouvez consulter les créneaux horaires disponibles pour le mois sélectionné.</p>
	<p> Les créneaux disponibles sont mis en évidence pour vous permettre de les identifier facilement. Si un créneau vous convient, cliquez simplement dessus pour le sélectionner. </br>
	Le créneau choisi sera affiché dans le champ de formulaire situé en bas de la page. Une fois que vous avez fait votre choix, vous pouvez cliquer sur le bouton <b>Réserver</b> pour traiter votre réservation. Assurez-vous de sélectionner un créneau qui correspond à vos besoins et de finaliser votre réservation en conséquence. </p>
	

            <h2>Calendrier des créneaux disponibles pour le mois : <i style="color: blue;"> <?php echo ucfirst($mois); ?></i></h2></hr>

            <table>
                <thead>
                    <tr>
                        <th>Dim</th>
                        <th>Lun</th>
                        <th>Mar</th>
                        <th>Mer</th>
                        <th>Jeu</th>
                        <th>Ven</th>
                        <th>Sam</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Détermination du premier jour du mois
                    $premier_jour = date('N', strtotime('2023-' . date('m', strtotime($mois . ' 1'))) - 1);

                    // Calcul des cellules vides avant le premier jour du mois
                    $cellules_vides = $premier_jour;

                    // Initialisation des compteurs pour les cellules du calendrier
                    $jour = 1;
                    $compteur = 0;

                    // Boucle pour afficher les cellules du calendrier
                    echo '<tr>';
                    while ($compteur < $cellules_vides) {
                        echo '<td></td>';
                        $compteur++;
                    }

                    // Boucle pour afficher les jours du mois avec les créneaux disponibles
                    while ($jour <= $nombre_jours) {
                        echo '<td>';
                        if (in_array($jour, $creneaux)) {
                            echo '<span class="creneau-disponible" id="creneau-' . $jour . '" onclick="selectCreneau(' . $jour . ')">' . $jour . '</span>';
                        } else {
                            echo $jour;
                        }
                        echo '</td>';

                        $jour++;
                        $compteur++;

                        // Passer à la prochaine ligne après chaque 7e jour
                        if ($compteur % 7 == 0) {
                            echo '</tr><tr>';
                        }
                    }

                    // Remplissage des cellules vides après le dernier jour du mois
                    while ($compteur % 7 != 0) {
                        echo '<td></td>';
                        $compteur++;
                    }

                    echo '</tr>';
                    ?>
                </tbody>
            </table>

            <!-- Formulaire de sélection du créneau -->
            <form method="POST" action="formulaire.php">
                <input type="hidden" name="mois" value="<?php echo $mois; ?>">
                <label for="creneau-selectionne">Choisissez un créneau disponible :</label>
                <input type="text" name="creneau-selectionne" id="creneau-selectionne" required>
                <input type="submit" name="submit" value="Réserver">

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

