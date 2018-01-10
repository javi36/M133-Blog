<?php
/**
 * Created by PhpStorm.
 * User: vmadmin
 * Date: 14.12.2017
 * Time: 13:16
 */
$currentUser = getUserIdFromSession();
$eid = $_GET['eid'];
$entry = getEntry($eid);
$date = gmdate("m.d.y", $entry['datetime']);


?>

<link rel="stylesheet" href="css/entery.css">
<section id="home" class="main-contact parallax-section">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <h1> <?php
                    if ($entry['uid'] == $currentUser) {
                        echo "" . $entry['title'] . ", " . $date . "";
                    }?></h1>
            </div>

        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <p class="inhalt">
<?php
if ($entry['uid'] == $currentUser) {
    echo nl2br($entry['content']);
}
?>
        </p>
    </div>
</div>