<?php require 'inc/head.php';
?>
<section class="cookies container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Pecan nuts</h3>
          <p>Cooked by Penny !</p>
            <form method="post" action="">
                <input type="hidden" name="name" value="Pecan nuts"/>
                <input type="hidden" name="srcimg" value="assets/img/product-46.jpg"/>
                <button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart</button>
            </form>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate chips</h3>
          <p>Cooked by Bernadette !</p>
              <form method="post" action="">
                  <input type="hidden" name="name" value="Chocolate chips"/>
                  <input type="hidden" name="srcimg" value="assets/img/product-36.jpg"/>
                  <button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart</button>
              </form>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate cookie</h3>
          <p>Cooked by Bernadette !</p>
            <form method="post" action="">
                <input type="hidden" name="name" value="Chocolate cookie"/>
                <input type="hidden" name="srcimg" value="assets/img/product-58.jpg"/>
                <button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart</button>
            </form>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>M&M's&copy; cookies</h3>
          <p>Cooked by Penny !</p>
            <form method="post" action="">
                <input type="hidden" name="name" value="M&M's&copy; cookies"/>
                <input type="hidden" name="srcimg" value="../assets/img/product-32.jpg"/>
                <button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart</button>
            </form>
        </figcaption>
      </figure>
    </div>
  </div>
    <?php
    panier();
    ?>

</section>
<?php require 'inc/foot.php'; ?>
