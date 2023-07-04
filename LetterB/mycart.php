<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LetterB</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php
    include "config.php";
    session_start();
    ?>
   <nav class="navbar">
        <div class="navbar_container">
            <a href="index.php" id="navbar_logo">
                <img src="./images/letter-b.png" alt="logo" id="logo">
            </a>
            <p style = "margin-top: 30px; font-size: 20px; color: white;"><?php 
                if (isset($_SESSION['email'])) {
                    echo "Hello, ".$_SESSION['email'];
                }?></p>
            <ul class="navbar_menu">
                <li class="navbar_item">
                    <a href="mycart.php" class="navbar_links">
                        <i class="fa fa-shopping-cart"></i>
                    </a>
                </li>
                <li class="navbar_item"><?php
                if(isset($_SESSION['email'])){
                    echo '<a href="logout.php" class="navbar_links">
                    <i class="fa fa-sign-out"></i>
                    </a>';
                }
                else{
                    echo '<a href="signin.html" class="navbar_links">
                    <i class="fa fa-sign-in"></i>
                </a>';
                }
                ?>
                </li>
            </ul>
        </div>
    </nav>
    <div class="menu">
        <ul class="selection_menu">
            <li class="selection_item">
                <a href="authors.php" class="selection_links">Authors</a>
            </li>
            <li class="selection_item">
                <a href="books.php" class="selection_links">Books</a>
            </li>
            <li class="selection_item">
                <a href="#footer" class="selection_links">Contact</a>
            </li>

        </ul>
    </div>
    <div class="main-side-pages">
        <div class="my-cart">
            <div class="products">
            <?php
            $sql = "SELECT Title, Author, Price, Language FROM books WHERE InCart=1";
            $result = mysqli_query($con, $sql);
            if (!$result) {
                die('Eroare la efectuarea interogarii: ' . mysqli_error($con));
            }
            while ($row = mysqli_fetch_assoc($result)) {
                $title = $row['Title'];
                $author = $row['Author'];
                $price = $row['Price'];
                $language = $row['Language'];
                ?>
                <div class="order-card">
                    <div class="books-img-cart">
                        <img src="images/b6.jpg" alt="pic" id="books">
                    </div>
                    <div class="text">
                        <h4><?php echo $title; ?></h4>
                        <h6><?php echo $author; ?></h6>
                        </br>
                        <p>Paperback | <?php echo $language; ?></p>
                        <p>The date of publishing: 1992</p>
                        <p>Publishing house: Wordsworth Editions Ltd</p>
                        <p>Page No: 329</p>
                        
                    </div>
                    <div class="price">
                        <h2><?php echo $price; ?>.00€</h2>
                        <a>
                            <i class="fa fa-trash" onclick="redirectToCart()" style="font-size:28px;"></i>
                    <script>
                    function redirectToCart() {
                        window.location.href = 'removefromcart.php';
                    }
                </script>
                        </a>
                    </div>
                </div>
                <?php
                }
                ?>
                <!-- <div class="order-card" > -->
                    <!-- <div class="books-img-cart">
                        <img src="images/b7.jpg" alt="pic" id="books">
                    </div>
                    <div class="text">
                        <h4>The Little Prince</h4>
                        <h6>Antoine de Saint-Exupery</h6>
                        </br>
                        <p>Paperback | English</p>
                        <p>The date of publishing: 2012</p>
                        <p>Publishing house: Wordsworth Editions Ltd</p>
                        <p>Page No: 200</p>
                    </div>
                    <div class="price">
                        <h2>8.00€</h2>
                        <a href="mycart.php">
                            <i class="fa fa-trash" style="font-size:28px;"></i>
                        </a>

                    </div> -->
                <!-- </div> -->
            </div>
            <div class="order-summary">
                <h2>Order Summary</h2>
                <hr class="solid">
                </br>

                <p>Delivery cost: FREE</p>
                </br>
                <p>Sub-total (incl. taxes)</p>
                </br>
                <p>Total: 17.00€</p>
                <hr class="rounded">
                <button class="buy">Checkout</button>
            </div>

        </div>
    </div>

</body>
<?php
include "footer.php";
?>