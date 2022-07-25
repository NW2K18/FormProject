<html>
<head>
<title>Thank you for registering!</title>
</head>
<body style="background-color:#E8D3B9;">
<h1>Abstract Registration Form Ltd.</h1>

<h2>Thank you for registering!</h2>
Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>
Your date of birth is: <?php echo $_POST["date"]; ?><br>
Your website is: <?php echo $_POST["website"]; ?><br>
Your gender is: <?php echo $_POST["gender"]; ?><br>
Your favourite time of the day is: <?php echo $_POST["time"]; ?><br>
You like <?php echo $_POST["pet"]; ?>!<br>
<!-- TODO: Output this data type more specifically. -->
You have opted into:
<?php echo $_POST["register"]; ?><br>

Additional comments: <?php echo $_POST["comment"]; ?><br>

</body>
</html>
