<?php
include __DIR__ . "/partials/header.php";



?>


<main>
  <div class="container">
    <h1>Hotels.com</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Description</th>
          <th scope="col">Parking</th>
          <th scope="col">Vote</th>
          <th scope="col">Center Dist.</th>        
        </tr>
      </thead>
      <tbody>
        <?php  $count =1; 
        foreach ($hotels as $hotel) {?>
        <tr>
          <th scope="row"><?php echo $count?></th>
          <?php foreach($hotel as $hoteldetail) {?>
          <td><?php if (is_bool($hoteldetail)){
            echo $hoteldetail ?'<i class="fa-solid fa-check text-success"></i>':'<i class="text-danger fa-solid fa-xmark"></i>';
          }else{
            echo $hoteldetail;
          } ?></td>
          
          <?php } ?>
        </tr>
        <?php $count++; 
      } ?>
        
      </tbody>
    </table>
    <div class="row gy-3">

      <?php foreach ($hotels as $hotel) { ?>
        <div class="col-12 col-md-4">
          <div class="card">
            <img src="https://cdn0.iconfinder.com/data/icons/famous-landmark-volume-1/500/Burj_Khalifa-512.png"
              class="card-img-top" alt="burji khalifa icon">
            <div class="card-body">
              <h5 class="card-title">
                <?php echo $hotel['name'] ?>
              </h5>
              <p class="card-text">
                <?php echo $hotel['description'] ?>.
              </p>
              <div class="card-text"> Voto:
                <?php echo $hotel['vote'] ?>/5
              </div>
              <div class="card-text"> Distanza dal centro:
                <?php echo $hotel['distance_to_center'] ?> km
              </div>

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