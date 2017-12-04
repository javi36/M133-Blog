<?php
// Alle Blogeinträge holen, die Blog-ID ist in der Variablen $blogId gespeichert (wird in index.php gesetzt)
// (Schlaufe über alle Einträge dieses Blogs)

// Nachfolgend das Beispiel einer Ausgabe in HTML, dieser Teil muss mit einer Schlaufe über alle Blog-Beiträge und der Ausgabe mit PHP ersetzt werden
$entries = getEntries($_GET['bid']);
foreach ($entries as $entry) {
    $date = gmdate("m.d.y", $entry['datetime']);
    echo '<li><a href="index.php?function=entry_public&bid=' . $_GET['bid'] . '&eid=' . $entry['eid'] . '">' . $entry['title'] . ", " . $date . '</a></li>';

}

?>
<!--  <div>-->
<!--  <h4>Hipster Ipsum --><?php //echo $date?><!--</h4>-->
<!--  Neutra truffaut blog, 90's microdosing gochujang fingerstache helvetica etsy. Shoreditch fashion axe tote bag wayfarers normcore, freegan hot chicken sriracha 8-bit brunch actually live-edge quinoa. Trust fund sustainable forage tilde, etsy gentrify 8-bit poutine blog swag lomo pug. Truffaut ugh pinterest, umami tofu hoodie cronut. Crucifix skateboard single-origin coffee, vape slow-carb pork belly direct trade everyday carry photo booth schlitz venmo franzen. Air plant viral stumptown pabst disrupt. Readymade mumblecore tumeric kitsch hashtag, godard trust fund.-->
<!--  </div>-->
