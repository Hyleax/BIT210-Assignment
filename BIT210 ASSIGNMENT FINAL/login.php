<?php
session_start();

require_once 'includes/db_connect.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    //get input from user
    $username = $_POST["username"];
    $password = $_POST["password"];

    //
    if (empty($username) || empty($password)){
        header("location: login.php?error=emptyfields");
        exit();
    }

    else if(!empty($username) && !empty($password)){
        //select all data from from schooladministrator table where username is equal to username input field and position is super admin
        $querySuper = "SELECT * FROM schooladministrator WHERE username='$username' AND position='Super Admin';";
        //select all data from from schooladministrator table where username is equal to username input field
        $querySA = "SELECT * FROM schooladministrator WHERE username='$username' AND position<>'Super Admin';";
        //select all data from from schooladministrator table where username is equal to username input field
        $queryV = "select * from volunteer WHERE username='$username'";

        //get school administrator data from database and store it (schooladministrator table)
        $resultSuper = mysqli_query($connection, $querySuper);
        
        //get school administrator data from database and store it (schooladministrator table)
        $resultSA = mysqli_query($connection, $querySA);

        //get volunteer data from database and store it (volunteer table)
        $resultV = mysqli_query($connection, $queryV);


        if($resultSuper){
            if($resultSuper && mysqli_num_rows($resultSuper) > 0){
                $user_data = mysqli_fetch_assoc($resultSuper);
                
                //if username and password are same as condition below
                if($username === "superadmin" && $password === "SuperAdmin"){
                    $_SESSION["username"] = $user_data["username"];
                    //redirect user to super admin page
                    header("location: superAdminProfile.php");
                    die;
                }
                else {
                    header("location: login.php?error=incorrectpassword&username=$username");
                    die;
                }
            }
            
        }

        //if resultSA is true
        if($resultSA){
            //if resultSA is true and the number of data row is more than 0
            if($resultSA && mysqli_num_rows($resultSA) > 0){
                //fetch the data and store is user_data
                $user_data = mysqli_fetch_assoc($resultSA);
            
                //if user_data's password equal password input and position not equal to Super Admin
                if($user_data["password"] === $password){
                        $_SESSION["username"] = $user_data["username"];
                        //change to the school admin page
                        header("location: schoolAdminProfile.php");
                        die;
                }
                else {
                    header("location: login.php?error=incorrectpassword&username=$username");
                    die;
                }
            }
        }
        //if resultV is true
        if($resultV){
            //if resultV is true and the number of data row is more than 0
            if($resultV && mysqli_num_rows($resultV) > 0){
                $user_data = mysqli_fetch_assoc($resultV);

                $hashedDBPassword = $user_data["password"];
                //if user_data's password equal password input
                if(password_verify($password, $hashedDBPassword)){
                    $_SESSION["username"] = $user_data["username"];
                    //change to the volunteer page
                    header("location: volunteerProfile.php");
                    die;
                }
                else {
                    header("location: login.php?error=incorrectpassword&username=$username");
                    die;
                }
            }
        }    
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SchoolHELP login page </title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" 
        crossorigin="anonymous"
    >

    <link rel="stylesheet" href="css/loginPage.css">
</head>
<body  class="bg-light">
    <section class="vh-100">
        <div class="container-fluid">
          <div class="row">

            <!--1st column-->
            <div class="col-sm-5">
              <div class="text-center text-dark display-4 pb-5">
                <a href="index.html"><img src="images/logo.png" alt="" class="schoolHELP-logo"></a>
                <h3>SchoolHELP</h3>
              </div>

              <div class="d-flex align-items-center px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
      
                <form class="login-form" method="POST" action="login.php">
                  <h3 class="fw-bold mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>
      
                  <!--LOGIN DETAILS-->
                  <!--USERNAME-->
                  <div class="form-outline mb-4">
                    <label class="form-label" for="login--username">Username</label>
                    <input name ="username" type="text" id="login--username" class="form-control form-control-lg" />
                  </div>
      
                  <!--PASSWORD-->
                  <div class="form-outline mb-4">
                    <label class="form-label" for="login--password">Password</label>
                    <input name = "password" type="password" id="login--password" class="form-control form-control-lg" />
                  </div>
      
                  <div class="pt-1 mb-4">
                    <button class="btn btn-info btn-lg btn-block" type="submit" id="loginBtn">Login</button>
                  </div>
      
                  <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
                  <p>Don't have an account?<a href="volunteerRegister.html" class="link-info">Register here</a></p>
      
                </form>
              </div>
            </div>

            <!--2nd column-->
            <div class="col-sm-7 px-0 d-none d-sm-block">
              <img src="images/studentWriting.jpg"
                alt="Login image" class="w-100 vh-100" 
                style="object-fit: cover; object-position: left;">
            </div>
          </div>
        </div>
      </section>
      <!-- <script src="javascript/login.js"></script> -->
</body>
</html>
