<?php
$meldung = "";
$email = "";
$passwort = "";

if (isset($_POST['form-username'])) {
    $email = $_POST['form-username'];
    $passwort = $_POST['form-password'];

    $user = getUserIdFromDb($email, $passwort);

    if ($user == 0) {
        $meldung = "Falscher Benutzername oder Passwort";
    } else {
        $_SESSION['uid'] = $user;
        header('Location: index.php?function=entries_private');
    }
}


// $_SERVER['PHP_SELF'] = login.php in diesem Fall (also die PHP-Datei, die gerade ausgeführt wird).
// Mit andern Worten: Nach Senden des Formulars wird wieder login.php aufgerufen.
// Die Funktionen zur Überprüfung, ob die Login-Daten gültig sind, muss also hier oben im PHP-Teil stehen!
// Wenn Login-Daten korrekt sind:
// Session-Variable mit Benutzer-ID setzen und Wechsel in Memberbereich
// $_SESSION['uid'] = $uid;
// header('Location: index.php?function=entries_member');
// Wenn Formular gesendet worden ist, die Login-Daten aber nicht korrekt sind:
// Unten auf der Seite Anzeige der Fehlermeldung.
?>
<!--<form method="post" action="--><?php //echo $_SERVER['PHP_SELF']."?function=login"; ?><!--">-->
<!--  <label for="email">Benutzername</label>-->
<!--  <div>-->
<!--	<input type="email" id="email" name="email" placeholder="E-Mail" value="" />-->
<!--  </div>-->
<!--  <label for="passwort">Passwort</label>-->
<!--  <div>-->
<!--	<input type="password" id="passwort" name="passwort" placeholder="Passwort" value="" />-->
<!--  </div>-->
<!--  <div>-->
<!--	<button type="submit">senden</button>-->
<!--  </div>-->


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/form-elements.css">
    <link rel="stylesheet" href="css/login.css">

    <!-- Favicon and touch icons -->

</head>

<body>

<!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1><strong>Willkommen</strong></h1>
                    <div class="description">
                        <p>
                            Um deinen Blog zu bearbeiten, musst du dich anmelden!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Login </h3>
                            <p>Benutzernamen und Passwort zur Anmledung</p>
                            <?php if (!empty($meldung)) {
                                echo
                                    '<div class="form-check has-danger"><label class="form-check-label">' . $meldung . '</label></div>';
                            } ?>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" action="<?php echo $_SERVER['PHP_SELF'] . "?function=login"; ?>" method="post"
                              class="login-form">
                            <div class="form-group">
                                <label class="sr-only" for="form-username">Benuzername</label>
                                <input type="text" name="form-username" placeholder="Username..."
                                       class="form-username form-control" id="form-username">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-password">Passwort</label>
                                <input type="password" name="form-password" placeholder="Password..."
                                       class="form-password form-control" id="form-password">
                            </div>
                            <button type="submit" class="btn">Sign in!</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>


<!-- Javascript -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>


</body>

