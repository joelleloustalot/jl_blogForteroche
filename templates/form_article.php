<!--script pour tiny mce éditeur de texte-->
<script src="https://cdn.tiny.cloud/1/9qotzv6btz60eq42a7gubrinsz5s4ff4syyks6i4cct7wu60/tinymce/5/tinymce.min.js"
  referrerpolicy="origin"></script>

<script>
  tinymce.init({
    selector: 'textarea'
  });
</script>




<?php
$route = isset($post) && $post->get('id') ? 'editArticle&articleId='.$post->get('id') : 'addArticle';
$submit = $route === 'addArticle' ? 'Envoyer' : 'Mettre à jour';
?>

<section id="contact-form">
  <div class="container bg-dark mt-5">
    <div class="row">
      <div class="px-sm-5 px-lg-0 col-lg-10 offset-lg-1 mb-5 mt-5">
        <h3 class="text-center mt-5 mb-5 text-white">Nouvel article</h3>
        <form method="post" action="../public/index.php?route=<?= $route; ?>">
          <div class="form-row">
            <div class="form-group col-12 ">
              <label for="title" class="text-white">Titre</label><br>
              <input type="text" id="title" name="title" placeholder="Titre" required
                value="<?= isset($post) ? htmlspecialchars($post->get('title')): ''; ?>"><br>
              <?= isset($errors['title']) ? $errors['title'] : ''; ?>
            </div><br>

            <div class="form-group col-12 ">
              <label for="content">Contenu</label><br>


              <textarea id="content"
                name="content"><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea><br>

              <?= isset($errors['content']) ? $errors['content'] : ''; ?>
            </div>
            <input type="submit" class="btn btn-primary mt-4 px-4" value="<?= $submit; ?>" id="submit" name="submit">
        </form>

      </div>
    </div>
  </div>

</section>