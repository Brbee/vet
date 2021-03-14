<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style3.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&family=Akaya+Telivigala&display=swap" rel="stylesheet">
</head>
<body>
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
    <section id="forms">
        <form action="indexR.php" id="first" method="POST">
            <fieldset>
                <legend>Register</legend>
                <p><label for="fName">First Name:</label><input type="text" name="fName" id="fName"></p>
                <p><label for="lName">Last Name:</label><input type="text" name="lName" id="lName"></p>
                <p><label for="email">Email:</label><input type="email" name="email" id="email"></p>
                <p><label for="password">Password:</label><input type="password" pattern=".{8,}" required title="8 characters minimum" name="password" id="password"></p>
                <p><label for="phone">Phone Number:</label><input type="text" name="phone" id="phone"></p>
                <p><label for="gender">Gender:</label>
                <select name="gender" id="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select></p>
                <input type="submit" value="Register" name="registerBTN">
            </fieldset>
        </form>
        <form action="indexR.php" id="second" method="POST">
            <fieldset>
                <legend>Login</legend>
                <p><label for="email">Email:</label><input type="email" name="email" id="email"></p>
                <p><label for="password">Password:</label><input type="password" required name="password" id="password"></p>
                <input type="submit" value="Login" name="loginBTN">
            </fieldset>
        </form>
        
    </section>
    <script src="script.js"></script>
</body>
</html>