<!DOCTYPE html>
<html lang="en">
    <head>
        <title>The Meadough Pizzaria | Order Confirmed</title>
        <meta charset="utf-8" />
        <meta name="author" content="Cameron Yon-Vachon" />
        <meta name="description" content="Ordered for The Meadough Pizzaria" />
        <link rel="shortcut icon" href="images/pizza.svg" type="image/x-icon" />
        <link rel="stylesheet" href="styles/menu-style.css" />
    </head>
    <body>
        <header>
            <?php
            include("includes/logo.php");
            ?>
            <?php
	        include("includes/nav.php");
            ?>
        </header>
        <main>
        <?php
        $name = $_GET["name"];

        echo('<h3>Thank you ' .$name. ', your order has been successfully confirmed! Please be ready for pickup at your selected store/delivery to your front door in 30 minutes.</h3>')
        ?>
        </main>
        <footer>
            <?php
            include("includes/copyright.php");
            ?>
        </footer>
    </body>
</html>