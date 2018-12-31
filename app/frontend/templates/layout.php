<!DOCTYPE html>
<html>
    <head>
        <title><?= isset($title) ? $title : 'Billet simple pour l\'Alaska' ?></title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no">
        <link rel="stylesheet" href="/blog/Web/css/Envision.css" type="text/css" />
        <link rel="stylesheet" type="text/css" media="all and (max-width: 778px)" href="/blog/Web/css/536-778.css"/>
        <link rel="stylesheet" type="text/css" media="all and (max-width: 535px)" href="/blog/Web/css/535.css"/>
        <script type="text/javascript" src="/blog/Web/js/editeur.js"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
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
                        <li><a href="/blog/Web/admin/news-insert.html">Ajouter un chapitre</a></li>
                        <li><a href="/blog/Web/admin/news">Chapitres</a></li>
                        <li><a href="/blog/Web/admin/comm">Commentaires</a></li>
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