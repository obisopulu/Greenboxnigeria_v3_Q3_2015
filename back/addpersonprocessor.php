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
<title>GreenBox || Admin +Person</title>
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
                                        Add Person
                                    </td>
	
</tr>
</table>
<table bgcolor="#444" align="center"><tr><td>
<!-- //////////////////////////////////////personStageName drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<div style="float:left;">	<form><select name="Person' Stage Name" style=" border:none; background-color:#555; color:#CCC; padding:5px">
							<option>Person' Stage Name</option>
<?php 
	$sqlpersonsT = 'SELECT DISTINCT personStageName FROM persons ORDER BY personStageName';
	$personsTResult = mysql_query($sqlpersonsT, $cxn)
		or die("result no work");
while($rowpersonsT=mysql_fetch_assoc($personsTResult))
	{extract($rowpersonsT);
			if ($personStageName != '')echo "<option value=''>$personStageName
			</option>";
	}
	echo"</select></form>";
?>
</div>
<!-- //////////////////////////////////////Music drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td><td>
<!-- //////////////////////////////////////personBirthName drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
	<div style="float:left;"><form><select name="personBirthName" style=" border:none; background-color:#555; color:#CCC; padding:5px">
							<option>personBirthName</option>
<?php 
	$sqlpersonsA = 'SELECT DISTINCT personBirthName FROM persons ORDER BY personBirthName';
	$personsAResult = mysql_query($sqlpersonsA, $cxn)
		or die("result no work");
while($rowpersonsA=mysql_fetch_assoc($personsAResult))
	{extract($rowpersonsA);
			if ($personBirthName != '')echo "<option value=''>$personBirthName</option>";
	}
	echo"</select></form>";
?>
</div>
<!-- //////////////////////////////////////personBirthName drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td><td>
<!-- //////////////////////////////////////personBirthName drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
	<div style="float:left;"><form><select name="$personBirthName" style=" border:none; background-color:#555; color:#CCC; padding:5px">
    							<option>Person' Birth Name</option>
<?php 
	$sqlpersonsAF = 'SELECT DISTINCT personBirthName FROM persons ORDER BY personBirthName';
	$personsAFResult = mysql_query($sqlpersonsAF, $cxn)
		or die("result no work");
while($rowpersonsAF=mysql_fetch_assoc($personsAFResult))
	{extract($rowpersonsAF);
			if ($personArtistFt != '')echo "<option value=''>$personBirthName</option>";
	}
	echo"</select></form>";
?>
</div>
<!-- //////////////////////////////////////personBirthName drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td><td>
<!-- //////////////////////////////////////personFanName drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
	<div style="float:left;"><form><select name="$personFanName" style=" border:none; background-color:#555; color:#CCC; padding:5px">
    							<option>Person' Fan Name</option>
<?php 
	$sqlpersonsAl = 'SELECT DISTINCT personFanName FROM persons ORDER BY personFanName';
	$personsAlResult = mysql_query($sqlpersonsAl, $cxn)
		or die("result no work");
while($rowpersonsAl=mysql_fetch_assoc($personsAlResult))
	{extract($rowpersonsAl);
			if ($personAlbum != '')echo "<option value=''>$personFanName</option>";
	}
	echo"</select></form>";
?>
</div>
<!-- //////////////////////////////////////personFanName drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td><td>
<!-- //////////////////////////////////////personGenre drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
	<div style="float:left;"><form><select name="$personGenre" style=" border:none; background-color:#555; color:#CCC; padding:5px">
    							<option>Person' Genre</option>
<?php 
	$sqlpersonsP = 'SELECT DISTINCT personGenre FROM persons ORDER BY personGenre';
	$personsPResult = mysql_query($sqlpersonsP, $cxn)
		or die("result no work");
while($rowpersonsP=mysql_fetch_assoc($personsPResult))
	{extract($rowpersonsP);
			if ($personGenre != '')echo "<option value=''>$personGenre</option>";
	}
	echo"</select></form>";
?>
</div>
<!-- //////////////////////////////////////personGenre drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td><td>
<!-- //////////////////////////////////////personBirthDay drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
	<div style="float:left;"><form><select name="$personBirthDay" style=" border:none; background-color:#555; color:#CCC; padding:5px">
    							<option>Person' Birth Day</option>
<?php 
	$sqlpersonsB = 'SELECT DISTINCT personBirthDay FROM persons ORDER BY personBirthDay';
	$personsBResult = mysql_query($sqlpersonsB, $cxn)
		or die("result no work");
while($rowpersonsB=mysql_fetch_assoc($personsBResult))
	{extract($rowpersonsB);
			if ($personBirthDay != '')echo "<option value=''>$personBirthDay</option>";
	}
	echo"</select></form>";
?>
</div>
<!-- //////////////////////////////////////personBirthDay drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td><td>
<!-- //////////////////////////////////////Type drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
	<div style="float:left;"><form><select name="$personPlaceOfOrigin" style=" border:none; background-color:#555; color:#CCC; padding:5px">
    							<option>person' Place Of Origin</option>
<?php 
	$sqlpersonsT = 'SELECT DISTINCT personPlaceOfOrigin FROM persons ORDER BY personPlaceOfOrigin';
	$personsTResult = mysql_query($sqlpersonsT, $cxn)
		or die("result no work");
while($rowpersonsT=mysql_fetch_assoc($personsTResult))
	{extract($rowpersonsT);
			if ($personPlaceOfOrigin != '')echo "<option value=''>$personPlaceOfOrigin</option>";
	}
	echo"</select></form>";
?>
</div>
<!-- //////////////////////////////////////personPlaceOfOrigin drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td><td>
<!-- //////////////////////////////////////personProfession drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
	<div style="float:left;"><form><select name="$personProfession" style=" border:none; background-color:#555; color:#CCC; padding:5px">
    							<option>Person's Profession</option>
<?php 
	$sqlpersonsG = 'SELECT DISTINCT personProfession FROM persons ORDER BY personProfession';
	$personsGResult = mysql_query($sqlpersonsG, $cxn)
		or die("result no work");
while($rowpersonsG=mysql_fetch_assoc($personsGResult))
	{extract($rowpersonsG);
			if ($personProfession != '')echo "<option value=''>$personProfession</option>";
	}
	echo"</select></form>";
?>
</div>
<!-- //////////////////////////////////////personProfession drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td><td>
<!-- //////////////////////////////////////Language drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
	<div style="float:left;"><form><select name="$personLabel" style=" border:none; background-color:#555; color:#CCC; padding:5px">
    							<option>Person' Label</option>
<?php 
	$sqlpersonsLg = 'SELECT DISTINCT personLabel FROM persons ORDER BY personLabel';
	$personsLgResult = mysql_query($sqlpersonsLg, $cxn)
		or die("result no work");
while($rowpersonsLg=mysql_fetch_assoc($personsLgResult))
	{extract($rowpersonsLg);
			if ($personLabel != '')echo "<option value=''>$personLabel</option>";
	}
	echo"</select></form>";
?>
</div>
<!-- //////////////////////////////////////personLabel drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td>
</tr>
</table>

<?php
if ($_POST['personStageName'] != '')
{
	/* set up array of field labels */ 
	$labels = array(
		"personStageName" => $_POST['personStageName'],
		"personBirthName" => $_POST['personBirthName'],
		"personArtistFt" => $_POST['personArtistFt'],
		"personFanName" => $_POST['personFanName'],
		"personGenre" => $_POST['personGenre'],
		"personBirthDay" => $_POST['personBirthDay'],
		"personBirthYear" => $_POST['personBirthYear'],
		"personPlaceOfOrigin" => $_POST['personPlaceOfOrigin'],
		"personProfession" => $_POST['personProfession'],
		"personCareerStartYear" => $_POST['personCareerStartYear'],
		"personLabel" => $_POST['personLabel'],
		"personAssociatedActs" => $_POST['personAssociatedActs'],
		"personLifeStory" => $_POST['personLifeStory']);

	foreach($_POST as $field => $value)
	{
	if(!ereg("^[A-Za-z0-9'(),./;:*!@_ -]{1,100}$",$value))
		{ 
			$bad_format_field .= $field . '<br/>';
		}
	}  

	if (strlen($bad_format_field) > 0)
		{
	echo 	'These fields contain characters that would result to an error when pulled out of the datagreenbox - '. $bad_format_field;
	echo"<form action='addpersonprocessor.php' enctype='multipart/form-data' method='post'>
	<table align='center' bgcolor='#444'><tr>
	<td style='padding:5px; font-size:12px; font-weight:bold'>person' Stage Name(50)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='personStageName' maxlength='50' value='{$_POST['personStageName']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>person' Birth Name(100)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='personBirthName' maxlength='100' value='{$_POST['personBirthName']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>person' Fan Name(50)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='personFanName' maxlength='50' value='{$_POST['personFanName']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>person' Genre(50)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='personGenre' maxlength='50' value='{$_POST['personGenre']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>person' Birth Day(5)<br/>
		<div  style='float:left;'><input required='required' size='5' type='text' name='personBirthDay' maxlength='5' value='{$_POST['personBirthDay']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>person' Birth Year(4)<br/>
		<div  style='float:left;'><input required='required' size='4' type='text' name='personBirthYear' maxlength='4' value='{$_POST['personBirthYear']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>person' Place Of Origin(100)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='personPlaceOfOrigin' maxlength='100' value='{$_POST['personPlaceOfOrigin']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>person' Profession(50)<br/>
		<div  style='float:left;'><input size='10' type='text' name='personProfession' maxlength='50' value='{$_POST['personProfession']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>person' Career Start Year(4)<br/>
		<div  style='float:left;'><input required='required' size='4' type='text' name='personCareerStartYear' maxlength='4' value='{$_POST['personCareerStartYear']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>person' Label(50)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='personLabel' maxlength='50' value='{$_POST['personLabel']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>person' Associated Acts(200)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='personAssociatedActs' maxlength='200' value='{$_POST['personAssociatedActs']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>personLifeStory(1000)<br/>
	<div  style='float:left;'><textarea name='personLifeStory' cols='10' rows='2'  required='required' value='{$_POST['personLifeStory']}' maxlength='1000' style='color:#444; background-color:#CCC; border:none; padding:5px'>spice this shit up</textarea></div>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>person' pic1<br/>
		<div  style='float:left;'><input type='hidden' name='MAX_FILE_SIZE' value='5123840'><input required='required' name='personPic1' value='' type='file' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>person' pic2<br/>
		<div  style='float:left;'><input required='required' name='personPic2' value='' type='file' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>person' pic3<br/>
		<div  style='float:left;'><input required='required' name='personPic3' value='' type='file' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
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
		$personPic1 = $_FILES['personPic1']['name'];
		$personPic2 = $_FILES['personPic2']['name'];
		$personPic3 = $_FILES['personPic3']['name'];
		move_uploaded_file($_FILES['personPic1']['tmp_name'], "personsimg\\"."{$_FILES['personPic1']['name']}");
		move_uploaded_file($_FILES['personPic2']['tmp_name'], "personsimg\\"."{$_FILES['personPic2']['name']}");
		move_uploaded_file($_FILES['personPic3']['tmp_name'], "personsimg\\"."{$_FILES['personPic3']['name']}");
		$query = "INSERT INTO  persons (  personID ,  personStageName , personBirthName ,  personFanName ,  personGenre ,  personBirthDay , personBirthYear ,  personPlaceOfOrigin ,  personProfession , personCareerStartYear ,  personLabel ,  personAssociatedActs , personLifeStory ,  personPic1 ,  personPic2 ,  personPic3 , dateUpdated) 
VALUES ( NULL,  '{$_POST['personStageName']}',  '{$_POST['personBirthName']}',  '{$_POST['personFanName']}',  '{$_POST['personGenre']}',  '{$_POST['personBirthDay']}',  '{$_POST['personBirthYear']}',  '{$_POST['personPlaceOfOrigin']}',  '{$_POST['personProfession']}',  '{$_POST['personCareerStartYear']}',  '{$_POST['personLabel']}',  '{$_POST['personAssociatedActs']}',  '{$_POST['personLifeStory']}',  '$personPic1',  '$personPic2', '$personPic3', '$f_today'
)";
$result = mysql_query($query, $cxn)
	or die("result no work 101");
	echo "<table align='center' width='700px'><tr><td align='center'><span style='font-size:20px;'><a href='bpeople.php'>click to view your upload</a></td></tr></table>"?>
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
echo"<form action='addpersonprocessor.php' enctype='multipart/form-data' method='post'>
	<table align='center' bgcolor='#444'><tr>
	<td style='padding:5px; font-size:12px; font-weight:bold'>person' Stage Name(50)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='personStageName' maxlength='50' value='Phyno' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>person' Birth Name(100)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='personBirthName' maxlength='100' value='Chibuzor OneThingLikeThat' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>person' Fan Name(50)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='personFanName' maxlength='50' value='Phynofino' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>person' Genre(50)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='personGenre' maxlength='50' value='Afro Rap' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>person' Birth Day(5)<br/>
		<div  style='float:left;'><input required='required' size='5' type='text' name='personBirthDay' maxlength='5' value='10/10' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>person' Birth Year(4)<br/>
		<div  style='float:left;'><input required='required' size='4' type='text' name='personBirthYear' maxlength='4' value='1985' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>person' Place Of Origin(100)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='personPlaceOfOrigin' maxlength='100' value='Somewhere, Anambra(dunno)' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>person' Profession(50)<br/>
		<div  style='float:left;'><input size='10' type='text' name='personProfession' maxlength='50' value='Artist' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>person' Career Start Year(4)<br/>
		<div  style='float:left;'><input required='required' size='4' type='text' name='personCareerStartYear' maxlength='4' value='2006' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>person' Label(50)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='personLabel' maxlength='50' value='Penthouse' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>person' Associated Acts(200)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='personAssociatedActs' maxlength='200' value='PSquare, Olamide, Wizkid, Stormrex, Timaya, M.I, and Nigga RAW' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>personLifeStory(1000)<br/>
	<div  style='float:left;'><textarea name='personLifeStory' cols='25' rows='2'  required='required' value='' maxlength='1000' style='color:#444; background-color:#CCC; border:none; padding:5px'>(hint: this space is resizable)Born and brought down then sick Bliss helped him and so on Afor na ur work b dis las las</textarea></div>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>person' pic1<br/>
		<div  style='float:left;'><input type='hidden' name='MAX_FILE_SIZE' value='5123840'><input required='required' name='personPic1' value='' type='file' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>person' pic2<br/>
		<div  style='float:left;'><input required='required' name='personPic2' value='' type='file' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>person' pic3<br/>
		<div  style='float:left;'><input required='required' name='personPic3' value='' type='file' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'  bgcolor='#444'>Add to Database<br/>
		<div  style='float:left;'><input name='upload' type='submit' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td>
	</tr></table>
	</form>";
echo"<table width='700px' align='center'><tr><td align='center' width='700px'>
	<div  style='float:left;'><textarea name='personLifeStory' cols='110' rows='10'  required='required' value='' maxlength='1000' style='color:#999; background-color:#444; border:none; padding:5px'  disabled='disabled>
	person' Stage Name(50): text maximum lenght is 50 (including space).<br/>
		person' Fan Name(50): the name the artist' fan call his ass.<br/>
        person' Genre(50): could be more than one (eg: Afro Rap and Afro pop) or even more.<br/>
        person' Profession(50): Eg: Artist, Beatmaker, DJ and Producer.
        person' Career Start Year(4): the year d nigga start work.
        person' Label(50): Artists primary label, the secondary label should go into 'personal life story'
        person' Associated Acts(200): the people this nigga has produced mixes with.
        personLifeStory(1000):the person story(including important events in this nigga' life (if any).
        person' pic: must be there for frontend professionalism, 170(width) *(by) 370(height) image size
</textarea></div>
</td></tr></table>";

}	
?>

</body>
</html>