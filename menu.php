<!DOCTYPE html>
<html lang="en">
    <head>
        <title>The Meadough Pizzaria | Menu</title>
        <meta charset="utf-8" />
        <meta name="author" content="Cameron Yon-Vachon" />
        <meta name="description" content="The Menu for The Meadough Pizzaria" />
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
            <h1>Menu</h1>
        </header>
        <main>
            <img src="images/pepperoni-pizza.svg" height="200" width="200" alt="Pepperoni Pizza" />
            <h3>Classic Woodfire Pepperoni</h3>
            <input type="radio" name="pepperoni" id="pepperoni" value="pepperoni" />
            <select name="pepsize" id="pepsize">
                <optgroup label="Size">
                    <option value="small">Small $6.99</option>
                    <option value="medium">Medium $10.20</option>
                    <option value="large">Large $14.45</option>
                </optgroup>
            </select>
        </main>
        <footer>
            <?php
            include("includes/copyright.php");
            ?>
        </footer>
    </body>
</html>