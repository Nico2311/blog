<p style=".text-align: center">Il y a actuellement <?= $nombreComm ?> commentaire.<br>
    Il y a actuellement <?= $nombreSigne ?> commentaire signalé, En voici la liste :</p>

<table>
    <tr><th><img src="/blog/Web/images/warning.png" /></th><th>Auteur</th><th>Episode</th><th>Date</th><th>Commentaire</th><th>Action</th></tr>
    <?php
    foreach ($comments as $comment)
    {
        echo '<tr><td>', $comment['signe'], '</td><td>', $comment['auteur'],'</td><td>', $comment['news'], '</td><td>le', $comment['date']->format('d/m/Y à H\hi'),'</td><td>', $comment['contenu'],'</td><td><a href="comment-delete-', $comment['id'], '.html"><img src="/blog/Web/images/delete.png" alt="Supprimer" /></a></td></tr>', "\n";
    }
    ?>
</table>