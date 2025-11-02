<!DOCTYPE html>
<html lang="en">
    <head>
        <title>The Meadough Pizzaria | Homepage</title>
        <meta charset="utf-8" />
        <meta name="author" content="Cameron Yon-Vachon" />
        <meta name="description" content="Homepage for The Meadough Pizzaria" />
        <link rel="shortcut icon" href="images/pizza.svg" type="image/x-icon" />
        <link rel="stylesheet" href="styles/styles.css" />
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
            <section>
                <h2>Locations</h2>
                <ul>
                    <li>Barrie, 402 Undermeadow Dr</li>
                    <li>Penetanguishine, 54 Yonc Ave</li>
                </ul>
            </section>
            <section>
                <h2>Popular Items</h2>
                <ul>
                    <li>
                        <h3>Classic Medium Woodfire Pepperoni: $10.20</h3>
                        <p>A Pepperonni Pizza, baked in our woodfire ovens. A homemade taste with <em>lots</em> of love.</p>
                    </li>
                    <li>
                        <h3>Deluxe BBQ Chicken: $18.99</h3>
                        <p>The biggest and bestest we can make, rotisserie styled shredded chicken and red pepper, drizzled in our homemade buffalo-style BBQ sauce.</p>
                    </li>
                    <li>
                        <h3>Specialty Cheesy Breadsticks: $5.45</h3>
                        <p>A recipe past down through the smith family for decades, these breadsticks have generations worth of tests and a number of 5 star reviewers (and not all just our aunts and uncles!)</p>
                    </li>
                    <li>
                        <h3><em>We also do "Build your own" custom Pizzas!</em></h3>
                        <p>3 Sizes (Small $7.99, Medium $12.99, Large $17.99), Up to 3 toppings ($1.00 for each additional topping), several kinds of cheese and sauce.</p>
                    </li>
                </ul>
                <h3>Interested?</h3>
                <p><a href="menu.php">See the menu and Order Here!</a></p>
            </section>
        </main>
        <footer>
            <img src="../images/animator-pizzaria.svg" height="135px" width="417px" alt="Pizzaria Logo" />
        </footer>
    </body>
</html>