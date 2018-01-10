<?php
/**
 * Created by PhpStorm.
 * User: vmadmin
 * Date: 15.11.2017
 * Time: 21:14
 */
//zeigt der entry vom übergegebene eid im URL.
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
                <h1> <?php echo "".$entry['title'].", ".$date."";?></h1>
            </div>

        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <p class="inhalt">
<?php
echo nl2br($entry['content']);
?>
        </p>
    </div>
</div>