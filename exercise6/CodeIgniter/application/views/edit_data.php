<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysqli_query($con,$sql_query);
 $fetched_row=mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
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
 // sql query for update data into database
 $sql_query = "UPDATE users SET Name='$Name',Nickname='$Nickname',Email='$Email',Phone_number='$Phone_number',Home_address='$Home_address',Gender='$Gender',Comments='$Comments' WHERE user_id=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysqli_query($con,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<?php include 'links.php'; ?>
<center>

<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="Name" placeholder="Name" value="<?php echo $fetched_row['Name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="Nickname" placeholder="Nickname" value="<?php echo $fetched_row['Nickname']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="Email" placeholder="Email" value="<?php echo $fetched_row['Email']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="Phone_number" placeholder="Phone number" value="<?php echo $fetched_row['Phone_number']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="Home_address" placeholder="Home address" value="<?php echo $fetched_row['Home_address']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="Gender" placeholder="Gender" value="<?php echo $fetched_row['Gender']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="Comments" placeholder="Comments" value="<?php echo $fetched_row['Comments']; ?>" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>