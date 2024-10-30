<?php
namespace app\model;

class Etudiant
{
    private $id;
    private $nom;
    private $prenom;

    private $niveau;
    private $email;

    /**
     * @param $id
     * @param $nom
     * @param $prenom
     * @param $niveau
     * @param $email
     */
    public function __construct($id, $nom, $prenom, $niveau, $email)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->niveau = $niveau;
        $this->email = $email;

    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function getNiveau(){
        return $this->niveau;
    }
    public function setNiveau($niveau){
        $this->niveau = $niveau;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
}

?>
