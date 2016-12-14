<!DOCTYPE HTML>  
<html>
<head>
<style>
 div {
    
    margin-center: 350px;

}
body { 
 background-image: url("webprog bg pic.jpg");
 background-attachment: fixed;
 
 }
 h1 {
    color: black;
	font-family: batang;
	font-size: 100px;
}
 h2 {
    color: black;
	font-family: batangche;
	font-size: 30px;
}
.error {color: #af111c;}

</style>
</head>
<body> 
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $name = $_POST['name'];
 $email = $_POST['email'];
 $gender = $_POST['gender'];
 $comment = $_POST['comment'];
 
 
 
 
 // variables for input data
 
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO users(first_name,last_name,user_city) VALUES('$name','$email','$gender','$comment')";
 $con=mysqli_query($con,$sql_query);
        
        // sql query for inserting data into database
 
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>CRUD</label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="wyatt.php">back to main page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="name" placeholder="Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="email" placeholder="Email" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="gender" placeholder="Gender" required /></td>
    </tr>
    <tr>
	<td><input type="text" name="comment" placeholder="Comment" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>