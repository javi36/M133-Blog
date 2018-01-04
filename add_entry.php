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
<div class="container" >
    <div class="col-md-8">
        <form action="" method="post">
            <!--  Normales  einzeiliges  Eingabefeld  -->
            <div class="form-group">
                <label for="titel">Beitragtitel</label>
                <input  type="text" name="titel" class="form-control" id="titel" placeholder="Bitte  etwas  eingeben...">
            </div>

            <!--  Mehrzeiliges  Eingabefeld  (in  diesem  Fall  3  Zeilen)  -->
            <div class="form-group">
                <label for="inhalt">Inhalt</label>
                <textarea id="inhalt" name="inhalt" class="form-control" rows="5"></textarea>
            </div>

            <!--  Schaltflaeche  als  Button  -->
            <button type="submit" name="senden" class="btn btn-primary btn-lg">Speichern</button>
            <a href="index.php?function=entries_private" class="btn btn-primary btn-lg">Abbrechen</a>
        </form>
    </div>
</div>

</html>
