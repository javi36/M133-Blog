<?php
/**
 * Created by PhpStorm.
 * User: vmadmin
 * Date: 04.12.2017
 * Time: 14:42
 */
//überprüft ob eine eid im URL übergeben worden ist.
//überprüft ob der entry ein leeren String zurückgibt, ansonsten gibt es eine Fehlermedlung aus.
//überprüft ob der entry den eingeloggten User gehört.
//löscht der entsprechende entry und kehrt in der entries_private Seite zurück.
$eid = $_GET['eid'];
if (isset($eid)) {
    $currentUser = getUserIdFromSession();
    $entry = getEntry($eid);
    if ($entry != "") {
        if ($entry['uid'] == $currentUser) {
            deleteEntry($eid);
            header('Location: index.php?function=entries_private');
        }
    }
    echo '<h4 class="alert-warning">Fehler </h4> <br> <a href="index.php?function=entries_private">Zurück</a>';
}
?>