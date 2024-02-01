<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation d'envoi</title>
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

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            animation: fade-in 1s ease;
        }

        @keyframes fade-in {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        h1 {
			font-size: 36px;
            color: white;
            background-color: green;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }
        

        p {
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

      
        
        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #ff9900;
        }

        .footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            animation: slide-up 1s ease;
        }

        @keyframes slide-up {
            from { transform: translateY(100px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0 20 0;
            text-align: center;
            margi
        }

        .footer a {
            color: #fff;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
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
        
         table {
            width: 100%;
            margin-top: 20px;
        }

        table td {
            padding: 10px;
            border: none;
            font-size: 18px;
        }

        table td:first-child {
            font-weight: bold;
            color: #007bff;
            width: 30%;
        }
    </style>
</head>
<body>
    <div class="container">
  <h1>Votre message a été envoyé</h1><hr>

        <?php
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        require './phpmailer/phpmailer/src/Exception.php';
        require './phpmailer/phpmailer/src/PHPMailer.php';
        require './phpmailer/phpmailer/src/SMTP.php';

        // Création d'une instance de PHPMailer
        $mail = new PHPMailer(true);
        $mail2 = new PHPMailer(true);

        $nom = $_POST['nom'];
        $numero = $_POST['tel'];
        $email = $_POST['email'];
        $contenu = $_POST['message'];
      
      
        // Corps de l'e-mail
        $message = "<html><body>";
        $message .= "<h3>Bonjour,</h3>";
        $message .= "<p>Bonjour,</p>
        
        <p>Un nouveau message de contact a été soumis via le formulaire de votre site. Voici les détails du message :
</p>";
        $message .= "<p>Nom : $nom</p>";
        $message .= "<p>Numero : $numero</p>";
        $message .= "<p>email : $email</p>";        
        $message .= "<p>Message :</p>";
        $message .= "<h3>$contenu </h3>
        <p>Veuillez répondre à cette demande dès que possible.<p>";
        
        $message .= "<p>Cordialement</p>
        <p>PATHE TRANSPORT</p>"; 
        $message .= "</body></html>";
        
        $message2 = "<html><body>
        <p> Cher(e) $nom,<p>
        <p> Nous vous remercions d'avoir contacté PATHE TRANSPORT. Nous avons bien reçu votre message et nous vous en remercions. </p>
        <p>Voici un récapitulatif des informations que vous avez fournies : </p><h6 >
        <p>Nom : $nom</p>
        <p>Numero : $numero</p>
        <p>email : $email</p>
        <p>$contenu</p></br> </h6>
        <p>Notre équipe examine actuellement votre demande et nous reviendrons vers vous dans les plus brefs délais, généralement dans un délai de 48 à 72 heures.</p>
        <p>En attendant, n'hésitez pas à parcourir notre site Web pour en savoir plus sur nos produits et services. </p>
        
					<p>Merci de nous faire confiance pour vos besoins en envoi de colis.</p>
					<p>Cordialement,</p>
					<p>Pathe transport</p>";
					$message2 .= '<p><a href="https://www.google.com/maps?q=14+Rue+Etienne+Dolet,+76620,+Le+Havre" target="_blank">14 Rue Etienne Dolet, 76620, Le Havre</a></p>';
					
					$message2 .='<p>+33 680 801 335<br>
					<a href="https://www.pathetransport.fr"> pathetransport.fr</a> </p>
					';
			        $message2 .= "</body></html>";

        try {
            // Configuration du serveur SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'aimy25novembre@gmail.com'; // Remplacez par votre adresse Gmail
            $mail->Password = 'zkydoepnarbbkwcj'; // Remplacez par votre mot de passe Gmail ou utilisez un mot de passe d'application
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
           
           //Configuration de du mail de l'expediteur
           $mail2->isSMTP();
            $mail2->Host = 'smtp.gmail.com';
            $mail2->SMTPAuth = true;
            $mail2->Username = 'aimy25novembre@gmail.com'; // Remplacez par votre adresse Gmail
            $mail2->Password = 'zkydoepnarbbkwcj'; // Remplacez par votre mot de passe Gmail ou utilisez un mot de passe d'application
            $mail2->SMTPSecure = 'tls';
            $mail2->Port = 587;
            
            

            // Destinataire et expéditeur
            $mail->setFrom('pathe@pathetransport.fr', 'no-reply'); //Exepediteur du mail
            $mail->addAddress('dm213333@etu.univ-lehavre.fr', 'pathe transport'); //Destinataire(PATHE TRANSPORT)
            
            //Mail reçu par l'expediteur
            $mail2->setFrom('pathe@pathetransport.fr', '[no-reply] pathe transport'); //Exepediteur du mail
            $mail2->addAddress($email, $nom); //Destinataire

            // Contenu de l'e-mail
            $mail->isHTML(true);
            $mail->Subject = "Nouveau message de contact de votre site";
            $mail->Body = $message;
            
            // Contenu de l'e-mail
            $mail2->isHTML(true);
            $mail2->Subject = "Confirmation de réception de votre message";
            $mail2->Body = $message2;

            // Envoi de l'e-mail
            $mail->send();
            
            $mail2->send();

            
     $page = "
      
        <p>Merci d'avoir contacté PATHE TRANSPORT. Nous avons bien reçu votre message.</p>
        <p>Voici un récapitulatif des informations que vous avez fournies :</p>
        <table>
            <tr>
                <td>Nom :</td>
                <td>$nom </td>
            </tr>
            <tr>
                <td>Numéro de téléphone :</td>
                <td>$numero</td>
            </tr>
            <tr>
                <td>Email :</td>
                <td>$email</td>
            </tr>
            <tr>
                <td>Message :</td>
                <td>$contenu</td>
            </tr>
        </table>
        <p>Nous examinerons votre demande et vous répondrons dans les plus brefs délais.</p>
        <p>Merci pour votre confiance en PATHE TRANSPORT.</p>";
$page .= '<p><a href="https://www.google.com/maps?q=14+Rue+Etienne+Dolet,+76620,+Le+Havre" target="_blank">14 Rue Etienne Dolet, 76620, Le Havre</a></p>';
       
$page .= '<p>+33 680 801 335';
$page .= '<p><a href="index.php" target="_blank" class="cta-button">Retour à l\'accueil</a></p>';

                    
                    

            echo $page;
        } catch (Exception $e) {
            echo 'Une erreur s\'est produite lors de l\'envoi de l\'e-mail : ', $mail->ErrorInfo;
        }
        ?> 
        
    </div>

    <footer class="footer">
        
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

