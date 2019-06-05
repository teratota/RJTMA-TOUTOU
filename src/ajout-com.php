<?php
$commentaire=$_POST['commentaire'];
$note=$_POST['note'];
$chaine=$commentaire.",".$note.";";
$handle = fopen("commentaire.txt", "a");
if (fwrite($handle, $chaine) === FALSE) {
    echo "Cannot write to file ($filename)";
    exit;
}
echo "Success, wrote ($chaine) to file (commentaire.txt)";
fclose($handle);
header('Location: commentaire.php');
?>