<?php
define('__ROOT__', dirname(dirname(__FILE__)));
?>
<!DOCTYPE html>
<html lang="en">
<?php
include_once(__ROOT__ . "/Layout/head.php");
?>

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
                                <a class="btn btn-primary" href="Ajouter.php">Add Compétences</a>
                            </div>
                        </div>
                       
                        <table class="table table-striped Competences">
    <thead>
        <tr>
          
            <th style="width: 3%">
              Reference
            </th>
            <th class="text-center" style="width: 9%">
                Code
            </th>
            <th style="width: 60%">
            Nom
            </th>
            <th style="width: 25%"> <!-- Adjust the width for action buttons -->
                Actions
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
         
            <td>C1</td>
            <td>Maquette</td>
            <td>
                Maquetter une application mobile
            </td>
            <td class="client-actions">
                <a class="btn btn-info btn-sm" href="editer.php?">
                    <i class="fas fa-pencil-alt"></i>
                    Edit
                </a>
                <a class="btn btn-danger btn-sm" href="supprimer.php">
                    <i class="fas fa-trash"></i>
                    Delete
                </a>
            </td>
        </tr>
        <tr>
       
            <td>C2</td>
            <td>Base Données</td>
            <td>
                Manipuler une base de données - perfectionnement
            </td>
            <td class="client-actions">
                <a class="btn btn-info btn-sm" href="editer.php?">
                    <i class="fas fa-pencil-alt"></i>
                    Edit
                </a>
                <a class="btn btn-danger btn-sm" href="supprimer.php">
                    <i class="fas fa-trash"></i>
                    Delete
                </a>
            </td>
        </tr>
        <tr>
          
            <td>C3</td>
            <td>back-end</td>
            <td>
                Développer la partie back-end d'une application web ou web mobile - perfectionnement
            </td>
            <td class="client-actions">
                <a class="btn btn-info btn-sm" href="editer.php?">
                    <i class="fas fa-pencil-alt"></i>
                    Edit
                </a>
                <a class="btn btn-danger btn-sm" href="supprimer.php">
                    <i class="fas fa-trash"></i>
                    Delete
                </a>
            </td>
        </tr>
        <tr>
      
            <td>C4</td>
            <td>Gestion</td>
            <td>
                Collaborer à la gestion d'un projet informatique et à l'organisation de l'environnement de développement - perfectionnement
            </td>
            <td class="client-actions">
                <a class="btn btn-info btn-sm" href="editer.php?">
                    <i class="fas fa-pencil-alt"></i>
                    Edit
                </a>
                <a class="btn btn-danger btn-sm" href="supprimer.php">
                    <i class="fas fa-trash"></i>
                    Delete
                </a>
            </td>
        </tr>
        <tr>
        
            <td>C5</td>
            <td>Mobile native</td>
            <td>
                Développer une application mobile native, avec Android et React Native
            </td>
            <td class="client-actions">
                <a class="btn btn-info btn-sm" href="editer.php?">
                    <i class="fas fa-pencil-alt"></i>
                    Edit
                </a>
                <a class="btn btn-danger btn-sm" href="supprimer.php">
                    <i class="fas fa-trash"></i>
                    Delete
                </a>
            </td>
        </tr>
        <tr>
         
            <td>C6</td>
            <td>Tests</td>
            <td>
            Préparer et exécuter les plans de tests d'une application            </td>
            <td class="client-actions">
                <a class="btn btn-info btn-sm" href="editer.php?">
                    <i class="fas fa-pencil-alt"></i>
                    Edit
                </a>
                <a class="btn btn-danger btn-sm" href="supprimer.php">
                    <i class="fas fa-trash"></i>
                    Delete
                </a>
            </td>
        </tr>
        <tr>
       
            <td>C7</td>
            <td>Déploiement</td>
            <td>
            Préparer et exécuter le déploiement d'une application web et mobile - perfectionnement            </td>
            <td class="client-actions">
                <a class="btn btn-info btn-sm" href="editer.php?">
                    <i class="fas fa-pencil-alt"></i>
                    Edit
                </a>
                <a class="btn btn-danger btn-sm" href="supprimer.php">
                    <i class="fas fa-trash"></i>
                    Delete
                </a>
            </td>
        </tr>
        <!-- Add more rows for other competences -->
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
