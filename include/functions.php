<?php
  // Schreibt einen Wert in den globalen Array
  function setValue($key, $value) {
    global $params;
    $params[$key] = $value;
  }

  // Holt einen Wert aus dem globalen Array
  function getValue($key) {
    global $params;
	if (isset($params[$key])) return $params[$key];
	else return "";
  }

  // Prüft, ob der Benutzer angemeldet ist
  function getUserIdFromSession() {
      $sessionUserId = $_SESSION['userId'];
      if (!isset($sessionUserId)){
          return 0;
      }
      return $sessionUserId;
  }
    // Setzt der Benutzername oben links
    function getMenuTitle() {
        $loggedInUser = getUserIdFromSession();
        if ($loggedInUser != 0) {
            return 'Wilkommen ' . getUserName($loggedInUser);
        } else {
            foreach (getUserNames() as $username) {
                if (!isset($_GET['bid'])) {
                    break;
                } else
                    if ($_GET['bid'] == $username['uid']) {
                        return $username['name'];
                    }
            }
            return "Blog wurde nicht ausgewählt";
        }
    }
    // Zeit die Navigation an
    function getMenu(){
        if (isset($_GET['bid'])) $blogId = $_GET['bid'];
        else $blogId = 0;
        echo "<li><a href='index.php?function=login&bid=$blogId'>Login</a></li>";
        echo "<li><a href='index.php?function=blogs&bid=$blogId'>Blog wählen</a></li>";
        echo "<li><a href='index.php?function=entries_public&bid=$blogId'>Beiträge anzeigen</a></li>";
    }
?>
