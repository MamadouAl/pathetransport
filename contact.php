<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"> <!-- Ajoutez ici votre fichier CSS -->
    <title>Contactez-nous</title>
    <style>
    
    /* Styles généraux */
	body {
		font-family: Arial, sans-serif;
		margin: 0;
		padding: 0;
	}

	/* Conteneur principal */
	.contact-container {
		display: flex;
		justify-content: space-between;
		padding: 50px;
	}

	/* Section des coordonnées de contact */
	.contact-info {
		flex: 1;
		padding: 20px;
		background-color: #f5f5f5;
		border-radius: 10px;
		box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
	}

	.contact-info h2 {
		margin-top: 0;
	}

	/* Section du formulaire de contact */
	.contact-form {
		flex: 1;
		padding: 20px;
		background-color: #fff;
		border-radius: 10px;
		box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
	}

	.contact-form h2 {
		margin-top: 0;
	}

	/* Styles pour les champs de formulaire */
	label {
		display: block;
		margin-top: 10px;
	}

	input[type="text"],
	input[type="email"],
	textarea {
		width: 100%;
		padding: 10px;
		margin-top: 5px;
		border: 1px solid #ccc;
		border-radius: 5px;
	}

	textarea {
		resize: vertical;
	}

	button[type="submit"] {
		background-color: #007bff;
		color: #fff;
		border: none;
		padding: 10px 20px;
		border-radius: 5px;
		cursor: pointer;
		transition: background-color 0.3s ease;
	}

	button[type="submit"]:hover {
		background-color: #0056b3;
	}

	/* Responsive design */
	@media screen and (max-width: 768px) {
		.contact-container {
		    flex-direction: column;
		    align-items: center;
		}
		
		.contact-info,
		.contact-form {
		    width: 100%;
		}
	}
	header {
            background-color: #0072ce;
            color: #fff;
            padding: 1.7%;
            text-align: center;
        }
        
        
	footer {
            background-color: #232f3e;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        
         nav {
            color: #fff;
            padding: 10px;
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
        <h1>Pathe Transport</h1>
    </header>
    <div class="contact-container">
        <div class="contact-info">
            <h1>Contactez-nous</h1>
            <p>Nous sommes là pour vous aider</p><hr/>
            
            <p><strong>Email:</br>
            </strong> info@pathe-transport.fr</p>
            
            <p><strong>Téléphone:</br>
            </strong> +33 680 801 335</p>
            
            <p><strong>Adresse:
            </br>
            </strong>
            <a href="https://www.google.com/maps?q=14+Rue+Etienne+Dolet,+76620,+Le+Havre" target="_blank">14 Rue Etienne Dolet, 76620, Le Havre</a></p>
        </div>
        <div class="contact-form">

            <form action="traitement_cont.php" method="post"> <!-- Assurez-vous de spécifier le bon fichier de traitement -->
                <label for="nom">NOM & Prenom*:</label>
                <input type="text" id="nom" name="nom" required>
                
                <label for="tel">Numero*:</label>
                <input type="number" id="tel" name="tel" required>
                
                <label for="email">Email*:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Message*:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                <button type="submit">Envoyer</button>
            </form>
        </div>
    </div>
    
    <footer>
        
        <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
        </ul>
    </nav>
    
    
    <hr>
    &copy; 2023 pathe_transport. Tous droits réservés | Politique de confidentialité | Mentions légales | Politique de cookies.

    </footer>
</body>
</html>

