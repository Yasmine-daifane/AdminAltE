<?php 
class CompetenceBLO {
    private $competencesDao;
    public $errorMessage;

    public function __construct() {
        $this->competencesDao = new CompetencesDAO();
    }

    public function GetAllCompetences() {
        return $this->competencesDao->GetAllCompetences();
    }

    public function GetCompetence($competenceID) {
        return $this->competencesDao->GetCompetence($competenceID);
    }

    public function AddCompetence(Competence $competence) {
        $insertedId = 0;
        // Add validation logic if needed
        $insertedId = (int)$this->competencesDao->AddCompetence($competence);
        return $insertedId;
    }

    public function UpdateCompetence(Competence $competence) {
        $affectedRows = 0;
        // Add validation logic if needed
        $affectedRows = (int)$this->competencesDao->UpdateCompetence($competence);
        return $affectedRows;
    }

    public function DeleteCompetence($competenceID) {
        $affectedRows = 0;
        $affectedRows = (int)$this->competencesDao->DeleteCompetence($competenceID);
        return $affectedRows;
    }
}














?>