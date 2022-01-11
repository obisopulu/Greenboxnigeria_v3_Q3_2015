<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Music</title>
<link href="img/favi.png" rel="icon" type="image/x-icon"/>
<link href="new.css" rel="stylesheet" type="text/css" />
</head>
<body>

<?php
include('mainhead.inc');
echo"<table align='center' width='700px'><tr><td align='left'><span style='color:#1F7044; font-size:50px'>Music</td><td align='right'><a style='color:#1f7044;' href='songs.php'>All Music</a></td></tr></table>";
include("uzo.inc");
$cxn = mysql_connect($host,$user,$password);
if (!$cxn)
	die("e no connect o bros");
mysql_select_db($database, $cxn);
$query = 'SELECT * FROM songs ORDER BY rand() LIMIT 5';

$result = mysql_query($query, $cxn)
	or die("result no work");
echo "<table align='center' id='cubes45' width='700px'><tr><td align='left'><span style='font-size:20px;'>Shuffle</td></tr><tr><td align='right'>";

while($row=mysql_fetch_assoc($result))
	{	extract($row);
		echo "<b>{$row['songTitle']}</b>&nbsp; {$row['songArtist']}
				<a href='songs/{$row['songURL']}'><img src='img/download.png' width='11px' height='18px'/></a></br>";
	}

echo"</td></tr></table>";
	

echo"<br/>
<form action='tracks.php' method='post'>
<table align='center' id='cubes45' width='700px'>
<tr>
<td align='left'>
<span style='font-size:20px;'>Markers</span></td>

</tr>
<tr>
<td align='center' style='padding:20px;' colspan='2'>";
$artistQuery = 'SELECT DISTINCT songArtist FROM songs ORDER BY songArtist';
$ArtistResult = mysql_query($artistQuery, $cxn)
	or die("result no work");
		echo "<table align='center' width='140px' style='float:left;'>
		<tr><td align='left'>";
		echo "<b><span style='color:#1f7044;'>Artist</span></b></td></tr><tr>
		<td align='right'>";
while($row=mysql_fetch_assoc($ArtistResult))

	{extract($row);
		echo"<input type='submit' style='background:none; color:#999; border:none; cursor:pointer;' name='artist' value=";?> "<?php echo $songArtist ?> " <?php echo" /><br/><br/>";
	}
?> 
</td>
</tr>
</table>
</form>
<form action='tracks.php' method='post'>
<?php
$genreQuery = 'SELECT DISTINCT songGenre FROM songs ORDER BY songGenre';
$genreResult = mysql_query($genreQuery, $cxn)
	or die("result no work");
		echo "<table align='center' width='150px' style='float:left;'>
		<tr><td align='left'>";
		echo "<b><span style='color:#1f7044;'>&nbsp;&nbsp;Genre</span></b></td></tr><tr>
		<td align='right'>";
while($row=mysql_fetch_assoc($genreResult))

	{extract($row);
		echo"<input type='submit' style='background:none; color:#999; border:none; cursor:pointer;' name='genre' value="; ?> "<?php echo $songGenre ?> " <?php echo" /><br/><br/>";
	}
?> 
</td>
</tr>
</table>
</form>
<form action='tracks.php' method='post'>

<?php
$ProducerQuery = 'SELECT DISTINCT songProducer FROM songs ORDER BY songProducer';
$ProducerResult = mysql_query($ProducerQuery, $cxn)
	or die("result no work");
		echo "<table align='center' width='150px' style='float:left;'>
		<tr><td align='left'>";
		echo "<b><span style='color:#1f7044;'>&nbsp;&nbsp;Producer</span></b></td></tr><tr>
		<td align='right'>";
while($row=mysql_fetch_assoc($ProducerResult))

	{extract($row);
		echo"<input type='submit' style='background:none; color:#999; border:none; cursor:pointer;' name='producer' value="; ?> "<?php echo $songProducer ?> " <?php echo" /><br/><br/>";
	}
?> 
</td>
</tr>
</table>
</form>
<form action='tracks.php' method='post'>

<?php
$YearQuery = 'SELECT DISTINCT songYear FROM songs ORDER BY songYear';
$YearResult = mysql_query($YearQuery, $cxn)
	or die("result no work");
		echo "<table align='center' width='150px' style='float:left;'>
		<tr><td align='left'>";
		echo "<b><span style='color:#1f7044;'>&nbsp;&nbsp;Year</span></b></td></tr><tr>
		<td align='right'>";
while($row=mysql_fetch_assoc($YearResult))

	{extract($row);
		echo"<input type='submit' style='background:none; color:#999; border:none; cursor:pointer;' name='year' value="; ?> "<?php echo $songYear ?> " <?php echo" /><br/><br/>";
	}
mysql_close($cxn)
?> 
</td>
</tr>
</table>


</td>
</tr>
</table>
</form>
<table height="17px"><tr><td></td></tr></table>
<table width="100%" bgcolor="#CCC"><tr><td align="left">Renegade&reg;</td><td align="right">copyright2015 </td></tr></table>
</body>
</html>
