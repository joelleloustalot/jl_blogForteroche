<?php $this->title = 'Article'; ?>
<h1>Mon blog</h1>
<p>En construction</p>
<div>
    <h2><?= htmlspecialchars($article->getTitle());?></h2>
    <p><?= ($article->getContent());?></p>
    <p>Créé le : <?= htmlspecialchars($article->getCreation_date());?></p>
</div>
<br>
<div class="actions">
<?php if($this->session->get('role') === 'admin') { ?>
    <a href="../public/index.php?route=editArticle&articleId=<?= $article->getId(); ?>">Modifier</a>
    <a href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>">Supprimer</a>    
    <?php } ?>
    
</div>
<br>
<a href="../public/index.php">Retour à l'accueil</a>
<div id="comments" class="text-left" style="margin-left: 50px">
    <h3>Ajouter un commentaire</h3>
    <?php include('form_comment.php'); ?>

    <h3>Commentaires</h3>
    <?php
    foreach ($comments as $comment)
    {
        ?>
        <h4><?= htmlspecialchars($comment->getPseudo());?></h4>
        <p><?= ($comment->getContent());?></p>
        <p>Posté le <?= htmlspecialchars($comment->getCreation_date());?></p>
        <?php
        if($comment->isFlag()) {
            ?>
            <p>Ce commentaire a déjà été signalé</p>
            <?php
         } else {
            ?>
            <p><a href="../public/index.php?route=flagComment&commentId=<?= $comment->getId(); ?>">Signaler le commentaire</a></p>
            <?php
        }
        ?>
        <!-- rajouter condition uniquement si admin -->
            <p><a href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer le commentaire</a></p>

        <br>
        <?php
    }
    ?>
</div>