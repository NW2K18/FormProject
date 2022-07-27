<?php
session_start();
?>
<html>
<head>
<title>Thank you for registering!</title>
</head>
<body style="background-color:#E8D3B9;">
<h1>Abstract Registration Form Ltd.</h1>

<h2>Thank you for registering!</h2>
<?php //foreach ($_SESSION as $parm => $value)  echo "$parm = '$value'\n"; ?>
Welcome <?php echo $_SESSION["name"]; ?><br>
Your email address is: <?php echo $_SESSION["email"]; ?><br>
Your date of birth is: <?php echo $_SESSION["date"]; ?><br>
Your website is: <?php echo $_SESSION["website"]; ?><br>
Your gender is: <?php echo $_SESSION["gender"]; ?><br>
Your favourite time of the day is: <?php echo $_SESSION["time"]; ?><br>
You like <?php echo $_SESSION["pet"]; ?>!<br>
<!-- TODO: Output this data type more specifically. -->
You have opted into:<br>
<?php
if (isset($_SESSION["register1"]) && $_SESSION["register1"] == "No") {echo "";}
  else {echo "Forms about mountain climbing";}
  echo "<br>";
if (isset($_SESSION["register2"]) && $_SESSION["register2"] == "No") {echo "";}
  else {echo "Forms about new video games";}
  echo "<br>";
if (isset($_SESSION["register3"]) && $_SESSION["register3"] == "No") {echo "";}
  else {echo "Forms about all-you-can-eat buffets";}
  echo "<br>";
?>
<br>
Additional comments: <?php echo $_SESSION["comment"]; ?><br>

</body>
</html>

<?php
// Get rid of the session.
session_unset();
session_destroy();
?>
