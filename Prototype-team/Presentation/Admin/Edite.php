<?php    define('__ROOT__', dirname(dirname(__FILE__))); ?>
<?php include_once(__ROOT__ . "/Layout/Loader.php"); ?>
<?php
include_once(__ROOT__ . "/Layout/head.php");
?>

<?php  
 $competenceBLO = new CompetenceBLO();
 $competence = new Competence(); 
 
 $competence = $competenceBLO->GetCompetence($_GET['competenceID']);
 
 if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['modifier'])) {
     $id = $_POST['ID'];
     $reference = $_POST['REFERENCE'];
     $code = $_POST['CODE'];
     $nom = $_POST['NOM'];
     $description = $_POST['DESCRIPTION'];
     if (empty($reference)  || empty($nom)) {
        $errorMessage = 's\'ils vous plait compelete les champs necessaire ,reference ,nom  .';
    } else {
 
     $competence->setID($id);
     $competence->setREFERENCE($reference);
     $competence->setCODE($code);
     $competence->setNOM($nom);
     $competence->setDESCRIPTION($description);
 
     $competenceBLO->UpdateCompetence($competence);
     header('Location: index.php');

 }}
 ?>
  
<!DOCTYPE html>
<html lang="fr">
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
<?php  include_once(__ROOT__ . "/Layout/navbare.php"); ?>
       
        <?php include_once(__ROOT__ . "/Layout/sidebare.php");?>
        <div class="content-wrapper" style="min-height: 1604.61px;">
            <section class="content-header">
            <div class="text-center"> <?php if (!empty($errorMessage)): ?>
                                        <div class="alert alert-danger">
                                            <?= $errorMessage ?>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Competence Edit</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Edit Competence</li>
                            </ol>
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
                                <h3 class="card-title">Edit Competence: <?= $competence ? $competence->getREFERENCE() : '' ?></h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input type="hidden" required="required" class="form-control" id="ID" name="ID"
                                        value=<?php echo $competence->getID() ?>>
                                    <div class="form-group">
                                        <label for="inputName"> Reference <span
                                                    class="text-danger">*</span></label></label>
                                        <input name="REFERENCE" value="<?php echo $competence->getREFERENCE() ?>" type="text" id="inputName" class="form-control"  />
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDescription"> Code</label>
                                        <textarea name="CODE" id="inputDescription" class="form-control"
                                            rows="4"><?php echo $competence->getCODE() ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDescription"> Name <span
                                                    class="text-danger ">*</span></label></label>
                                        <textarea name="NOM" id="inputDescription" class="form-control"
                                            rows="4"><?php echo $competence->getNOM() ?></textarea>
                                    </div>
                                    <div class="form-group">
                                            <label for="inputDescription">Description</label>
                                            <textarea name="DESCRIPTION" id="inputDescription"
                                                class="form-control"><?php echo $competence->getDESCRIPTION() ?></textarea>
                                        </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <a href="index.php" class="btn btn-secondary">Cancel</a>
                            <input type="submit" name="modifier" value="Modifier Competence"
                                class="btn btn-success float-right">
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
