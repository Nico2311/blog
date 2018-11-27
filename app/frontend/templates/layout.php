<!DOCTYPE html>
<html>
    <head>
        <title><?= isset($title) ? $title : 'Mon super site' ?></title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="/blog/Web/css/Envision.css" type="text/css" />
    </head>
    <body>
        <div id="wrap">
            <header>
                <h1><a href="/blog/Web">Mon super site</a></h1>
                <p>Comment ça, il n'y a presque rien ?</p>
            </header>
            <nav>
                <ul>
                    <li><a href="/blog/Web">Accueil</a></li>

                    <?php if ($user->isAuthenticated()) { ?>
                        <li><a href="/blog/Web/admin/">Admin</a></li>
                        <li><a href="/blog/Web/admin/news-insert.html">Ajouter une news</a></li>
                        <li><a href="<?php $user->logout()?>">Déconnection</a> </li>
                    <?php } else { ?>
                        <li><a href="/blog/Web/admin/">S'identifier</a></li>
                    <?php } ?>
                </ul>
            </nav>

            <div id="content-wrap">
                <section id="main">
                    <?php if ($user->hasFlash()) echo '<p style="text-align: center;">', $user->getFlash(), '</p>'; ?>

                    <?= $content ?>
                </section>
            </div>
            <footer>

            </footer>
        </div>
    </body>
</html>