<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Hotel Info</title>
<link rel="stylesheet" href="../css/bootstrap.
min.css">
<link rel="stylesheet" href="../css/info.css">
</head>
<body>
<?php
include_once ("functions.php");
if(isset($_GET['hotel'])){
$hotel=$_GET['hotel'];
connect();
$sel='select * f rom hotels where id='.$hotel;
$res=mysql_query($sel);
$row=mysql_fetch_array($res,MYSQL_NUM);
$hname=$row[1];
$hstars=$row[4];
$hcost=$row[5];
$hinfo=$row[6];
mysql_free_result($res);
echo '<h2 class="text-uppercase textcenter">'.$hname.'</h2>';
echo '<div class="row"><div class="col-md-6 textcenter">';
connect();
$sel='select imagepath from images where
ho telid='.$hotel;
$res=mysql_query($sel);
echo '<span class="label label-info">Watch our
pictures</span>';
echo'<ul id="gallery">';
$i=0;
while($row=mysql_fetch_array($res,MYSQL_NUM)){
echo ' <li><img src="../'.$row[0].'"></li>';
}
mysql_free_result($res);
echo '</ul>';
for ($i=0; $i<$hstars; $i++)
{
echo '<image src="../images/star.png" alt="star">';
}
?>
    </body>
</html>
