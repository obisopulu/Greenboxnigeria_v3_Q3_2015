<?php
include("uzo.inc");
$cxn = mysql_connect($host,$user,$password);
if (!$cxn)
	die("e no connect o bros");
mysql_select_db($database, $cxn);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreenBox || Admin +Music</title>
<link href="back.css" rel="stylesheet" type="text/css" />
<link href="../img/favi.png" rel="icon" type="image/x-icon"/>
</head>
<a name="top"></a>
<body>
<table align="center" width="800px" height="113px" >
<tr>
	<td align="left" width="25%">
		 <a href="../index.php"><<  Go Frontyard  <<</a><br/><a href="backyard.php"><<  Go Dashboard  <<</a>
	</td>
    <td width="50%" align="center">
		<img src="../img/favi.png" id="imagerad" width="35px" height="35px" draggable="false" dropzone="link" data-icon="gear"/>
	</td>
    <td align="left" width="25%" style="font-size:40px; font-weight:900; color:#CCC; padding:4px;">
                                        Add Music
                                    </td>
	
</tr>
</table>
<table bgcolor="#444" align="center"><tr><td>
<!-- //////////////////////////////////////Music drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<div style="float:left;">	<form><select name="songTitle" style=" border:none; background-color:#555; color:#CCC; padding:5px">
							<option>song Title</option>
<?php 
	$sqlsongsT = 'SELECT DISTINCT songTitle FROM songs ORDER BY songTitle';
	$songsTResult = mysql_query($sqlsongsT, $cxn)
		or die("result no work");
while($rowsongsT=mysql_fetch_assoc($songsTResult))
	{extract($rowsongsT);
			echo "<option value='Title'>$songTitle</option>";
	}
	echo"</select></form>";
?>
</div>
<!-- //////////////////////////////////////Music drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td><td>
<!-- //////////////////////////////////////Artist drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
	<div style="float:left;"><form><select name="songArtist" style=" border:none; background-color:#555; color:#CCC; padding:5px">
							<option>Song Artist</option>
<?php 
	$sqlsongsA = 'SELECT DISTINCT songArtist FROM songs ORDER BY songArtist';
	$songsAResult = mysql_query($sqlsongsA, $cxn)
		or die("result no work");
while($rowsongsA=mysql_fetch_assoc($songsAResult))
	{extract($rowsongsA);
			echo "<option value='Title'>$songArtist</option>";
	}
	echo"</select></form>";
?>
</div>
<!-- //////////////////////////////////////Artist drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td><td>
<!-- //////////////////////////////////////ArtistFT drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
	<div style="float:left;"><form><select name="$songArtistFt" style=" border:none; background-color:#555; color:#CCC; padding:5px">
    							<option>song Artist Featured</option>
<?php 
	$sqlsongsAF = 'SELECT DISTINCT songArtistFt FROM songs ORDER BY songArtistFt';
	$songsAFResult = mysql_query($sqlsongsAF, $cxn)
		or die("result no work");
while($rowsongsAF=mysql_fetch_assoc($songsAFResult))
	{extract($rowsongsAF);
			if ($songArtistFt != '')echo "<option value='ArtistFT'>$songArtistFt</option>";
	}
	echo"</select></form>";
?>
</div>
<!-- //////////////////////////////////////ArtistFT drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td><td>
<!-- //////////////////////////////////////Album drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
	<div style="float:left;"><form><select name="$songAlbum" style=" border:none; background-color:#555; color:#CCC; padding:5px">
    							<option>song Album</option>
<?php 
	$sqlsongsAl = 'SELECT DISTINCT songAlbum FROM songs ORDER BY songAlbum';
	$songsAlResult = mysql_query($sqlsongsAl, $cxn)
		or die("result no work");
while($rowsongsAl=mysql_fetch_assoc($songsAlResult))
	{extract($rowsongsAl);
			if ($songAlbum != '')echo "<option value='Album'>$songAlbum</option>";
	}
	echo"</select></form>";
?>
</div>
<!-- //////////////////////////////////////Album drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td><td>
<!-- //////////////////////////////////////Producer drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
	<div style="float:left;"><form><select name="$songProducer" style=" border:none; background-color:#555; color:#CCC; padding:5px">
    							<option>song Producer</option>
<?php 
	$sqlsongsP = 'SELECT DISTINCT songProducer FROM songs ORDER BY songProducer';
	$songsPResult = mysql_query($sqlsongsP, $cxn)
		or die("result no work");
while($rowsongsP=mysql_fetch_assoc($songsPResult))
	{extract($rowsongsP);
			if ($songProducer != '')echo "<option value='Album'>$songProducer</option>";
	}
	echo"</select></form>";
?>
</div>
<!-- //////////////////////////////////////Producer drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td><td>
<!-- //////////////////////////////////////Beatmaker drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
	<div style="float:left;"><form><select name="$songBeatmaker" style=" border:none; background-color:#555; color:#CCC; padding:5px">
    							<option>song Beatmaker</option>
<?php 
	$sqlsongsB = 'SELECT DISTINCT songBeatmaker FROM songs ORDER BY songBeatmaker';
	$songsBResult = mysql_query($sqlsongsB, $cxn)
		or die("result no work");
while($rowsongsB=mysql_fetch_assoc($songsBResult))
	{extract($rowsongsB);
			if ($songBeatmaker != '')echo "<option value='Album'>$songBeatmaker</option>";
	}
	echo"</select></form>";
?>
</div>
<!-- //////////////////////////////////////Beatmaker drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td><td>
<!-- //////////////////////////////////////Type drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
	<div style="float:left;"><form><select name="$songType" style=" border:none; background-color:#555; color:#CCC; padding:5px">
    							<option>song Format</option>
<?php 
	$sqlsongsT = 'SELECT DISTINCT songType FROM songs ORDER BY songType';
	$songsTResult = mysql_query($sqlsongsT, $cxn)
		or die("result no work");
while($rowsongsT=mysql_fetch_assoc($songsTResult))
	{extract($rowsongsT);
			if ($songType != '')echo "<option value='Album'>$songType</option>";
	}
	echo"</select></form>";
?>
</div>
<!-- //////////////////////////////////////Type drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td><td>
<!-- //////////////////////////////////////Genre drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
	<div style="float:left;"><form><select name="$songGenre" style=" border:none; background-color:#555; color:#CCC; padding:5px">
    							<option>song Genre</option>
<?php 
	$sqlsongsG = 'SELECT DISTINCT songGenre FROM songs ORDER BY songGenre';
	$songsGResult = mysql_query($sqlsongsG, $cxn)
		or die("result no work");
while($rowsongsG=mysql_fetch_assoc($songsGResult))
	{extract($rowsongsG);
			if ($songGenre != '')echo "<option value='Album'>$songGenre</option>";
	}
	echo"</select></form>";
?>
</div>
<!-- //////////////////////////////////////Genre drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td><td>
<!-- //////////////////////////////////////Language drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
	<div style="float:left;"><form><select name="$songLanguage" style=" border:none; background-color:#555; color:#CCC; padding:5px">
    							<option>song Language</option>
<?php 
	$sqlsongsLg = 'SELECT DISTINCT songLanguage FROM songs ORDER BY songLanguage';
	$songsLgResult = mysql_query($sqlsongsLg, $cxn)
		or die("result no work");
while($rowsongsLg=mysql_fetch_assoc($songsLgResult))
	{extract($rowsongsLg);
			if ($songLanguage != '')echo "<option value='Album'>$songLanguage</option>";
	}
	echo"</select></form>";
?>
</div>
<!-- //////////////////////////////////////Language drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td>
</tr>
</table>

<?php
if ($_POST['songTitle'] != '')
{
	/* set up array of field labels */ 
	$labels = array(
		"songTitle" => $_POST['songTitle'],
		"songArtist" => $_POST['songArtist'],
		"songArtistFt" => $_POST['songArtistFt'],
		"songAlbum" => $_POST['songAlbum'],
		"songProducer" => $_POST['songProducer'],
		"SongBeatmaker" => $_POST['SongBeatmaker'],
		"songLenght" => $_POST['songLenght'],
		"songSize" => $_POST['songSize'],
		"songBitrate" => $_POST['songBitrate'],
		"songGenre" => $_POST['songGenre'],
		"songYear" => $_POST['songYear'],
		"songLanguage" => $_POST['songLanguage'],
		"songRating" => $_POST['songRating']);

	foreach($_POST as $field => $value)
	{
	if(!ereg("^[A-Za-z0-9'(),.:;*!@_ -]{1,100}$",$value))
		{ 
			$bad_format_field .= $field . '<br/>';
		}
	}  

	if (strlen($bad_format_field) > 0)
		{
	echo 	'These fields contain characters that would result to an error when pulled out of the datagreenbox - '. $bad_format_field;
	echo"<form action='addmusicprocessor.php' enctype='multipart/form-data' method='post'>
	<table align='center' bgcolor='#444'><tr>
	<td style='padding:5px; font-size:12px; font-weight:bold'>SongTitle(50)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='songTitle' maxlength='50' value='{$_POST['songTitle']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>SongArtist(50)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='songArtist' maxlength='50' value='{$_POST['songArtist']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>SongArtistFt(100)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='songArtistFt' maxlength='50' value='{$_POST['songArtistFt']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>SongAlbum(50)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='songAlbum' maxlength='50' value='{$_POST['songAlbum']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>SongProducer(50)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='songProducer' maxlength='50' value='{$_POST['songProducer']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>SongBeatmaker(50)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='songBeatmaker' maxlength='50' value='{$_POST['songBeatmaker']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>SongLenght(4)<br/>
		<div  style='float:left;'><input required='required' size='4' type='text' name='songLenght' maxlength='6' value='{$_POST['songLenght']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>SongBitrate(4)<br/>
		<div  style='float:left;'><input size='3' type='text' name='songBitrate' maxlength='3' value='{$_POST['songBitrate']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>SongGenre(100)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='songGenre' maxlength='25' value='{$_POST['songGenre']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>SongYear(4)<br/>
		<div  style='float:left;'><input required='required' size='4' type='text' name='songYear' maxlength='4' value='{$_POST['songYear']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>SongLanguage(100)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='songLanguage' maxlength='50' value='{$_POST['songLanguage']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>SongRating(2)<br/>
		<div  style='float:left;'><input required='required' size='2' type='text' name='songRating' maxlength='2' value='{$_POST['songRating']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>SongfileUpload<br/>
		<div  style='float:left;'><input type='hidden' name='MAX_FILE_SIZE' value='5123840'><input required='required' name='musicFile' value='' type='file' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>ArtfileUpload<br/>
		<div  style='float:left;'><input required='required' name='artFile' type='file' value='' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'  bgcolor='#444'>Add to Database<br/>
		<div  style='float:left;'><input name='upload' type='submit' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td>
	</tr></table>
	</form>";
	}
	else
	{
		$today = time();
		$f_today = date("mdy",$today);
		echo $f_today;
		$songType = $_FILES['musicFile']['type'];
		$songSize = $_FILES['musicFile']['size'];
		move_uploaded_file($_FILES['musicFile']['tmp_name'], "songs\\"."{$_FILES['musicFile']['name']}");
		move_uploaded_file($_FILES['artFile']['tmp_name'], "img\\"."{$_FILES['artFile']['name']}");
		$artFile = $_FILES['artFile']['name'];
		$musicFile = $_FILES['musicFile']['name'];
		$query = "INSERT INTO  songs ( songID , songTitle , songArtist , songArtistFt , songAlbum , songArt , songProducer , songBeatmaker , songLenght , songType , songSize , songURL , songBitrate , songGenre , songYear , songLanguage , songRating, dateUpdated ) 
VALUES ('' , '{$_POST['songTitle']}' , '{$_POST['songArtist']}' , '{$_POST['songArtistFt']}' , '{$_POST['songAlbum']}' , '$artFile' , '{$_POST['songProducer']}' , '{$_POST['songBeatmaker']}' , '{$_POST['songLenght']}' , '$songType' , '$songSize' , '$musicFile' , '{$_POST['songBitrate']}' , '{$_POST['songGenre']}' , '{$_POST['songYear']}' , '{$_POST['songLanguage']}' , '{$_POST['songRating']}' ,'$f_today')";
$result = mysql_query($query, $cxn)
	or die("result no work 101");
	echo "<table align='center' width='700px'><tr><td align='center'><span style='font-size:20px;'><a href='bsongs.php'>click to confirm your upload</a></td></tr></table>"?>
	<table align="center" bgcolor="#444" width="800px">
                                <tr><form action="manage.php" method="post">
                                    <td align="left" width="100px" >
                                        <span align="center" style='padding:20px; font-weight:bolder'>Add</span>
                                        <br/>
                                        <x align="center"><input type="submit" name="add" value="music" style="margin-left:20px; cursor:pointer; border:none; background-color:#555; color:#CCC; padding:10px"/></x><br/>
                                        <x align="center"><input type="submit" name="add" value="person" style="margin-left:20px; cursor:pointer; border:none; background-color:#555; color:#CCC; padding:10px"/></x><br/>
                                        <x align="center"><input type="submit" name="add" value="label" style="margin-left:20px; cursor:pointer; border:none; background-color:#555; color:#CCC; padding:10px"/></x><br/>
                                        <x align="center"><input type="submit" name="add" value="activity" style="margin-left:20px; cursor:pointer; border:none; background-color:#555; color:#CCC; padding:10px"/></x>
                                    </td><td align="left" width="100px" >
                                        <span align="center" style='padding:20px; font-weight:bolder'>Edit</span>
                                        <br/>
                                        <x align="center"><input type="submit" name="edit" value="music" style="margin-left:20px; cursor:pointer; border:none; background-color:#555; color:#CCC; padding:10px"/></x><br/>
                                        <x align="center"><input type="submit" name="edit" value="person" style="margin-left:20px; cursor:pointer; border:none; background-color:#555; color:#CCC; padding:10px"/></x><br/>
                                        <x align="center"><input type="submit" name="edit" value="label" style="margin-left:20px; cursor:pointer; border:none; background-color:#555; color:#CCC; padding:10px"/></x><br/>
                                        <x align="center"><input type="submit" name="edit" value="activity" style="margin-left:20px; cursor:pointer; border:none; background-color:#555; color:#CCC; padding:10px"/></x>
                                    </td><td align="left" width="100px" >
                                        <span align="center" style='padding:20px; font-weight:bolder'>Delete</span>
                                        <br/>
                                        <x align="center"><input type="submit" name="delete" value="music" style="margin-left:20px; cursor:pointer; border:none; background-color:#555; color:#CCC; padding:10px"/></x><br/>
                                        <x align="center"><input type="submit" name="delete" value="person" style="margin-left:20px; cursor:pointer; border:none; background-color:#555; color:#CCC; padding:10px"/></x><br/>
                                        <x align="center"><input type="submit" name="delete" value="label" style="margin-left:20px; cursor:pointer; border:none; background-color:#555; color:#CCC; padding:10px"/></x><br/>
                                        <x align="center"><input type="submit" name="delete" value="activity" style="margin-left:20px; cursor:pointer; border:none; background-color:#555; color:#CCC; padding:10px"/></x>
                                    </td></form>
                                    </tr>
                        </table>

<table width="100%" bgcolor="#444"><tr><td align="left">Renegade&reg;</td><td align="right">copyright2015 </td></tr></table><?php 
	}
	
}
else
{
echo"<form action='addmusicprocessor.php' enctype='multipart/form-data' method='post'>
	<table align='center' bgcolor='#444'><tr>
	<td style='padding:5px; font-size:12px; font-weight:bold'>SongTitle(50)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='songTitle' maxlength='50' value='{$_POST['songTitle']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>SongArtist(50)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='songArtist' maxlength='50' value='{$_POST['songArtist']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>SongArtistFt(100)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='songArtistFt' maxlength='50' value='{$_POST['songArtistFt']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>SongAlbum(50)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='songAlbum' maxlength='50' value='{$_POST['songAlbum']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>SongProducer(50)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='songProducer' maxlength='50' value='{$_POST['songProducer']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>SongBeatmaker(50)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='songBeatmaker' maxlength='50' value='{$_POST['songBeatmaker']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>SongLenght(4)<br/>
		<div  style='float:left;'><input required='required' size='4' type='text' name='songLenght' maxlength='6' value='{$_POST['songLenght']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>SongBitrate(4)<br/>
		<div  style='float:left;'><input size='3' type='text' name='songBitrate' maxlength='3' value='{$_POST['songBitrate']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>SongGenre(100)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='songGenre' maxlength='25' value='{$_POST['songGenre']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>SongYear(4)<br/>
		<div  style='float:left;'><input required='required' size='4' type='text' name='songYear' maxlength='4' value='{$_POST['songYear']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>SongLanguage(100)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='songLanguage' maxlength='50' value='{$_POST['songLanguage']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>SongRating(2)<br/>
		<div  style='float:left;'><input required='required' size='2' type='text' name='songRating' maxlength='2' value='{$_POST['songRating']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>SongfileUpload<br/>
		<div  style='float:left;'><input type='hidden' name='MAX_FILE_SIZE' value='5123840'><input required='required' name='musicFile' value='' type='file' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>ArtfileUpload<br/>
		<div  style='float:left;'><input required='required' name='artFile' type='file' value='' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'  bgcolor='#444'>Add to Database<br/>
		<div  style='float:left;'><input name='upload' type='submit' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td>
	</tr></table>
	</form>";
}	
?>
<table align='center' width='700px'><tr><td align='center'>

</td></tr></table>


</body>
</html>