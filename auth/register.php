
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php
        include "../database/config.php";
        //HTTP Verb: GET (Database - Browser), POST (Browser - Database)
        //Global Variable: $_GET(), $_POST()
        //isset()
        if(isset($_POST['submit'])){
           //If submit button clicked
           $name = $_POST['fullName'];
           $email = $_POST['email']; 
           $pass = $_POST['password'];

           $secure  = password_hash($pass, PASSWORD_DEFAULT);
           //password_default constant = password(bcrypt)

           $verify = mysqli_query($conn, "select email from students where email='$email'");
           //mysqli_num_rows
           if(mysqli_num_rows($verify) > 0){
            echo "Email Already Exists";
           }
           else{
            $query = "insert into students(name, email, password) values('$name', '$email', '$secure')";
           mysqli_query($conn, $query);
           }

           
           //mysqli_query(database connection, sq query);

           //Input Sanitization
           //Input Validation
        }

    ?>
    <section class="register">
        <form action="" method="post" class="register-form">
            <div class="form-control">
                <input type="text" name="fullName" placeholder="Type your name here">
            </div>
            <div class="form-control">
                <input type="email" placeholder="email" name="email">
            </div>
            <div class="form-control">
                <input type="password" placeholder="password" name="password">
            </div>
            <input type="submit" value="register" name="submit">
        </form>
   </section> 
</body>
</html>