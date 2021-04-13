<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&family=Akaya+Telivigala&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    include 'db_config.php';
    $sql = "Select * from users where email='$_POST[email]'";
    $result = mysqli_query($connection, $sql);
    $num = mysqli_num_rows($result);
    if($num == 0) {
        $s = "INSERT INTO users (firstName, lastName,email, password,phoneNumber, gender) VALUES ('$_POST[fName]', '$_POST[lName]', '$_POST[email]', '$_POST[password]', $_POST[phone], '$_POST[gender]')";
        if ($connection->query($s) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $s . "<br>" . $connection->error;
        }
    }
    else
    {
        header('location:register.php?failed=true');
        
    }
    
      
    $connection->close();
    ?>
    <section>
        <nav>
            <ul>
                <span><li><a class="mainBTN" href="indexR.php">poodling</a></li></span>
                <span>
                    <li><a href="appointment.php">SCHEDULE AN APPOINTMENT</a></li>
                    <li><a href="aboutUsR.php">About Us</a></li>
                    <li><a href="ourTeamR.php">Our team</a></li>
                    <li><a href="index.php">Logout</a></li>
                </span>
                
            </ul>
        </nav>
        <img src="imgs/5d4abea9066585c107c863c8_dog pet portrait photography.jpg">
    </section>
</body>
</html>