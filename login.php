<?php

$host = "localhost:3306";
$user = "root";
$password = "";
$db = "khanas";

$conn = mysqli_connect($host, $user, $password, $db);

if(isset ($_POST['email'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $results = mysqli_query($conn, $query);

        if(mysqli_num_rows($results) == 1) {
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "You are now logged in";
            header('Location: index.php');
        }

        else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}

// if(isset($_POST[email])){
//     $email = $_POST[email];
//     $pass = $_POST[password];

//     $sql = "select * from users where email='$email'";

//     $result = $conn->query($sql);

//     if($result->num_rows == 1) {
//         $row = $result->fetch_assoc();

//         if()
//     }
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="styles/login.css">

    <title>Khanas || Login</title>
</head>

<body>

    <div class="container">
        <div class="main-container shadow-lg p-3 mb-5 bg-body rounded">
            <div class="left">
                <h1>Welcome To Khanas</h1>
                <img src="https://scontent.fdac23-1.fna.fbcdn.net/v/t39.30808-6/313200983_1967534753445191_6001449154010436583_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=WE-ZXWhhnEAAX_1CLUO&_nc_ht=scontent.fdac23-1.fna&oh=00_AfBrb3_HoF-0Q6fddZRoEm2wm1Ap_hyhlp-LglJ9TkAEEw&oe=63864FC6"
                    alt="">
            </div>

            <div class="right">
                <a href="index.php"><img id="khanas-logo" src="https://i.ibb.co/1qZfbwX/khanas.png" alt=""></a>
                <h1>Login</h1>

                <form method="POST" action="login.php">
                    <?php include('errors.php'); ?>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            required>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                    </div>
                    <div>
                        <a class="anchor" href="register.php">Don't Have an Account? Register Here...</a>
                    </div>
                    <br>
                    <button type="submit" class="button">Login</button>
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