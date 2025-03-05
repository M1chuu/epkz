<?php
$db = new PDO('mysql:host=localhost;dbname=baza','root','');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizer</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <div id="baner1">
         <h2>MÓJ ORGANIZER</h2>
    </div>

    <div id="baner2">
        <form action="organizer.php" method="post">
            <label for="wydarzenie">Wpis wydarzenia:</label> <input type="text" name="wydarzenie" id="wydarzenie"> <button type="submit">ZAPISZ</button>
        </form>
    </div>

    <div id="baner3">
        <img src="logo2.png" alt="Mój organizer">
    </div>
    <main>
                                         <!-- srkypt 1 -->
        <?php
            $stmt = $db->query("SELECT dataZadania, miesiac, wpis FROM zadania WHERE miesiac = 'sierpien'");
            $dane = $stmt->fetchAll();
        ?>

        <?php foreach($dane as $d): ?>
            <div class='dzien'>
                <h6><?= $d["dataZadania"] ?> , <?= $d['miesiac'] ?></h6>
                <p><?= $d["wpis"] ?> </p>
            </div>
        <?php endforeach; ?>
    </main>
    <footer>
                                            <!-- srkypt 2 -->
    <?php
            $stmt = $db->query("SELECT miesiac, rok FROM zadania WHERE dataZadania = '2020-08-01'");
            $dane = $stmt->fetchAll();
        ?>

        <?php foreach($dane as $d): ?>

             <h1>miesiac: <?=$d["miesiac"] ?> ,rok <?= $d['rok'] ?></h1>




        <?php endforeach; ?>
    </footer>
</body>
</html>
<?php
unset($db);
?>