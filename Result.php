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
<?php
echo "Your name is: " . $_SESSION["name"] . " <br>";
echo "Your email address is: " . $_SESSION["email"] . " <br>";
echo "Your date of birth is: " . $_SESSION["date"] . " <br>";
if ($_SESSION["website"] != "")
  echo "Your website is: " . $_SESSION["website"] . " <br>";
echo "Your gender is: " . $_SESSION["gender"] . " <br>";
if ($_SESSION["time"] != "")
  echo "Your favourite time of the day is: " . $_SESSION["time"] . " <br>";
echo "You like " . $_SESSION["pet"] . " <br>";

echo "You have opted into:<br>";

if (isset($_SESSION["register1"]) && $_SESSION["register1"] == "No") {echo "";}
  else {echo "Forms about mountain climbing"; echo "<br>";}
if (isset($_SESSION["register2"]) && $_SESSION["register2"] == "No") {echo "";}
  else {echo "Forms about new video games"; echo "<br>";}
if (isset($_SESSION["register3"]) && $_SESSION["register3"] == "No") {echo "";}
  else {echo "Forms about all-you-can-eat buffets"; echo "<br>";}

echo "<br>";

if ($_SESSION["comment"] != "")
  echo "Additional comments: " . $_SESSION["comment"] . " <br>";
?>

</body>
</html>

<?php
// Get rid of the session.
session_unset();
session_destroy();
?>
