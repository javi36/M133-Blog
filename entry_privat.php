<?php
/**
 * Created by PhpStorm.
 * User: vmadmin
 * Date: 14.12.2017
 * Time: 13:16
 */
$currentUser = getUserIdFromSession();
$eid = $_GET['eid'];
$entry = getEntry($eid);
$date = gmdate("m.d.y", $entry['datetime']);
if ($entry['uid'] == $currentUser) {
    echo "<h2>" . $entry['title'] . ", " . $date . "<h2><br />";
    echo nl2br($entry['content']);
}

?>