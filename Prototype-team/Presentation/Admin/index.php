<?php
define('__ROOT__', dirname(dirname(__FILE__)));
?>


<!DOCTYPE html>
<html lang="en">

<?php
include_once(__ROOT__ . "/Layout/head.php");
?>

<?php include_once(__ROOT__ . "/Layout/Loader.php"); ?>





<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
       
        <!-- Navbar -->
        <?php
        include_once(__ROOT__ . "/Layout/navbare.php");
        ?>
        <!-- Main Sidebar Container -->
        <?php
        include_once(__ROOT__ . "/Layout/sidebare.php");
        ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
            
            </section>

            <section class="content">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> Gestions des Compétences</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-2">
                        <div class="row p-3">
                            <div class="col-sm-12 col-md-6">
                                <a class="btn btn-primary" href="Ajouter.php">Ajouter Compétences</a>
                            </div>
                        </div>
                       
                        <!-- ... (Previous HTML code) ... -->

<table class="table table-striped Competences">
    <thead>
        <tr>
            <th style="width: 3%">Reference</th>
            <th class="text-center" style="width: 9%">Code</th>
            <th style="width: 60%">Nom</th>
            <th style="width: 25%">Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php
// Instantiate the CompetencesDAO
$competencesDAO = new CompetencesDAO();

// Get all competences from the database
$competences = $competencesDAO->GetAllCompetences();

foreach ($competences as $competence) {
?>
<tr>
    <td><?= $competence->getREFERENCE() ?></td>
    <td><a><?= $competence->getCODE() ?></a></td>
    <td><?= $competence->getNOM() ?></td>
    <td class="client-actions">
       
        <a class="btn btn-info btn-sm" href="Edite.php?competenceID=<?= $competence->getID() ?>">
            <i class="fas fa-pencil-alt"></i> Modifier
        </a>
        <a class="btn btn-danger btn-sm" href="./supprimer.php?competenceID=<?= $competence->getID() ?>">
            <i class="fas fa-trash"></i> Supprimer
        </a>
    </td>
</tr>
<?php
}
?>

        
       
        
    </tbody>
</table>


                    </div>
                </div>
            
            </section>
        </div>
        <aside class="control-sidebar control-sidebar-dark">
           
        </aside>
      
    </div>
    <?php
    include_once(__ROOT__ . '/Layout/footer.php');
    ?>
   
    <?php
    include_once(__ROOT__ . '/Layout/links.php');
    ?>
</body>
</html>
