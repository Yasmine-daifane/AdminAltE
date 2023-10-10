<?php
define('__ROOT__', dirname(dirname(__FILE__)));
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
                                    <h3 class="card-title">Ajouter Competences</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputName"> Competences Reference</label>
                                        <input name="nom" type="text" id="inputName" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail"> Competences Code  </label>
                                        <textarea name="email" id="inputEmail" class="form-control"
                                            rows="4"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputEmail"> Competences Nom  </label>
                                        <textarea name="email" id="inputEmail" class="form-control"
                                            rows="4"></textarea>
                                    </div>


                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
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
