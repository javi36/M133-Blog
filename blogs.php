
            <head>
                <link href="css/blogs.css" rel="stylesheet" />
            </head>
            <body>
            <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <?php
                        // Alle Blogs bzw. Benutzernamen holen und falls Blog bereits ausgewählt, entsprechenden Namen markieren
                        // Schlaufe über alle Blogs bzw. Benutzer
                        // Nachfolgend das Beispiel einer Ausgabe in HTML, dieser Teil muss mit einer Schlaufe über alle Blogs und der Ausgabe mit PHP ersetzt werden
                        $users = getUserNames();
                        $counter = 0;
                        $url = 'C:\xampp\htdocs\m133\blog\blog_vorlage_lernende\img\blogs.jpg';
                        foreach ($users as $user) {
                            $counter++;
                            if ($_GET['bid'] == $user['uid']) {
                                echo '<a href="index.php?function=entries_public&bid=' . $user['uid'] . '" style=" color:#f7dfc5; "  title="Blog auswählen"><div class = "image col-sm-6 userblogs' . $counter . ' " style="background-image: url(img/' . $counter . '.jpg);background-repeat:no-repeat; height: 50vh; text-align: center"><h4>' . $user['name'] . '</h4> </div> </a>';
                            } else {
                                echo '<a href="index.php?function=entries_public&bid=' . $user['uid'] . '" style="color:#C97443;" title="Blog auswählen"><div class = " image col-sm-6 userblogs' . $counter . '" style="background-image: url(img/' . $counter . '.jpg);background-repeat:no-repeat;height: 50vh;  text-align: center"><h4>' . $user['name'] . '</h4> </div> </a>';
                            }
                        }
                        ?>
                    </div>
                </div>
        </body>