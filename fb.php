<?php
 $dbhost = "localhost";  
 $dbuser = "root";
 $dbpass = "";
 $db = "test";
 $conn = new mysqli($dbhost,$dbuser, $dbpass,$db) or die();
 $name=$_GET['name'];
 $email=$_GET['email'];
 $stars=$_GET['stars'];
 $comments=$_GET['comments'];
 $res = mysqli_query($conn,"insert into mpfinal
  values('$name','$email','$stars','$comments')");
$res1=mysqli_query($conn,"select * from mpfinal");
print '<body style="background-image:url(new-dark-grey-background_cr.jpg)"></body>';
print '<center><header style="font-weight:bold;font-size:30pt;margin-top:2px;color:orange;"><marquee behaviour="alternate" direction="left" scrollamount="25">THANK YOU FOR YOUR FEEDBACK</marquee></header>';
print '<center><table style="border-color:white;font-size:30;color:white;" cellspacing=2 cellpadding=3 width=100% border=3>';
print "<tr><th>Response</th><th>Name</th><th>E-mail</th><th>Stars</th><th>Comments</th>";
print "</tr>";
$i=1;
while($row = mysqli_fetch_array($res1))
{
print "<tr><td>$i</td><td>$row[0]</td><td>$row[1]</td>";
print "<td>$row[2]</td><td>$row[3]</td></tr>";
$i++;
}

   $conn -> close();
    
?>
