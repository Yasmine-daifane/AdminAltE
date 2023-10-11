<?php
define('__ROOT__', dirname(dirname(__FILE__)));
 

 include_once(__ROOT__ . "/Layout/Loader.php"); 




 if (isset($_GET['competenceID'])) {
    $competenceBLO = new CompetenceBLO();
    $id = $_GET['competenceID'];

    $competenceBLO->DeleteCompetence($id);

    header('Location: index.php');
    exit; 
}
 ?>
 
