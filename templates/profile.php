<?php $this->title = 'Mon profil'; ?>

<?= $this->session->show('update_password'); ?>

<div class="ml-5 mr-5 ">
    <h2><?= $this->session->get('pseudo'); ?></h2>
    <p><?= $this->session->get('id'); ?></p>
    <a class="text-white" href="../public/index.php?route=updatePassword">Modifier mon mot de passe</a><br>
    <a class="text-white"href="../public/index.php?route=deleteAccount">Supprimer mon compte</a>

</div>
<br>
<a class="ml-5 mr-5 text-white" href="../public/index.php">Retour à l'accueil</a>