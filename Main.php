<?php
session_start();
?>
<html>
<head>
<title>Registration Form</title>
<link rel="stylesheet" href="FormStyle.css">
<style></style>
</head>
<body>

<?php
// Define variables and set to empty values
$nameErr = $dateErr = $emailErr = $websiteErr = $genderErr = $petErr = "";
$name = $date = $email = $website = $gender = $time = $pet = $comment = "";

// Do this when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $_SESSION = $_POST;

  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $_SESSION["name"] = $name = test_input($_POST["name"]);
    // Check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["date"])) {
    $dateErr = "Date is required";
  } else {
    $_SESSION["date"] = $date = $_POST["date"];
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $_SESSION["email"] = $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (!empty($_POST["website"])) {
    $_SESSION["website"] = $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $_SESSION["gender"] = $gender = test_input($_POST["gender"]);
  }

  if (!empty($_POST["time"])) {
    $_SESSION["time"] = $time = $_POST["time"];
  }

  if (empty($_POST["pet"])) {
    $petErr = "Favourite animal is required";
  } else {
    $_SESSION["pet"] = $pet = test_input($_POST["pet"]);
  }

  if (!empty($_POST["comment"])) {
    $_SESSION["comment"] = $comment = test_input($_POST["comment"]);
  }

  if ($nameErr == "" && $dateErr == "" && $emailErr == "" && $websiteErr == "" && $genderErr == "" && $petErr == "") {
   header("Location: Result.php");
   exit;
  }

  // TODO: Remove when not debugging.
  //header("Location: Result.php");
  //exit;

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h1>Abstract Registration Form Ltd.</h1>
<div class="center"><img src="catdog.png" alt="Cat and a dog."></div>
<h2>Please input your details below:</h2>
<div class="errormain">Fields with a * are required</div><br><br>
<!-- Form starts here -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

<label for="name">Name: </label>
<input type="text" id="name" name="name" value="<?php echo $name;?>" placeholder="John Doe" autofocus>
<span class="error">* <?php echo $nameErr;?></span><br><br>

<label for="date">Date of Birth:</label>
<input type="date" id="date" name="date" value="<?php echo $date;?>" min="1900-01-01" max="2021-12-31">
<span class="error">* <?php echo $dateErr;?></span><br><br>

<label for="email">E-mail: </label>
<input type="text" id="email" name="email" value="<?php echo $email;?>" placeholder="slickjohn@email.com">
<span class="error">* <?php echo $emailErr;?></span><br><br>

<label for="website">Website: </label>
<input type="text" id="website" name="website" value="<?php echo $website;?>" placeholder="www.thejohnsite.com">
<span class="error"><?php echo $websiteErr;?></span><br><br>

<!-- TODO: Have a text box for Other -->
Gender:
  <input type="radio" id="male" name="gender" value="male"
    <?php if (isset($gender) && $gender=="male") echo "checked";?>><label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female"
    <?php if (isset($gender) && $gender=="female") echo "checked";?>><label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="other"
  <?php if (isset($gender) && $gender=="other") echo "checked";?>><label for="other">Other</label>
  <span class="error">* <?php echo $genderErr;?></span><br><br>

<label for="time">Favourite time of the day:</label>
<input type="time" id="time" name="time" value="<?php echo $time;?>"> <br><br>

<label for="pet">Cats or Dogs?</label>
<select id="pet" name="pet">
  <option value=""></option>
  <option value="cat"
    <?php if (isset($pet) && $pet=="cat") echo "selected";?>>Cats</option>
  <option value="dog"
    <?php if (isset($pet) && $pet=="dog") echo "selected";?>>Dogs</option>
</select><span class="error"> * <?php echo $petErr;?></span><br><br>

<h2>From time to time, we may wish to contact you about
further mundane registration forms
to fill out. If you do not wish to hear from us about these forms,
you may opt out by ticking the boxes below:</h2> <br>
<input type="checkbox" id="form1" name="register1" value="No">
<label for="form1"> I do not wish to hear from you regarding registration forms about mountain climbing activities</label><br>
<input type="checkbox" id="form2" name="register2" value="No">
<label for="form2"> I do not wish to hear from you regarding registration forms about new video games</label><br>
<input type="checkbox" id="form3" name="register3" value="No">
<label for="form3"> I do not wish to hear from you regarding registration forms about all-you-can-eat buffets</label><br><br>

<label for="comment">Additional comments: </label>
<textarea name="comment" id="comment" rows="5" cols="40">
<?php echo $comment;?></textarea><br><br>

<input type="submit">
</form>

</body>
</html>
