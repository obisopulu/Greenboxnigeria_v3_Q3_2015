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
<title>GreenBox || Admin +Activity</title>
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
                                        Add Activity
                                    </td>
	
</tr>
</table>
<table bgcolor="#444" align="center"><tr><td>
<!-- //////////////////////////////////////activity Name drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<div style="float:left;">	<form><select name="activity Name" style=" border:none; background-color:#555; color:#CCC; padding:5px">
							<option>Activity Name</option>
<?php 
	$sqlactivitiesT = 'SELECT DISTINCT activityName FROM activities ORDER BY activityName';
	$activitiesTResult = mysql_query($sqlactivitiesT, $cxn)
		or die("result no work");
while($rowactivitiesT=mysql_fetch_assoc($activitiesTResult))
	{extract($rowactivitiesT);
			if ($activityName != '')echo "<option value=''>$activityName
			</option>";
	}
	echo"</select></form>";
?>
</div>
<!-- //////////////////////////////////////activityName drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td><td>
<!-- //////////////////////////////////////activityInfo drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
	<div style="float:left;"><form><select name="activity Day" style=" border:none; background-color:#555; color:#CCC; padding:5px">
							<option>Activity Day</option>
<?php 
	$sqlactivitiesA = 'SELECT DISTINCT activityDay FROM activities ORDER BY activityDay';
	$activitiesAResult = mysql_query($sqlactivitiesA, $cxn)
		or die("result no work");
while($rowactivitiesA=mysql_fetch_assoc($activitiesAResult))
	{extract($rowactivitiesA);
			if ($activityDay != '')echo "<option value=''>$activityDay</option>";
	}
	echo"</select></form>";
?>
</div>
<!-- //////////////////////////////////////activityDay drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td><td>
<!-- //////////////////////////////////////activityMonth drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
	<div style="float:left;"><form><select name="$activityMonth" style=" border:none; background-color:#555; color:#CCC; padding:5px">
    							<option>Activity Month</option>
<?php 
	$sqlactivitiesAF = 'SELECT DISTINCT activityMonth FROM activities ORDER BY activityMonth';
	$activitiesAFResult = mysql_query($sqlactivitiesAF, $cxn)
		or die("result no work");
while($rowactivitiesAF=mysql_fetch_assoc($activitiesAFResult))
	{extract($rowactivitiesAF);
			if ($activityMonth != '')echo "<option value=''>$activityMonth</option>";
	}
	echo"</select></form>";
?>
</div>
<!-- //////////////////////////////////////activityMonth drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td><td>
<!-- //////////////////////////////////////activityYear drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
	<div style="float:left;"><form><select name="$activityYear" style=" border:none; background-color:#555; color:#CCC; padding:5px">
    							<option>Activity Year</option>
<?php 
	$sqlactivitiesAl = 'SELECT DISTINCT activityYear FROM activities ORDER BY activityYear';
	$activitiesAlResult = mysql_query($sqlactivitiesAl, $cxn)
		or die("result no work");
while($rowactivitiesAl=mysql_fetch_assoc($activitiesAlResult))
	{extract($rowactivitiesAl);
			if ($activityYear != '')echo "<option value=''>$activityYear</option>";
	}
	echo"</select></form>";
?>
</div>
<!-- //////////////////////////////////////activityYear drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td>
</tr>
</table>

<?php
if ($_POST['activityName'] != '')
{
	/* set up array of field activities */ 
	$activities = array(
	"activityName" => $_POST['activityName'],
	"activityInfo" => $_POST['activityInfo'],
	"activityDay" => $_POST['activityDay'],
	"activityMonth" => $_POST['activityMonth'],
	"activityYear" => $_POST['activityYear']
	);
	foreach($_POST as $field => $value)
	{
	if(!ereg("^[A-Za-z0-9'(),./;:*!@_ -]{1,100}$",$value))
		{ 
			$bad_format_field .= $field . '<br/>';
		}
	}  

	if (strlen($bad_format_field) > 0)
		{
	echo 	'These fields contain characters that would result to an error when pulled out of the Greenbox database - '. $bad_format_field;
	echo"<form action='addactivityprocessor.php' enctype='multipart/form-data' method='post'>
	<table align='center' bgcolor='#444'><tr>
	<td style='padding:5px; font-size:12px; font-weight:bold'>Activity Name(100)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='activityName' maxlength='100' value='{$_POST['activityName']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>Activity Day(2)<br/>
		<div  style='float:left;'><input size='2' type='text' name='activityDay' maxlength='2' value='{$_POST['activityDay']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>Activity Month(2)<br/>
		<div  style='float:left;'><input size='2' type='text' name='activityMonth' maxlength='2' value='{$_POST['activityMonth']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>Activity Year(2)<br/>
		<div  style='float:left;'><input size='2' type='text' name='activityYear' maxlength='2' value='{$_POST['activityYear']}' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>label' History(1000)<br/>
		<div  style='float:left;'><textarea name='activityInfo' cols='10' rows='2'  required='required' value='{$_POST['activityInfo']}' maxlength='1000' style='color:#444; background-color:#CCC; border:none; padding:5px'>make this shit History</textarea></div></td><td style='padding:5px; font-size:12px; font-weight:bold'>Activity Pic<br/>
		<div  style='float:left;'><input type='hidden' name='MAX_FILE_SIZE' value='5123840'><input required='required' name='activityPic' value='' type='file' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'  bgcolor='#444'>Add to Database<br/>
		<div  style='float:left;'><input name='upload' type='submit' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td>
	</tr></table>
	</form>";
	}
	else
	{
		$today = time();                   //stores today’s date 
		$f_today = date("mdy",$today);
		echo $f_today;
		$labelPic1 = $_FILES['labelPic']['name'];
		move_uploaded_file($_FILES['labelPic']['tmp_name'], "activitiesimg\\"."{$_FILES['labelPic']['name']}");
		$query = "INSERT INTO  activities (  labelID ,  labelName ,  labelPic ,  labelOwner , labelIntro ,  labelHistory ,  labelAccolades ,  labelArtists , labelProducers , dateUpdated) 
VALUES (
NULL ,  '{$_POST['labelName']}',  '$labelPic1',  '{$_POST['labelOwner']}',  '{$_POST['labelIntro']}',  '{$_POST['labelHistory']}',  '{$_POST['labelAccolades']}',  '{$_POST['labelArtists']}',  '{$_POST['labelProducers']}', '$f_today;'
)";
$result = mysql_query($query, $cxn)
	or die("result no work 101");
	echo "<table align='center' width='700px'><tr><td align='center'><span style='font-size:20px;'><a href='bactivities.php'>click to view your upload</a></td></tr></table>"?>
	<table align="center" bgcolor="#444" width="800px">
                                <tr><form action="manage.php" method="post">
                                    <td align="left" width="100px" >
                                        <span align="center" style='padding:20px; font-weight:bolder'>Add</span>
                                        <br/>
                                        <x align="center"><input type="submit" name="add" value="music" style="margin-left:20px; cursor:pointer; border:none; background-color:#555; color:#CCC; padding:10px"/></x><br/>
                                        <x align="center"><input type="submit" name="add" value="label" style="margin-left:20px; cursor:pointer; border:none; background-color:#555; color:#CCC; padding:10px"/></x><br/>
                                        <x align="center"><input type="submit" name="add" value="label" style="margin-left:20px; cursor:pointer; border:none; background-color:#555; color:#CCC; padding:10px"/></x><br/>
                                        <x align="center"><input type="submit" name="add" value="activity" style="margin-left:20px; cursor:pointer; border:none; background-color:#555; color:#CCC; padding:10px"/></x>
                                    </td><td align="left" width="100px" >
                                        <span align="center" style='padding:20px; font-weight:bolder'>Edit</span>
                                        <br/>
                                        <x align="center"><input type="submit" name="edit" value="music" style="margin-left:20px; cursor:pointer; border:none; background-color:#555; color:#CCC; padding:10px"/></x><br/>
                                        <x align="center"><input type="submit" name="edit" value="label" style="margin-left:20px; cursor:pointer; border:none; background-color:#555; color:#CCC; padding:10px"/></x><br/>
                                        <x align="center"><input type="submit" name="edit" value="label" style="margin-left:20px; cursor:pointer; border:none; background-color:#555; color:#CCC; padding:10px"/></x><br/>
                                        <x align="center"><input type="submit" name="edit" value="activity" style="margin-left:20px; cursor:pointer; border:none; background-color:#555; color:#CCC; padding:10px"/></x>
                                    </td><td align="left" width="100px" >
                                        <span align="center" style='padding:20px; font-weight:bolder'>Delete</span>
                                        <br/>
                                        <x align="center"><input type="submit" name="delete" value="music" style="margin-left:20px; cursor:pointer; border:none; background-color:#555; color:#CCC; padding:10px"/></x><br/>
                                        <x align="center"><input type="submit" name="delete" value="label" style="margin-left:20px; cursor:pointer; border:none; background-color:#555; color:#CCC; padding:10px"/></x><br/>
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
echo"<form action='addactivityprocessor.php' enctype='multipart/form-data' method='post'>
	<table align='center' bgcolor='#444'><tr>
	<td style='padding:5px; font-size:12px; font-weight:bold'>Activity Name(100)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='activityName' maxlength='100' value='Greenbox Launch' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>Activity Day(2)<br/>
		<div  style='float:left;'><input size='2' type='text' name='activityDay' maxlength='2' value='20' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>Activity Month(2)<br/>
		<div  style='float:left;'><input size='2' type='text' name='activityMonth' maxlength='2' value='09' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>Activity Year(2)<br/>
		<div  style='float:left;'><input size='2' type='text' name='activityYear' maxlength='2' value='15' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>label' History(1000)<br/>
		<div  style='float:left;'><textarea name='activityInfo' cols='10' rows='2'  required='required' value='{$_POST['activityInfo']}' maxlength='1000' style='color:#444; background-color:#CCC; border:none; padding:5px'>make this shit History</textarea></div></td><td style='padding:5px; font-size:12px; font-weight:bold'>Activity Pic<br/>
		<div  style='float:left;'><input type='hidden' name='MAX_FILE_SIZE' value='5123840'><input required='required' name='activityPic' value='' type='file' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'  bgcolor='#444'>Add to Database<br/>
		<div  style='float:left;'><input name='upload' type='submit' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td>
	</tr></table>
	</form>";
	
echo"<table width='700px' align='center'><tr><td align='center' width='700px'>
	<div  style='float:left;'><textarea name='labelLifeStory' cols='110' rows='10'  required='required' value='' maxlength='1000' style='color:#999; background-color:#444; border:none; padding:5px'  disabled='disabled>
		Activity Name(100): text maximum lenght is 100 (including space).<br/>
        Activity Info(1000): the activity in details
        Activity Day(2): the day od the activity. in the format (09, 03, 01 or 25)but it must be of lenght 2(xx)
        Activity Month(2): the month od the activity. in the format (09, 03, 01 or 12)but it must be of lenght 2(xx)
        Activity Year(2): the year od the activity. in the format (09, 03, 01 or 25)but it must be of lenght 2(xx)
</textarea></div>
</td></tr></table>";

}	
?>

</body>
</html>