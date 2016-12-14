<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $Name = $_POST['Name'];
 $Nickname = $_POST['Nickname'];
 $Email = $_POST['Email'];
 $Phone_number = $_POST['Phone_number'];
 $Home_address = $_POST['Home_address'];
 $Gender = $_POST['Gender'];
 $Comments = $_POST['Comments'];
 // variables for input data
 // sql query for inserting data into database
 $sql_query = "INSERT INTO users(Name,Nickname,Email,Home_address,Gender,Phone_number,Comments) VALUES('$Name','$Nickname','$Email','$Home_address','$Gender','$Phone_number','%Comments')";
 // sql query for inserting data into database
 // sql query execution function
 if(mysqli_query($con,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Inserted Successfully ');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occurred');
  </script>
  <?php
 }
 // sql query execution function
}
?>
<!DOCTYPE>
<html>
<head>
<style>
<?php include 'style.css';?>
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Page :)</title>
</head>
<body>
<?php include 'links.php';?>
<center>

<div id="header">
 <div id="content2">
    <label>Contact me</label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="Name" placeholder="Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="Nickname" placeholder="Nickname" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="Email" placeholder="Email" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="Phone_number" placeholder="Phone Number" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="Home_address" placeholder="Home Address" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="Gender" placeholder="Gender" required /></td>
    </tr>
	<tr>
    <td><textarea type='text' name="Comments" placeholder="Comments" rows="5" cols="40"></textarea></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save" value="Submit"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>