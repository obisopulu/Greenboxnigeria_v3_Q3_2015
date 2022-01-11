<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreenBox</title>
<link href="new.css" rel="stylesheet" type="text/css" />
</head>
<a name="top"></a>
<body>
<?php
include('mainhead.inc')
?>
<header>

<div id="bodshad">
<table align="center">
<tr height="100px">
	<td width="40px">
		<img src="img/favi.png" id="imagerad" width="35px" height="35px" draggable="false" dropzone="link" data-icon="gear"/>
	</td>
</tr>
</table>
</div>
</header>
<table align="center"><tr><td id="toppad" width="680px" align="center">GreenBox</td></tr></table>
<center>THE NIGERIAN MUSIC INDUSTRY</center>
<table id="borBot" align="center">
<tr valign="middle" height="30px">
<td width="124px" align="center">About</td><td bgcolor="#CCCCCC" width="30px" align="center"><a class="dark" href="#">i</a></td>
</tr></table>
<table height="17px"><tr><td></td></tr></table>

<?php 
include("uzo.inc");
$cxn = mysql_connect($host,$user,$password);
if (!$cxn)
	die("e no connect o bros");
mysql_select_db($database, $cxn);
$query = 'SELECT * FROM songs ORDER BY songID LIMIT 5';

$result = mysql_query($query, $cxn)
	or die("result no work");

echo "<table align='center' id='cubes45' width='680px'><tr><td align='left'><span style='font-size:20px;'>New Music</td></tr><tr><td align='right'>";

while($row=mysql_fetch_assoc($result))
	{	
		echo "<b>{$row['songTitle']}</b>&nbsp; {$row['songArtist']}
				<a href='songs/{$row['songURL']}'><img src='img/download.png' width='11px' height='18px'/></a></br>";
	}

echo"</td></tr><tr><td align='right'><b><a href='music.php' style='display:compact;'><span style='color:#1f7044;'><b>more</b></span></a></b></td></tr></table>";

$query = 'SELECT * FROM activities ORDER BY activityDate DESC LIMIT 4';
$result3 = mysql_query($query, $cxn)
	or die("result no work");
echo"<br/><table align='center' id='cubes45' width='680px'>
<tr>
<td align='left'>
<span style='font-size:20px;'>Upcoming Activities</td>
</tr>
<tr>
<td align='center' style='padding-left:25px;'>";
while($row=mysql_fetch_assoc($result3))

	{extract($row);

		echo "<table align='center' width='150px' height='150px' style='float:left;'>
		<tr><td align='left'>
		<h1>";
		echo $activityDay;
		echo"<span style='color:#FFF;'>$activityMonth</span><br/></h1><b><span style='color:#1f7044;'>$activityName</span></b>
		</td></tr>
		<tr><td align='left'><span>"; echo substr_replace($activityInfo,'...',80); echo "<br/><a href='Activities.php#$activityDay$activityMonth$activityYear' style='display:compact; color:#1f7044;'>more</span></a></td></tr></table>";
	}
mysql_close($cxn);
?> 
</td>
</tr>
</table>

<table height="17px"><tr><td></td></tr></table>
<table width="100%" bgcolor="#CCC"><tr><td align="left">Renegade&reg;</td><td align="right">copyright2015 </td></tr></table>
</body>
</html>
