<p>Par <em><?= $news['auteur'] ?></em>, le <?= $news['dateAjout']->format('d/m/Y à H\hi') ?></p>
<h2><?= $news['titre'] ?></h2>
<p class="textCenter"><?= nl2br($news['contenu']) ?></p>

<?php if ($news['dateAjout'] != $news['dateModif']) { ?>
    <p class="textRight" "><small><em>Modifiée le <?= $news['dateModif']->format('d/m/Y à H\hi') ?></em></small></p>
<?php } ?>

<p><a href="commenter-<?= $news['id'] ?>.html" class="green">Ajouter un commentaire</a></p>

<?php
if (empty($comments))
{
    ?>
    <p>Aucun commentaire n'a encore été posté. Soyez le premier à en laisser un !</p><br>
    <?php
}

foreach ($comments as $comment)
{
    ?>
    <fieldset>
        <legend>
            Posté par <strong><?= htmlspecialchars($comment['auteur']) ?></strong> le <?= $comment['date']->format('d/m/Y à H\hi') ?>   <a href="reportOn-<?= $comment['id'] ?>.html"><img src="/blog/Web/images/warning.png" alt="Signaler"></a>
        </legend>
        <p><?= nl2br(htmlspecialchars($comment['contenu'])) ?></p>
    </fieldset>
    <?php
}
?>
<?php
if (!empty($comments)) {
    ?>
    <p><a href="commenter-<?= $news['id'] ?>.html" class="green">Ajouter un commentaire</a></p>
    <?php
}
?>