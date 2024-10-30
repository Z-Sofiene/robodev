<?php

namespace app\dao;
use app\model\Admin;
use app\model\NiveauEtude;
use app\model\Etudiant;

require_once 'IGestion.php';;

use DateTime;
use mysqli;


class GestionImp implements IGestion
{
    private $servername = "essatdb.mysql.database.azure.com";
    private $username = "sofiene";
    private $password = "z&s22971197";
    private $dbname = "personnel_conge_db";
    private $conn;

    public function __construct()
    {
        // Initialize the connection
        $this->conn = mysqli_init();

        // Set SSL options
        mysqli_ssl_set($this->conn, NULL, NULL, "/var/www/html/cert.pem", NULL, NULL);

        // Establish the SSL connection
        if (!mysqli_real_connect(
            $this->conn,
            $this->servername,
            $this->username,
            $this->password,
            $this->dbname,
            3306,  // Port number
            NULL,  // Socket, NULL by default
            MYSQLI_CLIENT_SSL))  // Enable SSL
        {
            error_log("SSL Connection failed: " . mysqli_connect_error());
            die("SSL Connection failed: " . mysqli_connect_error());
        } else {
            error_log("SSL Connection successful");
        }
    }


    //// Etudiant
    public function addEtudiant($nom, $prenom, $niveau, $email)
    {
        $stmt = $this->conn->prepare("INSERT INTO Etudiant (nom, prenom, niveau, email) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nom, $prenom, $niveau, $email);
        $stmt->execute();
        $row = $stmt->affected_rows;
        $stmt->close();
        if ($row > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function getEtudiantById($id): Etudiant
    {
            $stmt = $this->conn->prepare("SELECT * FROM Etudiant WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $stmt->bind_result($id, $nom, $prenom, $niveau, $email);
            $stmt->fetch();
            $etd = new Etudiant($id, $nom, $prenom, $niveau, $email);
            $stmt->close();
            return $etd;
    }

    public function getAllEtudiants(): array
    {
        $query = "SELECT * FROM Etudiant ORDER BY niveau ASC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        $Etd = [];
        while ($row = $result->fetch_assoc()) {
            $Etd[] = $row;
        }
        $stmt->close();
        return $Etd;
    }

    public function verifEtudiant($email): bool
    {
        $stmt = $this->conn->prepare("SELECT id FROM Etudiant WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows == 1) {
            return false;
        } else {
            return true;
        }
    }

}
