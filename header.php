
<header>
    <ul class="top">
        <li style="color: gold">Phone and beyond </li>
        <?php if($_GET['p']=="main"){ ?>
        <li id="show"><i class="fa fa-shopping-cart" style="font-size: 19px" ></i></li>
        <div id="shopping-cart" class="u-full-width">
            <form action="total.php" method="post">
            <table>
                <thead>
                <tr >
                    <th>Image</th>
                    <th>Name</th>
                    <th id="pedi">No.</th>
                    <th>Price</th>
                    <th></th>
                </tr>
                </thead>
                <tbody id="cart-content"></tbody>
                <tr>
                    <th><div > total price: $<span id="T-price">0.00</span></div></th>
                </tr>
                <tr>
                    <th><a href="#" id="clear-cart" class="button-cl">Clear Cart</a></th>
                    <th><a href="total.php"><button id="able" class="button-cl" type="submit">Go to pay</button></a></th>
                </tr>
            </table>
            </form>
        </div>
        <?php } ?>

    </ul>

    <?php if($_GET['p']=="main"){?>
    <nav>
        <ul>
            <li><a href="#Our">About</a></li>
            <li><a href="#us">Contact</a></li>
            <li><a href="#top">Home</a></li>
        </ul>
    </nav>
    <?php } else{ ?>
    <nav>
        <ul>
            <li><a href="index.php">Back to store</a></li>
        </ul>
    </nav>
    <?php }?>

</header>