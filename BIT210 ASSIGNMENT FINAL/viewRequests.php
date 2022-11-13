<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Requests</title>
    <link rel="stylesheet" href="css/viewRequest.css">
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" 
        crossorigin="anonymous"
    >
</head>
<body class="bg-light d-flex flex-column h-100" >
    <div class="text-center text-dark display-4 pb-5">
      <a href="index.html"><img src="images/logo.png" alt="" class="schoolHELP-logo"></a>
      <h3>SchoolHELP</h3>
    </div>
    
    <div class="text-center">
      <h2 class=" pt-2 pb-4">All Requests</h2>
      <p class="text-primary">click on a request to find out more details</p>
    </div>
      <div class="filter--buttons text-center pb-4">
        <span>Filter By:</span>
        <button class="btn btn-info btn-md btn-block mx-2" id="sortbySchools-btn">School</button>
        <button class="btn btn-info btn-md btn-block mx-2" id="sortbyCity-btn">City</button>
        <button class="btn btn-info btn-md btn-block mx-2 " id="sortbyReqDate-btn">Request Date</button>
      </div>
      
    <div class="container-sm">
      <table class="table text-center bg-light mb-5">
        <thead>
          <tr id="table-row">
            <th scope="col">Request Date (mm/dd/yyyy)</th>
            <th scope="col">Description</th>
            <th scope="col">School</th>
            <th scope="col">City</th>
          </tr>
        </thead>
        <tbody id="table--body">
          <!--JAVASCRIPT WILL PUT ALL THE TABLE DATA INSIDE THIS ELEMENT-->
        </tbody>
      </table>
    </div>

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

  
  
    <script src="javascript/viewRequest.js"></script>
</body>
</html>
