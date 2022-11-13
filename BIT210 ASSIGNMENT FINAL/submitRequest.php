
<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Request</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" 
        crossorigin="anonymous"
    >
    <link rel="stylesheet" href="css/volunteerRegistration.css">
    <link rel="stylesheet" href="css/errorMsg.css">
</head>
<body class="bg-light">
    <section class="vh-100">
        <div class="container-fluid">
          <div class="row">
              <div class="text-center text-dark display-4">
                <a href="index.php"><img src="images/logo.png" alt="" class="schoolHELP-logo mt-3"></a>
                <h3>SchoolHELP</h3>
              </div>

              <div class="d-flex align-items-center justify-content-center h-custom-2">
      
                <form class="volunteer-form" action="includes/submitRequest.inc.php" method = "POST">
                    <h3 class="fw-bold mb-3 pb-3 text-center">Submitting Request</h3>
                    
                    <!--SELECT REQUEST TYPE-->
                    <p class="fw-bold">Select a request type</p>
                    <div class="row pb-4">
                    <div class="col">
                        <input name= "req-radio" type="radio" id="tutorial-radio" value="tutorial">
                        <label for="tutorial-radio" id="tutorial-label">Tutorial</label>
                    </div>
                     <div class="col">
                        <input name= "req-radio" type="radio" id="resource-radio" value="resource">
                        <label for="resource-radio" id="resource-label">Resource</label>
                    </div>
                    </div>
                    

                    <input id = "reqTypeSelector" type="text" name= "requestType" hidden>

                    <!--TUTORIAL REQUEST-->
                    <!--DISPLAY HIDDEN IF NOT CHOSEN-->
                    <div class="tutorial--container">
                        <!--tutorial description-->
                        <div class="form-group mb-2 pb-4">
                            <label class="form-label" for="tutorial-description">Tutorial Description</label>  <span id = "errorMsg"></span>
                            <input 
                                type="text" 
                                id="tutorial-description" 
                                class="form-control form-control-sm" 
                                placeholder="Enter tutorial description"
                                name = "tutorial-description"
                                <?php if (isset($_GET["tutDesc"])) {?>
                                value = "<?php echo $_GET["tutDesc"] ?>"
                                <?php } ?>
                            />
                        </div>
                    
                        <!--date and time of proposed tutorial-->
                        <div class="form-group mb-2 pb-4">
                            <label class="form-label" for="tutorial-time">Tutorial Time</label>  <span id = "errorMsg"></span>
                            <input 
                                type="datetime-local" 
                                id="tutorial-time" 
                                class="form-control form-control-sm"
                                name = "tutorial-time"
                                <?php if (isset($_GET["tutTime"])) {?>
                                value = "<?php echo $_GET["tutTime"] ?>"
                                <?php } ?>
                            />
                        </div>

                            <!--student level from primary one to secondary 5-->
                        <div class="form-group mb-2 pb-4">
                            <label class="form-label" for="student-level">Student Level</label>  <span id = "errorMsg"></span>
                            <select 
                                id="student-level" 
                                class="form-control" 
                                name = "student-level"
                                <?php if (isset($_GET["studentLvl"])) {?>
                                value = "<?php echo $_GET["studentLvl"] ?>"
                                <?php } ?>
                            >
                                <option selected>Select student level...</option>
                                <option value="primary-1">primary 1</option>
                                <option value="primary-2">primary 2</option>
                                <option value="primary-3">primary 3</option>
                                <option value="primary-4">primary 4</option>
                                <option value="primary-5">primary 5</option>
                                <option value="secondary-1">secondary 1</option>
                                <option value="secondary-2">secondary 2</option>
                                <option value="secondary-3">secondary 3</option>
                                <option value="secondary-4">secondary 4</option>
                                <option value="secondary-5">secondary 5</option>
                            </select>
                        </div>

                        <!--number of expected students-->
                        <div class="form-group mb-2 pb-4">
                            <label class="form-label" for="no-of-students">Number of expected students</label>  <span id = "errorMsg"></span>
                            <input 
                                type="text" 
                                id="no-of-students" 
                                class="form-control form-control-sm" 
                                placeholder="e.g., 15"
                                name = no-of-students
                                <?php if (isset($_GET["noStudents"])) {?>
                                value = "<?php echo $_GET["noStudents"] ?>"
                                <?php } ?>
                            />
                        </div>
                    </div>


                    <!--RESOURCE REQUEST-->
                    <div class="resource--container">
                        <!--Resource Description-->
                        <div class="form-group mb-2 pb-4">
                            <label class="form-label" for="resource-description">Resource Description</label>  <span id = "errorMsg"></span>
                            <input 
                                type="text" 
                                id="resource-description" 
                                class="form-control form-control-sm" 
                                placeholder="Enter resource description"
                                name = "resource-description"
                                <?php if (isset($_GET["resourceDescription"])) {?>
                                value = "<?php echo $_GET["resourceDescription"] ?>"
                                <?php } ?>
                            />
                        </div>

                        <!--Resource Type-->
                        <div class="form-group mb-2 pb-4">
                            <label class="form-label" for="resource-type">Resource Type</label>  <span id = "errorMsg"></span>
                            <select 
                                id="resource-type" 
                                class="form-control"
                                name = "resource-type"   
                                <?php if (isset($_GET["resType"])) {?>
                                value = "<?php echo $_GET["resType"] ?>"
                                <?php } ?>
                            >
                                <option selected>Select resource type...</option>
                                <option value="mobile-device">mobile device</option>
                                <option value="personal-computer">personal computer</option>
                                <option value="networking-equipment">networking equipment</option>
                              </select>
                        </div>

                        <!--Number of resources-->
                        <div class="form-group mb-2 pb-4">
                            <label class="form-label" for="number-of-resources">Number of resources</label>  <span id = "errorMsg"></span>
                            <input 
                                type="text" 
                                id="number-of-resources" 
                                class="form-control form-control-sm" 
                                placeholder="e.g., 10"
                                name = "number-of-resources"
                                <?php if (isset($_GET["noRes"])) {?>
                                value = "<?php echo $_GET["noRes"] ?>"
                                <?php } ?>
                            />
                        </div>
                    </div>


                  <!--submit button-->
                  <div class="pt-1">
                    <button 
                        class="btn btn-info btn-md btn-block" 
                        id="submitRequest-btn" 
                        type="submit"
                        name = "submitRequest-btn"
                        >
                        Submit Request
                    </button> 
                  </div>
                </form>

              </div>
            </div>
        </div>
      </section>

      <footer>
        <div class="footer text-light text-center">
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

      

      <script src="javascript/submittingRequests.js"></script>
</body>
</html>