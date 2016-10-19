<!DOCTYPE HTML>  
<html>
<head>
<style>
 div {
    
    margin-left: 350px;

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
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $nicknameErr = $cellphonenumberErr = "";
$name = $email = $gender = $comment = $nickname = $homeaddress = $cellphonenumber = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9 ]*$/",$name)) {
      $nameErr = "letters and numbers only"; 
    }
  }
  
  if (empty($_POST["nickname"])) {
    $nicknameErr = "nickname is required";
  } else {
    $nickname = test_input($_POST["nickname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$nickname)) {
      $nicknameErr = "Only letters allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
  
  if (empty($_POST["homeaddress"])) {
    $homeaddress = "";
  } else {
    $homeaddress = test_input($_POST["homeaddress"]);
  }
 
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
 
  if (empty($_POST["cellphonenumber"])) {
    $cellphonenumberErr = "Name is required";
  } else {
    $cellphonenumber = test_input($_POST["cellphonenumber"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9 ]*$/",$cellphonenumber)) {
      $cellphonenumberErr = "only numbers are allowed"; 
    }
  }
  
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<h1><center><br><br>MY HOME PAGE</center></h1>
<h2><center><br><br><br><br><br><br><br><br>Enter the following information</center></h2>
<p><center><span class="error">* required field.</span></center></p>
<div><form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Nickname: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="nickname" value="<?php echo $nickname;?>">
  <span class="error">* <?php echo $nicknameErr;?></span>
  <br><br>
  E-mail: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Home address: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="homeaddress" value="<?php echo $homeaddress;?>">
  <br><br>
  Gender: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* 
  <?php echo $genderErr;?></span>
  <br><br>
  Cell phone number: <input type="text" name="cellphonenumber" value="<?php echo $cellphonenumber;?>">
  <span class="error">* <?php echo $cellphonenumberErr;?></span>
  <br><br>
  Comment: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <textarea name="comment" rows="3" cols="22"><?php echo $comment;?></textarea>
  <br><br>
  </div>
  <center><input type="submit" name="submit" value="Submit">
</form>
<h2>Your Input:</h2></center>
<div style="margin-left:350px">
<?php
echo "Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo $name;
echo "<br>";
echo "Nickname:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo $nickname;
echo "<br>";
echo "Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo $email;
echo "<br>";
echo "Home Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo $homeaddress;
echo "<br>";
echo "Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo $gender;
echo "<br>";
echo "Cell phone number:&nbsp;&nbsp;";
echo $cellphonenumber;
echo "<br>";
echo "Comment:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo $comment;
echo "<br><br>";


?>
</div>
<center><input type="button" name="b5" value="About Me" onclick="location.href='webprog5.html'">
</center>
</body>
</html>