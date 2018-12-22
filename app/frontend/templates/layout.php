<!DOCTYPE html>
<html>
    <head>
        <title><?= isset($title) ? $title : 'Billet simple pour l\'Alaska' ?></title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no">
        <link rel="stylesheet" href="/blog/Web/css/Envision.css" type="text/css" />
        <link rel="stylesheet" href="/blog/Web/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" type="text/css" media="all and (min-width:536px ) and (max-width: 822px)" href="536-822.css"/>
        <link rel="stylesheet" type="text/css" media="all  and (max-width: 536px)" href="536.css"/>
        <script type="text/javascript" src="/blog/Web/js/editeur.js"></script>
    </head>
    <body>
        <div id="wrap">
            <header>
                <h1><a href="/blog/Web">Billet simple pour l'Alaska</a></h1>
                <p>Ecrit par Jean Forteroche</p>
            </header>
            <nav>
                <ul>
                    <li><a href="/blog/Web">Accueil</a></li>

                    <?php if ($user->isAuthenticated()) { ?>
                        <li><a href="/blog/Web/admin/news">Chapitre</a></li>
                        <li><a href="/blog/Web/admin/comm">Commentaire</a></li>
                        <li><a href="/blog/Web/admin/news-insert.html">Ajouter un chapitre</a></li>
                        <li><a href="/blog/Web/admin/logout">Déconnection</a> </li>
                    <?php } else { ?>
                        <li><a href="/blog/Web/admin/news">S'identifier</a></li>
                    <?php } ?>
                </ul>
            </nav>

            <div id="content-wrap">
                <section id="main">
                    <?php if ($user->hasFlash()) echo '<p class="textCenter">', $user->getFlash(), '</p>'; ?>

                    <?= $content ?>
                </section>
            </div>
            <footer>

            </footer>
        </div>
    </body>
</html>