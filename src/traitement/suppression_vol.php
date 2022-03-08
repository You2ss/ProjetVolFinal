<?php
session_start()


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->

    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">

    <![endif]-->

</head>
<!-- body -->
<body class="main-layout">
<!-- loader  -->
<!-- end loader -->
<!-- header -->

<section >
<CENTER>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <form action="../../src/traitement/suppression_volBdd.php" method="post" class="main-form">
        <h3>Supprimez votre vol</h3>
        <br>
        <li><a href="../../src/admin/index-A.php">Retour</a></li>
        <br>
        <br>
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <label >Id</label>
                        <input class="form-control" placeholder="" type="number" name="id_vol">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <br>

                <button class="form-control" type="submit">Supprimer</button>
            </div>
        </div>
    </form>
    </div>
    </div>
    </div>
    </div>
</CENTER>
</section>
<br>
<br>
<br>
<br>
<br>
<br>

<footer>
    <h3>Vol déjà réaliser</h3>
    <table id="table_id" class="display">
        <thead>
        <tr>
            <th>Id</th>
            <th>Date depart</th>
            <th>Heure depart</th>
            <th>Heure d'arrivee</th>
            <th>Le pilote</th>
            <th>L'avion</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once '../../src/bdd/Bdd2.php';
        require_once '../../src/modele/Vol_2.php';

        $vol = new Vol(array());
        foreach ($vol->setSelect() as $values){
            ?>
            <tr>
                <td><?php echo $values['id_vol']?></td>
                <td><?php echo $values['date_depart']?></td>
                <td><?php  echo $values['heure_depart'] ?></td>
                <td><?php  echo $values['heure_arrivee'] ?></td>
                <td><?php  echo $values['ref_pilote'] ?></td>
                <td><?php  echo $values['ref_avion'] ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <script>$(document).ready( function () {
            $('#table_id').DataTable();
        } );</script>


</footer>

<!-- Javascript files-->
<script src="../../js/jquery.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.bundle.min.js"></script>
<script src="../../js/jquery-3.0.0.min.js"></script>
<script src="../../js/plugin.js"></script>
<!-- sidebar -->
<script src="../../js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../../js/custom.js"></script>
<!-- javascript -->
<script src="../../js/owl.carousel.js"></script>
<script>
    $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            margin: 10,
            nav: true,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    })
</script>

</body>
</html>