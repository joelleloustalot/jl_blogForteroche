<?php
$route = isset($post) && $post->get('id') ? 'editComment' : 'addComment';
$submit = $route === 'addComment' ? 'Ajouter' : 'Mettre à jour';
?>


<section id="contact-form">
    <div class="container bg-dark mt-5">
        <div class="row">
            <div class="px-sm-5 px-lg-0 col-lg-10 offset-lg-1 mb-5 mt-5">
                <h3 class="text-center mt-5 mb-5 text-white">Ajouter un commentaire</h3>
                <form id="form-comment" action="../public/index.php?route=<?= $route; ?>&articleId=<?= htmlspecialchars($article->getId()); ?>">
                    <div class="form-row">
                        <div class="form-group col-12 col-md-4">
                            <label for="form-pseudo" class="text-white">Pseudo</label><br>
                            <input type="text" class="form-control" id="form-pseudo" name="form-pseudo"
                                placeholder="Pseudo" required
                                value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>"><br>
                            <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>
                        </div>

                        <div class="form-group col-12 col-md-6">
                        
                        <label for="form-content" class="text-white mt-2">Votre message</label>
                        <textarea class="form-control" name="content" id="content" rows="5" placeholder="Votre message" required><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea>
                        <br>
                        <?= isset($errors['content']) ? $errors['content'] : ''; ?>
                    </div>
                            
                        <div class="col-lg-12 text-center">
                            <button type="submit" class="btn btn-primary mt-4 px-4">Soumettre</button>
                </form>
            </div>
        </div>
    </div>
</section>