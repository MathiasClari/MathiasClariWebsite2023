<?php
session_start();

function createNav() {
    $buttons = array(
        "./" => "Home",
        "about" => "About",
        "project" => "Projects",
        "store" => "Store",
        "contact" => "Contact"
    );
    $ending = explode("/", $_SERVER["REQUEST_URI"]);
    $ending = $ending [count($ending ) - 1];
    for ($i = 0; $i < count(array_keys($buttons)); $i++) {
        $url = array_keys($buttons)[$i];
        $name = $buttons[$url];
        $urlFormatted = $url;
        if ($urlFormatted == "./") {
            $urlFormatted = "";
        }
        ?>
        <li<?php if ($urlFormatted == $ending) { echo " class='active'"; } ?>><a href=<?php echo '"' . $url . '"'; ?>><?php echo $name; ?></a></li>
        <?php
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Mathias Clari Drenik</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css<?php echo '?'.mt_rand(); ?>" />
    <script src="js/system.js"></script>
</head>
<body>
<img src="https://i.imgur.com/ZzBK35O.jpg" id="background">
<nav>
    <div class="nav-container">
        <a id="logo">MathiasClari</a>
        <ul id="uli">
            <?php createNav(); ?>
        </ul>
    </div>
</nav>
</body>
</html>