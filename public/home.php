<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club RoboDev</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="js/erreur_signup.js"></script>
    <link href="/public/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/public/fontawesome/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to left, #FF8C00, #1E90FF);
            color: #fff;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .header, .section-title {
            text-align: center;
            margin-bottom: 30px;
        }
        .header img {
            max-width: 120px;
            margin-bottom: 15px;
        }
        .member-card img {
            width: 100px;
            height: 100px;
        }
        .section-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #343a40;
        }
    </style>
</head>
<body>
<?php include 'navbar.php'; ?>

<!-- Header -->
<div class="container">
    <div class="header">
        <img src="/images-removebg-preview.png" alt="Logo Club RoboDev" class="img-fluid">
        <h1 class="text-light"><b>Club RoboDev <u>ESSAT</u></b></h1>
        <img src="/IMG-20241024-WA0014-removebg-preview.png" alt="Logo Université" class="img-fluid" style="max-width: 200px;">
        <div>
            <a href="inscription.php" class="btn btn-primary"><i class="fas fa-user-plus"></i>S'inscrire</a>
        </div>
    </div>
</div>

<!-- Home Section -->
<section id="home" class="py-5 bg-transparent text-dark">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title">Bienvenue au Club RoboDev</h2>
            <h1>Explorez l'univers de la Robotique, Développement Web et Mobile, et IoT avec nous !</h1>
        </div>
    </div>
</section>

<!-- Program Section -->
<section id="program" class="py-5">
    <div class="container">
        <h2 class="section-title">Programme du Club</h2>
        <div class="card bg-light text-dark mb-4">
            <div class="card-body">
                <h5 class="card-title"><i class="fa-solid fa-robot me-2"></i>Robotique</h5>
                <p class="card-text">Projets avec Arduino Uno Rev3, ESP32 et Raspberry Pi pour développer des solutions robotiques.</p>
            </div>
        </div>
        <div class="card bg-light text-dark mb-4">
            <div class="card-body">
                <h5 class="card-title"><i class="fa-solid fa-mobile-screen me-2"></i>Développement Mobile</h5>
                <p class="card-text">Applications Android natives avec Android Studio et Java pour créer des applications mobiles performantes.</p>
            </div>
        </div>
        <div class="card bg-light text-dark">
            <div class="card-body">
                <h5 class="card-title"><i class="fa-solid fa-globe me-2"></i>Développement Web</h5>
                <p class="card-text">Projets utilisant JEE, Spring, SpringMVC, Spring Boot et Angular pour créer des applications web dynamiques.</p>
            </div>
        </div>
    </div>
</section>

<!-- Members Section -->
<section id="members" class="py-5 bg-transparent text-dark">
    <div class="container">
        <h2 class="section-title">Nos Membres</h2>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card member-card bg-transparent text-center shadow-sm">
                    <div class="card-body">
                        <img src="image/sofiene.jpg" alt="Zaghab Sofiene" class="rounded-circle mb-3">
                        <h5 class="card-title"><b><u>Zaghab Sofiene</u></b></h5>
                        <p class="card-text"><u>Fondateur</u></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card member-card bg-transparent text-center shadow-sm">
                    <div class="card-body">
                        <img src="image/hdhiri.jpg" alt="Mohamed Hdhiri" class="rounded-circle mb-3">
                        <h5 class="card-title">Mohamed Hdhiri</h5>
                        <p class="card-text">Président</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card member-card bg-transparent text-center shadow-sm">
                    <div class="card-body">
                        <img src="image/nourhane.jpg" alt="Nourhen Lakhrech" class="rounded-circle mb-3">
                        <h5 class="card-title">Nourhane Lakhrech</h5>
                        <p class="card-text">Membre</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card member-card bg-transparent text-center shadow-sm">
                    <div class="card-body">
                        <img src="image/said.jpg" alt="Mohamed Said" class="rounded-circle mb-3">
                        <h5 class="card-title">Mohamed Said</h5>
                        <p class="card-text">Membre</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card member-card bg-transparent text-center shadow-sm">
                    <div class="card-body">
                        <img src="image/ghofrane.jpg" alt="Ghofrane" class="rounded-circle mb-3">
                        <h5 class="card-title">Ghofrane hamrouni</h5>
                        <p class="card-text">Membre</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card member-card bg-transparent text-center shadow-sm">
                    <div class="card-body">
                        <img src="image/oussama.jpg" alt="Oussama Chammar" class="rounded-circle mb-3">
                        <h5 class="card-title">Oussama Chammar</h5>
                        <p class="card-text">Membre</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-light py-3 text-center">
    <p>© 2024 Club RoboDev. Tous droits réservés.</p>
</footer>

<!-- JavaScript de Bootstrap avec Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
