<!DOCTYPE html>
<?php error_reporting(E_ALL);?>
<?php
session_start();
 ?>

<html lang="en">
<head>
<title>Kaspari Internet Security Solutions</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div class="header">
<img src="images/cyberlock.jpg" align="left" width="250" height="180">
<h2 align="center">Welcome
  <?php if (isset($_SESSION['username'])) {print $_SESSION['username']; } ?>
  To Kaspari Internet Security Solutions!</h2>
<p align ="center">Dedicated to hacking the hackers before they hack you!</p>
</div>

<div class="row">
  <div class="column" style="background-color:#000033;">
    <tr>
      <td valign="middle" class="submenu">Site Menu</td>
      <?php if (isset($_SESSION['auth']) && $_SESSION['auth'] >=5) { ?>
      <?php include ('includes/adminsecurity.php'); ?>
      <?php }  ?>
    <tr>
      <td align="center" valign="middle"><div align="left"><a href="index.php">Home</a></div></td>
    </tr>
    <tr>
      <td align="center" valign="middle"><div align="left"><a href="about.php">About</a></div></td>
    </tr>
    <tr>
      <td align="center" valign="middle"><div align="left"><a href="faqs.php">FAQs</a></div></td>
    </tr>

    <?php if (isset($_SESSION['auth']) && $_SESSION['auth'] >=1) { ?>
    <?php include ('includes/security.php'); ?>

    <?php } else {?>
      <tr>
        <td align="center" valign="middle"><div align="left"><a href="login.php">Login</a></div></td>
      </tr>
      <tr>
        <td align="center" valign="middle"><div align="left"><a href="join.php">Join</a></div></td>
      </tr>
    <?php } ?>



  </div>
  <div class="column" style="background-color:#003366">
  <h2 align="center">Hacking Tool of the Month!</h2>
  <p align="center">Become a member today! Click to join!<br>
    <img src="images/metasploit.jpg" align="center" width="300" height="150">
  </p>
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
