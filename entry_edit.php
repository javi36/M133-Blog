<?php
/**
 * Created by PhpStorm.
 * User: vmadmin
 * Date: 04.12.2017
 * Time: 14:22
 */


$eid = $_GET['eid'];
$entry = getEntry($eid);
$currentUser = getUserIdFromSession();

if(isset($_POST['senden'])) {
    $titel = $_POST['titel'];
    $inhalt = $_POST['inhalt'];
    if ($entry['uid'] == $currentUser) {
        updateEntry($eid, $titel, $inhalt);
        header('Location: index.php?function=entries_private');
    }
}
?>

<html>
<div class="container ">
    <div class="col-md-8">
        <form action="" method="POST" >
            <!--  Normales  einzeiliges  Eingabefeld  -->
            <div class="form-group">
                <label for="input1">Beitragtitel</label>
                <input  type="text"  name="titel" class="form-control" id="input1" value="<?php echo $entry['title'];?>">
            </div>

            <!--  Mehrzeiliges  Eingabefeld  (in  diesem  Fall  3  Zeilen)  -->
            <div class="form-group">
                <label for="input3">Inhalt</label>
                <textarea id="input3"  name="inhalt" class="form-control" rows="20"><?php echo $entry['content']; ?></textarea>
            </div>

            <!--  Schaltflaeche  als  Button  -->
            <button type="submit" name="senden" class="btn btn-primary btn-lg">Speichern</button>
            <a href="index.php?function=entries_private" class="btn btn-primary btn-lg">Abbrechen</a>
        </form>
    </div>
</div>
</html>
