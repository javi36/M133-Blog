<?php
  // Alle Blogeinträge holen, die Blog-ID ist in der Variablen $blogId gespeichert (wird in index.php gesetzt)
  // Hier Code... (Schlaufe über alle Einträge dieses Blogs)

  // Nachfolgend das Beispiel einer Ausgabe in HTML, dieser Teil muss mit einer Schlaufe über alle Blog-Beiträge und der Ausgabe mit PHP ersetzt werden

$users = getUserNames();

foreach ($users as $user) {
    $entries = getEntries($user['uid']);
    foreach ($entries as $entry) {
        $date = date("d.m.Y", strtotime($entry['datetime']));
        echo '<li><a href="index.php?function=entry_public&bid=' . $user['uid'] . '&eid=' . $entry['eid'] . '">' . $entry['title'].'</a></li>';
    }
}

?>
<!--  <div>-->
<!--  <h4>Hipster Ipsum --><?php //echo $date?><!--</h4>-->
<!--  Neutra truffaut blog, 90's microdosing gochujang fingerstache helvetica etsy. Shoreditch fashion axe tote bag wayfarers normcore, freegan hot chicken sriracha 8-bit brunch actually live-edge quinoa. Trust fund sustainable forage tilde, etsy gentrify 8-bit poutine blog swag lomo pug. Truffaut ugh pinterest, umami tofu hoodie cronut. Crucifix skateboard single-origin coffee, vape slow-carb pork belly direct trade everyday carry photo booth schlitz venmo franzen. Air plant viral stumptown pabst disrupt. Readymade mumblecore tumeric kitsch hashtag, godard trust fund.-->
<!--  </div>-->
