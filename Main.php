<html>
<head>
<title>Registration Form</title>
<style>
.error {color: #FF0000;}
</style>
</head>
<body style="background-color:#E8D3B9;">

<!-- TODO: Validation code to be written here -->


<h1>Abstract Registration Form Ltd.</h1>
<h2>Please input your details below:</h2>
Fields with a * are required<br>
<!-- Form starts here -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

<label for="name">Name: </label>
<input type="text" id="name" name="name" placeholder="John Doe"
required autofocus>*<br><br>

<label for="date">Date of Birth:</label>
<input type="date" id="date" name="date" min="1900-01-01" max="2021-12-31"
required>*<br><br>

<label for="email">E-mail: </label>
<input type="email" id="email" name="email" placeholder="slickjohn@email.com"
required>*<br><br>

<label for="website">Website: </label>
<input type="url" id="website" name="website" placeholder="www.thejohnsite.com"
><br><br>

<!-- TODO: Have a text box for Other & Validation for gender-->
Gender:
  <input type="radio" id="male" name="gender" value="male"><label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female"><label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="other"><label for="other">Other</label>
  *<br><br>

<label for="time">Favourite time of the day:</label>
<input type="time" id="time" name="time"> <br><br>

<label for="pet">Cats or Dogs?</label>
<select id="pet" name="pet">
  <option value="Cats">Cats</option>
  <option value="Dogs">Dogs</option>
</select>* <br><br>

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
<textarea name="comment" id="comment" rows="5" cols="40"> </textarea><br><br>

<input type="submit">
<!-- TODO: Remove in finished code -->
<input type="submit" formnovalidate="formnovalidate"
  value="Submit without validation">
</form>

<!-- TODO: If there are no errors, redirect to second page -->

</body>
</html>
