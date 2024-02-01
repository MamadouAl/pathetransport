<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations de l'expediteur</title>
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
        }

        header h1 {
            margin: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
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

        .form-container {
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

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"],
        button {
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            background-color: #0072ce;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover,
        button:hover {
            background-color: #ff9900;
        }

        .required::after {
            content: "*";
            color: red;
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
        
    </style>
</head>
<body>
    <header>
        <h1>Formulaire d'envoi de colis</h1>
    </header>

    <div class="container">
        <div class="form-container">
            <h1>Informations de l'expéditeur</h1><hr>
            <p>Veuillez remplir le formulaire ci-dessous pour envoyer votre colis. Les champs marqués d'un (<span class="required"></span>) sont obligatoires.</p>

            <!-- Formulaire d'envoi de colis -->
            <form method="POST" action="traitement_form.php">
                <label>Nom <span class="required"></span>:</label>
                <input type="text" name="exp_nom" required><br>

                <label>Prénom <span class="required"></span>:</label>
                <input type="text" name="exp_prenom" required><br>

                <label>Email:</label>
                <input type="email" name="exp_mail"><br>

                <label>Numéro de téléphone <span class="required"></span>:</label>
                <div class="phone-input">
                    <select name="exp_indicatif">
                        
                        <option value="+33">France +33</option>
                        <option value="+224">Guinée +224</option>
                        <!-- Ajoutez d'autres options pour les indicatifs de pays ici -->
                    </select>
                    <input type="text" name="exp_numero" required>
                </div>
                

                <label>Ville <span class="required"></span>:</label>
                <input type="text" name="exp_ville" required><br>

                <label>Adresse <span class="required"></span>:</label>
                <input type="text" name="exp_adresse" required><br>

                <input type="hidden" name="exp_num_suivi" value="00" required>
                <input type="hidden" name="exp_date_livraison" value="<?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $mois = $_POST['mois'];
                        $creneauSelectionne = $_POST['creneau-selectionne'];

                        echo $creneauSelectionne." ". ucfirst($mois) ;
                    }
                ?>" required><br>

                <input type="submit" name="submit" value="Envoyer le colis">
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

