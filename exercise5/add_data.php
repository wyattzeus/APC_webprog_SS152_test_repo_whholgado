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
 $sql_query = "INSERT INTO users(Name,Nickname,Email,Home_address,Gender,Phone_number,Comments) VALUES('$Name','$Nickname','$Email','$Home_address','$Gender','$Phone_number','$Comments')";
 // sql query execution function
 if(mysqli_query($con,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Inserted Successfully ');
  window.location.href='Register.php';
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

<!DOCTYPE HTML>  
<html>
<head>
<style>
<?php include 'style.css';?>
</style>
</head>
<body>  
<?php include 'links.php';?>
<br><br>
<center>
 <p><span class="error">* required field.</span></p>
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
   Name:<input type="text" name="Name" >
   <br><br>
   Nickname:<input type="text" name="Nickname" >
   <br><br>
   Email: <input type="text" name="Email">
   <br><br>
   Phonenumber: <input type="text" name="Phone_number">
   <br><br>
   Home Address: <input type="text" name="Home_address">
   <br><br>
   Comment: <textarea name="Comments" rows="5" cols="40"></textarea>
   <br><br>
   Gender:
   <input type="radio" name="Gender" <?php if (isset($Gender) && $Gender=="female") echo "checked";?> value="female">Female
   <input type="radio" name="Gender" <?php if (isset($Gender) && $Gender=="male") echo "checked";?> value="male">Male
   <span class="error">
   <br><br>
   <input type="submit" name="btnsave" value="Submit"></center> 
 </form>
 </center>
 
 </body>
 </html>