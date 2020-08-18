<?php $this->title = 'Article'; ?>

<div id="reading" class="ml-5 mr-5">
    <h2><?= htmlspecialchars($article->getTitle());?></h2>
    <p><?= ($article->getContent());?></p>
    <p>Créé le : <?= htmlspecialchars($article->getCreation_date());?></p>
</div>
<br>
<div class="actions">
    <?php if($this->session->get('role') === 'admin') { ?>
    <a class="ml-5 mr5" href="../public/index.php?route=editArticle&articleId=<?= $article->getId(); ?>"
        class="badge badge-primary">Modifier</a>
    <a href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>">Supprimer</a>
    <?php } ?>

</div>
<br>
<a class="ml-5 mr5" href="../public/index.php">Retour à l'accueil</a>

<div id="addcomments">
    
    <?php include('form_comment.php'); ?>
</div>

<div id="comments" class="mb-5">
    <h3>Commentaires</h3>
    <table class="table-bordered">
        <tr>
            <td>Pseudo</td>
            <td>Commentaire</td>
            <td>Date</td>
            <td>Actions</td>
        </tr>

<?php
    foreach ($comments as $comment)
    {
        ?>
<tr>
    <td><?= htmlspecialchars($comment->getPseudo());?></td>
    <td><?= ($comment->getContent());?></td>
    <td><?= htmlspecialchars($comment->getCreation_date());?></td>
    <td><?php
        if($comment->isFlag()) {
            ?>
        <a class="badge badge-pill badge-primary">Ce commentaire a déjà été signalé</a>
        <?php
         } else {
            ?>
        <a class="badge badge-pill badge-primary"
            href="../public/index.php?route=flagComment&commentId=<?= $comment->getId(); ?>">Signaler le commentaire</a>
        <?php
        }
        ?>
        <!-- rajouter condition uniquement si admin -->
        <a class="badge badge-pill badge-info"
            href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer le
            commentaire</a>
    </td>
</tr>
<br>
<?php
        
    }
    ?>
</table>
</div>