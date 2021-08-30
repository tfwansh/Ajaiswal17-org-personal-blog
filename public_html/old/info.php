<html>

<body>

<?php

$con = mysql_connect("sdb-g.hosting.stackcp.net","contact-form-data-3138354bba","?lL}?;^R^-ol");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("contact-form-data-3138354bba", $con);

 

$sql="INSERT INTO nametable (username, email, message)

VALUES

('$_POST[username]','$_POST[email]'),'$_POST[message]')";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

echo "1 record added";

 

mysql_close($con)

?>

</body>

</html>

 

 