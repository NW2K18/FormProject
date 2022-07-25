<html>
<head>
<title>Registration Form</title>
<style>
.error {color: #FF0000;}
</style>
</head>
<body style="background-color:#E8D3B9;">
<h1>Abstract Registration Form Ltd.</h1>

<h2>Please input your details below:</h2>
<form action="Result.php" method="post">

<label for="name">Name: </label>
<input type="text" id="name" name="name"><br><br>

<label for="date">Date of Birth:</label>
<input type="date" id="date" name="date" min="1900-01-01" max="2021-12-31"><br><br>

<label for="email">E-mail: </label>
<input type="text" id="email" name="email"><br><br>

<label for="website">Website: </label>
<input type="text" id="website" name="website"><br><br>

<!-- TODO: Have a text box for Other-->
Gender:
  <input type="radio" id="male" name="gender" value="male"><label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female"><label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="other"><label for="other">Other</label><br><br>

<label for="time">Favourite time of the day:</label>
<input type="time" id="time" name="time"> <br><br>

<label for="pet">Cats or Dogs?</label>
<select id="pet" name="pet">
  <option value="Cats">Cats</option>
  <option value="Dogs">Dogs</option>
</select> <br><br>

<h2>From time to time, we may wish to contact you about
further menial registration forms
to fill out. If you do not wish to hear from us about these forms,
you may opt out by ticking the boxes below:</h2> <br>
<input type="checkbox" id="form1" name="register1" value="No">
<label for="form1"> I do not wish to hear from you regarding registration forms about mountain climbing activities</label><br>
<input type="checkbox" id="form2" name="register2" value="No">
<label for="form2"> I do not wish to hear from you regarding registration forms about new video games</label><br>
<input type="checkbox" id="form3" name="register3" value="No">
<label for="form3"> I do not wish to hear from you regarding registration forms about all-you-can-eat buffets</label><br><br>

<label for="comment">Additional comments: </label>
<textarea name="comment" id="comment" rows="5" cols="40"> </textarea><br><br>

<input type="submit">

</form>

</body>
</html>
