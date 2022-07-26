<html>
<head>
<title>Registration Form</title>
<style>
.error {color: #FF0000;}
</style>
</head>
<body style="background-color:#E8D3B9;">

<!-- TODO: Validation code to be written here -->
<?php
// Define variables and set to empty values
$nameErr = $dateErr = $emailErr = $websiteErr = $genderErr = $petErr = "";
$name = $date = $email = $website = $gender = $time = $pet = $comment = "";

// Do this when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // Check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["date"])) {
    $dateErr = "Date is required";
  } else {
    $date = $_POST["date"];
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

  if (!empty($_POST["website"])) {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (!empty($_POST["time"])) {
    $time = $_POST["time"];
  }

  if (empty($_POST["pet"])) {
    $petErr = "Favourite animal is required";
  } else {
    $pet = test_input($_POST["pet"]);
  }

  if (!empty($_POST["comment"])) {
    $comment = $_POST["comment"];
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h1>Abstract Registration Form Ltd.</h1>
<h2>Please input your details below:</h2>
Fields with a * are required<br>
<!-- Form starts here -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

<label for="name">Name: </label>
<input type="text" id="name" name="name" value="<?php echo $name;?>" placeholder="John Doe" autofocus>
<span class="error">* <?php echo $nameErr;?></span><br><br>

<label for="date">Date of Birth:</label>
<input type="date" id="date" name="date" value="<?php echo $date;?>" min="1900-01-01" max="2021-12-31">
<span class="error">* <?php echo $dateErr;?></span><br><br>

<label for="email">E-mail: </label>
<input type="email" id="email" name="email" value="<?php echo $email;?>" placeholder="slickjohn@email.com">
<span class="error">* <?php echo $emailErr;?></span><br><br>

<label for="website">Website: </label>
<input type="url" id="website" name="website" value="<?php echo $website;?>" placeholder="www.thejohnsite.com">
<span class="error"><?php echo $websiteErr;?></span><br><br>

<!-- TODO: Have a text box for Other & Validation for gender. Also save value upon validation. -->
Gender:
  <input type="radio" id="male" name="gender" value="male"><label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female"><label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="other"><label for="other">Other</label>
  <span class="error">* <?php echo $genderErr;?></span><br><br>

<label for="time">Favourite time of the day:</label>
<input type="time" id="time" name="time" value="<?php echo $time;?>"> <br><br>

<!-- TODO: Have the initial value be blank. Also save value upon validation. -->
<label for="pet">Cats or Dogs?</label>
<select id="pet" name="pet">
  <option value="Cats">Cats</option>
  <option value="Dogs">Dogs</option>
</select><span class="error">* <?php echo $petErr;?></span><br><br>

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

<!-- TODO: Add minimum and maximum values so textarea has a static size. -->
<label for="comment">Additional comments: </label>
<textarea name="comment" id="comment" value="<?php echo $comment;?>" rows="5" cols="40"> </textarea><br><br>

<input type="submit">
<!-- TODO: Remove in finished code -->
<input type="submit" formnovalidate="formnovalidate"
  value="Submit without validation">
</form>

<!-- TODO: If there are no errors, redirect to second page -->

</body>
</html>
