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
        
        if (isset($_GET['name'])) {
            $card = $_GET["name"];
            $url = "https://api.scryfall.com/cards/search?name&q=" . $card . "";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $result = json_decode(curl_exec($ch), true);
            curl_close($ch);
            $imgURL = $result['data'][0]['image_uris']['normal'];
            $cardName = $result['data'][0]['name'];
            $id = $result['data'][0]['id'];
            $artist = $result['data'][0]['artist'];
            $colors = $result['data'][0]['color_identity'][0];
            $colors1 = $result['data'][0]['color_identity'][1];
            $colors2 = $result['data'][0]['color_identity'][2];
            $colors3 = $result['data'][0]['color_identity'][3];
            $colors4 = $result['data'][0]['color_identity'][4];
            $power = $result['data'][0]['power'][0];
            $def = $result['data'][0]['toughness'][0];
            $text = $result['data'][0]['oracle_text'];
            $flavor_text = $result['data'][0]['flavor_text'];
            $type = $result['data'][0]['type_line'];
            $manaCost = $result['data'][0]['mana_cost'];
            $rarity = $result['data'][0]['rarity'];
            $cmc = $result['data'][0]['cmc'];
            $setName = $result['data'][0]['set_name'];
            $setType = $result['data'][0]['set_type'];
            echo "<br><img src=" . $imgURL . "width=45% height=45% ><br>";
            echo "<br><h5>Card ID: " . $id . "<h1>";
            echo "<h5>Name: " . $cardName . "<h1>";
            echo "<h5>Artist: " . $artist . "<h1>";
            echo "<h5>Power: " . $power . "<h1>";
            echo "<h5>Toughness: " . $def . "<h1>";
            echo "<h5>Text: " . $text . "<h1>";
            echo "<h5>Flavor text: " . $flavor_text . "<h1>";
            echo "<h5>Type: " . $type . "<h1>";
            echo "<h5>Mana Cost: " . $manaCost . "<h1>";
            echo "<h5>Rarity: " . $rarity . "<h1>";
            echo "<h5>Cmc: " . $cmc . "<h1>";
            echo "<h5>Set name: " . $setName . "<h1>";
            echo "<h5>Set type: " . $setType . "<h1>";

            if ($colors == 'R') {
                echo "<h5>Color: Red<h1>";
            }
            if ($colors == 'G') {
                echo "<h5>Color: Green<h1>";
            }
            if ($colors == 'W') {
                echo "<h5>Color: White<h1>";
            }
            if ($colors == 'B') {
                echo "<h5>Color: Black<h1>";
            }
            if ($colors == 'U') {
                echo "<h5>Color: Blue<h1>";
            }
            if ($colors1 == 'R') {
                echo "<h5>Color 2: Red<h1>";
            }
            if ($colors1 == 'G') {
                echo "<h5>Color 2: Green<h1>";
            }
            if ($colors1 == 'W') {
                echo "<h5>Color 2: White<h1>";
            }
            if ($colors1 == 'B') {
                echo "<h5>Color 2: Black<h1>";
            }
            if ($colors1 == 'U') {
                echo "<h5>Color 2: Blue<h1>";
            }
            if ($colors2 == 'R') {
                echo "<h5>Color 3: Red<h1>";
            }
            if ($colors2 == 'G') {
                echo "<h5>Color 3: Green<h1>";
            }
            if ($colors2 == 'W') {
                echo "<h5>Color 3: White<h1>";
            }
            if ($colors2 == 'B') {
                echo "<h5>Color 3: Black<h1>";
            }
            if ($colors2 == 'U') {
                echo "<h5>Color 3: Blue<h1>";
            }
            if ($colors3 == 'R') {
                echo "<h5>Color 4: Red<h1>";
            }
            if ($colors3 == 'G') {
                echo "<h5>Color 4: Green<h1>";
            }
            if ($colors3 == 'W') {
                echo "<h5>Color 4: White<h1>";
            }
            if ($colors3 == 'B') {
                echo "<h5>Color 4: Black<h1>";
            }
            if ($colors3 == 'U') {
                echo "<h5>Color 4: Blue<h1>";
            }
            if ($colors4 == 'R') {
                echo "<h5>Color 5: Red<h1>";
            }
            if ($colors4 == 'G') {
                echo "<h5>Color 5: Green<h1>";
            }
            if ($colors4 == 'W') {
                echo "<h5>Color 5: White<h1>";
            }
            if ($colors4 == 'B') {
                echo "<h5>Color 5: Black<h1>";
            }
            if ($colors4 == 'U') {
                echo "<h5>Color 5: Blue<h1>";
            }
        }
        // foreach ($result['data'][0]['name'] as $res) {
        //     echo "Nome" . $res . "<br>";
        // }
        ?>
        <form action="save.php" method="post">
            <input type="submit" name = "save" value="Put to Favorite">
        </form>
    </div>
    <script src="" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>