
<?php if (isset($_SESSION['auth']) && $_SESSION['auth'] >=1) {?>
<tr>
  <td align="center" valign="middle"><div align="left"><a href="membertools.php">Members-Only Tools</a></div></td>
</tr>
<tr>
  <td align="center" valign="middle"><div align="left"><a href="insidernews.php">Exclusive News</a></div></td>
</tr>
<tr>
  <td align="center" valign="middle"><div align="left"><a href="logoff.php">Log Out</a></div></td>
</tr>
<?php } else {?>
<tr>
  <td align="center" valign="middle"><div align="left"><a href="login.php">Login</a></div></td>
</tr>
<tr>
  <td align="center" valign="middle"><div align="left"><a href="join.php">Join</a></div></td>
</tr>
<?php } ?>
