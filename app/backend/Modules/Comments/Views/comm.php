<p class="textCenter">Il y a actuellement <?= $nombreComm ?> commentaire(s).<br>
    Il y a actuellement <?= $nombreReport ?> commentaire(s) signalé(s), en voici la liste :</p>

<div id="tableComm">

    <?php
    foreach ($comments as $comment)
    {
        echo '<div id="listComm"><div id="list1"><p><div id="legende">Auteur: </div>',$comment['auteur'],'</p><p><div id="legende">Episode: </div>',$comment['news'],'</p><p><div id="list3"><div id="legende">Date: </div>',$comment['date']->format('d/m/Y à H\hi'),'</div></p><p><div id="list3"><div id="legende">Actions: </div><a href="reportOff-', $comment['id'],'.html"><img src="/blog/Web/images/ok.png" alt="Enlevé le signalement"/></a><a href="comment-delete-', $comment['id'], '.html"><img src="/blog/Web/images/delete.png" alt="Supprimer" /></a></div></p></div><br><div id="list4"><div id="legende" class="textCenter">Commentaire: </div><div id="list2"><p>', $comment['contenu'],'</p></div></div></div>';
    }
    ?>
</div>


