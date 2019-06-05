<?php
    include 'navbar.php';
//    include 'body.php';
//    include 'form.php';
//    include 'foot.php';
    include 'footer.php';
    ?>
</br>
</br>
</br>
</br>
</br>
<div class='corps shadow p-3 mb-5 bg-white rounded'>

        <!-- Carousel -->

        <!-- Card -->
        
        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Grille de prix indicatifs</h6>
                        <div class="dropdown no-arrow">
                        </div>
                    </div>
                    <!-- Card Body -->
                    <table class="table table-bordered" id="table_id" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Heure</th>
                                <th>Prix (à titre indicatif)</th>
                                <th>Extention</th>
                            </tr>
                        </thead>
                        <tfoot>
                        </tfoot>
                        <tbody>

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


