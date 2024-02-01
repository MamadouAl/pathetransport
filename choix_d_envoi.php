<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mon Site d'Envoi de Colis</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        
        header {
            background-color: #232f3e;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        
        h1 {
            margin: 0;
            font-size: 36px;
        }
        
        main {
            max-width: 800px;
            margin: 40px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }
        
        p {
            line-height: 1.5;
        }
        
        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff9900;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        
        .cta-button:hover {
            background-color: #ff7f00;
        }
        
        footer {
            background-color: #232f3e;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        
        .image-container {
            position: relative;
            width: 100%;
            height: 300px;
            overflow: hidden;
        }
        
        .image-container img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
            transition: opacity 0.9s ease;
        }
        
        .image-container img.active {
            opacity: 1;
        }
        
        .image-container img:not(.active) {
            animation: fade-out 5s infinite;
        }
        
        @keyframes fade-out {
            0% { opacity: 1; }
            25% { opacity: 0.25; }
            50% { opacity: 0.5; }
            75% { opacity: 0.75; }
            100% { opacity: 1; }
        }
    </style>
</head>
<body>
    <header>
        <h1>Pathe Transport</h1>
    </header>
    
    <main>
        <h2>Bienvenue sur notre site d'envoi de colis !</h2>
        
        <p>Nous sommes spécialisés dans l'envoi rapide, fiable et sécurisé de colis vers différentes destinations. Que vous ayez besoin d'envoyer des colis localement (<b>en France</b>) ou à l'international (<b>en Guinée</b>), notre service vous offre une solution pratique et efficace.</p>
        
        <p>Nous mettons à votre disposition un réseau logistique solide, des partenaires de transport de confiance et des options d'emballage adaptées à vos besoins. Notre équipe expérimentée est là pour vous guider tout au long du processus d'envoi et répondre à vos questions.</p>
        
        <p>Que vous souhaitiez envoyer des colis personnels, des cadeaux ou des marchandises commerciales, nous nous engageons à assurer la livraison sécurisée et dans les délais impartis. Faites confiance à notre expertise et profitez de notre service d'envoi de colis de qualité.</p>
        
        <div class="image-container">
            <img src="./images/image1.jpeg" alt="Image 1" class="active">
            <img src="./images/image2.jpeg" alt="Image 2">
            <img src="./images/image3.jpeg" alt="Image 3">
        </div>
        
        <a href="choix_d_envoi.php" class="cta-button">Envoyer un Colis</a>
    </main>
    
    <footer>
        &copy; 2023 pathe_transport. Tous droits réservés.
    </footer>
    
    <script>
        // Animation des images
        const images = document.querySelectorAll('.image-container img');
        let currentImageIndex = 0;
        
        setInterval(() => {
            images[currentImageIndex].classList.remove('active');
            currentImageIndex = (currentImageIndex + 1) % images.length;
            images[currentImageIndex].classList.add('active');
        }, 5000);
    </script>
</body>
</html>

