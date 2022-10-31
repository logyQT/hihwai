<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />

        <link rel="stylesheet" href="style.css" />
        <script src="script.js" defer></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="author" content="Igor Maliszkiewicz" />
    </head>

    <body>
        <div id="page">
            <header>Legendarni piłkarze</header>

            <nav>
                <a href="index.html">Strona główna</a><br /><br />
                <ul>
                    <li>Argentyna</li>
                    <ul>
                        <li onclick="replaceArticle('DiegoMaradona')">
                            Diego Maradona
                        </li>
                        <li onclick="replaceArticle('LionelMessi')">
                            Lionel Messi
                        </li>
                    </ul>
                    <br />
                    <li>Brazylia</li>
                    <ul>
                        <li onclick="replaceArticle('Pele')">Pele</li>
                        <li onclick="replaceArticle('RonaldinhoGaucho')">
                            Ronaldinho Gaúcho
                        </li>
                        <li onclick="replaceArticle('RonaldoNazario')">
                            Ronaldo Nazário
                        </li>
                    </ul>
                    <br />
                    <li>Francja</li>
                    <ul>
                        <li onclick="replaceArticle('ZinedineZidane')">
                            Zinedine Zidane
                        </li>
                    </ul>
                    <br />
                    <li>Holandia</li>
                    <ul>
                        <li onclick="replaceArticle('JohanCruyff')">
                            Johan Cruyff
                        </li>
                    </ul>
                    <br />
                    <br />
                    <li>Portugalia</li>
                    <ul>
                        <li onclick="replaceArticle('CristianoRonaldo')">
                            Cristiano Ronaldo
                        </li>
                    </ul>
                </ul>
                <br /><br />
                <a href="vote.php">Głosowanie</a>
            </nav>
            <article id="article">index</article>
            <footer>Igor Maliszkiewicz</footer>
        </div>
    </body>
</html>
