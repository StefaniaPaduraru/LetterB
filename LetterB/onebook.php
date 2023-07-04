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
        <div class="my-book">
            <div class="up">
                <div class="img-book">
                    <div class="main-img-popular">
                        <img src="images/pride_and_prejudice.jpg" alt="pic" id="books">
                    </div>
                </div>
                <div class="info-book">
                    <h2>Pride and Prejudice</h2>
                    <hr class="solid">
                    <p>Paperback | English</p>
                    <p>By (author) <a
                            href="http://127.0.0.1:5500/authors.html#:~:text=late%2DVictorian%20London.-,Jane%20Austen,-Jane%20Austen%20(16">Jane Austen</a></p>
                    <p>The date of publishing: 1992</p>
                    <p>Publishing house: Wordsworth Editions Ltd</p>
                    <p>Page No: 329</p>
                    </br>
                    <h4>Price: 9.00€</h4>
                    <button class="add-to-cart">Add to cart</button>

                </div>
            </div>
            <div class="down">
                <div class="description">
                    <hr class="solid">
                    </br>
                    <h6>
                        Pride and Prejudice is an 1813 novel of manners by Jane Austen. The novel follows the character
                        development of Elizabeth Bennet, the dynamic protagonist of the book who learns about the
                        repercussions of hasty judgments and comes to appreciate the difference between superficial
                        goodness and actual goodness.
                    </h6>
                    <h6>
                        Pride and Prejudice, which opens with one of the most famous sentences in English Literature, is
                        an ironic novel of manners. In it the garrulous and empty-headed Mrs Bennet has only one aim -
                        that
                        of finding a good match for each of her five daughters. In this she is mocked by her cynical and
                        indolent husband.
                    </h6>
                    <h6>
                        With its wit, its social precision and, above all, its irresistible heroine, Pride and Prejudice
                        has proved one of the most enduringly popular novels in the English language.
                    </h6>
                    </br>
                    <h6>The pride of high-ranking Mr Darcy and the prejudice of middle-class Elizabeth Bennet conduct an
                        absorbing dance through the rigid social hierarchies of early-nineteenth-century England, with
                        the passion of the two unlikely lovers growing as their union seems ever more improbable.
                        One of the most cherished love stories in English literature, Jane Austen’s 1813 masterpiece has
                        a lasting effect on everyone who reads it.
                    </h6>
                    </br>
                    </br>
                    <h6>
                        The wit of Jane Austen has for partner the perfection of her taste. -- Virginia Woolf
                    </h6>

                </div>
            </div>
        </div>
    </div>
</body>
<?php
include "footer.php";
?>