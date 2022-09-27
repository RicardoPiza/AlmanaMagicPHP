<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container align-content-center">
        <?php
        require_once 'cards.php';
        $cards = new Cards();
        if (isset($_GET['name'])) {
            $card = $_GET["name"];
            $url = "https://api.scryfall.com/cards/search?name&q=" . $card . "";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $result = json_decode(curl_exec($ch), true);
            curl_close($ch);
            $cards->setImageURL($result['data'][0]['image_uris']['normal']);
            $cards->setCardName($result['data'][0]['name']);
            $cards->setId($result['data'][0]['id']);
            $cards->setArtist($result['data'][0]['artist']);
            $colors0 = $result['data'][0]['color_identity'][0];
            $colors1 = $result['data'][0]['color_identity'][1];
            $colors2 = $result['data'][0]['color_identity'][2];
            $colors3 = $result['data'][0]['color_identity'][3];
            $colors4 = $result['data'][0]['color_identity'][4];
            $cards->setColors([$colors0, $colors1, $colors2, $colors3, $colors4]);
            $cards->setPower($result['data'][0]['power'][0]);
            $cards->setDef($result['data'][0]['toughness'][0]);
            $cards->setText($result['data'][0]['oracle_text']);
            $cards->setFlavor_text($result['data'][0]['flavor_text']);
            $cards->setType($result['data'][0]['type_line']);
            $cards->setManaCost($result['data'][0]['mana_cost']);
            $cards->setRarity($result['data'][0]['rarity']);
            $cards->setCmc($result['data'][0]['cmc']);
            $cards->setSetName($result['data'][0]['set_name']);
            $cards->setSetType($result['data'][0]['set_type']);
            echo "<br><img src=" . $cards->getImageURL() . "width=45% height=45% ><br>";
            echo "<br><h5>Card ID: " . $cards->getId() . "<h1>";
            echo "<h5>Name: " . $cards->getCardName() . "<h1>";
            echo "<h5>Artist: " . $cards->getArtist() . "<h1>";
            echo "<h5>Power: " . $cards->getPower() . "<h1>";
            echo "<h5>Toughness: " . $cards->getDef() . "<h1>";
            echo "<h5>Text: " . $cards->getText() . "<h1>";
            echo "<h5>Flavor text: " . $cards->getFlavor_text() . "<h1>";
            echo "<h5>Type: " . $cards->getType() . "<h1>";
            echo "<h5>Mana Cost: " . $cards->getManaCost() . "<h1>";
            echo "<h5>Rarity: " . $cards->getRarity() . "<h1>";
            echo "<h5>Cmc: " . $cards->getCmc() . "<h1>";
            echo "<h5>Set name: " . $cards->getSetName() . "<h1>";
            echo "<h5>Set type: " . $cards->getSetType() . "<h1>";

            if ($cards->getColors()[0] == 'R') {
                echo "<h5>Color: Red<h1>";
            }
            if ($cards->getColors()[0] == 'G') {
                echo "<h5>Color: Green<h1>";
            }
            if ($cards->getColors()[0] == 'W') {
                echo "<h5>Color: White<h1>";
            }
            if ($cards->getColors()[0] == 'B') {
                echo "<h5>Color: Black<h1>";
            }
            if ($cards->getColors()[0] == 'U') {
                echo "<h5>Color: Blue<h1>";
            }
            if ($cards->getColors()[1] == 'R') {
                echo "<h5>Color 2: Red<h1>";
            }
            if ($cards->getColors()[1] == 'G') {
                echo "<h5>Color 2: Green<h1>";
            }
            if ($cards->getColors()[1] == 'W') {
                echo "<h5>Color 2: White<h1>";
            }
            if ($cards->getColors()[1] == 'B') {
                echo "<h5>Color 2: Black<h1>";
            }
            if ($cards->getColors()[1] == 'U') {
                echo "<h5>Color 2: Blue<h1>";
            }
            if ($cards->getColors()[2] == 'R') {
                echo "<h5>Color 3: Red<h1>";
            }
            if ($cards->getColors()[2] == 'G') {
                echo "<h5>Color 3: Green<h1>";
            }
            if ($cards->getColors()[2] == 'W') {
                echo "<h5>Color 3: White<h1>";
            }
            if ($cards->getColors()[2] == 'B') {
                echo "<h5>Color 3: Black<h1>";
            }
            if ($cards->getColors()[2] == 'U') {
                echo "<h5>Color 3: Blue<h1>";
            }
            if ($cards->getColors()[3] == 'R') {
                echo "<h5>Color 4: Red<h1>";
            }
            if ($cards->getColors()[3] == 'G') {
                echo "<h5>Color 4: Green<h1>";
            }
            if ($cards->getColors()[3] == 'W') {
                echo "<h5>Color 4: White<h1>";
            }
            if ($cards->getColors()[3] == 'B') {
                echo "<h5>Color 4: Black<h1>";
            }
            if ($cards->getColors()[3] == 'U') {
                echo "<h5>Color 4: Blue<h1>";
            }
            if ($cards->getColors()[4] == 'R') {
                echo "<h5>Color 5: Red<h1>";
            }
            if ($cards->getColors()[4] == 'G') {
                echo "<h5>Color 5: Green<h1>";
            }
            if ($cards->getColors()[4] == 'W') {
                echo "<h5>Color 5: White<h1>";
            }
            if ($cards->getColors()[4] == 'B') {
                echo "<h5>Color 5: Black<h1>";
            }
            if ($cards->getColors()[4] == 'U') {
                echo "<h5>Color 5: Blue<h1>";
            }
        }
        // foreach ($result['data'][0]['name'] as $res) {
        //     echo "Nome" . $res . "<br>";
        // }
        ?>
        <form action="save.php" method="post">
            <input type="submit" name=<?php $cards->getCardName() ?>value="Put to Favorite">
        </form>
    </div>
    <script src="" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>