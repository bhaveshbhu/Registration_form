<?php
	define('INCLUDE_CHECK',1);
	require "functions.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Creating a Facebook-like Registration Form with jQuery</title>

<link rel="stylesheet" type="text/css" href="demo.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>


</head>

<body>

<div id="div-regForm">

<div class="form-title">Sign Up</div>

<form id="regForm" action="submit.php" method="post">

<table>
  <tbody>
  <tr>
    <td><label for="fname">First Name:</label></td>
    <td><div class="input-container"><input name="fname" id="fname" type="text" /></div></td>
  </tr>
  <tr>
    <td><label for="lname">Last Name:</label></td>
    <td><div class="input-container"><input name="lname" id="lname" type="text" /></div></td>
  </tr>
  <tr>
    <td><label for="email">Your Email:</label></td>
    <td><div class="input-container"><input name="email" id="email" type="text" /></div></td>
  </tr>
  <tr>
    <td><label for="pass">New Password:</label></td>
    <td><div class="input-container"><input name="pass" id="pass" type="password" /></div></td>
  </tr>
  

  <tr>
  <td>&nbsp;</td>
  <td><input type="submit" class="greenButton" value="Sign Up" /><img id="loading" src="img/ajax-loader.gif" alt="working.." />
</td>
  </tr>
  
  
  </tbody>
</table>

</form>

<div id="error">
&nbsp;
</div>

</div>

</body>
</html>
