<p class="textCenter">Il y a actuellement <?= $nombreNews ?> chapitre(s). En voici la liste :</p>

<div id="tableChap"><table>
    <tr><th>Auteur</th><th>Titre</th><th>Date d'ajout</th><th id="dateModif">Dernière modification</th><th>Actions</th></tr>
    <?php
    foreach ($listeNews as $news)
    {
        echo '<tr><td>', $news['auteur'], '</td><td>', $news['titre'], '</td><td>le ', $news['dateAjout']->format('d/m/Y à H\hi'), '</td><td id="dateModif">', ($news['dateAjout'] == $news['dateModif'] ? '-' : 'le '.$news['dateModif']->format('d/m/Y à H\hi')), '</td><td><a href="news-update-', $news['id'], '.html"><img src="/blog/Web/images/update.png" alt="Modifier" /></a> <a href="news-delete-', $news['id'], '.html"><img src="/blog/Web/images/delete.png" alt="Supprimer" /></a></td></tr>', "\n";
    }
    ?>
</table></div>