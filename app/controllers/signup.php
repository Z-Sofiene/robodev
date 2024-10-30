<?php

use app\dao\GestionImp;

require_once '../dao/GestionImp.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['niveau'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $niveau = $_POST['niveau'];
        $email = strtolower($prenom).'.'.strtolower($nom).'@essat-gabes.com';

        $conn = new GestionImp();
        session_start();
        if (!$conn->verifEtudiant($email)) {
            $s = 1;
        }else if ($conn->addEtudiant($nom, $prenom, $niveau, $email)) {
            header("Location: ../../public/listEtudiant.php");
            exit();
        }
        header("Location: ../../public/listEtudiant.php?signup_result=" . urlencode($s));
        exit();
    }
}

