<?php
define('__ROOT__', dirname(dirname(__FILE__)));

 include_once(__ROOT__ . "/Layout/Loader.php"); 

 $competenceBLO = new CompetenceBLO();
 $errorMessage = '';
 
 if (isset($_POST['add_competence'])) {
    $competence = new Competence();
    $reference = trim($_POST['reference']);
    $code = trim($_POST['code']);
    $nom = trim($_POST['nom']);
    $description = trim($_POST['description']);

    if (empty($reference) || empty($nom)) {
        $errorMessage = 'Please fill in all required fields (Reference, Nom).';
    } else 
        $competence->setREFERENCE($reference);
        $competence->setCODE($code);
        $competence->setNOM($nom);
        $competence->setDescription($description);

        $insertedId = $competenceBLO->AddCompetence($competence);

        if ($insertedId > 0) {
            // Redirect to the same page to display the table after adding a competence
            header("Location: index.php");
        } else {
            $errorMessage = 'Failed to add competence. Please try again.';
        }
    
}
 
 
 
 
 
 
 ?>

<!DOCTYPE html>
<html lang="fr">
<?php
include_once(__ROOT__ . "/Layout/head.php");
?>


<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php
        include_once(__ROOT__ . "/Layout/navbare.php");
        ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php
        include_once(__ROOT__ . "/Layout/sidebare.php");
        ?>
        <!-- /.sidebar -->

        <div class="content-wrapper" style="min-height: 1604.61px;">
            <section class="content-header">

                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1> </h1>
                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <form method="post">
                    <div class="row">
                        <div class="col">
                            <div class="card card-primary">
                                <div class="card-header">
                                <div class="text-center">
                                    <?php if (!empty($errorMessage)): ?>
                                        <div class="alert alert-danger">
                                            <?php echo $errorMessage; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                    <h3 class="card-title">Ajouter Competences</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form method="post">
                                        <div class="form-group">
                                            <label for="inputReference">
                                                Reference
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input name="reference" type="text" id="inputReference"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputCode">Code</label>
                                            <input name="code" type="text" id="inputCode" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputNom">Nom<span class="text-danger">*</span></label>
                                            <input name="nom" type="text" id="inputNom" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputDescription">Description</label>
                                            <textarea name="description" id="inputDescription"
                                                class="form-control"></textarea>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" name="add_competence" class="btn btn-primary">Ajouter</button>
                            <a href="index.php" class="btn btn-secondary">Annuler</a>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
    <?php
    include_once(__ROOT__ . "/Layout/footer.php");
    ?>
</body>
<?php
include_once(__ROOT__ . "/Layout/links.php");
?>

</html>