<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription au Club RoboDev</title>

    <link href="/public/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
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
            max-width: 600px;
            margin: 0 auto;
        }
        .form-container {
            background-color: transparent; /* Set background to transparent */
            padding: 30px;
            border-radius: 10px;
            box-shadow: none; /* Remove shadow for a flatter look */
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        /* Style for table if needed */
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        th, td {
            text-align: left;
            padding: 8px;
            color: #000; /* Text color for table */
        }
        th {
            background-color: #f2f2f2; /* Light background for table header */
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <img src="/images-removebg-preview.png" alt="Logo du Club ROBODEV" class="logo">
        <h1>Inscription au Club RoboDev</h1>
        <img src="/IMG-20241024-WA0014-removebg-preview.png" alt="Logo de l'Université" class="logo" style="width: 250px; height: auto;>
    </div>
    <div class="form-container mt-5">
        <h2 class="text-center">Inscription</h2>
        <form action="../app/controllers/signup.php" method="post">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom:</label>
                <input type="text" id="nom" name="nom" class="form-control" required placeholder="Entrez votre nom">
            </div>

            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom:</label>
                <input type="text" id="prenom" name="prenom" class="form-control" required placeholder="Entrez votre prénom">
            </div>

            <div class="mb-3">
                <label for="niveau" class="form-label">Classe:</label>
                <select id="niveau" name="niveau" class="form-select" required>
                    <option value="" disabled selected>Choisissez votre classe</option>
                    <optgroup label="Génie Informatique">
                        <option value="TC1">1ère année Tronc Commun</option>
                        <option value="GL2">2ème année GL</option>
                        <option value="RT2">2ème année RT</option>
                        <option value="GL3">3ème année GL</option>
                        <option value="RT3">3ème année RT</option>
                    </optgroup>
                    <optgroup label="Préparatoire">
                        <option value="Prepa1">1ère année</option>
                        <option value="Prepa2">2ème année</option>
                    </optgroup>
                    <optgroup label="LBC">
                        <option value="LBC1">1ère année</option>
                        <option value="LBC2">2ème année</option>
                        <option value="LBC3">3ème année</option>
                    </optgroup>
                    <optgroup label="GCV">
                        <option value="GCV1">1ère année</option>
                        <option value="GCV2">2ème année</option>
                        <option value="GCV3">3ème année</option>
                    </optgroup>
                    <optgroup label="GEA">
                        <option value="GEA1">1ère année</option>
                        <option value="GEA2">2ème année</option>
                        <option value="GEA3">3ème année</option>
                    </optgroup>
                </select>
            </div>

            <button type="submit" class="btn btn-primary w-100">S'inscrire</button>
        </form>


    </div>
</div>
</body>
</html>
