<?php
include("setting.php");
session_start();
if(!isset($_SESSION['aid']))
{
	header("location:index.php");
}
// $aid=$_SESSION['aid'];
// $a=mysqli_query($set,"SELECT * FROM admin WHERE aid='$aid'");
// $b=mysqli_fetch_array($a);
// $name=$b['name'];
// $bn=$_POST['name'];
// $au=$_POST['auth'];
// if($bn!=NULL && $au!=NULL)

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Library Management System</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="banner">
<span class="head">Library Management System</span><br />
</div>
<br />

<div align="center">
<div id="wrapper">
    <?php
$result=mysqli_query($set,"SELECT * FROM books");
	if($result)
	{
		$rows= mysqli_num_rows($result);
	    echo " <b style='font-size:1.5rem;'>List of all Books in table</b> <br><br>";
	    echo "<table border='3px solid white'>";
	    while($row = mysqli_fetch_assoc($result)) 
	 {
		echo "<tr>";
		echo '<td>' . $row["name"] . '</td>';
		echo '<td>' . $row["email"] . '</td>';
		echo '<td>' . $row["number"]. '</td>';
        echo '<td>' . $row["foodname"] . '</td>';
        echo '<td>' . $row["address"] . '</td>';
		echo "</tr>";
     }
	echo "</table>";
	echo "Total Books $rows <br />";
	}
	else
	{
		$msg="No Book Avaible";
	}
    ?>
<br />
<br />

<span class="SubHead">Show All Books in Library</span>
<br />
<br />

<br />
<br />
<a href="adminhome.php" class="link">Go Back</a>
<br />
<br />

</div>
</div>
</body>
</html>