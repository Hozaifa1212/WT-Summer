<?php
$Password=$_REQUEST["Password"];
$username=$_REQUEST["Username"]; 

if(isset($_POST["Register"])){
    #$Password=$_REQUEST["Password"];

    $username=$_POST["Username"]; 
    $phone=$_POST["Phone"];
    $Email=$_POST["Email"];


    $to="shafiq.hozaifa.42883@gmail.com";
    $subject="Form Submission";
    $message="Name : " .$username."\n"."Contact : " .$phone."\n"." Wrote the following : "."\n\n".$message;
    $headers= "Form : " .$email;

    if(mail($to, $subject, $message, $headers)){
        echo"<h1> The information sent successfully! Thank you"."".$username.", We will contact you shortly!<h1>";

    }
}
else{
    echo"Something went wrong!"."<br>";
}


if(empty($username)){
    echo" The name is empty" .$username."<br>";
} 
else{
    echo" Your Username is " .$username."<br>";
}
if(is_numeric($username)){
    echo" Your name is in correct pattern"."<br>";
}
else{
    echo" Your name must have numbers"."<br>";
}
if(strlen($Password)<8){
    echo" The Password can not be less than 8 characters!"."<br>";
}
else{
    echo" Your password is Correct."."<br>";
}

if(isset($_POST["Gender"])){
    $gender=$POST["Gender"];
    echo"your Gender is ".$gender;

}

else{
    echo" Please select your Gender first!"."<br>";
}

if(isset($_POST["Music"])){
    echo"You like ".$POST["Music"];

}
if(isset($_POST["Sports"])){
    echo" You like ".$_POST["Sports"];

}
if(isset($_POST["Books"])){
    echo"You like ".$POST["Books"];

}
if(isset($_POST["Travelling"])){
    echo"You like ".$POST["Travelling"];

}
if(isset($_POST["Music"]) || isset($_POST["Sports"]) || isset($_POST["Books"]) || isset($_POST["Travelling"])){
    echo"You have selected Checkbox";
}
else{
    echo"You have not selected any Checkbox yet!"."<br>";
}


echo"<br>".$_FILES["myfile"]["name"]
    if (empty($_FILES["myfile"]["name"])){
        echo"No files attached";
    }else{
        echo"Yo've attached ".$_FILES["myfile"]["name"];
    }
    
    if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"..uploads/".$_FILES["myfile"]["name"].$username.".pdf")){
        echo"file uploaded.";
    }
    else{
        echo"File not uploaded.";
    }
$filecontents = file_get_contents("../data/data.json",true);
$arrphp=json_decode($filecontents)


    $myarr = array(
        "UserName"=>$username;
        "Password"=>$Password;
    );
    $arrphp []= $myarr;
    $jsonarr=json_encode($myarr,JSON_PRETTY_PRINT);


    if(file_put_contents("../data/data.json",$jsonarr)){
        echo"Data stored successfully";

        
    }
    else{
        echo"Data not Stored";
    }

$mycontents=file_get_contents("../data/data.json",true);
$phpstr=$json_decode($data);





?>