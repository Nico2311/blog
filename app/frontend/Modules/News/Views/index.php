<?php
foreach ($listeNews as $news)
{
    ?>
    <a href="news-<?= $news['id'] ?>.html"><h2><?= $news['titre'] ?></h2>
    <p><?= nl2br($news['contenu']) ?></p></a>
    <?php
}