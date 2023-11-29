<?php
include __DIR__ . "/partials/header.php";

?>


<main>
  <div class="container">
    <h1>Hotels.com</h1>
    <div class="row">
      <?php foreach($hotels as $hotel){ ?>
      <div class="col-12 col-md-4">
        <div class="card" >
          <img src="https://cdn0.iconfinder.com/data/icons/famous-landmark-volume-1/500/Burj_Khalifa-512.png" class="card-img-top" alt="burji khalifa icon">
          <div class="card-body">
            <h5 class="card-title"><?php echo $hotel['name']?></h5>
            <p class="card-text"><?php echo $hotel['description']?>.</p>
            <div class="card-text"> Voto: <?php echo $hotel['vote']?>/5</div>
            <div class="card-text"> Distanza dal centro: <?php echo $hotel['distance_to_center']?> km</div>
            
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
  <?php
  echo '$nulla';

  ?>
</main>

<?php
include __DIR__ . '/partials/footer.php';

?>