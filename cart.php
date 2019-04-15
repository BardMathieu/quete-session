<?php require 'inc/head.php';
redirect();?>
<section class="cookies container-fluid">
    <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="pb-5">Mon panier !</h2>
        </div>
    </div>
    <?php
    afficheproduit();
    ?>
    <div class="row">
        <div class="col-md-8">
        </div>
        <div class="col-md-4">
            <button type="button" class="btn btn-warning">Acheter</button>
        </div>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
