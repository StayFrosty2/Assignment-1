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
                    <li><p>Barrie, 402 Undermeadow Dr</p>
                    <img src="images/pizzaria 1.png" height="512" width="512" alt="Barrie Location" /></li>

                    <li><p>Penetanguishine, 54 Yonc Ave</p>
                    <img src="images/the meadough resturant.png" height="384" width="512" alt="Penetanguishine Location" /></li>
                </ul>
            </section>
            <section>
                <h2>Popular Items</h2>
                <ul>
                    <li>
                        <h3>Classic Medium Woodfire Pepperoni: $10.20</h3>
                        <img src="images/pepperoni-pizza.svg" height="200" width="200" alt="Pepperoni Pizza" />
                        <p>A Pepperonni Pizza, baked in our woodfire ovens. A homemade taste with <em>lots</em> of love.</p>
                    </li>
                    <li>
                        <h3>Deluxe BBQ Chicken: $18.99</h3>
                        <img src="images/bbq-pizza.svg" height="200" width="200" alt="BBQ Pizza" />
                        <p>The biggest and bestest we can make, rotisserie styled shredded chicken and red pepper, drizzled in our homemade buffalo-style BBQ sauce.</p>
                    </li>
                    <li>
                        <h3>Specialty Cheesy Breadsticks: $5.45</h3>
                        <img src="images/breadsticks.svg" height="150" width="200" alt="Breadsticks" />
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
            <?php
            include("includes/copyright.php");
            ?>
        </footer>
    </body>
</html>