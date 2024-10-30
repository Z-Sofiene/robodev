<?php

namespace app\dao;

interface IGestion
{

    // admin
    public function addEtudiant($nom,$prenom,$niveau,$email);
    public function getEtudiantById($id);
    public function getAllEtudiants(): array;

    public function verifEtudiant($email);

}