<?php


// check if user accessed this file by regular means
if (isset($_POST['volunteerRegister-btn'])) {

 

        // require is used when the file is mandatory for the application
        require 'db_connect.php';
        require 'volunteerFuncs.inc.php';
        // collecting the variables from registerVolunteer.php
        $username = $_POST['username'];
        $fullName = $_POST['fullname'];
        $phoneNumber = $_POST['phoneNumber'];
        $occupation = $_POST['occupation'];
        $birthdate = $_POST['birthdate'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        // check if fields are empty
        // headers cannot be indented
        if (volunteerRegistrationEmpty($username, $fullName, $phoneNumber, $occupation,$birthdate, $email, $password, $confirmPassword)) {
                header("Location: ../volunteerRegister.php?error=emptyfields&username=".$username."&fullname=".$fullName."&phoneNumber=".$phoneNumber."&occupation=".$occupation."&birthdate=".$birthdate."&email=".$email);
                exit();
        }

        // check if user is old enough
        if (checkVolunteerAge($birthdate)){
            header("Location: ../volunteerRegister.php?error=tooyoung&username=".$username."&fullname=".$fullName."&phoneNumber=".$phoneNumber."&occupation=".$occupation."&email=".$email);
                exit();
        }

        // check if email is valid
        if (testEmailValid($email)){
            header("Location: ../volunteerRegister.php?error=emailinvalid&username=".$username."&fullname=".$fullName."&phoneNumber=".$phoneNumber."&occupation=".$occupation."&birthdate=".$birthdate);
            exit();
        }

        // check if password is strong enough
        if(testPasswordStrength($password)) {
            header("Location: ../volunteerRegister.php?error=passwordweak&username=".$username."&fullname=".$fullName."&phoneNumber=".$phoneNumber."&occupation=".$occupation."&birthdate=".$birthdate."&email=".$email);
            exit();
        }

        // check if password and confirmPassword are the same
        if (confirmPassword($password, $confirmPassword)){
            header("Location: ../volunteerRegister.php?error=passwordwrong&username=".$username."&fullname=".$fullName."&phoneNumber=".$phoneNumber."&occupation=".$occupation."&birthdate=".$birthdate."&email=".$email);
            exit();
        }

        // check if username is already taken
        if (testVolunteerUsernameExists($con, $username)) {
            header("Location: ../volunteerRegister.php?error=usernametaken&fullname=".$fullName."&phoneNumber=".$phoneNumber."&occupation=".$occupation."&birthdate=".$birthdate."&email=".$email);
            exit();
        }

        createVolunteer($connection, $username, $fullName, $phoneNumber, $occupation,$birthdate, $email, $password, $confirmPassword);

        //  close statement
        mysqli_stmt_close($stmt);

        // close connection to the DB
        mysqli_close($connection);
}

// if a user does mot access the file by natural means
else {
    header("Location: ../volunteerRegister.php");
    exit();
}
