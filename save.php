<?php
require_once 'cards.php';
if (isset($_POST[$cards->getCardName()])) {
    $cards = new Cards();
    $cards->insert();
    if ($cards->insert()) {
?>
        <script>
            window.alert("card successfully inserted");
            window.location.href = "./api_search.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            window.alert("Error");
            window.location.href = "./api_search.php";
        </script>
<?php
    }
}
?>