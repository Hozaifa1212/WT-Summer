<?php
    include "../control/process.php";
?>


<html>
    <head>
        <title>
            My web tech lab
        </title>
    </head>
    <body>

        <h1>
            WEB TECHNOLOGY lab1
        </h1>
        <p>This is web technology lab class</p>
        <a href="https://www.aiub.com"> AIUB</a><br>
        <img src="../images/img_girl.jpg" alt="Sensa iamges" width="500" height="300">


<div>
<h1> Registration</h1>
<form action="" method="GET">
    <table>
    <tr>
    <td>Enter your Name:</td>
    <td><input type="text" name="Name"></td>
    </tr>
    <tr>
    <td>Enter your Username:</td>
    <td><input type="text" name="Username"> </td>
    </tr>
    <tr>
    <td>Enter your Password:</td>
    <td><input type="Password" name="Password"> </td>
    </tr>
    <tr>
    <td>Enter your Email:</td>
    <td><input type="text" name="Email"> </td>
    </tr>
    <tr>
    <td>Enter your Contact:</td>
    <td><input type="number" name="Phone"> </td>
    </tr>
    <tr>
    <td>Enter Date of Birth: </td>
	<td><input type="Date" name="Date"> </td>
    </tr>
    <tr>
	<td>Enter Age: </td>
	<td><input type="number" name="Age"> </td>
    </tr>
    <tr>
	<td>Select Gender: </td>
	<td>
    <input type="radio" name="Gender" value="Male"> Male 
	<input type="radio" name="Gender" value="Female"> Female 
    </td>
    </tr>
    <tr>
    <td>select your interset:</td>
    <td>
    <input type="checkbox" name="Music" value="Music"> Music
	<input type="checkbox" name="Sports" value=Sports> Sports 
    <input type="checkbox" name="Books" value="Books"> Books 
	<input type="checkbox" name="Travelling" value="Travelling"> Travelling 
    </td>
    </tr>
    
    <tr>
	<td>Upload Picture:</td>
    <td>
	<input type="file" ></td>
    </tr>
    <tr>
    <td>
	<input type="checkbox"> I agree with the terms and conditions</td>
    <td>
	<input type="submit" value="save" name="Submission">
	<input type="reset" value="Clear All" name="Submission">
    <input type="submit" value="Register"name="Submission">
    </td>
    </tr>



</table>
</form>








</div>




</body>

</html>
    