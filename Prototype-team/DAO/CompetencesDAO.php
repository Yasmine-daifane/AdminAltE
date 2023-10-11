<?php

class CompetencesDAO
{
    private $pdo = null;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=CompetencesDatabase";
        $username = "root";
        $password = "";

        try {
            $this->pdo = new PDO($dsn, $username, $password);
        } catch (PDOException $e) {
            throw new Exception("Database connection failed: " . $e->getMessage());
        }
    }

    public function AddCompetence(Competence $competence)
    {
        $sql = "INSERT INTO `Competences` (`REFERENCE`, `CODE`, `NOM`) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$competence->getREFERENCE(), $competence->getCODE(), $competence->getNOM()]);
    }

    public function GetAllCompetences()
    {
        $sql = 'SELECT ID, REFERENCE, CODE, NOM FROM Competences';
        $stmt = $this->pdo->query($sql);
        $competences_data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $competences = [];

        foreach ($competences_data as $competence_data) {
            $competence = new Competence();
            $competence->setID($competence_data['ID']);
            $competence->setREFERENCE($competence_data['REFERENCE']);
            $competence->setCODE($competence_data['CODE']);
            $competence->setNOM($competence_data['NOM']);
            $competences[] = $competence;
        }

        return $competences;
    }

    public function GetCompetence($competenceID)
    {
        $sql = "SELECT * FROM Competences WHERE ID = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$competenceID]);
        $competence_data = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($competence_data) {
            $competence = new Competence();
            $competence->setID($competence_data['ID']);
            $competence->setREFERENCE($competence_data['REFERENCE']);
            $competence->setCODE($competence_data['CODE']);
            $competence->setNOM($competence_data['NOM']);
            return $competence;
        }

        return null;
    }

    public function DeleteCompetence($competenceID)
    {
        $sql = "DELETE FROM Competences WHERE ID = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$competenceID]);
    }

    public function UpdateCompetence(Competence $competence)
    {
        $sql = "UPDATE Competences SET REFERENCE = ?, CODE = ?, NOM = ? WHERE ID = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$competence->getREFERENCE(), $competence->getCODE(), $competence->getNOM(), $competence->getID()]);
    }
}










?>