<?php
$dblink = mysqli_connect("localhost", "root", "Selen.ak8")
or die("Can not connect to database server");
mysqli_select_db($dblink, "my_db") or die("Can not select database");
// Main program.
  $title = "Forms";
  starthtml($title);

  if (isset($_POST))	{  extract ($_POST);  }

  if (isset($btn1))
  { page2(); }
  else
  { page1(); }

  dispFormElements();

  // End part of HTML:
  print "</body>\n</html>";
// end of main.
//======================================
function starthtml($title)
{
  // Start part of HTML:
  print <<<_A_
	<!DOCTYPE html>
	<html lang="tr">
	<head>
	<title>$title</title>
	<meta charset="utf-8">
	<style>body {font-family: arial; font-size: 12pt;}</style>
	</head>

	<body>
	<h2>$title</h2>\n
_A_;
}
//======================================
// Output 1st page (form-1):
function page1()
{
  print <<<_A_
	<form action="p072.php" method="post">
	<table border="1" cellspacing="0" cellpadding="2">
	<tr><td>User Name:</td>
		<td><input type="text" name="name" size="40"></td></tr>
	<tr><td>Password: </td>
		<td><input type="password" name="pass" size="10"></td></tr>
	<tr><td colspan="2" align="center">
		<input type="LOGIN" name="btn1" value=" Next "></td></tr>
	</table>
	</form>\n
_A_;
} // end page1()
//======================================
// Output 2nd page:
function page2()
{
  extract($_POST);	// Creates variables for form elements
  //------------------------
} // end page2()
//======================================
// Display form elements:
function dispFormElements()
{
  if (isset($_POST))
  {
    print <<<_A_
	<hr><p>The form elements:</p>
	<table border="1" cellspacing="0" cellpadding="2">
	<tr><th>Element name</th><th>Element Value</th></tr>\n
_A_;
    foreach ($_POST as $pname => $pvalue)
    {
      print "\t<tr><td>$pname</td><td>$pvalue</td></tr>\n";
    }
    print "</table>\n";		// Close table tag.
  }
  else
  {
    print "<p>There are no form elements.</p>\n";
  }
} // end dispFormElements()
//======================================