<?php include 'header.php' ?>
<form action="ajout-com.php" method='post'>
<div class="form-row">
        <div class="col-md-12 mb-3">
            <input type='texte' class="form-control" name='commentaire' placeholder='veuiller entrer votre commentaire'>
        </div>
        <div class="col-md-12 mb-3">
        <select class="form-control form-control-lg" name="note">
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
        </div>
        <button class="btn btn-primary" type="submit">Envoi</button>
    </div>
</form>
<div class='container'>
    <div class='row'>
        <?php
        $handle = fopen("commentaire.txt", "rb");
        $contents = fread($handle, filesize("commentaire.txt"));
        fclose($handle);
        $tab_content=explode(";",$contents);
        foreach($tab_content as $value){
            if($value!=''){
                $tab_donner=explode(",",$value);
                echo "<div class='col-md-4'>";
                echo "<h2>".$tab_donner[1]."/5</h2>";
                echo "<p>".$tab_donner[0]."<p>";
                echo "</div>";
            }
        }

        ?>
    </div>
</div>
<?php include 'footer.php' ?>

