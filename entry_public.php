<?php
/**
 * Created by PhpStorm.
 * User: vmadmin
 * Date: 15.11.2017
 * Time: 21:14
 */
$users = getUserNames();
foreach ($users as $user) {
    $entries = getEntries($user['uid']);
    foreach ($entries as $entry) {
        $date = date("d.m.Y", strtotime($entry['datetime']));
        if($_GET['eid'] == $entry['eid']) {
            echo "<h2>".$entry['title'].", ".$date."<h2><br />";
            echo $entry['content'];
        }
    }
}

?>