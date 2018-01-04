<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/entries.css" rel="stylesheet" />
<link href="css/bootstrap.min.css" rel="stylesheet" />

<link rel="stylesheet" href="css/entries.css">
<body>
<section id="home" class="main-contact parallax-section">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <h1 style="text-align: center" >Willkommen in deinem Memberbereich</h1>
                <h3 style="text-align: center; margin-bottom: 100px;">Hier kannst du deine Beiträge Lesen, Bearbeiten oder Löschen</h3>
            </div>
        </div>
    </div>
</section>
<div class="container" style="margin-top: 20px; margin-bottom: 30px;">
    <div class=row">
<?php
/**
 * Created by PhpStorm.
 * User: vmadmin
 * Date: 27.11.2017
 * Time: 15:37
 */

//zeigt alle entries vom entsprechnden angemeldeten User an.

$entries = getEntries(getUserIdFromSession());
foreach ($entries as $entry) {
    echo '<a href="index.php?function=entry_privat&eid='. $entry['eid'] . '">';
    echo '<div class="col-md-4" style="text-align: center">';
    $date = gmdate("m.d.y", $entry['datetime']);
    echo '<h1 style="color:#C97443;">'.$entry['title'].'</h1>';
    echo '<p style="color:black;"> Erstellt am: '.$date.' </p> ';
    echo'<p style="color:black;"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>';
    echo '<a href="index.php?function=delete_entry&eid='. $entry['eid'] . '" class="btn btn-success btn-lg" style="background-color: #2F4040; border-color: #2F4040;"><span class="glyphicon glyphicon-trash"></span> Delete </a>';
    echo ' <a href="index.php?function=entry_edit&eid='. $entry['eid'] . '" class="btn btn-success btn-lg" style="background-color: #2F4040; border-color: #2F4040;"><span class="glyphicon glyphicon-pencil"></span> Edit </a>';
    echo'</div>';
    echo'</a>';
}
?>

</div>
</div>
</body>
</html>
