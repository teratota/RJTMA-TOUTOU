    <?php
    include 'header.php';
    ?>

<div >
    
        <div class="row">
            <div class="col-xl-12 col-lg-12 centreTxt">
                <h1>Bienvenue sur l'espace information tarifaire </h1>
                </br>
                Les tarifs sont à titre idicatif et peuvent variés en fonction de l'animal.</br>
                Pour les extentions nous vous conseillons de nous prévenir à l'avance.</br>
                Merci.
            </div>
        </div>
    </div>
    
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Dog sitting</h6>
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
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Extentions</h6>
                        <div class="dropdown no-arrow">
                        </div>
                    </div>
                    <table class="table table-bordered" id="table_id" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Service</th>
                                <th>Prix (à titre indicatif)</th>
                            </tr>
                        </thead>

                            <tr>
                                <td>Massage</td>
                                <td>5€/Chien</td>
                            </tr>
                            
                            <tr>
                                <td>Coaching Bien-être</td>
                                <td>7€/Chien</td>
                            </tr>
                            
                            <tr>
                                <td>Cure de santé</td>
                                <td>12€/Chien</td>
                            </tr>
                            
                            <tr>
                                <td>Conseils vétérinaires</td>
                                <td>15€/Chien</td>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    <script>
        $(document).ready(function () {
            $('#table_id').DataTable();
        });
    </script>
<?php include 'footer.php'; ?>