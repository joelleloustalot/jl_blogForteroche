<div class="view" style="background-image:url('../public/img/angela-leshchinskiy-9opmgpTotJY-unsplash.jpg');background-size:100%">

    <div class="container">
        <div class="row ">
            <div class="col">
                <div id="carouselControls" class="carousel slide" data-ride="carousel" data-interval="3000">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../public/img/naomi-tamar-CcIEetdjBUo-unsplash.jpg" class="d-block w-100"
                                alt="airplane in sky">
                            <div class="carousel-caption">
                                <h1>Billet simple pour l'Alaska</h1>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="../public/img/phil-reaves-7DjAaadx610-unsplash.jpg" class="d-block w-100"
                                alt="lake and aurora borealis">
                            <div class="carousel-caption">
                                <h4>Venez vivre mes nouvelles aventures</h4>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="../public/img/kayti-coonjohn-twG_u1iugdA-unsplash.jpg" class="d-block w-100"
                                alt="lake with sunset">
                            <div class="carousel-caption">
                                <h4>Vers le Grand-Nord polaire</h4>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->title = 'Accueil'; ?>
    

    <div class="container">
        <div class="row"> 
            <div class="col-12">
    <?= $this->session->show('add_comment'); ?>
    <?= $this->session->show('flag_comment'); ?>
    <?= $this->session->show('delete_comment'); ?>
    <?= $this->session->show('register'); ?>
    <?= $this->session->show('login'); ?>
    <?= $this->session->show('logout'); ?>
    <?= $this->session->show('contact'); ?>

    <?= $this->session->show('delete_account'); ?>
        </div>

    </div>


    <div class="row">
            <?php
            foreach ($articles as $article) {
                ?>
            <div class="col-12 col-lg-4">
                <div class="card mt-3">
                    <div class="card-body">
                        <h4 class="card-title"><a
                                href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId()); ?>"><?= htmlspecialchars($article->getTitle()); ?></a>
                        </h4>
                        <p class="card-text">
                            <p>Créé le : <?= htmlspecialchars($article->getCreation_date()); ?></p>

                            <p><?= mb_substr(strip_tags($article->getContent()), 0, 260) . "..."; ?></p>
                            <a class="btn btn-secondary"
                                href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId()); ?>">Lire
                                la suite</a>
                    </div>
                    <br>
                </div>
            </div>
            <?php

        }
        ?>
        </div>

    </div>

</div>
<br>