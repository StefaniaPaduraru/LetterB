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
    <div class="title-subpage">Books </div>
    <div class="container-carti-books">
        <div class="filters">
            <div class="dropdown">
                <button class="sortare">Order by:</button>
                <div class="dropdown-content">
                    <a href="#">What's new</a>
                    <a href="#">Price: High to Low</a>
                    <a href="#">Price: Low to High</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="sortare">Sort by:</button>
                <div class="dropdown-content">
                    <a href="#">Russian author</a>
                    <a href="#">English author</a>
                    <a href="#">French author</a>
                    <a href="#">Irish author</a>
                </div>
            </div>
        </div>
        <div class="grid-container-books">
            <div class="grid-item-books" id="book1">
                <div class="card-books">
                    <div class="books-img">
                        <img src="images/b6.jpg" alt="pic" id="books">
                    </div>
                    </br></br>
                    <h4>Persuasion</h4>
                    <h5>Jane Austen</h5>
                    <hr>
                    <?php
                    if (isset($_SESSION['email'])) {
                        echo '<button id="book1" onclick="redirectToCart(1)">Add to cart</button>';
                    } else {
                        echo '<button id="book1" onclick="showLoginAlert()">Add to cart</button>';
                    }
                    ?>
                    <script>
                    function redirectToCart(id) {
                        window.location.href = 'addtocart.php?id=' +id;
                    }
                    function showLoginAlert() {
                        alert("You Need To Login First!");
                    }
                </script>
                </div>
            </div>
            <div class="grid-item-books" id="book2">
                <div class="card-books">
                    <div class="books-img">
                        <img src="images/b7.jpg" alt="pic" id="books">
                    </div>
                    </br></br>
                    <h4>Little Prince</h4>
                    <h5>Antoine de Saint-Exupery</h5>
                    <hr>
                    <?php
                    if (isset($_SESSION['email'])) {
                        echo '<button id="book1" onclick="redirectToCart(3)">Add to cart</button>';
                    } else {
                        echo '<button id="book1" onclick="showLoginAlert()">Add to cart</button>';
                    }
                    ?>
                    <script>
                    function redirectToCart(id) {
                        window.location.href = 'addtocart.php?id=' +id;
                    }
                    function showLoginAlert() {
                        alert("You Need To Login First!");
                    }
                </script>
                </div>
            </div>
            <div class="grid-item-books" id="book3">
                <div class="card-books">
                    <div class="books-img">
                        <img src="images/b8.jpg" alt="pic" id="books">
                    </div>
                    </br></br>
                    <h4>The Woman in White</h4>
                    <h5>Wilkie Collins</h5>
                    <hr>
                    <?php
                    if (isset($_SESSION['email'])) {
                        echo '<button id="book1" onclick="redirectToCart(4)">Add to cart</button>';
                    } else {
                        echo '<button id="book1" onclick="showLoginAlert()">Add to cart</button>';
                    }
                    ?>
                    <script>
                    function redirectToCart(id) {
                        window.location.href = 'addtocart.php?id=' +id;
                    }
                    function showLoginAlert() {
                        alert("You Need To Login First!");
                    }
                </script>
                </div>
            </div>

            <div class="grid-item-books">
                <div class="card-books">
                    <div class="books-img">
                        <img src="images/b9.jpg" alt="pic" id="books">
                    </div>
                    </br></br>
                    <h4>The Picture of Dorian Gray</h4>
                    <h5>Oscar Wilde</h5>
                    <hr>
                    <button>Add to cart</button>
                </div>
            </div>
            <div class="grid-item-books">
                <div class="card-books">
                    <div class="books-img">
                        <img src="images/b10.jpeg" alt="pic" id="books">
                    </div>
                    </br></br>
                    <h4>David Copperfield</h4>
                    <h5>Charles Dickens</h5>
                    <hr>
                    <button>Add to cart</button>
                </div>
            </div>
            <div class="grid-item-books">
                <div class="card-books">
                    <div class="books-img">
                        <img src="images/b11.jpg" alt="pic" id="books">
                    </div>
                    </br></br>
                    <h4>Poor People</h4>
                    <h5>Fyodor Dostoevsky</h5>
                    <hr>
                    <button>Add to cart</button>
                </div>
            </div>
            <div class="grid-item-books">
                <div class="card-books">
                    <div class="books-img">
                        <a href="onebook.php">
                            <img src="images/pride_and_prejudice.jpg" alt="pic" id="books">
                        </a>
                    </div>
                    </br></br>
                    <h4>Pride and Prejudice</h4>
                    <h5>Jane Austen</h5>
                    <hr>
                    <?php
                    if (isset($_SESSION['email'])) {
                        echo '<button id="book1" onclick="redirectToCart(2)">Add to cart</button>';
                    } else {
                        echo '<button id="book1" onclick="showLoginAlert()">Add to cart</button>';
                    }
                    ?>
                    <script>
                    function redirectToCart(id) {
                        window.location.href = 'addtocart.php?id=' +id;
                    }
                    function showLoginAlert() {
                        alert("You Need To Login First!");
                    }
                </script>
                </div>
            </div>
            <div class="grid-item-books">
                <div class="card-books">
                    <div class="books-img">
                        <img src="images/b1.jpg" alt="pic" id="books">
                    </div>
                    </br></br>
                    <h4>Atomic Habits</h4>
                    <h5>James Clear</h5>
                    <hr>
                    <button>Add to cart</button>
                </div>
            </div>
            <div class="grid-item-books">
                <div class="card-books">
                    <div class="books-img">
                        <img src="images/b2.jpg" alt="pic" id="books">
                    </div>
                    </br></br>
                    <h4>Wuthering Heights</h4>
                    <h5>Emily Brontë</h5>
                    <hr>
                    <button>Add to cart</button>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
include "footer.php";
?>