    <?php
session_start();

require("../middleware/checkadmin.php");
$username_err =null ;
$password_err =null ;
$success =null ;
$logintype =null;
$credential_err =null;
 $inputusername =null;
    $inputpassword = null;

if(isset($_POST["login"])){

    $username = $row["username"];
    $password = $row["password"];
    $inputusername = $_POST["username"];
    $inputpassword = $_POST["password"];

    if(empty($inputusername) ){
     $username_err ="Username is required!";
     }
    if(empty($inputpassword) ){
     $password_err  ="password is required!";
     }
     
     if(  $inputpassword === $password AND $inputusername === $username ){

        $_SESSION["user"]=$username;
header("Location: /barangay");
    }
    if(!empty(trim($inputusername)) && !empty(trim($inputpassword)) && $inputpassword !== $password ){
        $credential_err ="credential was wrong!";
    }
        if(!empty(trim($inputusername)) && !empty(trim($inputpassword)) && $inputusername!== $username ){
        $credential_err ="credential was wrong!";
    }
 
}

?>
    <?php


?>


    <!DOCTYPE html>
    <html lang="en">


    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../layout/main.css">
        <link rel="icon" href="../assets/images/santacruz.png">

        <title>Log in</title>
    </head>



    <body>
        <style>
        * {
            padding: 0;
            margin: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 15px;
        }

        body {
            margin: 0
        }


        .gad_login_main {}

        .gad_login_main .side {
            background: black;
            color: white;

            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .img {}

        .img {
            /* animation: fromtop linear 300ms 1; */
            max-width: 100px;

        }

        label {
            font-size: 16px;
            position: relative;
            tra
        }

        .gad_login_main .side .text {
            /* animation: frombottom linear 300ms 1; */

        }


        .gad_login_main .form {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            min-height: 100vh;
            animation: form ease-in 400ms 1;

        }

        .gad_login_main .form form {
            max-width: 600px;
            background: white;
            position: relative;
            z-index: 3;
        }


        @keyframes form {

            0% {
                transform: scale(.5);
            }

            100% {
                transform: scale(1);


            }

        }


        .gad_login_main .form .text {
            animation: fromtop linear 300ms 1;

        }

        .gad_login_main .side .mission {
            animation: frombottom linear 600ms 1;

        }

        .gad_login_main .side .vission {
            animation: frombottom linear 600ms 1;

        }

        .gad_login_main .form form {
            width: 60%;
            margin: auto
        }

        .gad_login_main .form .form-select {
            cursor: pointer;
            text-align: center;
            width: max-content;
            margin: auto;
        }

        .gad_login_main .form .form-select:focus {
            box-shadow: 0 0 2px 0 black;
            border: none !important
        }

        .gad_login_main .form .form-select option {
            cursor: pointer;

        }

        .gad_login_main .form .form-select option:hover {
            background: black;
            color: white;
            cursor: pointer;
        }

        .gad_login_main .form .form-group {
            width: 100%;
        }

        .gad_login_main .form .form-group input {
            width: 100%;
            height: 50px;
            padding: 0 10px;
            border: 1px solid rgba(0, 0, 0, .2);
            outline: none;
        }

        .gad_login_main .form .form-group input:focus {
            border: 1px solid rgba(0, 0, 0, 1);

        }

        .gad_login_main .form .action button {
            background: black;
            color: white;
            border: none;
            outline: none;

        }

        .gad_login_main .form .error_message {
            width: 100%;
            padding: 5px 10px;
            font-size: 14px;

            background: rgba(255, 0, 0, .2);
        }

        .gad_login_main .form .action button:hover {
            /* background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8), black); */
            transform: translateY(-2px);
            transition: all ease-in 300ms;
            box-shadow: 0 10px 5px rgba(0, 0, 0, 0.2);
            ;
        }


        @keyframes fromtop {
            0% {
                transform: translateY(-50px);
                opacity: .2;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes frombottom {
            0% {
                transform: translateY(50px);
                opacity: .2;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }
        </style>




        <div class="gad_login_main d-flex flex-column-reverse flex-md-row " style="background:black;">
            <!-- <div class=" side px-3 col-md-4 ">

            <div class=" img">
        <img src="../assets/images/santacruz.png" alt="">
    </div>
    <h1 class="text text-center">Gender and Development</h1>




    <div class="pt-4 mission">
        <h3>Mission</h3>
        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur quod sint animi magnam nobis cum
            nisi labore corrupti cumque similique adipisci ipsam. Officiis eos porro asperiores eaque. </p>
    </div>
    <div class="vission">
        <h3>Vission</h3>
        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur quod sint animi magnam nobis cum
            nisi labore corrupti cumque similique adipisci ipsam. Officiis eos porro asperiores eaque. </p>
    </div>
    </div> -->







            <div class="form   m-auto  w-75" style="background:white; ">
                <div class="img">
                    <img src="../assets/images/santacruz.png" alt="">
                </div>




                <form action="login.php" method="POST" class="w-75  px-3 py-3 m-0">

                    <h1 class="text-center p-2 text">Log in </h1>

                    <!-- <select class="form-select" aria-label="Default select example" name="logintype">
                    <option selected value="admin">Admin mode</option>
                    <option value="client">Client mode</option>

                </select> -->



                    <div class="form-group d-flex flex-column my-3">
                        <label for="username"> Username</label>
                        <input type="text" name="username" placeholder="username..."
                            value=<?php echo  $inputusername ;?>>
                        <?php  if($username_err){
                    echo ' <div class="error_message">' . $username_err  . ' </div>';
                }  ?>
                    </div>

                    <div class="form-group d-flex flex-column my-3 ">
                        <label for="username">Password</label>
                        <input type="password" name="password" placeholder="password"
                            value=<?php echo  $inputpassword ;?>>
                        <?php  if($password_err){
                    echo ' <div class="error_message">' . $password_err  . ' </div>';
                }  ?>
                    </div>

                    <div>
                        <input type="checkbox"> <span>Remember me</span>
                    </div>
                    <div class="text-end my-3">
                        <div class="d-flex justify-content-end align-items-center">
                        <h6 class="m-0 px-1">Need an account? </h6><a href="signup.php" style="display:inline-block;text-decoration:underline;color:blue">sign up</a>
                        </div>
                    

                    </div>
                    <?php  if($credential_err){
                    echo ' <div class=" my-2 error_message">' . $credential_err  . ' </div>';
                }  ?>
                    <div class="action d-flex justify-content-center">
                        <button class="px-4 py-2" type="submit" name="login">Login </button>
                    </div>

                </form>
            </div>


        </div>


        <script src="../assets/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>