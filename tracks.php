<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Music</title>
<link href="new.css" rel="stylesheet" type="text/css" />
<link href="img/favi.png" rel="icon" type="image/x-icon"/>
<style type="text/css">
.artistname{ font-size:40px; color:#1F7044; padding-top:45px;}
.artistgenre{ padding-bottom:45px;}
a:active{text-decoration:none; color:#1F7044;}
.greenbox{ color:#1F7044; font-size:14px;}
td.one{padding-top:25px; padding-bottom:25px;}
.bottompad{padding:16px;background-color:#CCCCCC; width:145px;}
</style>
</head>

<body>
<?php
include('mainhead.inc');
include("uzo.inc");
$cxn = mysql_connect($host,$user,$password);
if (!$cxn)
	die("e no connect o bros");
mysql_select_db($database, $cxn);
if ($_POST['artist'] != '')
	{
		$query = "SELECT * FROM songs WHERE songArtist=\"{$_POST['artist']}\" LIMIT 50";
		echo"<table align='center' width='700px'><tr><td align='left'><span style='color:#1F7044; font-size:50px'>{$_POST['artist']}</td></tr></table>";
		$result = mysql_query($query, $cxn)
			or die("result no work");
while($row=mysql_fetch_assoc($result))
		{extract($row);
		?>
		  
		<table align="center" width='700' style="background-color:#DDD; padding:		10px;">
		<tr>
    	<td width="10%" rowspan="">
        <img align="middle" src=""."songsimg\\"."img\<?php echo $songArt?>" height="60" width="60px"/>
    	</td>
    	<td width="50%">
    	<?php echo "<x style='font-size:18px; color:#1f7044;'><b>$songTitle</b></x>&nbsp;&nbsp;<br/>"; 	
			if ($songArtistFt != '')
				{echo "ft &nbsp;&nbsp; $songArtistFt";} ?>
		<br/><?php echo $songAlbum ?>
    	</td>
	    <td width="20%">
    	<?php echo "<b>$songGenre</b><br/>$songYear" ?>
	    </td>
        <td width="15%">
        <?php $x = round($songLenght/60); $y = $songLenght%60; $z = number_format($songSize);
		if ($y >10)
			 {echo "<b>$x".":"."$y</b><br/>$z"."kb";}
        else
			 {echo "<b>$x".":"."0"."$y</b><br/>$z"."kb";}
		?>
	    </td>
        <td width="15%">
    	<?php echo "<a href='songs/{$row['songURL']}'><img src='img/download.png' width='11px' height='18px'/></a>" ?>
	    </td>
    	</tr>

		</table><br/>
<?php }} ?> 

<?php
if ($_POST['genre'] != '')
	{
		$query = "SELECT * FROM songs WHERE songGenre=\"{$_POST['genre']}\" LIMIT 50";
		$result = mysql_query($query, $cxn)
			or die("result no work");
echo"<table align='center' width='700px'><tr><td align='left'><span style='color:#1F7044; font-size:50px'>{$_POST['genre']}</td></tr></table>";
while($row=mysql_fetch_assoc($result))
		{extract($row);
		?>
		  
		<table align="center" width='700' style="background-color:#DDD; padding:		10px;">
		<tr>
    	<td width="10%" rowspan="">
        <img align="middle" src="img\<?php echo $songArt?>" height="60" width="60px"/>
    	</td>
    	<td width="50%">
    	<?php echo "<x style='font-size:18px; color:#1f7044;'><b>$songTitle</b></x>&nbsp;&nbsp;<br/>$songArtist&nbsp;&nbsp;"; 	
			if ($songArtistFt != '')
				{echo "ft &nbsp;&nbsp; $songArtistFt";} ?>
		<br/><?php echo $songAlbum ?>
    	</td>
	    <td width="20%">
    	<?php echo "<b>$songGenre</b><br/>$songYear" ?>
	    </td>
        <td width="15%">
        <?php $x = round($songLenght/60); $y = $songLenght%60; $z = number_format($songSize);
		if ($y >10)
			 {echo "<b>$x".":"."$y</b><br/>$z"."kb";}
        else
			 {echo "<b>$x".":"."0"."$y</b><br/>$z"."kb";}
		?>
	    </td>
        <td width="15%">
    	<?php echo "<a href='songs/{$row['songURL']}'><img src='img/download.png' width='11px' height='18px'/></a>" ?>
	    </td>
    	</tr>

		</table><br/>
<?php }} ?>  



<?php
if ($_POST['producer'] != '')
	{
		$query = "SELECT * FROM songs WHERE songProducer=\"{$_POST['producer']}\" LIMIT 50";
		$result = mysql_query($query, $cxn)
			or die("result no work");
echo"<table align='center' width='700px'><tr><td align='left'><span style='color:#1F7044; font-size:50px'>{$_POST['producer']}</td></tr></table>";
while($row=mysql_fetch_assoc($result))
		{extract($row);
		?>
		  
		<table align="center" width='700' style="background-color:#DDD; padding:		10px;">
		<tr>
    	<td width="10%" rowspan="">
        <img align="middle" src="img\<?php echo $songArt?>" height="60" width="60px"/>
    	</td>
    	<td width="50%">
    	<?php echo "<x style='font-size:18px; color:#1f7044;'><b>$songTitle</b></x>&nbsp;&nbsp;<br/>$songArtist&nbsp;&nbsp;"; 	
			if ($songArtistFt != '')
				{echo "ft &nbsp;&nbsp; $songArtistFt";} ?>
		<br/><?php echo $songAlbum ?>
    	</td>
	    <td width="20%">
    	<?php echo "<b>$songGenre</b><br/>$songYear" ?>
	    </td>
        <td width="15%">
        <?php $x = round($songLenght/60); $y = $songLenght%60; $z = number_format($songSize);
		if ($y >10)
			 {echo "<b>$x".":"."$y</b><br/>$z"."kb";}
        else
			 {echo "<b>$x".":"."0"."$y</b><br/>$z"."kb";}
		?>
	    </td>
        <td width="15%">
    	<?php echo "<a href='songs/{$row['songURL']}'><img src='img/download.png' width='11px' height='18px'/></a>" ?>
	    </td>
    	</tr>

		</table><br/>
<?php }} ?> 



<?php
if ($_POST['year'] != '')
	{
		$query = "SELECT * FROM songs WHERE songYear=\"{$_POST['year']}\" LIMIT 50";
		$result = mysql_query($query, $cxn)
			or die("result no work");
echo"<table align='center' width='700px'><tr><td align='left'><span style='color:#1F7044; font-size:50px'>{$_POST['year']}</td></tr></table>";
while($row=mysql_fetch_assoc($result))
		{extract($row);
		?>
		  
		<table align="center" width='700' style="background-color:#DDD; padding:		10px;">
		<tr>
    	<td width="10%" rowspan="">
        <img align="middle" src="img\<?php echo $songArt?>" height="60" width="60px"/>
    	</td>
    	<td width="50%">
    	<?php echo "<x style='font-size:18px; color:#1f7044;'><b>$songTitle</b></x>&nbsp;&nbsp;<br/>$songArtist&nbsp;&nbsp;"; 	
			if ($songArtistFt != '')
				{echo "ft &nbsp;&nbsp; $songArtistFt";} ?>
		<br/><?php echo $songAlbum ?>
    	</td>
	    <td width="20%">
    	<?php echo "<b>$songGenre</b><br/>$songYear" ?>
	    </td>
        <td width="15%">
        <?php $x = round($songLenght/60); $y = $songLenght%60; $z = number_format($songSize);
		if ($y >10)
			 {echo "<b>$x".":"."$y</b><br/>$z"."kb";}
        else
			 {echo "<b>$x".":"."0"."$y</b><br/>$z"."kb";}
		?>
	    </td>
        <td width="15%">
    	<?php echo "<a href='songs/{$row['songURL']}'><img src='img/download.png' width='11px' height='18px'/></a>" ?>
	    </td>
    	</tr>

		</table><br/>
<?php }} ?>        
<?php include('mainfooter.inc')?>
</body>
</html>