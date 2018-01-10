<?php
/**
 * Created by PhpStorm.
 * User: vmadmin
 * Date: 07.12.2017
 * Time: 13:14
 */
$inhalt = "";
$titel = "";
$loggedUser = getUserIdFromSession();

if(isset($_POST['senden'])) {
    if ($loggedUser != 0) {
        $inhalt = $_POST['inhalt'];
        $titel = $_POST['titel'];
        addEntry($loggedUser, $titel, $inhalt);
        header('Location: index.php?function=entries_private');
    }
}

?>

<html>
<link href="css/add_edit_entery.css" rel="stylesheet" />
<div class="container" style="padding-top: 50px;" >
    <div class="col-md-12">
        <form action="" method="post">
            <!--  Normales  einzeiliges  Eingabefeld  -->
            <div class="form-group">
                <label for="titel" class="h1">Beitragtitel</label>
                <input  type="text" name="titel" class="form-control" id="titel" placeholder="Bitte  etwas  eingeben...">
            </div>

            <!--  Mehrzeiliges  Eingabefeld  (in  diesem  Fall  3  Zeilen)  -->
            <div class="form-group">
                <label for="inhalt" class="h1">Inhalt</label>
                <textarea id="inhalt" name="inhalt" class="form-control" rows="25"></textarea>
            </div>

            <!--  Schaltflaeche  als  Button  -->
            <button type="submit" name="senden" class="btn btn-primary btn-lg">Speichern</button>
            <a href="index.php?function=entries_private" class="btn btn-primary btn-lg">Abbrechen</a>
        </form>
    </div>
</html>
