<!DOCTYPE html>
<html>
<head>
<title> Registration page</title>
</head>
<body>
<h1>Registration Page</h1>

<form>
<table>
<tr><td>First Name</td>
<td><input type="text" name="firstname"></td></tr>
<tr><td>last Name</td>
<td><input type="text" name="lastname"></td></tr>
<tr><td> company</td>
<td><input type="text" name="company"></td></tr>

<tr>
<td>Adress1</td>
<td><input type="text" name="Adress1"></td></tr>
<td>Adress2</td>
<td><input type="text" name="Adress2"></td></tr>

<tr><td>city</td>
<td><input type="text" name="city"></td></tr>
<tr><td>state</td>
<td><input type="text" name="state"></td></tr>

<tr><td>Password</td>
<td><input type="password" name="password"></td></tr>

<tr><td>Confirm Password</td>
<td><input type="password" name="confirmpassword"></td></tr>

<tr>
<td>Gender</td>
<td><input type="radio" id="male" name="gender" value="male"></td>
<td><label for="male">Male</label></td>
<td><input type="radio" id="female" name="gender" value="female"></td>
<td><label for="female">Female</label></td>
<td><input type="radio" id="other" name="gender" value="other"></td>
<td><label for="other">Other</label></td>
</tr>

<tr><td>Date of birth:</td>
<td><input type="date" id="birthday" name="birthday"></td>
<td><br><br></td>
<td><input type="submit" value="submit"></td>
<td><input type="reset" value="reset"></td>
</table>
</form>


</body>

</html>

