<html>
<head>
<title>Registration Form</title>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<h1>Abstract Registration Form Ltd.</h1>

<h2>Please input your details below:</h2>
<form action="Result.php" method="post">
Name: <input type="text" name="name"><br><br>
<!-- Use a calender input type -->
Date of Birth: <input type="text" name="date"><br><br>
E-mail: <input type="text" name="email"><br><br>
Website: <input type="text" name="website"><br><br>
Gender:
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="other">Other<br><br>
Comment: <textarea name="comment" rows="5" cols="40"></textarea><br><br>
Cats or Dogs?
<input type="radio" name="pet" value="cats">Cats
<input type="radio" name="pet" value="dogs">Dogs<br><br>
<input type="submit">

</form>

</body>
</html>
