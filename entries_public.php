<?php

?>
<link rel="stylesheet" href="css/entries.css">

<body>
<div class="contanier">
<section id="home" class="main-contact parallax-section">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <h1 style="text-align: center" >Willkommen im Blog von '.</h1>
                <h3 style="text-align: center; margin-bottom: 100px;">Bei Klick kannst du den ensprechenden Beitrag lesen</h3>
            </div>
        </div>
    </div>
</section>

<div class="container" style="margin-top: 20px; margin-bottom: 30px;">
    <div class="row">
<?php
// Alle Blogeinträge holen, die Blog-ID ist in der Variablen $blogId gespeichert (wird in index.php gesetzt)
// (Schlaufe über alle Einträge dieses Blogs)

// Nachfolgend das Beispiel einer Ausgabe in HTML, dieser Teil muss mit einer Schlaufe über alle Blog-Beiträge und der Ausgabe mit PHP ersetzt werden
$entries = getEntries($_GET['bid']);
foreach ($entries as $entry) {
    echo'<a href="index.php?function=entry_public&bid=' . $_GET['bid'] . '&eid=' . $entry['eid'] . '"> ';
    echo '<div class="col-md-4" style="text-align: center">';
    $date = gmdate("m.d.y", $entry['datetime']);
    echo '<h1 style="color:#C97443;">'.$entry['title'].'</h1>';
    echo '<p style="color:black;"> Erstellt am: '.$date.' </p> ';
    echo'<p style="color:black;"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>';
    echo'</div>';
    echo'</a>';
}
?>

</div>
</div>
</div>
</body>