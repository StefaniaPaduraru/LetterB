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
    <div class="title-subpage">Authors</div>
    <div class="main-side-pages">
        <div class="grid-container-authors">
            <div class="grid-item-authors">
                <div class="card-authors">
                    <div class="main-img-container">
                        <img src="images/a3.jpg" alt="pic" id="main_img">
                    </div>
                    <div class="info-authors">
                        <h2>Oscar Wilde</h2>
                        </br>
                        <p>Oscar Fingal O'Fflahertie Wills Wilde (16 October 1854 – 30 November 1900) was an Irish poet
                            and playwright.
                            After writing in different forms throughout the 1880s, he became one of the most popular
                            playwrights in London in the early 1890s.
                            He is best remembered for his epigrams and plays, his novel The Picture of Dorian Gray, and
                            the circumstances of his criminal conviction for gross indecency for consensual homosexual
                            acts in "one of the first celebrity trials", imprisonment, and early death from meningitis
                            at age 46.
                            As a spokesman for aestheticism, he tried his hand at various literary activities: he
                            published a book of poems, lectured in the United States and Canada on the new "English
                            Renaissance in Art" and interior decoration, and then returned to London where he worked
                            prolifically as a journalist.
                            Known for his biting wit, flamboyant dress and glittering conversational skill, Wilde became
                            one of the best-known personalities of his day.
                            At the turn of the 1890s, he refined his ideas about the supremacy of art in a series of
                            dialogues and essays, and incorporated themes of decadence, duplicity, and beauty into what
                            would be his only novel, The Picture of Dorian Gray (1890).
                            The opportunity to construct aesthetic details precisely, and combine them with larger
                            social themes, drew Wilde to write drama. He wrote Salome (1891) in French while in Paris,
                            but it was refused a licence for England due to an absolute prohibition on the portrayal of
                            Biblical subjects on the English stage.
                            Undiscouraged, Wilde produced four society comedies in the early 1890s, which made him one
                            of the most successful playwrights of late-Victorian London.
                        </p>
                    </div>
                </div>
            </div>
            <div class="grid-item-authors">
                <div class="card-authors">
                    <div class="main-img-container">
                        <img src="images/a2.jpg" alt="pic" id="main_img">
                    </div>
                    <div class="info-authors">
                        <h2 id="JaneAusten">Jane Austen</h2>
                        </br>
                        <p>Jane Austen (16 December 1775 – 18 July 1817) was an English novelist known primarily for her
                            six major novels, which interpret, critique, and comment upon the British landed gentry at
                            the end of the 18th century.
                            Austen's plots often explore the dependence of women on marriage in the pursuit of
                            favourable social standing and economic security.
                            Her works critique the novels of sensibility of the second half of the 18th century and are
                            part of the transition to 19th-century literary realism.
                            Her use of social commentary, realism and biting irony have earned her acclaim among critics
                            and scholars.
                            The anonymously published Sense and Sensibility (1811), Pride and Prejudice (1813),
                            Mansfield Park (1814), and Emma (1815), brought modest success but little fame in her
                            lifetime.
                            She wrote two other novels—Northanger Abbey and Persuasion, both published posthumously in
                            1818—and began another, eventually titled Sanditon, but died before its completion.
                            She also left behind three volumes of juvenile writings in manuscript, the short epistolary
                            novel Lady Susan, and the unfinished novel The Watsons.
                        </p>
                    </div>
                </div>
            </div>
            <div class="grid-item-authors">
                <div class="card-authors">
                    <div class="main-img-container">
                        <img src="images/a1.jpg" alt="pic" id="main_img">
                    </div>
                    <div class="info-authors">
                        <h2>Fyodor Dostoevsky</h2>
                        </br>
                        <p>Fyodor Mikhailovich Dostoevsky (11 November 1821 – 9 February 1881), sometimes transliterated
                            as Dostoyevsky, was a Russian novelist, short story writer, essayist and journalist.
                            Dostoevsky's literary works explore the human condition in the troubled political, social,
                            and spiritual atmospheres of 19th-century Russia, and engage with a variety of philosophical
                            and religious themes.
                            His most acclaimed novels include Crime and Punishment (1866), The Idiot (1869), Demons
                            (1872), and The Brothers Karamazov (1880).
                            His 1864 novella, Notes from Underground, is considered to be one of the first works of
                            existentialist literature.
                            Numerous literary critics regard him as one of the greatest novelists in all of world
                            literature, as many of his works are considered highly influential masterpieces.</p>

                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
<?php
include "footer.php";
?>