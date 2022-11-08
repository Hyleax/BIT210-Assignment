<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" 
        crossorigin="anonymous"
    >
    <link rel="stylesheet" href="css/volunteerRegistration.css">
    <link rel="stylesheet" href="css/errorMsg.css">
    <title>Volunteer Registration</title>
</head>
<body class="bg-light">
    <section class="vh-100">
        <div class="container-fluid">
          <div class="row">
              <div class="text-center text-dark display-4">
                <a href="index.html"><img src="images/logo.png" alt="" class="schoolHELP-logo mt-3"></a>
                <h3>SchoolHELP</h3>
              </div>

              <div class="d-flex align-items-center justify-content-center h-custom-2">
      
                <form class="volunteer-form" action = "includes/volunteerRegis.inc.php" method = "POST">
      
                  <h3 class="fw-bold mb-3 pb-3 text-center">Volunteer Registration</h3>
      
                  <!--username-->
                  <div class="form-group mb-2">
                    <label class="form-label" for="username">Username</label>  <span id = "errorMsg"></span>
                    <input 
                      type="text" 
                      id="username" 
                      name="username"
                      class="form-control form-control-sm" 
                      placeholder="Enter username"
                      <?php if (isset($_GET["username"])) {?>
                      value = "<?php echo $_GET["username"] ?>"
                      <?php } ?>
                    />
                  </div>

                    <!--full name-->
                    <div class="form-group mb-2">
                        <label class="form-label" for="fullname">Full Name</label> <span id = "errorMsg"></span>
                        <input 
                          type="text" 
                          id="fullname" 
                          name="fullname"
                          class="form-control form-control-sm" 
                          placeholder="e.g. Norman Yap"
                          <?php if (isset($_GET["fullname"])) {?>
                          value = "<?php echo $_GET["fullname"] ?>"
                          <?php } ?>
                      />
                      </div>


                      <!--phone number-->
                    <div class="form-group mb-2">
                        <label class="form-label" for="phoneNumber">Mobile No.</label>  <span id = "errorMsg"></span>
                        <input 
                          type="tel" 
                          id="phoneNumber"
                          name="phoneNumber"  
                          class="form-control form-control-sm" 
                          placeholder="e.g. 0124074452"
                          <?php if (isset($_GET["phoneNumber"])) {?>
                          value = "<?php echo $_GET["phoneNumber"] ?>"
                          <?php } ?>
                        /> 
                      </div>
                    
                     <!--occupation-->
                  <div class="form-group mb-3">
                    <label class="form-label" for="occupation">Occupation</label> <span id = "errorMsg"></span>
                    <input 
                      type="text" 
                      id="occupation" 
                      name="occupation" 
                      class="form-control form-control-sm" 
                      placeholder="Enter occupation"
                      <?php if (isset($_GET["occupation"])) {?>
                      value = "<?php echo $_GET["occupation"] ?>"
                      <?php } ?>
                    />
                  </div>

                   <!--date of birth-->
                   <div class="form-group mb-2">
                    <label for="birthdate" class="form-label">Date of Birth</label> <span id = "errorMsg"></span>
                    <input 
                      type="date" 
                      id="birthdate" 
                      name="birthdate"
                      <?php if (isset($_GET["birthdate"])) {?>
                      value = "<?php echo $_GET["birthdate"] ?>"
                      <?php } ?>
                    />
                  </div>

                  <!--email-->
                  <div class="form-group mb-2">
                    <label class="form-label for="email">Email address</label> <span id = "errorMsg" ></span>
                    <input 
                      type="email" 
                      class="form-control" 
                      id="email" 
                      name="email" 
                      placeholder="Enter email"
                      <?php if (isset($_GET["email"])) {?>
                      value = "<?php echo $_GET["email"] ?>"
                      <?php } ?>
                      />
                  </div>
        
                  <!--password-->
                  <div class="form-group mb-2">
                    <label class="form-label" for="password" id="password-lbl">Password</label><span id = "errorMsg"></span>
                    <input 
                      type="password" 
                      id="password" 
                      name="password" 
                      class="form-control form-control-sm" 
                      placeholder="At least 8 characters with 1 capital letter"/>
                  </div>

                  <!--confirm password-->
                  <div class="form-group mb-3">
                    <label class="form-label" for="confirmPassword">Confirm Password</label> <span id = "errorMsg"></span>
                    <input 
                      type="password" 
                      id="confirmPassword"
                      name="confirmPassword" 
                      class="form-control form-control-sm" />
                  </div>
      
                  <!--submit button-->
                  <div class="pt-1">
                    <button 
                      class="btn btn-info btn-md btn-block" 
                      id="volunteerRegister-btn" 
                      type="submit"
                      name="volunteerRegister-btn" 
                      >Sign Up</button> <span></span>
                  </div>

                  <div class = "d-flex justify-content-center text-danger fw-bold mt-3">
              <?php
                if (isset($_GET["error"])){
                  
                  if ($_GET["error"] == "emptyfields"){
                    echo "<p>Fill in all fields!</p>";
                  }

                  else if ($_GET["error"] == "tooyoung"){
                    echo "<p>You must be 16 years old and above to register as a volunteer</p>";
                  }
                  
                  else if ($_GET["error"] == "emailinvalid"){
                    echo "<p>Email is invalid</p>";
                  }
                  
                  else if($_GET["error"] == "passwordweak"){
                    echo "<p>Your password is too weak</p>";
                  }

                  else if($_GET["error"] == "passwordwrong"){
                    echo "<p>Password is not the same</p>";
                  }

                  else if($_GET["error"] == "usernametaken"){
                    echo "<p>This username is already taken</p>";
                  }

                  else if($_GET["error"] == "sqlerror"){
                    echo "<p>Something went wrong, please try again</p>";
                  }
                  else if($_GET["error"] == ""){
                    echo "<p>You have successfully signed up</p>";
                  }
                }
              ?>
                </div>
                </form>

              </div>
            </div>
        </div>
      </section>  
                                                                                                          
     <footer>
        <div class="footer text-light text-center pt-5">
            <p>Follow our social media :</p>
            <div class="images">
                
            <a href="https://www.facebook.com/" target="_blank">
                <img src="images/facebook.png" alt="facebook" class="facebook">
            </a>
                
            <a href="https://www.instagram.com/" target="_blank">
                <img src="images/instagram.png" alt="instagram" class="instagram">
            </a>
    
            <a href="https://twitter.com/?lang=en" target="_blank">
                <img src="images/twitter.png" alt="twitter" class="twitter">
            </a>

        </div>
        <p>Copyright &copy; 2022. All rights reserved</p>
        </div>
    </footer>                                                                                    

      <script src="javascript/regisVolunteer.js"></script>
</body>
</html>
