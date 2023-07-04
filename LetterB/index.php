<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LetterB</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="index.js"></script>
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
    <div class="main">
        <div class="main-container">
            <div class="mySlides fade">
                <div class="text">
                    <h1>Pride and Prejudice</h1>
                    <h5>Pride and Prejudice is an 1813 novel of manners by Jane Austen. The novel follows the
                        character development of Elizabeth Bennet, the dynamic protagonist of the book who learns
                        about the repercussions of hasty judgments and comes to appreciate the difference between
                        superficial goodness and actual goodness.</h5>
                    <h5>Pride and Prejudice, which opens with one of the most famous sentences in English
                        Literature, is an ironic novel of manners. In it the garrulous and empty-headed Mrs Bennet
                        has only one aim - that of finding a good match for each of her five daughters. In this she
                        is mocked by her cynical and indolent husband.</h5>
                    <h5>With its wit, its social precision and, above all, its irresistible heroine, Pride and
                        Prejudice has proved one of the most enduringly popular novels in the English language.</h5>

                    <a href="onebook.php"><button class="readmore">Read more..</button></a>
                </div>
                <div class="main-img-container">
                    <img src="images/pride_and_prejudice.jpg" alt="pic" id="main_img">
                </div>
            </div>
            <div class="mySlides fade">
                <div class="text">
                    <h1>Atomic habits</h1>
                    <h5>People think that when you want to change your life, you need to think big. But
                        world-renowned habits expert James Clear has discovered another way. He knows that real
                        change comes from the compound effect of hundreds of small decisions: doing two push-ups a
                        day, waking up five minutes early, or holding a single short phone call.</h5>
                    <h5>He calls them atomic habits.</h5>

                    <h5>In this ground-breaking book, Clears reveals exactly how these minuscule changes can grow
                        into such life-altering outcomes. He uncovers a handful of simple life hacks (the forgotten
                        art of Habit Stacking, the unexpected power of the Two Minute Rule, or the trick to entering
                        the Goldilocks Zone), and delves into cutting-edge psychology and neuroscience to explain
                        why they matter. Along the way, he tells inspiring stories of Olympic gold medalists,
                        leading CEOs, and distinguished scientists who have used the science of tiny habits to stay
                        productive, motivated, and happy.</h5>

                    <h5>These small changes will have a revolutionary effect on your career, your relationships, and
                        your life.</h5>
                    <button class="readmore">Read more..</button>
                </div>
                <div class="main-img-container">
                    <img src="images/b1.jpg" alt="pic" id="main_img">
                </div>
            </div>
            <div class="mySlides fade">
                <div class="text">
                    <h1>Atomic habits</h1>
                    <h5>People think that when you want to change your life, you need to think big. But
                        world-renowned habits expert James Clear has discovered another way. He knows that real
                        change comes from the compound effect of hundreds of small decisions: doing two push-ups a
                        day, waking up five minutes early, or holding a single short phone call.</h5>
                    <h5>He calls them atomic habits.</h5>

                    <h5>In this ground-breaking book, Clears reveals exactly how these minuscule changes can grow
                        into such life-altering outcomes. He uncovers a handful of simple life hacks (the forgotten
                        art of Habit Stacking, the unexpected power of the Two Minute Rule, or the trick to entering
                        the Goldilocks Zone), and delves into cutting-edge psychology and neuroscience to explain
                        why they matter. Along the way, he tells inspiring stories of Olympic gold medalists,
                        leading CEOs, and distinguished scientists who have used the science of tiny habits to stay
                        productive, motivated, and happy.</h5>

                    <h5>These small changes will have a revolutionary effect on your career, your relationships, and
                        your life.</h5>
                    <button class="readmore">Read more..</button>
                </div>
                <div class="main-img-container">
                    <img src="images/b1.jpg" alt="pic" id="main_img">
                </div>
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
    </div>
    <div class="list">
          
    </div>
    <div class="container_carti">
        <div class="title-subpage-main">Popular today</div>
        <div class="grid-container" id="main">
            <div class="grid-item">
                <div class="card">
                    <div class="main-img-popular">
                        <a href="onebook.php">
                            <img src="images/b2.jpg" alt="pic" id="books">
                        </a>
                    </div>
                    <h4>Wuthering Heights</h4>
                    <h6>Emily Brontë</h6>
                    <p>7.00€</p>
                    </br>

                    <button type="button">Add to cart</button>
                    
                </div>
            </div>
            <div class="grid-item">
                <div class="card">
                    <div class="main-img-popular">
                        <img src="images/b3.jpg" alt="pic" id="books">
                    </div>
                    <h4>Emma</h4>
                    <h6>Jane Austen</h6>
                    <p>9.00€</p>
                    </br>
                    <button type="button">Add to cart</button>
                </div>
            </div>
            <div class="grid-item">
                <div class="card">
                    <div class="main-img-popular">
                        <img src="images/b4.jpg" alt="pic" id="books">
                    </div>
                    <h4>Animal Farm</h4>
                    <h6>George Orwell</h6>
                    <p>8.00€</p>
                    </br>
                    <button type="button">Add to cart</button>
                </div>
            </div>
            <div class="grid-item">
                <div class="card">
                    <div class="main-img-popular">
                        <img src="images/b5.jpg" alt="pic" id="books">
                    </div>
                    <h4>The Great Gatsby</h4>
                    <h6>F. Scott Fitzgerald</h6>
                    <p>7.00€</p>
                    </br>
                    <button type="button">Add to cart</button>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <p><i>“The more that you read, the more things you will know. The more that you learn, the more places you’ll
                go.”</i>
        </p>
    </div>
    <div class="recommandations">
        <div class="title-subpage-main">Recommandations</div>
        <div class="links">
            <div class="link1">
                <div class="link-img">
                    <img src="images/link1.jpg" alt="pic" id="books">
                </div>
                <div class="link-txt">
                    <p style="margin-top:40px; font-size: 28px;"><a
                            href="https://alittleblogofbooks.com/2023/03/18/books-i-read-in-february-2023/">Books I Read
                            in February 2023</a></p>
                    <p style="margin:10px; font-size:20px;">A Little Blog of Books</p>
                </div>
            </div>

            <div class="link1">
                <div class="link-img">
                    <img src="images/link2.jpg" alt="pic" id="books">
                </div>
                <div class="link-txt">
                    <p style="margin-top:40px; font-size: 28px;"><a
                            href="https://thelitedit.com/category/beautiful-bookstores/">Beautiful Bookstores</a></p>
                    <p style="margin:10px; font-size:20px;">The Literary Edit</p>
                </div>
            </div>

            <div class="link1">
                <div class="link-img">
                    <img src="images/link3.jpg" alt="pic" id="books">
                </div>
                <div class="link-txt">
                    <p style="margin-top:40px; font-size: 28px;"><a
                            href="https://alittleblogofbooks.com/2023/03/08/the-womens-prize-for-fiction-longlist-2023/">The Women’s Prize for Fiction Longlist 2023</a></p>
                    <p style="margin:10px; font-size:20px;">A Little Blog of Books</p>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
include "footer.php";
?>

	