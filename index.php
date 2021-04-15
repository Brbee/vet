<?php
include 'includes/header.php';
?>
<div id="firstImage" class="takeWholeScreen" >
  <img src="imgs/photo-1548199973-03cce0bbc87b.jfif">
</div>  
    
    <?php 
      include 'includes/db_config.php';
      $sql = "SELECT * FROM veterinarians ORDER BY id ASC";
      $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
    ?>
    
    <section class="takeWholeScreen" id="aboutUs">
      <p>We strive to use our resources, reach and relationships to improve the wellness of pets, communities, our associates and the veterinary profession.</p>
    </section>

    <section class="takeWholeScreen" id="ourTeam">
      <?php
      while ($record=mysqli_fetch_array($result,MYSQLI_ASSOC))
      {
      ?>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="imgs/<?php echo $record['image']?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?php echo $record['name']?></h5>
              <p class="card-text"><u><b>SPECIALTY</b></u>: <?php echo $record['specialty']?></p>
            </div>
        </div>
        <?php
      }
      ?>
    </section>

    <script src="js/script.js"></script>
</body>
</html>