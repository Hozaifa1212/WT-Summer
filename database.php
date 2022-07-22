<?php

class database{

    function openCon(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "labtask1";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

    function employee($fname,$lname,$age,$designation,$planguage,$email,$password,$picture ){
        $sql = "INSERT INTO employee (fname,lname, age, designation,planguage,email,password,picture) 
                 VALUES ('$fname','$lname','$age','$designation','$planguage','$email','$password','$picture')";
        if($conn->query($sql)){
            return true;
        }
        else {
            return false;
        }

    }
    
    //function checkMail(email,$conn){

    //$sql="SELECT email FROM `employee` where email = 'email'";
    //return $conn->query($sql);

    //}




}

?>