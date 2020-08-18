<?php $this->title = "Connexion"; ?>

<?= $this->session->show('error_login'); ?>


<section id="contact-form">
    <div class="container bg-dark mt-5">
        <div class="row">
            <div class="px-sm-5 px-lg-0 col-lg-10 offset-lg-1 mb-5 mt-5">
                <h5 class="text-center mt-5 mb-5 text-white">Connexion</h5>
                <form method="post" action="../public/index.php?route=login">
                    <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <label for="pseudo" class="text-white">Pseudo</label><br>
                            <input type="text" class="form-control" id="pseudo" name="pseudo"
                                placeholder="Pseudo" required
                                value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>"><br>
                            <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>
                        </div>

                        <div class="form-group col-12 col-md-6">
                            <label for="password" class="text-white">Mot de passe</label><br>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Mot de passe" required>><br>
                            <?= isset($errors['password']) ? $errors['password'] : ''; ?>
                        </div>
                        <div class="col-lg-12 text-center">
                        <input type="submit" class="btn btn-primary mt-4 px-4"value="Connexion" id="submit" name="submit">   
                </form>
            </div>
        </div>
    </div>
    <a class="col-lg-12 text-center" href="../public/index.php">Retour à l'accueil</a>

</section>

