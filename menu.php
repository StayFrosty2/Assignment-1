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
            <!-- Top of the page -->
            <?php
            include("includes/logo.php");
            ?>
            <?php
            include("includes/nav.php");
            ?>
            <h1>Menu</h1>
        </header>
        <main>
            <!-- Section for Customer Orders -->

            <!-- Pepperoni Pizza -->
            <form id="order" action="ordered.php" method="get">
                <img src="images/pepperoni-pizza.svg" height="300" width="300" alt="Pepperoni Pizza" />
                <h3>Classic Woodfire Pepperoni</h3>
                <input type="checkbox" name="pepperoni" id="pepperoni" value="pepperoni" />
                <select name="pepsize" id="pepsize">
                    <optgroup label="Size">
                        <option value="small">Small $6.99</option>
                        <option value="medium">Medium $10.20</option>
                        <option value="large">Large $14.45</option>
                    </optgroup>
                </select>
                <select name="pepcrust" id="pepcrust">
                    <optgroup Label="Crust Thickness">
                        <option value="thin">Thin Crust</option>
                        <option value="thick">Thick Crust</option>
                    </optgroup>
                </select>
                <label for="pepamount">Amount?</label>
                <input type="text" name="pepamount" id="pepamount" />

                <p>--------------------------------------</p>

                <!-- Cheese Pizza -->
                <img src="images/cheese-pizza.svg" height="300" width="300" alt="Cheese Pizza" />
                <h3>Four Cheese Pizza</h3>
                <input type="checkbox" name="cheese" id="cheese" value="cheese" />
                <select name="cheesesize" id="cheesesize">
                    <optgroup label="Size">
                        <option value="small">Small $5.50</option>
                        <option value="medium">Medium $8.50</option>
                        <option value="large">Large $11.50</option>
                    </optgroup>
                </select>
                <select name="cheesecrust" id="cheesecrust">
                    <optgroup label="Crust Thickness">
                        <option value="thin">Thin Crust</option>
                        <option value="thick">Thick Crust</option>
                    </optgroup>
                </select>
                <label for="cheeseamount">Amount?</label>
                <input type="text" name="cheeseamount" id="cheeseamount" />

                <p>--------------------------------------</p>

                <!-- BBQ Pizza -->
                <img src="images/bbq-pizza.svg" height="300" width="300" alt="BBQ Pizza" />
                <h3>Deluxe BBQ Chicken</h3>
                <input type="checkbox" name="bbq" id="bbq" value="bbq" />
                <select name="bbqsize" id="bbqsize">
                    <optgroup label="Size">
                        <option value="medium">Medium $15.99</option>
                        <option value="large">Largest $18.99</option>
                    </optgroup>
                </select>
                <select name="bbqcrust" id="bbqcrust">
                    <optgroup label="Crust Thickness">
                        <option value="thin">Thin Crust</option>
                        <option value="thick">Thick Crust</option>
                    </optgroup>
                </select>
                <label for="bbqamount">Amount?</label>
                <input type="text" name="bbqamount" id="bbqamount" />
                
                <p>--------------------------------------</p>

                <!-- Hawaiian Pizza -->
                <img src="images/hawaiian-pizza.svg" height="300" width="300" alt="Hawaiian Pizza" />
                <h3>Mozzerella Pepperoni Hawaiian Medley</h3>
                <input type="checkbox" name="hawaiian" id="hawaiian" value="hawaiian" />
                <select name="hawaiiansize" id="hawaiiansize">
                    <optgroup label="Size">
                        <option value="small">Small $7.99</option>
                        <option value="medium">Medium $11.99</option>
                        <option value="large">Large $15.99</option>
                    </optgroup>
                </select>
                <select name="hawaiiancrust" id="hawaiiancrust">
                    <optgroup label="Crust Thickness">
                        <option value="thin">Thin Crust</option>
                        <option value="thick">Thick Crust</option>
                    </optgroup>
                </select>
                <label for="hawaiianamount">Amount?</label>
                <input type="text" name="hawaiianamount" id="hawaiianamount" />
                <p>--------------------------------------</p>

                <!-- First Build your own Pizza -->
                <img src="images/pizza.svg" height="300" width="300" alt="Generic Pizza" />
                <h3><em>Build your own!</em></h3>
                <input type="checkbox" name="byo1" id="byo1" value="byo1" />
                <select name="byo1size" id="byo1size">
                    <optgroup label="Size">
                        <option value="small">Small $7.50</option>
                        <option value="medium">Medium $12.50</option>
                        <option value="large">Large $16.50</option>
                    </optgroup>
                </select>
                <select name="byo1crust" id="byo1crust">
                    <optgroup label="Crust Thickness">
                        <option value="thin">Thin Crust</option>
                        <option value="thick">Thick Crust</option>
                    </optgroup>
                </select>
                <ul>
                    <li>
                        <select name="byo1topping1" id="byo1topping1">
                            <option>None</option>
                            <optgroup label="Proteins">
                                <option>Pepperoni</option>
                                <option>Ham</option>
                                <option>Sausage</option>
                                <option>Chicken</option>
                                <option>Beef</option>
                            </optgroup>

                            <optgroup label="Veggies and Fruits">
                                <option>Tomato</option>
                                <option>Red Bell Pepper</option>
                                <option>Banana Pepper</option>
                                <option>Spinach</option>
                                <option>Black Olives</option>
                                <option>Green Olives</option>
                            </optgroup>
                            <option>BBQ Sauce ($0.50)</option>
                        </select>
                    </li>
                    <li>
                        <select name="byo1topping2" id="byo1topping2">
                            <option>None</option>
                            <optgroup label="Proteins">
                                <option>Pepperoni</option>
                                <option>Ham</option>
                                <option>Sausage</option>
                                <option>Chicken</option>
                                <option>Beef</option>
                            </optgroup>

                            <optgroup label="Veggies and Fruits">
                                <option>Tomato</option>
                                <option>Red Bell Pepper</option>
                                <option>Banana Pepper</option>
                                <option>Spinach</option>
                                <option>Black Olives</option>
                                <option>Green Olives</option>
                            </optgroup>
                            <option>BBQ Sauce ($0.50)</option>
                        </select>
                    </li>
                    <li>
                        <select name="byo1topping3" id="byo1topping3">
                            <option>None</option>
                            <optgroup label="Proteins">
                                <option>Pepperoni</option>
                                <option>Ham</option>
                                <option>Sausage</option>
                                <option>Chicken</option>
                                <option>Beef</option>
                            </optgroup>

                            <optgroup label="Veggies and Fruits">
                                <option>Tomato</option>
                                <option>Red Bell Pepper</option>
                                <option>Banana Pepper</option>
                                <option>Spinach</option>
                                <option>Black Olives</option>
                                <option>Green Olives</option>
                            </optgroup>
                            <option>BBQ Sauce ($0.50)</option>
                        </select>
                    </li>
                </ul>
                <label for="byo1add">Additional Toppings (Input as many as you want, additional 50 cents per topping)</label>
                <p></p>
                <input type="text" name="byo1add" id="byo1add" />
                <p></p>
                <label for="byo1amount">Amount?</label>
                <input type="text" name="byo1amount" id="byo1amount" />

                <p>--------------------------------------</p>

                <!-- Second Build your own Pizza -->
                <img src="images/pizza.svg" height="300" width="300" alt="Generic Pizza" />
                <h3><em>Build your own!</em><br><small>(Max of 2 Build your own pizza types)</small></h3>
                <input type="checkbox" name="byo2" id="byo2" value="byo2" />
                <select name="byo2size" id="byo2size">
                    <optgroup label="Size">
                        <option value="small">Small $7.50</option>
                        <option value="medium">Medium $12.50</option>
                        <option value="large">Large $16.50</option>
                    </optgroup>
                </select>
                <select name="byo2crust" id="byo2crust">
                    <optgroup label="Crust Thickness">
                        <option value="thin">Thin Crust</option>
                        <option value="thick">Thick Crust</option>
                    </optgroup>
                </select>
                <ul>
                    <li>
                        <select name="byo2topping1" id="byo2topping1">
                            <option>None</option>
                            <optgroup label="Proteins">
                                <option>Pepperoni</option>
                                <option>Ham</option>
                                <option>Sausage</option>
                                <option>Chicken</option>
                                <option>Beef</option>
                            </optgroup>

                            <optgroup label="Veggies and Fruits">
                                <option>Tomato</option>
                                <option>Red Bell Pepper</option>
                                <option>Banana Pepper</option>
                                <option>Spinach</option>
                                <option>Black Olives</option>
                                <option>Green Olives</option>
                            </optgroup>
                            <option>BBQ Sauce ($0.50)</option>
                        </select>
                    </li>
                    <li>
                        <select name="byo2topping2" id="byo2topping2">
                            <option>None</option>
                            <optgroup label="Proteins">
                                <option>Pepperoni</option>
                                <option>Ham</option>
                                <option>Sausage</option>
                                <option>Chicken</option>
                                <option>Beef</option>
                            </optgroup>

                            <optgroup label="Veggies and Fruits">
                                <option>Tomato</option>
                                <option>Red Bell Pepper</option>
                                <option>Banana Pepper</option>
                                <option>Spinach</option>
                                <option>Black Olives</option>
                                <option>Green Olives</option>
                            </optgroup>
                            <option>BBQ Sauce ($0.50)</option>
                        </select>
                    </li>
                    <li>
                        <select name="byo2topping3" id="byo2topping3">
                            <option>None</option>
                            <optgroup label="Proteins">
                                <option>Pepperoni</option>
                                <option>Ham</option>
                                <option>Sausage</option>
                                <option>Chicken</option>
                                <option>Beef</option>
                            </optgroup>

                            <optgroup label="Veggies and Fruits">
                                <option>Tomato</option>
                                <option>Red Bell Pepper</option>
                                <option>Banana Pepper</option>
                                <option>Spinach</option>
                                <option>Black Olives</option>
                                <option>Green Olives</option>
                            </optgroup>
                            <option>BBQ Sauce ($0.50)</option>
                        </select>
                    </li>
                </ul>
                <label for="byo2add">Additional Toppings (Input as many as you want, additional 50 cents per topping)</label>
                <p></p>
                <input type="text" name="byo2add" id="byo2add" />
                <p></p>
                <label for="byo2amount">Amount?</label>
                <input type="text" name="byo2amount" id="byo2amount" />

                <p>--------------------------------------</p>

                <!-- Payment Section -->
                <h3>Payment and Order Info</h3>
                <fieldset>
                    <div>
                        <label>Name on Card: </label>
                        <input type="text" name="name" id="name" required />
                    </div>
                    <div>
                        <label for="address">Address: </label>
                        <input id="address" type="text" name="address" required />
                    </div>
                    <div>
                        <label for="card">Card Number: </label>
                        <input type="text" name="card" id="card" required />
                    </div>
                    <div>
                        <label for="expire">Card Expiry: </label>
                        <input type="text" name="expire" id="expire" required />
                    </div>
                    <div>
                        <label for="cvc">Card CVC: </label>
                        <input type="text" name="cvc" id="cvc" required />
                    </div>
                    <div>
                        <p>Pickup or Delivery?</p>
                        <label for="pickup">Pickup in Store</label>
                        <input type="radio" name="getOrder" id="pickup" value="pickup" required />
                        <label for="delivery">Deilvery</label>
                        <input type="radio" name="getOrder" id="delivery" value="delivery" />
                    </div>
                    <div>
                        <p>Which Store (For Pickup Only)</p>
                        <label for="barrie">Barrie, 402 Undermeadow Dr</label>
                        <input type="radio" name="store" id="barrie" value="barrie" required/>
                        <label for="penetang">Penetanguishine, 54 Yonc Ave</label>
                        <input type="radio" name="store" id="penetang" value="penetang"/>
                        <label for="none">I am not doing pickup</label>
                        <input type="radio" name="store" id="none" value="none"/>
                    </div>
                </fieldset>
                <button type="reset">Reset</button> <button type="submit">Submit</button>
            </form>
        </main>
        <footer>
            <!-- Copyright Info -->
            <?php
            include("includes/copyright.php");
            ?>
        </footer>
    </body>
</html>