<?php
require dirname(__DIR__) . '/bootstrap.php';
//Diese datei nimmt die sceneID aus der letzten scene und incrementiert sie um 1 und fordert so aus der DB die nächste scene aus der Datenbank an.

//SQL Abfrage mit der PHP Variable $lastsceneID  + 1 = $thisscene holt die bild url und map koordinaten und schreibt sie in entsprechende Variablen zur Verwendung in HTML.

// Innerhalb eines style tags kann ich PHP nutzen, z.B. um die map koordinaten zu berechnen.

// Get scene bkgimg path from DB


$sceneID = 3;
$mapID = 1;
$con = connect();
$sql = "SELECT * FROM scenes WHERE sceneID = ? ";
$stmt = $con->prepare($sql);
$stmt->execute([$sceneID]);

$result = $stmt->get_result(); // Holt das Ergebnis-Set
$scenerow = $result->fetch_assoc(); // Holt eine Zeile als assoziatives Array

$sql = "SELECT * FROM usemap WHERE sceneID = ? ";
$stmt = $con->prepare($sql);
$stmt->execute([$sceneID]);

$result = $stmt->get_result(); // Holt das Ergebnis-Set
$maprow = $result->fetch_assoc(); // Holt eine Zeile als assoziatives Array

echo "Map ID: " . $maprow['mapID'] . "<br>";
echo "Map coords: " . $maprow['mappolycoords'] . "<br>";

$mappolycoords = $maprow['mappolycoords'];
$sceneImg = $scenerow['bkgimg'];
$htmlimgalt = $scenerow['htmlimgalt'];
$bkgimg = $scenerow['bkgimg'];
$quest = $scenerow['quest'];
$audio = $scenerow['audio'];
$scenename = $scenerow['scenename'];
$stmt->close();
$con->close();
?>
<html lang="de">

<head>
    <title>CBisland Game</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>

<div class="gamediv">
    <div class="sceneheader">
        <h2><-BACK BUTTON | Moin . Willkommen bei CBisland! | gamediv</h2>

    </div>
    <br>
    <h3>Scenediv: Scenename: <?= $scenename ?>

    </h3>
    <br>
    <header class="sceneheader">
        <h3>Sceneheader</h3>
    </header>
    <img usemap="#scenemap" alt="<?php echo $htmlimgalt; ?>" src="<?php echo $sceneImg; ?>" height="720"
         width="1280"/>
    <map name="scenemap">
        <area target="_self" alt="<?php echo $htmlimgalt; ?>" title="nextscene" href="nextscene.php"
              coords="<?php echo $mappolycoords; ?>" shape="poly">
    </map>
    <div class="scenequestlogdiv"><br>
        <h3>scenequestlogdiv: Questlog: <?php echo $quest; ?></h3>
        <audio controls autoplay>
            <source src="<?php echo $audio; ?>" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>

    </div>
    <footer class="scenefooter">
        <h3>Scenefooter</h3>
    </footer>
</div>

<br>
<br>
<br>
</div>
</body>
</html>
