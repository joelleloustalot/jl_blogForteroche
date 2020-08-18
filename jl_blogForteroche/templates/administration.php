<?php $this->title = 'Administration'; ?>


<?= $this->session->show('add_article'); ?>
<?= $this->session->show('edit_article'); ?>
<?= $this->session->show('delete_article'); ?>
<?= $this->session->show('unflag_comment'); ?>
<?= $this->session->show('delete_comment'); ?>
<?= $this->session->show('delete_user'); ?>
<div id="publication" style="margin-left: 50px">
<h2>Articles</h2>
<a class="btn btn-primary"href="../public/index.php?route=addArticle">Nouvel article</a>
<table class="table-bordered">
    <tr>
        <td>Id</td>
        <td>Titre</td>
        <td>Contenu</td>
        <td style="min-width:80px">Date création</td>
        <td>Actions</td>
    </tr>
    <?php
    foreach ($articles as $article)
    {
        ?>
        <tr>
            <td><?= htmlspecialchars($article->getId());?></td>
            <td><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></td>
            <td><?= substr(($article->getContent()), 0, 300);?></td>
            <td class="small"><?= htmlspecialchars($article->getCreation_date());?></td>
            <td>
                <a class="badge badge-pill badge-primary"href="../public/index.php?route=editArticle&articleId=<?= $article->getId(); ?>">Modifier</a>
                <a class="badge badge-pill badge-info"href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>">Supprimer</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>

<h4>Commentaires signalés</h4>
<table class="table-bordered">
    <tr>
        <td>Id</td>
        <td>Pseudo</td>
        <td>Article Id</td>
        <td>Message</td>
        <td>Date</td>
        <td>Actions</td>
    </tr>
    <?php
    foreach ($comments as $comment)
    {
        ?>
        <tr>
            <td><?= htmlspecialchars($comment->getId());?></td>
            <td><?= htmlspecialchars($comment->getPseudo());?></td>
            <td><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($comment->getArticle_Id());?>">voir article</a></td>
            <td><?= substr(htmlspecialchars($comment->getContent()), 0, 150);?></td>
            <td class="small"><?= htmlspecialchars($comment->getCreation_date());?></td>
            <td>
                <a class="badge badge-pill badge-primary"href="../public/index.php?route=unflagComment&commentId=<?= $comment->getId(); ?>">Désignaler le commentaire</a>
                <a class="badge badge-pill badge-info"href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer le commentaire</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>

<h4>Utilisateurs</h4>
<table class="table-bordered">
    <tr>
        <td>Id</td>
        <td>Pseudo</td>
        <td>Date création</td>
        <td>Rôle</td>
        <td>Actions</td>
    </tr>
    <?php
    foreach ($users as $user)
    {
        ?>
        <tr>
            <td><?=htmlspecialchars($user->getId());?></td>
            <td><?= htmlspecialchars($user->getPseudo());?></td>
            <td><?= htmlspecialchars($user->getCreation_date());?></td>
            <td><?= htmlspecialchars($user->getRole());?></td>
            <td>

            <?php
                if($user->getRole() != 'admin') {
                ?>
                <a class="badge badge-pill badge-info"href="../public/index.php?route=deleteUser&userId=<?= $user->getId(); ?>">Supprimer</a>
                <?php }
                else {
                    ?>
                <a class="badge badge-pill badge-light">Suppression impossible</a>
                <?php
                }
                ?></td>
        </tr>
        <?php
    }
    ?>
</table>
<br>
<a class="text-white" href="../public/index.php">Retour à l'accueil</a>