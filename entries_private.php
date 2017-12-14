<?php
/**
 * Created by PhpStorm.
 * User: vmadmin
 * Date: 27.11.2017
 * Time: 15:37
 */

//zeigt alle entries vom entsprechnden angemeldeten User an.
echo 'Wilkommen User: #'.getUserIdFromSession();
$entries = getEntries(getUserIdFromSession());
foreach ($entries as $entry) {
    $date = gmdate("m.d.y", $entry['datetime']);
    echo '<li><a href="index.php?function=entry_privat&eid='. $entry['eid'] . '">'.$entry['title'].", ".$date.'</a></li>';
    echo '<a href="index.php?function=delete_entry&eid='. $entry['eid'].'" class="btn btn-primary">Löschen</a>';
    echo '<a href="index.php?function=entry_edit&eid='. $entry['eid'] . '"class="btn btn-primary">Bearbeiten</a>';
}
?>