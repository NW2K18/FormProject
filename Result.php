<html>
<head>
<title>Thank you for registering!</title>
</head>
<body style="background-color:#E8D3B9;">
<h1>Abstract Registration Form Ltd.</h1>

<h2>Thank you for registering!</h2>
<?php foreach ($_SESSION as $parm => $value)  echo "$parm = '$value'\n"; ?>
Welcome <?php echo $_SERVER["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>
Your date of birth is: <?php echo $_POST["date"]; ?><br>
Your website is: <?php echo $_POST["website"]; ?><br>
Your gender is: <?php echo $_POST["gender"]; ?><br>
Your favourite time of the day is: <?php echo $_POST["time"]; ?><br>
You like <?php echo $_POST["pet"]; ?>!<br>
<!-- TODO: Output this data type more specifically. -->
You have opted into:<br>
<?php
if (isset($_POST["register1"]) && $_POST["register1"] == "No") {echo "";}
  else {echo "Forms about mountain climbing";}
  echo "<br>";
if (isset($_POST["register2"]) && $_POST["register2"] == "No") {echo "";}
  else {echo "Forms about new video games";}
  echo "<br>";
if (isset($_POST["register3"]) && $_POST["register3"] == "No") {echo "";}
  else {echo "Forms about all-you-can-eat buffets";}
  echo "<br>";
?>
<br>
Additional comments: <?php echo $_POST["comment"]; ?><br>

</body>
</html>
