<?php
session_start();

use app\dao\GestionImp;

require_once "../app/dao/GestionImp.php";
require_once "../app/model/Etudiant.php";
$conn = new GestionImp();
?>
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
            font-family: Arial, sans-serif;
            background: linear-gradient(to left, #FF8C00, #1E90FF);
            color: #fff;
            padding: 20px;
        }
        .form-label {
            margin-top: 10px;
        }
        .header {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            margin-bottom: 40px;
        }
        .logo {
            height: 120px;
            width: auto;
            max-width: 90%;
            margin: 5px 0;
        }
        h1 {
            font-size: 2em;
            margin-top: 10px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        .form-container {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            margin-top: 20px;
        }
        .table thead {
            background-color: #343a40; /* Dark color for header matching the navbar */
            color: #fff;
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php include 'navbar.php'; ?>

<div class="container">
    <div class="header">
        <img src="/images-removebg-preview.png" alt="Logo du Club ROBODEV" class="logo">
        <h1><b>Bienvenue au Club RoboDev <u>ESSAT</u></b></h1>
        <img src="/IMG-20241024-WA0014-removebg-preview.png" alt="Logo de l'Université" class="logo" style="width: 250px; height: auto;">
        <div>
            <a href="inscription.php" class="btn btn-primary"><i class="fas fa-user-plus"></i>S'inscrire</a>
        </div>
    </div>

    <div class="form-container mt-5">
        <div id="err1"></div>
        <h2 class="text-center">Les Membres de RoboDev</h2>
        <table class="table table-bordered table-dark mt-3">
            <thead class="text-white" style="background: linear-gradient(to right, #343a40, #1E90FF); font-weight: bold;">
            <tr>
                <th><i class="fas fa-user"></i> Nom et Prénom</th>
                <th><i class="fas fa-graduation-cap"></i> Classe</th>
            </tr>
            </thead>
            <tbody>
            <?php $etds = $conn->getAllEtudiants(); ?>
            <?php foreach ($etds as $etd) :
                $nom = $conn->getEtudiantById($etd['id'])->getNom();
                $prenom = $conn->getEtudiantById($etd['id'])->getPrenom();
                $niveau = $conn->getEtudiantById($etd['id'])->getNiveau();
                ?>
                <tr>
                    <td><?php echo htmlspecialchars($nom . ' ' . $prenom); ?></td>
                    <td><?php echo htmlspecialchars($niveau); ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>


</body>
</html>
