<?php
  // Alle Blogs bzw. Benutzernamen holen und falls Blog bereits ausgewählt, entsprechenden Namen markieren
  // Hier Code....

  // Schlaufe über alle Blogs bzw. Benutzer
  // Hier Code....

  // Nachfolgend das Beispiel einer Ausgabe in HTML, dieser Teil muss mit einer Schlaufe über alle Blogs und der Ausgabe mit PHP ersetzt werden


        $users = getUserNames();
        foreach ($users as $user) {
            if($_GET['bid'] == $user['uid']) {
                echo '<a href="index.php?function=entries_public&bid='.$user['uid'].'" style="color:red" title="Blog auswählen"><h4>'.$user['name'].'</h4></a>';
            }else{
                echo '<a href="index.php?function=entries_public&bid='.$user['uid'].'" style="color:black" title="Blog auswählen"><h4>'.$user['name'].'</h4></a>';
            }
        }
?>

<!--<div></div>-->
<!--<div><a href='index.php?function=entries_public&bid=2' title='Blog auswählen'><h4>Hans Hinterseer</h4></a></div>-->
<!--<div><a href='index.php?function=entries_public&bid=3' title='Blog auswählen'><h4>Sonja Sauser</h4></a></div>-->
<!--<div><a href='index.php?function=entries_public&bid=4' title='Blog auswählen'><h4>Anna Abegglen</h4></a></div>-->