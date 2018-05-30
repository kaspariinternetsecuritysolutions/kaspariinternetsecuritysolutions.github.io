<!DOCTYPE html>
<html lang="en">
<head>
<title>Kaspari Internet Security Solutions</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script Language="JavaScript">
<!--
function Validator(theForm)
{
var alertsay = "";
if (theForm.UserName.value == "")
{
alert("You must enter an Username.");
theForm.UserName.focus();
return (false);
}
if (theForm.UserName.value.length < 5)
{
alert("Please enter at least 5 characters in the \"UserName\" field.");
theForm.UserName.focus();
return (false);
}

var checkOK = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
var checkStr = theForm.UserName.value;
var allValid = true;
for (i = 0;  i < checkStr.length;  i++)
{
ch = checkStr.charAt(i);
for (j = 0;  j < checkOK.length;  j++)
if (ch == checkOK.charAt(j))
break;
if (j == checkOK.length)
{
allValid = false;
break;
}
}
if (!allValid)
{
alert("Please enter only letter and numeric characters in the \"UserName\" field.");
theForm.UserName.focus();
return (false);
}

// require at least 5 characters in the password field
if (theForm.Password.value.length < 5)
{
alert("Please enter at least 5 characters in the \"Password\" field.");
theForm.Password.focus();
return (false);
}

// check if both password fields are the same
if (theForm.Password.value != theForm.cword.value)
{
	alert("The two passwords do not match.");
	theForm.cword.focus();
	return (false);
}

// check if Email field is blank
if (theForm.Email.value == "")
{
alert("Please enter a value for the \"Email\" field.");
theForm.Email.focus();
return (false);
}


// test if valid Email address, must have @ and .
var checkEmail = "@.";
var checkStr = theForm.Email.value;
var EmailValid = false;
var EmailAt = false;
var EmailPeriod = false;
for (i = 0;  i < checkStr.length;  i++)
{
ch = checkStr.charAt(i);
for (j = 0;  j < checkEmail.length;  j++)
{
if (ch == checkEmail.charAt(j) && ch == "@")
EmailAt = true;
if (ch == checkEmail.charAt(j) && ch == ".")
EmailPeriod = true;
	  if (EmailAt && EmailPeriod)
		break;
	  if (j == checkEmail.length)
		break;
	}
	// if both the @ and . were in the string
if (EmailAt && EmailPeriod)
{
		EmailValid = true
		break;
	}
}
if (!EmailValid)
{
alert("Please enter a valid Email address");
theForm.Email.focus();

return (false);
}



return (true);




}
//--></script>

</head>
<body>

<div class="header">
<img src="images/cyberlock.jpg" align="left" width="250" height="180">
<h2 align="center">Welcome To Kaspari Internet Security Solutions!</h2>
<p align ="center">Dedicated to hacking the hackers before they hack you!</p>
</div>

<div class="row">
  <div class="column" style="background-color:#000033;">
    <tr>
      <td valign="middle" class="submenu">Site Menu</td>
    <tr>
      <td align="center" valign="middle"><div align="left"><a href="index.php">Home</a></div></td>
    </tr>
    <tr>
      <td align="center" valign="middle"><div align="left"><a href="about.php">About</a></div></td>
    </tr>
    <tr>
      <td align="center" valign="middle"><div align="left"><a href="faqs.php">FAQs</a></div></td>
    </tr>
    <tr>
      <td align="center" valign="middle"><div align="left"><a href="join.php">Join</a></div></td>
    </tr>
    <tr>
      <td align="center" valign="middle"><div align="left"><a href="login.php">Login</a></div></td>
    </tr>
  </div>
  <div class="column" style="background-color:#003366">
  <h2 align="center">Sign up for free tutorials!</h2>
    <form action="Log In" method="post" onSubmit="return Validator(this)">
      <fieldset>
        <legend>Sign Up</legend>
        <p>
          <label for="UserName">Username:</label>
          <input type="text" id="UserName" name="UserName">
        </p>
        <p>
          <label for="Password">Password:</label>
          <input type="Password" id="Password" name="Password">
        </p>
        <p>
          <label for="cword">Confirm Password:</label>
          <input type="Password" id="cword" name="cword">
        </p>
        <p>
          <label for="Email">Email Address:</label>
          <input type="Email" id="Email" name="Email">
        </p>
				<p>
					<label for="news">Check this box to receive our monthly email!</label>
					<input type="checkbox" name="news" id="news" checked>
				</p>
				<p>
					<input type="submit" value="Submit">
					<input type="reset" value="Clear">
				</p>
      </fieldset>
    </form>
  </div>
  <div class="column" style="background-color:#000033;">Popular Links
<p><a href="https://www.hackthissite.org/">Hack This Site!</a></p>
<p><a href="https://www.kali.org/">Kali Linux</a></p>
<p><a href="https://backbox.org/">Backbox Linux</a></p>
<p><a href="https://www.parrotsec.org/">Parrot Security</a></p>
  </div>
</div>

<div class="footer">
  <p>Footer</p>
  <div align="right"><font color="#999999" size="1"><strong>4/18/2018</strong></font></div>
</div>

</body>
</html>
