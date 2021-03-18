<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&family=Akaya+Telivigala&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php 
      include 'db_config.php'; 
      $sql = "SELECT * FROM veterinarians ORDER BY id ASC";
      $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
    ?>
    <section>
        <nav>
            <ul>
                <span><li><a class="mainBTN" href="index.php">poodling</a></li></span>
                <span>
                    <li><a href="aboutUs.php">About Us</a></li>
                    <li><a href="ourTeam.php">Our team</a></li>
                    <li><a href="register.php">Register/Login</a></li>
                </span>
            </ul>
        </nav>
    </section>
    <section id="ourTeam">
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
    
</body>
</html>