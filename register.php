<?php

session_start();

//variable declaration
$host = "localhost:3306"; 
$user = "root";
$dbname = "khanas";
$password = "";
$errors = array();

$conn = new mysqli($host, $user, $password, $dbname);

if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// User Register 
if(isset($_POST['name'])) {
    //receiving user inputs
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $pass = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, phone, email, password) VALUES('$name', '$phone', '$email', '$pass')";
    echo "$conn->query($sql)";
    if($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "Registration Successful!";
        header('Location: http://localhost:8000/login.php');
        exit();

    }
    else {
        $_SESSION['message']="Registration Failed!";
        header('location: localhost:8000/register.php/?error=true');
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="styles/register.css">

    <title>Khanas || Login</title>
</head>

<body>

    <div class="container">
        <div class="main-container shadow-lg p-3 mb-5 bg-body rounded">
            <div class="left">
                <h1>Welcome To Khanas</h1>
                <img src="https://scontent.fdac23-1.fna.fbcdn.net/v/t39.30808-6/313082936_1965787560286577_1628835062817217903_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=xjeZiJ_fuzYAX8zE9Ac&_nc_ht=scontent.fdac23-1.fna&oh=00_AfDx9avFXk-A2j1oyxfSkS8pW8Kj55T8smLriecmJI2rZA&oe=6384F8AC"
                    alt="">
            </div>

            <div class="right">
                <a href="index.php"><img id="khanas-logo" src="https://i.ibb.co/1qZfbwX/khanas.png" alt=""></a>
                <h1>Register</h1>

                <form method="POST" action="register.php">
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" id="fullname" name="name" class="form-control" placeholder="John Doe"
                            required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="tel" name="phone" class="form-control" placeholder="01712569875" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="example@email.com" required>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                    </div>
                    <div>
                        <a class="anchor" href="login.php">Already Have an Account? Login Here...</a>
                    </div>
                    <br>
                    <button type="submit" value="Register" name="register" class="button">Register</button>
                </form>
            </div>

        </div>
    </div>





    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>