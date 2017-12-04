<?php
/**
 * Created by PhpStorm.
 * User: vmadmin
 * Date: 04.12.2017
 * Time: 14:22
 */

$eid = $_GET['eid'];
$entry = getEntry($eid);
$date = gmdate("m.d.y", $entry['datetime']);
echo "<h2>".$entry['title'].", ".$date."<h2><br />";
echo nl2br($entry['content']);
?>