<?php
class Cards
{
    private $id;
    private $imageURL;
    private $cardName;
    private $artist;
    private $colors;
    private $power;
    private $def;
    private $text;
    private $flavor_text;
    private $type;
    private $manaCost;
    private $rarity;
    private $cmc;
    private $setName;
    private $setType;

    public function showCards(){

        if (isset($_GET['name'])) {
            $card = $_GET["name"];
            $url = "https://api.scryfall.com/cards/search?name&q=" . $card . "";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $result = json_decode(curl_exec($ch), true);
            curl_close($ch);
            $imgURL = $result['data'][0]['image_uris']['normal'];
            $this->cardName = $result['data'][0]['name'];
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
            echo "<h5>Name: " . $this->cardName . "<h1>";
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
    }

    public function insert(){
        $conectado= new Connection();
        $st=$conectado->conn->prepare(
        "insert into alunos(nome,idade,telefone) ".
        "values(:n)");
        $st->bindValue(":n",$this->getName());
        return $st->execute();	
    }
    public function getId()
    {
        return $this->id;
    }

    public function getImageURL()
    {
        return $this->imageURL;
    }

    public function getName()
    {
        return $this->cardName;
    }

    public function getArtist()
    {
        return $this->artist;
    }

    public function getColors()
    {
        return $this->colors;
    }

    public function getPower()
    {
        return $this->power;
    }

    public function getDef()
    {
        return $this->def;
    }

    public function getText()
    {
        return $this->text;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getManaCost()
    {
        return $this->manaCost;
    }

    public function getRarity()
    {
        return $this->rarity;
    }

    public function getCmc()
    {
        return $this->cmc;
    }

    public function getSetName()
    {
        return $this->setName;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function setImageURL($imageURL): void
    {
        $this->imageURL = $imageURL;
    }

    public function setName($cardName): void
    {
        $this->cardName = $cardName;
    }

    public function setArtist($artist): void
    {
        $this->artist = $artist;
    }

    public function setColors($colors): void
    {
        $this->colors = $colors;
    }

    public function setPower($power): void
    {
        $this->power = $power;
    }

    public function setDef($def): void
    {
        $this->def = $def;
    }

    public function setText($text): void
    {
        $this->text = $text;
    }

    public function setType($type): void
    {
        $this->type = $type;
    }

    public function setManaCost($manaCost): void
    {
        $this->manaCost = $manaCost;
    }

    public function setRarity($rarity): void
    {
        $this->rarity = $rarity;
    }

    public function setCmc($cmc): void
    {
        $this->cmc = $cmc;
    }
    public function setSetName($setName): void
    {
        $this->setName = $setName;
    }
    public function getFlavor_text()
    {
        return $this->flavor_text;
    }
    public function setFlavor_text($flavor_text)
    {
        $this->flavor_text = $flavor_text;

        return $this;
    }
	/**
	 * @return mixed
	 */
	function getSetType() {
		return $this->setType;
	}
	
	/**
	 * @param mixed $setType 
	 * @return Cards
	 */
	function setSetType($setType): self {
		$this->setType = $setType;
		return $this;
	}
}
