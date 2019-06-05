    <?php
    include 'header.php';
    ?>

<div >
    
        <div class="row">
            <div class="col-xl-12 col-lg-12 centreTxt">
                <h1>Bienvenue sur l'espace information tarifaire concernant le dog sitting </h1>
                </br>
                Un dog sitter s’occupe des chiens en l’absence de leurs maîtres les tarifs sont à titre idicatif et peuvent variés en fonction de l'animal.</br>
                Pour les extentions nous vous conseillons de nous prévenir à l'avance.</br>
                Merci.
            </div>
        </div>
    </div>
    
    <div>

        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Grille de prix indicatifs</h6>
                        <div class="dropdown no-arrow">
                        </div>
                    </div>
                    <table class="table table-bordered" id="table_id" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Heure</th>
                                <th>Prix (à titre indicatif)</th>
                                <th>Extention</th>
                            </tr>
                        </thead>

                            <tr>
                                <td>1 Heure</td>
                                <td>4€/Chien</td>
                                <td>Massage, Coaching Bien-être, Cure de santé, Conseils vétérinaires</td>
                            </tr>
                            
                            <tr>
                                <td>2 Heures</td>
                                <td>7,50€/Chien</td>
                                <td>Massage, Coaching Bien-être, Cure de santé, Conseils vétérinaires</td>
                            </tr>
                            
                            <tr>
                                <td>4 Heures</td>
                                <td>13,50€/Chien</td>
                                <td>Massage, Coaching Bien-être, Cure de santé, Conseils vétérinaires</td>
                            </tr>
                            
                            <tr>
                                <td>6 Heures</td>
                                <td>17€/Chien</td>
                                <td>Massage, Coaching Bien-être, Cure de santé, Conseils vétérinaires</td>
                            </tr>
                            
                            <tr>
                                <td>8 Heures</td>
                                <td>19€/Chien</td>
                                <td>Massage, Coaching Bien-être, Cure de santé, Conseils vétérinaires</td>
                            </tr>
                            
                            <tr>
                                <td>10 Heures</td>
                                <td>21€/Chien</td>
                                <td>Massage, Coaching Bien-être, Cure de santé, Conseils vétérinaires</td>
                            </tr>
                            
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        $(document).ready(function () {
            $('#table_id').DataTable();
        });
    </script>



<?php include 'footer.php'; ?>