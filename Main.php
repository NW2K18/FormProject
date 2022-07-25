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

<label for="name">Name: </label>
<input type="text" id="name" name="name"><br><br>

<!-- Use a calender input type -->
<label for="date">Date of Birth: </label>
<input type="text" id="date" name="date"><br><br>

<label for="email">E-mail: </label>
<input type="text" id="email" name="email"><br><br>

<label for="website">Website: </label>
<input type="text" id="website" name="website"><br><br>

<!-- Have a text box for Other-->
Gender:
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="other">Other<br><br>

<label for="comment">Comment: </label>
<textarea name="comment" id="comment" rows="5" cols="40"> </textarea><br><br>

<!-- Drop down box -->
Cats or Dogs?
<input type="radio" name="pet" value="Cats">Cats
<input type="radio" name="pet" value="Dogs">Dogs
<input type="radio" name="pet" value="Neither">Neither<br><br>

<!-- Checkboxes -->
<h2>From time to time, we may wish to contact you about
further menial registration forms
to fill in. if you do not wish to hear from us about these forms,
you may opt out by ticking the boxes below:</h2> <br>


<input type="submit">

</form>

</body>
</html>
